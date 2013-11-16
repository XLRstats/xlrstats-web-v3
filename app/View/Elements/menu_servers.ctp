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

echo '<li class="nav-header">' . __('Available Servers') . '</li>';

$servers = Configure::read('servers');

foreach ($servers as $server) {

	$serverName = $this->requestAction('app/getservername/' . $server['id']);
	$serverName = $this->XlrFunctions->stripColors($serverName);

	//indication and css class for inactive servers
	$class = null;
	$inactive = null;
	if($server['active'] == 0) {
		$class = 'inactive';
		$inactive = __('(inactive)');
	}

	$gameIcon = $this->Html->image('ico/icon_' . $server['gamename'] . '.gif', array('class' => $class));
	/* If we have a passed parameter in our current URL we use it for our links */
	if (isset($this->request->pass[0])) {
		echo '<li>' . $this->Html->link($gameIcon . $serverName . ' ' . $inactive,
				array(
					'plugin' => $this->params['plugin'],
					'controller' => $this->params['controller'],
					'action' => $this->action,
					'server' => $server['id'],
					$this->request->pass[0]
				),
				array('class' => $class, 'escape' => false)) . '</li>';
	} else {
		echo '<li>' . $this->Html->link($gameIcon . $serverName,
				array(
					'plugin' => $this->params['plugin'],
					'controller' => $this->params['controller'],
					'action' => $this->action,
					'server' => $server['id'],
				),
				array('escape' => false)) . '</li>';
	}
}