<?php
/***************************************************************************
 * Xlrstats Webmodule
 * Webrfront for XLRstats for B3 (www.bigbrotherbot.com)
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
	'gameName' => 'Call of Duty 4: Modern Warfare',

	/**
	 * Team names
	 */
	'teams' => array(
		'2' => 'OpFor / Spetznaz',  // Red team
		'3' => 'Marines / S.A.S.',  // Blue team
		'-1' => 'Spectators'
	),
);
/*
//*********************
// These are the standard cod4 settings
//*********************

// Teamnames and colors
$team1 = "OpFor / Spetznaz"; // red team
$team2 = "Marines / S.A.S."; // blue team
$spectators = "Spectators";


//*********************
// Weapons names
//*********************
//Stock CoD4
$w['ac130_25mm_mp'] = "AC 130 25mm";
$w['ac130_40mm_mp'] = "AC 130 40mm";
$w['ac130_105mm_mp'] = "AC 130 105mm";
$w['airstrike_mp'] = "Air Strike";
$w['ak47_acog_mp'] = "AK-47 ACOG";
$w['ak47_gl_mp'] = "AK-47 Grenade Launcher";
$w['ak47_mp'] = "AK-47";
$w['ak47_reflex_mp'] = "AK-47 Reflex";
$w['ak74u_acog_mp'] = "AK-74u ACOG";
$w['ak74u_mp'] = "AK-74u";
$w['ak47_silencer_mp'] = "AK-47 Silencer";
$w['ak74u_reflex_mp'] = "AK-74u Reflex";
$w['ak74u_silencer_mp'] = "AK74u Silencer";
$w['artillery_mp'] = "Artillery";
$w['at4_mp'] = "AT4";
$w['aw50_acog_mp'] = "AW-50 ACOG";
$w['aw50_mp'] = "AW-50";
$w['barrett_acog_mp'] = "Barrett-50 ACOG";
$w['barrett_mp'] = "Barrett-50";
$w['beretta_mp'] = "Beretta";
$w['beretta_silencer_mp'] = "Beretta Silencer";
$w['binoculars_mp'] = "Binoculars";
$w['brick_blaster_mp'] = "Brick Blaster";
$w['brick_bomb_mp'] = "Brick Bomb";
$w['briefcase_bomb_defuse_mp'] = "Bomb Defuse";
$w['briefcase_bomb_mp'] = "Bomb Set";
$w['c4_mp'] = "C-4";
$w['claymore_mp'] = "Claymore Mine";
$w['cobra_20mm_mp'] = "Cobra 20mm";
$w['cobra_ffar_mp'] = "Cobra Rocket";
$w['colt45_mp'] = "Colt .45";
$w['colt45_silencer_mp'] = "Colt .45 Silencer";
$w['concussion_grenade_mp'] = "Concussion Grenade";
$w['defaultweapon_mp'] = "Default Weapon";
$w['deserteagle_mp'] = "Colt Desert Eagle";
$w['deserteaglegold_mp'] = "Colt Desert Eagle Gold";
$w['destructible_car'] = "Exploding Vehicle";
$w['dragunov_acog_mp'] = "Dragunov ACOG";
$w['dragunov_mp'] = "Dragunov";
$w['flash_grenade_mp'] = "Flash Grenade";
$w['frag_grenade_mp'] = "Frag Grenade";
$w['frag_grenade_short_mp'] = "Short Fuse Frag Grenade";
$w['g3_acog_mp'] = "G3 ACOG";
$w['g3_gl_mp'] = "G3 Grenade Launcher";
$w['g3_mp'] = "G3";
$w['g3_reflex_mp'] = "G3 Reflex";
$w['g3_silencer_mp'] = "G3 Silencer";
$w['g36c_acog_mp'] = "G36c ACOG";
$w['g36c_gl_mp'] = "G36c Grenade Launcher";
$w['g36c_mp'] = "G36c";
$w['g36c_reflex_mp'] = "G36c Reflex";
$w['g36c_silencer_mp'] = "G36c Silencer";
$w['gl_ak47_mp'] = "Grenade Launcher AK-47";
$w['gl_g3_mp'] = "Grenade Launcher G3";
$w['gl_g36c_mp'] = "Grenade Launcher G36c";
$w['gl_m4_mp'] = "Grenade Launcher M4";
$w['gl_m14_mp'] = "Grenade Launcher M14";
$w['gl_m16_mp'] = "Grenade Launcher M16";
$w['gl_mp'] = "Grenade Launcher";
$w['helicopter_mp'] = "Helicopter";
$w['hind_ffar_mp'] = "HIND Rocket";
$w['humvee_50cal_mp'] = "Humvee .50 cal.";
$w['TT30_mp'] = "TT 30";
$w['location_selector_mp'] = "Location Selector";
$w['m4_acog_mp'] = "M4 ACOG";
$w['m4_gl_mp'] = "M4 Grenade Launcher";
$w['m4_mp'] = "M4";
$w['m4_reflex_mp'] = "M4 Reflex";
$w['m4_silencer_mp'] = "M4 Silencer";
$w['m14_acog_mp'] = "M14 ACOG";
$w['landmine_mp'] = "Landmine";
$w['m14_gl_mp'] = "M14 Grenade Launcher";
$w['m14_mp'] = "M14";
$w['m14_reflex_mp'] = "M14 Reflex";
$w['m14_silencer_mp'] = "M14 Silencer";
$w['m16_acog_mp'] = "M16 ACOG";
$w['m16_gl_mp'] = "M16 Grenade Launcher";
$w['m16_mp'] = "M16";
$w['m16_reflex_mp'] = "M16 Reflex";
$w['m16_silencer_mp'] = "M16 Silencer";
$w['m21_acog_mp'] = "M21 ACOG";
$w['m21_mp'] = "M21";
$w['m40a3_acog_mp'] = "M40A3 ACOG";
$w['m40a3_mp'] = "M40A3";
$w['m60e4_acog_mp'] = "M60E4 ACOG";
$w['m60e4_grip_mp'] = "M60E4 Grip";
$w['m60e4_mp'] = "M60E4";
$w['m60e4_reflex_mp'] = "M60E4 Reflex";
$w['m1014_grip_mp'] = "M1014 Grip";
$w['m1014_mp'] = "M1014";
$w['m1014_reflex_mp'] = "M1014 Reflex";
$w['mp5_acog_mp'] = "MP5 ACOG";
$w['mp5_mp'] = "MP5";
$w['mp5_reflex_mp'] = "MP5 Reflex";
$w['mp5_silencer_mp'] = "MP5 Silencer";
$w['mp44_mp'] = "MP44";
$w['p90_acog_mp'] = "P90 ACOG";
$w['p90_mp'] = "P90";
$w['p90_reflex_mp'] = "P90 Reflex";
$w['p90_silencer_mp'] = "P90 Silencer";
$w['radar_mp'] = "Radar";
$w['remington700_acog_mp'] = "Remington 700 ACOG";
$w['remington700_mp'] = "Remington 700";
$w['rpd_acog_mp'] = "RPD ACOG";
$w['rpd_grip_mp'] = "RPD Grip";
$w['rpd_mp'] = "RPD";
$w['rpd_reflex_mp'] = "RPD Reflex";
$w['rpg_mp'] = "RPG";
$w['saw_acog_mp'] = "SAW ACOG";
$w['saw_bipod_crouch_mp'] = "SAW Bipod Crouched";
$w['saw_bipod_prone_mp'] = "SAW Bipod Prone";
$w['saw_bipod_stand_mp'] = "SAW Bipod Standing";
$w['saw_grip_mp'] = "SAW Grip";
$w['saw_mp'] = "SAW";
$w['saw_reflex_mp'] = "SAW Reflex";
$w['skorpion_acog_mp'] = "Skorpion ACOG";
$w['skorpion_mp'] = "Skorpion";
$w['skorpion_reflex_mp'] = "Skorpion Reflex";
$w['skorpion_silencer_mp'] = "Skorpion Silencer";
$w['smoke_grenade_mp'] = "Smoke Grenade";
$w['usp_mp'] = "USP";
$w['usp_silencer_mp'] = "USP Silencer";
$w['uzi_acog_mp'] = "UZI ACOG";
$w['uzi_mp'] = "UZI";
$w['uzi_reflex_mp'] = "UZI Reflex";
$w['uzi_silencer_mp'] = "UZI Silencer";
$w['winchester1200_grip_mp'] = "Winchester 1200 Grip";
$w['winchester1200_mp'] = "Winchester 1200";
$w['winchester1200_reflex_mp'] = "Winchester 1200 Reflex";
$w['mod_melee'] = "Knife";
$w['mod_falling'] = "Falling";

//No weapon? 
$w['none'] = "Bad luck...";

//*********************
// Map names
//*********************
// Stock CoD4
$m['mp_backlot'] = "Backlot";
$m['mp_bloc'] = "Bloc";
$m['mp_bog'] = "Bog";
$m['mp_cargoship'] = "Wet Work";
$m['mp_citystreets'] = "City Streets";
$m['mp_convoy'] = "Convoy";
$m['mp_countdown'] = "Countdown";
$m['mp_crash'] = "Crash";
$m['mp_crossfire'] = "Crossfire";
$m['mp_farm'] = "Down Pour";
$m['mp_overgrown'] = "Overgrown";
$m['mp_pipeline'] = "Pipeline";
$m['mp_shipment'] = "Shipment";
$m['mp_showdown'] = "Showdown";
$m['mp_strike'] = "Strike";
$m['mp_vacant'] = "Vacant";
$m['mp_crash_snow'] = "Winter Crash";
$m['mp_carentan'] = "China Town";
$m['mp_creek'] = "Creek";
$m['mp_broadcast'] = "Broadcast";
$m['mp_killhouse'] = "Killhouse";


// Custom Maps
$m['mp_backlot_night'] = "Backlot (Night)";
$m['mp_village'] = "Village";
$m['mp_village_night'] = "Village (Night)";
$m['mp_qmx_matmata'] = "Matmata";

//*********************
// Event names
//*********************
$e['bomb_plant'] = "Bomb Plant";
$e['bomb_defuse'] = "Bomb Defuse";
$e['re_pickup'] = "Pickup";
$e['re_capture'] = "Capture";
$e['re_drop'] = "Drop";


//*********************
// Bodypart names
//*********************
$b['head'] = $text["head"];
$b['neck'] = $text["neck"];
$b['torso_lower'] = $text["torso_lower"];
$b['torso_upper'] = $text["torso_upper"];
$b['left_arm_upper'] = $text["left_arm_upper"];
$b['left_arm_lower'] = $text["left_arm_lower"];
$b['left_hand'] = $text["left_hand"];
$b['right_arm_upper'] = $text["right_arm_upper"];
$b['right_arm_lower'] = $text["right_arm_lower"];
$b['right_hand'] = $text["right_hand"];
$b['left_leg_upper'] = $text["left_leg_upper"];
$b['left_leg_lower'] = $text["left_leg_lower"];
$b['left_foot'] = $text["left_foot"];
$b['right_leg_upper'] = $text["right_leg_upper"];
$b['right_leg_lower'] = $text["right_leg_lower"];
$b['right_foot'] = $text["right_foot"];
$b['none'] = $text["totaldisrupt"];

*/
