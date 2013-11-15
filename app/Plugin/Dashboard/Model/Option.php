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
 * @package       app.Plugin.Dashboard.Model
 * @since         XLRstats v3.0
 * @version       0.1
 */

App::uses('DashboardAppModel', 'Dashboard.Model');

class Option extends DashboardAppModel {
	/**
	 * This is not a stats model, but a webfront configuration model
	 *
	 * @var bool
	 */
	public $b3Database = false;

	/**
	 * Model name
	 *
	 * @var string
	 */
	public $name = 'Option';

	/**
	 * DB table
	 *
	 * @var string
	 */
	public $useTable = 'options';

	/**
	 * Prefix
	 *
	 * @var string
	 */
	public $tablePrefix = '';

	/**
	 * Validation rules
	 *
	 * @var array
	 */
	public $validate = array(
			'name' => array (
				'rule'	=> array('minLength', '5'),
				'message'	=> 'FATAL: variable name is too short (at least 5 characters).'
			)
		);

	//-------------------------------------------------------------------

	/**
	 * Stores xlrstats global options in application configuration
	 */
	public function load() {
		$settings = $this->find('all');

		foreach ($settings as $variable) {
			Configure::write('options.'.$variable['Option']['name'], $variable['Option']['value']);
		}
	}

	//-------------------------------------------------------------------

	/**
	 * Returns an array of locked server options
	 *
	 * @return array
	 */
	public function lockedOptions() {
		$data = $this->find('all', array(
			'fields' => 'Option.name',
			'conditions' => 'Option.locked',
		));
		$options = array();
		foreach ($data as $option) {
			$options[] = $option['Option']['name'];
		}
		return $options;
	}
}