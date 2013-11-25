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
 * @package       app.Config.Schema.data
 * @since         XLRstats v3.0
 * @version       0.1
 */

class Group {

/**
 * @var string
 */
	public $table = 'groups';

/**
 * @var array
 */
	public $records = array(
		array('id' => '1', 'name' => 'Super Admin', 'level' => '100', 'created' => '2013-03-30 18:26:27', 'modified' => '2013-03-30 18:26:27'),
		array('id' => '2', 'name' => 'Admin', 'level' => '40', 'created' => '2013-03-30 18:27:17', 'modified' => '2013-03-30 18:27:17'),
		array('id' => '3', 'name' => 'User', 'level' => '1', 'created' => '2013-03-30 18:27:43', 'modified' => '2013-03-30 18:27:43')
	);
}
