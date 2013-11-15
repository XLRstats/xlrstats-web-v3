<script type="text/javascript" charset="utf-8">
	//Set X-editable mode
	$.fn.editable.defaults.mode = 'inline';
</script>
<div class="page-header">
	<h1>Options <small>- Default options</small></h1>
</div>
<div>
	<blockquote>
		<?php
		echo __('<i>These are the default global options that apply to all servers. You can however override each option
		for a server in the "Server Options" section of that specific server except for "locked" options. Lock the option
		if you do not want it to be overriden in server specific options. <strong>Click to Change!</strong></i>');
		?>
	</blockquote>
</div>

<table id="options" class="table table-bordered table-striped table-hover">
	<thead>
		<th><?php echo __('Description'); ?></th>
		<th><?php echo __('Value'); ?></th>
		<th><?php echo __('Locked'); ?></th>
	</thead>
	<tbody>
		<?php
		foreach($options as $option):
			if($option['Option']['locked'] == 1):
				$class = 'error';
			else:
				$class = '';
			endif;
			?>
			<tr class="<?php echo $class; ?>">
				<td width="40%"><?php echo $option['Option']['description']; ?></td>
				<td width="30%">
					<?php
					$booleanValues = array(
						'hide_banned',
						'must_accept_cookies',
						'showMIA',
						'show_donate_button',
						'show_banlist',
						'show_bans_only',
						'ban_disputable',
					);

					$type = 'text';
					if(in_array($option['Option']['name'], $booleanValues)):
						$type = 'select';
					endif;

					// Print 'Yes' or 'No' instead of 1 or 0
					$link = $option['Option']['value'];
					if(in_array($option['Option']['name'], $booleanValues)):
						if($link == 1):
							$link = 'Yes';
						else:
							$link = 'No';
						endif;
					endif;

					echo $this->Html->link($link, '#', array(
							'id' => $option['Option']['name'],
							'data-type' => $type,                   //type of input (text, textarea, select, etc)
							'data-url' => 'options/edit',           //url to server-side script to process submitted value
							'data-pk' => $option['Option']['id'],   //primary key of record to be updated (ID in db)
							'data-name' => 'value',                 //name of field to be updated (column in db)
						)
					);
					?>
				</td>
				<td width="30%">
					<?php
					// Print 'Yes' or 'No' instead of 1 or 0
					$link = $option['Option']['locked'];
					if($link == 1):
						$link = 'Yes';
					else:
						$link = 'No';
					endif;
					echo $this->Html->link($link, '#', array(
							'id' => $option['Option']['name']. '_locked',
							'data-type' => 'select',                //type of input (text, textarea, select, etc)
							'data-url' => 'options/edit',           //url to server-side script to process submitted value
							'data-pk' => $option['Option']['id'],   //primary key of record to be updated (ID in db)
							'data-name' => 'locked',                //name of field to be updated (column in db)
						)
					);
					?>
				</td>
			</tr>
		<?php endforeach; ?>
	</tbody>
</table>