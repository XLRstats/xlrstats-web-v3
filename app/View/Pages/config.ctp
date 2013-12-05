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
 * @package       app.View.Pages
 * @since         XLRstats v3.0
 * @version       0.1
 */
$this->set('title_for_layout', __('Configuration • XLRstats'));

echo '<h3>Cakephp version: ' . Configure::version() . '</h3>';

App::uses('Folder', 'Utility');
$dir = new Folder(APP . 'Config');
$files = $dir->findRecursive('xlr.*');

Cache::clear();

if (Configure::read('debug') > 0) {
	Configure::dump('xlr_config_dump.php', 'xlrstats');
}
?>
<div class="accordion" id="accordion2">
	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
				<?php echo __('Leagues'); ?>
			</a>
		</div>
		<div id="collapseOne" class="accordion-body collapse">
			<div class="accordion-inner">
				<?php
				foreach (Configure::read('league') as $id => $league):
					echo $this->Html->link($league[3], array(
								'plugin' => null,
								'admin' => false,
								'controller' => 'leagues',
								'action' => 'view',
								'server' => Configure::read('server_id'),
								$id
							)
						) . ': ' . $league[1] . ' to ' . $league[2] . ' ' . $league[0] . '.<br />';
				endforeach;
				?>
			</div>
		</div>
	</div>

	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
				<?php echo __('Levels'); ?>
			</a>
		</div>
		<div id="collapseTwo" class="accordion-body collapse">
			<div class="accordion-inner">
				<?php
				foreach (Configure::read('level') as $key => $level):
					echo $key . ': ' . $level[1] . ' (group_bits: ' . $level[0] . ')<br />';
				endforeach;
				?>
			</div>
		</div>
	</div>

	<div class="accordion-group">
		<div class="accordion-heading">
			<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
				<?php echo __('Ranks'); ?>
			</a>
		</div>
		<div id="collapseThree" class="accordion-body collapse">
			<div class="accordion-inner">
				<?php
				foreach (Configure::read('rank') as $key => $rank):
					echo $key . ': ' . $rank[0] . ': (' . $rank[1] . '+ kills)<br />';
				endforeach;
				?>
			</div>
		</div>
	</div>

</div>

