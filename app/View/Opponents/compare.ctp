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

$opponents = $opponents['0'];

//pr($opponents);

/* Opponent name and link to stats page ------------------------------------------------------------------*/
$nameLinkKiller = $this->Html->link($opponents['Killer']['Player']['name'],
	array('controller' => 'player_stats', 'action' => 'view', 'server' => Configure::read('server_id'), $opponents['Killer']['id']));
$nameLinkTarget = $this->Html->link($opponents['Target']['Player']['name'],
	array('controller' => 'player_stats', 'action' => 'view', 'server' => Configure::read('server_id'), $opponents['Target']['id']));

/* Flag image and tooltip --------------------------------------------------------------------------------*/
$flagKiller = $this->Html->image('flags/' . $opponents['Killer']['flag'][0] . '.gif', array(
	'rel' => 'tooltip',
	'data-original-title' => $opponents['Killer']['flag'][1],
	'style' => 'cursor:pointer; margin:2px 5px 0px; 0px;',
));
$flagTarget = $this->Html->image('flags/' . $opponents['Target']['flag'][0] . '.gif', array(
	'rel' => 'tooltip',
	'data-original-title' => $opponents['Target']['flag'][1],
	'style' => 'cursor:pointer; margin:2px 5px 0px; 0px;',
));

/* Rank image --------------------------------------------------------------------------------------------*/
$rankKiller = $this->Html->image('ranks/' . Configure::read('rank.' . $opponents['Killer']['rank'] . '.2'), array(
	'rel' => 'tooltip',
	'data-original-title' => __(Configure::read('rank.' . $opponents['Killer']['rank'] . '.0')),
	'style' => 'cursor:pointer; width:20px; height:20px;',
));
$rankTarget = $this->Html->image('ranks/' . Configure::read('rank.' . $opponents['Target']['rank'] . '.2'), array(
	'rel' => 'tooltip',
	'data-original-title' => __(Configure::read('rank.' . $opponents['Target']['rank'] . '.0')),
	'style' => 'cursor:pointer; width:20px; height:20px;',
));

/* Level as PieChart -------------------------------------------------------------------------------------*/
$levelKiller = $this->Html->tag('span', $this->XlrFunctions->levelSparklinePieChart($opponents['Killer']['level']['level'],
		array(
			'scripts' => true
		)),
	array(
		'rel' => 'tooltip',
		'data-original-title' => __($opponents['Killer']['level']['name']),
		'style' => 'cursor:pointer; position:relative; top:3px; left:5px;',
	)
);
$levelTarget = $this->Html->tag('span', $this->XlrFunctions->levelSparklinePieChart($opponents['Target']['level']['level'],
		array(
			'scripts' => true
		)),
	array(
		'rel' => 'tooltip',
		'data-original-title' => __($opponents['Target']['level']['name']),
		'style' => 'cursor:pointer; position:relative; top:3px; left:5px;',
	)
);

/* League and link to the league -------------------------------------------------------------------------*/
$leagueKiller = '';
if ($opponents['Killer']['Player']['connections'] < Configure::read('options.min_connections') || $opponents['Killer']['kills'] < Configure::read('options.min_kills')) {
	$leagueKiller = $this->Html->tag('span', __('Not Qualified'), array('class' => 'label'));
} else {
	$leagueNameKiller = __(Configure::read('league.' . $opponents['Killer']['skilleague'] . '.3'));
	$leagueColorKiller = __(Configure::read('league.' . $opponents['Killer']['skilleague'] . '.5'));
	$leagueKiller = $this->Html->link('<span class="label" style="background-color:' . $leagueColorKiller . '">' . $leagueNameKiller . '</span>',
		array(
			'controller' => 'leagues',
			'action' => 'view',
			'server' => Configure::read('server_id'),
			$opponents['Killer']['skilleague']
		),
		array(
			'escape' => false
		));
};
$leagueTarget = '';
if ($opponents['Target']['Player']['connections'] < Configure::read('options.min_connections') || $opponents['Target']['kills'] < Configure::read('options.min_kills')) {
	$leagueTarget = $this->Html->tag('span', __('Not Qualified'), array('class' => 'label'));
} else {
	$leagueNameTarget = __(Configure::read('league.' . $opponents['Target']['skilleague'] . '.3'));
	$leagueColorTarget = __(Configure::read('league.' . $opponents['Target']['skilleague'] . '.5'));
	$leagueTarget = $this->Html->link('<span class="label" style="background-color:' . $leagueColorTarget . '">' . $leagueNameTarget . '</span>',
		array(
			'controller' => 'leagues',
			'action' => 'view',
			'server' => Configure::read('server_id'),
			$opponents['Target']['skilleague']
		),
		array(
			'escape' => false
		));
};

