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
 * @package       app.Config.xlrstats
 * @since         XLRstats v3.0
 * @version       0.1
 */

// Basic leagues
Configure::write('league', array(
	1 => array('League.skill', 1400, 9999999, 'Expert League', 'Compete with the best of the best, these are the top players with skills over 1400 points! Fight your way up and beat the best!', '#b94a48'),
	2 => array('League.skill', 1250, 1400, 'Premier League', 'The League of well skilled players. Runners up and long time steady players is what this league is all about.', '#f89406'),
	3 => array('League.skill', 1100, 1250, 'Major League', 'Train your skills and move your way up along the ladder. This league is your ticket to the next league, keep it up soldier!', '#3a87ad'),
	4 => array('League.skill', 0, 1100, 'Bootcamp League', 'Just entering the arena, or having a far too good time with your friends? This is motivation league, get your act together and move up soldier!', '#468847'),
	5 => array('Player.connections', 0, 20, 'Newby Leaderboard', 'Fresh and green! This is a Leaderboard with all newcomers on our server. Bite through it buddy, you will be competing for the real thing soon!'),
	6 => array('Player.connections', 100, 99999999, 'Veteran Leaderboard', 'The old chaps and long time players Leaderboard. These are the real troopers, the ones that come back time after time, battle after battle...'),
	7 => array('Player.group_bits', 2, 128, 'Regulars Leaderboard', 'These are the ones that earned their stripes on our servers, know how to work as a team, assist their mates when in need. The respected ones!'),
	8 => array('Player.group_bits', 16, 128, 'Admins Leaderboard', 'Admins, those who watch over you, pay their dues and make this server the place to be. You gotta respect these soldiers, because they outrank you on B3.'),
	)
);
