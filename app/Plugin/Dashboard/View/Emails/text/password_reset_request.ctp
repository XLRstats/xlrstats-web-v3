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
 * @package       app.Plugin.Dashboard.View.Emails.text
 * @since         XLRstats v3.0
 * @version       0.1
 */

echo __('A request to reset your password was sent. To change your password click the link below.');
echo "\n\n";
echo Router::url(array('admin' => false, 'plugin' => 'users', 'controller' => 'users', 'action' => 'reset_password', $token), true);
