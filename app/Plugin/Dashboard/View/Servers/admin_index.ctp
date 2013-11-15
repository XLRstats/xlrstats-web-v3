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
 * @package       app.Plugin.Dashboard.View.Servers
 * @since         XLRstats v3.0
 * @version       0.1
 */
?>
<script type="text/javascript" charset="utf-8">
	/* Set the defaults for DataTables initialisation */
	$.extend( true, $.fn.dataTable.defaults, {
		"sDom": "<'row-fluid table-controls-top'<'span12'f>>rt<'row-fluid table-controls-bottom'<'span5'i><'span7'p>>",
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
		$('#server-list').dataTable( {
			"fnDrawCallback": function() {
				$('[rel=tooltip]').tooltip();
			},
			"aoColumns": [
				/* Server Id */     {"sWidth" : "5%"},
				/* Active */ 		{"sWidth" : "5%", "sClass" : "hidden-phone", "bSearchable" : false },
				/* Game */			{"sWidth" : "5%"},
				/* Server Name */	null,
				/* Server Group */	{"sClass" : "hidden-phone"},
				/* Buttons */ 		{"bSearchable" : false, "bSortable" : false}
			],
			"aaSorting": [[ 0, "asc" ]],
			"bLengthChange": false,
			"bProcessing": true,
			"bServerSide": true,
			"sAjaxSource": "<?php echo $this->Html->Url(array(
					'controller' => 'servers',
					'action' => 'admin_serversJson'
				)
			); ?>"
		} );
	} );
</script>
<div class="page-header">
	<h1>Servers <small>- All available servers</small></h1>
</div>
<div>
	<blockquote><?php
		echo '<i>';
		echo __('Select a server below to manage, or ');
		echo $this->Html->link(__('Add a new server'), array(
				'plugin' => 'dashboard',
				'controller' => 'servers',
				'action' => 'add',
			),
			array(
				'class' => 'btn btn-success btn-small'
			)
		);
		echo '</i>';
		?>
	</blockquote>
</div>
<div class="row-fluid">
	<div class="span12 servers">
		<table class="table table-hover" id="server-list" style="width:100% !important;">
			<thead>
			<?php
			echo $this->Html->tableHeaders(array(
					__('Id'),
					__('Active'),
					__('Game'),
					__('Server Name'),
					__('Server Group'),
					__('Actions'),
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
				<th colspan="6"><i class="icon-info-sign" style="margin-right: 5px;"></i><small>Click server name to see details</small></th>
			</tr>
			</tfoot>
		</table>
	</div>
</div>