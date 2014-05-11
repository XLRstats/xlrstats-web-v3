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
 * @package       app.View.Playerstats
 * @since         XLRstats v3.0
 * @version       0.1
 */

$serverName = $this->requestAction('app/getServername');
$serverName = $this->XlrFunctions->stripColors($serverName);
$playerName = $this->XlrFunctions->fixName($playerStats['Player']['name']);
$this->set('title_for_layout', __('%s • %s • XLRstats', $playerName, $serverName));

//pr($playerStats);
$this->Html->script('gauge.min', array('inline' => false));
$this->Html->script('highcharts', array('inline' => false));
$this->Html->script('exporting', array('inline' => false));

$myPage = false;

?>

<!-- Player Info -->
<!--nocache-->
<div class="player-info">
	<div class="row">
		<div class="span12">
			<div class="avatar pull-left">
				<?php
				$options = array('size' => 75, 'rating' => 'g');
				echo $this->Gravatar->image($playerStats['UserDetails']['email'], $options,
					array(
						'alt' => 'Gravatar',
						'class' => 'img-polaroid',
					)
				);
				?>
			</div>
			<div class="player-name">
				<?php
				if (isset($playerStats['UserDetails']['User.clan_tag'])) {
					echo '<small>[' . $playerStats['UserDetails']['User.clan_tag'] . ']</small> ';
				}
				echo $playerName;
				?>
				<span class="player-flag"><?php echo $this->Html->image('flags/' . $playerStats['Player']['flag'][0] . '.gif', array(
					'style' => 'margin-top:-15px;',
					'rel' => 'tooltip',
					'data-original-title' => $playerStats['Player']['flag'][1], )); ?>
				</span>
				<span class="pull-right"> <?php echo $this->element('profile-social-buttons', array(
						'userDetails' => $playerStats['UserDetails']
					)); ?></span>
			</div>
			<div class="player-level">
				<?php
				echo $playerStats['Player']['level']['name'];
				if ((gmdate('U') - $playerStats['Player']['time_edit']) / 86400 >= Configure::read('options.max_days') && (Configure::read('options.max_days') > 0) && Configure::read('options.showMIA')) {
					echo '<span class="label label-important" style="margin-left: 10px">' . __('Missing In Action') . '</span>';
				}
				?>
			</div>
			<small>
				<?php
				echo __('Registered on %s, last seen playing on %s, connected %s times.',
					array(
						$this->Time->format('F jS, Y h:i A', $playerStats['Player']['time_add'], null),
						$this->Time->format('F jS, Y h:i A', $playerStats['Player']['time_edit'], null),
						$playerStats['Player']['connections']
					)
				);
				?>
			</small>
			<div class="pull-right">
				<?php
				/** This needs to become a Form that saves Field: 'Server.<nr>' and Value: '<player_id>' in the user_details table */
				if (array_key_exists('id_token', $playerStats['PlayerStat']) && $playerStats['PlayerStat']['id_token'] == substr(md5(AuthComponent::user('email')), null, 8)) {
					$myPage = true;

					if (!$isBookMarked) {
						// Form to add a UserSoldier (My Soldiers)
						echo $this->Form->create("UserSoldier", array(
							'plugin' => null,
							'controller' => 'user_soldiers',
							'action' => 'add',
							'div' => false,
							'style' => 'display: inline;'
						));

						echo $this->Form->hidden('user_id', array('default' => $user['AppUser']['id']));
						echo $this->Form->hidden('server_id', array('default' => Configure::read('server_id')));
						echo $this->Form->hidden('playerstats_id', array('default' => $playerStats['PlayerStat']['id']));
						$options = array(
							'label' => __('Finish Identification'),
							'class' => 'btn btn-success btn-mini',
							'style' => 'display: inline;'
						);
						echo $this->Form->end($options);
					} else {
						//echo '<span class="a2a_dd label label-info" style="cursor:pointer;"><i class="icon-plus"></i> ' . __('Share this') . '</span>
						//<script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>';
						echo '<!-- AddToAny BEGIN -->
							<span class="a2a_kit a2a_default_style">
							<a class="a2a_button_facebook"></a>
							<a class="a2a_button_twitter"></a>
							<a class="a2a_button_google_plus"></a>
							<a class="a2a_button_email"></a>
							<a class="a2a_dd" href="http://www.addtoany.com/share_save"></a>
							</span>
							<script type="text/javascript" src="//static.addtoany.com/menu/page.js"></script>
							<!-- AddToAny END -->';
					}
				} else {
					echo '<i class="icon-info-sign" rel="popover" data-trigger="hover" data-placement="left" data-original-title="' . __('Is this you?') . '"
					data-content="' . __('Register and collect your \'Player Identification Token\' in your profile page.') . '"></i>';
				}
				?>
			</div>
		</div>
	</div>
