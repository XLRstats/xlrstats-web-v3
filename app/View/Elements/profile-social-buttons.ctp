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

//pr($userDetails);

// test if there are any details for this user worth setting up the button for...
$c = 0;
foreach ($userDetails as $k => $v) {
	if ($k != 'User.clan_tag' && $k != 'email' && $k != 'User.playertoken' && !empty($v)) {
		$c++;
	}
}
if ($c == 0) {
	// nothing to share...
	return false;
}

$icons = array();
$icons['User.public_email'] = '<a href="mailto:%s"><i class="icon-fixed-width icon-envelope"></i> Email me</a>';
$icons['User.origin_account'] = '<a href="https://www.google.nl/search?q=site:battlefield.com+%s" target="_blank"><i class="icon-fixed-width icon-search"></i> Find me on Origin</a>';
$icons['User.steam_account'] = '<a href="http://steamcommunity.com/id/%s/" target="_blank"><i class="icon-fixed-width icon-external-link"></i> Find me on Steam</a>';
$icons['User.facebook'] = '<a href="https://www.facebook.com/%s" target="_blank"><i class="icon-fixed-width icon-facebook"></i> Facebook</a>';
$icons['User.googleplus'] = '<a href="https://profiles.google.com/%s/about" target="_blank"><i class="icon-fixed-width icon-google-plus"></i> Google+</a>';
$icons['User.twitter'] = '<a href="https://twitter.com/%s" target="_blank"><i class="icon-fixed-width icon-twitter"></i> Twitter</a>';

?>
<div class="btn-group">
	<a class="btn" href="#"><i class="icon-comments"></i> Contact</a>
	<a class="btn dropdown-toggle" data-toggle="dropdown" href="#">
		<span class="icon-caret-down"></span></a>
	<ul class="dropdown-menu">
		<?php
		$c = 0;
		foreach ($userDetails as $k => $v) {
			if ($k != 'User.clan_tag' && $k != 'email' && $k != 'User.playertoken' && !empty($v)) {
				$c++;
				$d = sprintf($icons[$k], $v);
				echo '<li>' . $d . '</li>';
			}
		}
		if ($c == 0) {
			echo '<li><a href="#"><i class="icon-frown"></i> ' . __('Not Available') . '</a></li>';
		}
		?>
	</ul>
</div>
