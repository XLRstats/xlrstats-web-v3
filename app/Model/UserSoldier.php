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
 * @package       app.Model
 * @since         XLRstats v3.0
 * @version       0.1
 */

class UserSoldier extends AppModel {

/**
 * Do we connect to B3 database?
 *
 * @var bool
 */
	public $b3Database = false;

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
		'server_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
		'playerstats_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
			),
		),
	);

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'Dashboard.User',
			'foreignKey' => 'user_id',
		),
		'Server' => array(
			'className' => 'Dashboard.Server',
			'foreignKey' => 'server_id',
		),
		'PlayerStat' => array(
			'className' => 'PlayerStat',
			'foreignKey' => 'playerstats_id',
		)
	);

	//-------------------------------------------------------------------

/**
 * Returns a list of user soldiers
 *
 * @param null $id
 * @return array
 */
	public function listUserSoldiers($id = null) {
		$this->unbindModel(array(
			'belongsTo' => array(
				'User',
				'PlayerStat'
			)));

		$conditions = array(
			'UserSoldier.user_id' => $id
		);

		if (Configure::read('global.advanced.subDomains') && Configure::read('server.subdomain') != 'www') {
			$conditions['Server.server_group_id'] = Configure::read('server.servergroup_id');
		}

		$userSoldiers = $this->find('all', array(
			'fields' => array(
				'UserSoldier.id',
				'UserSoldier.server_id',
				'UserSoldier.playerstats_id',
				'Server.servername',
				'Server.gamename',
				'Server.server_group_id'
			),
			'conditions' => $conditions
		));

		return $userSoldiers;
	}

}
