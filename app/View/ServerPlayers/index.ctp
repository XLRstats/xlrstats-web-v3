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
 * @package       app.View.ServerPlayers
 * @since         XLRstats v3.0
 * @version       0.1
 */

//pr($serverPlayers);
//pr($playerPositions);
//pr($serverLocation);

/**
 * Build the image url's, need to be flawless or map won't show the icons.
 */
$serverImageUrl = FULL_BASE_URL . $this->request->base . '/' . IMAGES_URL . 'worldmap-icons/server.png';
$playerImageUrl = FULL_BASE_URL . $this->request->base . '/' . IMAGES_URL . 'worldmap-icons/player.png';

$serverInfo = $this->requestAction('server_info');

?>
<script type="text/javascript">
	$(function() {
		var startLatLng = new google.maps.LatLng(<?php echo $serverLocation ?>);
		$('#map_canvas').gmap({'center': startLatLng, 'zoom': 2, 'disableDefaultUI':false, 'mapTypeId': google.maps.MapTypeId.SATELLITE}).bind('init', function() {

			$('#map_canvas').gmap('addMarker', { 'type': 'server', 'position': '<?php echo $serverLocation ?>', 'icon': '<?php echo $serverImageUrl ?>', 'bounds': false }).click(function() {
				$('#map_canvas').gmap('openInfoWindow', {'content': 'Server Location'}, this)});

			<?php foreach ($playerPositions as $marker) { ?>
				$('#map_canvas').gmap('addMarker', { 'type': 'player', 'position': '<?php echo $marker['latitude'] ?>,<?php echo $marker['longitude'] ?>', 'icon': '<?php echo $playerImageUrl ?>', 'bounds': false}).click(function() {
					$('#map_canvas').gmap('openInfoWindow', {'content': '<?php echo $marker['client'] ?>'}, this);});
			<?php } ?>

			//$('#map_canvas').gmap('set', 'MarkerClusterer', new MarkerClusterer($('#map_canvas').gmap('get', 'map'), $('#map_canvas').gmap('get', 'markers')));
			//$('#map_canvas').gmap('find', 'markers', { 'property': 'type', 'value': 'server' }, function(marker, found) {marker.setVisible(found)});
		});
	});
</script>

<div class="row">
	<div class="span12">
		<div id="map_canvas" class="center stretch" style="height: 340px; margin-bottom:15px;"></div>
	</div>
</div>

<div class="row">
	<div class="span12">
		<?php echo $this->element('server_info', array(
		'serverName' => false,
		'serverNameCompact' => false,
		'serverStats' => true,
		));
		?>
	</div>
</div>

<div class="row">
	<div class="span12">
		<div class="pull-right muted">
			<?php
			if (isset($serverInfo['lastupdate'])) {
				echo __('Status last updated:') . ' ' . $this->Time->format('F jS, Y h:i A', $serverInfo['lastupdate'], null) . ', ';
			}
			echo count($serverPlayers) . ' teams active.'?>
		</div>
	</div>
</div>


<?php
if (empty($serverPlayers)) { ?>
	<div class="row">
		<div class="span12">
			<h2><?php echo __('No players online!') ?></h2>
		</div>
	</div>

	<?php
} else {
	?>
	<div class="row">
	<?php
	foreach ($serverPlayers as $teamnr => $team) { ?>
		<div class="span4 league">
			<div class="league-title"><h4>
				<a href="#""><?php echo $this->XlrFunctions->getTeamName($teamnr); ?></a>
			</h4></div>
			<table class="table table-hover">
	<?php
		$position = 0;
		$registeredCount = 0;

		echo $this->Html->tableHeaders(array(
			__(''),
			__('Name'),
			__('Rank'),
			__('From'),
			__('Score <small>(skill)</small>'),
		));
		foreach ($team as $k => $v) {
			$position++;

			if (isset($v['ServerPlayer']['Score'])) {
				$score = '<strong>' . $v['ServerPlayer']['Score'] . '</strong>';
			} else {
				$score = 'n.a.';
			};
			if (isset($v['ServerPlayer']['skill'])) {
				$registeredCount++;
				$score .= ' <small>(' . $this->Number->format($v['ServerPlayer']['skill'], array(
						'places' => 0,
						'before' => null,
						'thousands' => '.'
					)) . ')</small>';
			}
			if (isset($v['ServerPlayer']['rank'])) {
				$positionBadge = '<span class="badge badge-success">' . $position . '</span>';
				$rank = $this->Html->image('ranks/' . Configure::read('rank.' . $v['ServerPlayer']['rank'] . '.2'), array(
					'rel' => 'tooltip',
					'data-original-title' => Configure::read('rank.' . $v['ServerPlayer']['rank'] . '.0'),
					'style' => 'cursor:pointer; width:20px; height:20px;',
				));
			} else {
				$rank = '<span class="icon-stack" rel="tooltip" title="' . __('Unregistered player') . '"><i class="icon-circle icon-stack-base icon-muted"></i><i class="icon-user"></i></span>';
				$positionBadge = '<span class="badge">' . $position . '</span>';
			}
			if (isset($v['ServerPlayer']['flag'])) {
				$flag = $this->Html->image('flags/' . $v['ServerPlayer']['flag'][0] . '.gif', array(
					'rel' => 'tooltip',
					'data-original-title' => $v['ServerPlayer']['flag'][1],
					'style' => 'cursor:pointer',
				));
			} else {
				$flag = $this->Html->image('flags/unknown.gif');
			}

			$trunkedName = $this->Text->truncate($v['ServerPlayer']['Name'],
				12,
				array(
					'ending'	=> '...',
					'exact'		=> true,
				));
			if ($trunkedName != $v['ServerPlayer']['Name']) {
				$trunkedName = '<span rel="tooltip" data-original-title="' . $this->XlrFunctions->fixName($v['ServerPlayer']['Name']) . '">' . $trunkedName . '</span>';
			} else {
				$trunkedName = $this->XlrFunctions->fixName($trunkedName);
			}
			if (isset($v['ServerPlayer']['playerstats_id'])) {
				$name = $this->Html->link($trunkedName, array(
					'plugin' => null,
					'controller' => 'player_stats',
					'action' => 'view',
					'server' => Configure::read('server_id'),
					$v['ServerPlayer']['playerstats_id']
				), array(
					'escape' => false
				));
			} else {
				$name = $trunkedName;
			}
			/* If the team name is 'Spectators', remove the positional badge */
			if ($this->XlrFunctions->getTeamName($teamnr) == 'Spectators') {
				$positionBadge = '';
			}

			echo $this->Html->tableCells(array(
				$positionBadge,
				$name,
				$rank,
				$flag,
				$score
			));
		} ?>

			<tr><td colspan="5" style="text-align: right" class="muted"><small><?php echo $this->Number->toPercentage($registeredCount / $position * 100, 0) . ' ' . __('of this team is competing in XLRstats.') ?></small></td></tr>
			</table></div>

	<?php
	}
	?>
	</div>
<?php
}

