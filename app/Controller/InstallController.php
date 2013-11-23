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
 * @package       app.Controller
 * @since         XLRstats v3.0
 * @version       0.1
 */

App::uses('Controller', 'Controller');
App::uses('ClearCache', 'ClearCache.Lib');

class InstallController extends Controller {
	public $name = 'Install';
	public $uses = array();
	public $components = array('Session');
	public $helpers = array('Html', 'Form', 'Number', 'TwitterBootstrap.TwitterBootstrap');
	private $__defaultDbConfig = array(
		'name' => 'default',
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'localhost',
		'login' => 'root',
		'password' => '',
		'database' => 'xlrstats',
		'schema' => null,
		'prefix' => 'xlr_',
		'encoding' => 'UTF8',
		'port' => '3306'
	);
	public $totalInstallSteps = 6;


	/**
	 *
	 */
	public function beforeFilter() {
		$this->layout = 'install';
		Configure::write('installTotalSteps', $this->totalInstallSteps);

		// already installed ?
		if ((file_exists(APP . 'Config' . DS . 'database.php') && file_exists(APP . 'Config' . DS . 'email.php') && file_exists(APP . 'Config' . DS . 'install')) || !Configure::read('Installer.enable')) {
			$this->redirect('/');
		}

		if (!CakeSession::read('Config.language')) {
			Configure::write('Config.language', 'eng');
		}

		@set_time_limit(0);
	}

	/**
	 * Step 0, Select language.
	 *
	 * @return void
	 */
	public function index() {
		$this->clearCache();
		//$this->redirect(array('action' => 'license'));
	}

	/**
	 * Step 0, Select language. ( change this to index() )
	 *
	 * @return void
	 */
	public function language() {
		App::uses('I18n', 'I18n');

		if (isset($this->params['named']['lang']) && preg_match('/^[a-z]{3}$/', $this->params['named']['lang'])) {
			CakeSession::write('Config.language', $this->params['named']['lang']);
			$this->redirect(array('action' => 'license'));
		}

		$Folder = new Folder(ROOT . DS . 'Locale' . DS);
		$langs = $Folder->read(true, false);
		$languages = array();

		foreach ($langs[0] as $l) {
			$file = ROOT . DS . 'Locale' . DS . $l . DS . 'LC_MESSAGES' . DS . 'default.po';

			if ($l != 'eng' && file_exists($file)) {
				$languages[$l] = array(
					'welcome' => I18n::translate('Welcome to QuickApps CMS', null, null, 6, null, $l),
					'action' => I18n::translate('Click here to install in English', null, null, 6, null, $l)
				);
			}
		}

		if (empty($languages)) {
			CakeSession::write('Config.language', 'eng');
			$this->redirect(array('action' => 'license'));
		}

		$this->set('languages', $languages);
	}

	/**
	 * Step 1, License agreement
	 *
	 * @return void
	 */
	public function license() {
		$_step = 1;
		Configure::write('installStep', $_step);
		Configure::write('installPercentage', ($_step / $this->totalInstallSteps * 100));

		if (isset($this->data['License'])) {
			$this->__stepSuccess('license');
			$this->redirect(array('action' => 'server_test'));
		}
	}