/* Performance -------------------------------------------------------------------------------------------*/
if ($opponents['Opponent']['retals'] != 0 ) {
	$ratioKiller = $opponents['Opponent']['kills'] / $opponents['0']['confrontations'];
	$ratioTarget = 1 - $ratioKiller;

	$ratioPercentageKiller = $this->Number->toPercentage($ratioKiller * 100, 0);
	$ratioPercentageTarget = $this->Number->toPercentage($ratioTarget * 100, 0);

	if ($ratioKiller >= 0.5 ) {
		$iconKiller = '<p class="text-success"><i class="icon-thumbs-up"></i><strong>';
		$iconTarget = '<p class="text-error"><i class="icon-thumbs-down"></i><strong>';
	} else {
		$iconKiller = '<p class="text-error"><i class="icon-thumbs-down"></i><strong>';
		$iconTarget = '<p class="text-success"><i class="icon-thumbs-up"></i><strong>';
	}

	$performanceKiller = $iconKiller . ' ' . $ratioPercentageKiller . '</strong></p>';
	$performanceTarget = $iconTarget . ' ' . $ratioPercentageTarget . '</strong></p>';
} elseif ($opponents['Opponent']['kills'] == 0) {
	$performanceKiller = '<i class="icon-thumbs-down"></i>';
	$performanceTarget = '<i class="icon-thumbs-down"></i>';
} elseif ($opponents['Opponent']['retals'] == 0) {
	$performanceKiller = '<i class="icon-thumbs-down"></i>';
	$performanceTarget = '<i class="icon-thumbs-down"></i>';
} else {
	$performanceKiller = '<i class="icon-minus"></i>';
	$performanceTarget = '<i class="icon-minus"></i>';
}

/* Win Probability and Pure Skill Gain in kill -----------------------------------------------------------*/
if ($opponents['Killer']['winprobability'] >= 0.5) {
	$winProbabilityKiller = '<p class="text-success"><i class="icon-thumbs-up"></i> <strong>' . $this->Number->toPercentage($opponents['Killer']['winprobability'] * 100) . '</strong></p>';
} else {
	$winProbabilityKiller = '<p class="text-error"><i class="icon-thumbs-down"></i> <strong>' . $this->Number->toPercentage($opponents['Killer']['winprobability'] * 100) . '</strong></p>';
}
$skillGainKiller = $this->NUmber->precision($opponents['Killer']['skillgain'], 2);

if ($opponents['Target']['winprobability'] >= 0.5) {
	$winProbabilityTarget = '<p class="text-success"><i class="icon-thumbs-up"></i> <strong>' . $this->Number->toPercentage($opponents['Target']['winprobability'] * 100) . '</strong></p>';
} else {
	$winProbabilityTarget = '<p class="text-error"><i class="icon-thumbs-down"></i> <strong>' . $this->Number->toPercentage($opponents['Target']['winprobability'] * 100) . '</strong></p>';
}
$skillGainTarget = $this->NUmber->precision($opponents['Target']['skillgain'], 2);


/* Skill -------------------------------------------------------------------------------------------------*/
if ($opponents['Killer']['skill'] >= $opponents['Target']['skill']) {
	$skillCompareIconKiller = '<p class="text-success"><i class="icon-hand-up"></i> <strong>';
	$skillCompareIconTarget = '<p class="text-error"><i class="icon-hand-down"></i> <strong>';
} else {
	$skillCompareIconKiller = '<p class="text-error"><i class="icon-hand-down"></i> <strong>';
	$skillCompareIconTarget = '<p class="text-success"><i class="icon-hand-up"></i> <strong>';
}
$skillKiller = $this->Number->format( $opponents['Killer']['skill'], array(
	'places' => 0,
	'before' => null,
	'thousands' => '.'
)) . '</strong></p>';
$skillTarget = $this->Number->format( $opponents['Target']['skill'], array(
	'places' => 0,
	'before' => null,
	'thousands' => '.'
)) . '</strong></p>';

/* Ratio -------------------------------------------------------------------------------------------------*/
if ($opponents['Killer']['ratio'] >= $opponents['Target']['ratio']) {
	$ratioCompareIconKiller = '<p class="text-success"><i class="icon-hand-up"></i> <strong>';
	$ratioCompareIconTarget = '<p class="text-error"><i class="icon-hand-down"></i> <strong>';
} else {
	$ratioCompareIconKiller = '<p class="text-error"><i class="icon-hand-down"></i> <strong>';
	$ratioCompareIconTarget = '<p class="text-success"><i class="icon-hand-up"></i> <strong>';
}
$ratioKiller = $this->Number->format( $opponents['Killer']['ratio'], array(
	'places' => 2,
	'before' => null,
	'thousands' => '.'
)) . '</strong></p>';
$ratioTarget = $this->Number->format( $opponents['Target']['ratio'], array(
	'places' => 2,
	'before' => null,
	'thousands' => '.'
)) . '</strong></p>';

