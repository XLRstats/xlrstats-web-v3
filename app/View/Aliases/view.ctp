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
 * @package       app.View.Aliases
 * @since         XLRstats v3.0
 * @version       0.1
 */
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
		$('#aliases').dataTable( {
			"aoColumns": [
				/* Alias */ 	null,
				/* num used */ 	null,
				/* Added */ 	null,
				/* Edited */ 	null
			],
			"bFilter": false,
			"bInfo": false,
			"bLengthChange": false,
			"aaSorting": [[ 3, "desc" ]],
			//"bJQueryUI": true,
			"bProcessing": true,
			"bServerSide": true,
			"sAjaxSource": "<?php echo $this->Html->Url(array(
					'controller' => 'aliases',
					'action' => 'aliasesJson/' . $playerID
				)
			); ?>"
		} );
	} );
</script>

<div class="playerstats">
	<h3><?php echo __('My Aliases') ?></h3>
	<table class="table table-hover" id="aliases">
		<thead>
		<?php
		echo $this->Html->tableHeaders(array(
				__('Alias'),
				__('# Times Used'),
				__('First Used'),
				__('Last Used'),
			)
		);
		?>
		</thead>
		<tbody>
		<tr>
			<td colspan="8" class="dataTables_empty">Loading data from server</td>
		</tr>
		</tbody>
		<tfoot>
		<tr>
			<th colspan="8">
				<i class="icon-info-sign" style="margin-right: 5px;"></i>
			</th>
		</tr>
		</tfoot>
	</table>
</div>