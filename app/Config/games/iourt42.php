<?php
/***************************************************************************
 * Xlrstats Webmodule
 * Webfront for XLRstats for B3 (www.bigbrotherbot.com)
 * (c) 2004-2010 www.xlr8or.com (mailto:xlr8or@xlr8or.com)
 ***************************************************************************/

/***************************************************************************
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Library General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 *
 *  http://www.gnu.org/copyleft/gpl.html
 ***************************************************************************/
$config = array(
	'gameName' => 'Urban Terror',

	'maps' => array(
		//Map Image Path
		'image_path' => 'http://www.xlrstats.com/xlrstats-images/v3.app.img/maps/urt/middle/',

		//*********************
		// Map names
		//*********************
		'ut4_turnpike' => array('Turnpike', 'description', 'ut4_turnpike.jpg'),
		'ut4_dressingroom' => array('Dressing Room', 'description', 'ut4_dressingroom.jpg'),
		'ut4_algiers' => array('Algiers', 'description', 'ut4_algiers.jpg'),
		'ut4_uptown' => array('Uptown', 'description', 'ut4_uptown.jpg'),
		'ut4_austria' => array('Austria', 'description', 'ut4_austria.jpg'),
		'ut4_casa' => array('Casa', 'description', 'ut4_casa.jpg'),
		'ut4_abbey' => array('Abbey', 'description', 'ut4_abbey.jpg'),
		'ut4_crossing' => array('Crossing', 'description', 'ut4_crossing.jpg'),
		'ut4_prague' => array('Prague', 'description', 'ut4_prague.jpg'),
		'ut4_ramelle' => array('Ramelle', 'description', 'ut4_ramelle.jpg'),
		'ut4_elgin' => array('Elgin', 'description', 'ut4_elgin.jpg'),
		'ut4_toxic' => array('Toxic', 'description', 'ut4_toxic.jpg'),
		'ut4_thingley' => array('Thingley', 'description', 'ut4_thingley.jpg'),
		'ut4_ambush' => array('Ambush', 'description', 'ut4_ambush.jpg'),
		'ut4_riyadh' => array('Riyadh', 'description', 'ut4_riyadh.jpg'),
		'ut4_tombs' => array('Tombs', 'description', 'ut4_tombs.jpg'),
		'ut4_mandolin' => array('Mandolin', 'description', 'ut4_mandolin.jpg'),
		'ut4_sanc' => array('Sanctuary', 'description', 'ut4_sanc.jpg'),
		'ut4_snoppis' => array('Snoppis', 'description', 'ut4_snoppis.jpg'),
		'ut4_firingrange' => array('Firing Range', 'description', 'ut4_firingrange.jpg'),
		'ut4_kingdom' => array('Kingdom', 'description', 'ut4_kingdom.jpg'),
		'ut4_swim' => array('Swim', 'description', 'ut4_swim.jpg'),
		'ut4_suburbs' => array('Suburbs', 'description', 'ut4_suburbs.jpg'),

		'unknown' => array('Custom Map', 'description', 'image.jpg'),
		'None' => array('-Unknown-', 'description', 'image.jpg'),

	),

	'weapons' => array(
		/** This is a translated version of the iourt41 configfile using the same images, some weapons have switched
		 * numbers, hence the different image numbers.
		 */

		//Weapon Image Path
		'image_path' => 'http://www.xlrstats.com/xlrstats-images/v3.app.img/weapons/urt/small/',

		//*********************
		// Weapon names
		//*********************
		'0' => array('Unknown', 'description', '0.jpg'),
		'1' => array('Drowning', 'description', '1.jpg'),
		//'2' => array('Got Slimed', 'description', '2.jpg'),
		'3' => array('Meltdown', 'description', '3.jpg'),
		//'4' => array('Crushed', 'description', '4.jpg'),
		'5' => array('Telefragged', 'description', '5.jpg'),
		'6' => array('Doing the Lemming thing', 'description', '6.jpg'),
		'7' => array('Suicide', 'description', '7.jpg'),
		//'8' => array('Laser Target', 'description', '8.jpg'),
		'9' => array('Damage by triggers', 'description', '9.jpg'),
		'10' => array('Changing Team', 'description', '10.jpg'),
		'12' => array('Cut by Knife', 'description', '12.jpg'),
		'13' => array('Thrown Knife', 'description', '13.jpg'),
		'14' => array('Beretta', 'description', '14.jpg'),
		'15' => array('Desert Eagle', 'description', '15.jpg'),
		'16' => array('Spas 12', 'description', '16.jpg'),
		'17' => array('UMP 45', 'description', '17.jpg'),
		'18' => array('MP5K', 'description', '18.jpg'),
		'19' => array('LR300', 'description', '19.jpg'),
		'20' => array('G36', 'description', '20.jpg'),
		'21' => array('PSG1', 'description', '21.jpg'),
		'22' => array('HK 69', 'description', '22.jpg'),
		'23' => array('Excessive Bloodloss', 'description', '23.jpg'),
		'24' => array('Got kicked', 'description', '24.jpg'),
		'25' => array('High Explosive Grenade', 'description', '25.jpg'),
		'28' => array('SR8', 'description', '28.jpg'),
		'30' => array('AK 103', 'description', '30.jpg'),
		'31' => array('Exploded', 'description', '31.jpg'),
		'32' => array('Bitchslapped', 'description', '32.jpg'),
		'33' => array('Smited', 'description', ''),
		'34' => array('Bombed', 'description', ''),
		'35' => array('Nuked', 'description', ''),
		'36' => array('Negev', 'description', '35.jpg'),
		'37' => array('HK 69 hit', 'description', '37.jpg'),
		'38' => array('M4', 'description', '38.jpg'),
		'39' => array('Glock', 'description', ''),
		'40' => array('Colt 1911', 'description', ''),
		'41' => array('Mac 11', 'description', ''),
		'42' => array('Flag', 'description', ''),
		'43' => array('Curb Stomped', 'description', '40.jpg'),
		'Team_Switch_Penalty' => array('Unfair Teamswitch Suicide Penalty', 'description', 'Team_Switch_Penalty.jpg'),
		'mod_falling' => array('Doing the Lemming thing', 'description', 'mod_falling.jpg'),
		//No weapon?
		'' => array('Bad luck...', 'description', 'image.jpg'),
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
		'head' => array('1' => 'Head'),
		'helmet' => array('4' => 'Helmet'),
		'torso_lower' => array('6' => 'Kevlar'),
		'torso_upper' => array('5' => 'Unprotected Torso'),
		'left_arm_upper' => array('7' => 'Left Arm'),
		'right_arm_upper' => array('8' => 'Right Arm'),
		'right_leg_upper' => array('9' => 'Legs'),
		'none' => array('body' => 'Total disruption'),
	),


	/**
	 * Personal Achievements, pins, ribbons, medals
	 */
	'achievements' => array(
		'Assault' => array(
			'19',
			'20',
			'30',
			'38',
		),
		'LMG' => array(
			'17',
			'18',
			'41',
		),
		'Sniper' => array(
			'21',
			'28',
		),
		'Explosives' => array(
			'22',
			'25',
			'37',
		),
		'Pistol' => array(
			'14',
			'15',
			'39',
			'40',
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