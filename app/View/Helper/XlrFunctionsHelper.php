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
 * @package       app.View.Helper
 * @since         XLRstats v3.0
 * @version       0.1
 */

App::uses('Helper', 'View');
App::uses('Folder', 'Utility');
App::uses('File', 'Utility');

class XlrfunctionsHelper extends Helper {
 	public $helpers = array(
		 'Html',
		 'Number'
	 );

	//-------------------------------------------------------------------

	/**
	 * Draws a ratio bullet graph
	 *
	 * ### Options
	 *
	 * - 'scripts' (boolean) Weather or not the sparkline scripts will be echoed
	 *
	 * @param int $value The value to be passed into the chart data
	 * @param array $options Available options
	 * @return string
	 */
	public function ratioSparklineBulletChart($value, $options = array()) {
		$options += array('scripts' => true);
		if ($options['scripts']) {
			echo $this->Html->script(array('jquery.sparkline', 'xlrstats.sparkline.player.ratio.bullet'));
		}
		unset($options['scripts']);

		//return "<span class='ratiosparkline'>$value,5,5,2,1</span>";
		return "<span class='ratiosparkline'>$value,5,5</span>";
	}

	//-------------------------------------------------------------------

	/**
	 * Draws a user level pie chart
	 *
	 * ### Options
	 *
	 * - 'scripts' (boolean) Weather or not the sparkline scripts will be echoed
	 *
	 * @param int $value The value to be passed into the chart data
	 * @param array $options Available options
	 * @return string
	 */
	public function levelSparklinePieChart($value, $options = array()) {
		$options += array('scripts' => true);
		if ($options['scripts']) {
			echo $this->Html->script(array('jquery.sparkline', 'xlrstats.sparkline.player.level.pie'));
		}
		unset($options['scripts']);

		$diff = 100 - $value;
		return "<span class='levelsparkline'>$value,$diff</span>";
	}

	//-------------------------------------------------------------------

	/**
	 * Strips color codes from text.
	 *
	 * @param $text
	 * @return string
	 */
	public function stripColors($text) {
		$pattern = '/\^[0-9]/';
		$text = preg_replace($pattern, '', $text);
		return $text;
	}

	//-------------------------------------------------------------------

	/**
	 * Function to check if an url is our homepage.
	 *
	 * @return bool
	 */
	public function isHome() {
		$here = convertSlash($this->request->here);
		$installDir = convertSlash($this->request->base);

		if ($here == Configure::read('server_id') || $here == $installDir || $here == $installDir . '_' . Configure::read('server_id') || preg_match('/pages_home/', $here)) {
			return true;
		} else {
			return false;
		}
	}

	//-------------------------------------------------------------------

	/**
	 * Returns an array of images for the selected game from
	 * 'webroot/img/carousel' folder.
	 *
	 * If a folder does not exist with the selected game name, then it will
	 * get the images from 'default' folder.
	 *
	 * @return array Returns an array of first image and remaining images
	 */
	public function getCarouselImages() {
		$serverID = Configure::read('server_id');
		$gameName = Configure::read('servers.' . $serverID . '.gamename');

		$dir = new Folder(WWW_ROOT . 'img' . DS . 'carousel');
		$files = $dir->read(true);
		$folders = $files[0];

		if (in_array($gameName, $folders)) {
			$dir = new Folder(WWW_ROOT . 'img' . DS . 'carousel' . DS . $gameName);
		} else {
			$dir = new Folder(WWW_ROOT . 'img' . DS . 'carousel' . DS . 'default');
		}

		$files = $dir->read(true, false, true);
		$files = $files[1];

		foreach($files as $file) {
			$n = explode('carousel' . DS, $file);
			$i = explode(DS, $n[1]);
			$x[] = $i[0] . '/' . $i[1];
		}

		$files = $x;

		$firstElement = $files[0];
		unset($files[0]);

		return array($firstElement, $files);
	}

	//-------------------------------------------------------------------

	/**
	 * Returns easy weapon name from the game config file.
	 * If an easy name is not defined for the weapon, then it returns
	 * the console name.
	 *
	 * @param $weapon console name of the weapon
	 * @return string
	 */
	public function getWeaponName($weapon=null) {
		$weaponList = Configure::read('weapons');

		if (!isset($weaponList[$weapon][0])) {
			$weaponName = $weapon;
		} else {
			$weaponName = $weaponList[$weapon][0];
		}

		if(empty($weaponName)) {
			$weaponName = $weapon;
		}

		return $weaponName;
	}

	//-------------------------------------------------------------------

