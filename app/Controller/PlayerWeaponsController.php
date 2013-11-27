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

class PlayerWeaponsController extends AppController {

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
		'PlayerWeapon',
	);

	//-------------------------------------------------------------------

/**
 * Displays player's weapons via dataTables.
 *
 * @param int $playerID is passed to the dataTable script's "sAjaxSource".
 */
	public function view($playerID = null) {
		$this->set('playerID', $playerID);
		$this->layout = 'ajax';

		$topKillWeapons = $this->getPlayerTopWeapons($playerID, 'kills', 5);
		$this->set('topKillWeapons', $topKillWeapons);
		$topDeathWeapons = $this->getPlayerTopWeapons($playerID, 'deaths', 5);
		$this->set('topDeathWeapons', $topDeathWeapons);
		$topTeamKillWeapons = $this->getPlayerTopWeapons($playerID, 'teamkills', 5);
		$this->set('topTeamKillWeapons', $topTeamKillWeapons);
		$topTeamDeathWeapons = $this->getPlayerTopWeapons($playerID, 'teamdeaths', 5);
		$this->set('topTeamDeathWeapons', $topTeamDeathWeapons);
		$topSuicideWeapons = $this->getPlayerTopWeapons($playerID, 'suicides', 5);
		$this->set('topSuicideWeapons', $topSuicideWeapons);
	}

	//-------------------------------------------------------------------

/**
 * Queries player weapons and pass data to view file app/View/PlayerWeapons/json/player_weapons_json.ctp
 * to be processed by dataTables.
 *
 * Sample data returned:
 * Array
 * (
 *      [sEcho] => 1
 *      [iTotalRecords] => 13125
 *      [iTotalDisplayRecords] => 83
 *      [aaData] => Array
 *          (
 *              [0] => Array
 *                  (
 *                      [0] => pos# //position number
 *                      [1] => SV98 //weapon name
 *                      [2] => 13   //kills
 *                      [3] => 19   //deaths
 *                      [4] => 0    //teamkills
 *                      [5] => 0    //teamdeaths
 *                      [6] => 0    //suicides
 *                      [7] => 34   //weapon id
 *                  )
 *          )
 * )
 *
 * @param null $playerID player id
 * @return mixed
 */
	public function playerWeaponsJson($playerID = null) {
		$conditions = array(
			'PlayerWeapon.player_id' => $playerID
		);

		$this->paginate = array(
			'fields' => array (
				'WeaponStat.name',
				'PlayerWeapon.kills',
				'PlayerWeapon.deaths',
				'PlayerWeapon.teamkills',
				'PlayerWeapon.teamdeaths',
				'PlayerWeapon.suicides',
				'WeaponStat.id',
			),
			'conditions' => $conditions,
		);

		$data = $this->DataTable->getResponse('PlayerWeapon');

		//Add a dummy value to the beginning of each player weapon data array. We will modify it in view file as position numbers.
		$dataLength = count($data['aaData']);
		for ($i = 0; $i < $dataLength; $i++) {
			array_unshift($data['aaData'][$i], 'pos#');
		}
		//pr($data);

		if ($this->request->is('requested')) {
			return $data;
		} else {
			$this->set('playerWeapons', $data);
		}
		return null;
	}

	//-------------------------------------------------------------------

/**
 * Returns and array of top player weapons for the selected action.
 *
 * @param null $playerID
 * @param string $action Accepted values are 'kills | deaths | teamkills | teamdeaths | suicides'. Default is 'kills'
 * @param int $weaponCount number of weapons to be returned. Default is 5
 * @return array
 */
	public function getPlayerTopWeapons($playerID = null, $action = 'kills', $weaponCount = 5) {
		$playerData = $this->PlayerStat->find('first', array(
				'conditions' => array (
					'PlayerStat.id' => $playerID
				)
			)
		);
		$playerTotalAction = $playerData['PlayerStat'][$action];

		$topWeapons = $this->PlayerWeapon->find('all', array(
				'conditions' => array(
					'PlayerWeapon.player_id' => $playerID,
				),
				'limit' => $weaponCount,
				'order' => 'PlayerWeapon.' . $action . ' desc'
			)
		);

		$playerTopWeapons = array();
		foreach ($topWeapons as $weapon) {
			if ($weapon['PlayerWeapon'][$action] > 0) {
				$playerTopWeapons[$weapon['WeaponStat']['name']] = $weapon['PlayerWeapon'][$action];
			}
		}

		$other = $playerTotalAction - array_sum($playerTopWeapons);
		if ($other > 0) {
			$playerTopWeapons['Other'] = $playerTotalAction - array_sum($playerTopWeapons);
		}

		return $playerTopWeapons;
	}

}