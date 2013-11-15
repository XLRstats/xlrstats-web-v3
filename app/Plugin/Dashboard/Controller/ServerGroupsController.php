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
 * ServerGroups Controller
 *
 * @property ServerGroup $ServerGroup
 */
class ServerGroupsController extends DashboardAppController {

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
	 * admin_index method
	 *
	 * @return void
	 */
	public function admin_index() {
		$serverGroups = $this->ServerGroup->find('all');
		$this->set('serverGroups', $serverGroups);
	}

	//-------------------------------------------------------------------

	/**
	 * admin_view method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_view($id = null) {
		if (!$this->ServerGroup->exists($id)) {
			throw new NotFoundException(__('Invalid server group'));
		}
		$options = array('conditions' => array('ServerGroup.' . $this->ServerGroup->primaryKey => $id));
		$this->set('serverGroup', $this->ServerGroup->find('first', $options));
	}

	//-------------------------------------------------------------------

	/**
	 * admin_add method
	 *
	 * @return void
	 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->ServerGroup->create();
			$this->request->data['ServerGroup']['name'] = strtolower($this->request->data['ServerGroup']['name']);
			if ($this->ServerGroup->save($this->request->data)) {
				$this->Session->setFlash(__('The server group has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The server group could not be saved. Please, try again.'));
			}
		}
	}

	//-------------------------------------------------------------------

	/**
	 * Edit function for server groups that works with X-editable jQuery plugin.
	 * Updates database with the new value.
	 *
	 * This method normally does not require a view file and yet we maintain
	 * a view file (admin_edit.ctp) for debugging purposes only.
	 */
	public function admin_edit() {
		$primaryKey = $this->request->data['pk'];
		$name = $this->request->data['name'];
		$value = $this->request->data['value'];

		if($name == 'name') {
			$value = strtolower($value);
		}

		if ($this->request->is('ajax')) {
			$this->ServerGroup->read(null, $primaryKey);
			$this->ServerGroup->set($name, $value);
			if($this->ServerGroup->save()) {
				$this->set('value', $value);
			} else {
				if(function_exists('http_response_code')) {
					$this->response->statusCode(400);
				} else {
					header('HTTP 400 Bad Request', true, 400);
				}
				foreach($this->ServerGroup->validationErrors[$name] as $validationError) {
					echo $validationError;
				}
			}
		}
	}

	//-------------------------------------------------------------------

	/**
	 * admin_delete method
	 *
	 * @throws NotFoundException
	 * @param string $id
	 * @return void
	 */
	public function admin_delete($id = null) {
		$this->ServerGroup->id = $id;
		if($id == 1) {
			$this->Session->setFlash(__('You cannot delete the default server group'));
			$this->redirect(array('action' => 'index'));
		}
		if (!$this->ServerGroup->exists()) {
			throw new NotFoundException(__('Invalid server group'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->ServerGroup->delete()) {
			$this->Session->setFlash(__('Server group deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Server group was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}