/* Kills -------------------------------------------------------------------------------------------------*/
$killDiff = $opponents['Target']['kills'] - $opponents['Killer']['kills'];
if ($killDiff <= 0) {
	$killDiffTarget = '<small>(<i class="icon-hand-down"></i>' . abs($killDiff) . __(' less kills') . ')</small>';
	$killDiffKiller = '<small>(<i class="icon-hand-up"></i>' . abs($killDiff) . __(' more kills') . ')</small>';
} else {
	$killDiffTarget = '<small>(<i class="icon-hand-up"></i>' . abs($killDiff) . __(' more kills') . ')</small>';
	$killDiffKiller = '<small>(<i class="icon-hand-down"></i>' . abs($killDiff) . __(' less kills') . ')</small>';
}

/* Deaths -----------------------------------------------------------------------------------------------*/
$deathDiff = $opponents['Target']['deaths'] - $opponents['Killer']['deaths'];
if ($deathDiff <= 0) {
	$deathDiffTarget = '<small>(<i class="icon-hand-down"></i>' . abs($deathDiff) . __(' less deaths') . ')</small>';
	$deathDiffKiller = '<small>(<i class="icon-hand-up"></i>' . abs($deathDiff) . __(' more deaths') . ')</small>';
} else {
	$deathDiffTarget = '<small>(<i class="icon-hand-up"></i>' . abs($deathDiff) . __(' more deaths') . ')</small>';
	$deathDiffKiller = '<small>(<i class="icon-hand-down"></i>' . abs($deathDiff) . __(' less deaths') . ')</small>';
}

/* Teamkills --------------------------------------------------------------------------------------------*/
$teamkillDiff = $opponents['Target']['teamkills'] - $opponents['Killer']['teamkills'];
if ($teamkillDiff <= 0) {
	$teamkillDiffTarget = '<small>(<i class="icon-hand-down"></i>' . abs($teamkillDiff) . __(' less teamkills') . ')</small>';
	$teamkillDiffKiller = '<small>(<i class="icon-hand-up"></i>' . abs($teamkillDiff) . __(' more teamkills') . ')</small>';
} else {
	$teamkillDiffTarget = '<small>(<i class="icon-hand-up"></i>' . abs($teamkillDiff) . __(' more teamkills') . ')</small>';
	$teamkillDiffKiller = '<small>(<i class="icon-hand-down"></i>' . abs($teamkillDiff) . __(' less teamkills') . ')</small>';
}

/* Suicides ---------------------------------------------------------------------------------------------*/
$suicideDiff = $opponents['Target']['suicides'] - $opponents['Killer']['suicides'];
if ($suicideDiff <= 0) {
	$suicideDiffTarget = '<small>(<i class="icon-hand-down"></i>' . abs($suicideDiff) . __(' less suicides') . ')</small>';
	$suicideDiffKiller = '<small>(<i class="icon-hand-up"></i>' . abs($suicideDiff) . __(' more suicides') . ')</small>';
} else {
	$suicideDiffTarget = '<small>(<i class="icon-hand-up"></i>' . abs($suicideDiff) . __(' more suicides') . ')</small>';
	$suicideDiffKiller = '<small>(<i class="icon-hand-down"></i>' . abs($suicideDiff) . __(' less suicides') . ')</small>';
}

/* Winstreaks -------------------------------------------------------------------------------------------*/
$winstreakDiff = $opponents['Target']['winstreak'] - $opponents['Killer']['winstreak'];
if ($winstreakDiff <= 0) {
	$winstreakDiffTarget = '<small>(<i class="icon-hand-down"></i>' . abs($winstreakDiff) . __(' less winstreaks') . ')</small>';
	$winstreakDiffKiller = '<small>(<i class="icon-hand-up"></i>' . abs($winstreakDiff) . __(' more winstreaks') . ')</small>';
} else {
	$winstreakDiffTarget = '<small>(<i class="icon-hand-up"></i>' . abs($winstreakDiff) . __(' more winstreaks') . ')</small>';
	$winstreakDiffKiller = '<small>(<i class="icon-hand-down"></i>' . abs($winstreakDiff) . __(' less winstreaks') . ')</small>';
}

