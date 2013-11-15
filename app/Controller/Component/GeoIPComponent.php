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
class GeoIPComponent extends Component {

	public $gi = null; // object reference

	public function initialize(Controller $controller) {
		$settings = array(
			'res' => APP . WEBROOT_DIR . DS . 'GeoIP.dat', // absolute path
			'src' => 'geoip.inc', // just the file name
		);
		App::import('Vendor', 'GeoIP', array('file' => $settings['src']));
		$this->gi = geoip_open($settings['res'], GEOIP_STANDARD);
	}

	public function shutdown(Controller $controller) {
		geoip_close($this->gi); // cleanup
	}

	public function country_code($address = null) {
		$countryCode = geoip_country_code_by_addr($this->gi, $address);
		if($countryCode == null) {
			$countryCode = '-';
		}
		return $countryCode;
	}

	public function country_name($address = null) {
		$countryName = geoip_country_name_by_addr($this->gi, $address);
		if($countryName == null) {
			$countryName = 'Unknown';
		}
		return $countryName;
	}
}
