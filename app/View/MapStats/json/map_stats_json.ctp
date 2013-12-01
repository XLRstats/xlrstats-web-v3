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
 * @package       app.View.MapStats.json
 * @since         XLRstats v3.0
 * @version       0.1
 */

$count = count($mapStats['aaData']);
for ($i = 0; $i < $count; $i++) {
	foreach ($mapStats['aaData'][$i] as $k => &$v) {
		if ($k == 0) {
			//Position numbers
			$v = $this->request->query['iDisplayStart']++;
			$v += 1;
		}
		if ($k == 1) {
			$mapImage = $this->XlrFunctions->getMapImage($v);
			$mapName = $this->Html->link('<b><small>' . $this->XlrFunctions->getMapName($v) . '</small></b>',
				array(
					'plugin' => null,
					'action' => 'view',
					'server' => Configure::read('server_id'),
					$mapStats['aaData'][$i][5],
				),
				array(
					'escape' => false,
					'data-toggle' => 'modal',
					'data-target' => '#map-modal'
				)
			);
			if ($mapImage) {
				$v = '<div style="text-align:center;">' . $mapImage . '<br />' . $mapName . '</div>';
			} else {
				$v = '<div style="text-align:center;">' . $mapName . '</div>';
			}
		}
	}
	unset($v);
}

echo json_encode($mapStats);