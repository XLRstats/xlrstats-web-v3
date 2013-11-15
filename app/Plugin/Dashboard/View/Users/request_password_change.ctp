<?php
/**
 * Copyright 2010 - 2012, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright 2010 - 2012, Cake Development Corporation (http://cakedc.com)
 * @license MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<div class="login-box clearfix">
	<div class="login-logo">
		<?php
		echo $this->Html->link(
			$this->Html->image('logo.png', array('title' => 'Powered by XLRstats',)),
			'http://www.xlrstats.com',
			array('escape' => false)
		);
		?>
	</div>
	<hr>
	<div class="users form">
		<div><?php echo __('Please enter the email you used for registration and you\'ll get an email with further instructions.'); ?></div>
		<hr>
		<?php
		echo $this->Form->create($model, array(
			'url' => array(
				'plugin' => 'dashboard',
				'controller' => 'app_users',
				'admin' => false,
				'action' => 'reset_password')));

		echo $this->Form->input('email', array(
			'label' => __('Your Email')));

		echo $this->Form->submit('Reset Password', array(
				'class' => 'btn btn-large btn-primary'
			)
		);

		echo $this->Form->end();
		?>
	</div>
	<hr>
	<div class="login-footer">
		<div><?php echo $this->Html->link(__('Back to Login'), '/login'); ?></div>
	</div>
</div>