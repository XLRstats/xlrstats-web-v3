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
for($i=0; $i<count($penalties['aaData']) ;$i++) {
	foreach($penalties['aaData'][$i] as $k => &$v) {
		// Position numbers
		if($k == 0) {
			$v = $this->request->query['iDisplayStart']++;
			$v += 1;
		}
		// Penalty Type
		if($k == 1) {
			$commentIcon = '<i class="icon-comment-alt"></i>&nbsp;&nbsp;';
			$type = $v;
			$class = 'btn btn-small btn-inverse disabled';
			$disputable = false;

			if ($type == 'Ban') {
				$disputable = true;
				$class = 'btn btn-small btn-danger';
			} elseif ($type == 'TempBan') {
				$disputable = true;
				$class = 'btn btn-small btn-warning';
			} elseif ($type == 'Warning') {
				$disputable = false;
				$class = 'btn btn-small btn-primary disabled';
			}
			if (Configure::read('options.ban_disputable') && $disputable) {
				if (Configure::read('options.ban_dispute_link') != null) {
					$v = $this->Html->link($commentIcon . $type, Configure::read('options.ban_dispute_link'), array(
							'title' => __('Click here to dispute your ban'),
							'class' => $class,
							'target' => '_blank',
							'escape' => false,
						),
						__('Remember to mention your Player Name and the time the ban was issued'));
				} else {
					$v = $this->Html->link($commentIcon . $type, array(
							'controller' => 'penalties',
							'action' => 'detail',
							'server' => Configure::read('server_id'),
							$penalties['aaData'][$i][12],
						),
						array(
							'title' => __('Click here to dispute your ban'),
							'class' => $class,
							'escape' => false,
						)
					);
				}
			} else {
				$v = $this->Html->tag('span', '<i class="icon-lock"></i>&nbsp;&nbsp;' . $type, array('class' => $class));
			}
		}
		// Time Added
		if($k == 3) {
			$v = '<small>' . $this->Time->format('M jS, Y h:i A', $v , null). '</small>';
		}
		// Time Expires
		if($k == 4) {
			if ($v == -1) {
				$v = '<small>' . __('never') . '</small>';
			} else {
				$v = '<small>' . $this->Time->format('M jS, Y h:i A', $v, null) . '</small>';
			}
		}
		// Reason
		if($k == 5) {
			$v = $this->XlrFunctions->stripColors($v);
		}
		// Admin Name
		if($k == 8) {
			$v = $v ? $v : 'BigBrotherBot';
		}
	}
	unset($v);
}

echo json_encode($penalties);