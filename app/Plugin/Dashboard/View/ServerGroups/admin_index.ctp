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

$this->set('title_for_layout', __('Server Groups • XLRstats'));
?>

<script type="text/javascript" charset="utf-8">
	$.fn.editable.defaults.mode = 'inline';
	$(document).ready(function() {
		$('[rel=tooltip]').tooltip();
	});
</script>

<div class="page-header">
	<h1><?php echo __('Server Groups'); ?></h1>
</div>

<div>
	<blockquote><?php
		echo '<i>';
		echo __('Edit Server Groups below or ');
		echo $this->Html->link(__('Add a New Server Group'), array(
				'action' => 'add'
			),
			array(
				'class' => 'btn btn-success btn-small'
			)
		);
		echo '</i>';
		?>
	</blockquote>
</div>

<table id="options" class="table table-bordered table-striped table-hover">
	<thead>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Actions'); ?></th>
	</thead>
	<tbody>
	<?php foreach($serverGroups as $serverGroup): ?>
		<tr>
			<td style="width: 5%;"><?php echo $serverGroup['ServerGroup']['id']; ?></td>
			<td style="width: 20%">
				<?php
				echo $this->Html->link($serverGroup['ServerGroup']['name'], '#', array(
						'id' => 'text-field',
						'data-type' => 'text',							//type of input (text, textarea, select, etc)
						'data-url' => 'server_groups/edit',				//url to server-side script to process submitted value
						'data-pk' => $serverGroup['ServerGroup']['id'],	//primary key of record to be updated (ID in db)
						'data-name' => 'name',							//name of field to be updated (column in db)
					)
				);
				?>
			</td>
			<td style="width: 50%">
				<?php
				echo $this->Html->link($serverGroup['ServerGroup']['description'], '#', array(
						'id' => 'text-field',
						'data-type' => 'text',							//type of input (text, textarea, select, etc)
						'data-url' => 'server_groups/edit',				//url to server-side script to process submitted value
						'data-pk' => $serverGroup['ServerGroup']['id'],	//primary key of record to be updated (ID in db)
						'data-name' => 'description',					//name of field to be updated (column in db)
					)
				);
				?>
			</td>
			<td>
				<?php
				if($serverGroup['ServerGroup']['id'] != 1):
					echo $this->Form->postLink('<i class="icon-trash"></i>',
						array(
							'action' => 'delete',
							$serverGroup['ServerGroup']['id']
						),
						array(
							'class' => 'btn btn-mini btn-danger',
							'escape' => false,
							'rel' => 'tooltip',
							'data-original-title' => __('Delete'),
						),
						__('Are you sure you want to delete %s?', $serverGroup['ServerGroup']['name']));
				endif;
				?>
			</td>
		</tr>
	<?php endforeach; ?>
	</tbody>
</table>