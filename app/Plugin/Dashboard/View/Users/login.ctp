<?php
/**
 * Copyright 2010 - 2012, Cake Development Corporation (http://cakedc.com)
 *
 * Licensed under the Creative Commons BY-NC-SA 3.0 License
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
	<div class="users index">
		<fieldset>
			<?php
				echo $this->Form->create($model, array(
					'url' => array('plugin' => 'dashboard', 'controller' => 'app_users', 'action' => 'login'),
					'id' => 'login-form'));

				echo $this->Form->input('email', array(
					'label' => __('E-mail')));

				echo $this->Form->input('password',  array(
					'label' => __('Password')));

				//echo '<p>' . $this->Form->input('remember_me', array('type' => 'checkbox', 'label' =>  __d('users', 'Remember Me'))) . '</p>';

				echo $this->Form->hidden('User.return_to', array(
					'value' => $return_to));

				echo $this->Form->submit('Sign in', array(
						'class' => 'btn btn-large'
					)
				);

				echo $this->Form->end();
			?>
		</fieldset>
	</div>
	<hr>
	<div class="login-footer">
		<div class="register">Need and account? <?php echo $this->Html->link(__('Register Here'), '/register'); ?></div>
		<div class="forgot-password"><?php echo $this->Html->link(__('I forgot my password'), array('action' => 'reset_password')); ?></div>
		<div><?php echo $this->Html->link(__('Back to Stats Home'), '/'); ?></div>
	</div>
</div>
