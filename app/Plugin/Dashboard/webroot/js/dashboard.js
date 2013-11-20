/*!
 * XLRstats : Real Time Player Stats (http://www.xlrstats.com)
 * (CC) BY-NC-SA 2005-2013, Mark Weirath, Özgür Uysal
 *
 * Licensed under the Creative Commons BY-NC-SA 3.0 License
 * Redistributions of files must retain the above copyright notice.
 *
 * @link          http://www.xlrstats.com
 * @license       Creative Commons BY-NC-SA 3.0 License (http://creativecommons.org/licenses/by-nc-sa/3.0/)
 * @package       app.Plugin.Dashboard.webroot.js
 * @since         XLRstats v3.0
 * @version       0.1
 */

$(document).ready(function() {
    /**********************************************
     * Adjust main-content height automatically
     **********************************************/
    var n=$(".main-content");
    n.css("min-height",$(window).height()-($(".top-navigation").height()+parseInt(n.css("padding-top"))*2+$("footer").outerHeight())+"px");
    $(window).resize(function(){
        n.css("min-height",$(window).height()-($(".top-navigation").height()+parseInt(n.css("padding-top"))*2+$("footer").outerHeight())+"px")
    });

    if($(".top-navigation").hasClass("navbar-fixed-top")){
        $(".wrap").css("padding","40px 0 0")
    }

    /**********************************************
     * Sidebar Navigation
     * (A mod for bootstrap accordion)
     * Credits: http://www.juvenpajares.com/custom-accordion-list-using-bootstrap-fw/
     **********************************************/
    $('.accordionMod').each(function(index) {
        var thisBox = $(this).children(),
            thisMainIndex = index + 1;
        $(this).attr('id', 'accordion' + thisMainIndex);
        thisBox.each(function(i) {
            var thisIndex = i + 1,
                thisParentIndex = thisMainIndex,
                thisMain = $(this).parent().attr('id'),
                thisTriggers = $(this).find('.accordion-toggle'),
                thisBoxes = $(this).find('.accordion-inner');
            $(this).addClass('accordion-group');
            thisBoxes.wrap('<div id=\"collapseBox' + thisParentIndex + '_' + thisIndex + '\" class=\"accordion-body collapse\" />');
            thisTriggers.wrap('<div class=\"accordion-heading\" />');
            thisTriggers.attr('data-toggle', 'collapse').attr('data-parent', '#' + thisMain).attr('data-target', '#collapseBox' + thisParentIndex + '_' + thisIndex);
        });
        $('.accordion-toggle').prepend('<span class=\"icon\" />');
        $('.accordionMod .accordion-toggle').click(function() {
            if ($(this).parent().parent().find('.accordion-body').is('.in')) {
                $(this).removeClass('current');
                $(this).find('.icon').removeClass('iconActive');
            } else {
                $(this).addClass('current');
                $(this).find('.icon').addClass('iconActive');
            }
            $(this).parent().parent().siblings().find('.accordion-toggle').removeClass('current');
            $(this).parent().parent().siblings().find('.accordion-toggle > .icon').removeClass('iconActive');
        });
    });

    /**********************************************
     * Options Page X-editable
     **********************************************/
        //Text fields
    $(	'#min_connections, ' +
        '#disqus_shortname, ' +
        '#opponents_count, ' +
        '#tos_organisation, ' +
        '#tos_country, ' +
        '#homelink, ' +
        '#google_analytics_account, ' +
        '#max_days, ' +
        '#theme, ' +
        '#license, ' +
        '#ban_dispute_link, ' +
        '#min_kills, ' +
        '#table_playerstats, ' +
        '#table_opponents, ' +
        '#table_bodyparts, ' +
        '#table_playerbody, ' +
        '#table_mapstats, ' +
        '#table_playermaps, ' +
        '#table_weaponstats, ' +
        '#table_weaponusage, ' +
        '#table_actionstats, ' +
        '#table_playeractions, ' +
        '#table_history_monthly, ' +
        '#table_history_weekly, ' +
        '#table_ctime, ' +
        '#table_current_svars, ' +
        '#table_current_clients, ' +
        '#text-field').editable();

    // Select Fields
    $(	'#hide_banned, ' +
        '#must_accept_cookies, ' +
        '#showMIA, ' +
        '#show_donate_button, ' +
        '#show_banlist, ' +
        '#show_bans_only, ' +
        '#ban_disputable, ' +
        //Locked
        '#min_connections_locked, ' +
        '#hide_banned_locked, ' +
        '#disqus_shortname_locked, ' +
        '#opponents_count_locked, ' +
        '#tos_organisation_locked, ' +
        '#tos_country_locked, ' +
        '#homelink_locked, ' +
        '#must_accept_cookies_locked, ' +
        '#google_analytics_account_locked, ' +
        '#max_days_locked, ' +
        '#theme_locked, ' +
        '#showMIA_locked, ' +
        '#show_donate_button_locked, ' +
        '#license_locked, ' +
        '#show_banlist_locked, ' +
        '#show_bans_only_locked, ' +
        '#ban_dispute_link_locked, ' +
        '#ban_disputable_locked, ' +
        '#min_kills_locked').editable({
            source: [
                {value: 1, text: 'Yes'},
                {value: 0, text: 'No'}
            ]
        });
});