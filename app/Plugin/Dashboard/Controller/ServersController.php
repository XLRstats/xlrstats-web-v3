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
 * Servers Controller
 *
 * @property Server $Server
 */
class ServersController extends DashboardAppController {

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Js' => array('Jquery'));

/**
 * Components
 *
 * @var array
 */
	public $components = array(
		'RequestHandler',
		'DataTable',
		'Paginator',
	);

	//-------------------------------------------------------------------

/**
 * Check user's server access
 * 
 * @param null $id
 * @return bool
 */
	public function checkServerAccess($id = null) {
		// Super Admin always has access
		if ($this->user['AppUser']['group_id'] == 1) {
			return true;
		}

		// Collect all servergroups the user is in
		if (!empty($this->user['ServerGroup'])) {
			foreach ($this->user['ServerGroup'] as $serverGroup) {
				$userServerGroupIds[] = $serverGroup['id'];
			}
		} else {
			// No servergroups available
			return false;
		}
		foreach ($userServerGroupIds as $groupId) {
			$group = $this->Server->findAllByServerGroupId($groupId);
			foreach ($group as $k) {
				$servers[] = $k['Server']['id'];
			}
		}
		if (in_array($id, $servers)) {
			return true;
		}

		return false;
	}

	//-------------------------------------------------------------------

/**
 * Returns conditions required for filtering based on user server group id
 *
 * @param string $field
 * @return array|null
 */
	public function userServerGroupIds($field = 'ServerGroup.id') {
		if (Configure::read('globals.advanced.subDomains')) {
			$subDomain = Configure::read('server.subdomain');
		} else {
			$subDomain = false;
		}

		if (!$subDomain) {
			foreach ($this->user['ServerGroup'] as $serverGroup) {
				$userServerGroupIds[] = $serverGroup['id'];
			}
		} else {
			foreach ($this->user['ServerGroup'] as $serverGroup) {
				if ($subDomain == $serverGroup['name']) {
					$userServerGroupIds[] = $serverGroup['id'];
				}
			}
		}

		if ($this->user['AppUser']['group_id'] == 1) {
			// Super Admins see all servers
			$conditions = null;
		} elseif (count($userServerGroupIds) == 1) {
			// Admins see servers from the groups they have access to. If they belong to single group:
			$conditions = array($field => $userServerGroupIds[0]);
		} else {
			// Or if they belong to multiple groups:
			$conditions = array($field . ' IN' => $userServerGroupIds);
		}
		return $conditions;
	}

	//-------------------------------------------------------------------

/**
 * Lists servers via dataTables.
 */
	public function admin_index() {
	}

	//-------------------------------------------------------------------

/**
 * Queries available servers and pass data to plugin view file at
 * app/Plugin/Dashboard/View/Servers/json/admin_servers_json.ctp
 * to be processed by dataTables.
 *
 * Sample data returned:
 * Array(
 *      [sEcho] => 1
 *      [iTotalRecords] => 2
 *      [iTotalDisplayRecords] => 2
 *      [aaData] => Array(
 *          [0] => Array(
 *              [0] => 1                //server id
 *              [1] => 1                //active (boolean)
 *              [2] => cod2             //gamename
 *              [3] => SNT CoD2 Server  //server name
 *              [4] => default          //server group
 *              [5] =>                  //empty field for control buttons
 *          )
 *      )
 * )
 *
 *
 * @return mixed
 */
	public function admin_serversJson() {
		$conditions = $this->userServerGroupIds();

		$this->paginate = array(
			'fields' => array (
					'Server.id',
					'Server.active',
					'Server.gamename',
					'Server.servername',
					'ServerGroup.name',
				),
			'conditions' => $conditions,
		);

		$this->DataTable->emptyElements = 1;
		$data = $this->DataTable->getResponse('Server');

		if ($this->request->is('requested')) {
			return $data;
		} else {
			$this->set('servers', $data);
		}

		return null;
	}

	//-------------------------------------------------------------------

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->Server->create();
			if ($this->Server->save($this->request->data)) {
				$this->Session->setFlash(__('The server has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The server could not be saved. Please, try again.'));
			}
		}
		$conditions = $this->userServerGroupIds();
		$serverGroups = $this->Server->ServerGroup->find('list', array('conditions' => $conditions));
		$this->set('serverGroups', $serverGroups);
	}

	//-------------------------------------------------------------------

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->checkServerAccess($id)) {
			$this->Session->setFlash(__('You cannot edit this server.'), null, null, 'error');
			$this->redirect($this->request->referer());
		};
		$this->Server->id = $id;
		if (!$this->Server->exists()) {
			throw new NotFoundException(__('Invalid server'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Server->save($this->request->data)) {
				$this->Session->setFlash(__('The server has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The server could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->Server->read(null, $id);
		}
		$conditions = $this->userServerGroupIds();
		$serverGroups = $this->Server->ServerGroup->find('list', array('conditions' => $conditions));
		$this->set('serverGroups', $serverGroups);
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
	public function admin_delete($id = null) {
		if (!$this->checkServerAccess($id)) {
			$this->Session->setFlash(__('You cannot delete this server.'), null, null, 'error');
			$this->redirect($this->request->referer());
		};
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->Server->id = $id;
		if (!$this->Server->exists()) {
			throw new NotFoundException(__('Invalid server'));
		}
		if ($this->Server->delete()) {
			$this->Session->setFlash(__('Server deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Server was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}
