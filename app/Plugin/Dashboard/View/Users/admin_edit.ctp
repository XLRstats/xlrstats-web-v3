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

$this->set('title_for_layout', __('Edit User • XLRstats'));
?>
	<div class="users form">
		<?php echo $this->Form->create($model, array(
				'url' => array('plugin' => 'dashboard', 'controller' => 'app_users', 'action' => 'admin_edit'),
			)
		); ?>
		<fieldset>
			<legend><?php echo __d('users', 'Edit User'); ?></legend>
			<?php
			echo $this->Form->input('id');
			echo $this->Form->input('username', array(
				'label' => __d('users', 'Username')));
			echo $this->Form->input('email', array(
				'label' => __d('users', 'Email')));
			echo $this->Form->input('group_id');

			if(isset($serverGroups)):
				echo $this->Form->input('ServerGroup', array(
					'type' => 'select',
					'multiple' => true,
				));
			endif;
			echo $this->Form->input('active', array(
				'label' => __d('users', 'Active')));
			?>
		</fieldset>
		<?php
		echo $this->Form->submit('Save Changes', array(
				'class' => 'btn btn-primary'
			)
		);

		echo $this->Form->end();
		?>
	</div>