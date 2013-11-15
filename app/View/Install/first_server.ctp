<?php
$this->Html->addCrumb('License', 'license');
$this->Html->addCrumb('Server Test', 'server_test');
$this->Html->addCrumb('Database', 'database');
$this->Html->addCrumb('User Account', 'user_account');
$this->Html->addCrumb('First Server', 'first_server');

$games = Configure::read('games');
?>

<div class="page-header">
	<h1><?php echo __('Installation'); ?>: <?php echo __('Gameserver') ?></h1>
</div>
	<div class="servers form">
<?php echo $this->Form->create('Server'); ?>
	<fieldset>
		<legend><?php echo __('Add the initial Server'); ?></legend>
	<?php
		echo $this->Form->hidden('active', array('value' => '1'));
		echo $this->Form->input('gamename', array('options' => $games, 'empty' => '(choose one)', 'label' => 'Game'));
		echo $this->Form->input('servername', array('label' => 'The name of the server'));
		echo $this->Form->input('dbhost', array('label' => 'B3 Database hostname (or IP address)'));
		echo $this->Form->input('dbuser', array('label' => 'The DB user'));
		echo $this->Form->input('dbpass', array('label' => 'The DB password'));
		echo $this->Form->input('dbname', array('label' => 'The name of the DB'));
		echo $this->Form->hidden('server_group_id', array('value' => '1'));
		echo $this->Form->input('statusurl', array('label' => 'URL to your status.xml file (or leave empty when using the B3 DB for the statusinfo)'));
		//echo $this->Form->input('slogan', array('value' => ''));
	?>
	</fieldset>
<?php echo $this->Form->end(array(
	'label' => 'Add the Server',
	'class' => 'btn btn-success')); ?>
</div>
