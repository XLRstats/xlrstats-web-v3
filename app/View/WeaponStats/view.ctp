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
 * @package       app.View.WeaponStats
 * @since         XLRstats v3.0
 * @version       0.1
 */

//pr($weaponData);
//pr($playerData);
?>
<div class="row-fluid">

	<div class="span4">
		<h3><?php echo $this->XlrFunctions->getWeaponName($weaponData['WeaponStat']['name']); ?></h3>
		<div>
			<?php echo $this->XlrFunctions->getWeaponImage($weaponData['WeaponStat']['name'], array(
				'class' => 'img-polaroid'
			)); ?>
		</div>
		<br />
		<div><?php echo __('Total kills: ') . $this->Number->format($weaponData['WeaponStat']['kills'], array('places' => 0, 'before' => null, 'thousands' => '.')); ?></div>
		<div><?php echo __('Total teamkills: ') . $this->Number->format($weaponData['WeaponStat']['teamkills'], array('places' => 0, 'before' => null, 'thousands' => '.')); ?></div>
		<div><?php echo __('Total suicides: ') . $this->Number->format($weaponData['WeaponStat']['suicides'], array('places' => 0, 'before' => null, 'thousands' => '.')); ?></div>
		<br />
		<?php
		// External weapon link (if available)
		if ($this->XlrFunctions->getWeaponLink($weaponData['WeaponStat']['name']) != false) {
			echo $this->Html->link('<i class="icon-external-link"></i> more weapon information',
				$this->XlrFunctions->getWeaponLink($weaponData['WeaponStat']['name']),
				array(
					'class' => 'btn btn-success',
					'target' => '_blank',
					'escape' => false,
				)

			);
		}
		?>
	</div>

	<div class="span8">
		<h4><?php echo __('Top players for this weapon'); ?></h4>
		<table class="table table-condensed table-bordered table-hover">
			<?php
			echo $this->Html->tableHeaders(array(
				__('Name'),
				__('Kills'),
				__('Deaths'),
			));

			foreach ($playerData as $k => $v) {
				echo $this->Html->tableCells(array(
					$this->Html->link($v['PlayerStat']['Player']['name'], array(
						'plugin' => null,
						'controller' => 'player_stats',
						'action' => 'view',
						'server' => Configure::read('server_id'),
						$v['PlayerStat']['id']
					)),
					$this->Number->format($v['PlayerWeapon']['kills'], array('places' => 0, 'before' => null, 'thousands' => '.')),
					$this->Number->format($v['PlayerWeapon']['deaths'], array('places' => 0, 'before' => null, 'thousands' => '.')),
				));
			}
			?>
		</table>
	</div>

</div>