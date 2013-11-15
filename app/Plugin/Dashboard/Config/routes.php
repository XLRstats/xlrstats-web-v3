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
 * @package       app.Plugin.Dashboard.Config
 * @since         XLRstats v3.0
 * @version       0.1
 */

/**
 * Routes for AppUsersController
 *
 * AppUsersController extends Users Plugin's UsersController. So routes below are for Users plugin.
 */
Router::connect('/dashboard/users', array('admin' => true, 'prefix' => 'admin', 'plugin' => 'dashboard', 'controller' => 'app_users'));
Router::connect('/dashboard/users/:action/*', array('admin' => true, 'prefix' => 'admin', 'plugin' => 'dashboard', 'controller' => 'app_users'));
Router::connect('/users', array('plugin' => 'dashboard', 'controller' => 'app_users'));
Router::connect('/users/index/*', array('plugin' => 'dashboard', 'controller' => 'app_users'));
Router::connect('/users/:action/*', array('plugin' => 'dashboard', 'controller' => 'app_users'));
Router::connect('/users/users/:action/*', array('plugin' => 'dashboard', 'controller' => 'app_users'));
Router::connect('/login/*', array('plugin' => 'dashboard', 'controller' => 'app_users', 'action' => 'login'));
Router::connect('/logout/*', array('plugin' => 'dashboard', 'controller' => 'app_users', 'action' => 'logout'));
Router::connect('/register/*', array('plugin' => 'dashboard', 'controller' => 'app_users', 'action' => 'add'));

$serverRegex = '[0-9]+';

/**
 * Routes for Admin Dashboard
 */
Router::connect('/:server/dashboard', array('admin' => true, 'prefix' => 'admin', 'plugin' => 'dashboard', 'controller' => 'dashboard'), array('server' => $serverRegex));
Router::connect('/dashboard', array('admin' => true, 'prefix' => 'admin', 'plugin' => 'dashboard', 'controller' => 'dashboard'));

Router::connect('/:server/dashboard/:controller', array('admin' => true, 'prefix' => 'admin', 'plugin' => 'dashboard', 'action' => 'index'), array('server' => $serverRegex));
Router::connect('/dashboard/:controller', array('admin' => true, 'prefix' => 'admin', 'plugin' => 'dashboard', 'action' => 'index'));

Router::connect('/:server/dashboard/:controller/:action/*', array('admin' => true, 'prefix' => 'admin', 'plugin' => 'dashboard'), array('server' => $serverRegex));
Router::connect('/dashboard/:controller/:action/*', array('admin' => true, 'prefix' => 'admin', 'plugin' => 'dashboard'));

