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
 * Set a default value for the variable '$detailedStats' we can pass into
 * this element when calling it.
 */
if (!isset($detailedStats)) {
	$detailedStats = true;
}

/**
 * Setting the length of the player names for truncation so layout is not messed up by long player names
 */
if ($detailedStats) {
	$nameTruncation = 33;
} else {
	$nameTruncation = 15;
}

$playersArray = $this->requestAction('leagues/leaguesJson/' . $leagueNumber);
$players = $playersArray[0];
//pr($players);
$n = 1;
?>

<?php
if ($playersArray[1] == 0) {
	echo '<div style="margin: 15px">...This League is empty, fill spot with something else?</div>';
	return;
}
?>

<table class="table table-hover">
	<thead>
		<tr>
			<th style="padding-left:15px;"><?php echo __('#'); ?></th>
			<th><?php echo __('Ctr'); ?></th>
			<th><?php echo __('Rnk'); ?></th>
			<th><?php echo __('Name'); ?></th>
            <th style="text-align:right; padding-right:15px;"><?php echo __('Skill'); ?></th>
			<?php if ($detailedStats): ?>
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
			<td>
				<?php echo $this->Html->image('flags/' . $player['League']['flag'][0] . '.gif', array(
				'rel' => 'tooltip',
				'data-original-title' => $player['League']['flag'][1],
				'style' => 'cursor:pointer',
				)); ?>
			</td>
			<td>
				<?php echo $this->Html->image('ranks/' . Configure::read('rank.' . $player['League']['rank'] . '.2'), array(
				'rel' => 'tooltip',
				'data-original-title' => Configure::read('rank.' . $player['League']['rank'] . '.0'),
				'style' => 'cursor:pointer; width:20px; height:20px;',
				)); ?>
			</td>
			<td><?php
				$name = $this->Text->truncate($player['Player']['name'],
					$nameTruncation,
					array(
						'ending'	=> '...',
						'exact'		=> true,
					));
				if ($name == $player['Player']['name']) {
					echo $this->Html->link(
						$name,
						array(
							'controller' => 'player_stats',
							'action' => 'view',
							'server' => Configure::read('server_id'),
							$player['League']['id'])
					);
				} else {
					echo $this->Html->link(
						$name,
						array(
							'controller' => 'player_stats',
							'action' => 'view',
							'server' => Configure::read('server_id'),
							$player['League']['id']),
						array(
							'rel' => 'tooltip',
							'data-original-title' => $player['Player']['name'],
							'style' => 'cursor:pointer',
						));
				};
			?></td>
            <td style="text-align:right; padding-right:15px;
            <?php
			if ($detailedStats) {
				echo 'font-weight:bold;';
			} ?>"><?php echo $this->Number->format($player['League']['skill'], array(
				'places' => 0,
				'before' => null,
				'thousands' => '.'
			)); ?></td>
			<?php if ($detailedStats): ?>
				<td><?php echo $this->Number->format($player['League']['kills'], array(
					'places' => 0,
					'before' => null,
					'thousands' => '.'
				)); ?></td>
				<td><?php echo $this->Number->format($player['League']['deaths'], array(
					'places' => 0,
					'before' => null,
					'thousands' => '.'
				)); ?></td>
				<td><?php echo $this->Number->format($player['League']['rounds'], array(
					'places' => 0,
					'before' => null,
					'thousands' => '.'
				)); ?></td>
                <td><?php echo $player['League']['winstreak']; ?></td>
                <td><?php echo $player['League']['losestreak']; ?></td>
			<?php endif; ?>
		</tr>
		<?php endforeach; ?>
	</tbody>
</table>