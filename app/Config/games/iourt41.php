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
 * @package       app.Config.games
 * @since         XLRstats v3.0
 * @version       0.1
 */

$config = array(
	'gameName' => 'Urban Terror',

	'maps' => array(
		//Map Image Path
		'image_path' => 'http://www.xlrstats.com/xlrstats-images/v3.app.img/maps/urt/middle/',

		//*********************
		// Map names
		//*********************
		// console_name => array('Readable Name', '', 'image')
		'ut4_turnpike' => array('Turnpike', '', 'ut4_turnpike.jpg'),
		'ut4_dressingroom' => array('Dressing Room', '', 'ut4_dressingroom.jpg'),
		'ut4_algiers' => array('Algiers', '', 'ut4_algiers.jpg'),
		'ut4_uptown' => array('Uptown', '', 'ut4_uptown.jpg'),
		'ut4_austria' => array('Austria', '', 'ut4_austria.jpg'),
		'ut4_casa' => array('Casa', '', 'ut4_casa.jpg'),
		'ut4_abbey' => array('Abbey', '', 'ut4_abbey.jpg'),
		'ut4_crossing' => array('Crossing', '', 'ut4_crossing.jpg'),
		'ut4_prague' => array('Prague', '', 'ut4_prague.jpg'),
		'ut4_ramelle' => array('Ramelle', '', 'ut4_ramelle.jpg'),
		'ut4_elgin' => array('Elgin', '', 'ut4_elgin.jpg'),
		'ut4_toxic' => array('Toxic', '', 'ut4_toxic.jpg'),
		'ut4_thingley' => array('Thingley', '', 'ut4_thingley.jpg'),
		'ut4_ambush' => array('Ambush', '', 'ut4_ambush.jpg'),
		'ut4_riyadh' => array('Riyadh', '', 'ut4_riyadh.jpg'),
		'ut4_tombs' => array('Tombs', '', 'ut4_tombs.jpg'),
		'ut4_mandolin' => array('Mandolin', '', 'ut4_mandolin.jpg'),
		'ut4_sanc' => array('Sanctuary', '', 'ut4_sanc.jpg'),
		'ut4_snoppis' => array('Snoppis', '', 'ut4_snoppis.jpg'),
		'ut4_firingrange' => array('Firing Range', '', 'ut4_firingrange.jpg'),
		'ut4_kingdom' => array('Kingdom', '', 'ut4_kingdom.jpg'),
		'ut4_swim' => array('Swim', '', 'ut4_swim.jpg'),
		'ut4_suburbs' => array('Suburbs', '', 'ut4_suburbs.jpg'),

		'unknown' => array('Custom Map', '', 'image.jpg'),
		'None' => array('-Unknown-', '', 'image.jpg'),

	),

	'weapons' => array(
		//Weapon Image Path
		'image_path' => 'http://www.xlrstats.com/xlrstats-images/v3.app.img/weapons/urt/small/',

		//*********************
		// Weapon names
		//*********************
		// console_name => array('Readable Name', '', 'image', 'external link to extra information')
		'0' => array('Unknown', '', '0.jpg', ''),
		'1' => array('Drowning', '', '1.jpg', ''),
		'2' => array('Got Slimed', '', '2.jpg', ''),
		'3' => array('Meltdown', '', '3.jpg', ''),
		'4' => array('Crushed', '', '4.jpg', ''),
		'5' => array('Telefragged', '', '5.jpg', ''),
		'6' => array('Doing the Lemming thing', '', '6.jpg', ''),
		'7' => array('Suicide', '', '7.jpg', ''),
		'8' => array('Laser Target', '', '8.jpg', ''),
		'9' => array('Damage by triggers', '', '9.jpg', ''),
		'10' => array('Changing Team', '', '10.jpg', ''),
		'12' => array('KaBar Knife cut', '', '12.jpg', 'http://urbanterror.wikia.com/wiki/KaBar_Knife'),
		'13' => array('KaBar Knife thrown', '', '13.jpg', 'http://urbanterror.wikia.com/wiki/KaBar_Knife'),
		'14' => array('Beretta 92G', '', '14.jpg', 'http://urbanterror.wikia.com/wiki/Beretta_92G'),
		'15' => array('IMI .50 AE Desert Eagle', '', '15.jpg', 'http://urbanterror.wikia.com/wiki/IMI_.50_AE_Desert_Eagle'),
		'16' => array('Franchi Spas 12', '', '16.jpg', 'http://urbanterror.wikia.com/wiki/Franchi_SPAS-12'),
		'17' => array('H&K UMP45', '', '17.jpg', 'http://urbanterror.wikia.com/wiki/H%26K_UMP45'),
		'18' => array('H&K MP5k', '', '18.jpg', 'http://urbanterror.wikia.com/wiki/H%26K_MP5k'),
		'19' => array('ZM LR300 ML', '', '19.jpg', 'http://urbanterror.wikia.com/wiki/ZM_LR300_ML'),
		'20' => array('H&K G36', '', '20.jpg', 'http://urbanterror.wikia.com/wiki/H%26K_G36'),
		'21' => array('H&K PSG1', '', '21.jpg', 'http://urbanterror.wikia.com/wiki/H%26K_PSG-1'),
		'22' => array('HK 69', '', '22.jpg', ''),
		'23' => array('Excessive Bloodloss', '', '23.jpg', ''),
		'37' => array('HK 69 hit', '', '37.jpg', ''),
		'25' => array('High Explosive Grenade', '', '25.jpg', 'http://urbanterror.wikia.com/wiki/HE_Grenade'),
		'26' => array('Flash Grenade', '', '26.jpg', ''),
		'27' => array('Smoke Grenade', '', '27.jpg', 'http://urbanterror.wikia.com/wiki/Smoke_Grenade'),
		'28' => array('Remmington SR8', '', '28.jpg', 'http://urbanterror.wikia.com/wiki/Remington_SR8'),
		'29' => array('Sacrificed his life', '', '29.jpg', ''),
		'30' => array('AK 103', '', '30.jpg', 'http://urbanterror.wikia.com/wiki/Kalashnikov_AK-103'),
		'31' => array('Exploded', '', '31.jpg', ''),
		'32' => array('Bitchslapped', '', '32.jpg', ''),
		'35' => array('IMI Negev', '', '35.jpg', 'http://urbanterror.wikia.com/wiki/IMI_Negev'),
		'38' => array('Colt M4A1', '', '38.jpg', 'http://urbanterror.wikia.com/wiki/Colt_M4A1'),
		'24' => array('Got kicked', '', '24.jpg', ''),
		'40' => array('Curb Stomped', '', '40.jpg', ''),
		'Team_Switch_Penalty' => array('Unfair Teamswitch Suicide Penalty', '', 'Team_Switch_Penalty.jpg', ''),
		'mod_falling' => array('Doing the Lemming thing', '', 'mod_falling.jpg', ''),
		//No weapon?
		'' => array('Bad luck...', '', 'image.jpg', ''),
	),

	'events' => array(

		//*********************
		// Event names
		//*********************
		'bomb_plant' => array('Bomb Plant'),
		'bomb_defuse' => array('Bomb Defuse'),
		're_pickup' => array('Pickup'),
		're_capture' => array('Capture'),
		're_drop' => array('Drop'),
	),


	/**
	 * Bodypart names
	 */
	'body_parts' => array(
		/**
		 * fixed_name => array ('console_name' => 'Easy Name')
		 * DO NOT CHANGE 'fixed_name's
		 */
		'helmet' => array('1' => 'Helmet'),
		'head' => array('0' => 'Head'),
		'torso_lower' => array('3' => 'Kevlar'),
		'torso_upper' => array('2' => 'Unprotected Torso'),
		'right_arm_upper' => array('4' => 'Arms'),
		'right_leg_upper' => array('5' => 'Legs'),
		'none' => array('6' => 'Total disruption'),
	),

	/**
	 * Personal Achievements, pins, ribbons, medals
	 */
	'achievements' => array(
		'Assault Class' => array(
			'19',
			'20',
			'30',
			'38',
		),
		'LMG Class' => array(
			'17',
			'18',
		),
		'Sniper Class' => array(
			'21',
			'28',
		),
		'Explosives Spammer' => array(
			'22',
			'25',
			'37',
		),
		'Pistol Ninja' => array(
			'14',
			'15',
		),
	)
);
/*
//*********************
// These are the standard Urban Terror settings
//*********************

// Teamnames and colors
function getTeamName() {
  $x_t[1] = 'Spectators';
  $x_t[2] = 'Red Dragons';
  $x_t[3] = 'SWAT';

  return $x_t;
}

*/