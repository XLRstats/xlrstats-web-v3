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
	<h4><?php echo __('Change your password'); ?></h4>
	<div style="text-align: center;"><?php echo __d('users', 'Please enter your old password because of security reasons and then your new password twice.'); ?></div>
	<hr>
	<div class="users form">
		<fieldset>
			<?php
			echo $this->Form->create($model, array(
				'url' => array(
						'plugin' => 'dashboard',
						'controller' => 'app_users',
						'action' => 'change_password',
					)
				)
			);
			echo $this->Form->input('old_password', array(
				'label' => __d('users', 'Old Password'),
				'type' => 'password'));
			echo $this->Form->input('new_password', array(
				'label' => __d('users', 'New Password'),
				'type' => 'password'));
			echo $this->Form->input('confirm_password', array(
				'label' => __d('users', 'Confirm'),
				'type' => 'password'));
			echo $this->Form->submit('Change Your Password', array(
					'class' => 'btn btn-large btn-primary'));
			echo $this->Form->end();
			?>
		</fieldset>
	</div>
</div>