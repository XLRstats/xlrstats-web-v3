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
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title><?php echo $title_for_layout; ?></title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width">

	<?php
	// Load Meta Files
	echo $this->Html->meta('Dashboard.icon');
	echo $this->fetch('Dashboard.meta');
	// Load Scripts from core
	echo $this->Html->script('modernizr-2.6.2-respond-1.1.0.min'); //Modernizr
	echo $this->Html->script('jquery-1.11.1.min'); //jQuery
	echo $this->Html->script('bootstrap.min'); //Twitter Bootstrap
	// Load CSS Files
	echo $this->Html->css('Dashboard.dashboard');
	//To work with less files, uncomment two lines below and comment out the dashboard.css line above (echo $this->Html->css('Dashboard.dashboard');)
	//echo $this->Html->css('Dashboard.less/dashboard.less?', 'stylesheet/less');
	//echo $this->Html->script('less-1.5.0.min');
	?>

</head>

<body class="user-login">

<div class="wrap">

	<!--[if lt IE 7]>
	<p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
	<![endif]-->

	<div class="container">

			<?php echo $this->TwitterBootstrap->flashes(array('closable' => true)); ?>
			<?php echo $this->fetch('content'); ?>

	</div> <!-- /container -->

</div>

</body>

</html>
