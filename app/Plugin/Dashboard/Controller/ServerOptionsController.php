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
class ServerOptionsController extends DashboardAppController
{
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

	/**
	 * Helpers
	 *
	 * @var array
	 */
	public $helpers = array(
		'Paginator'
	);

	//-------------------------------------------------------------------

	/**
	 * Returns an array of server specific options
	 */
	public function admin_index() {
		$globalOptions = $this->Option->find('all');

		$serverOptions = $this->ServerOption->find('all', array(
				'conditions' => array(
					'server_id' => Configure::read('server_id'),
				),
			)
		);

		$changedServerOptions = array();
		foreach($serverOptions as $k => $v) {
			$changedServerOptions[$v['ServerOption']['name']] = $v['ServerOption']['value'];
		}

		$globalOptions = Hash::flatten($globalOptions);

		//Replace global option values with server option values
		foreach($changedServerOptions as $k => $v) {
			$key = array_search($k, $globalOptions, true);
			if($key) {
				$key = explode('.', $key);
				$n = $key[0];
				foreach($globalOptions as $i) {
					$globalOptions[$n . '.Option.value'] = $v;
				}
			}
		}

		$serverOptions = Hash::expand($globalOptions);

		//Remove locked options
		foreach($serverOptions as $k => $v) {
			if($v['Option']['locked'] == 1) {
				unset($serverOptions[$k]);
			}
		}
		//pr($serverOptions);

		$this->set('serverOptions', $serverOptions);

		$serverName = $this->ServerOption->Server->read(array('servername', 'servername_a'), Configure::read('server_id'));
		$serverName = $serverName['Server']['servername_a'] ? $serverName['Server']['servername_a'] : $serverName['Server']['servername'];
		$this->set('serverName', $serverName);

	}

	//-------------------------------------------------------------------

	/**
	 * admin_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null)
	{
		$this->ServerOption->id = $id;
		if (!$this->ServerOption->exists()) {
			throw new NotFoundException(__('Invalid server option'));
		}
		$this->set('serverOption', $this->ServerOption->read(null, $id));
	}

	//-------------------------------------------------------------------

	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_add()
	{

		$this->set('servers', $this->ServerOption->Server->find('list', array(
			'fields' => 'Server.servername', 'Server.id',
			'order' => 'Server.servername ASC'
		)));

		$conditions = array(
			'Option.locked' => 0,
		);
		$this->set('names', $this->Option->find('list', array(
			'fields' => 'Option.name',
			'conditions' => $conditions,
			'order' => 'Option.name ASC'
		)));

		if ($this->request->is('post')) {
			$this->ServerOption->create();
			if ($this->ServerOption->save($this->request->data)) {
				$this->Session->setFlash(__('The server option has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The server option could not be saved. Please, try again.'));
			}
		}
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

		if($row) {
			$primaryKey = $row['ServerOption']['id'];
			if($this->request->is('ajax')) {
				$this->ServerOption->read(null, $primaryKey);
				$this->ServerOption->set($name, $value);
				$this->ServerOption->save();
			} else {
				header('HTTP 400 Bad Request', true, 400);
			}
		} else {
			if($this->request->is('ajax')) {
				$data = array(
					'ServerOption' => array(
						'server_id' => Configure::read('server_id'),
						'name' => $optionName,
						'value' => $value,
					)
				);
				$this->ServerOption->save($data);
			} else {
				header('HTTP 400 Bad Request', true, 400);
			}
		}
	}

	//-------------------------------------------------------------------

	/**
	 * admin_delete method
	 *
	 * @throws MethodNotAllowedException
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_delete($id = null)
	{
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->ServerOption->id = $id;
		if (!$this->ServerOption->exists()) {
			throw new NotFoundException(__('Invalid server option'));
		}
		if ($this->ServerOption->delete()) {
			$this->Session->setFlash(__('Server option deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Server option was not deleted'));
		$this->redirect(array('action' => 'index'));
	}
}
