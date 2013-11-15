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
 * @package       app.View.Penalties
 * @since         XLRstats v3.0
 * @version       0.1
 */

$currentTime = gmdate('U');
if ($penalty['Penalty']['time_expire'] == -1) {
	$timeExpire = __('never');
} else {
	$timeExpire = $this->Time->format('F jS, Y h:i A', $penalty['Penalty']['time_expire'], null);
}
?>

<table class="table table-striped table-bordered table-condensed">
	<thead><td colspan="2"><h4>Penalty issued to <strong><?php echo $penalty['Player']['name'] ?></strong> on <strong><?php echo $this->Time->format('F jS, Y h:i A', $penalty['Penalty']['time_add'], null) ?></strong></h4></td></thead>
	<tbody>
        <tr><td><?php echo __('Type') ?></td><td><?php echo $penalty['Penalty']['type'] ?></td></tr>
		<tr><td><?php echo __('Reason') ?></td><td><?php echo $penalty['Penalty']['reason'] ?></td></tr>
		<tr><td><?php echo __('Issued by') ?></td><td><?php echo $penalty['Admin']['name'] ? $penalty['Admin']['name'] : 'BigBrotherBot' ?></td></tr>
		<tr><td><?php echo __('Expires') ?></td><td><?php echo $timeExpire ?></td></tr>
		<tr><td>&nbsp;</td><td>&nbsp;</td></tr>

		<tr><td><?php echo __('Keyword') ?></td><td><?php echo $penalty['Penalty']['keyword'] ?></td></tr>
        <tr><td><?php echo __('Duration') ?></td><td><?php echo $penalty['Penalty']['duration'] . ' ' . __('seconds') ?></td></tr>
        <tr><td><?php echo __('Data') ?></td><td><?php echo $penalty['Penalty']['data'] ?></td></tr>
        <tr><td><?php echo __('Time Edited') ?></td><td><?php echo $this->Time->format('F jS, Y h:i A', $penalty['Penalty']['time_edit'], null) ?></td></tr>
    </tbody>
</table>

<?php if (Configure::read('options.ban_disputable') && Configure::read('options.ban_dispute_link') == null && ($penalty['Penalty']['time_expire'] == -1 || $penalty['Penalty']['time_expire'] > $currentTime )
	&& ($penalty['Penalty']['type'] == 'Ban' || $penalty['Penalty']['type'] == 'TempBan')) { ?>
	<div class="row">
		<div class="span12">
			<?php echo '<h2>' . __('Dispute penalty:') . '</h2>'; ?>
			<?php echo $this->element('disqus'); ?>
			</span></div>
	</div>
<?php } else { ?>
	<div class="row">
		<div class="span12"><?php echo '<h4>' . __('This penalty cannot be disputed.') . '</h4>'; ?></span></div>
	</div>
<?php } ?>

<?php
//pr($penalty);
?>

