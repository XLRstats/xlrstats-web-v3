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
 * @package       app.Plugin.Dashboard.View.Layouts
 * @since         XLRstats v3.0
 * @version       0.1
 */
?>
<!DOCTYPE html>
<!--[if lt IE 7]>	  <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>		 <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>		 <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<?php echo $this->Html->charset(); ?>
		<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<![endif]-->
		<title><?php echo $title_for_layout; ?></title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width">

		<?php
		// Load Meta Files
		echo $this->Html->meta('Dashboard.icon');
		echo $this->fetch('Dashboard.meta');
		// Load CSS Files
		echo $this->Html->css('Dashboard.dashboard');
		echo $this->fetch('Dashboard.css');
		// Load Scripts from core
		echo $this->Html->script('modernizr-2.8.3-respond-1.4.2.min'); //Modernizr
		echo $this->Html->script('jquery-1.11.1.min'); //jQuery
		echo $this->Html->script('jquery.dataTables.min'); //dataTables
		echo $this->Html->script('paging'); //dataTables Twitter Bootstrap Pagination
		echo $this->Html->script('bootstrap.min'); //Twitter Bootstrap
		// Load Scripts from plugin
		echo $this->Html->script('Dashboard.bootstrap-editable.min'); //X-editable
		echo $this->Html->script('Dashboard.dashboard'); //Custom Scripts
		echo $this->fetch('Dashboard.script');
		//Load Temporary Less Files
		//To work with less files, uncomment two lines below and comment out the dashboard.css line above (echo $this->Html->css('Dashboard.dashboard');)
		//echo $this->Html->css('Dashboard.less/dashboard.less?', 'stylesheet/less');
		//echo $this->Html->script('less-2.0.0.min');
		?>

	</head>

	<body>

		<div class="wrap">

			<!--[if lt IE 7]>
				<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
			<![endif]-->

			<!-- This code is taken from http://twitter.github.com/bootstrap/examples/hero.html -->

			<div class="top-navigation">
				<?php echo $this->element('Dashboard.top-navigation'); ?>
			</div>

			<div class="main-container">

				<!-- Left Sidebar -->
				<aside class="sidebar nav-collapse collapse">
					<div class="sidebar-content">
						<?php echo $this->element('Dashboard.sidebar-navigation'); ?>
					</div>
				</aside>
				<!-- /Left Sidebar Ends -->

				<!-- Main Content -->
				<div class="main-content">
					<?php echo $this->TwitterBootstrap->flashes(array('closable' => true)); ?>
					<?php echo $this->element('insert_license'); ?>
					<?php echo $this->fetch('content'); ?>
				</div>
				<!-- /Main Content Ends -->

			</div> <!-- /container -->

			<!-- Footer -->
			<footer>
				<div class="footer-content">
					&copy; XLRstats 2013
				</div>
			</footer>
			<!-- Footer Ends -->

		</div>

	</body>

</html>
