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

$opponents = $this->requestAction('opponents/shortlist/' . $playerID);
$opponents = $opponents['0'];
$nameTruncation = 30;
//pr($opponents);

echo '<table class="table table-hover table-bordered-v2">';
echo '<thead>';
echo $this->Html->tableHeaders(array(__('You can also compare ') . $opponents['0']['Killer']['Player']['name'] . __(' to:')));
echo '</thead>';
foreach ($opponents as $k => $v) {

	$trunkedName = $this->Text->truncate($v['Target']['Player']['name'],
		$nameTruncation,
		array(
			'ending'	=> '...',
			'exact'		=> true,
		));

	if ($trunkedName == $v['Target']['Player']['name']) {
		$namelink = $this->Html->link($trunkedName,
			array(
				'controller' => 'opponents',
				'action' => 'compare',
				'server' => Configure::read('server_id'),
				$v['Killer']['id'],
				$v['Target']['id']
			)
		);
	} else {
		$namelink = $this->Html->link($trunkedName,
			array(
				'controller' => 'opponents',
				'action' => 'compare',
				'server' => Configure::read('server_id'),
				$v['Killer']['id'],
				$v['Target']['id']),
			array(
				'rel' => 'tooltip',
				'data-original-title' => $v['Target']['Player']['name'],
				'style' => 'cursor:pointer',
			)
		);
	}

	echo $this->Html->tableCells(array(array($namelink)));
}
echo '</table>';