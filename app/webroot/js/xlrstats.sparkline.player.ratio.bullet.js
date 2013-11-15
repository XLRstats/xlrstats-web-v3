$(function() {
    $('.ratiosparkline').sparkline('html', { type:'bullet', disableTooltips:true, width:'100px', performanceColor:'#ddd', targetColor:'#3d4053', rangeColors:[]});
});

/*
options:
targetColor - The colour of the vertical target marker
targetWidth - The width of the target marker in pixels
performanceColor - The color of the performance measure horizontal bar
rangeColors - Colors to use for each qualitative range background color - This must be a javascript array. eg ['red','green', '#22f']
*/
