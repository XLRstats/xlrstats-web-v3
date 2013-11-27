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

/**
 * Class ServerInfoController
 */
class ServerInfoController extends AppController {

/**
 * Used Models
 *
 * @var array
 */
	public $uses = array(
		'Dashboard.Server',
		'ServerInfo',
		'PlayerStat',
		'WeaponStat',
		'MapStat'
	);

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array(
		'Number'
	);

/**
 * Components
 *
 * @var array
 */
	public $components = array(
		'RequestHandler',
		'Session',
		'GeoIP'
	);

/**
 * Local variables
 *
 * @var array
 */
	public $xmlItem = array();

/**
 * ServerID
 *
 * @var null
 */
	public $serverID = null;

	//-------------------------------------------------------------------

/**
 * Fetches server info from status xml if a xml status path/url is specified, otherwise from B3 database
 * and stores real server names in XLRstats database.
 *
 * @param $serverID
 * @return array
 * @throws NotFoundException
 */
	public function getServerInfo($serverID) {
		//uncomment while testing this method directly from URL
		//$this->serverID = $serverID;

		//Check if we need to parse a database table or an xml file
		$statusUrl = Configure::read('servers.' . $serverID . '.statusurl');

		if ($statusUrl == null || $statusUrl == 'none') {
			$data = $this->parseTable();
		} elseif ($statusUrl != null) {
			$data = $this->parseXML();
		} else {
			throw new NotFoundException('ServerInfo type definition in Configuration not valid.');
		}

		// Update servername_a (real server name) field in servers table
		$this->Server->read(null, $serverID);
		$this->Server->set('servername_a', $data['sv_hostname']);
		$this->Server->save();

		return $data;
	}

	//-------------------------------------------------------------------

/**
 * Returns required information to display in server info block.
 *
 * @param integer $id can be used to get server info for a specific server
 * @return array
 * @throws NotFoundException
 */
	public function index($id = null) {
		if ($id == null) {
			$serverID = Configure::read('server_id');
		} else {
			$serverID = $id;
		}

		//Set class variable $this->serverID
		$this->serverID = $serverID;

		$result = $this->getServerInfo($serverID);

		// Add some totals to the array from our PlayerStat Model
		$result['total_players'] = $this->PlayerStat->find('count');
		$totalKills = $this->PlayerStat->find('first', array('fields' => array('SUM(kills) as total_kills')));
		$result['total_kills'] = $totalKills[0]['total_kills'];
		$result['server_country_code'] = strtolower($this->GeoIP->country_code($result['Ip']));
		$result['server_location'] = $this->GeoIP->country_name($result['Ip']);

		$this->WeaponStat->unbindModel(array('hasMany' => array('PlayerWeapon')));
		$favWeapon = $this->WeaponStat->find('first', array('order' => 'kills DESC'));
		$result['favorite_weapon'] = array_key_exists('WeaponStat', $favWeapon) ? $favWeapon['WeaponStat']['name'] : 'n.a.';
		$result['favorite_weapon_id'] = array_key_exists('WeaponStat', $favWeapon) ? $favWeapon['WeaponStat']['id'] : '';
		$this->MapStat->unbindModel(array('hasMany' => array('PlayerMap')));
		$curMap = $this->MapStat->findByName($result['Map']);
		$result['current_map_id'] = array_key_exists('MapStat', $curMap) ? $curMap['MapStat']['id'] : '';
		$favMap = $this->MapStat->find('first', array('order' => 'rounds DESC'));
		$result['favorite_map'] = array_key_exists('MapStat', $favMap) ? $favMap['MapStat']['name'] : 'n.a.';
		$result['favorite_map_id'] = array_key_exists('MapStat', $favMap) ? $favMap['MapStat']['id'] : '';

		//pr($result);

		if ($this->request->is('requested')) {
			return $result;
		} else {
			$this->set('serverInfo', $result);
		}
		return null;
	}

	//-------------------------------------------------------------------

/**
 * Setup an array with all values that the webfront will look for. Set a default value to avoid errors.
 *
 * @return array
 */
	public function prepareArray() {
		$result = array(
			'sv_hostname' => '',
			'serverDescription' => Configure::read('servers.' . $this->serverID . '.slogan'),
			'Ip' => '0.0.0.0',
			'Port' => '0000',
			'Map' => 'Not Available',
			'OnlinePlayers' => '-',
			'sv_maxclients' => '-',
			'Rounds' => '-',
			'totalplayers' => 'Not Available',
			'totalkills' => 'Not Available',
		);
		return $result;
	}

	//-------------------------------------------------------------------

/**
 * Parse serverInfo from table
 *
 * @return array
 */
	public function parseTable() {
		// Translate the nested arrays into a single array with all available serverinfo.
		$result = $this->prepareArray();
		try {
			$data = $this->ServerInfo->find('all');
			foreach ($data as $row => $serverInfo) {
				foreach ($serverInfo as $key => $value) {
					foreach ($value as $k => $v) {
						if ($k == 'name') {
							$name = $v;
						}
						if ($k == 'value') {
							$value = $v;
						}
					}
					$result[$name] = $value;
				}
			}
		} catch (Exception $e) {
			$result['serverDescription'] = 'Current status of this server is not available.';
		}
		return $result;
	}

	//-------------------------------------------------------------------

/**
 * Parse serverInfo from status.xml file
 *
 * @return array
 */
	public function parseXML() {
		$result = $this->prepareArray();

		if ((Configure::read('servers.' . $this->serverID . '.statusurl') != null)) {
			$serverDetails = Configure::read('servers.' . $this->serverID . '.statusurl');
			$this->statusURL = $serverDetails;
		}

		//debug('Reading :' . $this->status_url);
		try {
			$parsedXML = Xml::build($this->statusURL);

			// xml to array conversion
			$this->xmlItem = Xml::toArray($parsedXML);

			// Make a shortcut and return the default result, the xml file appears to be empty
			if (!isset($this->xmlItem['B3Status']['Game'])) {
				return $result;
			}

			// Get the fixed info. This info is in the <Game> attribute and contains info that is named the same for all games
			$serverInfo = $this->xmlItem['B3Status']['Game'];

			foreach ($serverInfo as $key => $value) {
				if (substr($key, 0, 1) == '@') {
					$name = substr($key, 1);
					$result[$name] = $value;
				}
			}

			// Get the variable 'data'. This is variable info collected from all available game server vars. This differs per game
			$serverData = $this->xmlItem['B3Status']['Game']['Data'];
			foreach ($serverData as $key => $value) {
				foreach ($value as $k => $v) {
					if ($k == '@Name') {
						$name = $v;
					}
					if ($k == '@Value') {
						$value = $v;
					}
				}
				$result[$name] = $value;
			}
		} catch (Exception $e) {
			$result['serverDescription'] = 'Current status of this server is not available.';
		}
		//pr($result);
		return $result;
	}

}