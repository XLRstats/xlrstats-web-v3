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
/**
 * Class GeoIPCityComponent
 */
class GeoIPCityComponent extends Component {

	public $gic = null; // object reference

/**
 * @param Controller $controller
 */
	public function initialize(Controller $controller) {
		$settings = array(
			'res' => APP . WEBROOT_DIR . DS . 'GeoLiteCity.dat', // absolute path
			'src' => 'geoipcity.inc', // just the file name
		);
		App::import('Vendor', 'GeoIPCity', array('file' => $settings['src']));
		$this->gic = geoip_open($settings['res'], GEOIP_STANDARD);
	}

	//-------------------------------------------------------------------

/**
 * @param Controller $controller
 */
	public function shutdown(Controller $controller) {
		geoip_close($this->gic); // cleanup
	}

	//-------------------------------------------------------------------

/**
 * @param null $address
 * @return string
 */
	public function getLatitude($address = null) {
		$record = GeoIP_record_by_addr($this->gic, $address);
		if (empty($record)) {
			return '41.766667';
		}
		return $record->latitude;
	}

	//-------------------------------------------------------------------

/**
 * @param null $address
 * @return string
 */
	public function getLongitude($address = null) {
		$record = GeoIP_record_by_addr($this->gic, $address);
		if (empty($record)) {
			return '-50.233333';
		}
		return $record->longitude;
	}

	//-------------------------------------------------------------------

/**
 * @param null $address
 * @return string
 */
	public function getCity($address = null) {
		$record = GeoIP_record_by_addr($this->gic, $address);
		if (empty($record)) {
			return 'Unknown';
		}
		$cityName = utf8_decode($record->city);
		return $cityName;
	}

	//-------------------------------------------------------------------

/**
 * @param null $address
 * @return string
 */
	public function getRegion($address = null) {
		$record = GeoIP_record_by_addr($this->gic, $address);
		if (empty($record)) {
			return 'Unknown';
		}
		$region = utf8_decode($GEOIP_REGION_NAME[$record->country_code][$record->region]);
		return $region;
	}

	//-------------------------------------------------------------------

/**
 * @param null $address
 * @return string
 */
	public function getCountry($address = null) {
		$record = GeoIP_record_by_addr($this->gic, $address);
		if (empty($record)) {
			return 'Unknown';
		}
		$country = utf8_decode($record->country_name);
		return $country;
	}

	//-------------------------------------------------------------------

/**
 * @param null $address
 * @return string
 */
	public function getPosition($address = null) {
		$record = GeoIP_record_by_addr($this->gic, $address);
		if (empty($record)) {
			return '41.766667,-50.233333';
		}
		$position = $record->latitude . ',' . $record->longitude;
		return $position;
	}
}
