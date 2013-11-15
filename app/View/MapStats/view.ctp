<?php
/**
 * XLRstats webfront version 3
 *   User: Mark Weirath
 *   Date: 18-8-12
 *   Time: 15:00
 * (Developed with JetBrains PhpStorm.)
 */

//pr($mapData);
//pr($playerData);

?>

<div class="row-fluid">

	<div class="span4">
		<h3><?php echo $this->XlrFunctions->getMapName($mapData['MapStat']['name']); ?></h3>
		<div>
			<?php echo $this->XlrFunctions->getMapImage($mapData['MapStat']['name'], array(
				'class' => 'img-polaroid'
			)); ?>
		</div>
		<br />
		<div><?php echo __('Total kills: ') . $this->Number->format($mapData['MapStat']['kills'], array('places' => 0, 'before' => null, 'thousands' => '.')); ?></div>
		<div><?php echo __('Total teamkills: ') . $this->Number->format($mapData['MapStat']['teamkills'], array('places' => 0, 'before' => null, 'thousands' => '.')); ?></div>
		<div><?php echo __('Total suicides: ') . $this->Number->format($mapData['MapStat']['suicides'], array('places' => 0, 'before' => null, 'thousands' => '.')); ?></div>
		<br />
		<?php
		// External map link (if available)
		if ($this->XlrFunctions->getMapLink($mapData['MapStat']['name']) != false) {
			echo $this->Html->link('<i class="icon-external-link"></i> more map information',
				$this->XlrFunctions->getMapLink($mapData['MapStat']['name']),
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
		<h4><?php echo __('Top players for this map'); ?></h4>
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
					$this->Number->format($v['PlayerMap']['kills'], array('places' => 0, 'before' => null, 'thousands' => '.')),
					$this->Number->format($v['PlayerMap']['deaths'], array('places' => 0, 'before' => null, 'thousands' => '.')),
				));
			}
			?>
		</table>
	</div>

</div>