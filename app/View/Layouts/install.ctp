<!DOCTYPE html>
<html>
	<head>
		<title><?php echo __('XLRstats Installation'); ?></title>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
		<?php
		echo $this->Html->css('installer');

		echo $this->fetch('meta');
		echo $this->fetch('css');

		//echo $this->Html->script('modernizr-2.8.3-respond-1.4.2.min'); //Modernizr
		//echo $this->Html->script('jquery-1.8.2.min'); //jQuery library
		//echo $this->Html->script('jquery.ui.map.full.min.js'); //Google Maps jQuery plugin
		//echo $this->Html->script('paging'); // bootstrap pagination plugin for dataTables
		echo $this->Html->script('bootstrap.min'); //twitter bootstrap scripts
		?>
		<style type="text/css">
			body {
				padding-top: 20px;
				padding-bottom: 40px;
				background-color: #f5f5f5;
			}

			/* Custom container */
			.container-narrow {
				margin: 0 auto;
				padding: 20px;
				max-width: 800px;
				background-color: #fff;
				border: 1px solid #e5e5e5;
				-webkit-border-radius: 5px;
				-moz-border-radius: 5px;
				border-radius: 5px;
				-webkit-box-shadow: 0 1px 2px rgba(0,0,0,.05);
				-moz-box-shadow: 0 1px 2px rgba(0,0,0,.05);
				box-shadow: 0 1px 2px rgba(0,0,0,.05);
			}
			.container-narrow > hr {
				margin: 30px 0;
			}

			/* Main marketing message and sign up button */
			.jumbotron {
				margin: 30px 0;
				text-align: center;
			}
			.jumbotron h1 span {
				font-size: 30px;
				line-height: 1;
			}
			.jumbotron .badge {
				//font-size: 21px;
				padding: 10px 35px;
			}

			/* Supporting marketing content */
			.marketing {
				margin: 60px 0;
			}
			.marketing p + h4 {
				margin-top: 28px;
			}
		</style>
	</head>

	<body>
		<div class="container-narrow">
			<div class="masthead">
				<ul class="nav nav-pills pull-right">
					<li class="active">
						<?php
						echo $this->Html->link(__('Installation'), array('plugin' => null, 'admin' => null, 'controller' => 'install'))
						?>
					</li>
					<li><a href="https://github.com/XLRstats/xlrstats-web-v3/blob/master/INSTALL.md" target="_blank">Help</a></li>
					<li><a href="http://www.xlrstats.com/qa" target="_blank">I have a Question</a></li>

				</ul>
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

			<hr>

			<div class="jumbotron">
				<h1>
					<?php
					$i = 1;
					while ($i <= Configure::read('installTotalSteps')) {
						if ($i == Configure::read('installStep')) {
							echo '<span class="badge badge-warning">' . $i . '</span> ';
						} elseif ($i < Configure::read('installStep')) {
							echo '<span class="badge badge-success">' . $i . '</span> ';
						} else {
							echo '<span class="badge">' . $i . '</span>';
							if ($i < Configure::read('installTotalSteps')) {
								echo ' ';
							}
						}
						$i++;
					}
					?>
				</h1>
				<p class="lead">
				</p>
			</div>

			<hr>

			<div id="row-fluid marketing">
				<?php echo $this->TwitterBootstrap->flashes(array('closable' => false)); ?>
				<?php echo $this->fetch('content'); ?>
			</div>

			<hr>

			<div>
				<?php
				echo $this->Html->getCrumbs(' > ', 'Home');
				?>
			</div>

		</div>
	</body>
</html>