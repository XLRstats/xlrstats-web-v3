<?php
/**
 * XLRstats : Real Time Player Stats (http://www.xlrstats.com)
 * (CC) BY-NC-SA $trophyValue5-2013, Mark Weirath, Özgür Uysal
 *
 * Licensed under the Creative Commons BY-NC-SA 3.0 License
 * Redistributions of files must retain the above copyright notice.
 *
 * @link          http://www.xlrstats.com
 * @license       Creative Commons BY-NC-SA 3.0 License (http://creativecommons.org/licenses/by-nc-sa/3.0/)
 * @package       app.View.Achievements
 * @since         XLRstats v3.0
 * @version       0.1
 */

$sortedAchievements = $achievements;
arsort($sortedAchievements);
//pr($sortedAchievements);

/* Set the values for the achievements */
$pinValue = 25;
$starValue = 100;
$trophyValue = 500;
/* Extract the first value from the array for the main specialism */
$firstValue = $sortedAchievements[key($sortedAchievements)];
/* Visible number of achievements - use an odd number! */
$shownAchievements = 9;
?>

<div class="row-fluid">
	<div class="span12">
		<div class="span6">
			<h3><?php echo '<i class="icon-user icon-4x"></i> ' . __('Your #1 specialism') . ': ' . $this->XlrFunctions->getWeaponName(key($sortedAchievements)) . ' ' . __('Specialist') ?></h3>
			<div class="progress progress-warning progress-striped active">
				<div class="bar" style="width: <?php echo ($firstValue % $trophyValue) / ($trophyValue / 100); ?>%"></div>
			</div>
		</div>
		<div class="span6">
			<div class="row-fluid">
				<div class="span4">
					<h4>
						<h4>
							<i class="icon-trophy icon-4x"></i> <?php echo $this->Number->precision(floor($firstValue / $trophyValue), 0) . ' ' . __('trophies'); ?>
						</h4>
						<h5>
							<i class="icon-star icon-2x"></i> <?php echo $this->Number->precision(floor($firstValue / $starValue), 0) . ' ' . __('stars'); ?>
							&nbsp;&nbsp;&nbsp;
							<i class="icon-pushpin icon-2x"></i> <?php echo $this->Number->precision(floor($firstValue / $pinValue), 0) . ' ' . __('pins'); ?>
						</h5>
					</h4>
				</div>
				<div class="span8 pull-right">
					<?php echo '<strong>' . $this->Number->precision($firstValue, 0) . '</strong> ' . __(' total kills made with this specialism.') . '</br>';
					echo '<strong>' . $this->Number->precision(($firstValue % $trophyValue) / ($trophyValue / 100), 0) . '%</strong> ' . __('progress to the next main trophy.') . '</br>';
					echo '<small><i class="icon-info-sign"></i> ' . __('You receive a pin for every %s kills, a star for every %s kills and a trophy per %s kills.', $pinValue, $starValue, $trophyValue ) . '</small>';?>
				</div>
			</div>
		</div>
	</div>
</div>

<hr>

<div class="row-fluid">

<?php
$count = -1;
foreach ($sortedAchievements as $k => $v) {
?>
	<?php
	$count++;
	$place = $count+1;
	/* Skip the first value */
	if ($count == 0) continue;
	if ($count <= $shownAchievements-1) {
		if ($count % 2 == 0) {
			echo '<div class="span6 pull-right well">';
		} else {
			echo '<div class="row-fluid"><div class="span6 pull-left well">';
		}
	?>
	<div class="row-fluid">
		<div class="span12">
			<h3><?php echo $place . ': ' . $this->XlrFunctions->getWeaponName($k) ?></h3>
			<?php if ($v > 0) { ?>
				<div class="progress progress-success">
					<div class="bar" style="width: <?php echo ($v % $trophyValue) / ($trophyValue / 100); ?>%"></div>
				</div>
			<?php } else { ?>
				<div class="progress progress-danger">
					<div class="bar" style="width: 100%"></div>
				</div>
			<?php } ?>
		</div>
	</div>
	<div class="row-fluid">
		<div class="span4">
			<h4>
				<i class="icon-trophy icon-4x"></i> <?php echo $this->Number->precision(floor($v / $trophyValue), 0) . ' ' . __('trophies'); ?>
			</h4>
		</div>
		<div class="span2 muted text-center">
			<h4>
				<h6><i class="icon-star icon-2x"></i> <?php echo $this->Number->precision(floor($v / $starValue), 0) . ' ' . __('stars'); ?>
				</h6>
				<h6>
					<i class="icon-pushpin icon-2x"></i> <?php echo $this->Number->precision(floor($v / $pinValue), 0) . ' ' . __('pins'); ?>
				</h6>
			</h4>
		</div>
		<div class="span6 pull-right">
			<?php echo '<strong>' . $this->Number->precision($v, 0) . '</strong> ' . __(' total kills made.') . '</br>';
			echo '<strong>' . $this->Number->precision(($v % $trophyValue) / ($trophyValue / 100), 0) . '%</strong> ' . __('progress to the next main trophy.') ?>
		</div>
	</div>
</div>
	<?php if ($count % 2 == 0) echo '</div>' ?>
<?php } else { ?>

	<?php if ($count == $shownAchievements) { ?>
		<button type="button" class="btn btn-link" data-toggle="collapse" data-target="#demo">
			<?php echo __('...show/hide more achievements'); ?>
		</button>
		<div id="demo" class="collapse">
	<?php } ?>

	<div class="row-fluid">
		<?php if ($v == 0) {
			echo '<div class="span12 alert alert-error">';
		} elseif ($v < 100) {
			echo '<div class="span12 alert">';
		} else {
			echo '<div class="span12 alert alert-success">';
		} ?>
			<div class="row-fluid">
				<div class="span3">
				<?php echo '<strong>' . $place . ': ' . $this->XlrFunctions->getWeaponName($k) . '</strong>';  ?>
				</div>
				<div class="span9">
					<?php echo'<i class="icon-trophy icon-large"></i> ' .
						$this->Number->precision(floor($v / $trophyValue), 0) . ' - <i class="icon-star icon-large"></i> ' . $this->Number->precision(floor($v / $starValue), 0) .
						' - <i class="icon-pushpin icon-large"></i> ' . $this->Number->precision(floor($v / $pinValue), 0) . ' - kills: ' . $this->Number->precision($v, 0) .
						' - progress to next trophy: ' . $this->Number->precision(($v % $trophyValue) / ($trophyValue / 100), 0) . '%'; ?>
				</div>
			</div>
		</div>
	</div>

<?php } } ?>
</div>
</div>
