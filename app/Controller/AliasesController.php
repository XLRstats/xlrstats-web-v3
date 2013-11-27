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

class AliasesController extends AppController {

/**
 * Models used
 *
 * @var array
 */
	public $uses = array('PlayerStat', 'Alias');

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
 * Displays player's aliases via dataTables.
 *
 * @param int $playerID is passed to the dataTable script's "sAjaxSource".
 */
	public function view($playerID = null) {
		// Prevent direct access to this method
		if (!$this->request->is('ajax')) {
			$this->Session->setFlash(__('That was not a valid request...'), null, null, 'error');
			$this->redirect(array('plugin' => null, 'admin' => false, 'controller' => 'pages', 'action' => 'display', 'server' => Configure::read('server_id'), 'home'));
		}

		$this->set('playerID', $playerID);
		$this->layout = 'ajax';
	}

	//-------------------------------------------------------------------

/**
 * Queries player aliases and pass data to view file json/aliases_json.ctp
 * to be processed by dataTables.
 *
 * Sample data returned:
 * Array
 *  (
 *      [sEcho] => 1
 *      [iTotalRecords] => 862
 *      [iTotalDisplayRecords] => 4
 *      [aaData] => Array
 *           (
 *              [0] => Array
 *                  (
 *                      [0] => Freelander[*]    //alias
 *                      [1] => 1                //# of times uses
 *                      [2] => 1173819374       //first used
 *                      [3] => 1182456815       //last used
 *                   )
 *            )
 *  )
 *
 * @param null $playerID player id
 * @return mixed
 */
	public function aliasesJson($playerID = null) {
		// Find correct B3 client ID ($b3ID) belonging to XLRstats player ID
		$player = $this->PlayerStat->find('first', array(
				'conditions' => array(
					'PlayerStat.id' => $playerID,
				)
			)
		);
		$b3ID = $player['Player']['id'];

		// Build conditions for player's aliases
		$conditions = array(
			'Alias.client_id' => $b3ID,
		);

		$this->paginate = array(
			'fields' => array (
					'Alias.alias',
					'Alias.num_used',
					'Alias.time_add',
					'Alias.time_edit',
				),
				'conditions' => $conditions,
		);

		$data = $this->DataTable->getResponse('Alias');

		//pr($data);

		if ($this->request->is('requested')) {
			return $data;
		} else {
			$this->set('aliases', $data);
		}
		return null;
	}

}