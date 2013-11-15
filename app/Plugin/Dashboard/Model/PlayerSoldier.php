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
/**
 * Class PlayerSoldier
 */
class PlayerSoldier extends DashboardAppModel {
	/**
	 * Database table
	 * @var string
	 */
	public $useTable = 'user_soldiers';

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
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'playerstats_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

	/**
	 * belongsTo associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'User' => array(
			'className' => 'Dashboard.User',
			'foreignKey' => 'user_id',
			//'conditions' => '',
			//'fields' => '',
			//'order' => ''
		),
		'Server' => array(
			'className' => 'Dashboard.Server',
			'foreignKey' => 'server_id',
			//'conditions' => '',
			//'fields' => '',
			//'order' => ''
		),
		'PlayerStat' => array(
			'className' => 'PlayerStat',
			'foreignKey' => 'playerstats_id',
			//'conditions' => '',
			//'fields' => '',
			//'order' => '',
		)
	);

}
