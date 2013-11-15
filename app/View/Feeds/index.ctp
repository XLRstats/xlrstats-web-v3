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
 * @package       app.View.Feeds
 * @since         XLRstats v3.0
 * @version       0.1
 */
 ?>

<?php
echo '<h3>' . __('Available News Feeds') . ':</h3>';
echo '<ol>';

$feeds = Configure::read('globals.feed');
foreach ($feeds as $name => $value){
	echo '<li>' . $this->Html->Link($value[1], array(
									'controller'	=>	'feeds',
									'action'		=>	'view',
									'server' => Configure::read('server_id'),
									$name)) . '</li>';
}
?>
	</ol>