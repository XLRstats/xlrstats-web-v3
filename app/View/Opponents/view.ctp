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
 * @package       app.View.Opponents
 * @since         XLRstats v3.0
 * @version       0.1
 */

//pr($opponents);
?>
<script type='text/javascript'>
    $(document).ready(function() {
        $('[rel=tooltip]').tooltip();
    });
</script>

<div class="row">
	<div class="span9">
		<div class="playerstats">
			<table class="table table-hover" id="opponents">
			<thead>
			<?php
			echo $this->Html->tableHeaders(array(
					__('Opponent'),
					__('Confrontations'),
					__('Win Rate'),
					__('Opponents Skill'),
					__('Win Probability'),
					//__('Opponents History'),
					//__('Opponents Experience'),
				)
			);
			?>
			</thead>
			<tbody>
			<?php
			foreach ($opponents as $k => $v) {

				/* Opponent name and link to stats page ------------------------------------------------------------------*/
				$nameLink = $this->Html->link($v['Target']['Player']['name'],
					array('controller' => 'player_stats', 'action' => 'view', 'server' => Configure::read('server_id'), $v['Target']['id']), array(
						'rel' => 'tooltip',
						'data-original-title' => __('Click to go to the stats of this component.'),
					));
				/* Link to comparison page -------------------------------------------------------------------------------*/
				$compareLink = $this->Html->link('<span class="comparison-icon"><i class="icon-bar-chart icon-large"></i></span>',
					array('controller' => 'opponents', 'action' => 'compare', 'server' => Configure::read('server_id'), $v['Killer']['id'], $v['Target']['id']), array(
						'escape' => false,
						'rel' => 'tooltip',
						'data-original-title' => __('Click to see more comparison details'),
					));

				/* Flag image and tooltip --------------------------------------------------------------------------------*/
				$flag = $this->Html->image('flags/' . $v['Target']['flag'][0] . '.gif', array(
					'rel' => 'tooltip',
					'data-original-title' => $v['Target']['flag'][1],
					'style' => 'cursor:pointer; margin:2px 5px 0px; 0px;',
				));

				/* Rank image --------------------------------------------------------------------------------------------*/
				$rank = $this->Html->image('ranks/' . Configure::read('rank.' . $v['Target']['rank'] . '.2'), array(
					'rel' => 'tooltip',
					'data-original-title' => __(Configure::read('rank.' . $v['Target']['rank'] . '.0')),
					'style' => 'cursor:pointer; width:20px; height:20px;',
				));

				/* Level as PieChart -------------------------------------------------------------------------------------*/
				$level = $this->Html->tag('span', $this->XlrFunctions->levelSparklinePieChart($v['Target']['level']['level'],
						array(
							'scripts' => true
						)),
					array(
						'rel' => 'tooltip',
						'data-original-title' => __($v['Target']['level']['name']),
						'style' => 'cursor:pointer; position:relative; top:3px; left:5px;',
					)
				);

				/* League and link to the league -------------------------------------------------------------------------*/
				$league = '';
				if ($v['Target']['Player']['connections'] < Configure::read('options.min_connections') || $v['Target']['kills'] < Configure::read('options.min_kills')) {
					$league = $this->Html->tag('span', __('Not Qualified'), array('class' => 'label'));
				} else {
					$leagueName = __(Configure::read('league.' . $v['Target']['skilleague'] . '.3'));
					$leagueColor = __(Configure::read('league.' . $v['Target']['skilleague'] . '.5'));
					$league = $this->Html->link('<span class="label" style="background-color:' . $leagueColor . '">' . $leagueName . '</span>',
						array(
							'controller' => 'leagues',
							'action' => 'view',
							'server' => Configure::read('server_id'),
							$v['Target']['skilleague']
						),
						array(
							'escape' => false
						));
				};

				/* Performance -------------------------------------------------------------------------------------------*/
				if ($v['Opponent']['retals'] != 0 ) {
					$ratio = $v['Opponent']['kills'] / $v['0']['confrontations'];
					$ratioPercentage = $this->Number->toPercentage($ratio * 100, 0);
					if ($ratio >= 0.5 ) {
						$icon = '<p class="text-success"><i class="icon-thumbs-up"></i><strong>';
					} else {
						$icon = '<p class="text-error"><i class="icon-thumbs-down"></i><strong>';
					}
					$performance = $icon . ' ' . $ratioPercentage . '</strong></p>';

				} elseif ($v['Opponent']['kills'] == 0) {
					$performance = '<i class="icon-thumbs-down"></i>';
				} elseif ($v['Opponent']['retals'] == 0) {
					$performance = '<i class="icon-thumbs-up"></i>';
				} else {
					$performance = '<i class="icon-minus"></i>';
				}

				/* Win Probability and Pure Skill Gain in kill -----------------------------------------------------------*/
				if ($v['0']['winprobability'] >= 0.5) {
					$winProbability = '<p class="text-success"><i class="icon-thumbs-up"></i> <strong>' . $this->Number->toPercentage($v['0']['winprobability'] * 100) . '</strong></p>';
				} else {
					$winProbability = '<p class="text-error"><i class="icon-thumbs-down"></i> <strong>' . $this->Number->toPercentage($v['0']['winprobability'] * 100) . '</strong></p>';
				}
				$skillGain = $this->NUmber->precision($v['0']['skillgain'], 2);

				/* Skill -------------------------------------------------------------------------------------------------*/
				if ($v['Target']['skill'] >= $v['Killer']['skill']) {
					$skillCompareIcon = '<p class="text-error"><i class="icon-hand-up"></i>&nbsp;';
				} else {
					$skillCompareIcon = '<p class="text-success"><i class="icon-hand-down"></i>&nbsp;';
				}
				if ($v['Target']['Player']['connections'] < Configure::read('options.min_connections') || $v['Target']['kills'] < Configure::read('options.min_kills')) {
					$before = '<small class="muted"> ' . $skillCompareIcon;
					$after = '</small>';
				} else {
					$before = '<strong>' . $skillCompareIcon;
					$after = '</strong>';
				}
				$skill = $this->Number->format( $v['Target']['skill'], array(
					'places' => 0,
					'before' => $before,
					'after' => $after,
					'escape' => false,
					'thousands' => '.'
				)) . '</p>';

				/* Kills -------------------------------------------------------------------------------------------------*/
				$killDiff = $v['Target']['kills'] - $v['Killer']['kills'];
				if ($killDiff <= 0) {
					$killDiff = '<i class="icon-hand-down"></i>' . abs($killDiff) . __(' less kills total');
				} else {
					$killDiff = '<i class="icon-hand-up"></i>' . abs($killDiff) . __(' more kills total');
				}

				/* Deaths -----------------------------------------------------------------------------------------------*/
				$deathDiff = $v['Target']['deaths'] - $v['Killer']['deaths'];
				if ($deathDiff <= 0) {
					$deathDiff = '<i class="icon-hand-down"></i>' . abs($deathDiff) . __(' less deaths total');
				} else {
					$deathDiff = '<i class="icon-hand-up"></i>' . abs($deathDiff) . __(' more deaths total');
				}

				/* Connections -------------------------------------------------------------------------------------------*/
				$connectionDiff = $v['Target']['Player']['connections'] - $v['Killer']['Player']['connections'];
				if ($connectionDiff <= 0) {
					$connectionDiff = '<i class="icon-hand-down"></i>' . abs($connectionDiff) . __(' less connections total');
				} else {
					$connectionDiff = '<i class="icon-hand-up"></i>' . abs($connectionDiff) . __(' more connections total');
				}

				/* Rounds ------------------------------------------------------------------------------------------------*/
				$roundDiff = $v['Target']['rounds'] - $v['Killer']['rounds'];
				if ($roundDiff <= 0) {
					$roundDiff = '<i class="icon-hand-down"></i>' . abs($roundDiff) . __(' less rounds total');
				} else {
					$roundDiff = '<i class="icon-hand-up"></i>' . abs($roundDiff) . __(' more rounds total');
				}

				/* Defining cell contents --------------------------------------------------------------------------------*/
				$opponentCell = $compareLink . ' - ' . $nameLink . '<br />' . $flag . $rank . $level;
				$totalConfrontationsCell = '<strong>' . $v['0']['confrontations'] . '</strong><br /><small>kills: ' . $v['Opponent']['kills'] . ', deaths: ' . $v['Opponent']['retals'] . '</small>';
				//$performanceCell = $performance . '<br />' . $winProbability;
				$probabilityCell = $winProbability . '<small>+' . $skillGain . ' skill <sup class="muted">(1)</sup></small>';
				$opponentSkillCell = $skill . $league;
				//$opponentHistoryCell = $killDiff . '<br />' . $deathDiff;
				//$opponentExperienceCell = $connectionDiff . '<br />' . $roundDiff;

				/* Building the cells ------------------------------------------------------------------------------------*/
				echo $this->Html->tableCells(
					array(
						array(
							$opponentCell,
							$totalConfrontationsCell,
							$performance,
							$opponentSkillCell,
							$probabilityCell,
							//$opponentHistoryCell,
							//$opponentExperienceCell,
						)
					)
				);
			}
				?>
				</tbody>
				<tfoot>
				<tr>
					<th colspan="7">
						<i class="icon-info-sign" style="margin-right: 5px;"></i>
						<small><?php echo __('Click opponent to see the detailed stats.') ?><br /><?php echo __('Click <i class="icon-bar-chart"></i> to see more comparison details.') ?></small><br />
						<small><sup>(1)</sup> <?php echo __('The calculated skill that you might gain by winning the next confrontation is approximate. A kill bonus or weapon modifier may very well influence the exact amount.') ?></small>
					</th>
				</tr>
				</tfoot>
			</table>
		</div>
	</div>
	<div class="span2">
		<?php
		foreach ($analytics as $k => $v) {
			?>
            <div class="span2">
                <table class="table table-bordered">
                    <tr><td style="text-align: center"><strong><?php echo __($v[3]) ?></strong></td></tr>
                    <tr><td style="text-align: center"><?php echo $this->Html->image('medals/silhouettes/' . $v[5], array(
						'width' => '50px',
						'class' => 'center'
					)) ?></td></tr>
                    <tr><td style="text-align: center"><?php
						echo $this->Html->link($v[0], array(
							'controller' => 'player_stats',
							'action' => 'view',
							'server' => Configure::read('server_id'),
							$v[1],
						))
						?><br /> <small><?php echo __($v[4]) ?></small></td></tr>
                </table>
            </div>
		<?php
		} ?>
	</div>
</div>