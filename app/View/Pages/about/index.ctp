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
 * @package       app.View.Pages.about
 * @since         XLRstats v3.0
 * @version       0.1
 */
?>

<div class="container">
	<h2>About XLRstats version 3 League Edition webfront</h2>

	<blockquote><small>This webfront is created by Mark Weirath and Özgür Uysal as a new webfront for the
		statistics plugin for BigBrotherBot (B3) called XLRstats. Just like previous versions this webfront is <strong>NOT</strong> a standalone statistics application or logfile
		parser, but it relies on the existing data that the B3 plugin stores in the database. Unlike the previous versions this webfront is licensed under the <a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank">Creative Commons BY-NC-SA license</a>. So, it's still free, but under certain conditions.</small></blockquote>

	<h2>About the Leagues</h2>
	<p>In this version of XLRstats you can compete in all kinds of leagues. We've done this to bring competitive play to players of different skill. The main leagues are obviously based on the skill. But there are also a few custom leagues (like the Newby League and Veterans League) which are based on the number of connections or on the userlevel (Admins League).</p>
	<p>To compete in the Leagues you must meet the mimimal criteria first. On this server you need at least <? echo Configure::read('options.min_connections')?> connections and <?php echo Configure::read('options.min_kills')?> kills before you appear in the lists. (N.B.: This doesn't apply to the Leagues that are based on the number of connections.)</p>

	<h3>Available Leagues:</h3>

	<div class="accordion" id="accordion2">
		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseOne">
					Leagues
				</a>
			</div>
			<div id="collapseOne" class="accordion-body collapse">
				<div class="accordion-inner">

					<?php
					foreach (Configure::read('league') as $id => $league):
						echo $this->Html->link($league[3], array(
									'controller' => 'leagues', 'action' => 'view', 'server' => Configure::read('server_id'), $id
								)
							) . ': ' . $league[1] . ' to ' . $league[2] . ' ' . $league[0] . '.<br />';
					endforeach;
					?>
				</div>
			</div>
		</div>

		<h3>Available Userlevels:</h3>

		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseTwo">
					Levels
				</a>
			</div>
			<div id="collapseTwo" class="accordion-body collapse">
				<div class="accordion-inner">

					<?php
					foreach (Configure::read('level') as $key => $level):
						echo $key . ': ' . $level[1] . ' (group_bits: ' . $level[0] . ')<br />';
					endforeach;
					?>
				</div>
			</div>
		</div>

		<h3>Available Ranks:</h3>

		<div class="accordion-group">
			<div class="accordion-heading">
				<a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion2" href="#collapseThree">
					Ranks
				</a>
			</div>
			<div id="collapseThree" class="accordion-body collapse">
				<div class="accordion-inner">

					<?php
					foreach (Configure::read('rank') as $key => $rank):
						echo $key . ': ' . $rank[0] . ': (' . $rank[1] . '+ kills)<br />';
					endforeach;
					?>
				</div>
			</div>
		</div>

	</div>
</div>