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
 * @package       app.Plugin.Dashboard.View
 * @since         XLRstats v3.0
 * @version       0.1
 */

$serverInfo = $this->requestAction('server_info');
$serverName = $this->XlrFunctions->stripColors($serverInfo['sv_hostname']);
$this->set('title_for_layout', __('%s • XLRstats', $serverName));
?>

<div>
	<h2><?php echo $serverName; ?></h2>
	<blockquote><?php
		echo __('This information is retrieved from the status of the server.<br />Use the menu on the left to modify the server connection settings and XLRstats options.');
		?>
	</blockquote>
	<?php
	//pr($serverInfo);
	$_nr = count($serverInfo);
	$_half = $_nr / 2 ;
	$_counter = 0;
	?>
</div>

<div class="row">
	<div class="span5 pull-left">
		<?php
		ksort($serverInfo);
		foreach ($serverInfo as $k => $v) {
			$_counter++;
			if ($_counter == round($_half)) {
				echo '</div>';
				echo '<div class="span5 pull-right">';
			}
			echo $_counter . ': <strong>' . $k . '</strong>: ' . $v . '<br />';
		}
		?>
	</div>
</div>
