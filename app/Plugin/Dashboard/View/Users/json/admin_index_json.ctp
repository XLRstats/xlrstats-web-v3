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
 * @package       app.Plugin.Dashboard.View.Users.json
 * @since         XLRstats v3.0
 * @version       0.1
 */

$dataLength = count($users['aaData']);
for ($i = 0; $i < $dataLength; $i++) {
	foreach ($users['aaData'][$i] as $k => &$v) {
		//User Group
		if ($k == 2) {
			if ($v == 'Super Admin') {
				$v = '<span class="label label-important">Super Admin</span>';
			}
			if ($v == 'Admin') {
				$v = '<span class="label label-info">Admin</span>';
			}
			if ($v == 'User') {
				$v = '<span class="label">User</span>';
			}
		}
		//Email Verified
		if ($k == 4) {
			if ($v == 1) {
				$v = '<span style="height: 7px; position: relative; top: 3px; " class="label label-success">&nbsp;</span>';
			} else {
				$v = '<span style="height: 7px; position: relative; top: 3px; " class="label label-important">&nbsp;</span>';
			}
		}
		//Active
		if ($k == 5) {
			if ($v == 1) {
				$v = '<span style="height: 7px; position: relative; top: 3px; " class="label label-success">&nbsp;</span>';
			} else {
				$v = '<span style="height: 7px; position: relative; top: 3px; " class="label label-important">&nbsp;</span>';
			}
		}
		// Action Buttons
		if ($k == 8) {
			$v = $this->Html->link('<i class="icon-pencil"></i>',
				array(
					'action' => 'edit', $users['aaData'][$i][0]
				),
				array(
					'class' => 'btn btn-mini btn-primary',
					'style' => 'margin-right:2px;',
					'escape' => false,
					'rel' => 'tooltip',
					'data-original-title' => __('Edit'),
				)
			);
			$v .= $this->Html->link('<i class="icon-trash"></i>',
				array(
					'action' => 'delete', $users['aaData'][$i][0]
				),
				array(
					'class' => 'btn btn-mini btn-danger',
					'style' => 'margin-right:2px;',
					'escape' => false,
					'rel' => 'tooltip',
					'data-original-title' => __('Delete'),
				),
				sprintf(__d('users', 'Are you sure you want to delete user %s?'), $users['aaData'][$i][1])
			);
		}

	}
}
echo json_encode($users);