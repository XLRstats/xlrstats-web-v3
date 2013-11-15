<div class="userSoldiers view">
<h2><?php  echo __('User Soldier'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($userSoldier['UserSoldier']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User Id'); ?></dt>
		<dd>
			<?php echo h($userSoldier['UserSoldier']['user_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Server Id'); ?></dt>
		<dd>
			<?php echo h($userSoldier['UserSoldier']['server_id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Playerstats Id'); ?></dt>
		<dd>
			<?php echo h($userSoldier['UserSoldier']['playerstats_id']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User Soldier'), array('action' => 'edit', $userSoldier['UserSoldier']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User Soldier'), array('action' => 'delete', $userSoldier['UserSoldier']['id']), null, __('Are you sure you want to delete # %s?', $userSoldier['UserSoldier']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List User Soldiers'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User Soldier'), array('action' => 'add')); ?> </li>
	</ul>
</div>
