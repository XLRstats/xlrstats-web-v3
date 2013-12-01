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
 * @package       app.View.Leagues.json
 * @since         XLRstats v3.0
 * @version       0.1
 */

$nameTruncation = 15;
// Format some array elements
$count = count($xlrLeague['aaData']);
for ($i = 0; $i < $count; $i++) {
	foreach ($xlrLeague['aaData'][$i] as $k => &$v) {
		// Position numbers
		if ($k == 0) {
			$v = $this->request->query['iDisplayStart']++;
			$v += 1;
		}
		// Name
		if ($k == 1) {
			$name = $this->Text->truncate($v,
				$nameTruncation,
				array(
					'ending'	=> '...',
					'exact'		=> true,
				));
			if ($name == $v) {
				$nameLink = $this->Html->link(
					$name,
					array(
						'controller' => 'player_stats',
						'action' => 'view',
						'server' => Configure::read('server_id'),
						$xlrLeague['aaData'][$i][15])
				);
			} else {
				$nameLink = $this->Html->link(
					$name,
					array(
						'controller' => 'player_stats',
						'action' => 'view',
						'server' => Configure::read('server_id'),
						$xlrLeague['aaData'][$i][15]),
					array(
						'rel' => 'tooltip',
						'data-original-title' => $v,
						'style' => 'cursor:pointer',
					));
			};

			$flag = $this->Html->image('flags/' . $xlrLeague['aaData'][$i][18][0] . '.gif', array(
				'rel' => 'tooltip',
				'data-original-title' => $xlrLeague['aaData'][$i][18][1],
				'style' => 'cursor:pointer; margin:2px 5px 0px; 0px;',
			));

			$rank = $this->Html->image('ranks/' . Configure::read('rank.' . $xlrLeague['aaData'][$i][16] . '.2'), array(
				'rel' => 'tooltip',
				'data-original-title' => __(Configure::read('rank.' . $xlrLeague['aaData'][$i][16] . '.0')),
				'style' => 'cursor:pointer; width:20px; height:20px;',
			));

			$level = $this->Html->tag('span', $this->XlrFunctions->levelSparklinePieChart($xlrLeague['aaData'][$i][19]['level'],
					array(
						'scripts' => false
					)),
				array(
					'rel' => 'tooltip',
					'data-original-title' => __($xlrLeague['aaData'][$i][19]['name']),
					'style' => 'cursor:pointer; position:relative; top:3px; left:5px;',
				)
			);

			if ($xlrLeague['aaData'][$i][12] < Configure::read('options.min_connections') || $xlrLeague['aaData'][$i][4] < Configure::read('options.min_kills')) {
				$leagueName = __('Not Qualified');
				//TODO: Need to css this leagueColor
				$leagueColor = '#999999';
				$leagueIcon = 'icon-star-empty';
			} else {
				$leagueName = __(Configure::read('league.' . $xlrLeague['aaData'][$i][17] . '.3'));
				$leagueColor = __(Configure::read('league.' . $xlrLeague['aaData'][$i][17] . '.5'));
				$leagueIcon = 'icon-star';
			}

			if ($leagueValue[0] != 'League.skill' && $xlrLeague['aaData'][$i][12] >= Configure::read('options.min_connections') && $xlrLeague['aaData'][$i][4] >= Configure::read('options.min_kills')) {
				$leagueBadge = $this->Html->link('<i class="' . $leagueIcon . '" style="color:' . $leagueColor . '; margin-left: 10px"></i>',
					array(
						'controller' => 'leagues',
						'action' => 'view',
						'server' => Configure::read('server_id'),
						$xlrLeague['aaData'][$i][17]
					),
					array(
						'rel' => 'tooltip',
						'data-original-title' => $leagueName,
						'escape' => false
					));
			} else {
				$leagueBadge = '<i class="' . $leagueIcon . '" style="color:' . $leagueColor . '; margin-left: 10px" rel="tooltip" data-original-title="' . $leagueName . '"></i>';
			}
			$v = $flag . $rank . $level . $leagueBadge . '<span style="padding-left: 10px;">' . $nameLink . '</span>';
		}
		// Skill
		if ($k == 2) {
			$v = '<b>' . $this->Number->format($v, array(
					'places' => 0,
					'before' => null,
					'thousands' => '.'
				)) . '</b>';
		}
		// Ratio
		if ($k == 3) {
			$v = $this->Html->tag('span', $this->XlrFunctions->ratioSparklineBulletChart($v,
					array(
						'scripts' => false
					)),
				array(
					'rel' => 'tooltip',
					'data-original-title' => __('Ratio: ') . $this->Number->precision($v, 2),
					'style' => 'cursor:pointer',
				)
			);
		}
	}
	//Get rid of some array elements we don't need
	$xlrLeague['aaData'][$i] = array_slice($xlrLeague['aaData'][$i], 0, 13);
	unset($v);
}

echo json_encode($xlrLeague);