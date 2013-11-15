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

App::uses('AppController', 'Controller');
/**
 * Pluginreq Controller
 *
 * @property Pluginreq $Pluginreq
 */
class PluginreqController extends AppController {

	/**
	 * Return raw set of values
	 */
	public function index() {
		$this->layout = null;
		$minKills = Configure::read('options.min_kills');
		$minConnections = Configure::read('options.min_connections');
		$maxDays = Configure::read('options.max_days');
		$result = $minKills . ',' . $minConnections . ',' . $maxDays;
		echo $result;
	}
}
