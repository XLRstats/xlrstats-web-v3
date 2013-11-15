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
 * @package       app.Plugin.Dashboard.View.Servers.json
 * @since         XLRstats v3.0
 * @version       0.1
 */

//Let's modify and format some of the array values
for($i=0; $i<count($servers['aaData']) ;$i++) {
	foreach($servers['aaData'][$i] as $k => &$v) {
		// Active
		if($k == 1) {
			if($v == 1) {
				$v = '<span style="height: 7px; position: relative; top: 3px; " class="label label-success">&nbsp;</span>';
			} else {
				$v = '<span style="height: 7px; position: relative; top: 3px; " class="label label-important">&nbsp;</span>';
			}
		}
		// Game Name
		if($k == 2) {
			$v = $this->Html->image('ico/icon_'.$v.'.gif', array(
					//'class' => 'img-polaroid',
					'rel' => 'tooltip',
					'data-original-title' => Configure::read('games.' . $v) ? Configure::read('games.' . $v) : $v,
				)
			);
		}
		// Server Name
		if($k == 3) {
			$v = $this->Html->link($v, array(
					'plugin' => 'dashboard',
					'controller' => 'home',
					'action' => 'index',
					'server' => $servers['aaData'][$i][0],
				)
			);
		}
		// Action Buttons
		if($k == 5) {
			$v = $this->Html->link('<i class="icon-eye-open"></i>',
				array(
					'plugin' => 'dashboard',
					'controller' => 'home',
					'action' => 'index',
					'server' => $servers['aaData'][$i][0],
				),
				array(
					'class' => 'btn btn-mini btn-success',
					'style' => 'margin-right:2px;',
					'escape' => false,
					'rel' => 'tooltip',
					'data-original-title' => __('View'),
				)
			);
			$v .= $this->Html->link('<i class="icon-wrench"></i>',
				array(
					'server' => $servers['aaData'][$i][0],
					'action'=>'edit',
					$servers['aaData'][$i][0],
				),
				array(
					'class' => 'btn btn-mini',
					'style' => 'margin-right:2px;',
					'escape' => false,
					'rel' => 'tooltip',
					'data-original-title' => __('Settings'),
				)
			);
			$v .= $this->Html->link('<i class="icon-cog"></i>',
				array(
					'controller' => 'server_options',
					'action'=>'index',
					'server' => $servers['aaData'][$i][0],
				),
				array(
					'class' => 'btn btn-mini',
					'style' => 'margin-right:2px;',
					'escape' => false,
					'rel' => 'tooltip',
					'data-original-title' => __('Options'),
				)
			);
			/*
			$v .= $this->Html->link('<i class="icon-gamepad"></i>',
				'#',
				array(
					'class' => 'btn btn-mini',
					'style' => 'margin-right:2px;',
					'escape' => false,
					'rel' => 'tooltip',
					'data-original-title' => __('Players'),
				)
			);
			*/
			$v .= $this->Form->postLink('<i class="icon-trash"></i>', array(
					'action' => 'delete', $servers['aaData'][$i][0]
				),
				array(
					'class' => 'btn btn-mini btn-danger',
					'style' => 'margin-right:2px;',
					'escape' => false,
					'rel' => 'tooltip',
					'data-original-title' => __('Delete'),
				),
				__('Are you sure you want to delete %s?', strip_tags($servers['aaData'][$i][3]))
			);
		}
	}
	unset($v);
}

echo json_encode($servers);