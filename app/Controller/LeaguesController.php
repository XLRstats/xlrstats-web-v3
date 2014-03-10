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

class LeaguesController extends AppController {

/**
 * Used Models (so the dataSource gets set for all these models when switching databases)
 *
 * @var array
 */
	public $uses = array('League', 'Player', 'Penalty');

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array(
		'Number',
		'Html',
		'Text',
		'Form',
		'Js' => array(
			'Jquery',
		)
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
 * An overview of available leagues from our configuration file.
 * Let the View file handle the request
 */
	public function index() {
	}

	//-------------------------------------------------------------------

/**
 * Displays a league via dataTables.
 *
 * @param int $leagueID is passed to the dataTable script's "sAjaxSource".
 */
	public function view($leagueID = null) {
		// Prevent faulty routing when switching servers
		if (!isset($leagueID) || (!array_key_exists($leagueID, Configure::read('league')) && $leagueID != 0)) {
			$this->Session->setFlash(__('That League does not exist...'), null, null, 'error');
			$this->redirect(array('plugin' => null, 'admin' => false, 'controller' => 'pages', 'action' => 'display', 'server' => Configure::read('server_id'), 'home'));
		}

		$leagueValue = $this->__getLeagueValues($leagueID);
		$this->set('leagueValue', $leagueValue);
		$this->set('leagueID', $leagueID);
		$minimumConnections = Configure::read('options.min_connections');
		$this->set('minimumConnections', $minimumConnections);
		$minimumKills = Configure::read('options.min_kills');
		$this->set('minimumKills', $minimumKills);
	}

	//-------------------------------------------------------------------

/**
 * Queries selected league and pass data to view file json/leagues_json.ctp
 * to be processed by dataTables.
 *
 * Sample data returned:
 * Array
 *  (
 *      [sEcho] => 1
 *      [iTotalRecords] => 1363
 *      [iTotalDisplayRecords] => 1
 *      [aaData] => Array
 *          (
 *              [0] => Array
 *                  (
 *                      [0] => pos#                     //position number
 *                      [1] => Freelander00             //name
 *                      [2] => 1263.27                  //skill
 *                      [3] => 1.32035                  //ratio
 *                      [4] => 8037                     //kills
 *                      [5] => 6087                     //deaths
 *                      [6] => 81                       //teamkills
 *                      [7] => 16                       //winstreak
 *                      [8] => 193                      //rounds
 *                      [9] => 68                       //suicides
 *                      [10] => 63                      //teamdeaths
 *                      [11] => -9                      //losestreak
 *                      [12] => 214                     //connections
 *                      [13] => 92.44.39.140            //ip
 *                      [14] => 128                     //group_bits
 *                      [15] => 13                      //player id
 *                      [16] => 19                      //rank
 *                      [17] => 2                       //skill league
 *                      [18] => Array
 *                          (
 *                              [0] => tr               //country code for flag
 *                              [1] => Turkey           //country
 *                          )
 *                      [19] => Array
 *                          (
 *                              [level] => 100          //level
 *                              [name] => Super Admin   //level name
 *                          )
 *          )
 *  )
 *
 * @param int $leagueID
 * @return mixed
 */
	public function leaguesJson($leagueID = null, $currentTime = null) {
        if ($currentTime == null) {
            $currentTime = gmdate('U');
        }
		$leagueValue = $this->__getLeagueValues($leagueID);
		$this->set('leagueValue', $leagueValue);

		// Build up the array of conditions we need to select on
		$conditions = array(
			$leagueValue[0] . ' BETWEEN ? AND ?' => array($leagueValue[1], $leagueValue[2]),
			'League.hide' => 0,
		);

		// If the league is not based on Player.connections, we'll keep a threshold of $minimumConnections AND $minimumKills
		$minimumConnections = Configure::read('options.min_connections');
		$minimumKills = Configure::read('options.min_kills');
		if ($leagueValue[0] != 'Player.connections') {
			$conditions['Player.connections >'] = $minimumConnections;
			$conditions['League.kills >'] = $minimumKills;
		}

		// Hide players that have not played in # days (disable with 0 or empty setting)
		$maxDays = Configure::read('options.max_days');
		if ($maxDays != '' && $maxDays != 0) {
			$conditions['Player.time_edit >='] = $currentTime - ($maxDays * 60 * 60 * 24);
		}

		// Hide banned players
		$hideBanned = (bool)Configure::read('options.hide_banned');

		if ($hideBanned) {
			$conditionsSubQuery = array(
				'OR' => array(
					'Penalty.type' => array(
						'Ban',
						'TempBan',
					)
				),
				'AND' => array(
					'OR' => array(
						'Penalty.time_expire' => -1,
						'Penalty.time_expire >' => $currentTime
					),
				),
				'Penalty.inactive' => 0
			);

			$db = $this->Penalty->getDataSource();
			$subQuery = $db->buildStatement(
				array(
					'fields' => array(
						'DISTINCT(Penalty.client_id)',
					),
					'table' => $db->fullTableName($this->Penalty),
					'alias' => 'Penalty',
					'conditions' => $conditionsSubQuery,
				),
				$this->Penalty
			);
			$subQuery = ' `Player`.`id` NOT IN (' . $subQuery . ') ';
			$subQueryExpression = $db->expression($subQuery);
			$conditions[] = $subQueryExpression;
		}

		$this->paginate = array(
			// Field names must be in the same order as displayed in the dataTable.
			'fields' => array(
				'Player.name',
				'League.skill',
				'League.ratio',
				'League.kills',
				'League.deaths',
				// These are extra fields (not to be filtered or sorted) we want to display
				'League.teamkills',
				'League.winstreak',
				'League.rounds',
				'League.suicides',
				'League.teamdeaths',
				'League.losestreak',
				'Player.connections',
				'Player.ip',
				'Player.group_bits',
				'League.id',
			),
			'conditions' => $conditions,
			/*
			 * dataTables sort the data automatically based on our script configuration.
			 * We should sort it manually here just in case we call $data via requestAction()
			 */
			'order' => 'League.skill desc',
			'limit' => 5,
		);

		$data = $this->DataTable->getResponse('League');

		//Add a dummy value to the beginning of each weapon data array. We will modify it in view file as position numbers.
		$dataLength = count($data['aaData']);
		for ($i = 0; $i < $dataLength; $i++) {
			array_unshift($data['aaData'][$i], 'pos#');
		}

		// Add some values to the array, like rank and position
		foreach ($data['aaData'] as $k => $v) {
			array_push(
				$data['aaData'][$k],
				$this->XlrFunctions->getRank($v[4]),
				$this->XlrFunctions->getLeague($v[2]),
				$this->XlrFunctions->getFlag($v[13]),
				$this->XlrFunctions->getLevel($v[14])
			);
		}

		//pr($data);

		$nrRows = $this->League->getAffectedRows();

		if ($this->request->is('requested')) {
			return array($data, $nrRows);
		} else {
			$this->set('xlrLeague', $data);
		}
		return null;
	}

	//-------------------------------------------------------------------

/**
 * @param int $leagueID
 * @return array
 */
	public function getAwards($leagueID = 0, $currentTime = null) {
        if ($currentTime == null) {
            $currentTime = gmdate('U');
        }
		$leagueValue = $this->__getLeagueValues($leagueID);
		$this->set('leagueID', $leagueID);

		// Using Cache to reduce load on DB config '1hour' in bootstrap.php caches 1 hrs on File
		$awardLeague = 'leagueawards-' . Configure::read('server_id') . '-' . $leagueID;
		$data = Cache::read($awardLeague, '1hour');
		if (!$data) {
			// Build up the array of conditions we need to select on
			$conditions = array(
				$leagueValue[0] . ' BETWEEN ? AND ?' => array($leagueValue[1], $leagueValue[2]),
				'League.hide' => 0,
			);

			// If the league is not based on Player.connections, we'll keep a threshold of $minimumConnections AND $minimumKills
			$minimumConnections = Configure::read('options.min_connections');
			$minimumKills = Configure::read('options.min_kills');
			if ($leagueValue[0] != 'Player.connections') {
				$conditions['Player.connections >'] = $minimumConnections;
				$conditions['League.kills >'] = $minimumKills;
			}

			// Hide players that have not played in # days (disable with 0 or empty setting)
			$maxDays = Configure::read('options.max_days');
			if ($maxDays != '' && $maxDays != 0) {
                $conditions['Player.time_edit >='] = $currentTime - ($maxDays * 60 * 60 * 24);
			}

			// Hide banned players
			$hideBanned = (bool)Configure::read('options.hide_banned');

			if ($hideBanned) {
				$conditionsSubQuery = array(
					'OR' => array(
						'Penalty.type' => array(
							'Ban',
							'TempBan',
						)
					),
					'AND' => array(
						'OR' => array(
							'Penalty.time_expire' => -1,
							'Penalty.time_expire >' => $currentTime
						),
					),
					'Penalty.inactive' => 0
				);

				$db = $this->Penalty->getDataSource();
				$subQuery = $db->buildStatement(
					array(
						'fields' => array(
							'DISTINCT(Penalty.client_id)',
						),
						'table' => $db->fullTableName($this->Penalty),
						'alias' => 'Penalty',
						'conditions' => $conditionsSubQuery,
					),
					$this->Penalty
				);
				$subQuery = ' `Player`.`id` NOT IN (' . $subQuery . ') ';
				$subQueryExpression = $db->expression($subQuery);
				$conditions[] = $subQueryExpression;
			}

			$data[] = $this->League->find('first',
				array(
					'fields' => array(
						'Player.name',
						'League.skill',
						'League.id',
					),
					'conditions' => $conditions,
					'order' => 'League.skill DESC'
				)
			);
			$data[] = $this->League->find('first',
				array(
					'fields' => array(
						'Player.name',
						'League.kills',
						'League.id',
					),
					'conditions' => $conditions,
					'order' => 'League.kills DESC'
				)
			);
			$data[] = $this->League->find('first',
				array(
					'fields' => array(
						'Player.name',
						'League.ratio',
						'League.id',
					),
					'conditions' => $conditions,
					'order' => 'League.ratio DESC'
				)
			);
			$data[] = $this->League->find('first',
				array(
					'fields' => array(
						'Player.name',
						'League.winstreak',
						'League.id',
					),
					'conditions' => $conditions,
					'order' => 'League.winstreak DESC'
				)
			);
			$data[] = $this->League->find('first',
				array(
					'fields' => array(
						'Player.name',
						'League.rounds',
						'League.id',
					),
					'conditions' => $conditions,
					'order' => 'League.rounds DESC'
				)
			);
			$data[] = $this->League->find('first',
				array(
					'fields' => array(
						'Player.name',
						'(League.kills / League.rounds) as efficiency',
						'League.id',
					),
					'conditions' => $conditions,
					'order' => 'efficiency DESC'
				)
			);

			//debug('caching');
			Cache::write($awardLeague, $data, '1hour');
		}
		//pr($data);

		if ($this->request->is('requested')) {
			return array($data);
		} else {
			$this->set('leagueawards', $data);
		}
		return null;
	}

	//-------------------------------------------------------------------

/**
 * Get Missing in Action players
 *
 * @param int $leagueID
 * @param bool $random
 * @param int $limit
 * @return array|null
 */
	public function getMia($leagueID = 0, $random = false, $limit = 15, $currentTime = null) {
        if ($currentTime == null) {
            $currentTime = gmdate('U');
        }
		$leagueValue = $this->__getLeagueValues($leagueID);
		$this->set('leagueValue', $leagueValue);

		// Build up the array of conditions we need to select on
		$conditions = array(
			$leagueValue[0] . ' BETWEEN ? AND ?' => array($leagueValue[1], $leagueValue[2]),
			'League.hide' => 0,
		);

		// If the league is not based on Player.connections, we'll keep a threshold of $minimumConnections AND $minimumKills
		$minimumConnections = Configure::read('options.min_connections');
		$minimumKills = Configure::read('options.min_kills');
		if ($leagueValue[0] != 'Player.connections') {
			$conditions['Player.connections >'] = $minimumConnections;
			$conditions['League.kills >'] = $minimumKills;
		}

		// Select players that have not played in # days (disable with 0 or empty setting)
		$maxDays = Configure::read('options.max_days');
		if ($maxDays != '' && $maxDays != 0) {
            $conditions['Player.time_edit >='] = $currentTime - ($maxDays * 60 * 60 * 24);
		} else {
			// All players are shown, so no players are MIA, break it off here and return null
			return null;
		}

		// Hide banned players
		$hideBanned = (bool)Configure::read('options.hide_banned');

		if ($hideBanned) {
			$conditionsSubQuery = array(
				'OR' => array(
					'Penalty.type' => array(
						'Ban',
						'TempBan',
					)
				),
				'AND' => array(
					'OR' => array(
						'Penalty.time_expire' => -1,
						'Penalty.time_expire >' => $currentTime
					),
				),
				'Penalty.inactive' => 0
			);

			$db = $this->Penalty->getDataSource();
			$subQuery = $db->buildStatement(
				array(
					'fields' => array(
						'DISTINCT(Penalty.client_id)',
					),
					'table' => $db->fullTableName($this->Penalty),
					'alias' => 'Penalty',
					'conditions' => $conditionsSubQuery,
				),
				$this->Penalty
			);
			$subQuery = ' `Player`.`id` NOT IN (' . $subQuery . ') ';
			$subQueryExpression = $db->expression($subQuery);
			$conditions[] = $subQueryExpression;
		}

		// Prepare data
		if ($random) {
			$order = 'RAND()';
		} else {
			$order = 'League.skill desc';
		}

		$data = $this->League->find('all',
			array(
				'conditions' => $conditions,
				'order' => $order,
				'limit' => $limit,
			)
		);
		$nrRows = $this->League->getAffectedRows();

		//pr($data);
		if ($this->request->is('requested')) {
			return array($data, $nrRows);
		} else {
			$this->set('leagueawards', $data);
		}
		return null;
	}

	//-------------------------------------------------------------------

/**
 * Return the date a player is seen last time
 *
 * @param int $leagueID
 * @param int $limit
 * @return array
 */
	public function getLastSeen($leagueID = 0, $limit = 15, $currentTime = null) {
        if ($currentTime == null) {
            $currentTime = gmdate('U');
        }
		$leagueValue = $this->__getLeagueValues($leagueID);
		$this->set('leagueValue', $leagueValue);

		// Build up the array of conditions we need to select on
		$conditions = array(
			$leagueValue[0] . ' BETWEEN ? AND ?' => array($leagueValue[1], $leagueValue[2]),
			'League.hide' => 0,
		);

		// If the league is not based on Player.connections, we'll keep a threshold of $minimumConnections AND $minimumKills
		$minimumConnections = Configure::read('options.min_connections');
		$minimumKills = Configure::read('options.min_kills');
		if ($leagueValue[0] != 'Player.connections') {
			$conditions['Player.connections >'] = $minimumConnections;
			$conditions['League.kills >'] = $minimumKills;
		}

		// Hide banned players
		$hideBanned = (bool)Configure::read('options.hide_banned');

		if ($hideBanned) {
			$conditionsSubQuery = array(
				'OR' => array(
					'Penalty.type' => array(
						'Ban',
						'TempBan',
					)
				),
				'AND' => array(
					'OR' => array(
						'Penalty.time_expire' => -1,
						'Penalty.time_expire >' => $currentTime
					),
				),
				'Penalty.inactive' => 0
			);

			$db = $this->Penalty->getDataSource();
			$subQuery = $db->buildStatement(
				array(
					'fields' => array(
						'DISTINCT(Penalty.client_id)',
					),
					'table' => $db->fullTableName($this->Penalty),
					'alias' => 'Penalty',
					'conditions' => $conditionsSubQuery,
				),
				$this->Penalty
			);
			$subQuery = ' `Player`.`id` NOT IN (' . $subQuery . ') ';
			$subQueryExpression = $db->expression($subQuery);
			$conditions[] = $subQueryExpression;
		}

		// Prepare data
		$order = 'Player.time_edit desc';

		$data = $this->League->find('all',
			array(
				'conditions' => $conditions,
				'order' => $order,
				'limit' => $limit,
			)
		);
		$nrRows = $this->League->getAffectedRows();

		//pr($data);
		if ($this->request->is('requested')) {
			return array($data, $nrRows);
		} else {
			$this->set('leagueawards', $data);
		}
		return null;
	}

	//-------------------------------------------------------------------

/**
 * Gets configuration values for the selected league
 * Defaults to 'All stats' values when no league is given
 *
 * @param int $leagueID
 * @return mixed
 */
	private function __getLeagueValues($leagueID = 0) {
		$leagueValuesAll = array();
		if ($leagueID == 0) {
			$leagueValuesAll[0] = array('League.skill', 0, 9999999, __('All stats'), __('A complete list of all qualified players.'));
		} else {
			$leagueValuesAll = Configure::read('league');
		}

		$leagueValues = $leagueValuesAll[$leagueID];

		return $leagueValues;
	}

}