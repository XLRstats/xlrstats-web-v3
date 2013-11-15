<div class="playerSoldiers form">
<?php echo $this->Form->create('PlayerSoldier'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Player Soldier'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('server_id');
		echo $this->Form->input('playerstats_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Player Soldiers'), array('action' => 'index')); ?></li>
	</ul>
</div>
