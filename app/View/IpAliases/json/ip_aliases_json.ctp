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
$count = count($ipAliases['aaData']);
for ($i = 0; $i < $count; $i++) {
	foreach ($ipAliases['aaData'][$i] as $k => &$v) {
		// Flag
		if ($k == 0) {
			$flag = $this->Html->image('flags/' . $v[0][0] . '.gif', array(
				'rel' => 'tooltip',
				'data-original-title' => $v[0][1],
				'style' => 'cursor:pointer; margin:2px 5px 0px; 0px;',
			));

			$v = $flag . ' ' . $v[1];
		}
		// Times Used. Todo: Next line is a bug in B3 alias counting. Seems to start with 0 instead of 1
		if ($k == 1) {
			$v += 1;
		}
		// First Used
		if ($k == 2) {
			$v = $this->Time->format('M jS, Y h:i A', $v, null);
		}
		// Last Used
		if ($k == 3) {
			$v = $this->Time->format('M jS, Y h:i A', $v, null);
		}
	}
	unset($v);
}

echo json_encode($ipAliases);