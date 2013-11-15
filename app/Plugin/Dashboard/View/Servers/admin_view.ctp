<div class="servers view">
<h2><?php  echo __('Server'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($server['Server']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Active'); ?></dt>
		<dd>
			<?php echo h($server['Server']['active']) ? __('Yes') : __('No'); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Gamename'); ?></dt>
		<dd>
			<?php echo h($server['Server']['gamename']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Servername'); ?></dt>
		<dd>
			<?php echo h($server['Server']['servername']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dbhost'); ?></dt>
		<dd>
			<?php echo h($server['Server']['dbhost']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dbuser'); ?></dt>
		<dd>
			<?php echo h($server['Server']['dbuser']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dbpass'); ?></dt>
		<dd>
			<?php echo h($server['Server']['dbpass']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dbname'); ?></dt>
		<dd>
			<?php echo h($server['Server']['dbname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Server Group'); ?></dt>
		<dd>
			<?php echo h($server['ServerGroup']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Statusurl'); ?></dt>
		<dd>
			<?php echo h($server['Server']['statusurl']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Slogan'); ?></dt>
		<dd>
			<?php echo h($server['Server']['slogan']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Server'), array('action' => 'edit', $server['Server']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Server'), array('action' => 'delete', $server['Server']['id']), null, __('Are you sure you want to delete # %s?', $server['Server']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Servers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Server'), array('action' => 'add')); ?> </li>
	</ul>
</div>
