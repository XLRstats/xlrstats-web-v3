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
 * @package       app.
 * @since         XLRstats v3.0
 * @version       0.1
 */

?>
<div id="chart_wrapper" style="float: right; clear: both">
<div id="chart_div1" style="float: right; margin: 5px; border: 1px solid #999"><?php $this->GoogleChart->createJsChart($chart1); ?></div><br>
<div id="chart_div2" style="float: right; margin: 5px; border: 1px solid #999"><?php $this->GoogleChart->createJsChart($chart2); ?></div><br>
<div id="chart_div3" style="float: right; margin: 5px; border: 1px solid #999"><?php $this->GoogleChart->createJsChart($chart3); ?></div>
</div>