<div class="serverGroups form">
	<?php echo $this->Form->create('ServerGroup'); ?>
	<fieldset>
		<legend><?php echo __('Add Server Group'); ?></legend>
		<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		?>
	</fieldset>
	<?php
	echo $this->Form->submit('Add Server Group', array(
			'class' => 'btn btn-primary'
		)
	);

	echo $this->Form->end();
	?>
</div>
<hr>
<div>
	<?php
	echo $this->Html->link(__('Back to Server Groups'), array(
			'action' => 'index'
		)
	);
	?>
</div>