	/**
	 * Returns weapon image based on data in game config file
	 *
	 * ### Options
	 *
	 * - 'style' CSS styles
	 *
	 * @param $weapon
	 * @param array $options
	 * @return bool | image link
	 */
	public function getWeaponImage($weapon, $options = array()) {
		$weaponList = Configure::read('weapons');
		if (!isset($weaponList[$weapon][2])) {
			return false;
		}

		$weaponImage = $weaponList[$weapon][2];

		if($weaponImage == 'image.png') {
			return false;
		}

		$imagePath =  Configure::read('weapons.image_path');
		$weaponImage = $imagePath . $weaponImage;

		$imageLink = $this->Html->image($weaponImage, $options);

		return $imageLink;
	}

	//-------------------------------------------------------------------

	/**
	 * @param $weapon
	 * @return bool
	 */
	public function getWeaponLink($weapon) {
		$weaponList = Configure::read('weapons');

		if (!isset($weaponList[$weapon][3])) {
			$weaponLink = false;
		} else {
			$weaponLink = $weaponList[$weapon][3];
		}

		if(empty($weaponLink)) {
			$weaponLink = false;
		}

		return $weaponLink;
	}

	//-------------------------------------------------------------------

	/**
	 * @param $weapon
	 * @return bool
	 */
	public function getWeaponDescription($weapon) {
		$weaponList = Configure::read('weapons');

		if (!isset($weaponList[$weapon][1])) {
			$weaponDescription = false;
		} else {
			$weaponDescription = $weaponList[$weapon][1];
		}

		if(empty($weaponDescription)) {
			$weaponDescription = false;
		}

		return $weaponDescription;
	}
	//-------------------------------------------------------------------

	/**
	 * Returns easy map name from the game config file.
	 * If an easy name is not defined for the map, then it returns
	 * the console name.
	 *
	 * @param $map console name of the map
	 * @return string
	 */
	public function getMapName($map) {
		$mapName = Configure::read('maps.' . $map . '.0');

		if(!$mapName) {
			$mapName = $map;
		}
		return $mapName;
	}

	//-------------------------------------------------------------------

	/**
	 * Returns map image based on data in game config file
	 *
	 * ### Options
	 *
	 * - 'style' CSS styles
	 *
	 * @param $map
	 * @param array $options
	 * @return bool | image link
	 */
	public function getMapImage($map, $options = array()) {
		$mapList = Configure::read('maps');
		if (!isset($mapList[$map][2])) {
			return false;
		}

		$mapImage = $mapList[$map][2];

		if($mapImage == 'image.png') {
			return false;
		}

		$imagePath =  Configure::read('maps.image_path');
		$mapImage = $imagePath . $mapImage;

		$imageOptions = array();

		if(isset($options['style'])) {
			$imageOptions['style'] = $options['style'];
		}

		$imageLink = $this->Html->image($mapImage, $imageOptions);

		return $imageLink;
	}

	//-------------------------------------------------------------------

	/**
	 * @param $map
	 * @return bool
	 */
	public function getMapLink($map) {
		$mapList = Configure::read('maps');

		if (!isset($mapList[$map][3])) {
			$mapLink = false;
		} else {
			$mapLink = $mapList[$map][3];
		}

		if(empty($mapLink)) {
			$mapLink = false;
		}

		return $mapLink;
	}

	//-------------------------------------------------------------------

	/**
	 * @param $map
	 * @return bool
	 */
	public function getMapDescription($map) {
		$mapList = Configure::read('maps');

		if (!isset($mapList[$map][1])) {
			$mapDescription = false;
		} else {
			$mapDescription = $mapList[$map][1];
		}

		if(empty($mapDescription)) {
			$mapDescription = false;
		}

		return $mapDescription;
	}
	//-------------------------------------------------------------------
	//-------------------------------------------------------------------

	/**
	 * Returns easy team name from the game config file.
	 * If an easy name is not defined for the map, then it returns
	 * the console name.
	 *
	 * @param $team
	 * @internal param \console $team name of the map
	 * @return string
	 */
	public function getTeamName($team) {
		$teamName = Configure::read('teams.' . $team);

		if(!$teamName) {
			$teamName = $team;
		}
		return $teamName;
	}

	//-------------------------------------------------------------------

	/**
	 * Returns fixed name and easy name for body part from game config file.
	 *
	 * @param $bodyPart
	 * @return array
	 */
	public function getBodyPartName($bodyPart) {
		$bodyPartsArray = Configure::read('body_parts');

		if(!$bodyPartsArray) {
			return array('fixed_name' => null, 'body_part_name' => $bodyPart);
		}

		$fixedName = null;
		$bodyPartName = $bodyPart;

		foreach ($bodyPartsArray as $key => $value) {
			if(array_key_exists($bodyPart, $value)) {
				$fixedName = $key;
				$bodyPartName = $value[$bodyPart];
			}
		}
		return array('fixed_name' => $fixedName, 'body_part_name' => $bodyPartName);
	}

