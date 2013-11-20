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
 * @package       app.Plugin.Dashboard.View.Elements
 * @since         XLRstats v3.0
 * @version       0.1
 */

$serverOptions = $this->requestAction('dashboard/server_options');

$booleanValues = array(
	'hide_banned',
	'must_accept_cookies',
	'showMIA',
	'show_donate_button',
	'show_banlist',
	'show_bans_only',
	'ban_disputable',
);
?>

<table id="options" class="table table-bordered table-striped table-hover">
	<thead>
	<th><?php echo __('Description'); ?></th>
	<th><?php echo __('Value'); ?></th>
	</thead>
	<tbody>
	<?php
	foreach($serverOptions as $option):
		if($option['Option']['group'] == $group):
			?>
			<tr>
				<td width="50%"><?php echo $option['Option']['description']; ?></td>
				<td width="50%">
					<?php
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
							'data-url' => 'server_options/edit',    //url to server-side script to process submitted value
							'data-pk' => $option['Option']['name'], //*** we use option name here instead of primary key
							'data-name' => 'value',                 //name of field to be updated (column in db)
						)
					);
					?>
				</td>
			</tr>
		<?php
		endif;
	endforeach;
	?>
	</tbody>
</table>