	/**
	 * Step 2, Server test
	 *
	 * @return void
	 */
	public function server_test() {
		$_step = 2;
		Configure::write('installStep', $_step);
		Configure::write('installPercentage', ($_step / $this->totalInstallSteps * 100));

		if (!$this->__stepSuccess('license', true)) {
			$this->redirect(array('action' => 'index'));
		}

		if (!empty($this->data['Test'])) {
			$this->__stepSuccess('server_test');
			$this->redirect(array('action' => 'database'));
		}

		$tests = array(
			'php' => array(
				'test' => version_compare(PHP_VERSION, '5.3.0', '>='),
				'msg' => __('Your php version is not supported. check that your version is 5.3.0 or newer.')
			),
			'mysql' => array(
				'test' => (extension_loaded('mysql') || extension_loaded('mysqli')),
				'msg' => __('MySQL extension is not loaded on your server.')
			),
			'no_safe_mode' => array(
				'test' => (ini_get('safe_mode') == false || ini_get('safe_mode') == '' || strtolower(ini_get('safe_mode')) == 'off'),
				'msg' => __('Your server has SafeMode on, please turn it off before continuing.')
			),
			'curl_exists' => array(
				'test' => (function_exists('curl_version') || ini_get('allow_url_fopen')),
				'msg' => __('You must enable the cURL extension or the "allow_url_fopen" in your PHP ini file.')
			),
			'tmp_writable' => array(
				'test' => is_writable(TMP),
				'msg' => __('tmp folder is not writable.')
			),
			'cache_writable' => array(
				'test' => is_writable(TMP . 'cache'),
				'msg' => __('tmp/cache folder is not writable.')
			),
//			'installer_writable' => array(
//				'test' => is_writable(TMP . 'cache' . DS . 'installer'),
//				'msg' => __('tmp/cache/installer folder is not writable.')
//			),
			'models_writable' => array(
				'test' => is_writable(TMP . 'cache' . DS . 'models'),
				'msg' => __('tmp/cache/models folder is not writable.')
			),
			'persistent_writable' => array(
				'test' => is_writable(TMP . 'cache' . DS . 'persistent'),
				'msg' => __('tmp/cache/persistent folder is not writable.')
			),
//			'i18n_writable' => array(
//				'test' => is_writable(TMP . 'cache' . DS . 'i18n'),
//				'msg' => __('tmp/cache/i18n folder is not writable.')
//			),
			'Config_writable' => array(
				'test' => is_writable(APP . 'Config'),
				'msg' => __('app/Config folder is not writable.')
			),
//			'core.php_writable' => array(
//				'test' => is_writable(APP . 'Config' . DS . 'core.php'),
//				'msg' => __('app/Config/core.php file is not writable.')
//			)
		);

		$results = array_unique(Hash::extract($tests, '{s}.test'));

		if (!(count($results) === 1 && $results[0] === true)) {
			$this->set('success', false);
			$this->set('tests', $tests);
		} else {
			$this->set('success', true);
		}
	}

	/**
	 * Step 3, Database
	 *
	 * @param bool $skip
	 * @return void
	 */
	public function database($skip = false) {
		$_step = 3;
		Configure::write('installStep', $_step);
		Configure::write('installPercentage', ($_step / $this->totalInstallSteps * 100));

		if (!$this->__stepSuccess(array('license', 'server_test'), true)) {
			$this->redirect(array('action' => 'index'));
		}

		$config_exists = file_exists(APP . 'Config' . DS . 'database.php');

		$this->set('config_exists', $config_exists);

		if (!empty($this->data) || ($config_exists && $skip)) {
			App::uses('ConnectionManager', 'Model');
			$this->clearCache();

			$continue_email = true;
			$continue_db = true;

			if (!$config_exists) {
				$data = $this->data;
				$data['datasource'] = 'Database/Mysql';
				$data['persistent'] = false;
				$data = Hash::merge($this->__defaultDbConfig, $data);
				$continue_email = $this->__writeEmailFile($data);
				$continue_db = $this->__writeDatabaseFile($data);
			}

			if (!$continue_email) {
				$this->Session->setFlash(__('Could not write email.php file! You will not be able to send user verification emails.'),null, null, 'error');
			}

			if ($continue_db) {
				try {
					$db = ConnectionManager::getDataSource('default');
					$data = $db->config;
				} catch (Exception $e) {
					$this->Session->setFlash(__('Could not connect to database.'),null, null, 'error');

					if (!$config_exists) {
						$this->__removeDatabaseFile();
					}

					return;
				}

				App::uses('Model', 'Model');
				App::uses('CakeSchema', 'Model');

				$schema = new CakeSchema(array('name' => 'Xlrstats', 'file' => 'xlrstats.php'));
				$schema = $schema->load();
				$execute = array();
				$sources = $db->listSources();

				foreach (array_keys($schema->tables) as $table) {
					if (in_array($data['prefix'] . $table, $sources)) {
						$this->Session->setFlash(__('A previous installation of XLRstats already exists, please empty your database!'),null, null, 'error');

						if (!$config_exists) {
							$this->__removeDatabaseFile();
						}

						return;
					}
				}

				foreach ($schema->tables as $table => $fields) {
					$create = $db->createSchema($schema, $table);
					$execute[] = $db->execute($create);

					$db->reconnect();
				}

				$dataPath = APP . 'Config' . DS . 'Schema' . DS . 'data' . DS;
				$modelDataObjects = App::objects('class', $dataPath, false);

				foreach ($modelDataObjects as $model) {
					include_once $dataPath . $model . '.php';

					$model = new $model;
					$Model = new Model(
						array(
							'name' => get_class($model),
							'table' => $model->table,
							'ds' => 'default'
						)
					);
					$Model->cacheSources = false;

					if (isset($model->records) && !empty($model->records)) {
						foreach ($model->records as $record) {
							$Model->create($record);
							$execute[] = $Model->save();
						}
					}
				}

				if (!in_array(false, array_values($execute), true)) {
					App::uses('Security', 'Utility');
					App::load('Security');

					$salt = Security::generateAuthKey();
					$seed = mt_rand() . mt_rand();
					$file = APP . DS . 'Config' . DS . 'security.php';
					$contents = "<?php\n";
					$contents .= "Configure::write('Security.salt', '" . $salt . "');\n";
					$contents .= "Configure::write('Security.cipherSeed', '" . $seed . "');\n";
					file_put_contents($file, $contents);

					Cache::write('XlrInstallDatabase', 'success'); // fix: Security keys change
					//$this->Session->write('XlrInstallDatabase', 'success');
					$this->__stepSuccess('database');
					$this->redirect(array('action' => 'user_account'));
				} else {
					$this->Session->setFlash(__('Could not dump database.'),null, null, 'error');
				}
			} else {
				$this->Session->setFlash(__('Could not write database.php file.'),null, null, 'error');
			}
		}
	}

