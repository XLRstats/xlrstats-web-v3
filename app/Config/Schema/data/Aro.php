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

class Aro {

/**
 * @var string
 */
	public $table = 'aros';

/**
 * @var array
 */
	public $records = array(
		array('id' => '1', 'parent_id' => null, 'model' => 'Group', 'foreign_key' => '1', 'alias' => 'Super Admin', 'lft' => '1', 'rght' => '2'),
		array('id' => '2', 'parent_id' => null, 'model' => 'Group', 'foreign_key' => '2', 'alias' => 'Admin', 'lft' => '3', 'rght' => '4'),
		array('id' => '3', 'parent_id' => null, 'model' => 'Group', 'foreign_key' => '3', 'alias' => 'User', 'lft' => '5', 'rght' => '6')
	);
}

