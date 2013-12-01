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
 * Class Group
 */
class Group extends DashboardAppModel {

/**
 * Model name
 *
 * @var string
 */
	public $name = 'Group';

/**
 * Behaviours
 *
 * @var array
 */
	public $actsAs = array('Acl' => array('type' => 'requester'));

	//-------------------------------------------------------------------

/**
 * This is used by the AclBehavior to determine parent->child relationships
 *
 * @return null
 */
	public function parentNode() {
		return null;
	}

}
