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
 * @author        Özgür Uysal
 * @version       0.1
 */


class PlayerStatsController extends AppController {

/**
 * Used Models (so the dataSource gets set for all these models when switching databases)
 *
 * @var array
 */
	public $uses = array('PlayerStat', 'Player', 'Penalty', 'UserSoldier', 'User', 'UserDetail');

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array('Html', 'Time', 'Gravatar.Gravatar');

/**
 * Components
 *
 * @var array
 */
	public $components = array(
		'RequestHandler',
		'GeoIP',
		'Session',
	);

	//-------------------------------------------------------------------

/**
 * Not used
 */
	public function index() {
		$this->Session->setFlash(__('That was not a valid request...'), null, null, 'error');
		$this->redirect(array('plugin' => null, 'admin' => false, 'controller' => 'pages', 'action' => 'display', 'server' => Configure::read('server_id'), 'home'));
	}

	//-------------------------------------------------------------------

/**
 * Player's stats page
 *
 * @param integer $id Player id
 * @return array
 */
	public function view($id = null) {
		// Prevent faulty routing when switching servers
		if (!isset($id)) {
			$this->Session->setFlash(__('That was not a valid request...'), null, null, 'error');
			$this->redirect(array('plugin' => null, 'admin' => false, 'controller' => 'pages', 'action' => 'display', 'server' => Configure::read('server_id'), 'home'));
		}

		$this->PlayerStat->id = $id;
		$data = $this->PlayerStat->read();

		// make sure we don't have an empty array - meaning no actual player
		if (empty($data)) {
			if ($this->request->is('requested')) {
				return array($data);
			} else {
				$this->Session->setFlash(__('The player with id "%s" does not exist on this server...', $id), null, null, 'error');
				$this->redirect(array('plugin' => null, 'admin' => false, 'controller' => 'pages', 'action' => 'display', 'server' => Configure::read('server_id'), 'home'));
			}
		}

		// find the user's email (for gravatar use) for this player and add it to the array
		$data['UserDetails'] = $this->findUserDetails($id);
		//$data['Player']['email'] = $this->findUserEmail($id);

		// Add required values to array
		$data['PlayerStat']['rank'] = $this->XlrFunctions->getRank($data['PlayerStat']['kills']);
		$data['PlayerStat']['league'] = $this->XlrFunctions->getLeague($data['PlayerStat']['skill']);
		$data['Player']['flag'] = $this->XlrFunctions->getFlag($data['Player']['ip']);
		$data['Player']['level'] = $this->XlrFunctions->getLevel($data['Player']['group_bits']);
		if ($data['PlayerStat']['deaths'] != 0) {
			$data['PlayerStat']['ratio'] = $data['PlayerStat']['kills'] / $data['PlayerStat']['deaths'];
		} else {
			$data['PlayerStat']['ratio'] = 0;
		}

		$_n = $this->XlrFunctions->getRankProgress($data['PlayerStat']['kills']);
		if ($_n != null) {
			$_progress = $_n;
		} else {
			$_progress = 'TopRank'; //Player achieved the highest rank
		}
		$data['PlayerStat']['rank_progress'] = $_progress;

		$playerLeagueRanking = $this->getPlayerLeagueRanking($data['PlayerStat']['league'], $this->PlayerStat->id);

		if ($playerLeagueRanking != null) {
			$data['PlayerStat']['top_skill_rank'] = $playerLeagueRanking['0']['derivated_table']['place'];
		} else {
			$data['PlayerStat']['top_skill_rank'] = '-';
			$data['PlayerStat']['league'] = false;
		}

		// Calculate K/D ratio $gaugeValue as we're using an unbalanced scale (1 is always in the middle)
		$ratio = $data['PlayerStat']['ratio'];
		$gaugeMax =	round($ratio) + 2; //Dynamic max value
		$this->set('gaugeMax', $gaugeMax);

		if ($ratio <= 1) {
			$gaugeValue = $ratio * ($gaugeMax / 2);
		} elseif ($ratio > 1) {
			$gaugeValue = ($gaugeMax / 2) + ((($ratio - 1) / ($gaugeMax - 1)) * ($gaugeMax / 2));
		}

		$data['PlayerStat']['gauge_value'] = $gaugeValue;

		//pr($data);

		if ($this->request->is('requested')) {
			return array($data);
		} else {
			$this->set('playerStats', $data);
			$this->set('isBookMarked', $this->checkBookmark($id));
		}
		return null;
	}

