<div class="serverOptions view">
<h2><?php  echo __('Server Option'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($serverOption['ServerOption']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Server Id'); ?></dt>
		<dd>
			<?php echo h($serverOption['ServerOption']['server_id']); ?> (<?php echo h($serverOption['Server']['servername']); ?>)
            &nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($serverOption['ServerOption']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Value'); ?></dt>
		<dd>
			<?php echo h($serverOption['ServerOption']['value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Server Option'), array('action' => 'edit', $serverOption['ServerOption']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Server Option'), array('action' => 'delete', $serverOption['ServerOption']['id']), null, __('Are you sure you want to delete # %s?', $serverOption['ServerOption']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Server Options'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Server Option'), array('action' => 'add')); ?> </li>
	</ul>
</div>
