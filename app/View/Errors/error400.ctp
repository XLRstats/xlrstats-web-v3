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

$this->set('title_for_layout', __('XLRstats • %s', $name));
?>
<div class="exception-error">
	<h2><?php echo __('Oops! Something went wrong...'); ?></h2>
	<div><i class="icon-warning-sign"></i></div>
	<h1><?php echo $name; ?></h1>

	<p>
		<?php printf(
			__d('cake', 'The requested address %s was not found on this server.'),
			"<strong>'{$url}'</strong>"
		); ?>
	</p>
</div>

<?php
if (Configure::read('debug') > 0 ):
	echo $this->element('exception_stack_trace');
endif;
