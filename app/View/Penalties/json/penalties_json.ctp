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
 * @package       app.View.Penalties.json
 * @since         XLRstats v3.0
 * @version       0.1
 */

// Format some array elements
for($i=0; $i<count($playerPenalties['aaData']) ;$i++) {
	foreach($playerPenalties['aaData'][$i] as $k => &$v) {
		// Position numbers
		if($k == 0) {
			$v = $this->request->query['iDisplayStart']++;
			$v += 1;
		}
		// Penalty Type
		if($k == 1) {
			$v = $this->Html->link($v,
				'#penalty' . $playerPenalties['aaData'][$i][9] . 'Modal',
				array(
					'data-toggle' => 'modal'
				)
			);
		}
		// Reason
		if($k == 2) {
			$v = $this->XlrFunctions->stripColors($v);
		}
		// Time Added
		if($k == 4) {
			$v = $this->Time->format('M jS, Y h:i A', $v, null);
		}
		// Time Expire
		if($k == 5) {
			$v = $this->Time->format('M jS, Y h:i A', $v, null);
		}
	}
	unset($v);
}

echo json_encode($playerPenalties);