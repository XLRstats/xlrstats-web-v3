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
 * @package       app.View.Elements
 * @since         XLRstats v3.0
 * @version       0.1
 */

$lastSeen = $this->requestAction('leagues/getLastSeen/' . $leagueID . '/' . $limit);
$nrRows = $lastSeen['1'];
$lastSeen = $lastSeen['0'];
$nameTruncation = 30;
//pr($lastSeen);

if (empty($lastSeen)) {
	return null;
}

echo '<table class="table table-bordered-v2 table-hover">';
echo '<thead>';
echo $this->Html->tableHeaders(array( '<h4>' . __('Last Seen') . '</h4>'));
echo '</thead>';
echo '<tbody>';
foreach ($lastSeen as $k => $v) {

	$timeSeen = $this->Time->format('F jS Y, H:i', $v['Player']['time_edit']);
	$timeAgo = $this->Time->format('H:i:s', (date('U') - $v['Player']['time_edit']));
	$trunkedName = $this->Text->truncate($v['Player']['name'],
		$nameTruncation,
		array(
			'ending'	=> '...',
			'exact'		=> true,
		));

	if ($trunkedName == $v['Player']['name']) {
		$namelink = $this->Html->link($trunkedName,
			array(
				'controller' => 'player_stats',
				'action' => 'view',
				'server' => Configure::read('server_id'),
				$v['League']['id']
			),
			array(
				'rel' => 'tooltip',
				'data-original-title' => $timeSeen
			)
		);
	} else {
		$namelink = $this->Html->link($trunkedName,
			array(
				'controller' => 'player_stats',
				'action' => 'view',
				'server' => Configure::read('server_id'),
				$v['League']['id']
			),
			array(
				'rel' => 'tooltip',
				'data-original-title' => $v['Player']['name'] . ', ' . $timeSeen,
			)
		);
	}

	//$_text = '<small>' . $namelink . ' (' . $timeAgo . ' ago)</small>';
	echo $this->Html->tableCells(array(array($namelink)));
}
echo '</tbody>';
echo '<tfoot>';
echo $this->Html->tableCells(array(array(array(__('The %s last seen players', $nrRows), array('class' => 'muted small')))));
echo '</tfoot>';
echo '</table>';