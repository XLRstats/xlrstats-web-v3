<?php
/**
 * XLRstats webfront version 3
 *   User: Mark Weirath
 *   Date: 17-8-12
 *   Time: 15:50
 * (Developed with JetBrains PhpStorm.)
 */

class Player extends AppModel{
	/**
	 * @var bool
	 */
	public $b3Database = true;
	//public $useDbConfig = 'alternate'; 	// Use a different database config
	/**
	 * @var string
	 */
	public $useTable = 'clients';			// Use a different table name
	//public $name = 'Client';				// Defaults to the class name

	/**
	 * @var string
	 */
	public $hasOne = 'League';
}