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

/**
 * Set default values for the variables '$serverNameBig' and 'serverStats' that
 * we can pass into this element when calling it.
 */

$elementVars = array (
	'serverNameBig' => true,
	'serverNameCompact' => false,
	'serverStats' => true,
);

foreach ($elementVars as $key => $value) {
	if (!isset($$key)) {
		$$key = $value;
	}
}

$serverID = Configure::read('server_id');
$gameName = Configure::read('servers.' . $serverID . '.gamename');

//Request server data only if we want to display server name with slogan and real time server statistics
if ($serverNameBig || $serverStats) {
	$serverInfo = $this->requestAction('server_info');
}

$gameServerName = $this->requestAction('app/getservername/' . $serverID);

//pr($serverInfo);

$xfireGame = Configure::read('gamelaunchers.xfire.' . $gameName) ? Configure::read('gamelaunchers.xfire.' . $gameName) : false;
$qtrackerGame = Configure::read('gamelaunchers.qtracker.' . $gameName) ? Configure::read('gamelaunchers.qtracker.' . $gameName) : false;
$gscGame = Configure::read('gamelaunchers.gsc.' . $gameName) ? Configure::read('gamelaunchers.gsc.' . $gameName) : false;
$hlswGame = Configure::read('gamelaunchers.hlsw.' . $gameName) ? Configure::read('gamelaunchers.hlsw.' . $gameName) : false;

$playerNames = $this->requestAction('server_players');
?>