</div>
<!--/nocache-->
<!-- /Player Info Ends -->

<!-- Player Short Stats -->
<div class="player-short-stats">
	<div class="row">
		<div class="span12">

			<div class="box-large pull-left">
				<h4><?php echo __('Rank'); ?></h4>

				<div><?php echo __(Configure::read('rank.' . $playerStats['PlayerStat']['rank'] . '.0')); ?></div>
				<?php
				echo $this->Html->image('ranks/' . Configure::read('rank.' . $playerStats['PlayerStat']['rank'] . '.2'),
					array(
						'class' => 'img-rank-big'
					)
				);

				?>
				<?php if ($playerStats['PlayerStat']['rank_progress'] == 'TopRank'): ?>
				<h4><?php echo __('Progress - 100%'); ?></h4>
				<span class="label label-important"><?php echo __('Highest Rank Achieved'); ?></span>
				<?php else: ?>
				<h4><?php echo __('Progress - %s', $this->Number->toPercentage($playerStats['PlayerStat']['rank_progress']['progress'], 0)); ?></h4>
				<div class="progress progress-striped active rank-progress">
					<div class="bar" style="width: <?php echo $this->Number->toPercentage($playerStats['PlayerStat']['rank_progress']['progress'], 2); ?>"></div>
				</div>
				<div style="margin-right:13px;">
					<?php echo $this->Html->image('ranks/' . Configure::read('rank.' . $playerStats['PlayerStat']['rank'] . '.2'), array(
					'class' => 'img-rank-small pull-left',
					'rel' => 'tooltip',
					'data-original-title' => __(Configure::read('rank.' . $playerStats['PlayerStat']['rank'] . '.0')),
				));?>
					<small><?php echo __('%s Kills needed', $playerStats['PlayerStat']['rank_progress']['kills_needed']); ?></small>
					<?php echo $this->Html->image('ranks/' . Configure::read('rank.' . ($playerStats['PlayerStat']['rank'] + 1) . '.2'), array(
					'class' => 'img-rank-small pull-right',
					'rel' => 'tooltip',
					'data-original-title' => __(Configure::read('rank.' . ($playerStats['PlayerStat']['rank'] + 1) . '.0')),
				));?>
				</div>
				<?php endif; ?>
			</div>

			<div class="box-midi pull-left">
				<h4><?php echo __('Top Skill Ranking');?></h4>
				<div class="text-x-large"><?php echo $playerStats['PlayerStat']['top_skill_rank']; ?></div>
				<?php
				if ($playerStats['PlayerStat']['league']):
					$leagueName = __(Configure::read('league.' . $playerStats['PlayerStat']['league'] . '.3'));
					$leagueColor = __(Configure::read('league.' . $playerStats['PlayerStat']['league'] . '.5'));
					echo $this->Html->link('<span class="label label-info" style="background-color:' . $leagueColor . '">' . $leagueName . '</span>',
						array(
							'controller' => 'leagues',
							'action' => 'view',
							'server' => Configure::read('server_id'),
							$playerStats['PlayerStat']['league']
						),
						array(
							'escape' => false
						));?>
				<!-- TODO: Change label color based on league -->
				<?php
				endif;
				?>
			</div>

			<div class="box-midi pull-left gauge">
				<h3><?php echo $this->Number->precision($playerStats['PlayerStat']['ratio'], 2); ?></h3>
				<small><span style="position:relative; top:10px">1</span></small>
				<div>
					<canvas id="kill-death-ratio" width="115" height="60"></canvas>
				</div>
				<small>
					<span class="pull-left" style="position:relative; left:40px; bottom:20px">0</span>
					<span class="pull-right" style="position:relative; right:40px; bottom:20px;"><?php echo $gaugeMax; ?></span>
				</small>
				<h4><?php echo __('Kill / Death Ratio'); ?></h4>
			</div>

			<div class="box-midi pull-left">
				<?php echo $this->Html->image('playerstats-kills.png', array(
				'style' => 'position:relative; top:5px;'
			));?>
				<h3>
					<?php echo $this->Number->format($playerStats['PlayerStat']['kills'], array(
						'places' => 0,
						'before' => null,
						'thousands' => '.'
					)); ?>
				</h3>
				<h4><?php echo __('Kills'); ?></h4>
			</div>

			<div class="box-midi end pull-left">
				<?php echo $this->Html->image('playerstats-deaths.png', array(
				'style' => 'position:relative; top:5px;'
			));?>
				<h3>
					<?php echo $this->Number->format($playerStats['PlayerStat']['deaths'], array(
					'places' => 0,
					'before' => null,
					'thousands' => '.'
				)); ?>
				</h3>
				<h4><?php echo __('Deaths'); ?></h4>
			</div>

			<div class="box-midi bottom pull-left">
				<h4 style="position:relative; top: 15px"><?php echo __('Skill'); ?></h4>
				<div class="text-x-large">
					<?php echo $this->Number->format($playerStats['PlayerStat']['skill'], array(
					'places' => 0,
					'before' => null,
					'thousands' => '.'
				)); ?>
				</div>
			</div>

			<div class="box-mini pull-left">
				<h3>
					<?php echo $this->Number->format($playerStats['PlayerStat']['assists'], array(
					'places' => 0,
					'before' => null,
					'thousands' => '.'
				)); ?>
				</h3>
				<h4><?php echo __('Kill Assist'); ?></h4>
			</div>

			<div class="box-mini pull-left">
				<h3>
					<?php echo $this->Number->format($playerStats['PlayerStat']['assistskill'], array(
					'places' => 0,
					'before' => null,
					'thousands' => '.'
				)); ?>
				</h3>
				<h4><?php echo __('Assist Skill'); ?></h4>
			</div>

			<div class="box-mini pull-left">
				<h3>
					<?php echo $this->Number->format($playerStats['PlayerStat']['rounds'], array(
					'places' => 0,
					'before' => null,
					'thousands' => '.'
				)); ?>
				</h3>
				<h4><?php echo __('Rounds'); ?></h4>
			</div>

			<div class="box-mini end pull-left">
				<h3>
					<?php echo $this->Number->format($playerStats['PlayerStat']['suicides'], array(
					'places' => 0,
					'before' => null,
					'thousands' => '.'
				)); ?>
				</h3>
				<h4><?php echo __('Suicides'); ?></h4>
			</div>

			<div class="box-mini bottom pull-left">
				<h3>
					<?php echo $this->Number->format($playerStats['PlayerStat']['teamkills'], array(
					'places' => 0,
					'before' => null,
					'thousands' => '.'
				)); ?>
				</h3>
				<h4><?php echo ('Team Kills'); ?></h4>
			</div>

			<div class="box-mini bottom pull-left">
				<h3>
					<?php echo $this->Number->format($playerStats['PlayerStat']['teamdeaths'], array(
					'places' => 0,
					'before' => null,
					'thousands' => '.'
				)); ?>
				</h3>
				<h4><?php echo __('Team Deaths'); ?></h4>
			</div>

			<div class="box-mini bottom pull-left">
				<h3>
					<?php echo $this->Number->format($playerStats['PlayerStat']['winstreak'], array(
					'places' => 0,
					'before' => null,
					'thousands' => '.'
				)); ?>
				</h3>
				<h4><?php echo __('Win Streak'); ?></h4>
			</div>

			<div class="box-mini bottom end pull-left">
				<h3>
					<?php echo $this->Number->format($playerStats['PlayerStat']['losestreak'], array(
					'places' => 0,
					'before' => null,
					'thousands' => '.'
				)); ?>
				</h3>
				<h4><?php echo __('Lose Streak'); ?></h4>
			</div>

		</div>
	</div>
