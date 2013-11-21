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
 * @package       app.Plugin.Dashboard.View.Maintenance
 * @since         XLRstats v3.0
 * @version       0.1
 */

$this->set('title_for_layout', __('Maintenance • XLRstats'));
?>

<div class="page-header">
	<h1>Maintenance</h1>
</div>

<div>
	<blockquote><?php
		echo '<i>';
		echo __('Maintenance tasks can resolve issues where XLRstats might behave strangely.');
		echo '</i>';
		?>
</blockquote>
</div>

<div><blockquote>
		Clearing the cache may help to solve errors after changes or updates to the XLRstats installation.
</blockquote><?php

	echo $this->Html->link(
		'Clear Cache',
		array(
			'controller' => 'maintenance',
			'action' => 'admin_clearcache'
		),
		array(
			'class' => 'btn btn-info btn-small'
		)
	);
	?>
</div>
