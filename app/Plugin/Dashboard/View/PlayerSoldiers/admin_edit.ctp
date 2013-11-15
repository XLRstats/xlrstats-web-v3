<div class="playerSoldiers form">
<?php echo $this->Form->create('PlayerSoldier'); ?>
	<fieldset>
		<legend><?php echo __('Admin Edit Player Soldier'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('PlayerSoldier.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('PlayerSoldier.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Player Soldiers'), array('action' => 'index')); ?></li>
	</ul>
</div>
