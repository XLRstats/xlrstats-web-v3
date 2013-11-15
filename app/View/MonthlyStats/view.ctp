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
 * @package       app.View.MonthlyStats
 * @since         XLRstats v3.0
 * @version       0.1
 */

if(empty($monthlyStats)):
	?>
	<div class="alert">
		<?php echo __('Monthly statistics is either not enabled by the admin or not available yet. Please consult your admin!'); ?>
	</div>
	<?php
	return false;
endif;

foreach ($monthlyStats as $stat) {
	$monthName = date("F", mktime(0, 0, 0, $stat['MonthlyStat']['month'], 10));
	$ratio[] =  floatval($this->Number->precision($stat['MonthlyStat']['ratio'], 2));
	$skill[] = floatval($this->Number->precision($stat['MonthlyStat']['skill'], 0));
	$month[] = __('%s %s', $monthName, $stat['MonthlyStat']['year']);
}

$playerRatio = $this->Js->value($ratio);
$playerSkill = $this->Js->value($skill);
$months = $this->Js->value($month);

?>
<div id="monthly-skill" style="width: 992px; height: 400px; margin: 0 auto"></div>
<div id="monthly-ratio" style="width: 992px; height: 400px; margin: 0 auto"></div>

<!-- Monthly Ratio Chart -->
<script type="text/javascript">
	var chart;
	$(document).ready(function() {
		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'monthly-ratio',
				type: 'spline',
				marginRight: 25,
				marginBottom: 125,
				backgroundColor: '#fff'
			},
			colors: [
				'#587ca0'
			],
			credits: {
				text: 'xlrstats',
				href: 'http://www.xlrstats.com'
			},
			exporting: {
				filename: 'xlrstats_monthly_ratio'
			},
			title: {
				text: '<?php echo __('Monthly Ratio History') ?>',
				x: -20 //center
			},
			xAxis: {
				categories: <?php echo $months; ?>,
				labels: {
					rotation: -45,
					align: 'right',
					step:2
				}
			},
			yAxis: {
				//min: 0,
				title: {
					text: 'Ratio'
				},
				plotLines: [{
					value: 0,
					width: 1,
					color: '#808080'
				}]
			},
			tooltip: {
				crosshairs: true,
				formatter: function() {
					return '<b>'+ this.x + '</b>'+
							'<br/>'+ this.y;
				}
			},
			series: [{
				showInLegend: false,
				data: <?php echo $playerRatio; ?>
			}]
		});
	});

</script>

<!-- Monthly Skill Chart -->
<script type="text/javascript">
	var chart;
	$(document).ready(function() {
		chart = new Highcharts.Chart({
			chart: {
				renderTo: 'monthly-skill',
				type: 'spline',
				marginRight: 25,
				marginBottom: 125,
				backgroundColor: '#fff'
			},
			colors: [
				'#e5744b'
			],
			credits: {
				text: 'xlrstats',
				href: 'http://www.xlrstats.com'
			},
			exporting: {
				filename: 'xlrstats_monthly_skill'
			},
			title: {
				text: '<?php echo __('Monthly Skill History') ?>',
				x: -20 //center
			},
			xAxis: {
				categories: <?php echo $months; ?>,
				labels: {
					rotation: -45,
					align: 'right',
					step:2
				}
			},
			yAxis: {
				//min: 0,
				title: {
					text: 'Skill'
				},
				plotLines: [{
					value: 0,
					width: 1,
					color: '#808080'
				}]
			},
			tooltip: {
				crosshairs: true,
				formatter: function() {
					return '<b>'+ this.x + '</b>'+
							'<br/>'+ this.y;
				}
			},
			series: [{
				showInLegend: false,
				data: <?php echo $playerSkill; ?>
			}]
		});
	});

</script>