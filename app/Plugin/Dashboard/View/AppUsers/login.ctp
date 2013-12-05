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

$this->set('title_for_layout', __('Login • XLRstats'));
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
	<div class="users index">
		<fieldset>
			<?php
				echo $this->Form->create($model, array(
					'url' => array('plugin' => 'dashboard', 'controller' => 'app_users', 'action' => 'login'),
					'id' => 'login-form'));

				echo $this->Form->input('email', array(
					'label' => __('E-mail')));

				echo $this->Form->input('password', array(
					'label' => __('Password')));

				//echo '<p>' . $this->Form->input('remember_me', array('type' => 'checkbox', 'label' =>  __d('users', 'Remember Me'))) . '</p>';

				echo $this->Form->hidden('AppUser.return_to', array(
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
