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
 * @package       app.View.PlayerActivities
 * @since         XLRstats v3.0
 * @version       0.1
 */

//pr($activity);

$this->layout = null;


if (empty($activity)):
	?>
<div class="alert">
	<?php echo __('An activity overview is not available for this player'); ?>
</div>
<?php
	return false;
endif;

$totalPlayTime = 0;
foreach ($activity as $playerActivity) {
	//$day[] = $this->Time->format('Y, m, d', $playerActivity['PlayerActivity']['came'], null);
	$duration[] = array(
		'x' => $playerActivity['PlayerActivity']['came'] * 1000, // JS time is in milliseconds, not seconds
		'y' => round(($playerActivity['PlayerActivity']['gone'] - $playerActivity['PlayerActivity']['came']) / 60),
		//'date' => $this->Time->format('d.m.Y', $playerActivity['PlayerActivity']['came'], null),
		'came' => $this->Time->format('D j M (H:i)', $playerActivity['PlayerActivity']['came'], null),
		'gone' => $this->Time->format('D j M (H:i)', $playerActivity['PlayerActivity']['gone'], null));
	$totalPlayTime += round(($playerActivity['PlayerActivity']['gone'] - $playerActivity['PlayerActivity']['came']) / 60);
}

//$days = $this->Js->value($day);
$durations = $this->Js->value($duration);
?>

<div id="activity" style="width: 992px; height: 400px; margin: 0 auto"></div>


<!-- Activity Chart -->
<script type="text/javascript">
    var chart;
    $(document).ready(function () {
        chart = new Highcharts.Chart({
            chart:{
                renderTo:'activity',
                zoomType: 'x',
                type:'column',
                marginRight:25,
                marginBottom:125,
                backgroundColor:'#fff'
            },
            credits:{
                text:'xlrstats',
                href:'http://www.xlrstats.com'
            },
            exporting:{
                filename:'xlrstats_activity'
            },
            title:{
                text:'<?php echo __('Activity Chart') . ' ' . Sanitize::paranoid($playerActivity['PlayerActivity']['nick']) ?>'
            },
            subtitle: {
                text: 'Total Playing time past 31 days: <?php echo round($totalPlayTime/60, 2) ?> hrs. (Avg. <?php echo round($totalPlayTime/60/31, 2) ?> hrs per day)<br /><br />(Click and drag in the plot area to zoom in)'
            },
            xAxis:{
                type: 'datetime',
                labels: {
                    rotation: -90,
					align: 'right'/*,
					formatter: function() {
                        return Highcharts.dateFormat('%a %d %b', this.value);
                    }*/
                }
            },
			yAxis:{
                title:{
                    text:'Duration (minutes)'
                },
                plotLines:[
                    {
                        value:0,
                        width:1,
                        color:'#808080'
                    }
                ],
                stackLabels: {
                    enabled: false,
                    style: {
                        fontWeight: 'bold',
                        color: (Highcharts.theme && Highcharts.theme.textColor) || 'gray'
                    }
                }
            },
            tooltip: {
				formatter: function() {
					return '<b>Connected: '+ this.point.came +':</b><br />'+
							'Played: ' + this.y +' minutes<br />' +
							'Disconnected: ' + this.point.gone + '<br />';
                }
            },
            plotOptions: {
                series: {
                    pointWidth: 11,
                    colorByPoint: true
                }
            },
			series:[
                {
                    showInLegend:false,
                    name:'Activity',
					data: <?php echo $durations; ?>,
                    dataLabels: {
                        enabled: false,
                        rotation: -90,
                        color: '#808080',
                        align: 'right',
                        x: 3,
                        y: 20,
                        formatter: function() {
                            return this.point.came;
                        },
                        style: {
                            fontSize: '11px',
                            fontFamily: 'Verdana, sans-serif'
                        }
                	}
				}
            ]
        });
    });

</script>
