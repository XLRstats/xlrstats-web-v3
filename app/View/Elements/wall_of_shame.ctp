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
 * @package       app.View.Elements
 * @since         XLRstats v3.0
 * @version       0.1
 */

$data = $this->requestAction('penalties/wallofshame/');
$nameTruncation = 30;

//pr($data);
//if (empty($data)) return null;
?>
<div class="row">
<?php
		foreach ($data as $k => $v) {
			?>
			<div class="span2">
				<table class="table table-bordered">
					<tr><td style="text-align: center"><strong><?php echo 'Most ' . ucwords($k) ?></strong></td></tr>
					<tr><td style="text-align: center"><?php echo $this->Html->image('medals/silhouettes/xlr_shame_deaths.png', array(
								'width' => '50px',
								'class' => 'center'
							)) ?></td></tr>
					<tr><td style="text-align: center">
							<?php if (array_key_exists('Player', $v)) {
								echo $v['Player']['name'];
								echo '<br /> <small>(' . $k . ': ' . $this->Number->precision($v[0]['penalties'], 0) . ')</small>';
							} else {
								echo '-<br />-';
							} ?>
							</td></tr>
				</table>
			</div>
		<?php } ?>
</div>
