<?php
/**
 * XLRstats webfront version 3
 *   User: Mark Weirath
 *   Date: 17-8-12
 *   Time: 15:50
 * (Developed with JetBrains PhpStorm.)
 */

class Player extends AppModel{
	public $b3Database = true;
	//public $useDbConfig = 'alternate'; 	// Use a different database config
	public $useTable = 'clients';			// Use a different table name
	public $tablePrefix = '';				// Override the prefix set in database.php
	//public $name = 'Client';				// Defaults to the class name

    public $hasOne = 'League';
}