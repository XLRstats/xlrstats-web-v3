<?php
/**
 * XLRstats : Real Time Player Stats (http://www.xlrstats.com)
 * (CC) BY-NC-SA 2005-2013, Mark Weirath, Özgür Uysal
 *
 * Licensed under the Creative Commons BY-NC-SA 3.0 License
 * Redistributions of files must retain the above copyright notice.
 *
 * @link          http://www.xlrstats.com
 * @license       Creative Commons BY-NC-SA 3.0 License (http://creativecommons.org/licenses/by-nc-sa/3.0/)
 * @package       app.Controller
 * @since         XLRstats v3.0
 * @version       0.1
 */

class MapStatsController extends AppController {
	/**
	 * @var array
	 */
	public $uses = array('MapStat', 'PlayerMap');
	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array(
		'RequestHandler',
		'DataTable',
		'Paginator',
	);
	/**
	 * Helpers
	 *
	 * @var array
	 */
	public $helpers = array('Html', 'Form', 'Js');

	//-------------------------------------------------------------------

	/**
	 * Displays a list of maps
	 */
	public function index() {
		$topKillMaps = $this->getTopMaps('kills', 5);
		$this->set('topKillMaps', $topKillMaps);
		$topTeamKillMaps = $this->getTopMaps('teamkills', 5);
		$this->set('topTeamKillMaps', $topTeamKillMaps);
		$topSuicideMaps = $this->getTopMaps('suicides', 5);
		$this->set('topSuicideMaps', $topSuicideMaps);
	}

	//-------------------------------------------------------------------

	/**
	 * Queries player maps and pass data to view file app/View/MapStats/json/maps_json.ctp
	 * to be processed by dataTables.
	 *
	 * Sample data returned:
	 * Array
	 * (
	 *      [sEcho] => 1
	 *      [iTotalRecords] => 2
	 *      [iTotalDisplayRecords] => 2
	 *      [aaData] => Array
	 *          (
	 *              [0] => Array
	 *                  (
	 *                      [0] => 1            // Map ID
	 *                      [1] => MP_Subway    // Map name
	 *                      [2] => 7144         // Kills
	 *                      [3] => 213          // Deaths
	 *                      [4] => 45           // Team Kills
	 *                  )
	 *              [1] => Array
	 *                  (
	 *                      [0] => 2
	 *                      [1] => MP_001
	 *                      [2] => 17772
	 *                      [3] => 314
	 *                      [4] => 141
	 *                  )
	 *          )
	 *  )
	 *
	 * @return mixed
	 */
	public function mapStatsJson () {

		$this->paginate = array(
			'fields' => array (
				'MapStat.name',
				'MapStat.kills',
				'MapStat.teamkills',
				'MapStat.suicides',
				'MapStat.id',
			)
		);

		$data = $this->DataTable->getResponse('MapStat');

		//Add a dummy value to the beginning of each map data array. We will modify it in view file as position numbers.
		for($i=0; $i<count($data['aaData']); $i++) {
			array_unshift($data['aaData'][$i], 'pos#');
		}

		if ($this->request->is('requested')) {
			return $data;
		} else {
			$this->set('mapStats', $data);
		}
		//pr($data);
	}

	//-------------------------------------------------------------------

	/**
	 * Displays statistics of a specific map
	 * @param null $mapID
	 * @internal param null $id
	 * @return void
	 */
	public function view ($mapID = null) {

		$this->MapStat->id = $mapID;
		$mapData = $this->MapStat->read();

		$this->PlayerMap->Behaviors->attach('Containable');
		$this->PlayerMap->contain(array('PlayerStat', 'PlayerStat.Player'));

		$conditions = array(
			'PlayerMap.map_id' => $mapID,
			'PlayerStat.hide' => 0,
		);

		$playerData = $this->PlayerMap->find('all', array(
			'conditions' => $conditions,
			'order' => 'PlayerMap.kills DESC',
			'limit' => 10,
		));

		if ($this->request->is('requested')) {
			return array($mapData);
		}
		else {
			$this->set('mapData', $mapData);
			$this->set('playerData', $playerData);
		}
		//pr($mapData);
		//pr($playerData);
	}


	//-------------------------------------------------------------------

	/**
	 * Returns and array of top maps for the selected action.
	 *
	 * @param string $action Accepted values are 'kills | teamkills | suicides'. Default is 'kills'
	 * @param int $mapCount number of maps to be returned. Default is 5
	 * @return array
	 */
	public function getTopMaps($action = 'kills', $mapCount = 5) {

		$topMaps = $this->MapStat->find('all', array(
				'limit' => $mapCount,
				'order' => 'MapStat.' . $action . ' desc',
				'contain' => false,
			)
		);
		//pr($topMaps);

		$_topMaps = array();
		foreach ($topMaps as $map) {
			if($map['MapStat'][$action] > 0) {
				$_topMaps[$map['MapStat']['name']] = $map['MapStat'][$action];
			}
		}

		$totalActions = $this->MapStat->find('all', array(
			'fields' => array(
				'SUM(' . $action . ') as totals'
			),
			'contain' => false,
		));
		$other = $totalActions[0][0]['totals'] - array_sum($_topMaps);
		if($other > 0) {
			$_topMaps['Other'] = $other;
		}
		//pr($totalActions);
		//pr($_topMaps);

		return $_topMaps;
	}

}