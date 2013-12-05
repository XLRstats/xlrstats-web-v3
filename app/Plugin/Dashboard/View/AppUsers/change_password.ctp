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

$this->set('title_for_layout', __('Change Your Password • XLRstats'));
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
	<h4><?php echo __('Change your password'); ?></h4>
	<div style="text-align: center;"><?php echo __('Please enter your old password because of security reasons and then your new password twice.'); ?></div>
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
				'label' => __('Old Password'),
				'type' => 'password'));
			echo $this->Form->input('new_password', array(
				'label' => __('New Password'),
				'type' => 'password'));
			echo $this->Form->input('confirm_password', array(
				'label' => __('Confirm'),
				'type' => 'password'));
			echo $this->Form->submit('Change Your Password', array(
					'class' => 'btn btn-large btn-primary'));
			echo $this->Form->end();
			?>
		</fieldset>
	</div>
</div>