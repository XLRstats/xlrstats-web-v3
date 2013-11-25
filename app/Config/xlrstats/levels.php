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

Configure::write('level', array(
	100	=> array(128, 'Super Admin'),
	80	=> array(64, 'Senior Admin'),
	60	=> array(32, 'Full Admin'),
	40	=> array(16, 'Admin'),
	20	=> array(8, 'Moderator'),
	2	=> array(2, 'Regular'),
	1	=> array(1, 'User'),
	0	=> array(0, 'Guest'),
	)
);
