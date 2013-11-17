<?php
/**
 * XLRstats webfront version 3
 *   User: Mark Weirath
 *   Date: 17-8-12
 *   Time: 15:50
 * (Developed with JetBrains PhpStorm.)
 */

class PlayerStat extends AppModel {
	/**
	 * @var bool
	 */
	public $b3Database = true;
	/**
	 * @var string
	 */
	public $name = 'PlayerStat';
	/**
	 * @var string
	 */
	public $useTable = 'xlr_playerstats';
	/**
	 * @var array
	 */
	public $belongsTo = array(
        'Player'=>  array(
            'foreignKey'    => 'client_id',
        )
    );
/*	public $hasMany = array(
		'PlayerMap'     =>	array(
			'className'		=>	'PlayerMap',
			'foreignKey'	=>	'player_id',
			'order'			=>	array('PlayerMap.kills'	=>	'DESC'),
		),
        'PlayerWeapon'  => array(
            'className'     => 'PlayerWeapon',
            'foreignKey'    => 'player_id',
            'order'         => array('PlayerWeapon.kills' => 'DESC'),
        ),
	);*/
}

/**
 *
 */
function __construct() {
		parent::__construct();
		$this->setSource(Configure::read('options.table_playerstats'));
		//$this->useTable = Configure::read('options.table_playerstats');
	}