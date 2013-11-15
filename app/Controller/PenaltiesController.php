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

class PenaltiesController extends AppController {

	/**
	 * Models used
	 *
	 * @var array
	 */
	public $uses = array('PlayerStat', 'Penalty');

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
	 * Displays all penalties via dataTables.
	 *
	 * @return void
	 */
	public function index() {
		/* This is handled by penaltiesIndexJson() */
	}

	public function detail ($id = null) {

		$this->Penalty->id = $id;
        $data = $this->Penalty->read();

		/**
		 * If the data is internally requested from another part of the website (ie. an element) don't store it for
		 * the view, but just return the $data array
		 */
		if ($this->request->is('requested')) {
			return array($data);
		}
		/**
		 * Else, if it is not requested internally, store the data as an array in the variable to use in the view
		 */
		else {
			$this->set('penalty', $data);
		}

	}

	/**
	 * Displays player specific penalties via dataTables.
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
		 * Build conditions for player's penalties
		 */
		$conditions = array(
			'Penalty.client_id' => $b3ID,
			'Penalty.inactive' => 0,
		);

		$data = $this->Penalty->find('all',
			array(
				'conditions' => $conditions,
			)
		);

		/**
		 * Finally get the results of the query
		 * and send them to view file json/player_maps_json.ctp
		 */
		if ($this->request->is('requested')) {
			return $data;
		} else {
			$this->set('penalties', $data);
		}
		//pr($data);
	}

	/**
	 * Queries all penalties and pass data to view file json/penalties_index_json.ctp
	 * to be processed by dataTables.
	 *
	 * Sample data returned:
	 * Array
	 * (
	 *      [sEcho] => 1
	 *      [iTotalRecords] => 394
	 *      [iTotalDisplayRecords] => 222
	 *      [aaData] => Array
	 *          (
	 *              [0] => Array
	 *                  (
	 *                      [0] => pos#			//position number
	 *                      [1] => Kick			//type
	 *                      [2] => zBlaCkMoREz	//client name
	 *                      [3] => 1319834046	//time add
	 *                      [4] => 0			//time expire
	 *                      [5] => makeroom		//reason
	 *                      [6] => 0			//duration
	 *                      [7] => makeroom		//keyword
	 *                      [8] => Freelander00	//admin
	 *                      [9] => 				//data
	 *                      [10] => 52			//client id
	 *                      [11] => 1319834046	//time edit
	 *                      [12] => 8			//penalty id
	 *                  )
	 *          )
	 * )
	 *
	 * @return mixed
	 */
	public function penaltiesIndexJson() {

		/**
		 * Build conditions for player's penalties
		 */
		$currentTime = gmdate('U');
		$conditions = array(
			'AND' => array(
				'OR' => array(
					'Penalty.time_expire' => array(-1, 0),
					'Penalty.time_expire >' => $currentTime
				),
			),
			'Penalty.inactive' => 0,
			'Penalty.type !=' => 'Notice',
		);

		if (Configure::read('options.show_bans_only')) {
			$conditions['OR'] =  array(
				'Penalty.type' => array(
					'Ban',
					'TempBan',
				)
			);
		}

		$this->paginate = array(
				'fields' => array (
					'Penalty.type',
					'Player.name',
					'Penalty.time_add',
					'Penalty.time_expire',
					'Penalty.reason',
					'Penalty.duration',
					'Penalty.keyword',
					'Admin.name',
					'Penalty.data',
					'Penalty.client_id',
					'Penalty.time_edit',
					'Penalty.id',
				),
				'conditions' => $conditions,
			);

		$data = $this->DataTable->getResponse('Penalty');

		//Add a dummy value to the beginning of each penalty data array. We will modify it in view file as position numbers.
		for($i=0; $i<count($data['aaData']); $i++) {
			array_unshift($data['aaData'][$i], 'pos#');
		}

		if ($this->request->is('requested')) {
			return $data;
		} else {
			$this->set('penalties', $data);
		}
		//pr($data);
	}

	/**
	 * Queries penalties for a certain player and pass data to view file json/penalties_json.ctp
	 * to be processed by dataTables.
	 *
	 * Sample data returned:
	 * Array
	 * (
	 * 		[sEcho] => 1
	 * 		[iTotalRecords] => 3222
	 * 		[iTotalDisplayRecords] => 3
	 * 		[aaData] => Array
	 * 			(
	 * 				[0] => Array
	 * 					(
	 * 						[0] => pos#			//position number
	 * 						[1] => Warning		//type
	 * 						[2] => ^7do not use commands that you do not have access to, try using !help //reason
	 * 						[3] => 				//data
	 * 						[4] => 1319997409	//time_add
	 * 						[5] => 1320001009	//time_expire
	 * 						[6] => nocmd		//keyword
	 * 						[7] => 1319997409	//time_edit
	 * 						[8] => mikelegend87	//player name
	 * 						[9] => 23			//penalty id
	 * 					)
	 * 			)
	 * )
	 *
	 * @param null $playerID player id
	 * @return mixed
	 */
	public function penaltiesJson ($playerID = null) {

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
		 * Build conditions for player's penalties
		 */
		$conditions = array(
			'Penalty.client_id' => $b3ID,
			'Penalty.inactive !=' => 1,
		);

		$this->paginate = array(
			'fields' => array (
					'Penalty.type',
					'Penalty.reason',
					'Penalty.data',
					'Penalty.time_add',
					'Penalty.time_expire',
					'Penalty.keyword',
					'Penalty.time_edit',
					'Player.name',
					'Penalty.id',
				),
				'conditions' => $conditions,
		);

		$data = $this->DataTable->getResponse('Penalty');

		//Add a dummy value to the beginning of each player penalty data array. We will modify it in view file as position numbers.
		for($i=0; $i<count($data['aaData']); $i++) {
			array_unshift($data['aaData'][$i], 'pos#');
		}
		//pr($data);

		if ($this->request->is('requested')) {
			return $data;
		} else {
			$this->set('playerPenalties', $data);
		}

	}

	public function wallOfShame () {

		$data = array();

		/* Who's got the most overall penalties */
		$data['penalties'] = $this->Penalty->find('first',
			array(
				'fields' => array (
					'COUNT(Player.name) AS penalties',
					'Player.name',
				),
				'group' => 'Player.name',
				'order' => 'penalties desc',
			)
		);

		/* Who's got the most warnings */
		$conditions = array(
			'Penalty.type' => 'Warning',
		);
		$data['warnings'] = $this->Penalty->find('first',
			array(
				'fields' => array (
					'COUNT(Player.name) AS penalties',
					'Player.name',
				),
				'conditions' => $conditions,
				'group' => 'Player.name',
				'order' => 'penalties desc',
			)
		);

		/* Who's got the most kicks */
		$conditions = array(
			'Penalty.type' => 'Kick',
		);
		$data['kicks'] = $this->Penalty->find('first',
			array(
				'fields' => array (
					'COUNT(Player.name) AS penalties',
					'Player.name',
				),
				'conditions' => $conditions,
				'group' => 'Player.name',
				'order' => 'penalties desc',
			)
		);

		/* Who's got the most tempbans */
		$conditions = array(
			'Penalty.type' => 'TempBan',
		);
		$data['tempbans'] = $this->Penalty->find('first',
			array(
				'fields' => array (
					'COUNT(Player.name) AS penalties',
					'Player.name',
				),
				'conditions' => $conditions,
				'group' => 'Player.name',
				'order' => 'penalties desc',
			)
		);

		/* Who's got the most cuss words */
		$conditions = array(
			'Penalty.keyword' => 'cuss',
		);
		$data['curses'] = $this->Penalty->find('first',
			array(
				'fields' => array (
					'COUNT(Player.name) AS penalties',
					'Player.name',
				),
				'conditions' => $conditions,
				'group' => 'Player.name',
				'order' => 'penalties desc',
			)
		);

		/* Who's got the most spammages */
		$conditions = array(
			'Penalty.keyword' => 'spam',
		);
		$data['spam warnings'] = $this->Penalty->find('first',
			array(
				'fields' => array (
					'COUNT(Player.name) AS penalties',
					'Player.name',
				),
				'conditions' => $conditions,
				'group' => 'Player.name',
				'order' => 'penalties desc',
			)
		);


		/*
		 * If the data is internally requested from another part of the website (ie. an element) don't store it for
		 * the view, but just return the $data array
		 */
		if ($this->request->is('requested')) {
			return $data;
		}
		/**
		 * Else, if it is not requested internally, store the data as an array in the variable to use in the view
		 */
		else {
			$this->set('warnings', $data);
		}

		//pr($data);
	}
}