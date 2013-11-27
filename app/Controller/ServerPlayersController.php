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

App::uses('Xml', 'Utility');

class ServerPlayersController extends AppController {

/**
 * Used Models
 *
 * @var array
 */
	public $uses = array(
		'ServerPlayer',
		'PlayerStat',
		'Player'
	);

/**
 * Components
 *
 * @var array
 */
	public $components = array(
		'RequestHandler',
		'Session',
		'GeoIP',
		'GeoIPCity'
	);

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array(
		'Number'
	);

	//-------------------------------------------------------------------

/**
 * Creates lists with Clients per team
 *
 * @return array
 * @throws NotFoundException
 */
	public function index() {
		$serverID = Configure::read('server_id');
		$this->serverID = $serverID;

		// Check if we need to parse a database table or an xml file
		$_status = Configure::read('servers.' . $this->serverID . '.statusurl');
		if ($_status == null || $_status == 'none') {
			$result = $this->parseTable();
		} elseif (Configure::read('servers.' . $this->serverID . '.statusurl') != null) {
			$result = $this->parseXML();
		} else {
			throw new NotFoundException('ServerInfo type definition in Configuration not valid.');
		}

		// Create an array with Google Maps positions for the worldmap and create an array of playernames for requested results
		$positions = array();
		$playerNames = array();
		foreach ($result as $teams => $players) {
			foreach ($players as $k => $player) {
				$positions[] = array(
					'client' => $this->XlrFunctions->fixName($player['ServerPlayer']['Name']),
					'latitude' => $this->GeoIPCity->getLatitude($player['ServerPlayer']['IP']),
					'longitude' => $this->GeoIPCity->getLongitude($player['ServerPlayer']['IP'])
				);
				$playerNames[] = $this->XlrFunctions->fixName($player['ServerPlayer']['Name']);
			}
		}

		// If a player is known to xlrstats -> add a few playerstats values to the array
		foreach ($result as $teams => $players) {
			foreach ($players as $k => $player) {
				// add flag of the player
				$result[$teams][$k]['ServerPlayer']['flag'] = $this->XlrFunctions->getFlag($player['ServerPlayer']['IP']);
				//$result[$teams][$k]['ServerPlayer']['level'] = $this->XlrFunctions->getLevel($player['ServerPlayer']['Level']);
				$playerById = $this->PlayerStat->findByClientId($player['ServerPlayer']['DBID']);
				if (!empty($playerById)) {
					$result[$teams][$k]['ServerPlayer']['playerstats_id'] = $playerById['PlayerStat']['id'];
					$result[$teams][$k]['ServerPlayer']['rank'] = $this->XlrFunctions->getRank($playerById['PlayerStat']['kills']);
					$result[$teams][$k]['ServerPlayer']['skilleague'] = $this->XlrFunctions->getLeague($playerById['PlayerStat']['skill']);
					$result[$teams][$k]['ServerPlayer']['skill'] = $playerById['PlayerStat']['skill'];
				}
			}
		}

		$serverInfo = $this->requestAction('server_info');

		$serverLocation = $this->GeoIPCity->getPosition($serverInfo['Ip']);

		if ($this->request->is('requested')) {
			return $playerNames;
		} else {
			//pr($result);
			$this->set('serverPlayers', $result);
			//pr($positions);
			$this->set('playerPositions', $positions);
			//pr($serverLocation);
			$this->set('serverLocation', $serverLocation);
		}
		return null;
	}

	//-------------------------------------------------------------------

/**
 * Parse Online Client info from table
 *
 * @return array
 */
	public function parseTable() {
		try {
			if (isset($this->ServerPlayer) && !empty($this->ServerPlayer->table)) {
				$_teams = $this->ServerPlayer->find('all', array(
					'fields' => 'DISTINCT ServerPlayer.Team',
					'order' => 'ServerPlayer.Team ASC'
				));
				//pr($_teams);

				$teams = array();
				foreach ($_teams as $team) {
					$teams[(string)$team['ServerPlayer']['Team']] = $this->ServerPlayer->find('all', array(
						'conditions' => array(
							'ServerPlayer.Team' => $team['ServerPlayer']['Team']
						),
						'order' => 'ServerPlayer.Score DESC'
					));
				}
				//pr($teams);
				return $teams;
			}
		} catch (Exception $e) {
			return array();
		}
		return null;
	}

	//-------------------------------------------------------------------

/**
 * Parse serverInfo from status.xml file
 *
 * @return array
 */
	public function parseXML() {
		if ((Configure::read('servers.' . $this->serverID . '.statusurl') != null)) {
			$serverDetails = Configure::read('servers.' . $this->serverID . '.statusurl');
			$this->statusURL = $serverDetails;
		}

		//debug('Reading :' . $this->status_url);
		try {
			$parsedXML = Xml::build($this->statusURL);

			// xml to array conversion
			$this->xmlItem = Xml::toArray($parsedXML);
			//pr($this->xmlItem);

			// Make a shortcut and return an empty array, the xml file appears to be empty
			if (!isset($this->xmlItem['B3Status']['Clients'])) {
				return array();
			}

			// Get the fixed info.
			$serverClients = $this->xmlItem['B3Status']['Clients'];
			if ($serverClients['@Total'] == 1) {
				$_s['Client'][0] = $serverClients['Client'];
				$serverClients = array();
				$serverClients = $_s;
				$serverClients['@Total'] = 1;
				ksort($serverClients);
			}
			//pr($serverClients);

			// Create an array with teams and their clients
			$teams = array();
			$_res = array();
			foreach ($serverClients as $list => $client) {
				if (substr($list, 0, 1) != '@') {
					foreach ($client as $k => $v) {
						foreach ($v as $k1 => $v1) {
							if (substr($k1, 0, 1) == '@') {
								$_res[trim($k1, '@')] = $v1;
							}
						}
						$teams[$v['@Team']][]['ServerPlayer'] = $_res;
					}
				}
			}
			ksort($teams);

		} catch (Exception $e) {
			$teams = array();
		}
		//pr($teams);
		return $teams;
	}

}
