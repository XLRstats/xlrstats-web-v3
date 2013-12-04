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
<div class="navbar navbar-inverse navbar-static-top">

	<div class="navbar-inner">

		<div class="container-fluid">

			<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</a>

			<?php
			echo $this->Html->link($this->Html->image('Dashboard.admin-logo.png', array(
					'alt' => 'XLRstats', )),
				'/dashboard',
				array(
					'class' => 'logo pull-left',
					'escape' => false
				));
			?>

			<div class="clearfix">

				<ul class="global-links nav hidden-phone">

					<li class="<?php echo $this->name == 'Servers' ? 'active' : ''; ?>">
						<?php echo $this->Html->link(__('Servers'), array('plugin' => 'dashboard', 'admin' => true, 'controller' => 'servers', 'action' => 'admin_index')); ?>
					</li>

					<li class="<?php echo $this->name == 'AppUsers' ? 'active' : ''; ?>">
						<?php echo $this->Html->link(__('Users'), array('plugin' => 'dashboard', 'admin' => true, 'controller' => 'users', 'action' => 'admin_index')); ?>
					</li>

					<?php if ($user['Group']['level'] == 100): ?>

					<li class="<?php echo $this->name == 'ServerGroups' ? 'active' : ''; ?>">
						<?php echo $this->Html->link(__('Server Groups'), array('plugin' => 'dashboard', 'admin' => true, 'controller' => 'server_groups', 'action' => 'admin_index'));	?>
					</li>

					<li class="<?php echo $this->name == 'Options' ? 'active' : ''; ?>">
						<?php echo $this->Html->link(__('Options'), array('plugin' => 'dashboard', 'admin' => true, 'controller' => 'options', 'action' => 'admin_index')); ?>
					</li>

					<li class="<?php echo $this->name == 'Maintenance' ? 'active' : ''; ?>">
						<?php echo $this->Html->link(__('Maintenance'), array('plugin' => 'dashboard', 'admin' => true, 'controller' => 'maintenance', 'action' => 'admin_index')); ?>
					</li>

					<?php endif ?>

					<li class="<?php echo $this->name == 'Visit Site' ? 'active' : ''; ?>">
						<?php echo $this->Html->link(__('<i class="icon-home"></i> Visit Site'), array('plugin' => null, 'admin' => false, 'controller' => 'pages', 'action' => 'display', 'home'), array('escape' => false)); ?>
					</li>

				</ul>

				<!-- Global Links in Phones -->

				<ul class="nav pull-right global-links-mini visible-phone">

					<li class="dropdown">

						<a class="dropdown-toggle" data-toggle="dropdown" href="#">
							<i class="icon-2x icon-cog icon-white"></i>
							<b class="caret"></b>
						</a>

						<ul class="dropdown-menu">
							<li class="<?php echo $this->name == 'Servers' ? 'active' : ''; ?>">
								<?php echo $this->Html->link(__('Servers'), array('plugin' => 'dashboard', 'admin' => true, 'controller' => 'servers', 'action' => 'admin_index')); ?>
							</li>

							<?php if ($user['Group']['level'] == 100): ?>

							<li class="<?php echo $this->name == 'ServerGroups' ? 'active' : ''; ?>">
								<?php echo $this->Html->link(__('Server Groups'), array('plugin' => 'dashboard', 'admin' => true, 'controller' => 'server_groups', 'action' => 'admin_index')); ?>
							</li>

							<li class="<?php echo $this->name == 'Users' ? 'active' : ''; ?>">
								<?php echo $this->Html->link(__('Users'), array('plugin' => 'dashboard', 'admin' => true, 'controller' => 'users', 'action' => 'admin_index')); ?>
							</li>

							<li class="<?php echo $this->name == 'Options' ? 'active' : ''; ?>">
								<?php echo $this->Html->link(__('Options'), array('plugin' => 'dashboard', 'admin' => true, 'controller' => 'options', 'action' => 'admin_index')); ?>
							</li>

							<li class="<?php echo $this->name == 'Maintenance' ? 'active' : ''; ?>">
								<?php echo $this->Html->link(__('Maintenance'), array('plugin' => 'dashboard', 'admin' => true, 'controller' => 'maintenance', 'action' => 'admin_index')); ?>
							</li>

							<?php endif ?>

						</ul>

					</li>

				</ul>

				<!-- /Global Links in Phones Ends -->

			</div><!--/.nav-collapse -->

		</div>

	</div>

</div>