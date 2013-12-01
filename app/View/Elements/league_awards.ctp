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

if (!function_exists('getAwardDescription')) {

	/**
	 * @param null $val
	 * @return string
	 */
	function getAwardDescription($val = null) {
		$d = array(
			'skill' => __('Best skill'),
			'kills' => __('Most kills'),
			'ratio' => __('Best Ratio'),
			'winstreak' => __('Highest winstreak'),
			'rounds' => __('Most rounds played'),
			'efficiency' => __('Most kills per round'),
		);
		if (!isset($d[$val])) {
			$description = '';
		} else {
			$description = $d[$val];
		}
		return $description;
	}

}

//-------------------------------------------------------------------

$awards = $this->requestAction('leagues/getawards/' . $leaguenr);
//pr($awards);

if (!$awards[0][0]) {
	echo '<div class ="alert">
	<button type="button" class="close" data-dismiss="alert">&times;</button>
	Empty League, no awards here...
	</div>';
} else {
	$result = array();

	/* Create an easier array */
	foreach ($awards as $k => $v) {
		foreach ($v as $k2 => $v2) {
			//pr($v2);
			$name = $v2['Player']['name'];
			$id = $v2['League']['id'];
			if (array_key_exists('0', $v2)) {
				$key = key($v2[0]);
				$value = $v2[0][$key];
			} else {
				$key = key($v2['League']);
				$value = $v2['League'][$key];
			}
			$result[$key] = array($name, $id, $value);
		}
		//pr($result);
	}

	?>

	<div class="row">

		<?php
		/* Deal with that array */
		foreach ($result as $k => $v) {
		?>
			<div class="span2">
				<table class="table table-bordered">
					<tr><td style="text-align: center"><strong><?php echo ucwords($k) ?> Award</strong></td></tr>
					<tr><td style="text-align: center"><?php echo $this->Html->image('medals/silhouettes/xlr_pro_default.png', array(
						'width' => '50px',
						'class' => 'center'
					)) ?></td></tr>
					<tr><td style="text-align: center">
							<?php echo $this->Html->link($v[0], array(
							'controller' => 'player_stats',
							'action' => 'view',
							'server' => Configure::read('server_id'),
							$v[1],
						))
						?><br /> <small>(<?php echo getAwardDescription($k) . ': ' . $this->Number->precision($v[2], 0) ?>)</small></td></tr>
				</table>
			</div>
		<?php
		} ?>
	</div>

<?php
}
