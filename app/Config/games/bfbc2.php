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
	'gameName' => 'BattleField Bad Company 2',
);
/*
//*********************
// These are the standard BFBC2 settings
//*********************

// Teamnames and colors
$team1 = "Red"; // red team
$team2 = "Blue"; // blue team
$spectators = "Spectators";


//*********************
// Weapons names
//*********************

//Assault
$w['AEK971'] = "AEK-971 Vintovka";
$w['XM8'] = "XM8 Prototype";
$w['F2000'] = "F2000 Assault";
$w['AUG'] = "Stg.77 AUG";
$w['AN94'] = "AN-94 Abakan";
$w['M416'] = "M416";
$w['M16'] = "M16A2";
$w['M16K'] = "M162A - SPECTACT";

//Engineer
$w['9A91'] = "9A-91 Avtomat";
$w['SCAR'] = "SCAR-L Carbine";
$w['XM8C'] = "XM8 Compact";
$w['AKS74u'] = "AKS-74U Krinkov";
$w['UZI'] = "UZI";
$w['PP2000'] = "PP-2000 Avtomat";
$w['UMP'] = "UMP-45";
$w['UMPK'] = "UMP - SPECTACT";

//Medic
$w['PKM'] = "PKM LMG";
$w['M249'] = "M249 Saw";
$w['QJU88'] = "Type 88 LMG";
$w['M60'] = "M60 LMG";
$w['XM8 LMG'] = "XM8 LMG";
$w['MG36'] = "MG36";
$w['MG3'] = "MG3";
$w['MG3K'] = "MG3 - SPECTACT";

//Recon
$w['M24'] = "M24 Sniper";
$w['QBU88'] = "Type 88 Sniper";
$w['SV98'] = "SV98 Snaiperskaya";
$w['SVU'] = "SVU Snaiperskaya Short";
$w['GOL'] = "GOL Sniper Magnum";
$w['VSS'] = "VSS Snaiperskaya Special";
$w['M95'] = "M95 Sniper";
$w['M95K'] = "M95 - SPECTACT";

//Other Kits
$w['870MCS'] = "870 Combat";
$w['S20K'] = "Saiga 20k Semi";
$w['M1A1 Thompson'] = "WWII M1A1 Thompson";
$w['SPAS12'] = "SPAS-12 Combat";
$w['Mk14EBR'] = "M14 Mod 0 Enhanced";
$w['NS2000'] = "NEOSTEAD 2000 Combat";
$w['usas12'] = "USAS-12 Auto";
$w['G3'] = "G3";
$w['Garand'] = "M1 Garand";

//Sidearms
$w['M9'] = "M9 Pistol";
$w['MP443'] = "MP-443 Grach";
$w['M1911'] = "WWII M1911 .45";
$w['MP412'] = "MP-412 Rex";
$w['M9-3'] = "M93R Burst";

//*********************
// Vehicle names
//*********************

//Light
$w['HUMV#Gun'] = "HMMWV 4WD";
$w['VODN#KORD'] = "VODNIK 4WD";
$w['COBR#Kord'] = "COBRA 4WD";

//Heavy
$w['M1A2#Maingun'] = "M1A2 Abrams (Main Gun)";
$w['M1A2#CoaxMG'] = "M1A2 Abrams (Coax MG)";
$w['M1A2#RemoteGun'] = "M1A2 Abrams (Remote Gun)";

$w['T90R#MainGun'] = "T-90 MBT (Main Gun)";
$w['T90R#CoaxMG'] = "T-90 MBT (Coax MG)";
$w['T90R#RemoteGun'] = "T-90 MBT (Remote Gun)";

$w['M3A3#IFVAutoCannon'] = "M3A3 Bradley (Auto Cannon)";
$w['M3A3#TOW'] = "M3A3 Bradley (Tow)";
$w['M3A3#RemoteMG'] = "M3A3 Bradley (Remote MG)";
$w['M3A3#PFW RearLeft'] = "M3A3 Bradley (Rear Left Gun)";
$w['M3A3#PFW RearRight'] = "M3A3 Bradley (Rear Right Gun)";

$w['BMD3#IFVAutoCannon'] = "BMD-3 Bakhcha (Auto Cannon)";
$w['BMD3#TOW'] = "BMD-3 Bakhcha (Tow)";
$w['BMD3#RemoteMG'] = "BMD-3 Bakhcha (Remote MG)";
$w['BMDA#Cannon'] = "BMD-3 Bakhcha (Cannon)";
$w['BMD3#PFW RearRight'] = "BMD-3 Bakhcha (Rear Right Gun)";
$w['BMD3#PFW RearLeft'] = "BMD-3 Bakhcha(Rear Left Gun)";

$w['BMDA#GMG'] = "BMD-3 Bakhcha AA";

//Water
$w['PBLB#GMG'] = "Patrol Boat";

//Air
$w['AH60#Minigun Left'] = "UH-60 Transport (Mini Gun Left)";
$w['AH60#Minigun Right'] = "UH-60 Transport (Mini Gun Right)";

$w['AH64#Heli AutoCannon'] = "AH-64 Apache (Auto Cannon)";
$w['AH64#RocketPod Right'] = "AH-64 Apache (Rocket Pod Right)";
$w['AH64#RocketPod Left'] = "AH-64 Apache (Rocket Pod Left)";
$w['AH64#TOW'] = "AH-64 Apache (Tow)";

$w['MI28#GunnerCannnon'] = "MI-28 Havoc (Gunner Cannon)";
$w['MI28#DumbFireRocket Port'] = "MI-28 Havoc (Rocket)";
$w['MI28#DumbFireRocket Starboard'] = "MI-28 Havoc (Starboard)";
$w['MI28#TOW'] = "MI-28 Havoc (Tow)";

$w['MI24#GunnerCannon'] = "MI-24 Hind";

$w['UAV1#MG'] = "UAV (MG)";
$w['UAV1#Bomb'] = "UAV (Bomb)";

//Stationary
$w['X312#Gun'] = "Heavy MG X312";
$w['KORD#Gun'] = "Heavy MG KORD";
$w['KORN#Missile Launcher'] = "Stationary AT KORN";
$w['TOW2#Launcher'] = "Stationary AT TOW2";
$w['ZU23#Cannons'] = "Anti-Air Gun";
$w['VADS#AutoCannon'] = "VADS Auto Cannon";
$w['CAVJ#XM-307'] = "XM307 ACSW";

//*********************
// Other Weapon Names
//*********************
$w['KNV-1'] = "Knife";
$w['RoadKill'] = "Road Kill";
$w['D2.0'] = "Demolition";
$w['[]'] = $text["notidentify"];
$w['1'] = $text["notidentify"];
$w[' '] = $text["notidentify"];

//*********************
// Perk Names
//*********************
$w['40mmgl'] = "40mm Grenade Launcher";
$w['40mmsg'] = "40mm Shot Gun";
$w['40mmsmk'] = "40mm Smoke Launcher";
$w['RPG7'] = "RPG7";
$w['PWR-700'] = "Repair Tool";
$w['ATM-00'] = "Anti-Tank Mine";
$w['M2CG'] = "M2 Carl Gustav AT";
$w['M136'] = "M136 AT4";
$w['DEFIB'] = "Automated External Defibrillator";
$w['DTN-4'] = "C4 Explosive";
$w['MRTR-5'] = "Mortar Strike";
$w['HG-2'] = "Hand Grenade";
$w['TRCR-357'] = "Tracer Dart Gun";

//*********************
// Map names
//*********************
//Stock
//$m['Levels/MP_001'] = "Panama Canal";
//$m['Levels/MP_002'] = "Val Paraiso";
//$m['Levels/MP_003'] = "Laguna Alta";
//$m['Levels/MP_004'] = "Isla Inocentes";
//$m['Levels/MP_005'] = "Atacama Desert";
//$m['Levels/MP_006'] = "Africa Harbor";
//$m['Levels/MP_007'] = "White Pass";
//$m['Levels/MP_008'] = "Nelson Bay";
$m['Levels/MP_009'] = "Laguna Presa";
$m['Levels/MP_012'] = "Port Valdez";
//Conquest Levels
$m['Levels/MP_001'] = "Panama Canal (Conquest)";
$m['Levels/MP_003'] = "Laguna Alta (Conquest)";
$m['Levels/MP_005'] = "Atacama Desert (Conquest)";
$m['Levels/MP_006CQ'] = "Arica Harbor (Conquest)";
$m['Levels/MP_007'] = "White Pass (Conquest)";
$m['Levels/MP_008CQ'] = "Nelson Bay (Conquest)";
$m['Levels/MP_009CQ'] = "Laguna Preza (Conquest)";
$m['Levels/MP_012CQ'] = "Port Valdez (Conquest)";
$m['Levels/BC1_Oasis_CQ'] = "Oasis (Conquest)";
$m['Levels/BC1_Harvest_Day_CQ'] = "Harvest Day (Conquest)";
$m['Levels/MP_SP_005CQ'] = "Heavy Metal (Conquest)";
//Rush Levels
$m['Levels/MP_002'] = "Valparaiso (Rush)";
$m['Levels/MP_004'] = "Isla Inocentes (Rush)";
$m['Levels/MP_005GR'] = "Atacama Desert (Rush)";
$m['Levels/MP_006'] = "Arica Harbor (Rush)";
$m['Levels/MP_007GR'] = "White Pass (Rush)";
$m['Levels/MP_008'] = "Nelson Bay (Rush)";
$m['Levels/MP_009GR'] = "Laguna Preza (Rush)";
$m['Levels/MP_012GR'] = "Port Valdez (Rush)";
$m['Levels/BC1_Oasis_GR'] = "Oasis (Rush)";
$m['Levels/BC1_Harvest_Day_GR'] = "Harvest Day (Rush)";
$m['Levels/MP_SP_002GR'] = "Cold War (Rush)";
//Squadrush Levels
$m['Levels/MP_001SR'] = "Panama Canal (Squadrush)";
$m['Levels/MP_002SR'] = "Valparaiso (Squadrush)";
$m['Levels/MP_003SR'] = "Laguna Alta (Squadrush)";
$m['Levels/MP_005SR'] = "Atacama Desert (Squadrush)";
$m['Levels/MP_009SR'] = "Laguna Presa (Squadrush)";
$m['Levels/MP_012SR'] = "Port Valdez (Squadrush)";
$m['Levels/BC1_Oasis_SR'] = "Oasis (Squadrush)";
$m['Levels/BC1_Harvest_Day_SR'] = "Harvest Day (Squadrush)";
$m['Levels/MP_SP_002SR'] = "Cold War (Squadrush)";
//Squad Deathmatch
$m['Levels/MP_001SDM'] = "Panama Canal (Squad DM)";
$m['Levels/MP_004SDM'] = "Isla Inocentes (Squad DM)";
$m['Levels/MP_006SDM'] = "Arica Harbor (Squad DM)";
$m['Levels/MP_007SDM'] = "White Pass (Squad DM)";
$m['Levels/MP_008SDM'] = "Nelson Bay (Squad DM)";
$m['Levels/MP_009SDM'] = "Laguna Preza (Squad DM)";
$m['Levels/BC1_Oasis_SDM'] = "Oasis (Squad DM)";
$m['Levels/BC1_Harvest_Day_SDM'] = "Harvest Day (Squad DM)";
$m['Levels/MP_SP_002SDM'] = "Cold War (Squad DM)";
$m['Levels/MP_SP_005SDM'] = "Heavy Metal (Squad DM)";

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