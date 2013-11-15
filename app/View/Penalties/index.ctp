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
 * @package       app.View.Penalties
 * @since         XLRstats v3.0
 * @version       0.1
 */
$imgUrl = FULL_BASE_URL . $this->base . '/img/';
?>
<script type="text/javascript" charset="utf-8">
	/* Set the defaults for DataTables initialisation */
	$.extend( true, $.fn.dataTable.defaults, {
		"sPaginationType": "bootstrap",
		"oLanguage": {
			"sLengthMenu": "_MENU_ penalties per page",
			"oPaginate": {
				"sPrevious": "Prev"
			}
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

	var sImageUrl = "<?php echo $imgUrl; ?>";

	$(document).ready(function() {
		var anOpen = [];
		oTable = $('#penalties').dataTable( {
			"aoColumns": [
				/* Button */
				{
					"sWidth" : "20px",
					"mData": null,
					"sClass": "control center",
					"bSortable": false,
					"sDefaultContent": '<img src="'+sImageUrl+'details_open.png'+'" style="cursor:pointer;">'
				},
				/* # */ 		{ "sWidth" : "20px", "bSortable" : false, "mData" : 0 },
				/* Type */ 		{ "bSortable" : true, "mData" : 1, "iDataSort": 0 },
				/* Name */		{ "bSortable" : true, "mData" : 2, "iDataSort": 1 },
				/* Added */ 	{ "bSortable" : true, "mData" : 3, "iDataSort": 2 },
				/* Expires */ 	{ "bSortable" : true, "mData" : 4, "iDataSort": 3 }
			],
			//"bFilter": false,
			//"bInfo": false,
			//"bLengthChange": false,
			"aaSorting": [[ 4, "desc" ]],
			"iDisplayLength": 15,
			"aLengthMenu": [[15, 25, 50, 100], [15, 25, 50, 100]],
			"bProcessing": true,
			"bServerSide": true,
			"sAjaxSource": "<?php echo $this->Html->Url(array(
					'controller' => 'penalties',
					'action' => 'penaltiesIndexJson/'
				)
			); ?>"
		} );
		/* Formatting function for row details */
		function fnFormatDetails ( oTable, nTr )
		{
			var oData = oTable.fnGetData( nTr );
			var sOut = '<div class="inner-details">';
			sOut += '<div class="detail-first pull-left" style="width: 300px"><h5>Reason</h5><span class="score">'+oData[5]+'</span></div>';
			sOut += '<div class="detail pull-left" style="width: 80px"><h5>Duration</h5><span class="score">'+oData[6]+'</span></div>';
			sOut += '<div class="detail pull-left" style="width: 100px"><h5>Keyword</h5><span class="score">'+oData[7]+'</span></div>';
			sOut += '<div class="detail pull-left" style="width: 100px"><h5>Admin</h5><span class="score">'+oData[8]+'</span></div>';
			sOut += '<div class="detail-last pull-left" style="width: 265px"><h5>Data</h5><span class="score">'+oData[9]+'</span></div>';

			sOut += '</div>';

			return sOut;
		}

		/* Slide Up/Down Animation */
		$('#penalties td.control').live( 'click', function () {
			var nTr = this.parentNode;
			var i = $.inArray( nTr, anOpen );

			if ( i === -1 ) {
				$('img', this).attr( 'src', sImageUrl+"details_close.png" );
				var nDetailsRow = oTable.fnOpen( nTr, fnFormatDetails(oTable, nTr), 'details' );
				$('div.inner-details', nDetailsRow).slideDown();
				anOpen.push( nTr );
			}
			else {
				$('img', this).attr( 'src', sImageUrl+"details_open.png" );
				$('div.inner-details', $(nTr).next()[0]).slideUp( function () {
					oTable.fnClose( nTr );
					anOpen.splice( i, 1 );
				} );
			}
		} );

	} );
</script>

<div class="row">
	<div class="span12">
		<table class="table table-bordered-v2" id="penalties">
			<thead>
			<?php
			echo $this->Html->tableHeaders(array(
					__(''),
					__('#'),
					__('Type'),
					__('Name'),
					__('Added'),
					__('Expires'),
				)
			);
			?>
			</thead>
			<tbody>
			<tr>
				<td colspan="6" class="dataTables_empty">Loading data from server</td>
			</tr>
			</tbody>
			<tfoot>
			<tr>
				<th colspan="6">
					<i class="icon-info-sign" style="margin-right: 5px;"></i>
					<small>Active penalties on this server. (Time on server: <?php echo  $this->Time->format('M jS, Y h:i A', gmdate('U') , null) ?>)</small>
				</th>
			</tr>
			</tfoot>
		</table>
	</div>
	<!--
	<div class="span3 pull-right">
		Admins and dispute link?
	</div>
	-->
</div>
<hr>
<div class="row">
	<div class="span12">
		<?php
		echo $this->element('wall_of_shame');
		?>
	</div>

</div>