	//-------------------------------------------------------------------

	/**
	 * Returns a color to be displayed on hit zone markers based
	 * on the percentage value
	 *
	 * @param $percentage
	 * @return string
	 */
	public function colorizeHitZone($percentage) {
		$color = 'yellow';
		if($percentage > 0.2 && $percentage <= 0.35) {
			$color = 'orange';
		} elseif ($percentage > 0.35) {
			$color = '#FF0000';
		}
		return $color;
	}

	//-------------------------------------------------------------------

	/**
	 * This function returns useful data to display the league boxes for only
	 * populated leagues on homepage
	 *
	 * @return array|bool
	 */
	public function getPopulatedLeagueVars() {
		for($i = 1; $i<=5; $i++) {
			$leagues[$i] = $this->requestAction('leagues/leaguesJson/' . $i);

			//Remove empty league from the array
			if ($leagues[$i][1] == 0) {
				unset($leagues[$i]);
			} else {
				$leagueNumber[] = $i;
			}
		}

		$leagueCount = count($leagues);

		switch($leagueCount) {
			case 0:
				return false;
				break;
			case 1:
				$span = array('span12');
				$detailedStats = array(true);
				break;
			case 2:
				$span = array('span6', 'span6');
				$detailedStats = array(false, false);
				break;
			case 3:
				$span = array('span12', 'span6', 'span6');
				$detailedStats = array(true, false, false);
				break;
			case 4:
				$span = array('span12', 'span4', 'span4', 'span4');
				$detailedStats = array(true, false, false, false);
				break;
			case 5:
				unset($leagues[5]);
				$span = array('span12', 'span4', 'span4', 'span4');
				$detailedStats = array(true, false, false, false);
				break;
		}

		return array($leagues, $leagueNumber, $span, $detailedStats);

	}

	//-------------------------------------------------------------------

	/**
	 * Returns a JSON formatted list of best weapons or maps to be used in
	 * pie charts in player's weapon and map tabs.
	 *
	 * @param array $topActions an array of best weapons or maps
	 * @param $bestAction favorite weapon or map
	 * @param string $option can be weapon or map
	 * @return string
	 */
	public function getTopActionData($topActions = array(), $bestAction, $option = 'weapon') {
		$topActionData = '';

		foreach ($topActions as $action => $score) {
			if($option == 'weapon') {
				$actionName = $this->getWeaponName($action);
			} elseif ($option == 'map') {
				$actionName = $this->getMapName($action);
			}
			//display the top action sliced and selected in pie chart
			if($action == $bestAction) {
				$topActionData .= '{
					name: "' . $actionName . '",
					y: '. $score .',
					sliced: true,
					selected: true
				}, ';
			} else {
				$topActionData .= '["' . $actionName . '", ' . $score . '], ';
			}
		}
		return $topActionData;
	}


	/**
	 * @return mixed
	 */
	public function showLicenseIcon()
	{
		// check if the cache is disabled
		if (Configure::read('Cache.disable')) {
			return '<a href="#" title="page not cached"><i class="icon-unlock-alt text-error"></i></a>&nbsp;';
		} else {
			// check the cache
			$json = Cache::read('licenseKeyInfo', '1week');
			if (!$json) {
				$json = Cache::read('licenseKeyInfo', '5min');
			}

			if (!$json) {
				$icon = '<i class="icon-question-sign text-error"></i>';
				$message = __('Unable to retrieve license information');
			} elseif (!$json['result']['valid']) {
				$message = $json['error']['message'];
				$icon = '<i class="icon-warning-sign text-error"></i>';
			} else {
				if ($json['result']['type'] == 'F') $message = __('Free -NON-Commercial- XLRstats License');
				else $message = __('Commercial XLRstats License');
				$icon = '<i class="icon-check text-success"></i>';
			}
			return $this->Html->link($icon,
				'http://www.xlrstats.com/pages/xlrstats.com/licensing', array(
					'target' => '_blank',
					'escape' => false,
					'title' => $message
				));
		}
	}

	/**
	 * @param $data
	 * @return string
	 */
	public function listPlayers($data) {
		$result = '<ul>';
		foreach ($data as $name) {
			$result .= '<li>' . $name . '</li>';
		}
		$result .= '</ul>';
		$result .= '<small>';
		$result .= __('...more info on the Online Players and Worldmap page');
		$result .= '</small>';
		return $result;
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