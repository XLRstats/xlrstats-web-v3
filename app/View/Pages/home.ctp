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
 * @package       app.Layouts
 * @since         XLRstats v3.0
 * @version       0.1
 */

$serverName = $this->requestAction('app/getServername');
$serverName = $this->XlrFunctions->stripColors($serverName);
$this->set('title_for_layout', __('XLRstats • %s', $serverName));
?>

<!-- Server Info -->
<?php echo $this->element('server_info'); ?>
<!-- /Server Info End -->

<!-- Leagues -->
<div class="row leagues">
	<?php
	//We'll use these values to create dynamic league blocks
	$leagueVars = $this->XlrFunctions->getPopulatedLeagueVars();
	//pr($leagueVars);
	if(!$leagueVars):
		?>
		<div class="span12">
			<div class="alert alert-info"><?php echo __('No data to display!'); ?></div>
		</div>
		<?php
	else:
		$leaguesConfig = Configure::read('league');
		//pr($leaguesConfig);
		$leagues = $leagueVars[0];
		$leagueNumber = $leagueVars[1];
		$span = $leagueVars[2];
		$detailedStats = $leagueVars[3];

		$i = 0; //use in arrays derived from $leagueVars
		foreach ($leagues as $league):
			$n = 1; //used to assign player position numbers

			//Setting the length of the player names for truncation so layout is not messed up by long player names
			if ($detailedStats[$i]):
				$nameTruncation = 33;
			else:
				$nameTruncation = 15;
			endif;

			$players = $league[0]['aaData'];
			?>
			<div class="<?php echo $span[$i]; ?> league">
				<div class="subleague" <?php echo $span[$i] == 'span12' ? 'style="height: auto;"' : ''?>>
					<div class="league-title">
						<span class="view-league-btn pull-right"
								rel="popover" data-trigger="hover" data-placement="left"
								data-title="<?php echo __(Configure::read('league.' . $leagueNumber[$i] . '.3')); ?>"
								data-content="<?php echo __(Configure::read('league.' . $leagueNumber[$i] . '.4')); ?>">
							<?php echo $this->Html->Link('<i class="icon-play-circle icon-white"></i>', array(
							'controller' => 'leagues', 'action' => 'view', 'server' => Configure::read('server_id'), $leagueNumber[$i],
						), array('escape' => false)) ?>
						</span>
						<h4>
							<?php
							$leagueNrInt = (int)$leagueNumber[$i];
							if (isset($leaguesConfig[$leagueNrInt][5])) {
								$leagueColor = $leaguesConfig[$leagueNrInt][5];
							} else {
								//TODO: Need to css this leagueColor
								$leagueColor = '#999999';
							}
							if ($leaguesConfig[$leagueNrInt][0] == 'League.skill') {
								$leagueIcon = '<i class="icon-star" style="color:' . $leagueColor . '; margin-right: 10px"></i>';
							} else {
								$leagueIcon = '<i class="icon-calendar" style="color:' . $leagueColor . '; margin-right: 10px"></i>';
							}
							?>
							<?php echo $leagueIcon . $this->Html->Link(__(Configure::read('league.' . $leagueNumber[$i] . '.3')), array(
							'controller' => 'leagues', 'action' => 'view', 'server' => Configure::read('server_id'), $leagueNumber[$i]
							)) ?>
						</h4>
					</div>
					<div>
						<table class="table table-hover">
							<thead>
							<tr>
								<th style="padding-left:15px;"><?php echo __('#'); ?></th>
								<th><?php echo __('Player'); ?></th>
								<th>&nbsp;</th>
								<th style="text-align:right; padding-right:15px;"><?php echo __('Skill'); ?></th>
								<?php if ($detailedStats[$i]): ?>
								<th><?php echo __('Kills'); ?></th>
								<th><?php echo __('Deaths'); ?></th>
								<th><?php echo __('Rounds'); ?></th>
								<th><?php echo __('Win Streak'); ?></th>
								<th><?php echo __('Lose Streak'); ?></th>
								<?php endif; ?>
							</tr>
							</thead>
							<tbody>
								<?php foreach ($players as $player): ?>
							<tr>
								<td style="padding-left:15px;">
									<?php
									echo $n;
									$n++;
									?>
								</td>
								<td><?php
									//Player Name
									$name = $this->Text->truncate($player[1],
										$nameTruncation,
										array(
											'ending'	=> '...',
											'exact'		=> true,
										));
									if ($name == $player[1]) {
										echo $this->Html->link(
											$name,
											array(
												'controller' => 'player_stats',
												'action' => 'view',
												'server' => Configure::read('server_id'),
												$player[15])
										);
									} else {
										echo $this->Html->link(
											$name,
											array(
												'controller' => 'player_stats',
												'action' => 'view',
												'server' => Configure::read('server_id'),
												$player[15]),
											array(
												'rel' => 'tooltip',
												'data-original-title' => $player[1],
												'style' => 'cursor:pointer',
											));
									};
								?></td>
								<td><?php
									//Rank Image
									echo $this->Html->image('ranks/' . Configure::read('rank.' . $player[16] . '.2'), array(
										'rel' => 'tooltip',
										'data-original-title' => Configure::read('rank.' . $player[16] . '.0'),
										'style' => 'cursor:pointer; width:20px; height:20px;',
									));
									echo '&nbsp;';
									//Flag Image
									echo $this->Html->image('flags/' . $player[18][0] . '.gif', array(
										'rel' => 'tooltip',
										'data-original-title' => $player[18][1],
										'style' => 'cursor:pointer',
									));

								?></td>
								<td style="text-align:right; padding-right:15px;
								<?php
									if ($detailedStats) {
										echo 'font-weight:bold; ';
									}
								?>">
									<?php
									//Skill
									echo $this->Number->format($player[2], array(
									'places' => 0,
									'before' => null,
									'thousands' => '.'
								)); ?></td>
								<?php if ($detailedStats[$i]): ?>
								<td><?php
									//Kills
									echo $this->Number->format($player[4], array(
									'places' => 0,
									'before' => null,
									'thousands' => '.'
								)); ?></td>
								<td><?php
									//Deaths
									echo $this->Number->format($player[5], array(
									'places' => 0,
									'before' => null,
									'thousands' => '.'
								)); ?></td>
								<td><?php
									//Rounds
									echo $this->Number->format($player[8], array(
									'places' => 0,
									'before' => null,
									'thousands' => '.'
								)); ?></td>
								<td><?php
									//Win Streak
									echo $player[7];
									?>
								</td>
								<td>
									<?php
									// Lose Streak
									echo $player[11];
									?>
								</td>
								<?php endif; ?>
							</tr>
								<?php endforeach; ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>
		<?php
		$n++;
		$i++;
		endforeach;
	endif;
	?>
</div>
<!-- /Leagues End -->

<div class="row">
	<div class="span12">
		<button type="button" class="btn" data-toggle="collapse" data-target="#awards">
			<i class="icon-trophy"></i> Awards</button>

		<div id="awards" class="collapse">
			<br />
			<?php
			echo $this->element('league_awards', array(
					'leaguenr' => 0)
			);
			?>
			<div class="pull-right">
				<?php echo $this->Html->link('<i class="icon-trophy"></i> ' . __('All awards'), array(
					'plugin' => null,
					'admin' => false,
					'controller' => 'pages',
					'action' => 'display',
					'server' => Configure::read('server_id'),
					'awards'
				), array(
					'title' => __('View all awards on one page'),
					'class' => 'btn btn-success',
					'escape' => false
				)) ?>
			</div>
		</div>
	</div>
</div>

