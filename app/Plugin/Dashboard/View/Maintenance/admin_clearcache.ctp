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
 * @package       app.Plugin.Dashboard.View.Maintenance
 * @since         XLRstats v3.0
 * @version       0.1
 */

App::uses('ClearCache', 'ClearCache.Lib');

Configure::write('Cache.disable', true);
$ClearCache = new ClearCache();

error_reporting(0);
$output = $ClearCache->run();

echo '<h3>Deleted cache files:</h3>';
pr($output['files']['deleted']);
echo '<h3>Could not delete:</h3>';
pr($output['files']['error']);
echo '<h3>Cleared cache engines:</h3>';
pr($output['engines']);
