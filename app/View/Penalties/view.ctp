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
		$('#penalties').dataTable( {
			"aoColumns": [
				/* # */ 		{ "sWidth" : "20px", "bSortable" : false },
				/* Type */ 		{ "iDataSort": 0 },
				/* Reason */ 	{ "iDataSort": 1 },
				/* Data */ 		{ "iDataSort": 2 },
				/* Added */ 	{ "iDataSort": 3 },
				/* Expires */ 	{ "iDataSort": 4 }
			],
			"bFilter": false,
			"bInfo": false,
			"bLengthChange": false,
			"aaSorting": [[ 4, "desc" ]],
			//"bJQueryUI": true,
			"bProcessing": true,
			"bServerSide": true,
			"sAjaxSource": "<?php echo $this->Html->Url(array(
					'controller' => 'penalties',
					'action' => 'penaltiesJson/' . $playerID
				)
			); ?>"
		} );
	} );
</script>

<div class="playerstats">
    <h3><?php echo __('My Penalties') ?></h3>
	<table class="table table-hover" id="penalties">
		<thead>
		<?php
		echo $this->Html->tableHeaders(array(
				__('#'),
				__('Type'),
				__('Reason'),
				__('Data'),
				__('Added'),
				__('Expires'),
				//__('Timestamp'),
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
				<small>Click penalty type to see details.</small>
			</th>
		</tr>
		</tfoot>
	</table>
</div>

<?php foreach ($penalties as $k => $v) { ?>

	<!-- Modal -->
	<div id="penalty<?php echo $v['Penalty']['id']; ?>Modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="penalty<?php echo $v['Penalty']['id']; ?>ModalLabel" aria-hidden="true">
		<div class="modal-header error">
			<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			<h4 id="penalty<?php echo $v['Penalty']['id']; ?>ModalLabel"><?php echo __('Penalty issued to') ?> <?php echo $v['Player']['name'] ?> <?php echo __('on')?> <?php echo $this->Time->format('F jS, Y h:i A', $v['Penalty']['time_add'], null) ?></h4>
		</div>
		<div class="modal-body">
			<table class="table table-condensed">
				<?php

				$currentTime = gmdate('U');
				if ($v['Penalty']['time_expire'] == -1) {
					$timeExpire = __('never');
				} else {
					$timeExpire = $this->Time->format('F jS, Y h:i A', $v['Penalty']['time_expire'], null);
				}


				echo $this->Html->tableCells(
					array(
						array(__('Type'), $v['Penalty']['type']),
						array(__('Reason'), $v['Penalty']['reason']),
						array(__('Issued by'), $v['Admin']['name'] ? $v['Admin']['name'] : __('BigBrotherBot')),
						array(__('Expires on'), $timeExpire),
						array('&nbsp;', '&nbsp;')
					)
				);

				$disputeLink = '';

				if (Configure::read('options.ban_disputable') && $v['Penalty']['time_expire'] > $currentTime && ($v['Penalty']['type'] == 'Ban' || $v['Penalty']['type'] == 'TempBan')) {
					if (Configure::read('options.ban_dispute_link') != null) {
						$disputeLink = $this->Html->link(__('Dispute'), Configure::read('options.ban_dispute_link'), array(
								'title' => __('Click here to dispute your ban'),
								'target' => '_blank',
								'escape' => false,
							),
							__('Remember to mention your Player Name and the time the ban was issued'));
					} else {
						$disputeLink = $this->Html->link(__('Dispute'), array(
								'controller' => 'penalties',
								'action' => 'detail',
								'server' => Configure::read('server_id'),
								$v['Penalty']['id']), array(
								'title' => __('Click here to dispute your ban'),
								'escape' => false,
							)
						);
					}
				}

				echo $this->Html->tableCells(
					array(
						array(__('Keyword'), $v['Penalty']['keyword']),
						array(__('Duration'), $v['Penalty']['duration'] . ' seconds'),
						array(__('Data'), $v['Penalty']['data'] ? $v['Penalty']['data'] : __('No data set')),
						array(__('Time Edited'), $this->Time->format('F jS, Y h:i A', $v['Penalty']['time_edit'], null)),
						array($disputeLink, '')
					)
				);
				?>
			</table>
		</div>
		<div class="modal-footer">
			<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
		</div>
	</div>
	<!-- Modal End -->
<?php
}
