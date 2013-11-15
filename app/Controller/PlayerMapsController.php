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

class PlayerMapsController extends AppController {

	/**
	 * Helpers
	 *
	 * @var array
	 */
	public $helpers = array('Js' => array('Jquery'));

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
	 * Models
	 * @var array
	 */
	public $uses = array(
		'PlayerStat',
		'PlayerMap'
	);

	//-------------------------------------------------------------------

	/**
	 * Displays player's maps via dataTables.
	 *
	 * @param int $playerID is passed to the dataTable script's "sAjaxSource".
	 */
	public function view($playerID = null) {
		$this->set('playerID', $playerID);
		$this->layout = 'ajax';

		$topKillMaps = $this->getPlayerTopMaps($playerID, 'kills', 5);
		$this->set('topKillMaps', $topKillMaps);
		$topDeathMaps = $this->getPlayerTopMaps($playerID, 'deaths', 5);
		$this->set('topDeathMaps', $topDeathMaps);
		$topTeamKillMaps = $this->getPlayerTopMaps($playerID, 'teamkills', 5);
		$this->set('topTeamKillMaps', $topTeamKillMaps);
		$topTeamDeathMaps = $this->getPlayerTopMaps($playerID, 'teamdeaths', 5);
		$this->set('topTeamDeathMaps', $topTeamDeathMaps);
		$topSuicideMaps = $this->getPlayerTopMaps($playerID, 'suicides', 5);
		$this->set('topSuicideMaps', $topSuicideMaps);
	}

	//-------------------------------------------------------------------

	/**
	 * Queries player maps and pass data to view file json/player_maps_json.ctp
	 * to be processed by dataTables.
	 *
	 * Sample data returned:
	 * Array
	 * (
	 * 		[sEcho] => 1
	 * 		[iTotalRecords] => 3777
	 * 		[iTotalDisplayRecords] => 17
	 * 		[aaData] => Array
	 * 			(
	 * 				[0] => Array
	 * 					(
	 * 						[0] => pos#		//position number
	 *  					[1] => MP_001	//map name
	 * 						[2] => 314		//kills
	 * 						[3] => 165		//deaths
	 * 						[4] => 4		//teamkills
	 * 						[5] => 1		//teamdeaths
	 * 						[6] => 3		//suicides
	 * 						[7] => 19		//map id
	 * 					)
	 * 			)
	 * )
	 *
	 * @param null $playerID player id
	 * @return mixed
	 */
	public function playerMapsJson ($playerID = null) {

		$conditions = array(
			'PlayerMap.player_id' => $playerID
		);

		$this->paginate = array(
			'fields' => array (
				'MapStat.name',
				'PlayerMap.kills',
				'PlayerMap.deaths',
				'PlayerMap.teamkills',
				'PlayerMap.teamdeaths',
				'PlayerMap.suicides',
				'PlayerMap.map_id',
			),
			'conditions' => $conditions,
		);

		$data = $this->DataTable->getResponse('PlayerMap');

		//Add a dummy value to the beginning of each player weapon data array. We will modify it in view file as position numbers.
		for($i=0; $i<count($data['aaData']); $i++) {
			array_unshift($data['aaData'][$i], 'pos#');
		}
		//pr($data);

		if ($this->request->is('requested')) {
			return $data;
		} else {
			$this->set('playerMaps', $data);
		}

	}

	//-------------------------------------------------------------------

	/**
	 * Returns and array of top player maps for the selected action.
	 *
	 * @param null $playerID
	 * @param string $action Accepted values are 'kills | deaths | teamkills | teamdeaths | suicides'. Default is 'kills'
	 * @param int $mapCount number of weapons to be returned. Default is 5
	 * @return array
	 */
	public function getPlayerTopMaps($playerID = null, $action = 'kills', $mapCount = 5) {

		$playerData = $this->PlayerStat->find('first', array(
				'conditions' => array (
					'PlayerStat.id' => $playerID
				)
			)
		);
		$playerTotalAction = $playerData['PlayerStat'][$action];

		$topMaps = $this->PlayerMap->find('all', array(
				'conditions' => array(
					'PlayerMap.player_id' => $playerID,
				),
				'limit' => $mapCount,
				'order' => 'PlayerMap.' . $action . ' desc'
			)
		);

		$playerTopMaps = array();
		foreach ($topMaps as $map) {
			if($map['PlayerMap'][$action] > 0) {
				$playerTopMaps[$map['MapStat']['name']] = $map['PlayerMap'][$action];
			}
		}

		$other = $playerTotalAction - array_sum($playerTopMaps);
		if($other > 0) {
			$playerTopMaps['Other'] = $playerTotalAction - array_sum($playerTopMaps);
		}

		return $playerTopMaps;
	}

}