</div>
<!-- /Player Short Stats Ends -->

<!-- Tabs -->
<div class="playerstats-tabs"> <!-- Only required for left/right tabs -->
	<ul class="nav nav-tabs" id="playerstats">
		<li>
			<?php
			echo $this->Html->link(__('Achievements'),
				array(
					'controller' => 'achievements',
					'action' => 'view/' . $playerStats['PlayerStat']['id'],
					'server' => Configure::read('server_id'),
					'full_base' => true,
				),
				array (
					'data-target' => '#achievements',
					'data-toggle' => 'tab'
				)
			);
			?>
		</li>

		<li>
			<?php
			echo $this->Html->link(__('Activity'),
				array(
					'controller' => 'player_activities',
					'action' => 'view/' . $playerStats['PlayerStat']['id'],
					'server' => Configure::read('server_id'),
					'full_base' => true,
				),
				array (
					'data-target' => '#activities',
					'data-toggle' => 'tab'
				)
			);
			?>
		</li>
		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<?php echo __('History') ?>
				<b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
				<li>
					<?php
					echo $this->Html->link(__('Weekly'),
						array(
							'controller' => 'weekly_stats',
							'action' => 'view/' . $playerStats['PlayerStat']['id'],
							'server' => Configure::read('server_id'),
							'full_base' => true,
						),
						array (
							'data-target' => '#history-weekly',
							'data-toggle' => 'tab'
						)
					);
					?>
				</li>
				<li>
					<?php
					echo $this->Html->link(__('Monthly'),
						array(
							'controller' => 'monthly_stats',
							'action' => 'view/' . $playerStats['PlayerStat']['id'],
							'server' => Configure::read('server_id'),
							'full_base' => true,
						),
						array (
							'data-target' => '#history-monthly',
							'data-toggle' => 'tab'
						)
					);
					?>
				</li>
			</ul>
		</li>
		<li>
			<?php
			echo $this->Html->link(__('Weapons'),
				array(
					'controller' => 'player_weapons',
					'action' => 'view/' . $playerStats['PlayerStat']['id'],
					'server' => Configure::read('server_id'),
					'full_base' => true,
				),
				array (
					'data-target' => '#weapons',
					'data-toggle' => 'tab'
				)
			);
			?>
		</li>
		<li>
			<?php
			echo $this->Html->link(__('Maps'),
				array(
					'controller' => 'player_maps',
					'action' => 'view/' . $playerStats['PlayerStat']['id'],
					'server' => Configure::read('server_id'),
					'full_base' => true,
				),
				array (
					'data-target' => '#maps',
					'data-toggle' => 'tab'
				)
			);
			?>
		</li>
		<li>
			<?php
			echo $this->Html->link(__('Hit Zones'),
				array(
					'controller' => 'player_hit_zones',
					'action' => 'view/' . $playerStats['PlayerStat']['id'],
					'server' => Configure::read('server_id'),
					'full_base' => true,
				),
				array (
					'data-target' => '#hitzones',
					'data-toggle' => 'tab'
				)
			);
			?>
		</li>
		<li>
			<?php
			echo $this->Html->link(__('Opponents'),
				array(
					'controller' => 'opponents',
					'action' => 'view/' . $playerStats['PlayerStat']['id'],
					'server' => Configure::read('server_id'),
					'full_base' => true,
				),
				array (
					'data-target' => '#opponents',
					'data-toggle' => 'tab'
				)
			);
			?>
		</li>
		<?php
		if ($myPage || (!empty($user) && $user['Group']['level'] >= 40 )) {
			?>

		<li class="dropdown">
			<a class="dropdown-toggle" data-toggle="dropdown" href="#">
				<?php echo __('My Personal Tab') ?>
				<b class="caret"></b>
			</a>
			<ul class="dropdown-menu">
				<li><a href="#client_info" data-toggle="tab"><?php echo __('My B3 Info') ?></a></li>

				<li>
					<?php
					echo $this->Html->link(__('My Penalties'),
						array(
							'controller' => 'penalties',
							'action' => 'view/' . $playerStats['PlayerStat']['id'],
							'server' => Configure::read('server_id'),
							'full_base' => true,
						),
						array(
							'data-target' => '#penalty-tab',
							'data-toggle' => 'tab'
						)
					);
					?>
				</li>
				<li>
					<?php
					echo $this->Html->link(__('My Aliases'),
						array(
							'controller' => 'aliases',
							'action' => 'view/' . $playerStats['PlayerStat']['id'],
							'server' => Configure::read('server_id'),
							'full_base' => true,
						),
						array(
							'data-target' => '#penalty-tab',
							'data-toggle' => 'tab'
						)
					);
					?>
				</li>
				<li>
					<?php
					echo $this->Html->link(__('My Ip\'s'),
						array(
							'controller' => 'ip_aliases',
							'action' => 'view/' . $playerStats['PlayerStat']['id'],
							'server' => Configure::read('server_id'),
							'full_base' => true,
						),
						array(
							'data-target' => '#penalty-tab',
							'data-toggle' => 'tab'
						)
					);
					?>
				</li>
			</ul>
		</li>
		<?php
		};
		?>

	</ul>
	<div class="tab-content">

		<div class="tab-pane" id="achievements">
			Loading...
		</div>
		<div class="tab-pane" id="activities">
			Loading...
		</div>
		<div class="tab-pane" id="history-weekly">
			Loading...
		</div>
		<div class="tab-pane" id="history-monthly">
			Loading...
		</div>
		<div class="tab-pane" id="weapons">
			Loading...
		</div>
		<div class="tab-pane" id="maps">
			Loading...
		</div>
		<div class="tab-pane" id="hitzones">
			Loading...
		</div>
		<div class="tab-pane" id="opponents">
			Loading...
		</div>

		<?php if ($myPage || (!empty($user) && $user['Group']['level'] >= 40 )): ?>
		<div class="tab-pane" id="client_info">
			<h3><?php echo __('My B3 Info') ?></h3>
			<table class="table table-hover">
				<thead>
				<?php echo $this->Html->tableHeaders(array(
					__('Key'),
					__('Value'),
					__('Description')
				)) ?>
				</thead>

				<?php
				echo $this->Html->tableCells(array(
					array(
						__('Name'),
						$playerStats['Player']['name'] . ( $playerStats['PlayerStat']['fixed_name'] ? ' (Fixed: ' . $playerStats['PlayerStat']['fixed_name'] . ')' : '' ),
						__('Your client name, and if set also the fixed name for XLRstats')
					),
					array(
						__('B3 id (XLRstats id)'),
						'@' . $playerStats['Player']['id'] . ' (' . $playerStats['PlayerStat']['id'] . ')',
						__('The @-number is your identifier for B3, the second number is your XLRstats player number')
					),
					array(
						__('IP'),
						$playerStats['Player']['ip'] . ' (' . $playerStats['Player']['flag']['1'] . ' - ' . $playerStats['Player']['flag']['0'] . ')',
						__('IP address and GEOIP location as we know it')
					),
					array(
						__('GUID'),
						$playerStats['Player']['guid'],
						__('Your Game Unique IDentifier')
					),
					array(
						__('PB-id'),
						$playerStats['Player']['pbid'],
						__('PunkBuster Identifier (if applicable)')
					),
					array(
						__('Masked Level'),
						$playerStats['Player']['mask_level'] ? $playerStats['Player']['mask_level'] : __('Not set'),
						__('A masked level hides your real level in game (admins only)')
					),
					array(
						__('Group Bits'),
						$playerStats['Player']['group_bits'] . ' ( Level: ' . $playerStats['Player']['level']['level'] . ' - ' . $playerStats['Player']['level']['name'] . ')',
						__('Group Bits defining your access level and its translated level')
					),
					array(
						__('Greeting'),
						$playerStats['Player']['greeting'] ? $playerStats['Player']['greeting'] : __('Not set'),
						__('Used by the welcome plugin to greet you when joining')
					),
					array(
						__('Login'),
						$playerStats['Player']['login'],
						__('Used by the password plugin to store your email address when given')
					),
					array(
						__('First seen'),
						$this->Time->format('F jS, Y h:i A', $playerStats['Player']['time_add'], null),
						__('This is when B3 has seen you first')
					),
					array(
						__('Last seen'),
						$this->Time->format('F jS, Y h:i A', $playerStats['Player']['time_edit'], null),
						__('This is when B3 has seen you last')
					),
				)); ?>
			</table>
		</div>
		<?php endif; ?>

		<div class="tab-pane" id="penalty-tab">
			Loading...
		</div>
	</div>
