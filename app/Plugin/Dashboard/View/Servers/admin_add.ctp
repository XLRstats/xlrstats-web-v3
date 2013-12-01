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
 * @package       app.Plugin.Dashboard.View.Servers
 * @since         XLRstats v3.0
 * @version       0.1
 */
?>

<div class="servers form">
<?php echo $this->Form->create('Server'); ?>
	<fieldset>
		<legend><?php echo __('Add a New Server'); ?></legend>
	<?php
		echo $this->Form->input('servername');
		echo $this->Form->input('active');
		echo '<hr>';
		echo $this->Form->input('gamename', array(
			'type' => 'select',
			'options' => Configure::read('games'),
			'empty' => __('Select Game')
		));
		echo $this->Form->input('dbhost');
		echo $this->Form->input('dbuser');
		echo $this->Form->input('dbpass');
		echo $this->Form->input('dbname');
		echo $this->Form->input('server_group_id');
		echo $this->Form->input('statusurl');
		echo $this->Form->input('slogan');
	?>
	</fieldset>
	<?php
	echo $this->Form->submit('Add Server', array(
			'class' => 'btn btn-primary'
		)
	);

	echo $this->Form->end();
	?>
</div>
<hr>
<div>
	<?php
	echo $this->Html->link(__('Back to Server List'), array(
			'action' => 'index'
		)
	);
	?>
</div>
