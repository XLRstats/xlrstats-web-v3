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
 * @package       app.Plugin.Dashboard.View.Users
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
		$('#user-list').dataTable( {
			"fnDrawCallback": function() {
				$('[rel=tooltip]').tooltip();
			},
			"aoColumns": [
				/* User Id */			{"sWidth" : "5%"},
				/* Name */ 				null,
				/* Role */ 				null,
				/* Email */				null,
				/* Email verified */	{"bSearchable" : false, "sWidth" : "5%"},
				/* Active */			{"bSearchable" : false, "sWidth" : "5%"},
				/* Created */			null,
				/* Last Login */ 		null,
				/* Options */ 			{"bSearchable" : false, "bSortable" : false}
			],
			"aaSorting": [[ 0, "asc" ]],
			"bLengthChange": false,
			"bProcessing": true,
			"bServerSide": true,
			"sAjaxSource": "<?php echo $this->Html->Url(array(
					'controller' => 'app_users',
					'action' => 'admin_indexJson'
				)
			); ?>"
		} );
	} );
</script>
<div class="page-header">
	<h1>Users <small>- All registered XLRstats users</small></h1>
</div>

<div><blockquote>
	<?php
	echo '<i>';
	echo __('Edit XLRstats users below or ');
	echo $this->Html->link(__('Add a New User'), array(
			'action' => 'add'
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
	<div class="span12 users">
		<table class="table table-hover" id="user-list" style="width:100% !important;">
			<thead>
			<?php
			echo $this->Html->tableHeaders(array(
					__('Id'),
					__('Name'),
					__('Role'),
					__('Email'),
					__('Email Verified'),
					__('Active'),
					__('Joined'),
					__('Last Login'),
					__('Options'),
				)
			);
			?>
			</thead>
			<tbody>
			<tr>
				<td colspan="9" class="dataTables_empty">Loading data from server</td>
			</tr>
			</tbody>
			<tfoot>
			<tr>
				<th colspan="9"><i class="icon-info-sign" style="margin-right: 5px;"></i><small>Liste of users</small></th>
			</tr>
			</tfoot>
		</table>
	</div>
</div>