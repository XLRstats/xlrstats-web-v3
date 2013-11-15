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

Configure::write('globals', array(

		'advanced' => array(
			/** Set to true if servers should be filtered based on servergroup with the same name  as the current subdomain */
			'subDomains' => false,
			/** User Groups to grant group based rights */
			'serverGroupAdmins' => array(
				'Admin',
			),
		),

		/**
		 * RSS (xml) feeds to show in elements
		 * 'feedidentifier' => array('feedurl', __('feeddescriptor'))
		 */
		'feed' => array(
			'news' => array('http://forum.bigbrotherbot.net/website-news/?type=rss;action=.xml', __('B3 News')),
			'xlrstats' => array('http://forum.bigbrotherbot.net/xlrstats/?type=rss;action=.xml', __('B3 Xlrstats Forum')),
		),
	)
);
