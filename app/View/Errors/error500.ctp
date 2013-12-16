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
 * @package       app.View.Errors
 * @since         XLRstats v3.0
 * @version       0.1
 */
?>

<div class="span12">
	<div class="alert alert-error">
		<h1><?php echo __('An Internal Error Has Occurred!'); ?></h1>
		<h2><?php echo $name; ?></h2>
	</div>
</div>

<?php
if (Configure::read('debug') > 0 ):
	?>
	<div class="span12">
		<div class="alert alert-info"><?php echo $this->element('exception_stack_trace'); ?></div>
	</div>
	<?php
endif;
