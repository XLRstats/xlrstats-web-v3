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
			<?php echo h($playerSoldier['User']['username']); ?>
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
