<?php
/**
 * XLRstats webfront version 3
 *   User: Mark Weirath
 *   Date: 17-8-12
 *   Time: 15:50
 * (Developed with JetBrains PhpStorm.)
 */

class League extends AppModel {
	/**
	 * @var bool
	 */
	public $b3Database = true;
	/**
	 * @var string
	 */
	public $name = 'League';
	/**
	 * @var string
	 */
	public $useTable = 'xlr_playerstats';
	/**
	 * @var array
	 */
	public $belongsTo = array(
		'Player'	=> array(
			'foreignKey'	=>	'client_id'
		)
	);

	/**
	 *
	 */
	function __construct() {
		parent::__construct();
		$this->setSource(Configure::read('options.table_playerstats'));
	}
}
