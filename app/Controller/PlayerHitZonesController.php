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
 * @package       app.
 * @since         XLRstats v3.0
 * @version       0.1
 */

class PlayerHitZonesController extends AppController {

/**
 * Returns player's hit zones for both hitting and being hit
 *
 * @param null $playerID
 * @return mixed
 */
	public function view($playerID = null) {
		$hitZones = $this->PlayerHitZone->find('all', array(
			'conditions' => array(
				'PlayerHitZone.player_id' => $playerID
			),
			'order' => 'PlayerHitZone.kills desc'
		));

		foreach ($hitZones as $hitZone) {
			$kills[] = $hitZone['PlayerHitZone']['kills'];
		}
		$totalKills = array_sum($kills);

		$n = count($hitZones);
		for ($i = 0; $i < $n; $i++) {
			$percentage = $hitZones[$i]['PlayerHitZone']['kills'] / $totalKills;
			$hitZones[$i]['PlayerHitZone']['percentage'] = $percentage;
		}

		if ($this->request->is('requested')) {
			return $hitZones;
		} else {
			$this->set('hitZones', $hitZones);
		}

		$this->layout = 'ajax';

		return null;
	}
}