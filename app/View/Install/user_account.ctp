<?php
$this->Html->addCrumb('License', 'license');
$this->Html->addCrumb('Server Test', 'server_test');
$this->Html->addCrumb('Database', 'database');
$this->Html->addCrumb('Super Admin Account', 'user_account');
?>

<div class="page-header">
	<h1>
		<?php echo __('Installation'); ?>:
		<?php echo __('Super Admin Account'); ?>
	</h1>
</div>
<p><?php echo __('Please enter the administrative username and password to use when signing into this installation.'); ?></p>

<hr>

<?php echo $this->Form->create('AppUser', array('class' => 'form-horizontal')); ?>

<div class="control-group">
	<label class="control-label" for="AppUserName"><?php echo __('Real Name'); ?></label>
	<div class="controls">
		<div class="input-prepend">
			<span class="add-on"><i class="icon-user"></i></span>
			<?php echo $this->Form->text('AppUser.name', array('class' => 'input-large')); ?>
		</div>
		<small><span class="help-inline"><?php echo __('Your real name.'); ?></span></small>
	</div>
</div>

<div class="control-group">
	<label class="control-label" for="AppUserUsername"><?php echo __('Username'); ?></label>
	<div class="controls">
		<div class="input-prepend">
			<span class="add-on"><i class="icon-user"></i></span>
			<?php echo $this->Form->text('AppUser.username', array('class' => 'input-large')); ?>
		</div>
		<small><span class="help-inline"><?php echo __('The username/display name'); ?></span></small>
	</div>
</div>

<div class="control-group">
	<label class="control-label" for="AppUserEmail"><?php echo __('Email'); ?></label>
	<div class="controls">
		<div class="input-prepend">
			<span class="add-on"><i class="icon-envelope-alt"></i></span>
			<?php echo $this->Form->text('AppUser.email', array('class' => 'input-large')); ?>
		</div>
		<small><span class="help-inline"><?php echo __('The email address is used to log in to XLRstats.'); ?></span></small>
	</div>
</div>

<div class="control-group">
	<label class="control-label" for="AppUserPassword"><?php echo __('Password'); ?></label>
	<div class="controls">
		<div class="input-prepend">
			<span class="add-on"><i class="icon-lock"></i></span>
			<?php echo $this->Form->password('AppUser.password', array('class' => 'input-large')); ?>
		</div>
		<small><span class="help-inline"><?php echo __('The password you will use to login to XLRstats.'); ?></span></small>
	</div>
</div>

<div class="control-group">
	<label class="control-label" for="AppUserTemppassword"><?php echo __('Confirm Password'); ?></label>
	<div class="controls">
		<div class="input-prepend">
			<span class="add-on"><i class="icon-lock"></i></span>
			<?php echo $this->Form->password('AppUser.temppassword', array('class' => 'input-large')); ?>
		</div>
		<small><span class="help-inline"><?php echo __('Type your password again to confirm.'); ?></span></small>
	</div>
</div>

<hr>

<fieldset>
	<input class="submit btn btn-success" type="submit" value="<?php echo __('Install Super Admin Account'); ?>" />
</fieldset>

<?php echo $this->Form->end(); ?>
