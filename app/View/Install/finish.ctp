<?php
$this->Html->addCrumb('License', 'license');
$this->Html->addCrumb('Server Test', 'server_test');
$this->Html->addCrumb('Database', 'database');
$this->Html->addCrumb('User Account', 'user_account');
$this->Html->addCrumb('First Server', 'first_server');
$this->Html->addCrumb('Finish', 'finish');
?>

<div class="page-header">
	<h1><?php echo __('Finish'); ?>: <?php echo __('Finishing Installation'); ?></h1>
</div>

<p>
	<?php if ($error = $this->Layout->sessionFlash()): ?>
	<div class="content-box content-box-error">
		<?php echo $error; ?>
	</div>
	<?php endif; ?>
</p>