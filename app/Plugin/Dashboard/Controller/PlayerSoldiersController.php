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
 * Class PlayerSoldiersController
 */
class PlayerSoldiersController extends DashboardAppController {

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
		$this->PlayerSoldier->recursive = 2;

		$this->set('playerSoldiers', $this->paginate());
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
		$this->PlayerSoldier->id = $id;
		$this->PlayerSoldier->recursive = 2;

		if (!$this->PlayerSoldier->exists()) {
			throw new NotFoundException(__('Invalid user soldier'));
		}
		$this->set('playerSoldier', $this->PlayerSoldier->read(null, $id));
	}

	//-------------------------------------------------------------------

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		$this->PlayerSoldier->recursive = 2;

		$this->set('users', $this->PlayerSoldier->User->find('list', array(
			'fields' => 'User.username', 'User.id',
			'order' => 'User.username ASC'
		)));
		$this->set('servers', $this->PlayerSoldier->Server->find('list', array(
			'fields' => 'Server.servername', 'Server.id',
			'order' => 'Server.servername ASC'
		)));
		$this->set('playerstats', $this->PlayerSoldier->PlayerStat->find('list', array(
			'fields' => 'Player.name', 'PlayerStat.id',
			'recursive' => 2,
			'order' => 'Player.name ASC'
		)));

		if ($this->request->is('post')) {
			$this->PlayerSoldier->create();
			if ($this->PlayerSoldier->save($this->request->data)) {
				$this->Session->setFlash(__('The user soldier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user soldier could not be saved. Please, try again.'));
			}
		}
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
		$this->PlayerSoldier->id = $id;
		$this->PlayerSoldier->recursive = 2;

		$this->set('users', $this->PlayerSoldier->User->find('list', array(
			'fields' => 'User.username', 'User.id',
			'order' => 'User.username ASC'
		)));
		$this->set('servers', $this->PlayerSoldier->Server->find('list', array(
			'fields' => 'Server.servername', 'Server.id',
			'order' => 'Server.servername ASC'
		)));
		$this->set('playerstats', $this->PlayerSoldier->PlayerStat->find('list', array(
			'fields' => 'Player.name', 'PlayerStat.id',
			'recursive' => 2,
			'order' => 'Player.name ASC'
		)));

		if (!$this->PlayerSoldier->exists()) {
			throw new NotFoundException(__('Invalid user soldier'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->PlayerSoldier->save($this->request->data)) {
				$this->Session->setFlash(__('The user soldier has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user soldier could not be saved. Please, try again.'));
			}
		} else {
			$this->request->data = $this->PlayerSoldier->read(null, $id);
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
	public function admin_delete($id = null) {
		if (!$this->request->is('post')) {
			throw new MethodNotAllowedException();
		}
		$this->PlayerSoldier->id = $id;
		if (!$this->PlayerSoldier->exists()) {
			throw new NotFoundException(__('Invalid user soldier'));
		}
		if ($this->PlayerSoldier->delete()) {
			$this->Session->setFlash(__('User soldier deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('User soldier was not deleted'));
		$this->redirect(array('action' => 'index'));
	}

}
