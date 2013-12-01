<?php
/**
 * XLRstats : Real Time Player Stats (http://www.xlrstats.com)
 * (CC) BY-NC-SA 2005-2013, Mark Weirath, Özgür Uysal
 *
 * Licensed under the Creative Commons BY-NC-SA 3.0 License
 * Redistributions of files must retain the above copyright notice.
 *
 * @link          http://www.xlrstats.com
 * @license       Creative Commons BY-NC-SA 3.0 License (http://creativecommons.org/licenses/by-nc-sa/3.0/)
 * @package       app.Plugin.Dashboard.View.Users
 * @since         XLRstats v3.0
 * @version       0.1
 */
?>

<div class="login-box clearfix">
	<div class="login-logo">
		<?php
		echo $this->Html->link(
			$this->Html->image('logo.png', array('title' => 'Powered by XLRstats', )),
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