<?php
/**
 * XLRstats : Real Time Player Stats (http://www.xlrstats.com)
 * Copyright 2005-2013, defaultdark Weirath, Özgür Uysal
 *
 * Licensed under the Creative Commons BY-NC-SA 3.0 License
 * Redistributions of files must retain the above copyright notice.
 *
 * @link          http://www.xlrstats.com
 * @license       Creative Commons BY-NC-SA 3.0 License (http://creativecommons.org/licenses/by-nc-sa/3.0/)
 * @package       app.Layouts
 * @since         XLRstats v3.0
 * @version       0.1
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<?php echo $this->Html->charset();?>
		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->
		<title><?php echo $title_for_layout; ?></title>
		<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('bootstrap.min');
		echo $this->Html->css('smoothness/jquery-ui-1.8.24.custom'); // JQuery UI Theme
		echo $this->Html->css('xlrstats.generic');
		/* For theme development */
			//echo $this->Html->css('less/xlrstats.generic.less?', 'stylesheet/less');
		echo $this->Html->css('cookiecuttr');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->Html->script('modernizr-3.3.1-respond-1.4.2.min'); //Modernizr
		echo $this->Html->script('jquery-1.11.1.min'); //jQuery library
		echo $this->Html->script('jquery-ui-1.8.24.min'); //jQuery UI library
		echo $this->Html->script('jquery.dataTables.min'); //dataTables jQuery plugin
		echo $this->Html->script('http://maps.google.com/maps/api/js?sensor=true'); //Google Maps jQuery plugin
		echo $this->Html->script('jquery.ui.map.full.min.js'); //Google Maps jQuery plugin
		echo $this->Html->script('markerclusterer'); //for Google Maps jQuery plugin
		echo $this->Html->script('paging'); // bootstrap pagination plugin for dataTables
		echo $this->Html->script('bootstrap.min'); //twitter bootstrap scripts
		/* If we use cookies we must ask user permission by European law */
		if (Configure::read('options.must_accept_cookies')) {
			echo $this->Html->script('jquery.cookie.js');
			echo $this->Html->script('jquery.cookiecuttr.js');
		};
		/* For theme development */
			//echo $this->Html->script('less.min'); //Just for development (WILL BE REMOVED)
		echo $this->fetch('script');

		?>
		<script type='text/javascript'>
			$(document).ready(function() {
				$('[rel=tooltip]').tooltip();
				$('[rel=popover]').popover();
			});
		</script>
	</head>

	<body>
		<?php
		if (Configure::read('options.must_accept_cookies') == true) {
		$cookiePolicyLink = $this->Html->link('read our cookie policy here', array('plugin' => null, 'controller' => 'pages', 'action' => 'display', 'server' => Configure::read('server_id'), 'cookiepolicy'));
		echo $this->Html->scriptBlock("
			$(document).ready(function () {
				$.cookieCuttr({
					cookieAnalytics: false,
					cookieDeclineButton: true,
					cookieCutter: true,
					cookieDisable: '.uses-cookie',
					cookieMessage: 'We use cookies to make this website work and to track visits. You can {{cookiePolicyLink}}. ',
					cookiePolicyLink: '$cookiePolicyLink'
					});
				});
		");
		}
		?>

		<?php echo $this->element('google-analytics'); ?>

		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
		<![endif]-->

		<!-- Main Container -->
		<div class="container boxed">

			<div class="row">
				<div class="span4"><span class="logo"></span></div>
				<div class="span8"><?php echo $this->element('login'); ?></div>
			</div>

			<!-- Navigation -->
			<?php echo $this->element('menu'); ?>
			<!-- /Navigation End -->

			<!-- Carousel -->
			<?php
			/**
			 * Display carousel name if current page is home page
			 */
			if ($this->XlrFunctions->isHome()) {
				echo $this->element('carousel');
			}
			?>
			<!-- /Carousel End -->

			<!-- ServerInfoBlock -->
			<?php
			/**
			 * Display server name if current page is not home page
			 */
			if (!$this->XlrFunctions->isHome()) {
				echo $this->element('server_info', array(
					'serverName' => false,
					'serverNameCompact' => true,
					'serverStats' => false,
				));
			}
			?>
			<!-- /ServerInfoBlock End -->

			<?php
			/**
			 * Show all available flash messages
			 */
			echo $this->TwitterBootstrap->flashes(array('closable' => true));
			?>

			<?php echo $this->fetch('content'); ?>

			<!-- Footer -->
			<footer class="footer stretch">
				<div class="container">
					<div class="footer-links">
						<?php echo $this->Html->link('XLRstats', 'http://www.xlrstats.com', array('target' => '_blank')); ?> |
						<?php echo $this->Html->link('BigBrotherBot', 'http://www.bigbrotherbot.net', array('target' => '_blank')); ?> |
						<?php echo $this->Html->link('Echelon', 'http://www.bigbrotherbot.net/echelon/home', array('target' => '_blank')); ?>
					</div>
					<p class="pull-right"><small>
						<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank"><img
								alt="Creative Commons License" style="border-width:0"
								src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png"/></a> 2005-<?php echo date("Y") ?>
						<?php echo $this->Html->link('www.xlrstats.com', 'http://www.xlrstats.com', array('target' => '_blank')); ?>,
						<?php echo $this->Html->link('developed with PhpStorm', 'http://www.jetbrains.com/phpstorm/', array('target' => '_blank')); ?>
					</small></p>
					<p>
						<?php
						echo $this->XlrFunctions->showLicenseIcon();
						echo '&nbsp';
						echo $this->Html->image('cake.power.gif', array('alt' => 'CakePHP'));
						echo '&nbsp';
						echo $this->Html->link($this->Html->image('logohighchartssm.png', array(
							'alt' => 'Highcharts', )),
							'http://www.highcharts.com', array(
								'target' => '_blank',
								'escape' => false
						));
						?>
					</p>
				</div>
			</footer>
			<!-- /Footer End -->

		<?php
		//echo $this->element('sql_dump');
		echo $this->Js->writeBuffer(); // Write cached scripts
		?>

		</div>
		<!-- /Main Container End -->
	</body>
</html>
