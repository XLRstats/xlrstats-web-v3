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
 * @package       app.Plugin.Dashboard.View.Elements
 * @since         XLRstats v3.0
 * @version       0.1
 */
?>
<div clas="sidebar-nav">

	<!-- Admin Info -->
	<div class="admin-info clearfix">

		<div class="admin-avatar pull-left img-polaroid">
			<?php
			$options = array('size' => 50, 'rating' => 'g');
			echo $this->Html->link($this->Gravatar->image($user['User']['email'], $options,
					array(
						'alt' => 'Gravatar',
					)),
				'http://www.gravatar.com',
				array('escape' => false	)
			);
			?>
		</div>

		<div class="admin-meta pull-left">
			<ul>
				<li class="admin-name"><?php echo $user['User']['username']; ?></li>
				<li class="admin-group"><?php echo $user['Group']['name']; ?></li>
				<li class="admin-option"><i class="icon-off"></i>&nbsp;<a href="<?php echo $this->request->base . '/logout' ?>"><?php echo __('Logout'); ?></a>
			</ul>
		</div>
	</div>
	<!-- End Admin Info -->

	<!-- Accordion Menu -->
	<?php
	$globalMenuItems = array ('Servers', 'ServerGroups', 'Users', 'Options', 'Maintenance');
	//pr(array($this->name, $this->action));
	if (!in_array($this->name, $globalMenuItems) || ($this->name == 'Servers' && $this->action == 'admin_edit')):
	?>
	<ul class="accordionMod">

		<li>
			<?php
			echo $this->Html->link('<i class="icon-home"></i><span class="menu-title">Server Home</span>', array(
					'plugin' => 'dashboard',
					'controller' => 'home',
					'action' => 'index',
					'server' => Configure::read('server_id'),
				),
				array(
					'class' => 'accordion-toggle',
					'escape' => false,
				)
			);
			?>
		</li>
		<li>
			<?php
			echo $this->Html->link('<i class="icon-wrench"></i><span class="menu-title">Server Settings</span>', array(
				'plugin' => 'dashboard',
				'controller' => 'servers',
				'action' => 'edit',
				'server' => Configure::read('server_id'),
				Configure::read('server_id')
			), array(
				'class' => 'accordion-toggle',
				'escape' => false
			));
			?>
		</li>
		<li>
			<?php
			echo $this->Html->link('<i class="icon-cog"></i><span class="menu-title">Server Options</span>', array(
				'plugin' => 'dashboard',
				'controller' => 'server_options',
				'action' => 'index',
				'server' => Configure::read('server_id'),
			), array(
				'class' => 'accordion-toggle',
				'escape' => false
			));
			?>
		</li>
		<!--
		<li>
			<a href="#" class="accordion-toggle">
				<i class="icon-gamepad muted"></i><span class="menu-title muted">Players</span>
			</a>
		</li>
		-->

	</ul>
	<?php endif; ?>
	<!-- /End Accordion menu -->

</div>