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
	'gameName' => 'Medal of Honor',
);
/*
//*********************
// These are the standard MOH settings
//*********************

// Teamnames and colors
$team1 = "Opfor"; // red team
$team2 = "Coalition"; // blue team
$spectators = "Spectators";


//*********************
// Weapons names
//*********************

//Rifleman
$w['H_M16'] = "M16A4";
$w['H_M16RGL'] = "M16A4 Grenade Launcher";
$w['H_AK47'] = "AK-47";
$w['H_AK47RGL'] = "AK-47 Grenade Launcher";
$w['H_M240'] = "M240 Machine Gun";
$w['H_F2000'] = "FN2000";
$w['H_F2000RGL'] = "FN2000 Grenade Launcher";
$w['H_M249'] = "M249 Machine Gun";
$w['H_M60'] = "M60 Light Machine Gun";
$w['H_PKM'] = "PKM Light Machine Gun";
$w['H_RPK'] = "RPK Light Machine Gun";

//Special Ops
$w['H_M4'] = "M4A1 Carbine";
$w['H_AKS74U'] = "AKS-74u Carbine";
$w['H_AT4'] = "AT4 Rocket Launcher";
$w['H_RPG'] = "RPG-7 Anti Tank Weapon";
$w['H_870MCS'] = "M870MCS Shotgun";
$w['H_MP7'] = "MP7A1 Submachine Gun";
$w['H_P90'] = "P90 Submachine Gun";
$w['H_TOZ194'] = "TOZ-194 Shotgun";

//Sniper
$w['H_M21'] = "M21 Battle Rifle";
$w['H_M24'] = "M24 Sniper Rifle";
$w['H_G3'] = "G3 Battle Rifle";
$w['H_SV98'] = "SV-98 Sniper Rifle";
$w['H_SVD'] = "SVD Sniper Rifle";

//Pistols
$w['H_M9'] = "M9 Semi-Automatic Pistol";
$w['H_TARIQ'] = "Tariq pistol";

//Scorechains
$w['H_MORTAR'] = "Mortar Strike";
$w['H_MORTARTEAM2'] = "Mortar Strike";
$w['H_ROCKET'] = "Rocket Strike";
$w['H_ROCKETTEAM2'] = "Rocket Strike";
$w['H_ARTILLERY'] = "Artillery Strike";
$w['H_ARTILLERYTEAM2'] = "Artillery Strike";
$w['H_FIGHTER'] = "Airstrike";
$w['H_FIGHTERTEAM2'] = "Airstrike";
$w['H_A10'] = "A10 Strafing Run";
$w['H_A10TEAM2'] = "A10 Strafing Run";
$w['H_HELLFIRE'] = "Missile Attack";
$w['H_SHTURM'] = "Missile Attack";
$w['H_TOMAHAWK'] = "Tomahawk Missiles";

//Vehicles
$w['M3A3#IFVAutoCannon'] = "M3A3 Bradley (Auto Cannon)";
$w['M3A3#RemoteMG'] = "M3A3 Bradley (Remote MG)";
$w['H_ROADKILL'] = "Road Kill";

//Stationary
$w['KORN'] = "9M133 Kornet";
$w['KORD#Gun'] = "Heavy MG KORD";

//Misc
$w['H_AXE'] = "Axe";
$w['H_KNIFE'] = "Combat Knife";
$w['H_HG'] = "Hand Grenade";
$w['H_SHG'] = "Smoke Grenade";
$w['H_C4'] = "C4 Explosive";
$w['H_IED'] = "I.E.D";
$w['KILL_MSG_SUICIDE'] = "Suicide";
$w['[]'] = $text["notidentify"];

//*********************
// Map names
//*********************

//Combat Mission
$m['levels/mp_01'] = "Mazar-i-Sharif Airfield (Combat Mission)";
$m['levels/mp_02'] = "Shah-i-Khot Mountains (Combat Mission)";
$m['levels/mp_04'] = "Helmand Valley (Combat Mission)";

//Sector Control
$m['levels/mp_05_domination'] = "Kandahar Marketplace (Sector Control)";
$m['levels/mp_06_domination'] = "Diwagal Camp (Sector Control)";
$m['levels/mp_08_domination'] = "Kunar Base (Sector Control)";
$m['levels/mp_09_domination'] = "Kabul City Ruins (Sector Control)";
$m['levels/mp_10_domination'] = "Garmzir Town (Sector Control)";

//Objective Raid
$m['levels/mp_05_overrun'] = "Kandahar Marketplace (Objective Raid)";
$m['levels/mp_06_overrun'] = "Diwagal Camp (Objective Raid)";
$m['levels/mp_08_overrun'] = "Kunar Base (Objective Raid)";
$m['levels/mp_09_overrun'] = "Kabul City Ruins (Objective Raid)";
$m['levels/mp_10_overrun'] = "Garmzir Town (Objective Raid)";

//Team Assault
$m['levels/mp_05_tdm'] = "Kandahar Marketplace (Team Assault)";
$m['levels/mp_06_tdm'] = "Diwagal Camp (Team Assault)";
$m['levels/mp_08_tdm'] = "Kunar Base (Team Assault)";
$m['levels/mp_09_tdm'] = "Kabul City Ruins (Team Assault)";
$m['levels/mp_10_tdm'] = "Garmzir Town (Team Assault)";

//Clean Sweep
$m['levels/mp_01_elimination'] = "Bagram Hangar (Clean Sweep)";
$m['levels/mp_03_elimination'] = "Khyber Caves (Clean Sweep)";
$m['levels/mp_06_elimination'] = "Diwagal Camp (Clean Sweep)";
$m['levels/mp_09_elimination'] = "Kabul City Ruins (Clean Sweep)";

//Hot Zone
$m['levels/mp_02_koth'] = "Hindu Kush Pass (Hot Zone)";
$m['levels/mp_04_koth'] = "Helmand River Hill (Hot Zone)";
$m['levels/mp_07_koth'] = "Korengal Outpost (Hot Zone)";

$m['None'] = "-Unknown-";

//*********************
// Event names
//*********************
$e[''] = "";

//*********************
// Bodypart names
//*********************
$b['None'] = $text["noneurt"];
$b['body'] = $text["notidentify"];

*/
