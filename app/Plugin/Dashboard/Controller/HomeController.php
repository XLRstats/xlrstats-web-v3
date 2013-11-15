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
 * @package       app.Plugin.Dashboard.Controller
 * @since         XLRstats v3.0
 * @version       0.1
 */

App::uses('DashboardAppController', 'Dashboard.Controller');
class HomeController extends DashboardAppController {

	/**
	 * Controller Name
	 *
	 * @var string
	 */
	public $name = 'Home';

	/**
	 * This controller does not use a model
	 *
	 * @var array
	 */
	public $uses = array();

	//-------------------------------------------------------------------

	/**
	 * Server Home
	 */
	function admin_index() {
	}

}