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
 * @package       app.Plugin.Dashboard.View.ServerGroups
 * @since         XLRstats v3.0
 * @version       0.1
 */
?>

<div class="serverGroups view">
<h2><?php  echo __('Server Group'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($serverGroup['ServerGroup']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($serverGroup['ServerGroup']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active Group'); ?></dt>
		<dd>
			<?php echo h($serverGroup['ServerGroup']['active_group']) ? __('Yes') : __('No'); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Server Group'), array('action' => 'edit', $serverGroup['ServerGroup']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Server Group'), array('action' => 'delete', $serverGroup['ServerGroup']['id']), null, __('Are you sure you want to delete # %s?', $serverGroup['ServerGroup']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Server Groups'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Server Group'), array('action' => 'add')); ?> </li>
	</ul>
</div>
