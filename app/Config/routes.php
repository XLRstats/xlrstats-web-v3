<?php
/**
 * Routes configuration
 *
 * In this file, you set up routes to your controllers and their actions.
 * Routes are very important mechanism that allows you to freely connect
 * different urls to chosen controllers and their actions (functions).
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Config
 * @since         CakePHP(tm) v 0.2.9
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
/**
 *  Extensions to parse
 */
	Router::parseExtensions('rss', 'json');

  $serverRegex = '[0-9]+';

/**
 * Installer
 *
 */
  if ((!file_exists(APP . 'Config' . DS . 'database.php') || !file_exists(APP . 'Config' . DS . 'email.php') || !file_exists(APP . 'Config' . DS . 'install')) && Configure::read('Installer.enable')) {
  	Router::connect('/', array('controller' => 'install'));
  	Router::connect('/:anything', array('controller' => 'install'), array('anything' => '(?!install).*'));
  } else {
  	Router::connect('/:server', Configure::read('Route.default'), array('server' => $serverRegex));
  	Router::connect('/', Configure::read('Route.default'));
  }

/**
 * ...and connect the rest of 'Pages' controller's urls.
 */
	Router::connect('/:server/pages/*', array('controller' => 'pages', 'action' => 'display'), array('server' => $serverRegex));
	Router::connect('/pages/*', array('controller' => 'pages', 'action' => 'display'));

/**
 * Load all plugin routes.  See the CakePlugin documentation on 
 * how to customize the loading of plugin routes.
 */
	CakePlugin::routes();

/**
 * Routes for XLRstats pages
 */
	Router::connect('/config/*', array('controller' => 'pages', 'action' => 'display', 'config'));
	Router::connect('/tos/*', array('controller' => 'pages', 'action' => 'display', 'tos'));
	Router::connect('/about/*', array('controller' => 'pages', 'action' => 'display', 'about', 'index'));
	Router::connect('/help/*', array('controller' => 'pages', 'action' => 'display', 'help'));

	Router::connect('/:server/:controller', array('action' => 'index'), array('server' => $serverRegex));
	Router::connect('/:server/:controller/:action/*', array(), array('server' => $serverRegex));

/**
 * Load the CakePHP default routes. Remove this if you do not want to use
 * the built-in default routes.
 */
require CAKE . 'Config' . DS . 'routes.php';

