<?php
/**
 * Application model for Cake.
 *
 * This file is application-wide model file. You can put all
 * application-wide model-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under the Creative Commons BY-NC-SA 3.0 License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Model
 * @since         CakePHP(tm) v 0.2.9
 * @license       Creative Commons BY-NC-SA 3.0 License (http://creativecommons.org/licenses/by-nc-sa/3.0/)
 */

App::uses('Model', 'Model');

/**
 * Application model for Cake.
 *
 * Add your application-wide methods in the class below, your models
 * will inherit them.
 *
 * @package       app.Model
 */
class AppModel extends Model {

	/**
	 * @var bool set to true in model if you want to use the b3Database to retrieve statistics data.
	 * Defaults to false to avoid conflicts with external plugins that depend on the default connection to be app-related.
	 */
	public $b3Database = false;

	//-------------------------------------------------------------------

	/**
	 * Dynamically creates a B3 DataSource object at runtime based on server selection.
	 * Sets DataSource as 'default' if $this->b3Database is set to false.
	 *
	 * @param bool $id
	 * @param null $table
	 * @param null $ds
	 */
	function __construct($id = false, $table = null, $ds = null) {
		if ($this->b3Database) {
			$serverId = Configure::read('server_id');
			$host = Configure::read('servers.'.$serverId.'.dbhost');
			$login = Configure::read('servers.'.$serverId.'.dbuser');
			$password = Configure::read('servers.'.$serverId.'.dbpass');
			$database = Configure::read('servers.'.$serverId.'.dbname');

			$config = array (
				'datasource' => 'Database/Mysql',
				'persistent' => false,
				'host' => $host,
				'login' => $login,
				'password' => $password,
				'database' => $database,
				'prefix' => '',
				//'encoding' => 'utf8',
			);
			try {
				ConnectionManager::create('b3', $config);
				$this->useDbConfig = 'b3';
			} catch(Exception $e) {
				die ('Cannot Connect to B3 Database');
			}

		} else {
			$this->setDataSource('default');
		}
		parent::__construct($id, $table, $ds);
	}

}
