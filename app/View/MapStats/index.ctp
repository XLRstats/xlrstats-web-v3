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
 * @package       app.View.MapStats
 * @since         XLRstats v3.0
 * @version       0.1
 */

$serverName = $this->requestAction('app/getServername');
$serverName = $this->XlrFunctions->stripColors($serverName);
$this->set('title_for_layout', __('Maps • %s • XLRstats', $serverName));

if (empty($topKillMaps)) {
	echo '<div class="alert alert-info">' . __('No data to display!') . '</div>';
	return false;
}

$this->Html->script('highcharts', array('inline' => false));
$this->Html->script('exporting', array('inline' => false));

$pieChart = array();

$pieChart['kills']['count'] = array_key_exists('Other', $topKillMaps) ? count($topKillMaps) - 1: count($topKillMaps);
$pieChart['teamkills']['count'] = array_key_exists('Other', $topTeamKillMaps) ? count($topTeamKillMaps) - 1: count($topTeamKillMaps);
$pieChart['suicides']['count'] = array_key_exists('Other', $topSuicideMaps) ? count($topSuicideMaps) - 1: count($topSuicideMaps);

//Top Kill Maps
reset($topKillMaps);
$pieChart['kills']['favorite'] = key($topKillMaps);
$pieChart['kills']['data'] = $this->XlrFunctions->getTopActionData($topKillMaps, $pieChart['kills']['favorite'], 'map');

//Top TeamKill Maps
reset($topTeamKillMaps);
$pieChart['teamkills']['favorite'] = key($topTeamKillMaps);
$pieChart['teamkills']['data'] = $this->XlrFunctions->getTopActionData($topTeamKillMaps, $pieChart['teamkills']['favorite'], 'map');

//Top Suicide Maps
reset($topSuicideMaps);
$pieChart['suicides']['favorite'] = key($topSuicideMaps);
$pieChart['suicides']['data'] = $this->XlrFunctions->getTopActionData($topSuicideMaps, $pieChart['suicides']['favorite'], 'map');

//Pie Chart Titles
$pieChart['kills']['title'] = __('Top %s Kill Maps', $pieChart['kills']['count']);
$pieChart['teamkills']['title'] = __('Top %s Team Kill Maps', $pieChart['teamkills']['count']);
$pieChart['suicides']['title'] = __('Top %s Suicide Maps', $pieChart['suicides']['count']);

// Last pie chart. We'll use this to draw a border bottom or not
foreach ($pieChart as $key => $value) {
	if ($value['count'] > 0) {
		$charts[] = $key;
	}
}
$lastChart = end($charts);