	//-------------------------------------------------------------------

/**
 * @param $playerID
 * @return bool
 */
	public function checkBookmark($playerID) {
		// Return false if not logged in
		if (empty($this->user['AppUser']['id'])) {
			return false;
		}

		$this->UserSoldier->unbindModel(array(
			'belongsTo' => array('AppUser', 'Server', 'Playerstat')));

		$result = $this->UserSoldier->find('count', array(
			'conditions' => array(
				'UserSoldier.playerstats_id' => $playerID,
				'UserSoldier.server_id' => Configure::read('server_id'),
				'UserSoldier.user_id' => $this->user['AppUser']['id']
			)
		));
		return $result;
	}

	//-------------------------------------------------------------------

/**
 * Gets player's league ranking
 *
 * @param $league Player's league id
 * @param $playerID Player ID
 * @return mixed
 */
	public function getPlayerLeagueRanking($league, $playerID, $currentTime = null) {
		if ($currentTime == null) {
			$currentTime = gmdate('U');
		}
		$leagueValue = Configure::read('league.' . $league);
		$minimumConnections = Configure::read('options.min_connections');
		$minimumKills = Configure::read('options.min_kills');

		$conditions = array(
			'PlayerStat.skill BETWEEN ? AND ?' => array($leagueValue[1], $leagueValue[2]),
			'PlayerStat.hide' => 0,
			'PlayerStat.kills >' => $minimumKills,
			'Player.connections >' => $minimumConnections,
			'PlayerStat.client_id = Player.id',
		);

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

		// Create a var to hold player ranking
		$this->PlayerStat->query('SET @place = 0');

		// Building sub query to be nested in main query. This will just create the query, not execute it.
		$db = $this->PlayerStat->getDataSource();
		$subQuery = $db->buildStatement(
			array(
				'fields' => array(
					'@place := @place + 1 AS place',
					'PlayerStat.id',
					'PlayerStat.client_id',
					'Player.name'
					),
				'table' => $db->fullTableName($this->PlayerStat),
				'joins' => array(',' . $db->fullTableName($this->Player) . ' AS Player'), // Not sure if this is the proper way
				'alias' => 'PlayerStat',
				'conditions' => $conditions,
				'order' => array('PlayerStat.skill' => 'desc'),
			),
			$this->PlayerStat
		);

		// Run final nested query to get player's league ranking
		$playerLeagueRanking = $this->PlayerStat->query('SELECT * FROM (' . $subQuery . ') derivated_table WHERE id = ' . $playerID);

		return $playerLeagueRanking;
		//pr($playerLeagueRanking);
	}

	//-------------------------------------------------------------------

/**
 * Player search by name
 */
	public function search() {
		if (isset($this->data['PlayerStat']['q'])) {
			$searchData = $this->data['PlayerStat']['q'];
			$result = $this->PlayerStat->find('all', array(
					'conditions' => array(
						'Player.name LIKE' => '%' . $searchData . '%',
					),
				)
			);

			$this->set('searchData', $searchData);
			$this->set('result', $result);
		} else {
			$this->Session->setFlash(__('Oops, can\'t perform a search without any data. Please try again.'), null, null, 'error');
			$this->redirect(array('plugin' => null, 'admin' => false, 'controller' => 'pages', 'action' => 'display', 'server' => Configure::read('server_id'), 'home'));
		}
	}

/**
 * @param $playerId
 * @return string
 */
	public function findUserDetails($playerId = 0) {
		$player = $this->UserSoldier->findByPlayerstatsIdAndServerId($playerId, Configure::read('server_id'));

		if (!empty($player)) {
			$details = $this->UserDetail->findAllByUserId($player['AppUser']['id'], array('field', 'value'));
			$userDetails = array();
			foreach ($details as $a) {
				foreach ($a as $k => $v) {
					$userDetails[$v['field']] = $v['value'];
				}
			}
			//pr($player);
			$userDetails['email'] = $player['AppUser']['email'];
			return $userDetails;
		} else {
			return array('email' => '');
		}
	}

}