/* Losestreaks ------------------------------------------------------------------------------------------*/
$losestreakDiff = $opponents['Target']['losestreak'] - $opponents['Killer']['losestreak'];
if ($losestreakDiff <= 0) {
	$losestreakDiffTarget = '<small>(<i class="icon-hand-down"></i>' . abs($losestreakDiff) . __(' less losestreaks') . ')</small>';
	$losestreakDiffKiller = '<small>(<i class="icon-hand-up"></i>' . abs($losestreakDiff) . __(' more losestreaks') . ')</small>';
} else {
	$losestreakDiffTarget = '<small>(<i class="icon-hand-up"></i>' . abs($losestreakDiff) . __(' more losestreaks') . ')</small>';
	$losestreakDiffKiller = '<small>(<i class="icon-hand-down"></i>' . abs($losestreakDiff) . __(' less losestreaks') . ')</small>';
}

/* Assists ----------------------------------------------------------------------------------------------*/
$assistDiff = $opponents['Target']['assists'] - $opponents['Killer']['assists'];
if ($assistDiff <= 0) {
	$assistDiffTarget = '<small>(<i class="icon-hand-down"></i>' . abs($assistDiff) . __(' less assists') . ')</small>';
	$assistDiffKiller = '<small>(<i class="icon-hand-up"></i>' . abs($assistDiff) . __(' more assists') . ')</small>';
} else {
	$assistDiffTarget = '<small>(<i class="icon-hand-up"></i>' . abs($assistDiff) . __(' more assists') . ')</small>';
	$assistDiffKiller = '<small>(<i class="icon-hand-down"></i>' . abs($assistDiff) . __(' less assists') . ')</small>';
}

/* Assiststkill -----------------------------------------------------------------------------------------*/
$assistskillDiff = $opponents['Target']['assistskill'] - $opponents['Killer']['assistskill'];
if ($assistskillDiff <= 0) {
	$assistskillDiffTarget = '<small>(<i class="icon-hand-down"></i>' . abs($assistskillDiff) . __(' less assistskills') . ')</small>';
	$assistskillDiffKiller = '<small>(<i class="icon-hand-up"></i>' . abs($assistskillDiff) . __(' more assistskills') . ')</small>';
} else {
	$assistskillDiffTarget = '<small>(<i class="icon-hand-up"></i>' . abs($assistskillDiff) . __(' more assistskills') . ')</small>';
	$assistskillDiffKiller = '<small>(<i class="icon-hand-down"></i>' . abs($assistskillDiff) . __(' less assistskills') . ')</small>';
}

/* Connections -------------------------------------------------------------------------------------------*/
$connectionDiff = $opponents['Target']['Player']['connections'] - $opponents['Killer']['Player']['connections'];
if ($connectionDiff <= 0) {
	$connectionDiffTarget = '<small>(<i class="icon-hand-down"></i>' . abs($connectionDiff) . __(' less connections') . ')</small>';
	$connectionDiffKiller = '<small>(<i class="icon-hand-up"></i>' . abs($connectionDiff) . __(' more connections') . ')</small>';
} else {
	$connectionDiffTarget = '<small>(<i class="icon-hand-up"></i>' . abs($connectionDiff) . __(' more connections') . ')</small>';
	$connectionDiffKiller = '<small>(<i class="icon-hand-down"></i>' . abs($connectionDiff) . __(' less connections') . ')</small>';
}

/* Rounds ------------------------------------------------------------------------------------------------*/
$roundDiff = $opponents['Target']['rounds'] - $opponents['Killer']['rounds'];
if ($roundDiff <= 0) {
	$roundDiffTarget = '<small>(<i class="icon-hand-down"></i>' . abs($roundDiff) . __(' less rounds') . ')</small>';
	$roundDiffKiller = '<small>(<i class="icon-hand-up"></i>' . abs($roundDiff) . __(' more rounds') . ')</small>';
} else {
	$roundDiffTarget = '<small>(<i class="icon-hand-up"></i>' . abs($roundDiff) . __(' more rounds') . ')</small>';
	$roundDiffKiller = '<small>(<i class="icon-hand-down"></i>' . abs($roundDiff) . __(' less rounds') . ')</small>';
}



?>
<script type='text/javascript'>
    $(document).ready(function() {
        $('[rel=tooltip]').tooltip();
        $('[rel=popover]').popover({
            placement: 'left',
            trigger: 'hover'
        });
    });
</script>

<div class="row">
	<div class="span12">
		<?php echo '<h1>' . __('Comparison chart for ') . $nameLinkKiller . __(' versus ') . $nameLinkTarget . '</h1>'; ?>
    </div>
</div>

