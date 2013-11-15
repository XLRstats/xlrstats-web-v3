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
 * @package       app.View.Feeds
 * @since         XLRstats v3.0
 * @version       0.1
 */
?>

<h3><?php echo $this->Html->Link($feedInfo['title'], $feedInfo['link'], array(
	'title'		=>	__('Click to visit website'),
	'target'	=>	'_blank',
))?></h3>
<div><?php echo $feedInfo['description'] ?></div>

<?php

foreach ($data as $feedItem) {
	//pr($feedItem);
	echo '<p>' ;
	echo '<h5>' . $feedItem['title'] . '</h5>';
	echo '(Date: ' . $feedItem['pubDate'] . ')';
	echo '<div>' . $feedItem['description'] . '</div>';
	echo '<div> [' . $this->Html->Link(__('Read more'), $feedItem['link'], array(
		'title'		=>	__('Click to read more'),
		'target'	=>	'_blank',
		)
	) . '] [' . $this->Html->Link('Comment', $feedItem['comments'], array(
		'title'		=>	__('Click to comment'),
		'target'	=>	'_blank',
		)
	) . ' ]</div>';
	echo '</p>';
}
