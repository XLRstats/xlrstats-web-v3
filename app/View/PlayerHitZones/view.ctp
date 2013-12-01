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
 * @package       app.View.PlayerHitZones
 * @since         XLRstats v3.0
 * @version       0.1
 */
//pr($hitZones);
?>
<script type='text/javascript'>
	$(document).ready(function() {
		$('[rel=popover]').popover({
			placement: 'left',
			trigger: 'hover'
		});
	});
</script>

<div class="row">
	<div class="span6" style="width:485px;">
		<table class="table table-hover">
			<thead>
				<th><?php echo __('Body Part'); ?></th>
				<th><?php echo __('Kills'); ?></th>
				<th><?php echo __('Deaths'); ?></th>
			</thead>
			<?php
			foreach ($hitZones as $hitZone):
				$bodyPart = $this->XlrFunctions->getBodyPartname($hitZone['BodyPart']['name']);
			?>
			<tr>
				<td><?php echo $bodyPart['body_part_name']; ?></td>
				<td><?php echo $hitZone['PlayerHitZone']['kills']; ?></td>
				<td><?php echo $hitZone['PlayerHitZone']['deaths']; ?></td>
			</tr>
			<?php
			endforeach; ?>
		</table>
	</div>
	<div class="span6" style="width:485px";>
		<div class="hit-zones-bg">
			<?php
			foreach ($hitZones as $hitZone):
				$bodyPart = $this->XlrFunctions->getBodyPartname($hitZone['BodyPart']['name']);
				if ($bodyPart['fixed_name'] != '' && $bodyPart['fixed_name'] != 'none'):
				?>
					<div
						class="hit-zones <?php echo $bodyPart['fixed_name']?>"
						style="opacity:<?php echo $hitZone['PlayerHitZone']['percentage'] + 0.1; ?>;
								background:<?php echo $this->XlrFunctions->colorizeHitZone($hitZone['PlayerHitZone']['percentage'] + 0.1); ?>;"
						rel="popover"
						data-title="<?php echo $bodyPart['body_part_name']; ?>"
						data-content="<?php echo __('Kills: %s', $hitZone['PlayerHitZone']['kills']) . '<br />' .
										__('Deaths: %s', $hitZone['PlayerHitZone']['deaths']) . '<br />' .
										__('Team Kills: %s', $hitZone['PlayerHitZone']['teamkills']) . '<br />' .
										__('Team Deaths: %s', $hitZone['PlayerHitZone']['teamdeaths']) . '<br />' .
										__('Suicides: %s', $hitZone['PlayerHitZone']['suicides'])
									?>"
						data-html="true">
					</div>
				<?php
				endif; ?>
			<?php
			endforeach; ?>
		</div>
	</div>
</div>