<!-- Server Info -->
<div class="row server-info">

	<?php if ($serverNameBig): ?>
	<!-- Server Name -->
	<div class="span12">
		<div class="stretch">

			<div class="server-name">

				<div class="span12">

					<div class="pull-left server-info-game-icon">
						<?php
						echo $this->Html->image('ico/icon_' . $gameName . '_64x64.png', array(
						'class' => 'game-icon img-polaroid',
						'rel' => 'tooltip',
						'data-original-title' => Configure::read('gameName') ? Configure::read('gameName') : $gameName,
					));?>
					</div>

					<?php if ($serverInfo['Ip'] != '0.0.0.0') { ?>
					<div class="pull-right server-info-buttons">
						<span class="btn-group">
							<?php
							$buttonContent = '<i class="icon-group"></i> <i class="icon-globe"></i> ';
							if (!$xfireGame && !$xfireGame && !$gscGame && !$hlswGame) {
								$buttonContent .= $this->Html->image('flags/' . $serverInfo['server_country_code'] . '.gif', array(
									'style' => 'width:16px; height:11px; margin-bottom: 3px; margin-left: 3px'));
							}
							echo $this->Html->link($buttonContent, array(
									'plugin' => null,
									'controller' => 'server_players',
									'action' => 'index',
									'server' => Configure::read('server_id')
								), array(
									'rel' => 'tooltip',
									'data-original-title' => __('Online Players & World Map'),
									'escape' => false,
									'class' => 'btn'
								))
							?>
                        </span>
						<?php if ($xfireGame || $xfireGame || $gscGame || $hlswGame) { ?>
						<span class="btn-group">
							<a class="btn btn-warning dropdown-toggle" data-toggle="dropdown" href="#"
							   rel="tooltip" data-original-title="<?php echo __('Connect to this server.') ?>">
									<i class="icon-refresh"></i> <?php echo $this->Html->image('flags/' . $serverInfo['server_country_code'] . '.gif', array(
									'style' => 'width:16px; height:11px; margin-bottom: 3px; margin-left: 3px')) ?>
							</a>
							<span class="dropdown-menu pull-right">
								<?php

								if ($xfireGame) {
								echo $this->Html->link($this->Html->image('icon_xfire.jpg'),
									'xfire://join?game=' . $xfireGame . '&server=' . $serverInfo['Ip'] . ':' . $serverInfo['Port'], array(
										'rel' => 'tooltip',
										'data-original-title' => __('Connect with xfire'),
										'escape' => false,
										'class' => 'btn btn-small'
									));
								}
								if ($qtrackerGame) {
								echo $this->Html->link($this->Html->image('icon_qtracker.jpg'),
									'qtracker://' . $serverInfo['Ip'] . ':' . $serverInfo['Port'] . '/?game=' . $qtrackerGame . '&action=join', array(
										'rel' => 'tooltip',
										'data-original-title' => __('Connect with qtracker '),
										'escape' => false,
										'class' => 'btn btn-small'
									));
								}
								if ($gscGame) {
								echo $this->Html->link($this->Html->image('icon_gsc.jpg'),
									'gsc://joinGame:game=' . $gscGame . '&ip=' . $serverInfo['Ip'] . '&port=' . $serverInfo['Port'], array(
										'rel' => 'tooltip',
										'data-original-title' => __('Connect with gsc '),
										'escape' => false,
										'class' => 'btn btn-small'
									));
								}
								if ($hlswGame) {
								echo $this->Html->link($this->Html->image('icon_hlsw.jpg'),
									'hlsw://' . $serverInfo['Ip'] . ':' . $serverInfo['Port'], array(
										'rel' => 'tooltip',
										'data-original-title' => __('Connect with hlsw '),
										'escape' => false,
										'class' => 'btn btn-small'
									));
								}
								?>
							</span>
						<?php } ?>
						</span>
                        <?php echo $this->element('donate_button') ?>
					</div>
					<?php } ?>

					<h1><?php echo $this->XlrFunctions->stripColors($gameServerName); ?></h1>
					<div class="slogan">
						<?php echo $this->Text->truncate($serverInfo['serverDescription'],
							100,
							array(
								'ending' => '...',
								'exact'		=> true,
							)
						); ?>
					</div>

				</div>

			</div>

		</div>
	</div>
	<!-- /Server Name Ends -->
	<?php endif; ?>

	<?php if ($serverNameCompact): ?>
	<!-- Server Name Compact -->
	<div class="span12">
		<div class="stretch">

			<div class="server-name-compact">
				<div class="span12">
					<h1>
						<span class="game-icon">
						<?php
						echo $this->Html->image('ico/icon_' . $gameName . '.gif', array(
							'class' => 'img-polaroid',
							'rel' => 'tooltip',
							'data-original-title' => Configure::read('gameName') ? Configure::read('gameName') : $gameName,
						));?>
						</span>
						<?php
						//Display league name in leagues pages before the server name
						$leagueName = null;
						$separator = null;
						if(isset($leagueValue[3])):
							$leagueName = $leagueValue[3] . '';
							$separator = ' • ';
						endif;
						echo $leagueName . $separator . $this->XlrFunctions->stripColors($gameServerName);
						?>
						<span class="pull-right">
							<?php echo $this->element('donate_button') ?>
						</span>
					</h1>
                </div>
			</div>

		</div>
	</div>
	<!-- /Server Name Ends -->
	<?php endif; ?>

	<?php if ($serverStats): ?>
	<!-- Server Stats -->
	<div class="span3">
		<div class="server-info-box">
			<h5>SERVER IP</h5>
			<div class="server-info-value"><?php echo $serverInfo['Ip'] ?>:<?php echo $serverInfo['Port'] ?></div>
			<i class="icon-2x icon-globe"></i>
		</div>
	</div>
	<div class="span3">
		<div class="server-info-box">
			<h5>CURRENT MAP</h5>
			<div class="server-info-value"><?php echo $this->Html->link($this->XlrFunctions->getMapName($serverInfo['Map']), array(
					'plugin' => null,
					'controller' => 'map_stats',
					'action' => 'view',
					'server' => Configure::read('server_id'),
					$serverInfo['current_map_id']
				)); ?></div>
			<i class="icon-2x icon-map-marker"></i>
		</div>
	</div>
	<div class="span3">
		<div class="server-info-box">
			<h5>PLAYERS</h5>
			<div class="server-info-value"><?php
				if ($serverInfo['OnlinePlayers'] > 0 ) {
					if ($serverInfo['OnlinePlayers'] >= $serverInfo['sv_maxclients']) {
						$badge = '<span class="badge badge-important">';
					} else {
						$badge = '<span class="badge badge-success">';
					}
					echo $this->Html->link($badge . $serverInfo['OnlinePlayers'] . '</span>', array(
						'plugin' => null,
						'controller' => 'server_players',
						'action' => 'index',
						'server' => Configure::read('server_id'),
					), array(
						'rel' => 'popover',
						'data-original-title' => __('Online Players'),
						'data-content' => $this->XlrFunctions->listPlayers($playerNames),
						'data-html' => true,
						'data-placement' => 'left',
						'data-trigger' => 'hover',
						'escape' => false
					));
				} else {
					echo '<span class="badge">' . $serverInfo['OnlinePlayers'] . '</span>';
				}
			?> / <?php echo $serverInfo['sv_maxclients'] ?></div>
			<i class="icon-2x icon-group"></i>
		</div>
	</div>
	<div class="span3">
		<div class="server-info-box">
			<h5>ROUND</h5>
			<div class="server-info-value"><?php echo $serverInfo['Rounds'] ?></div>
			<i class="icon-2x icon-gamepad"></i>
		</div>
	</div>
	<div class="span3">
		<div class="server-info-box">
			<h5>TOTAL COMPETING PLAYERS</h5>
			<div class="server-info-value"><?php echo $this->Number->format($serverInfo['total_players'], array(
				'places' => 0,
				'before' => null,
				'thousands' => '.'
			)); ?></div>
			<i class="icon-2x icon-user"></i>
		</div>
	</div>
	<div class="span3">
		<div class="server-info-box">
			<h5>KILLED</h5>
			<div class="server-info-value"><?php echo $this->Number->format($serverInfo['total_kills'], array(
				'places' => 0,
				'before' => null,
				'thousands' => '.'
			)); ?></div>
			<i class="icon-2x icon-bullseye"></i>
		</div>
	</div>
	<div class="span3">
		<div class="server-info-box">
			<h5>FAVORITE WEAPON</h5>
			<div class="server-info-value"><?php echo $this->Html->link($this->XlrFunctions->getWeaponName($serverInfo['favorite_weapon']), array(
					'plugin' => null,
					'controller' => 'weapon_stats',
					'action' => 'view',
					'server' => Configure::read('server_id'),
					$serverInfo['favorite_weapon_id']
				)); ?></div>
			<i class="icon-2x icon-trophy"></i>
		</div>
	</div>
	<div class="span3">
		<div class="server-info-box">
			<h5>FAVORITE MAP</h5>
			<div class="server-info-value"><?php echo $this->Html->link($this->XlrFunctions->getMapName($serverInfo['favorite_map']), array(
					'plugin' => null,
					'controller' => 'map_stats',
					'action' => 'view',
					'server' => Configure::read('server_id'),
					$serverInfo['favorite_map_id']
				)); ?></div>
			<i class="icon-2x icon-trophy"></i>
		</div>
	</div>
	<!-- /Server Stats Ends -->
	<?php endif; ?>

</div>
<!-- /Server Info End-->
