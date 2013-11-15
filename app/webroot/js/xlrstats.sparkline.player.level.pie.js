$(function() {
    //$('.ratiosparkline').sparkline('html', { type:'bullet', width:'100px', performanceColor:'#262626', targetColor:'red', rangeColors:['lightgreen', 'green', 'maroon']});
    $('.levelsparkline').sparkline('html', { type:'pie', chartRangeMax:100, offset:-90, disableTooltips:true, sliceColors:['orange', '#ddd']});
});

/**
 *   pie - Pie chart. Options:
 *       sliceColors - An array of colors to use for pie slices
 *       offset - Angle in degrees to offset the first slice - Try -90 or +90
 *       borderWidth - Width of border to draw around the pie chart, in pixels - Defaults to 0 (no border)
 *       borderColor - Color to use for the pie chart border - Defaults to #000
 */
