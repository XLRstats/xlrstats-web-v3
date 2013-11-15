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

class WeeklyStatsController extends AppController {

	/**
	 * Sets models we are using
	 *
	 * @var array
	 */
	public $uses = array('PlayerStat', 'WeeklyStat');

	//-------------------------------------------------------------------

	/**
	 * Returns player's weekly stats
	 *
	 * @param null $playerID
	 */
	public function view($playerID = null) {

		$player = $this->PlayerStat->find('first', array(
				'conditions' => array(
					'PlayerStat.id' => $playerID,
				)
			)
		);

		$b3ID = $player['Player']['id'];

		$weeklyStats = $this->WeeklyStat->find('all', array(
				'conditions' => array(
					'WeeklyStat.client_id' => $b3ID
				)
			)
		);

		if ($this->request->is('requested')) {
			return $weeklyStats;
		} else {
			$this->set('weeklyStats', $weeklyStats);
		}

		$this->layout = 'ajax';

	}

}
