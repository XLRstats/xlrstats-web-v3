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
<!-- Login Box -->

<div class="login-block pull-right">
	<?php if (!empty($user)): ?>
	<div class="btn-group login-block pull-right">
		<button class="btn btn-link dropdown-toggle" data-toggle="dropdown" href="#">
			<?php
			/**
			 * Display Gravatar
			 */
			$options = array('size' => 20, 'rating' => 'g');
			echo $this->Html->link($this->Gravatar->image($user['User']['email'], $options,
					array(
						'alt' => 'Gravatar',
					)),
				'http://www.gravatar.com',
				array('escape' => false	)
			);
			?>
			<?php echo __('Howdy %s (%s)', $user['User']['username'], $user['Group']['name']); ?>
			<span class="caret"></span>
		</button>

		<ul class="dropdown-menu">
			<li>
				<?php if ($user['Group']['name'] == 'Super Admin' || $isAuthorized):?>
					<a href="<?php echo $this->request->base . '/dashboard' ?>">Dashboard</a>
				<?php endif; ?>
				<a href="<?php echo $this->request->base . '/users/edit' ?>">Profile</a>
				<a href="<?php echo $this->request->base . '/logout' ?>">Logout</a>

			</li>
			<li class="divider"></li>
			<li class="dropdown-submenu pull-left">
				<a href="#">My Soldiers</a>
				<ul class="dropdown-menu">
				<?php
					$mySoldiers = $this->requestAction('user_soldiers/listing/' . $user['User']['id']);
					if (empty($mySoldiers)) {
						echo '<li class="nav-header">'. __('You have no Identified Soldiers') . '</li>';
					} else {
						echo '<li class="nav-header">'. __('Identified Soldiers') . '</li>';
						foreach ($mySoldiers as $soldier) {
							$gameIcon = $this->Html->image('ico/icon_'.$soldier['Server']['gamename'].'.gif');
							echo '<li>';
							echo $this->Html->link($gameIcon . ' ' . $soldier['Server']['servername'], array(
								'plugin' => null,
								'controller' => 'player_stats',
								'action' => 'view',
								'server' => Configure::read('server_id'),
								$soldier['UserSoldier']['playerstats_id'],
								'server' => $soldier['UserSoldier']['server_id']), array(
									'escape' => false
								)
							);
							echo '</li>';
						}
					}
				?>
				</ul>
			</li>
		</ul>

	</div>
	<?php else: ?>
	<div>
		<a href="<?php echo $this->request->base . '/login'; ?>">Login</a> |
		<a href="<?php echo $this->request->base . '/register'; ?>">Register</a>
	</div>
	<?php endif; ?>
</div>

<!-- /Login Box Ends -->