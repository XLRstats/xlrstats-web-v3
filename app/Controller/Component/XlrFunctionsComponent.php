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
 * @package       app.Controller.Component
 * @since         XLRstats v3.0
 * @version       0.1
 */

App::uses('Component', 'Controller');
class XlrFunctionsComponent extends Component {

	public $components = array('GeoIP');

	//-------------------------------------------------------------------

	/**
	 * Function to retrieve the current rank number based on number of kills
	 * It returns the array key identifier corresponding with the rank
	 * You can alter the ranks/kills in the Configs/xlrstats/ranks.php file
	 *
	 * @param $kills
	 * @return int|string
	 */
	public function getRank($kills) {
		$ranks = Configure::read('rank');
		$result = 0;
		foreach ($ranks as $rank => $value) {
			if ($value[1] <= $kills) $result = $rank;
		}
		return $result;
	}

	//-------------------------------------------------------------------

	/**
	 * Returns an array of player's rank progress. Array contains information
	 * for required kills for next rank and progress in percentage.
	 *
	 * @param $kills
	 * @return array|bool
	 */
	public function getRankProgress($kills) {
		$currentRank = $this->getRank($kills);
		$killsForCurrentRank = Configure::read('rank.' . $currentRank . '.1');

		$ranks = Configure::read('rank');
		end($ranks);
		$highestRank = key($ranks);

		if($currentRank != $highestRank) {
			$killsForNextRank = Configure::read('rank.' . ($currentRank + 1) . '.1');
		} else {
			return false;
		}

		$killsNeeded = $killsForNextRank - $kills;
		$progress = (($kills - $killsForCurrentRank) / ($killsForNextRank - $killsForCurrentRank)) * 100;

		return array(
			'kills_needed' => $killsNeeded,
			'progress' => $progress
		);
	}

	//-------------------------------------------------------------------

	/**
	 * Returns an array with image and country name based on ip address
	 *
	 * @param $ip
	 * @return array
	 */
	public function getFlag($ip) {
		if ($ip == '') {
			$flag = array('-', __('Unknown'));
		}
		else {
			$flag = array(strtolower($this->GeoIP->country_code($ip)), $this->GeoIP->country_name($ip));
		}
		return $flag;
	}

	//-------------------------------------------------------------------

	/**
	 * Display player level
	 *
	 * @param player $groupBits
	 * @internal param \player $groupBits 's group_bits value in clients table
	 * @return player level as configured in config/levels.php
	 */
	public function getLevel($groupBits) {
		$levels = Configure::read('level');
		$playerLevel = array('level' => 0, 'name' => __('Undefined Level'));
		foreach ($levels as $key => $value) {
			if($groupBits == $value[0]) {
				//debug($key);
				$playerLevel['level'] = $key;
				$playerLevel['name'] = $value[1];
			}
		}

		return $playerLevel;
	}

	//-------------------------------------------------------------------

	/**
	 * Function to translate game dependant terms to a readable format
	 * Based on game configs in /configs/games
	 *
	 * @param currently $xlrDB
	 * @param team $item
	 * @internal param \currently $xlrDB used xlrstats database
	 * @internal param \team $item /weapon/map/event/bodypart
	 * @return translated string as configured in /configs/games/
	 */
	public function getItemName($xlrDB, $item) {
		//config('/classes/xlrstats.server.inc';
		$server = new XlrServer();
		$gameName = (string)$server->serverStatus($xlrDB)->Game->attributes()->Name;
		config('games/' . $gameName . '.php');
		if ($item == 'team') $temp = getTeamName();
		else if ($item == 'weapon') $temp = getWeaponName();
		else if ($item == 'map') $temp = getMapName();
		else if ($item == 'event') $temp = getEventName();
		else if ($item == 'bodypart') $temp = getBodypartName();
		else $temp = __('Undefined Item');

		return $temp;
	}

	//-------------------------------------------------------------------

	/**
	 * Function to determine the league a player is in.
	 * Returns the league identifier (number)
	 *
	 * @param int|player $skill
	 * @internal param \player $skill skill value
	 * @return array with league identifier (number) and the name of the league the player is in
	 */
	public function getLeague($skill=0) {
		$result = -1;
		$leagues = Configure::read('league');
		foreach ($leagues as $l => $v) {
			if ($v[0] != 'League.skill') unset($leagues[$l]);
		}
		foreach ($leagues as $l => $v) {
			//echo $v[1] .' '. $skill .' '. $v[2];
			if (($v[1] < $skill) and ($skill < $v[2])) {
				$result = $l;
			}
		}
		return $result;
	}

