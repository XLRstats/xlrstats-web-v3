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
							'isValid' => __d('users', 'Must be a valid email address'),
							'isUnique' => __('An account with that email already exists')
						),
						'error' => array('attributes' => array('class' => 'alert alert-error'))
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