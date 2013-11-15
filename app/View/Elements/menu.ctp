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
 * @package       app.View.Elements
 * @since         XLRstats v3.0
 * @version       0.1
 */
?>
<div class="navigation">
	<div class="navbar navbar-inverse stretch">
		<div class="navbar-inner">
			<div>
				<!-- .btn-navbar is used as the toggle for collapsed navbar content -->
				<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</a>
				<div class="nav-collapse collapse">
					<ul class="nav">
						<li>
							<a href="<?php echo Configure::read('options.homelink') ?>">HOME</a>
						</li>
						<li <?php if($this->name == 'Pages') echo 'class="active"'; ?>> <!-- if(isset($this->viewVars['page']) AND $this->viewVars['page'] == 'home') -->
							<?php echo $this->Html->link(__('XLRSTATS'), array('plugin' => null, 'admin' => false, 'controller' => 'pages', 'action' => 'display', 'server' => Configure::read('server_id'), 'home')); ?>
						</li>
						<!-- <li <?php if($this->name == 'PlayerStats') echo 'class="active"'; ?>>
							<?php echo $this->Html->link(__('PLAYERSTATS'), array('plugin' => null, 'admin' => false, 'controller' => 'player_stats', 'action' => 'index', 'server' => Configure::read('server_id'))); ?> -->
						</li>
						<li class="dropdown <?php if($this->name == 'Leagues') echo 'active'; ?>">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('LEAGUES') ?> <b class="caret"></b></a>
							<ul class="dropdown-menu">
								<?php echo $this->element('menu_leagues');  ?>
							</ul>
						</li>
						<li <?php if($this->name == 'WeaponStats') echo 'class="active"'; ?>>
							<?php echo $this->Html->link(__('WEAPONS'), array('plugin' => null, 'admin' => false, 'controller' => 'weapon_stats', 'action' => 'index', 'server' => Configure::read('server_id'))); ?>
						</li>
						<li <?php if($this->name == 'MapStats') echo 'class="active"'; ?>>
							<?php echo $this->Html->link(__('MAPS'), array('plugin' => null, 'admin' => false, 'controller'	=> 'map_stats', 'action' => 'index', 'server' => Configure::read('server_id'))); ?>
						</li>
						<?php if (Configure::read('options.show_banlist')): ?>
							<li <?php if($this->name == 'Penalties') echo 'class="active"'; ?>>
								<?php
								if (Configure::read('options.show_bans_only')) $penName = __('BANLIST');
								else $penName = __('PENALTIES');
								echo $this->Html->link($penName, array('plugin' => null, 'admin' => false, 'controller'	=> 'penalties', 'action' => 'index', 'server' => Configure::read('server_id'))); ?>
							</li>
						<?php endif; ?>
						<li <?php if($this->name == 'Feeds') echo 'class="active"'; ?>>
							<?php echo $this->Html->link(__('NEWS'), array('plugin' => null, 'admin' => false, 'controller' => 'feeds', 'action' => 'index', 'server' => Configure::read('server_id'))); ?>
						</li>
					</ul>

					<ul class="nav pull-right">
						<li class="divider-vertical"></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo __('SERVERS') ?> <b class="caret"></b></a>
							<ul class="dropdown-menu uses-cookie">
								<?php echo $this->element('menu_servers');  ?>
							</ul>
						</li>
					</ul>
					<?php
					echo $this->Form->create("PlayerStat", array('url' => '/' . Configure::read('server_id') . '/player_stats/search', 'class' => 'navbar-search pull-right'));
					echo $this->Form->input("q", array('label' => false, 'class' => 'search-query span2', 'placeholder' => 'Player Search'));
					echo $this->Form->end();
					?>
				</div><!--/.nav-collapse -->
			</div>
		</div>
	</div>
</div>