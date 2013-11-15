<div class="servers form">
<?php echo $this->Form->create('Server'); ?>
	<fieldset>
		<legend><?php echo __('Add a New Server'); ?></legend>
	<?php
		echo $this->Form->input('servername');
		echo $this->Form->input('active');
		echo '<hr>';
		echo $this->Form->input('gamename', array(
			'type'    => 'select',
			'options' => Configure::read('games'),
			'empty'   => __('Select Game')
		));
		echo $this->Form->input('dbhost');
		echo $this->Form->input('dbuser');
		echo $this->Form->input('dbpass');
		echo $this->Form->input('dbname');
		echo $this->Form->input('server_group_id');
		echo $this->Form->input('statusurl');
		echo $this->Form->input('slogan');
	?>
	</fieldset>
	<?php
	echo $this->Form->submit('Add Server', array(
			'class' => 'btn btn-primary'
		)
	);

	echo $this->Form->end();
	?>
</div>
<hr>
<div>
	<?php
	echo $this->Html->link(__('Back to Server List'), array(
			'action' => 'index'
		)
	);
	?>
</div>
