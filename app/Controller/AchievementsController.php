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

class AchievementsController extends AppController {

	/**
	 * Used Models
	 *
	 * @var array
	 */
	public $uses = array('PlayerWeapon');

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array(
		'RequestHandler',
	);

	//-------------------------------------------------------------------

	public function view ($playerID = null) {

		/* Get achievements for this game */
		$achievementList = Configure::read('achievements');
		/* Set a number of achievements to collect*/
		$achievementCount = count($achievementList);
		$limitIndividualWeapons = 100 - $achievementCount;
		if ($limitIndividualWeapons <= 0) $limitIndividualWeapons = 0;
		/* Initiate the results array */
		$achievements = array();

		if ($achievementList != '') {
			/* Cycle through the achievement list, query database and put them in a new array */
			foreach ($achievementList as $k => $v) {

				/* Get the total kills sum of all weapons in an achievement group */
				$result = $this->PlayerWeapon->find('all', array(
					'fields' => array(
						'SUM(PlayerWeapon.kills) as totalkills',
					),
					'conditions' => array(
						'PlayerWeapon.player_id' => $playerID,
						'WeaponStat.name' => $v
					),
				));
				/* Fill the array */
				$achievements[$k] = $result[0][0]['totalkills'];
			}
		}

		if ($limitIndividualWeapons > 0) {
			/* Add individual weapons up to the limit threshold */
			$result = $this->PlayerWeapon->find('all', array(
				'fields' => array(
					'PlayerWeapon.kills',
					'WeaponStat.name',
				),
				'conditions' => array('PlayerWeapon.player_id' => $playerID,),
				'limit' => $limitIndividualWeapons,
				'order' => array('PlayerWeapon.kills DESC'),
			));
			/* Add the individual weapons to the achievements array */
			foreach ($result as $k => $v) {
				$_name = $v['WeaponStat']['name'];
				$_kills = $v['PlayerWeapon']['kills'];
				$achievements[$_name] = $_kills;
			}
		}

		if ($this->request->is('requested')) {
			return array($achievements);
		}
		else {
			$this->set('achievements', $achievements);
		}
	}
}