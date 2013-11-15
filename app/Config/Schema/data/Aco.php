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

class Aco {
	public $table = 'acos';
	public $records = array(
		array('id' => '1','parent_id' => NULL,'model' => '','foreign_key' => NULL,'alias' => 'controllers','lft' => '1','rght' => '108'),
		array('id' => '2','parent_id' => '1','model' => '','foreign_key' => NULL,'alias' => 'Dashboard','lft' => '2','rght' => '107'),
		array('id' => '3','parent_id' => '2','model' => '','foreign_key' => NULL,'alias' => 'Servers','lft' => '3','rght' => '16'),
		array('id' => '4','parent_id' => '3','model' => '','foreign_key' => NULL,'alias' => 'admin_index','lft' => '4','rght' => '5'),
		array('id' => '5','parent_id' => '3','model' => '','foreign_key' => NULL,'alias' => 'admin_view','lft' => '6','rght' => '7'),
		array('id' => '6','parent_id' => '3','model' => '','foreign_key' => NULL,'alias' => 'admin_add','lft' => '8','rght' => '9'),
		array('id' => '7','parent_id' => '3','model' => '','foreign_key' => NULL,'alias' => 'admin_edit','lft' => '10','rght' => '11'),
		array('id' => '8','parent_id' => '3','model' => '','foreign_key' => NULL,'alias' => 'admin_delete','lft' => '12','rght' => '13'),
		array('id' => '9','parent_id' => '2','model' => '','foreign_key' => NULL,'alias' => 'ServerGroups','lft' => '17','rght' => '28'),
		array('id' => '10','parent_id' => '9','model' => '','foreign_key' => NULL,'alias' => 'admin_index','lft' => '18','rght' => '19'),
		array('id' => '11','parent_id' => '9','model' => '','foreign_key' => NULL,'alias' => 'admin_view','lft' => '20','rght' => '21'),
		array('id' => '12','parent_id' => '9','model' => '','foreign_key' => NULL,'alias' => 'admin_add','lft' => '22','rght' => '23'),
		array('id' => '13','parent_id' => '9','model' => '','foreign_key' => NULL,'alias' => 'admin_edit','lft' => '24','rght' => '25'),
		array('id' => '14','parent_id' => '9','model' => '','foreign_key' => NULL,'alias' => 'admin_delete','lft' => '26','rght' => '27'),
		array('id' => '15','parent_id' => '2','model' => '','foreign_key' => NULL,'alias' => 'Options','lft' => '29','rght' => '40'),
		array('id' => '16','parent_id' => '15','model' => '','foreign_key' => NULL,'alias' => 'admin_index','lft' => '30','rght' => '31'),
		array('id' => '17','parent_id' => '15','model' => '','foreign_key' => NULL,'alias' => 'admin_edit','lft' => '32','rght' => '33'),
		array('id' => '18','parent_id' => '15','model' => '','foreign_key' => NULL,'alias' => 'admin_view','lft' => '34','rght' => '35'),
		array('id' => '19','parent_id' => '15','model' => '','foreign_key' => NULL,'alias' => 'admin_add','lft' => '36','rght' => '37'),
		array('id' => '20','parent_id' => '15','model' => '','foreign_key' => NULL,'alias' => 'admin_delete','lft' => '38','rght' => '39'),
		array('id' => '21','parent_id' => '2','model' => '','foreign_key' => NULL,'alias' => 'ServerOptions','lft' => '41','rght' => '52'),
		array('id' => '22','parent_id' => '21','model' => '','foreign_key' => NULL,'alias' => 'admin_index','lft' => '42','rght' => '43'),
		array('id' => '23','parent_id' => '21','model' => '','foreign_key' => NULL,'alias' => 'admin_view','lft' => '44','rght' => '45'),
		array('id' => '24','parent_id' => '21','model' => '','foreign_key' => NULL,'alias' => 'admin_add','lft' => '46','rght' => '47'),
		array('id' => '25','parent_id' => '21','model' => '','foreign_key' => NULL,'alias' => 'admin_edit','lft' => '48','rght' => '49'),
		array('id' => '26','parent_id' => '21','model' => '','foreign_key' => NULL,'alias' => 'admin_delete','lft' => '50','rght' => '51'),
		array('id' => '27','parent_id' => '2','model' => '','foreign_key' => NULL,'alias' => 'AppUsers','lft' => '53','rght' => '68'),
		array('id' => '28','parent_id' => '27','model' => '','foreign_key' => NULL,'alias' => 'admin_index','lft' => '54','rght' => '55'),
		array('id' => '29','parent_id' => '27','model' => '','foreign_key' => NULL,'alias' => 'admin_view','lft' => '56','rght' => '57'),
		array('id' => '30','parent_id' => '27','model' => '','foreign_key' => NULL,'alias' => 'admin_add','lft' => '58','rght' => '59'),
		array('id' => '31','parent_id' => '27','model' => '','foreign_key' => NULL,'alias' => 'admin_edit','lft' => '60','rght' => '61'),
		array('id' => '32','parent_id' => '27','model' => '','foreign_key' => NULL,'alias' => 'admin_delete','lft' => '62','rght' => '63'),
		array('id' => '33','parent_id' => '27','model' => '','foreign_key' => NULL,'alias' => 'admin_search','lft' => '64','rght' => '65'),
		array('id' => '34','parent_id' => '2','model' => '','foreign_key' => NULL,'alias' => 'Groups','lft' => '69','rght' => '80'),
		array('id' => '35','parent_id' => '34','model' => '','foreign_key' => NULL,'alias' => 'admin_index','lft' => '70','rght' => '71'),
		array('id' => '36','parent_id' => '34','model' => '','foreign_key' => NULL,'alias' => 'admin_view','lft' => '72','rght' => '73'),
		array('id' => '37','parent_id' => '34','model' => '','foreign_key' => NULL,'alias' => 'admin_add','lft' => '74','rght' => '75'),
		array('id' => '38','parent_id' => '34','model' => '','foreign_key' => NULL,'alias' => 'admin_edit','lft' => '76','rght' => '77'),
		array('id' => '39','parent_id' => '34','model' => '','foreign_key' => NULL,'alias' => 'admin_delete','lft' => '78','rght' => '79'),
		array('id' => '40','parent_id' => '2','model' => '','foreign_key' => NULL,'alias' => 'PlayerSoldiers','lft' => '81','rght' => '92'),
		array('id' => '41','parent_id' => '40','model' => '','foreign_key' => NULL,'alias' => 'admin_index','lft' => '82','rght' => '83'),
		array('id' => '42','parent_id' => '40','model' => '','foreign_key' => NULL,'alias' => 'admin_view','lft' => '84','rght' => '85'),
		array('id' => '43','parent_id' => '40','model' => '','foreign_key' => NULL,'alias' => 'admin_add','lft' => '86','rght' => '87'),
		array('id' => '44','parent_id' => '40','model' => '','foreign_key' => NULL,'alias' => 'admin_edit','lft' => '88','rght' => '89'),
		array('id' => '45','parent_id' => '40','model' => '','foreign_key' => NULL,'alias' => 'admin_delete','lft' => '90','rght' => '91'),
		array('id' => '46','parent_id' => '2','model' => '','foreign_key' => NULL,'alias' => 'Maintenance','lft' => '93','rght' => '98'),
		array('id' => '47','parent_id' => '46','model' => '','foreign_key' => NULL,'alias' => 'admin_index','lft' => '94','rght' => '95'),
		array('id' => '48','parent_id' => '46','model' => '','foreign_key' => NULL,'alias' => 'admin_clearcache','lft' => '96','rght' => '97'),
		array('id' => '49','parent_id' => '2','model' => '','foreign_key' => NULL,'alias' => 'Dashboard','lft' => '99','rght' => '102'),
		array('id' => '50','parent_id' => '49','model' => '','foreign_key' => NULL,'alias' => 'admin_index','lft' => '100','rght' => '101'),
		array('id' => '51','parent_id' => '3','model' => '','foreign_key' => NULL,'alias' => 'admin_serversJson','lft' => '14','rght' => '15'),
		array('id' => '52','parent_id' => '2','model' => '','foreign_key' => NULL,'alias' => 'Home','lft' => '103','rght' => '106'),
		array('id' => '53','parent_id' => '52','model' => '','foreign_key' => NULL,'alias' => 'admin_index','lft' => '104','rght' => '105'),
		array('id' => '54','parent_id' => '27','model' => NULL,'foreign_key' => NULL,'alias' => 'admin_indexJson','lft' => '66','rght' => '67')
	);
}

