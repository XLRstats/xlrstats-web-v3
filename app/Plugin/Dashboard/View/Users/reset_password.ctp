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
		<h4><?php echo __('Reset your password'); ?></h4>
		<hr>
		<?php
		echo $this->Form->create($model, array(
			'url' => array(
				'plugin' => 'dashboard',
				'controller' => 'app_users',
				'action' => 'reset_password',
				$token)));

		echo $this->Form->input('new_password', array(
				'label' => __('New Password'),
				'type' => 'password',
				'error' => array('attributes' => array('class' => 'alert alert-error')),
			)
		);

		echo $this->Form->input('confirm_password', array(
				'label' => __('Confirm'),
				'type' => 'password',
				'error' => array('attributes' => array('class' => 'alert alert-error')),
			)
		);

		echo $this->Form->submit('Reset Password', array(
				'class' => 'btn btn-large btn-primary'
			)
		);

		echo $this->Form->end();
		?>
	</div>
</div>