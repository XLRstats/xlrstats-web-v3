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

echo '<h3>Leagues: </h3><p>';
echo '<ol>';
foreach (Configure::read('league') as $id => $league):
	echo '<li>' . $this->Html->link($league[3], array(
			'controller'	=> 'leagues', 'action' => 'view', 'server' => Configure::read('server_id'), $id
		)
	) . '</li>';
endforeach;
echo '</ol></p>';
