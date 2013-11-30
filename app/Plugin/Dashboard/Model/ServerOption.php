<?php
/**
 * XLRstats : Real Time Player Stats (http://www.xlrstats.com)
 * Copyright 2005-2012, Mark Weirath, Özgür Uysal
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

class ServerOption extends AppModel {

/**
 * This is not a stats model, but a webfront configuration model
 *
 * @var bool
 */
	public $b3Database = false;

/**
 * Name
 *
 * @var string
 */
	public $name = 'ServerOption';

/**
 * Tables
 *
 * @var string
 */
	public $useTable = 'server_options';

/**
 * Prefix
 *
 * @var string
 */
	public $tablePrefix = '';

/**
 * Model associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Server' => array(
			'className' => 'Dashboard.Server',
			'foreignKey' => 'server_id',
		)
	);

	//-------------------------------------------------------------------

/**
 * Stores xlrstats server specific options in application configuration
 */
	public function load() {
		$settings = $this->find('all', array(
			'conditions' => array(
				'ServerOption.server_id' => Configure::read('server_id')
			)
		));

		foreach ($settings as $variable) {
			Configure::write('options.' . $variable['ServerOption']['name'], $variable['ServerOption']['value']);
		}
	}

	//-------------------------------------------------------------------

/**
 * Returns server options for a specific server
 *
 * @param $serverID
 * @return array
 */
	public function getServerOptions($serverID) {
		$serverOptions = $this->find('all', array(
				'conditions' => array(
					'server_id' => $serverID,
				),
			)
		);
		return $serverOptions;
	}

}