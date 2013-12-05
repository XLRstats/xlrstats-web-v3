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

$this->set('title_for_layout', __('Register • XLRstats'));
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
		<fieldset>
			<?php
				echo $this->Form->create($model, array(
					'url' => array('plugin' => 'dashboard', 'controller' => 'app_users', 'action' => 'add'),
				));

				echo $this->Form->input('username', array(
						'label' => __('Username'),
						'error' => array('attributes' => array('class' => 'alert alert-error'))
					)
				);

				echo $this->Form->input('email', array(
						'label' => __('E-mail (used as login)'),
						'error' => array(
							'isValid' => __('Must be a valid email address'),
							'isUnique' => __('An account with that email already exists'),
							'attributes' => array('class' => 'alert alert-error')
						),
					)
				);

				echo $this->Form->input('password', array(
					'label' => __('Password'),
					'type' => 'password'));

				echo $this->Form->input('temppassword', array(
						'label' => __('Confirm Password'),
						'type' => 'password',
						'error' => array('attributes' => array('class' => 'alert alert-error'))
					)
				);

				$tosLink = $this->Html->link(__('Terms of Service'), array(
						'plugin' => null,
						'controller' => 'pages',
						'action' => 'tos',
						'server' => Configure::read('server_id'),
					)
				);

				echo $this->Form->input('tos', array(
						'label' => __('I have read and agreed to ') . $tosLink,
						'error' => array('attributes' => array('class' => 'alert alert-error'))
					)
				);

			echo $this->Form->submit('Register', array(
					'class' => 'btn btn-large btn-primary'
				)
			);

			echo $this->Form->end();
			?>
		</fieldset>
		<hr>
		<div class="login-footer">
			<div><?php echo $this->Html->link(__('Back to Login'), '/login'); ?></div>
		</div>
	</div>
</div>