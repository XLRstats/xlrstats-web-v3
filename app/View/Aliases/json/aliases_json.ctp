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
 * @package       app.View.Aliases.json
 * @since         XLRstats v3.0
 * @version       0.1
 */

// Format some array elements
for($i=0; $i<count($aliases['aaData']) ;$i++) {
	foreach($aliases['aaData'][$i] as $k => &$v) {
		// $ of Times Used. Todo: Next line is a bug in B3 alias counting. Seems to start with 0 instead of 1
		if($k == 1) {
			$v = $v + 1;
		}
		// First Used
		if($k == 2) {
			$v = $this->Time->format('M jS, Y h:i A', $v, null);
		}
		// Last Used
		if($k == 3) {
			$v = $this->Time->format('M jS, Y h:i A', $v, null);
		}
	}
	unset($v);
}

echo json_encode($aliases);