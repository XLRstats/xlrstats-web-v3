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

$feed = $this->requestAction('feeds/view_development/development');
$feedInfo = $feed[0];
$data = $feed[1];
?>

<h3><?php echo $feedInfo['title']; ?> (Newest)</h3>

<?php

foreach ($data as $feedItem) {
	echo '<strong><i class="icon-wrench"></i></strong> <small>' . $this->Time->format('r', $feedItem['updated']) . '</small>: ' . $feedItem['title'] . '<br />';
}