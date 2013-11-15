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

App::uses('User', 'Users.Model');

class AppUser extends User {
	/**
	 * Database table
	 * @var string
	 */
	public $useTable = 'users';

	/**
	 * Alias
	 *
	 * @var string
	 */
	public $alias = 'User';

	/**
	 * Database associations
	 *
	 * @var array
	 */
	public $belongsTo = array(
		'Group' => array(
			'className' => 'Dashboard.Group'
		)
	);

	/**
	 * hasAndBelongsToMany associations
	 *
	 * @var array
	 */
	public $hasAndBelongsToMany = array(
		'ServerGroup' => array(
			'className' => 'Dashboard.ServerGroup',
			'joinTable' => 'server_groups_users',
			'foreignKey' => 'user_id',
			'associationForeignKey' => 'server_group_id',
			'unique' => true,
		)
	);

	/**
	 * Add ACL behaviour and set 'enabled' to false to avoid the afterSave to be called.
	 * This will prevent users being added to 'aros' table.
	 *
	 * @var array
	 */
	public $actsAs = array('Acl' => array('type' => 'requester', 'enabled' => false));

	//-------------------------------------------------------------------

	/**
	 * This is used by the AclBehavior to determine parent->child relationships.
	 * Returns null as we're using Group Only ACL
	 *
	 * @return array|null
	 */
	public function parentNode() {
		return null;
	}

	//-------------------------------------------------------------------

	/**
	 * Required for group only ACL
	 *
	 * @param $user
	 * @return array
	 */
	public function bindNode($user) {
		return array('model' => 'Group', 'foreign_key' => $user['AppUser']['group_id']);
	}

	//-------------------------------------------------------------------

	/**
	 * Returns an array of user data
	 *
	 * @param null $id
	 * @return array
	 */
	public function getUserData($id = null) {
		$userData = $this->find('first', array(
			'conditions' => array(
				'User.id' => $id,
			)
		));
		return $userData;
	}

}