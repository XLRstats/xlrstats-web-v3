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

<div class="playerSoldiers form">
<?php echo $this->Form->create('PlayerSoldier'); ?>
	<fieldset>
		<legend><?php echo __('Admin Add Player Soldier'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('server_id');
		echo $this->Form->input('playerstats_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Player Soldiers'), array('action' => 'index')); ?></li>
	</ul>
</div>
