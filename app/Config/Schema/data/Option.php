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
 * @package       app.Config.Schema.data
 * @since         XLRstats v3.0
 * @version       0.1
 */

class Option {
	public $table = 'options';
	public $records = array(
		array('group' => 'website', 'name' => 'license', 'value' => '', 'locked' => '1', 'description' => 'Your XLRstats license key'),
		array('group' => 'server', 'name' => 'disqus_shortname', 'value' => '', 'locked' => '0', 'description' => '<b>[Empty]</b> Your <b>www.disqus.com shortname</b> to allow comments on several places'),
		array('group' => 'server', 'name' => 'theme', 'value' => 'default', 'locked' => '0', 'description' => '<b>[default]</b> Theme'),
		array('group' => 'server', 'name' => 'min_connections', 'value' => '10', 'locked' => '0', 'description' => '<b>[10]</b> Minimum number of connections before showing up in a league'),
		array('group' => 'server', 'name' => 'min_kills', 'value' => '100', 'locked' => '0', 'description' => '<b>[100]</b> Minimum number of kills before showing up in a league'),
		array('group' => 'server', 'name' => 'max_days', 'value' => '60', 'locked' => '0', 'description' => '<b>[60]</b> Maximum number of days before a player is considered M.I.A.'),
		array('group' => 'server', 'name' => 'hide_banned', 'value' => '1', 'locked' => '0', 'description' => '<b>[Yes]</b> Hide banned players from the leagues?'),
		array('group' => 'website', 'name' => 'show_banlist', 'value' => '1', 'locked' => '0', 'description' => '<b>[Yes]</b> Show Bans or Penalties '),
		array('group' => 'website', 'name' => 'show_bans_only', 'value' => '0', 'locked' => '0', 'description' => '<b>[No]</b> Show bans only (or also penalties and kicks)'),
		array('group' => 'server', 'name' => 'ban_dispute_link', 'value' => '', 'locked' => '0', 'description' => '<b>[Empty]</b> Link to your ban-appeal forum - leave empty to use disqus comments'),
		array('group' => 'server', 'name' => 'ban_disputable', 'value' => '1', 'locked' => '0', 'description' => '<b>[Yes]</b> Allow banned players to dispute a ban'),
		array('group' => 'server', 'name' => 'showMIA', 'value' => '1', 'locked' => '0', 'description' => '<b>[Yes]</b> Show M.I.A. playerblock'),
		array('group' => 'server', 'name' => 'opponents_count', 'value' => '15', 'locked' => '0', 'description' => '<b>[15]</b> How many opponents to show in the opponents tab on the playerstats pages'),
		array('group' => 'website', 'name' => 'homelink', 'value' => 'http://www.xlrstats.com/', 'locked' => '0', 'description' => '<b>[http://www.xlrstats.com/]</b> URL to your main community site (http://www.blah.com)'),
		array('group' => 'website', 'name' => 'tos_organisation', 'value' => 'xlrstats.com', 'locked' => '0', 'description' => '<b>[xlrstats.com]</b> Terms Of Service: your clan-, community- or organisationname'),
		array('group' => 'website', 'name' => 'tos_country', 'value' => 'The Netherlands', 'locked' => '0', 'description' => '<b>[The Netherlands]</b> Terms Of Service: your country'),
		array('group' => 'website', 'name' => 'must_accept_cookies', 'value' => '1', 'locked' => '0', 'description' => '<b>[Yes]</b> To satisfy the European Cookie Law'),
		array('group' => 'website', 'name' => 'google_analytics_account', 'value' => '', 'locked' => '1', 'description' => '<b>[Empty]</b> Your Google Analytics account'),
		array('group' => 'server', 'name' => 'show_donate_button', 'value' => '0', 'locked' => '1', 'description' => '<b>[No]</b> Show XLRstats donation button'),
	);
}