</div>
<!-- /Tabs End -->

<div class="row">
	<div class="span12"><?php echo $this->element('disqus'); ?></span></div>
</div>

<script type="text/javascript">
	var gaugeOneTarget = document.getElementById('kill-death-ratio');
	var gaugeOne = new Gauge(gaugeOneTarget);

	gaugeOne.setOptions({
		lines: 12, // The number of lines to draw
		angle: 0, // The length of each line
		lineWidth: 0.3, // The line thickness
		pointer: {
			length: 0.78, // The radius of the inner circle
			strokeWidth: 0.03, // The rotation offset
			color: '#444444' // Fill color
		},
		colorStart: '#8FC0DA',
		colorStop: '#8FC0DA',
		strokeColor: '#ddd',
		generateGradient: true });

	gaugeOne.maxValue = <?php echo $gaugeMax; ?>;
	gaugeOne.animationSpeed = 20;
	gaugeOne.set(<?php echo $playerStats['PlayerStat']['gauge_value']; ?>);

	// Tabs
	$(function() {
		$("#playerstats").tab(); // initialize tabs
		$("#playerstats").bind("show", function(e) {
			var contentID = $(e.target).attr("data-target");
			var contentURL = $(e.target).attr("href");

			if (typeof(contentURL) != 'undefined') {
				// state: has a url to load from
				$(contentID).load(contentURL, function(){
					$("#playerstats").tab(); // reinitialize tabs
				});
			} else {
				//state: no url, to show static data
				$(contentID).tab('show');
			}
		});
		$('#playerstats a:first').tab("show"); // Load and display content for first tab
	});
</script>

<script
	type="text/javascript">stLight.options({publisher: "ur-9437151c-3a80-da3e-7b31-23e9bc08b9ab", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
<script>
	var options = { "publisher": "ur-9437151c-3a80-da3e-7b31-23e9bc08b9ab", "position": "left", "ad": { "visible": false, "openDelay": 5, "closeDelay": 0}, "chicklets": { "items": ["facebook", "googleplus", "linkedin", "twitter", "email"]}};
	var st_hover_widget = new sharethis.widgets.hoverbuttons(options);
</script>