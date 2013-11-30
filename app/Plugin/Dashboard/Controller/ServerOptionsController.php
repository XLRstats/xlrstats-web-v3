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
 * @package       app.Plugin.Dashboard.Controller
 * @since         XLRstats v3.0
 * @version       0.1
 */

App::uses('DashboardAppController', 'Dashboard.Controller');

/**
 * ServerOptions Controller
 *
 * @property ServerOption $ServerOption
 */
class ServerOptionsController extends DashboardAppController {

/**
 * Models used
 *
 * @var array
 */
	public $uses = array(
		'Dashboard.ServerOption',
		'Dashboard.Option'
	);

/**
 * Components
 *
 * @var array
 */
	public $components = array(
		'RequestHandler'
	);

	//-------------------------------------------------------------------

/**
 * Returns an array of server specific options
 */
	public function admin_index() {
		$globalOptions = $this->Option->find('all');

		$serverID = Configure::read('server_id');
		$serverOptions = $this->ServerOption->getServerOptions($serverID);

		$changedServerOptions = array();
		foreach ($serverOptions as $k => $v) {
			$changedServerOptions[$v['ServerOption']['name']] = $v['ServerOption']['value'];
		}

		$globalOptions = Hash::flatten($globalOptions);

		//Replace global option values with server option values
		foreach ($changedServerOptions as $k => $v) {
			$key = array_search($k, $globalOptions, true);
			if ($key) {
				$key = explode('.', $key);
				$n = $key[0];
				foreach ($globalOptions as $i) {
					$globalOptions[$n . '.Option.value'] = $v;
				}
			}
		}

		$serverOptions = Hash::expand($globalOptions);

		//Remove locked options
		foreach ($serverOptions as $k => $v) {
			if ($v['Option']['locked'] == 1) {
				unset($serverOptions[$k]);
			}
		}
		//pr($serverOptions);

		if ($this->request->is('requested')) {
			return $serverOptions;
		} else {
			$this->set('serverOptions', $serverOptions);
		}

		$serverName = $this->getServerName($serverID);
		$this->set('serverName', $serverName);

		return null;
	}

	//-------------------------------------------------------------------

/**
 * Edit function for server specific options that works with X-editable jQuery plugin.
 * Updates database with the new value or adds a new row if option is not yet available in the DB table
 *
 * This method does not require a view file and yet we maintain a view file (admin_edit.ctp)
 * for debugging purposes only.
 */
	public function admin_edit() {
		$optionName = $this->request->data['pk'];
		$name = $this->request->data['name'];
		$value = $this->request->data['value'];

		$row = $this->ServerOption->find('first', array(
				'conditions' => array(
					'ServerOption.name' => $optionName,
					'ServerOption.server_id' => Configure::read('server_id'),
				),
			)
		);

		if ($row) {
			$primaryKey = $row['ServerOption']['id'];
			if ($this->request->is('ajax')) {
				$this->ServerOption->read(null, $primaryKey);
				$this->ServerOption->set($name, $value);
				$this->ServerOption->save();
			} else {
				header('HTTP 400 Bad Request', true, 400);
			}
		} else {
			if ($this->request->is('ajax')) {
				$data = array(
					'ServerOption' => array(
						'server_id' => Configure::read('server_id'),
						'name' => $optionName,
						'value' => $value,
					)
				);
				$this->ServerOption->save($data);
			} else {
				if (function_exists('http_response_code')) {
					$this->response->statusCode(400);
				} else {
					header('HTTP 400 Bad Request', true, 400);
				}
				echo __('Oops, something went wrong!');
			}
		}
	}

}
