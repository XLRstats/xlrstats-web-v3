<?php
/**
 * XLRstats webfront version 3
 *   User: Mark Weirath
 *   Date: 17-8-12
 *   Time: 15:50
 * (Developed with JetBrains PhpStorm.)
 */


echo '<h3>' . __('Leagues') . ': </h3><p>';
    foreach (Configure::read('league') as $id => $league):
    echo $this->Html->link($league[3], array(
    			'controller'	=> 'leagues',
				'action' => 'view',
				'server' => Configure::read('server_id'),
				$id
        )
    ) . ': ' . $league[1] . ' to ' . $league[2] . ' ' . $league[0] . '.<br />';
    endforeach;
    echo '</p>';

echo '<p>' . __('For a complete list of players use the') . ' ' . $this->Html->link(__('Playerstats List'), array(
			'controller'    => 'player_stats',
			'action' => 'index',
			'server' => Configure::read('server_id'),
        )
    ) . '</p>';
