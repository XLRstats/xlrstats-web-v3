<?php
/**
 * XLRstats webfront version 3
 *   User: Mark Weirath
 *   Date: 17-8-12
 *   Time: 15:50
 * (Developed with JetBrains PhpStorm.)
 */

class PlayerStat extends AppModel {
	public $b3Database = true;
	public $name = 'PlayerStat';
    public $useTable = 'playerstats';
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