?>
<script type="text/javascript" charset="utf-8">
	/* Set the defaults for DataTables initialisation */
	$.extend( true, $.fn.dataTable.defaults, {
		"sPaginationType": "bootstrap",
		"oLanguage": {
			"sLengthMenu": "_MENU_ records per page"
		}
	} );

	/* Default class modification */
	$.extend( $.fn.dataTableExt.oStdClasses, {
		"sWrapper": "dataTables_wrapper form-inline"
	} );

	/* API method to get paging information */
	$.fn.dataTableExt.oApi.fnPagingInfo = function ( oSettings )
	{
		return {
			"iStart":         oSettings._iDisplayStart,
			"iEnd":           oSettings.fnDisplayEnd(),
			"iLength":        oSettings._iDisplayLength,
			"iTotal":         oSettings.fnRecordsTotal(),
			"iFilteredTotal": oSettings.fnRecordsDisplay(),
			"iPage":          Math.ceil( oSettings._iDisplayStart / oSettings._iDisplayLength ),
			"iTotalPages":    Math.ceil( oSettings.fnRecordsDisplay() / oSettings._iDisplayLength )
		};
	};

	$(document).ready(function() {
		$('#mapstats').dataTable( {
			"aoColumns": [
				/* # */ 		{"sWidth" : "5%", "bSortable": false},
				/* Map */ 	{"sWidth" : "35%", "bSortable": false, "iDataSort": 0},
				/* Kills */		{"sWidth" : "20%", "iDataSort": 1},
				/* TKs */		{"sWidth" : "20%", "iDataSort": 2},
				/* Suicides */	{"sWidth" : "20%", "iDataSort": 3}
			],
			"bFilter": false,
			"bInfo": false,
			"bLengthChange": false,
			"aaSorting": [[ 2, "desc" ]],
			//"bJQueryUI": true,
			"bProcessing": true,
			"bServerSide": true,
			"sAjaxSource": "<?php echo $this->Html->Url(array(
					'controller' => 'map_stats',
					'action' => 'mapStatsJson'
				)
			); ?>"
		} );
	} );

	<?php
	//Render Top Maps Chart Scripts
	foreach($pieChart as $key => $value):
		if($value['count'] > 0):
		?>
		$(function () {
			var chart;

			$(document).ready(function () {

				// Build the chart
				chart = new Highcharts.Chart({
					chart: {
						renderTo: '<?php echo $key . '-maps'; ?>',
						plotBackgroundColor: null,
						plotBorderWidth: null,
						plotShadow: false
					},
					credits: {
						enabled: false
					},
					exporting: {
						enabled: false
					},
					title: {
						text: '<?php echo $value['title']; ?>',
						style: {
							'font-family': '"Cuprum",sans-serif'
						}
					},
					subtitle: {
						text: '<?php echo __('<b>Top Map:</b> %s', $this->XlrFunctions->getMapName($value['favorite'])); ?>',
						style: {
							'font-family': '"Lato",sans-serif;'
						},
						x:0,
						y:35
					},
					tooltip: {
						pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
					},
					legend: false,
					plotOptions: {
						pie: {
							allowPointSelect: true,
							cursor: 'pointer',
							dataLabels: {
								enabled: false

							},
							showInLegend: true
						}
					},
					series: [{
						type: 'pie',
						name: '<?php echo __('Percentage'); ?>',
						data: [
							<?php echo $value['data'];?>
						]
					}]
				});
			});

		});
	<?php
		endif;
	endforeach;
	?>

	/* Make sure modal box doesn't load the same content */
	$('body').on('hidden', '.modal', function () {
		$(this).removeData('modal');
		/* add loading image */
		$('#map-modal .modal-body').html('<?php echo $this->Html->image('loading-bar.gif', array('style' => 'margin-left: 286px')); ?> Loading...');
	});
</script>

<div class="row">
	<div class="span8">
		<table class="table table-bordered-v2 table-hover" id="mapstats">
			<thead>
			<?php
			echo $this->Html->tableHeaders(array(
					__('#'),
					__('Map Name'),
					__('Kills'),
					__('TKs'),
					__('Suicides'),
				)
			);
			?>
			</thead>
			<tbody>
			<tr>
				<td colspan="5" class="dataTables_empty">Loading data from server</td>
			</tr>
			</tbody>
			<tfoot>
			<tr>
				<th colspan="5"><i class="icon-info-sign" style="margin-right: 5px;"></i><small>...</small></th>
			</tr>
			</tfoot>
		</table>
	</div>

	<div class="span4 bordered">
		<?php
		foreach($pieChart as $key => $value):
			if($value['count'] > 0):
				if($key != $lastChart):
					$borderBottom = 'border-bottom: 1px solid #EEEDEC;';
				else:
					$borderBottom = null;
				endif;
				?>
				<div id="<?php echo $key . '-maps'; ?>" style="min-width: 326px; height: 250px; margin: 0 auto; <?php echo $borderBottom; ?>"></div>
			<?php
			endif;
		endforeach; ?>
	</div>
</div>

<!-- Modal Window Starts -->
<div style="min-width:700px;" id="map-modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">

	<div class="modal-body">
		<?php echo $this->Html->image('loading-bar.gif', array('style' => 'margin-left: 286px')); ?> Loading...
	</div>
	<div class="modal-footer">
		<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
	</div>
</div>
<!-- /Modal Window Ends -->