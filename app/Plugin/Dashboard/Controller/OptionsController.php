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

/**
 * Options Controller
 *
 * @property Option $Option
 */
class OptionsController extends DashboardAppController {

	/**
	 * Components
	 *
	 * @var array
	 */
	public $components = array(
		'RequestHandler'
	);

	//-------------------------------------------------------------------

	/**
	 * admin_index method
	 *
	 * @return void
	 */
	public function admin_index() {
		$options = $this->Option->find('all');
		if ($this->request->is('requested')) {
			return $options;
		} else {
			$this->set('options', $options);
		}
	}

	//-------------------------------------------------------------------

	/**
	 * Edit function for options that works with X-editable jQuery plugin.
	 * Updates database with the new value.
	 *
	 * This method normally does not require a view file but we still set the output value and maintain
	 * a view file (admin_edit.ctp) for debugging purposes only.
	 */
	public function admin_edit() {
		$primaryKey = $this->request->data['pk'];
		$name = $this->request->data['name'];
		$value = $this->request->data['value'];

		if ($this->request->is('ajax')) {
			$this->Option->read(null, $primaryKey);
			$this->Option->set($name, $value);
			$this->Option->save();

			$this->set('value', $value);
		} else {
			if(function_exists('http_response_code')) {
				$this->response->statusCode(400);
			} else {
				header('HTTP 400 Bad Request', true, 400);
			}
			echo __('Oops, something went wrong!');
		}
	}

}
