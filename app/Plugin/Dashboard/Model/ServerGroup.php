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

class ServerGroup extends AppModel {
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
	public $name = 'ServerGroup';

	/**
	 * Tables
	 *
	 * @var string
	 */
	public $useTable = 'server_groups';

	/**
	 * Prefix
	 *
	 * @var string
	 */
	public $tablePrefix = '';

	/**
	 * Validation parameters
	 *
	 * @var array
	 */
	public $validate = array(
		'name' => array(
			'required' => array(
				'rule' => array('notEmpty'),
				'required' => true,
				'allowEmpty' => false,
				'message' => 'Please enter a server group name.'
			),
			'alpha' => array(
				'rule' => array('alphaNumeric'),
				'message' => 'Server group name can contain letters and numbers only. No space allowed.'
			),
			'unique' => array(
				'rule' => array('isUnique', 'name'),
				'message' => 'This server group name is already in use.'
			),
		),
		'description' => array(
			'rule' => 'notEmpty',
			'required' => true,
			'allowEmpty' => false,
			'message' => 'Please enter a description for this server group.'
		)

	);

	//-------------------------------------------------------------------

}
