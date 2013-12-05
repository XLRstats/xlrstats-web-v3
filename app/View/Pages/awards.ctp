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
 * @package       app.View.Pages
 * @since         XLRstats v3.0
 * @version       0.1
 */

$this->set('title_for_layout', __('Awards • XLRstats', $name));

$leagues = Configure::read('league');

foreach ($leagues as $leagueID => $values) {
	echo '<h3>' . __('Awards for the ') . $this->Html->link($leagues[$leagueID][3], array(
			'plugin' => null,
			'admin' => false,
			'controller' => 'leagues',
			'action' => 'view',
			'server' => Configure::read('server_id'),
			$leagueID
		), array('escape' => false)) . '</h3>';
	echo $this->element('league_awards', array(
			'leaguenr' => $leagueID)
	);
	//echo '<p>' . $leagues[$leagueID][4] . '</p>';
	echo '<hr>';
}