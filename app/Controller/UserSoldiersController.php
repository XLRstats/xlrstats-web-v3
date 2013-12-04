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
 * @package       app.Controller
 * @since         XLRstats v3.0
 * @version       0.1
 */

/**
 * Class UserSoldiersController
 */
class UserSoldiersController extends AppController {

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
 * index method
 *
 * @return void
 */
	public function index() {
		$this->redirect(array('plugin' => null, 'admin' => false, 'controller' => 'pages', 'action' => 'display', 'server' => Configure::read('server_id'), 'home'));
	}

	//-------------------------------------------------------------------

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		$this->UserSoldier->id = $id;
		if (!$this->UserSoldier->exists()) {
			throw new NotFoundException(__('Invalid user soldier'));
		}
		$this->set('userSoldier', $this->UserSoldier->read(null, $id));
	}

	//-------------------------------------------------------------------

/**
 * listing method
 *
 * @param null $id
 * @return array
 * @throws NotFoundException
 */
	public function listing($id = null) {
		$data = $this->UserSoldier->listUserSoldiers($id);

		if ($this->request->is('requested')) {
			return $data;
		} else {
			$this->set('userSoldiers', $data);
		}
		return null;
	}

	//-------------------------------------------------------------------

/**
 * add method
 *
 * @return void
 */
	public function add() {
		//debug($this->user['AppUser']['id']);
		if ($this->request->is('post')) {
			if ($this->request->data['UserSoldier']['user_id'] == $this->user['AppUser']['id']) {
				$this->UserSoldier->create();
				if ($this->UserSoldier->save($this->request->data)) {
					$this->Session->setFlash(__('"My Soldier" has been saved'));
					$this->redirect(array(
						'plugin' => null,
						'controller' => 'player_stats',
						'action' => 'view',
						'server' => Configure::read('server_id'),
						$this->request->data['UserSoldier']['playerstats_id']
					));
				} else {
					$this->Session->setFlash(__('"My Soldier" could not be saved. Please, try again.'));
				}
			} else {
				$this->Session->setFlash(__('User Id Invalid!'));
			}
		} else {
			$this->Session->setFlash(__('Request not valid!'));
		}
	}

	//-------------------------------------------------------------------

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		$this->UserSoldier->id = $id;
		if (!$this->UserSoldier->exists()) {
			throw new NotFoundException(__('Invalid soldier'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->UserSoldier->save($this->request->data)) {
				$this->Session->setFlash(__('The soldier has been saved'));
				$this->redirect(array('action' => 'index', 'server' => Configure::read('server_id')));
			} else {
				$this->Session->setFlash(__('The soldier could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->UserSoldier->read(null, $id);
		}
	}

	//-------------------------------------------------------------------

/**
 * delete method
 *
 * @throws MethodNotAllowedException
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->UserSoldier->id = $id;
		if (!$this->UserSoldier->exists()) {
			throw new NotFoundException(__('Invalid user soldier'));
		}

		if ($this->UserSoldier->delete()) {
			$this->Session->setFlash(__('Soldier deleted'));
			$this->redirect(array(
				'plugin' => 'users',
				'controller' => 'users',
				'action' => 'edit'));
		}

		$this->Session->setFlash(__('Soldier was not deleted'));
		$this->redirect(array(
			'plugin' => 'users',
			'controller' => 'users',
			'action' => 'edit'));
	}

}
