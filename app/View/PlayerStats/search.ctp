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
//pr($result);
?>
<h3><?php echo __('Search Results for "%s"', $searchData); ?></h3>
<?php
if($searchData === '') {
	echo __('Please enter a value in the search box');
} elseif(!empty($result)) {
	foreach ($result as $key) {
		echo $this->Html->link($key['Player']['name'], array(
				'controller' => 'player_stats',
				'action' => 'view',
				'server' => Configure::read('server_id'),
				$key['PlayerStat']['id']
			)
		);
		echo '<br />';
	}
} else {
	echo __('No results found for "%s"', $searchData);
}
?>