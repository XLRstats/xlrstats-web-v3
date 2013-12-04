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
 * @package       app.Plugin.Dashboard.View.PlayerSoldiers
 * @since         XLRstats v3.0
 * @version       0.1
 */
?>

<div class="playerSoldiers view">
<h2><?php  echo __('Player Soldier'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($playerSoldier['PlayerSoldier']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($playerSoldier['AppUser']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Server Id'); ?></dt>
		<dd>
			<?php echo h($playerSoldier['Server']['servername']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Playerstats Id'); ?></dt>
		<dd>
			<?php echo h($playerSoldier['PlayerStat']['Player']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Player Soldier'), array('action' => 'edit', $playerSoldier['PlayerSoldier']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Player Soldier'), array('action' => 'delete', $playerSoldier['PlayerSoldier']['id']), null, __('Are you sure you want to delete # %s?', $playerSoldier['PlayerSoldier']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Player Soldiers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Player Soldier'), array('action' => 'add')); ?> </li>
	</ul>
</div>
