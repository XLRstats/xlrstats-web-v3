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
 * @package       app.View.Elements
 * @since         XLRstats v3.0
 * @version       0.1
 */

$leagues = Configure::read('league');

echo '<li class="nav-header">' . __('Available Leagues') . '</li>';
foreach ($leagues as $id => $league) {
	if ($league[0] == 'League.skill') {
		if (isset($league[5])) $leagueColor = $league[5];
		//TODO: Need to css this leagueColor
		else $leagueColor = '#999999';
		$leagueIcon = '<i class="icon-star" style="color:'.$leagueColor.'; margin-right: 10px"></i>';
		echo '<li>' . $this->Html->Link($leagueIcon . __($league[3]), array('plugin' => null, 'admin' => false, 'controller' => 'leagues', 'action' => 'view', 'server' => Configure::read('server_id'), $id), array('escape' => false)) . '</li>' ;
	}
}

//TODO: Need to css this leagueColor
$leagueColor = '#999999';
$leagueIcon = '<i class="icon-star" style="color:'.$leagueColor.'; margin-right: 10px"></i>';
echo '<li>' . $this->Html->Link($leagueIcon . __('All stats'), array('plugin' => null, 'admin' => false, 'controller' => 'leagues', 'action' => 'view', 'server' => Configure::read('server_id'), '0'), array('escape' => false)) . '</li>' ;

echo '<li class="divider"></li>';
echo '<li class="nav-header">' . __('Available Leaderboards') . '</li>';
foreach ($leagues as $id => $league) {
	if ($league[0] != 'League.skill') {
		if (isset($league[5])) $leagueColor = $league[5];
		//TODO: Need to css this leagueColor
		else $leagueColor = '#999999';
		$leagueIcon = '<i class="icon-calendar" style="color:'.$leagueColor.'; margin-right: 10px"></i>';
		echo '<li>' . $this->Html->Link($leagueIcon . __($league[3]), array('plugin' => null, 'admin' => false, 'controller' => 'leagues', 'action' => 'view', 'server' => Configure::read('server_id'), $id), array('escape' => false)) . '</li>' ;
	}
}

