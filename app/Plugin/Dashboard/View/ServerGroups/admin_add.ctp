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

$this->set('title_for_layout', __('Add Server Group • XLRstats'));
?>

<div class="serverGroups form">
	<?php echo $this->Form->create('ServerGroup'); ?>
	<fieldset>
		<legend><?php echo __('Add Server Group'); ?></legend>
		<?php
		echo $this->Form->input('name');
		echo $this->Form->input('description');
		?>
	</fieldset>
	<?php
	echo $this->Form->submit('Add Server Group', array(
			'class' => 'btn btn-primary'
		)
	);

	echo $this->Form->end();
	?>
</div>
<hr>
<div>
	<?php
	echo $this->Html->link(__('Back to Server Groups'), array(
			'action' => 'index'
		)
	);
	?>
</div>
