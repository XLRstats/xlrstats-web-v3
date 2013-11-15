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
 * @package       app.Console.Command
 * @since         XLRstats v3.0
 * @version       0.1
 */

class CronShell extends  AppShell {

	/**
	 * Invoke using shell ie:
	 *
	 * /var/www/xlrstats/app/Console/cake cron
	 * C:\wamp\www\cakephp\app\Console\cake cron
	 */
	public function main() {
		$this->out('Start running Cronjobs...');
		$this->generateAwards();
		$this->out('Finished running Cronjobs...');
	}

	/**
	 * Invoke using shell ie:
	 *
	 * /var/www/xlrstats/app/Console/cake cron generateAwards
	 * C:\wamp\www\cakephp\app\Console\cake cron generateAwards
	 */
	public function generateAwards() {
		$this->out('Generating Awards...');
		$this->log('Awards Generated!', 'cron');
	}
}