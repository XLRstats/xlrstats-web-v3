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
 * @package       app.Plugin.Dashboard.View
 * @since         XLRstats v3.0
 * @version       0.1
 */

$serverName = $this->request->data['Server']['servername_a'] ? $this->request->data['Server']['servername_a'] : $this->request->data['Server']['servername'];
$serverName = $this->XlrFunctions->stripColors($serverName);
$this->set('title_for_layout', __('Server Settings | %s', $serverName));
?>

<div class="servers form">
	<h2><?php echo $serverName; ?></h2>
	<blockquote><?php
		echo __('Change the connection settings for this server.<br />Used to connect to the B3 database where the stats are stored.');
		?>
	</blockquote>
	<?php echo $this->Form->create('Server'); ?>
	<fieldset>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('servername');
		echo $this->Form->input('active');
		echo $this->Form->input('gamename');
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
	echo $this->Form->submit('Save Changes', array(
			'class' => 'btn btn-primary'
		)
	);

	echo $this->Form->end();
	?>
</div>
<hr>
<div>
	<div>
		<?php
		echo $this->Form->postLink(__('Delete'), array(
				'action' => 'delete',
				$this->Form->value('Server.id')
			),
			null,
			__('Are you sure you want to delete # %s?', $this->Form->value('Server.id'))
		);
		?>
	</div>
	<div><?php echo $this->Html->link(__('Back to Server List'), array('action' => 'index')); ?></div>
</div>
