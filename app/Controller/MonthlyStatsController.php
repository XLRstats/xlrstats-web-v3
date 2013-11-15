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

class MonthlyStatsController extends AppController {

	/**
	 * Models used
	 *
	 * @var array
	 */
	public $uses = array('PlayerStat', 'MonthlyStat');

	//-------------------------------------------------------------------

	/**
	 * Returns player's monthly stats
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

		$monthlyStats = $this->MonthlyStat->find('all', array(
				'conditions' => array(
					'MonthlyStat.client_id' => $b3ID
				)
			)
		);

		if ($this->request->is('requested')) {
			return $monthlyStats;
		} else {
			$this->set('monthlyStats', $monthlyStats);
		}

		$this->layout = 'ajax';

	}

}