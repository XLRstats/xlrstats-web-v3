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


class PlayerActivitiesController extends AppController {

/**
 * Sets models we are using
 *
 * @var array
 */
	public $uses = array('PlayerStat', 'PlayerActivity');

	//-------------------------------------------------------------------

/**
 * Returns player activity
 *
 * @param null $playerID player ID
 * @return mixed
 */
	public function view($playerID = null) {
		$player = $this->PlayerStat->find('first', array (
				'conditions' => array(
					'PlayerStat.id' => $playerID,
				),
			)
		);

		$guid = $player['Player']['guid'];

		try {
			$activity = $this->PlayerActivity->find('all', array(
					'conditions' => array(
						'PlayerActivity.guid' => $guid
					),
					'order' => array(
						'PlayerActivity.came' => 'asc'
					)
				)
			);
		} catch (Exception $e) {
			$activity = null;
		}

		if ($this->request->is('requested')) {
			return $activity;
		} else {
			$this->set('activity', $activity);
		}

		return null;
	}

}