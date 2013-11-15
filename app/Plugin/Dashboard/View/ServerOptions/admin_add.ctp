<?php
foreach ($names as $name) {
	$_names[$name] = $name;
}
?>

<div class="serverOptions form">
<?php echo $this->Form->create('ServerOption'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Server Option for ') . ' ' . $servers[Configure::read('server_id')]; ?></legend>
	<?php
		echo $this->Form->hidden('server_id', array('default' => Configure::read('server_id')));
		echo $this->Form->label('Option');
		echo $this->Form->select('name', $_names);
		echo $this->Form->input('value', array('type' => 'text'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Server Options'), array('action' => 'index')); ?></li>
	</ul>
</div>
