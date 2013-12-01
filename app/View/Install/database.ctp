<?php
$this->Html->addCrumb('License', 'license');
$this->Html->addCrumb('Server Test', 'server_test');
$this->Html->addCrumb('Database', 'database');
?>

<div class="page-header">
	<h1>
		<?php echo __('Installation'); ?>:
		<?php echo __('DataBase'); ?>
	</h1>
</div>


<?php if ($configExists): ?>
	<div class="alert alert-block alert-danger">
		<h4><i class="icon-warning-sign"></i> Configuration files exist!</h4>
		<p>
			This is not a fresh installation, files that are created by this installer already exist on your system and therefor we cannot continue the installation process.
		</p>
		<p>
			If you insist on enforcing a fresh installation you need to clean up this one first. Easiest way to clean up is to:
		</p>
			<ol>
				<li>completely remove the previous installation from your server</li>
				<li>empty the database, remove all existing tables</li>
				<li>upload the latest version of the webfront to your server</li>
				<li>restart the installation process</li>
			</ol>
	</div>
	<?php else: ?>
	<div>
		<em><?php echo __('Enter connection data for your MySQL database. Note: your database must already exist before completing this step.'); ?></em>
		<p class="alert alert-info"><i class="icon-time"></i> This step can take some time to complete, please be patient while it performs its installation tasks!</p>
	</div>
	<div>
		<hr>
		<form class="form-horizontal" action="" method="post">

			<div class="control-group">
				<label class="control-label" for="host"><?php echo __('Server Hostname'); ?></label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-hdd"></i></span>
						<?php echo $this->Form->text('host', array('class' => 'input-large', 'value' => 'localhost')); ?>
					</div>
					<small><span class="help-inline"><?php echo __('for example mysql.example.com or localhost'); ?></span></small>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="database"><?php echo __('Database Name'); ?></label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-asterisk"></i></span>
						<?php echo $this->Form->text('database', array('class' => 'input-large')); ?>
					</div>
					<small><span class="help-inline"><?php echo __('Database must already exist!'); ?></span></small>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="login"><?php echo __('Database username'); ?></label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-user"></i></span>
						<?php echo $this->Form->text('login', array('class' => 'input-large')); ?>
					</div>
					<small><span class="help-inline"><?php echo __('Username used to log into this database.'); ?></span></small>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="password"><?php echo __('Database password'); ?></label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-lock"></i></span>
						<?php echo $this->Form->password('password', array('class' => 'input-large')); ?>
					</div>
					<small><span class="help-inline"><?php echo __('Password used to log into this database.'); ?></span></small>
				</div>
			</div>

			<div class="control-group">
				<label class="control-label" for="email_from"><?php echo __('Email "from" address'); ?></label>
				<div class="controls">
					<div class="input-prepend">
						<span class="add-on"><i class="icon-envelope-alt"></i></span>
						<?php echo $this->Form->text('email_from', array('class' => 'input-large')); ?>
					</div>
					<small><span class="help-inline"><?php echo __('This must be a valid email address!'); ?></span></small>
				</div>
			</div>

			<?php echo $this->Form->hidden('prefix', array('value' => '')); ?>

			<hr>

			<input type="submit" value="<?php echo __('Set up configuration files and Database tables'); ?>" class="submit btn btn-success" />

		</form>
	</div>
<?php endif;
