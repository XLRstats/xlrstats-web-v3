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

if (Configure::read('options.license')) {
	return null;
}
?>

<script type="text/javascript" charset="utf-8">
	//Set X-editable mode
	$.fn.editable.defaults.mode = 'inline';
</script>

<div class="alert alert-block alert-danger">
	<h4><i class="icon-certificate"></i> You have not entered your license key yet!</h4>
	<?php
	echo $this->Html->link('Click to enter your license', '#', array(
			'id' => 'license',
			'data-type' => 'text',			//type of input (text, textarea, select, etc)
			'data-url' => 'options/edit',	//url to server-side script to process submitted value
			'data-pk' => 1,					//primary key of record to be updated (ID in db)
			'data-name' => 'value',			//name of field to be updated (column in db)
		)
	);
	echo __(' or ');
	echo $this->Html->link(__('acquire a license key here.'), 'http://www.xlrstats.com/pages/xlrstats.com/licensing', array(
		'target' => '_blank'
	));
	?>

</div>
