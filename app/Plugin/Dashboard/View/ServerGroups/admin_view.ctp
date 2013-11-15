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
