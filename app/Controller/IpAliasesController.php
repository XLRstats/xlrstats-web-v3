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

class IpAliasesController extends AppController {

	/**
	 * Models used
	 *
	 * @var array
	 */
	public $uses = array('PlayerStat', 'IpAlias');

	/**
	 * Helpers
	 *
	 * @var array
	 */
	public $helpers = array(
		'Js' => array('Jquery'),
	);

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array(
		'GeoIP',
		'RequestHandler',
		'DataTable',
		'Paginator',
	);

	//-------------------------------------------------------------------

	/**
	 * Displays player's Ip aliases via dataTables.
	 *
	 * @param int $playerID is passed to the dataTable script's "sAjaxSource".
	 */
	public function view ($playerID = null) {

		/* Prevent direct access to this method */
		if (!$this->request->is('ajax')) {
			$this->Session->setFlash(__('That was not a valid request...'), null, null, 'error');
			$this->redirect(array('plugin' => null, 'admin' => false, 'controller' => 'pages', 'action' => 'display', 'server' => Configure::read('server_id'), 'home'));
		}

		$this->set('playerID', $playerID);
		$this->layout = 'ajax';

	}

	/**
	 * Queries player IPs and pass data to view file json/ip_aliases_json.ctp
	 * to be processed by dataTables.
	 *
	 * Sample data returned:
	 * Array
	 * (
	 * 		[sEcho] => 1
	 * 		[iTotalRecords] => 2613
	 * 		[iTotalDisplayRecords] => 89
	 * 		[aaData] => Array
	 * 			(
	 * 				[0] => Array
	 * 					(
	 * 						[0] => Array
	 * 							(
	 * 								[0] => Array
	 * 									(
	 * 										[0] => gb
	 * 										[1] => United Kingdom
	 * 									)
	 * 								[1] => 94.13.38.240
	 * 							)
	 * 						[1] => 1
	 * 						[2] => 1319984292
	 * 						[3] => 1319984292
	 * 					)
	 * 			)
	 * )
	 *
	 * @param null $playerID player id
	 * @return mixed
	 */
	public function ipAliasesJson ($playerID = null) {

		/**
		 * Find correct B3 client ID ($b3ID) belonging to XLRstats player ID
		 */
		$player = $this->PlayerStat->find('first', array(
				'conditions' => array(
					'PlayerStat.id' => $playerID,
				)
			)
		);
		$b3ID = $player['Player']['id'];

		/**
		 * Build conditions for player's Ipaliases
		 */
		$conditions = array(
			'IpAlias.client_id' => $b3ID,
			//'IpAlias.inactive !=' => 1,
		);

		$this->paginate = array(
				'fields' => array (
					'IpAlias.ip',
					'IpAlias.num_used',
					'IpAlias.time_add',
					'IpAlias.time_edit',
				),
				'conditions' => $conditions,
		);

		$data = $this->DataTable->getResponse('IpAlias');


		//Add flag information to the array
		foreach($data['aaData'] as $k => &$v) {
			$v[0] = array($this->XlrFunctions->getFlag($v[0]), $v[0]);
		}

		//pr($data);

		if ($this->request->is('requested')) {
			return $data;
		} else {
			$this->set('ipAliases', $data);
		}

	}
}
