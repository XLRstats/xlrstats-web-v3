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

$mia = $this->requestAction('leagues/getmia/' . $leagueID . '/' . $random . '/' . $limit);
$mia = $mia['0'];
$nameTruncation = 30;
//pr($mia);

if (empty($mia)) {
	return null;
}

echo '<table class="table table-bordered-v2 table-hover">';
echo '<thead>';
echo $this->Html->tableHeaders(array( '<h4>' . __('M.I.A.') . '</h4>'));
echo '</thead>';
echo '<tbody>';
foreach ($mia as $k => $v) {

	$daysMissing = $this->Number->precision((gmdate('U') - $v['Player']['time_edit']) / 86400, 0);
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
				'data-original-title' => $daysMissing . ' ' . __('days')
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
				'data-original-title' => $v['Player']['name'] . ', ' . $daysMissing . ' ' . __('days'),
			)
		);
	}

	//$_text = '<small>' . $namelink . ' (' . $daysMissing . ' days)</small>';
	echo $this->Html->tableCells(array(array($namelink)));
}
echo '</tbody>';
echo '<tfoot>';
echo $this->Html->tableCells(array(array(array(__('These players have been missing for more than %s days.', Configure::read('options.max_days')), array('class' => 'muted small')))));
echo '</tfoot>';
echo '</table>';