	/**
	 * Step 4, User account
	 *
	 * @return void
	 */
	public function user_account() {
		$_step = 4;
		Configure::write('installStep', $_step);
		Configure::write('installPercentage', ($_step / $this->totalInstallSteps * 100));

		if (Cache::read('XlrInstallDatabase') == 'success' ||
			$this->__stepSuccess(array('license', 'server_test', 'database'), true)
		) {
			$this->__stepSuccess('license');
			$this->__stepSuccess('server_test');
			$this->__stepSuccess('database');

			Cache::delete('XlrInstallDatabase');
		} else {
			$this->redirect(array('action' => 'index'));
		}

		if (isset($this->data['User'])) {
			$this->loadModel('Users.User');
			$data = $this->data;
			$data['User']['slug'] = strtolower($data['User']['username']);
			$data['User']['email_verified'] = 1;
			$data['User']['tos'] = 1;
			$data['User']['active'] = 1;
			$data['User']['group_id'] = 1;
			$data['User']['role'] = 'registered';

			if ($this->User->add($data)) {
				$this->__stepSuccess('user_account');
				$this->redirect(array('action' => 'first_server'));
			} else {
				$errors = '';

				foreach ($this->User->validationErrors as $field => $error) {
					$errors .= "<b>{$field}:</b> {$error[0]}<br/>";
				}

				$this->Session->setFlash(
					'<b>' . __('Could not create new user, please try again.') . "</b><br/>" .
					$errors
					,null, null, 'error');
			}
		}
	}

	/**
	 * Step 5, First server
	 *
	 * @return void
	 */
	public function first_server() {
		$_step = 5;
		Configure::write('installStep', $_step);
		Configure::write('installPercentage', ($_step / $this->totalInstallSteps * 100));

		if (!$this->__stepSuccess(array('license', 'server_test', 'database', 'user_account'), true)) {
			$this->redirect(array('action' => 'index'));
		}
		if (isset($this->data['Server'])) {
			$this->loadModel('Dashboard.Server');
			$data = $this->data;

			if ($this->Server->save($data)) {
				$this->__stepSuccess('first_server');
				$this->redirect(array('action' => 'finish'));
			} else {
				$errors = '';

				foreach ($this->Server->validationErrors as $field => $error) {
					$errors .= "<b>{$field}:</b> {$error[0]}<br/>";
				}

				$this->Session->setFlash(
					'<b>' . __('Could not create new user, please try again.') . "</b><br/>" .
					$errors
					,null, null, 'error');
			}
		}
	}

