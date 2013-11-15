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
<div class="users form">
	<?php echo $this->Form->create($model); ?>
	<fieldset>
		<legend><?php echo __('Add a New User'); ?></legend>
		<?php
		echo $this->Form->input('username', array(
				'label' => __('Username')
			)
		);
		echo $this->Form->input('email', array(
				'label' => __('E-mail (used as login)'),
				'error' => array(
					'isValid' => __('Must be a valid email address'),
					'isUnique' => __('An account with that email already exists')
				)
			)
		);
		echo $this->Form->input('password', array(
				'label' => __('Password'),
				'type' => 'password',
				'error' => array(
					'too_short' => __('Must be a valid email address'),
					'required' => __('You must enter a password')
				)
			)
		);
		echo $this->Form->input('temppassword', array(
				'label' => __('Password (confirm)'),
				'type' => 'password'
			)
		);
		echo $this->Form->input('group_id', array(
			'default' => 3
		));
		if(isset($serverGroups)) {
			echo $this->Form->input('ServerGroup', array(
					'type' => 'select',
					'multiple' => true,
					'selected' => $this->Session->read('server_group_id'),
				)
			);
		}
		echo $this->Form->input('active', array(
				'label' => __d('users', 'Active'),
				'checked' => true
			)
		);
		?>
	</fieldset>
	<?php
	echo $this->Form->submit('Add User', array(
			'class' => 'btn btn-primary'
		)
	);

	echo $this->Form->end();
	?>
</div>
<hr>
<div>
	<?php
	echo $this->Html->link(__('Back to XLRstats Users'), array(
			'action' => 'index'
		)
	);
	?>
</div>