<div class="row">
	<div class="span9">
		<table class="table table-hover table-bordered-v2">
			<thead>
			<?php
			echo $this->Html->tableHeaders(array(
					__(''),
					$nameLinkKiller . ' ' . $flagKiller . ' ' . $levelKiller,
					$nameLinkTarget . ' ' . $flagTarget . ' ' . $levelTarget,
					)
			);
			?>
            </thead>
            <tbody>
			<?php
			echo '<tr><td colspan="3"><h5>' . __('Current Facts for ') . $opponents['0']['confrontations'] . ' confrontations.</h5></td></tr>';
			echo $this->Html->tableCells( array( array(__('Rank'), $rankKiller, $rankTarget)));
			echo $this->Html->tableCells( array( array(__('Skill'), $skillCompareIconKiller . $skillKiller, $skillCompareIconTarget . $skillTarget)));
			echo $this->Html->tableCells( array( array(__('Ratio'), $ratioCompareIconKiller . $ratioKiller, $ratioCompareIconTarget . $ratioTarget)));
			echo $this->Html->tableCells( array( array(__('Competing in'), $leagueKiller, $leagueTarget)));
			echo $this->Html->tableCells( array( array(__('Win Rate'), $performanceKiller, $performanceTarget)));
			echo '<tr><td colspan="3"><h5>' . __('Your Chances') . '</h5></td></tr>';
			echo $this->Html->tableCells( array( array(__('Probability to win next confrontation'), $winProbabilityKiller, $winProbabilityTarget)));
			echo $this->Html->tableCells( array( array(__('Skill gain when winning next confrontation'), '+' . $skillGainKiller, '+' . $skillGainTarget)));
			echo $this->Html->tableCells( array( array(__('Skill loss when losing next confrontation'), '-' . $skillGainTarget, '-' . $skillGainKiller)));
			echo '<tr><td colspan="3"><h5>' . __('Teamplay') . '</h5></td></tr>';
			echo $this->Html->tableCells( array( array(__('TeamKills'), $opponents['Killer']['teamkills'] . ' ' . $teamkillDiffKiller, $opponents['Target']['teamkills'] . ' ' . $teamkillDiffTarget)));
			echo $this->Html->tableCells( array( array(__('Assists'), $opponents['Killer']['assists'] . ' ' . $assistDiffKiller, $opponents['Target']['assists'] . ' ' . $assistDiffTarget)));
			echo $this->Html->tableCells( array( array(__('Assist skill'), $opponents['Killer']['assistskill'] . ' ' . $assistskillDiffKiller, $opponents['Target']['assistskill'] . ' ' . $assistskillDiffTarget)));
			echo '<tr><td colspan="3"><h5>' . __('History') . '</h5></td></tr>';
			echo $this->Html->tableCells( array( array(__('Kills'), $opponents['Killer']['kills'] . ' ' . $killDiffKiller, $opponents['Target']['kills'] . ' ' . $killDiffTarget)));
			echo $this->Html->tableCells( array( array(__('Deaths'), $opponents['Killer']['deaths'] . ' ' . $deathDiffKiller, $opponents['Target']['deaths'] . ' ' . $deathDiffTarget)));
			echo $this->Html->tableCells( array( array(__('Suicides'), $opponents['Killer']['suicides'] . ' ' . $suicideDiffKiller, $opponents['Target']['suicides'] . ' ' . $suicideDiffTarget)));
			echo $this->Html->tableCells( array( array(__('Winstreak'), $opponents['Killer']['winstreak'] . ' ' . $winstreakDiffKiller, $opponents['Target']['winstreak'] . ' ' . $winstreakDiffTarget)));
			echo $this->Html->tableCells( array( array(__('Losestreak'), $opponents['Killer']['losestreak'] . ' ' . $losestreakDiffKiller, $opponents['Target']['losestreak'] . ' ' . $losestreakDiffTarget)));
			echo '<tr><td colspan="3"><h5>' . __('Experience') . '</h5></td></tr>';
			echo $this->Html->tableCells( array( array(__('Connections'), $opponents['Killer']['Player']['connections'] . ' ' . $connectionDiffKiller, $opponents['Target']['Player']['connections'] . ' ' . $connectionDiffTarget)));
			echo $this->Html->tableCells( array( array(__('Rounds'), $opponents['Killer']['rounds'] . ' ' . $roundDiffKiller, $opponents['Target']['rounds'] . ' ' . $roundDiffTarget)));
			?>
            </tbody>
		</table>
	</div>
	<div class="span3 pull-right">
		<?php
		echo $this->element('opponents_shortlist', array('playerID' => $opponents['Killer']['id']));
		?>
	</div>
</div>