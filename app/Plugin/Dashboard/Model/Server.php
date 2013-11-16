<?php
/**
* XLRstats : Real Time Player Stats (http://www.xlrstats.com)
* Copyright 2005-2013, Mark Weirath, Özgür Uysal
*
* Licensed under the Creative Commons BY-NC-SA 3.0 License
* Redistributions of files must retain the above copyright notice.
*
* @link          http://www.xlrstats.com
* @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
* @package       app.Plugin.Dashboard.Model
* @since         XLRstats v3.0
* @version       0.1
*/

App::uses('DashboardAppModel', 'Dashboard.Model');
class Server extends DashboardAppModel {
	/**
	 * This is not a stats model, but a webfront configuration model
	 * @var bool
	 */
	public $b3Database = false;

	/**
	 * Name
	 *
	 * @var string
	 */
	public $name = 'Server';

	/**
	 * DB Table we use
	 *
	 * @var string
	 */
	public $useTable = 'servers';

	/**
	 * Table prefix
	 *
	 * @var string
	 */
	public $tablePrefix = '';

	/**
	 * belongTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'ServerGroup' => array(
			'className' => 'Dashboard.ServerGroup',
			'foreignKey' => 'server_group_id',
		)
	);

	/**
	 * Validation parameters
	 *
	 * @var array
	 */
	public $validate = array(
		'servername' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please enter a server name',
		),
		'gamename' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please select your game',
		),
		'dbhost' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please enter database host IP or URL for your B3 server',
		),
		'dbuser' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please your B3 database user name',
		),
		'dbname' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'message' => 'Please your B3 database name',
		),
	);

	//-------------------------------------------------------------------

	public function getB3ServerData($user, $request) {
		$conditions = array();

		//Load all servers if an admin is logged in, otherwise only active servers
		$adminGroups = array(1, 2);
		if(@!in_array($user['Group']['id'], $adminGroups)) {
			$conditions = array(
				'active' => true
			);
		}

		/**
		 * This next piece of code will filter servers based on the servergroup and the current subdomain if the
		 * request is not made from a dashboard action, i.e. not "admin_" prefixed.
		 *
		 * Most hosting providers will need wildcard subdomains to be set. This defaults to false in
		 * app/Config/xlrstats/globals.php and can be enabled by advanced users there.
		 */

		if(!preg_match("/admin_/", $request->params['action'])) {
			if (Configure::read('server.subdomain') != 'www' && Configure::read('globals.advanced.subDomains')) {
				$conditions['OR'] = array('ServerGroup.name' => array(Configure::read('server.subdomain'), 'all'));
			}
		}

		$servers = $this->find('all', array(
				'conditions' => $conditions,
			)
		);
		/**
		 * Load each server option as we know it from database rows into configuration format
		 */
		foreach ($servers as $server) {
			foreach ($server as $option) {
				// use $server['Server'] instead of $option here because we don't want the 'ServerGroup' array to mess things up
				foreach ($server['Server'] as $k => $v) {
					Configure::write('servers.'.$server['Server']['id'].'.'.$k, $v);
				}
			}
		}
		//pr(Configure::read('servers'));

		$first_server = $this->find('first', array(
			'conditions' => $conditions,
			'order' => array('Server.id' => 'asc'
			)
		));
		Configure::write('first_server_id', $first_server['Server']['id']);
	}

	//-------------------------------------------------------------------

	/**
	 * Returns server name
	 *
	 * @param $serverID
	 * @return mixed
	 */
	public function serverName($serverID = null) {
		$serverName = $this->read('servername_a', $serverID);
		$serverName = $serverName['Server']['servername_a'];

		if($serverName == '') {
			$serverName = $this->read('servername', $serverID);
			$serverName = $serverName['Server']['servername'];
		}
		return $serverName;
	}

}