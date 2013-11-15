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
	'gameName' => 'Call of Duty: United Offensive',
);
/*
//*********************
// These are the standard CoD:UO settings
//*********************

// Teamnames and colors
$team1 = "Axis"; // red team
$team2 = "Allies"; // blue team
$spectators = "Spectators";


//*********************
// Weapons names
//*********************
//Stock CoD
$w['bar_mp'] = "BAR";
$w['bar_slow_mp'] = "BAR (Slow)";
$w['bren_mp'] = "Bren";
$w['colt_mp'] = "Colt";
$w['enfield_mp'] = "Enfield";
$w['kar98k_mp'] = "Kar98k";
$w['kar98k_sniper_mp'] = "Kar98k (Sniper)";
$w['fg42_mp'] = "FG 42";
$w['fg42_semi_mp'] = "FG 42 (Semi)";
$w['fraggrenade_mp'] = "Grenade (US)";
$w['grenade_mp'] = "Grenade";
$w['luger_mp'] = "Luger";
$w['m1carbine_mp'] = "M1 Carbine";
$w['m1garand_mp'] = "M1 Garand";
$w['mg42_bipod_mp'] = "MG-42";
$w['mg42_bipod_stand_mp'] = "MG-42 (Stand)";
$w['mg42_bipod_prone_mp'] = "MG-42 (Prone)";
$w['mk1britishfrag_mp'] = "Grenade (British)";
$w['mod_explosive_mp'] = "Explosion";
$w['mod_falling_mp'] = "Gravity";
$w['mod_melee_mp'] = "Bash";
$w['mod_projectile_mp'] = "Projectile";
$w['mod_suicide_mp'] = "Suicide";
$w['mosin_nagant_mp'] = "Nagant";
$w['mosin_nagant_sniper_mp'] = "Nagant (Sniper)";
$w['mp40_mp'] = "MP-40";
$w['mp44_mp'] = "MP-44";
$w['mp44_semi_mp'] = "MP-44 (Semi)";
$w['panzerfaust_mp'] = "Panzerfaust";
$w['ppsh_mp'] = "PPSH";
$w['ppsh_semi_mp'] = "PPSH (Semi)";
$w['rgd-33russianfrag_mp'] = "Grenade (Russian)";
$w['springfield_mp'] = "Springfield";
$w['sten_mp'] = "Sten";
$w['stielhandgranate_mp'] = "Grenade (German)";
$w['thompson_mp'] = "Thompson";
$w['thompson_semi_mp'] = "Thompson (Semi)";

//Stock UO
$w['gewehr43_mp'] = "Gewehr 43";
$w['svt40_mp'] = "Tokarev SVT-40";
$w['panzeriv_turret_mp'] = "Panzer IV turret";
$w['t34_turret_mp'] = "T34 turret";
$w['sherman_turret_mp'] = "Sherman turret";
$w['flak88_turret_mp'] = "Flak-88";
$w['mg42_turret_mp'] = "MG-42 (turret)";
$w['mg30cal_mp'] = "MG 30-cal.";
$w['mg34_mp'] = "Machinegewehr 34 (MG-34)";
$w['mg34_tank_mp'] = "MG-34 (tank)";
$w['sg43_tank_mp'] = "SG-43 MG (tank)";
$w['50cal_tank_mp'] = "50-cal. (tank)";
$w['su152_turret_mp'] = "SU-152 (turret)";
$w['elefant_turret_mp'] = "Elefant (turret)";
$w['sg43_turret_mp'] = "SG-43 (turret)";
$w['flamethrower_mp'] = "Flammenwerfer 35 (Flamethrower)";
$w['bazooka_mp'] = "M1A1 Bazooka";
$w['panzerschreck_mp'] = "Panzerschreck";
$w['satchelcharge_mp'] = "Satchel Charge";
$w['webley_mp'] = "Webley Mk-4";
$w['30cal_tank_mp'] = "30-cal. (tank)";
$w['dp28_mp'] = "Degtyarev-Pekhotny 28 (DP-28)";
$w['tt33_mp'] = "Tokarev TT-33";
$w['binoculars_artillery_mp'] = "Pinpointing Artillery Support";

//AWE weapons
$w['sten_silenced_mp'] = "Silenced Sten";

//No weapon? 
$w['none'] = "Bad luck...";

//*********************
// Map names
//*********************
// Stock CoD
$m['mp_bocage'] = "Bocage";
$m['mp_brecourt'] = "Brecourt";
$m['mp_carentan'] = "Carentan";
$m['mp_chateau'] = "Chateau";
$m['mp_dawnville'] = "Dawnville";
$m['mp_depot'] = "Depot";
$m['mp_harbor'] = "Harbor";
$m['mp_hurtgen'] = "Hurtgen";
$m['mp_neuville'] = "Neuville";
$m['mp_pavlov'] = "Pavlov";
$m['mp_powcamp'] = "POW Camp";
$m['mp_railyard'] = "Railyard";
$m['mp_rocket'] = "Rocket";
$m['mp_ship'] = "Ship";
$m['mp_stalingrad'] = "Stalingrad";

//Stock UO
$m['mp_uo_stanjel'] = "Stanjel (UO)";
$m['mp_arnhem'] = "Arnhem";
$m['mp_berlin'] = "Berlin";
$m['mp_italy'] = "Italy";
$m['mp_sicily'] = "Sicily";
$m['mp_kharkov'] = "Kharkov";
$m['mp_kursk'] = "Kursk";
$m['mp_rhinevalley'] = "Rhine Valley";
$m['mp_ponyri'] = "Ponyri";
$m['mp_foy'] = "Foy";
$m['mp_cassino'] = "Monte Cassino";

//Custom CoD
$m['nuenen'] = "Nuenen";
$m['mp_stanjel'] = "Stanjel";
$m['mp_maaloy_final'] = "Maaloy (final)";
$m['mp_omahabeach'] = "Omaha Beach";
$m['univermag'] = "Univermag";
$m['mp_falaisevilla'] = "Falaise Villa";
$m['mp_viervilleN'] = "Vierville (N)";
$m['mp_amberville'] = "Amberville";
$m['german_town'] = "German Town";
$m['mp_tigertown'] = "Tiger Town";
$m['mp_abbey'] = "Abbey";
$m['mp_jailbreak'] = "Jailbreak";
$m['mp_stcomedumont'] = "St Come du Mont";

$m['unknown'] = "Custom Map";
$m['None'] = "-Unknown-";


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