	//-------------------------------------------------------------------

	/**
	 * @param $leagueNumber
	 * @return string
	 */
	public function showLeagueStars($leagueNumber) {
		$leagues = Configure::read('league');
		$leagueCount = count($leagues);
		$result = '';
		$star = $this->Html->image('stars/stargold.gif');
		for ($i = $leagueCount; $i >= $leagueNumber ; $i -= 1)
			$result .= $star . ' ';
		return $result;
	}

	//-------------------------------------------------------------------

	/**
	 * @param $key
	 * @return mixed
	 */
	public function getLicenseDetails($key)
	{
		$excl = array(
			'http://xlr8or.snt.utwente.nl',
			'http://localhost'
		);
		if (in_array(FULL_BASE_URL, $excl)) {
			return false;
		}
		$url = 'aHR0cDovL3hscjhvci5zbnQudXR3ZW50ZS5ubC94bHJzdGF0cy9saWNlbnNlX3NlcnZlci9saWNlbnNlcy9jaGVjaw,,';
		$params = array();
		$params['license']  = $key;
		$params['host']     = FULL_BASE_URL;
		$params['path']     = ROOT;
		$params['version']  = XLR_VERSION;

		if (function_exists('curl_version')) {
			// If we have cURL, use it
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_URL, $this->base64_url_decode($url));
			curl_setopt($ch, CURLOPT_VERBOSE, 0);
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, FALSE);
			curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 20);
			curl_setopt($ch, CURLOPT_TIMEOUT, 20);
			curl_setopt($ch, CURLOPT_POST, true);
			curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
			$result = curl_exec($ch);

			$code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			if($code != 200) {
				debug('CURLINFO_HTTP_CODE: '.$code);
			}
			//pr($result);
		} else {
			// If we don't have cURL use file_get_contents alternative
			$data = http_build_query($params);
			$opts = array('http' => array(
				'method' => 'POST',
				'header'=> "Content-type: application/x-www-form-urlencoded\r\n"
					. "Content-Length: " . strlen($data) . "\r\n",
				'content' => $data));

			$context = stream_context_create($opts);
			$result = file_get_contents($this->base64_url_decode($url), false, $context);
		}

		return json_decode($result, true);
	}

	//-------------------------------------------------------------------

	/**
	 * @return bool|mixed
	 */
	public function isLicenseValid() {
		// The license server will only be polled once p/5minutes when invalid, and once p/week when valid
		if (Configure::check('license.valid')) {
			return Configure::read('license.valid');
		} else {
			$json = Cache::read('licenseKeyInfo', '1week');
			if (!$json) {
				$json = Cache::read('licenseKeyInfo', '5min');
			}
			if (!$json) {
				$json = $this->getLicenseDetails(Configure::read('options.license'));
				//Cache::write('licenseKeyInfo', $json, '1week');
			}

			if (!$json['result']['valid']) {
				// Cache invalid licenses for 5 minutes
				Cache::write('licenseKeyInfo', $json, '5min');
				Configure::write('license.valid', false);
				return false;
			} else {
				// Cache valid licenses for 1 week
				Cache::write('licenseKeyInfo', $json, '1week');
				Configure::write('license.valid', true);
				return true;
			}
		}
	}

	//-------------------------------------------------------------------

	/**
	 * @param $input
	 * @return string
	 */
	private function base64_url_encode($input) {
		return strtr(base64_encode($input), '+/=', '-_,');
	}

	/**
	 * @param $input
	 * @return string
	 */
	private function base64_url_decode($input) {
		return base64_decode(strtr($input, '-_,', '+/='));
	}

	/**
	 * Function that replaces names with a fixed name or the empty name default and sanitizes it
	 *
	 * @param $playerName
	 * @param string $fixedName
	 * @param string $defaultName
	 * @return string
	 */
	public function fixName($playerName, $fixedName='', $defaultName='Unknown Soldier')
	{
		if ($fixedName != '') {
			$playerName = $fixedName;
		}
		if ($playerName == '')
			$playerName = $defaultName;

		$displayName = $this->sanitizeMe($playerName);
		return $displayName;
	}

	//-------------------------------------------------------------------

	/**
	 * Sanitation function for displaying database content in html
	 * http://www.php.net/manual/en/function.htmlentities.php
	 *
	 * @param $str
	 * @return string
	 */
	public function sanitizeMe($str) {
		return htmlentities($str, ENT_QUOTES, 'UTF-8');
	}
}
