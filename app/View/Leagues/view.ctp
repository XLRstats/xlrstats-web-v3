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
 * @package       app.View.Leagues
 * @since         XLRstats v3.0
 * @version       0.1
 */

$serverName = $this->requestAction('app/getServername');
$serverName = $this->XlrFunctions->stripColors($serverName);
$this->set('title_for_layout', __('%s • %s • XLRstats', $leagueValue[3], $serverName));

$this->Html->script('jquery.sparkline', array('inline' => false));

/**
 * Do we show the sidebar with MIA players?
 */
$maxDays = Configure::read('options.max_days');
$showMIA = false;
$showMia = Configure::read('options.showMIA');
if (isset($maxDays) && $maxDays > 0 && $showMia) {
	$showMIA = true;
}

$imgUrl = FULL_BASE_URL . $this->base . '/img/';
?>
<script type="text/javascript" charset="utf-8">
    /* Set the defaults for DataTables initialisation */
    $.extend( true, $.fn.dataTable.defaults, {
        "sDom": "<'row-fluid table-controls-top'<'span5'l><'span7'f>>rt<'row-fluid table-controls-bottom'<'span5'i><'span7'p>>",
        "sPaginationType": "bootstrap",
        "oLanguage": {
            "sLengthMenu": "_MENU_ records per page",
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
        oTable = $('#leaguestats').dataTable( {
            "fnDrawCallback": function() {
                $('[rel=tooltip]').tooltip();
                $('.levelsparkline').sparkline('html', { type:'pie', chartRangeMax:100, offset:-90, disableTooltips:true, sliceColors:['#8da681', '#ddd']});
                $('.ratiosparkline').sparkline('html', { type:'bullet', disableTooltips:true, width:'100px', performanceColor:'#ddd', targetColor:'#3d4053', rangeColors:[]});
            },
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
                /* Name */ 		{ "mData" : 1, "iDataSort": 0 },
                /* Skill */ 	{ "sWidth" : "80px", "mData" : 2, "iDataSort": 1 },
                /* Ratio */ 	{ "sWidth" : "100px", "mData" : 3, "iDataSort": 2 },
                /* Kills */ 	{ "sWidth" : "80px", "mData" : 4, "iDataSort": 3 },
                /* Deaths */ 	{ "sWidth" : "80px", "mData" : 5, "iDataSort": 4 }
            ],
            "aaSorting": [[ 3, "desc" ]],
            //"bJQueryUI": true,
            "iDisplayLength": 15,
            "aLengthMenu": [[15, 25, 50, 100], [15, 25, 50, 100]],
            "bProcessing": true,
            "bServerSide": true,
            "sAjaxSource": "<?php echo $this->Html->Url(array(
					'controller' => 'leagues',
					'action' => 'leaguesJson/' . $leagueID,
				)
			); ?>"
        } );

        /* Formatting function for row details */
        function fnFormatDetails ( oTable, nTr )
        {
            var oData = oTable.fnGetData( nTr );
            var sOut = '<div class="inner-details">';
            sOut += '<div class="detail-first pull-left"><h5>Suicides</h5><span class="score">'+oData[9]+'</span></div>';
            sOut += '<div class="detail pull-left"><h5>Team Kills</h5><span class="score">'+oData[6]+'</span></div>';
            sOut += '<div class="detail pull-left"><h5>Team Deaths</h5><span class="score">'+oData[10]+'</span></div>';
            sOut += '<div class="detail pull-left"><h5>Win Streak</h5><span class="score">'+oData[7]+'</span></div>';
            sOut += '<div class="detail pull-left"><h5>Lose Streak</h5><span class="score">'+oData[11]+'</span></div>';
            sOut += '<div class="detail pull-left"><h5>Rounds</h5><span class="score">'+oData[8]+'</span></div>';
            sOut += '<div class="detail-last pull-left"><h5>Connections</h5><span class="score">'+oData[12]+'</span></div>';

            sOut += '</div>';

            return sOut;
        }

        /* Slide Up/Down Animation */
        $(document).on( 'click', "#leaguestats td.control", function () {
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

    //Show hide table options
    $(document).ready(function () {
        $('.table-controls-top').hide();
        $('button#search-button').click(function () {
            $('.table-controls-top').slideToggle(400);
        });
    });

</script>


<div class="row">
    <div class="span12" style="margin-top:-10px; margin-bottom:10px; text-align:center;">
        <div class="text-info">
			<?php echo $leagueValue[4]; ?>
            <div class="pull-right">
                <button data-toggle="button" rel="tooltip" data-original-title="<?php echo __('Click to toggle options'); ?>" class="btn btn-small" id="search-button">
                    <i class="icon-cog"></i>
                </button>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="span9">
        <table class="table table-bordered-v2" id="leaguestats">
            <thead>
			<?php
			echo $this->Html->tableHeaders(array(
					__(''),
					__('#'),
					__('Name'),
					__('Skill'),
					__('Ratio'),
					__('Kills'),
					__('Deaths'),
				)
			);
			?>
            </thead>
            <tbody>
            <tr>
                <td colspan="7" class="dataTables_empty">Loading data from server</td>
            </tr>
            </tbody>
            <tfoot>
            <tr>
                <th colspan="7">
                    <div class="pull-left">Click client name to see details.</div>
                    <div class="pull-right">
						<?php
						if ($leagueValue[0] == 'League.skill') {
							echo __('For this League you need at least %s connections and %s kills to appear in this list', $minimumConnections, $minimumKills);
						} else {
							$leageValReadable = explode('.', $leagueValue[0], 2);
							if ($leagueValue[2] > 99999) {
								$leagueValue[2] = '&infin;';
							}
							echo __('Showing players with ') . $leagueValue[1] . __(' to ') . $leagueValue[2] . ' ' . $leageValReadable[1];
						}
						?>
                    </div>
                </th>
            </tr>
            </tfoot>
        </table>
    </div>
    <div class="span3 pull-right">
		<?php
		echo $this->element('lastseen_shortlist', array(
			'leagueID' => $leagueID,
			'limit' => 5
		));
		?>

		<?php
		if ($showMIA) {
			echo $this->element('mia_shortlist', array(
				'leagueID' => $leagueID,
				'random' => true,
				'limit' => 5
			));
		}
		?>
    </div>
</div>
<hr>
<div class="row">
    <div class="span12">
		<?php
		echo $this->element('league_awards', array(
				'leaguenr' => $leagueID)
		)
		?>
    </div>

</div>
