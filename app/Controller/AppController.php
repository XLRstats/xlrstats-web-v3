<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under the Creative Commons BY-NC-SA 3.0 License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2012, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 * @license       Creative Commons BY-NC-SA 3.0 License (http://creativecommons.org/licenses/by-nc-sa/3.0/)
 *
 * Here is the Doxygen Mainpage Content:
 *
 * \mainpage
 *
 * \section intro_sec Introduction
 *
 * Here is the developer documentation of the Models, Controllers and Views of the XLRstats webfront v3.
 * This docs also cover the dashboard plugin that is part of the core app.
 *
 * \section installation_sec Installation
 *
 * Installation instructions can be found at www.xlrstats.com
 *
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package       app.Controller
 * @link http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

/**
 * Models
 *
 * @var array
 */
	public $uses = array(
		'Dashboard.Option',
		'Dashboard.Server',
		'Dashboard.ServerOption',
		'Dashboard.AppUser',
	);

/**
 * Helpers
 *
 * @var array
 */
	public $helpers = array(
		'XlrFunctions',
		'TwitterBootstrap.TwitterBootstrap',
		'Gravatar.Gravatar'
	);

/**
 * Components
 *
 * @var array
 */
	public $components = array(
		'XlrFunctions',
		'DebugKit.Toolbar' => array(
			'panels' => array('ClearCache.ClearCache')
		),
		'Users.RememberMe',
		'Session',
		'Cookie',
		'Acl',
		'Auth'
	);

/**
 * An array of user data
 *
 * @var array
 */
	public $user = array();

	//-------------------------------------------------------------------

/**
 * Called before the controller action.
 */
	public function beforeFilter() {
		/* LOAD ORDER IS IMPORTANT!!! */
		/* Are we in a subdomain? */
		$this->getSubdomain();
		/* Load default options */
		$this->loadConfigOptions();
		/* Fetch user information */
		$this->getUserData();
		/* Before we do anything else, get the available servers and the database id to determine which server we are dealing with */
		$this->loadB3Servers();
		$this->getDatabaseId();
		/* Now we have a server id we load the rest */
		$this->loadServerConfigOptions();
		$this->loadGameConfig();
		$this->getServerGroupId();
		$this->checkAuthorization();
		$this->checkLicense();
		/* We check authorization here to display dashboard link in login menu or not */
		$this->isAuthorized();
		/* Check if we need to disable/enable Caching for this controller. */
		$this->checkCaching();

		parent::beforeFilter();

		if (Configure::read('debug') < 2) {
			$this->Components->unload('DebugKit.Toolbar');
		}

		$this->theme = Configure::read('options.theme');
		$this->RememberMe->restoreLoginFromCookie();

		$this->Auth->loginAction = array('admin' => false, 'plugin' => 'dashboard', 'controller' => 'app_users', 'action' => 'login');
		$this->Auth->authError = __('Did you really think you are allowed to see that?');
		$this->Auth->unauthorizedRedirect = array('admin' => false, 'plugin' => null, 'controller' => 'pages', 'action' => 'display', 'server' => Configure::read('server_id'));
	}

	//-------------------------------------------------------------------

/**
 * Called after the controller action is run, but before the view is rendered.
 */
	public function beforeRender() {
		parent::beforeRender();
		/* To make the $user array available in view files... */
		$this->set('user', $this->user);
	}

	//-------------------------------------------------------------------

/**
 * Checks caching for defined plugins and controllers
 */
	public function checkCaching() {
		/* Plugins that shouldn't be cached */
		$plugins = array();
		/* Controllers that shouldn't be cached */
		$controllers = array('player_stats');

		if (in_array($this->request->plugin, $plugins) || in_array($this->request->controller, $controllers)) {
			Configure::write('Cache.disable', true);
			$this->response->disableCache();
			$this->set('isCaching', false);
		} else {
			$this->set('isCaching', true);
		}
	}

	//-------------------------------------------------------------------

/**
 * Check if we are in a subdomain
 * @return string url
 * @return null
 */
	public function getSubdomain() {
		$url = explode('.', $_SERVER['HTTP_HOST'], 3); //creates the various parts
		if (count($url) <= 2 OR $url[0] === 'www') {
			Configure::write('server.subdomain', 'www');
		} else {
			Configure::write('server.subdomain', $url[0]);
		}
	}

	//-------------------------------------------------------------------

/**
 * Determines which B3 database we need to access.
 * See AppModel::__construct() for database selection logic.
 *
 * First check if we have a server parameter in our url, if so save it to config and session
 * If we have multiple controllers after our initial call, we need our session data to use the proper DB
 * Last, if no server is known, and no session data is available, fall back to our first available server
 */
	public function getDatabaseId() {
		if (isset($this->request->server)) {
			$this->Session->write('server_id', $this->request->server);
			Configure::write('server_id', $this->request->server);
			//debug('server parameter found! ' . $this->request->server);
		} elseif ($this->Session->check('server_id')) {
			Configure::write('server_id', $this->Session->read('server_id'));
		} else {
			Configure::write('server_id', Configure::read('first_server_id'));
			//debug('server parameter NOT found!');
		}
	}

	//-------------------------------------------------------------------

/**
 * Loads Configuration options
 */
	public function loadConfigOptions() {
		if (isset($this->Option) && !empty($this->Option->table) && !Configure::read('loaded.options')) {
			$this->Option->load();						// Load global options
			Configure::write('loaded.options', true);	// Reduce Queries if options are already loaded
		}
	}

	//-------------------------------------------------------------------

/**
 * Loads Server specific Configuration options
 */
	public function loadServerConfigOptions() {
		if (isset($this->ServerOption) && !empty($this->ServerOption->table) && !Configure::read('loaded.serveroptions')) {
			$this->ServerOption->load();					// Override server specific options
			Configure::write('loaded.serveroptions', true);	// Reduce Queries if options are already loaded
		}
	}

	//-------------------------------------------------------------------

/**
 * Loads information for all B3 servers
 */
	public function loadB3Servers() {
		if (isset($this->Server) && !empty($this->Server->table) && !Configure::read('loaded.servers')) {
			$user = $this->user;
			$request = $this->request;
			$this->Server->getB3ServerData($user, $request);
			// Reduce Queries if servers are already loaded
			Configure::write('loaded.servers', true);
		}
	}

	//-------------------------------------------------------------------

/**
 * Loads game config file
 */
	public function loadGameConfig() {
		Configure::load('games' . DS . 'default');
		$serverID = Configure::read('server_id');
		$gameName = Configure::read('servers.' . $serverID . '.gamename');

		try {
			Configure::load('games' . DS . $gameName);
		} catch (Exception $e) {
			//debug('ERROR: ' .  $e->getMessage());
			/* This must be a server without a valid game config file - New Game? */
			$this->Session->setFlash(__('This game is NOT supported!'), null, null, 'info');
			Configure::write('servers.' . $serverID . '.gamename', 'default');
		}
	}

	//-------------------------------------------------------------------

/**
 * Controls the Authorization using cakePHP's built-in ActionsAuthorize and ControllerAuthorize handlers.
 *
 * ActionsAuthorize Uses the AclComponent to check for permissions on an action level.
 * ControllerAuthorize Calls isAuthorized() on the active controller, and uses the return of that to
 * authorize a user.
 *
 * We use three basic built-in user groups in our database;
 * - Super Admin : Has root access system wide.
 * - Admin       : Has administrative access to users and server options management within the server group
 *                 he is assigned. An admin can be assigned to one or more server groups and belongs to
 *                 serverGroupAdmins array configured in global configuration.
 * - User        : Has access only to public pages.
 */
	public function checkAuthorization() {
		// First authorization check is handled by ActionsAuthorize
		$this->Auth->authorize = array(
			'Actions' => array(
				'actionPath' => 'controllers/',
				'userModel' => 'AppUser',
			)
		);
		// We allow access to all public (non-admin) pages
		if ($this->params['prefix'] != 'admin') {
			$this->Auth->allow();
		} else {
			$serverGroupAdmins = Configure::read('globals.advanced.serverGroupAdmins');
			/*
			 * If the user is part of serverGroupAdmins, hand the authorization to ControllerAuthorize which calls
			 * isAuthorized() action to check authorization.
             */
			if (isset($this->user['Group']['name']) && in_array($this->user['Group']['name'], $serverGroupAdmins)) {
				$this->Auth->authorize = array('Controller');
				/*
				 * If the user is authorized, i.e. if the admin has access rights in the current server group,
				 * we check the access rights finally again using ActionsAuthorize to make sure that the user has a
				 * limited admin access as we set in acos_aros table.
				 */
				if ($this->isAuthorized()) {
					$this->Auth->authorize = array(
						'Actions' => array(
							'actionPath' => 'controllers/',
							'userModel' => 'AppUser',
						)
					);
				}
			}
		}
	}

	//-------------------------------------------------------------------

/**
 * Sets $user variable that holds an array of user information
 * to use in controllers and views.
 */
	public function getUserData() {
		if ($this->Auth->loggedIn()) {
			$this->user = $this->AppUser->getUserData($this->Auth->user('id'));
		}
		$this->set('user', $this->user);
	}

	//-------------------------------------------------------------------

/**
 * Writes current server_group_id to a session var
 */
	public function getServerGroupId() {
		$serverID = Configure::read('server_id');
		$this->Session->write('server_group_id', Configure::read('servers.' . $serverID . '.server_group_id'));
		return true;
	}

	//-------------------------------------------------------------------

/**
 * Used to check if a serverGroupAdmin is authorized to access a certain server group
 */
	public function isAuthorized() {
		$currentServerGroupId = $this->Session->read('server_group_id');
		$userServerGroupIds = array();

		if (isset($this->user['ServerGroup'])) {
			foreach ($this->user['ServerGroup'] as $serverGroup) {
				$userServerGroupIds[] = $serverGroup['id'];
			}
		}
		//pr($userServerGroupIds);
		if (isset($this->user['AppUser']['group_id'])) {
			$groupID = $this->user['AppUser']['group_id'];
		} else {
			$groupID = null;
		}

		if (in_array($currentServerGroupId, $userServerGroupIds) || $groupID == 1) {
			$this->set('isAuthorized', true);
			return true;
		}
		$this->set('isAuthorized', false);
		return false;
	}

	//-------------------------------------------------------------------

/**
 * Checks license
 */
	public function checkLicense() {
		$invCookie = $this->Cookie->read('license_invalid');
		if (!$this->XlrFunctions->isLicenseValid() && !isset($invCookie)) {
			$this->Session->setFlash(__('This is an unlicensed version. Please visit <a href="http://www.xlrstats.com/pages/xlrstats.com/licensing">the XLRstats licensing page</a> for more info.'), null, null, 'error');
			$this->Cookie->write('license_invalid', 'shown', false, '1 day');
		}
	}

	//-------------------------------------------------------------------

/**
 * Returns server name
 *
 * @param null $serverID
 * @return mixed
 */
	public function getServerName($serverID = null) {
		if ($serverID == null) {
			$serverID = Configure::read('server_id');
		}
		$serverName = $this->Server->serverName($serverID);

		if ($this->request->is('requested')) {
			return $serverName;
		}
		return $serverName;
	}

}
