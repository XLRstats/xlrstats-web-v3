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

class WeaponStatsController extends AppController {

/**
 * @var array
 */
	public $uses = array('WeaponStat', 'PlayerWeapon');

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
 * Displays a list of weapons
 */
	public function index() {
		$topKillWeapons = $this->getTopWeapons('kills', 5);
		$this->set('topKillWeapons', $topKillWeapons);
		$topTeamKillWeapons = $this->getTopWeapons('teamkills', 5);
		$this->set('topTeamKillWeapons', $topTeamKillWeapons);
		$topSuicideWeapons = $this->getTopWeapons('suicides', 5);
		$this->set('topSuicideWeapons', $topSuicideWeapons);
	}

	//-------------------------------------------------------------------

/**
 * Queries all weapon stats and pass data to view file app/View/WeaponStats/json/weapons_json.ctp
 * to be processed by dataTables.
 *
 * Sample data returned:
 * Array
 * (
 *      [sEcho] => 1
 *      [iTotalRecords] => 93
 *      [iTotalDisplayRecords] => 93
 *      [aaData] => Array
 *          (
 *              [0] => Array
 *                  (
 *                      [0] => pos#     //position
 *                      [1] => M16A4    //weapon name
 *                      [2] => 3314     //kills
 *                      [3] => 90       //team kills
 *                      [4] => 12       //suicides
 *                      [5] => 1        //weapon id
 *                  )
 *              [1] => Array
 *                  (
 *                      [0] => pos#
 *                      [1] => Weapons/AK74M/AK74
 *                      [2] => 1519
 *                      [3] => 55
 *                      [4] => 29
 *                      [0] => 2
 *                  )
 *             )
 * )
 * @return mixed
 */
	public function weaponStatsJson() {
		$this->paginate = array(
			'fields' => array (
				'WeaponStat.name',
				'WeaponStat.kills',
				'WeaponStat.teamkills',
				'WeaponStat.suicides',
				'WeaponStat.id',
			)
		);

		$data = $this->DataTable->getResponse('WeaponStat');

		//Add a dummy value to the beginning of each weapon data array. We will modify it in view file as position numbers.
		$dataLength = count($data['aaData']);
		for ($i = 0; $i < $dataLength; $i++) {
			array_unshift($data['aaData'][$i], 'pos#');
		}

		if ($this->request->is('requested')) {
			return $data;
		} else {
			$this->set('weaponStats', $data);
		}

		return null;
	}

	//-------------------------------------------------------------------

/**
 * Displays statistics of a specific weapon
 *
 * @param null $weaponID
 * @return array
 */
	public function view($weaponID = null) {
		$this->WeaponStat->id = $weaponID;
		$weaponData = $this->WeaponStat->read();

		$this->PlayerWeapon->Behaviors->attach('Containable');
		$this->PlayerWeapon->contain(array('PlayerStat', 'PlayerStat.Player'));

		$conditions = array(
			'PlayerWeapon.weapon_id' => $weaponID,
			'PlayerStat.hide' => 0,
		);

		$playerData = $this->PlayerWeapon->find('all', array(
			'conditions' => $conditions,
			'order' => 'PlayerWeapon.kills DESC',
			'limit' => 10,
		));

		if ($this->request->is('requested')) {
			return array($weaponData);
		} else {
			$this->set('weaponData', $weaponData);
			$this->set('playerData', $playerData);
		}
		return null;
	}

	//-------------------------------------------------------------------

/**
 * Returns and array of top weapons for the selected action.
 *
 * @param string $action Accepted values are 'kills | teamkills | suicides'. Default is 'kills'
 * @param int $weaponCount number of weapons to be returned. Default is 5
 * @return array
 */
	public function getTopWeapons($action = 'kills', $weaponCount = 5) {
		$topWeapons = $this->WeaponStat->find('all', array(
				'limit' => $weaponCount,
				'order' => 'WeaponStat.' . $action . ' desc'
			)
		);

		$_topWeapons = array();
		foreach ($topWeapons as $weapon) {
			if ($weapon['WeaponStat'][$action] > 0) {
				$_topWeapons[$weapon['WeaponStat']['name']] = $weapon['WeaponStat'][$action];
			}
		}

		$totalActions = $this->WeaponStat->find('all', array(
			'fields' => array(
				'SUM(' . $action . ') as totals'
			)
		));
		$other = $totalActions[0][0]['totals'] - array_sum($_topWeapons);
		if ($other > 0) {
			$_topWeapons['Other'] = $other;
		}

		return $_topWeapons;
	}

}