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
		<?phpecho $this->Html->charset();?>
		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->
		<title><?php echo $title_for_layout; ?></title>
		<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('xlrstats.generic');

		echo $this->fetch('meta');
		echo $this->fetch('css');

		echo $this->Html->script('modernizr-2.8.3-respond-1.4.2.min'); //Modernizr
		echo $this->Html->script('jquery-1.11.1.min'); //jQuery library
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

		//To work with less files, uncomment two lines below and comment out the xlrstats.generic.css line above (echo $this->Html->css('xlrstats.generic');)
		//echo $this->Html->css('less/xlrstats.generic.less?', 'stylesheet/less');
		//echo $this->Html->script('less-2.0.0.min'); //Just for development

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
		} ?>

		<?php echo $this->element('google-analytics'); ?>

		<!--[if lt IE 7]>
		<p class="chromeframe">You are using an outdated browser. <a href="http://browsehappy.com/">Upgrade your browser today</a> or <a href="http://www.google.com/chromeframe/?redirect=true">install Google Chrome Frame</a> to better experience this site.</p>
		<![endif]-->

		<!-- Main Container -->
		<div class="container boxed">

			<div class="row">
				<div class="span4">
					<span class="logo">
						<?php
						echo $this->Html->link($this->Html->image('logo.png', array(
							'alt' => 'XLRstats', )),
							'/', array(
								'escape' => false
						));
						?>
					</span>
				</div>
				<div class="span8"><?php echo $this->element('login'); ?></div>
			</div>

			<!-- Navigation -->
			<?php echo $this->element('menu'); ?>
			<!-- /Navigation End -->

			<!-- Carousel -->
			<?php
			/**
			 * Display carousel if current page is home page
			 */
			if ($this->XlrFunctions->isHome()) {
				echo $this->element('carousel');
			}
			?>
			<!-- /Carousel End -->

			<!-- ServerInfoBlock -->
			<?php
			/**
			 * Display compact server name if current page is not home page
			 */
			if (!$this->XlrFunctions->isHome()) {
				echo $this->element('server_info', array(
					'serverNameBig' => false,
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
			/**
			 * Auth messages
			 */
			echo $this->Session->flash('auth', array('params' => array('class' => 'alert alert-error')));
			?>

			<?php echo $this->fetch('content'); ?>

			<!-- Footer -->
			<footer class="footer stretch">
				<div class="container">
					<div class="row">
						<div class="span3">
							<h4>Origination</h4>
							<ul class="icons-ul">
								<li><i class="icon-li icon-ok"></i><?php echo $this->Html->link('Donate to the project', 'https://www.paypal.com/cgi-bin/webscr?cmd=_xclick&business=donations%40bigbrotherbot.net', array('target' => '_blank')); ?></li>
								<li><i class="icon-li icon-ok"></i><?php echo $this->Html->link('XLRstats', 'http://www.xlrstats.com', array('target' => '_blank')); ?></li>
								<li><i class="icon-li icon-ok"></i><?php echo $this->Html->link('BigBrotherBot', 'http://www.bigbrotherbot.net', array('target' => '_blank')); ?></li>
								<li><i class="icon-li icon-ok"></i><?php echo $this->Html->link('Echelon', 'http://www.bigbrotherbot.net/echelon/home', array('target' => '_blank')); ?></li>
							</ul>
						</div>
						<div class="span3">
							<h4>News</h4>
							<ul class="icons-ul">
								<li><i class="icon-li icon-external-link"></i><?php echo $this->Html->link('XLRstats/B3 News', array(
										'plugin' => null,
										'admin' => false,
										'controller' => 'feeds',
										'action' => 'index',
										'server' => Configure::read('server_id')
									)) ?></li>
							</ul>
						</div>
						<div class="span3">
							<h4>Community</h4>
							<ul class="icons-ul">
								<li><i class="icon-li icon-globe"></i>Our Community Site</li>
								<li><i class="icon-li icon-globe"></i>Our Forums</li>
								<li><i class="icon-li icon-globe"></i>Our Matches</li>
							</ul>
						</div>
						<div class="span3">
							<h4>About</h4>
							<ul class="icons-ul">
								<li><i class="icon-li icon-info-sign"></i><?php echo $this->Html->link('League Edition', array(
										'plugin' => null,
										'admin' => false,
										'controller' => 'pages',
										'action' => 'display',
										'server' => Configure::read('server_id'),
										'about', 'index'
									)) ?></li>
								<li><i class="icon-li icon-info-sign"></i><?php echo $this->Html->link('Terms of Service', array(
										'plugin' => null,
										'admin' => false,
										'controller' => 'pages',
										'action' => 'display',
										'server' => Configure::read('server_id'),
										'tos'
									)) ?></li>
								<li><i class="icon-li icon-info-sign"></i><?php echo $this->Html->link('Cookie Policy', array(
										'plugin' => null,
										'admin' => false,
										'controller' => 'pages',
										'action' => 'display',
										'server' => Configure::read('server_id'),
										'cookiepolicy'
									)) ?></li>
							</ul>
						</div>
					</div>
					<div class="row">
						<div class="span12">
							<p class="text-center">
								<?php echo $this->XlrFunctions->showLicenseIcon() ?>
								<small>
									<a rel="license" href="http://creativecommons.org/licenses/by-nc-sa/3.0/" target="_blank"><img
											alt="Creative Commons License" style="border-width:0; vertical-align: text-bottom"
											src="http://i.creativecommons.org/l/by-nc-sa/3.0/80x15.png"/></a> 2005-<?php echo date("Y") ?>
									<?php echo $this->Html->link('www.xlrstats.com', 'http://www.xlrstats.com', array('target' => '_blank')); ?>
									<?php echo ' - ' . XLR_VERSION ?>
									<?php echo ' - core v' . Configure::version() . ' -  ' ?>
									<?php echo $this->Html->link('developed with PhpStorm', 'http://www.jetbrains.com/phpstorm/', array('target' => '_blank')); ?>
									<?php echo ' and ';?>
									<?php echo $this->Html->link($this->Html->image('logohighchartssm.png', array(
											'alt' => 'Highcharts', )),
										'http://www.highcharts.com', array(
											'target' => '_blank',
											'escape' => false
										)) ?>
								</small><br />
								</p>
						</div>
					</div>
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