	/**
	 * Step 6, Finish
	 *
	 * @return void
	 */
	public function finish() {
		$_step = 6;
		Configure::write('installStep', $_step);
		Configure::write('installPercentage', ($_step / $this->totalInstallSteps * 100));

		if (!$this->__stepSuccess(array('license', 'server_test', 'database', 'user_account', 'first_server'), true)) {
			$this->redirect(array('action' => 'index'));
		}

		App::import('Utility', 'File');

		$file = new File(APP . 'Config' . DS . 'install', true);

		if ($file->write(time())) {
			$this->__stepSuccess('finish');
			$this->Session->delete('XlrInstall');
			//CakeSession::write('Config.language', 'eng');
			$this->clearCache();
			$this->Session->setFlash(__("Installation successful! You're about to login to the administration dashboard. PLease enter your XLRstats key in the 'Options' section first."),null, null, 'success');
			$this->redirect(array('plugin' => 'dashboard', 'action' => 'index'));
		} else {
			$this->Session->setFlash(__("Could not write 'install' file. Check file/folder permissions and refresh this page."),null, null, 'error');

		}
	}

	/**
	 * @param $data
	 * @return bool
	 */
	private function __writeDatabaseFile($data) {
		App::import('Utility', 'File');

		if (!copy(APP . 'Config' . DS . 'database.php.install', APP . 'Config' . DS . 'database.php')) {
			return false;
		}

		$file = new File(APP . 'Config' . DS . 'database.php', true);
		$dbSettings = $file->read();
		$dbSettings = str_replace(
			array(
				'{db_datasource}',
				'{db_persistent}',
				'{db_host}',
				'{db_login}',
				'{db_password}',
				'{db_database}',
				'{db_prefix}'
			),
			array(
				$data['datasource'],
				($data['persistent'] ? 'true' : 'false'),
				$data['host'],
				$data['login'],
				$data['password'],
				$data['database'],
				$data['prefix']
			),
			$dbSettings
		);

		$r = $file->write($dbSettings);
		$file->close();

		return $r;
	}

	/**
	 *
	 */
	private function __removeDatabaseFile() {
		@unlink(APP . DS . 'Config' . DS . 'database.php');
	}

	/**
	 * @param $data
	 * @return bool
	 */
	private function __writeEmailFile($data) {
		App::import('Utility', 'File');

		if (!copy(APP . 'Config' . DS . 'email.php.install', APP . 'Config' . DS . 'email.php')) {
			return false;
		}

		$file = new File(APP . 'Config' . DS . 'email.php', true);
		$emailSettings = $file->read();
		$emailSettings = str_replace(
			array(
				'{email_from}'
			),
			array(
				$data['email_from']
			),
			$emailSettings
		);

		$r = $file->write($emailSettings);
		$file->close();

		return $r;
	}

	/**
	 *
	 */
	private function __removeEmailFile() {
		@unlink(APP . DS . 'Config' . DS . 'email.php');
	}

	/**
	 * @param $step
	 * @param bool $check
	 * @return bool
	 */
	private function __stepSuccess($step, $check = false) {
		//pr($this->Session->read("XlrInstall"));
		if (!$check) {
			return $this->Session->write("XlrInstall.{$step}", 'success');
		}

		if (is_array($step)) {
			foreach ($step as $s) {
				if (!$this->Session->check("XlrInstall.{$s}")) {
					return false;
				}
			}

			return true;
		} else {
			return $this->Session->check("XlrInstall.{$step}");
		}

		return false;
	}

	/**
	 *
	 */
	private function clearCache () {
		$ClearCache = new ClearCache();
		error_reporting(0);
		$ClearCache->run();
	}
}
