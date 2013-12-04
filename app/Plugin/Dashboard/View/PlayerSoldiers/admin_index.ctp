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
 * @package       app.Plugin.Dashboard.View.PlayerSoldiers
 * @since         XLRstats v3.0
 * @version       0.1
 */
?>

<div class="playerSoldiers index">
	<h2><?php echo __('Player Soldiers'); ?></h2>
	<table style="padding: 0; border-collapse: collapse; border-spacing: 0;">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('server_id'); ?></th>
			<th><?php echo $this->Paginator->sort('playerstats_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
	foreach ($playerSoldiers as $playerSoldier): ?>
	<tr>
		<td><?php echo h($playerSoldier['PlayerSoldier']['id']); ?>&nbsp;</td>
		<td><?php echo h($playerSoldier['AppUser']['username']); ?>&nbsp;</td>
		<td><?php echo h($playerSoldier['Server']['servername']); ?>&nbsp;</td>
		<td><?php echo h($playerSoldier['PlayerStat']['Player']['name']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $playerSoldier['PlayerSoldier']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $playerSoldier['PlayerSoldier']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $playerSoldier['PlayerSoldier']['id']), null, __('Are you sure you want to delete # %s?', $playerSoldier['PlayerSoldier']['id'])); ?>
		</td>
	</tr>
	<?php
	endforeach;
	?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>

	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Player Soldier'), array('action' => 'add')); ?></li>
	</ul>
</div>
