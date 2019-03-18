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

	/**
	 * Team names
	 */
	'teams' => array(
		'2' => 'Red',		// Red team
		'3' => 'Blue',	// Blue team
		'-1' => 'Spectators'
	),
	/**
	 * Map: name, description, image
	 */
	'maps' => array(
		//Map Image Path
		'image_path' => 'http://www.xlrstats.com/xlrstats-images/v3.app.img/maps/bfbc2/middle/',

		//Conquest Levels
		'Levels/MP_001' => array('Panama Canal (Conquest)', 'description', 'MP_001.jpg'),
		'Levels/MP_003' => array('Laguna Alta (Conquest)', 'description', 'MP_003.jpg'),
		'Levels/MP_005' => array('Atacama Desert (Conquest)', 'description', 'MP_005.jpg'),
		'Levels/MP_006CQ' => array('Arica Harbor (Conquest)', 'description', 'MP_006CQ.jpg'),
		'Levels/MP_007' => array('White Pass (Conquest)', 'description', 'MP_007.jpg'),
		'Levels/MP_008CQ' => array('Nelson Bay (Conquest)', 'description', 'MP_008CQ.jpg'),
		'Levels/MP_009CQ' => array('Laguna Preza (Conquest)', 'description', 'MP_009CQ.jpg'),
		'Levels/MP_012CQ' => array('Port Valdez (Conquest)', 'description', 'MP_012CQ.jpg'),
		'Levels/BC1_Oasis_CQ' => array('Oasis (Conquest)', 'description', 'BC1_Oasis.jpg'),
		'Levels/BC1_Harvest_Day_CQ' => array('Harvest Day (Conquest)', 'description', 'BC1_Harvest_Day.jpg'),
		'Levels/MP_SP_005CQ' => array('Heavy Metal (Conquest)', 'description', 'MP_SP_005CQ.jpg'),
		//Rush Levels
		'Levels/MP_002' => array('Valparaiso (Rush)', 'description', 'MP_002.jpg'),
		'Levels/MP_004' => array('Isla Inocentes (Rush)', 'description', 'MP_004.jpg'),
		'Levels/MP_005GR' => array('Atacama Desert (Rush)', 'description', 'MP_005GR.jpg'),
		'Levels/MP_006' => array('Arica Harbor (Rush)', 'description', 'MP_006.jpg'),
		'Levels/MP_007GR' => array('White Pass (Rush)', 'description', 'MP_007GR.jpg'),
		'Levels/MP_008' => array('Nelson Bay (Rush)', 'description', 'MP_008.jpg'),
		'levels/mp_009gr' => array('Laguna Preza (Rush)', 'description', 'MP_009GR.jpg'),
		'Levels/MP_012GR' => array('Port Valdez (Rush)', 'description', 'MP_012GR.jpg'),
		'Levels/BC1_Oasis_GR' => array('Oasis (Rush)', 'description', 'BC1_Oasis.jpg'),
		'Levels/BC1_Harvest_Day_GR' => array('Harvest Day (Rush)', 'description', 'BC1_Harvest_Day.jpg'),
		'Levels/MP_SP_002GR' => array('Cold War (Rush)', 'description', 'MP_SP_002.jpg'),
		//Squadrush Levels
		'Levels/MP_001SR' => array('Panama Canal (Squadrush)', 'description', 'MP_001SR.jpg'),
		'Levels/MP_002SR' => array('Valparaiso (Squadrush)', 'description', 'MP_002SR.jpg'),
		'Levels/MP_003SR' => array('Laguna Alta (Squadrush)', 'description', 'MP_003SR.jpg'),
		'Levels/MP_005SR' => array('Atacama Desert (Squadrush)', 'description', 'MP_005SR.jpg'),
		'Levels/MP_009SR' => array('Laguna Presa (Squadrush)', 'description', 'MP_009SR.jpg'),
		'Levels/MP_012SR' => array('Port Valdez (Squadrush)', 'description', 'MP_012SR.jpg'),
		'Levels/BC1_Oasis_SR' => array('Oasis (Squadrush)', 'description', 'BC1_Oasis.jpg'),
		'Levels/BC1_Harvest_Day_SR' => array('Harvest Day (Squadrush)', 'description', 'BC1_Harvest_Day.jpg'),
		'Levels/MP_SP_002SR' => array('Cold War (Squadrush)', 'description', 'MP_SP_002.jpg'),
		//Squad Deathmatch
		'Levels/MP_001SDM' => array('Panama Canal (Squad DM)', 'description', 'MP_001SDM.jpg'),
		'Levels/MP_004SDM' => array('Isla Inocentes (Squad DM)', 'description', 'MP_004SDM.jpg'),
		'Levels/MP_006SDM' => array('Arica Harbor (Squad DM)', 'description', 'MP_006SDM.jpg'),
		'Levels/MP_007SDM' => array('White Pass (Squad DM)', 'description', 'MP_007SDM.jpg'),
		'Levels/MP_008SDM' => array('Nelson Bay (Squad DM)', 'description', 'MP_008SDM.jpg'),
		'Levels/MP_009SDM' => array('Laguna Preza (Squad DM)', 'description', 'MP_009SDM.jpg'),
		'Levels/BC1_Oasis_SDM' => array('Oasis (Squad DM)', 'description', 'BC1_Oasis.jpg'),
		'Levels/BC1_Harvest_Day_SDM' => array('Harvest Day (Squad DM)', 'description', 'BC1_Harvest_Day.jpg'),
		'Levels/MP_SP_002SDM' => array('Cold War (Squad DM)', 'description', 'MP_SP_002.jpg'),
		'Levels/MP_SP_005SDM' => array('Heavy Metal (Squad DM)', 'description', 'MP_SP_005SDM.jpg'),

		'None' => array('-Unknown-', 'description', '')
	),

	'weapons' => array(
		//Weapon Image Path
		'image_path' => 'http://www.xlrstats.com/xlrstats-images/v3.app.img/weapons/bfbc2/small/',

		//*********************
		// Weapons names
		//*********************

		//Assault
		'AEK971' => array('AEK-971 Vintovka', 'description', 'aek.png'),
		'XM8' => array('XM8 Prototype', 'description', 'xm8.png'),
		'F2000' => array('F2000 Assault', 'description', 'f2000.png'),
		'AUG' => array('Stg.77 AUG', 'description', 'aug.png'),
		'AN94' => array('AN-94 Abakan', 'description', 'an94.png'),
		'M416' => array('M416', 'description', 'm416.png'),
		'M16' => array('M16A2', 'description', 'm16.png'),
		'M16K' => array('M162A - SPECTACT', 'description', 'm16k.png'),

		//Engineer
		'9A91' => array('9A-91 Avtomat', 'description', '9a91.png'),
		'SCAR' => array('SCAR-L Carbine', 'description', 'scar.png'),
		'XM8C' => array('XM8 Compact', 'description', 'xm8c.png'),
		'AKS74u' => array('AKS-74U Krinkov', 'description', 'aks74u.png'),
		'UZI' => array('UZI', 'description', 'uzi.png'),
		'PP2000' => array('PP-2000 Avtomat', 'description', 'pp2000.png'),
		'UMP' => array('UMP-45', 'description', 'ump.png'),
		'UMPK' => array('UMP - SPECTACT', 'description', 'umpk.png'),

		//Medic
		'PKM' => array('PKM LMG', 'description', 'pkm.png'),
		'M249' => array('M249 Saw', 'description', 'm249.png'),
		'QJU88' => array('Type 88 LMG', 'description', 'qju88.png'),
		'M60' => array('M60 LMG', 'description', 'm60.png'),
		'XM8 LMG' => array('XM8 LMG', 'description', 'xm8lmg.png'),
		'MG36' => array('MG36', 'description', 'mg36.png'),
		'MG3' => array('MG3', 'description', 'mg3.png'),
		'MG3K' => array('MG3 - SPECTACT', 'description', 'mg3k.png'),

		//Recon
		'M24' => array('M24 Sniper', 'description', 'm24.png'),
		'QBU88' => array('Type 88 Sniper', 'description', 'qbu88.png'),
		'SV98' => array('SV98 Snaiperskaya', 'description', 'sv98.png'),
		'SVU' => array('SVU Snaiperskaya Short', 'description', 'svu.png'),
		'GOL' => array('GOL Sniper Magnum', 'description', 'gol.png'),
		'VSS' => array('VSS Snaiperskaya Special', 'description', 'vss.png'),
		'M95' => array('M95 Sniper', 'description', 'm95.png'),
		'M95K' => array('M95 - SPECTACT', 'description', 'm95k.png'),

		//Other Kits
		'870MCS' => array('870 Combat', 'description', '870mcs.png'),
		'S20K' => array('Saiga 20k Semi', 'description', 's20k.png'),
		'M1A1 Thompson' => array('WWII M1A1 Thompson', 'description', 'm1a1.png'),
		'SPAS12' => array('SPAS-12 Combat', 'description', 'spas12.png'),
		'Mk14EBR' => array('M14 Mod 0 Enhanced', 'description', 'mk14ebr.png'),
		'NS2000' => array('NEOSTEAD 2000 Combat', 'description', 'ns2000.png'),
		'usas12' => array('USAS-12 Auto', 'description', 'usas12.png'),
		'G3' => array('G3', 'description', 'g3.png'),
		'Garand' => array('M1 Garand', 'description', 'garand.png'),

		//Sidearms
		'M9' => array('M9 Pistol', 'description', 'm9.png'),
		'MP443' => array('MP-443 Grach', 'description', 'mp443.png'),
		'M1911' => array('WWII M1911 .45', 'description', 'm1911.png'),
		'MP412' => array('MP-412 Rex', 'description', 'm9412.png'),
		'M9-3' => array('M93R Burst', 'description', 'm93r.png'),

		//*********************
		// Vehicle names
		//*********************

		//Light
		'HUMV#Gun' => array('HMMWV 4WD', 'description', ''),
		'VODN#KORD' => array('VODNIK 4WD', 'description', ''),
		'COBR#Kord' => array('COBRA 4WD', 'description', ''),

		//Heavy
		'M1A2#Maingun' => array('M1A2 Abrams (Main Gun)', 'description', ''),
		'M1A2#CoaxMG' => array('M1A2 Abrams (Coax MG)', 'description', ''),
		'M1A2#RemoteGun' => array('M1A2 Abrams (Remote Gun)', 'description', ''),

		'T90R#MainGun' => array('T-90 MBT (Main Gun)', 'description', ''),
		'T90R#CoaxMG' => array('T-90 MBT (Coax MG)', 'description', ''),
		'T90R#RemoteGun' => array('T-90 MBT (Remote Gun)', 'description', ''),

		'M3A3#IFVAutoCannon' => array('M3A3 Bradley (Auto Cannon)', 'description', ''),
		'M3A3#TOW' => array('M3A3 Bradley (Tow)', 'description', ''),
		'M3A3#RemoteMG' => array('M3A3 Bradley (Remote MG)', 'description', ''),
		'M3A3#PFW RearLeft' => array('M3A3 Bradley (Rear Left Gun)', 'description', ''),
		'M3A3#PFW RearRight' => array('M3A3 Bradley (Rear Right Gun)', 'description', ''),

		'BMD3#IFVAutoCannon' => array('BMD-3 Bakhcha (Auto Cannon)', 'description', ''),
		'BMD3#TOW' => array('BMD-3 Bakhcha (Tow)', 'description', ''),
		'BMD3#RemoteMG' => array('BMD-3 Bakhcha (Remote MG)', 'description', ''),
		'BMDA#Cannon' => array('BMD-3 Bakhcha (Cannon)', 'description', ''),
		'BMD3#PFW RearRight' => array('BMD-3 Bakhcha (Rear Right Gun)', 'description', ''),
		'BMD3#PFW RearLeft' => array('BMD-3 Bakhcha(Rear Left Gun)', 'description', ''),

		'BMDA#GMG' => array('BMD-3 Bakhcha AA', 'description', '.png'),

		//Water
		'PBLB#GMG' => array('Patrol Boat', 'description', ''),

		//Air
		'AH60#Minigun Left' => array('UH-60 Transport (Mini Gun Left)', 'description', ''),
		'AH60#Minigun Right' => array('UH-60 Transport (Mini Gun Right)', 'description', ''),

		'AH64#Heli AutoCannon' => array('AH-64 Apache (Auto Cannon)', 'description', ''),
		'AH64#RocketPod Right' => array('AH-64 Apache (Rocket Pod Right)', 'description', ''),
		'AH64#RocketPod Left' => array('AH-64 Apache (Rocket Pod Left)', 'description', ''),
		'AH64#TOW' => array('AH-64 Apache (Tow)', 'description', ''),

		'MI28#GunnerCannnon' => array('MI-28 Havoc (Gunner Cannon)', 'description', ''),
		'MI28#DumbFireRocket Port' => array('MI-28 Havoc (Rocket)', 'description', ''),
		'MI28#DumbFireRocket Starboard' => array('MI-28 Havoc (Starboard)', 'description', ''),
		'MI28#TOW' => array('MI-28 Havoc (Tow)', 'description', ''),

		'MI24#GunnerCannon' => array('MI-24 Hind', 'description', ''),

		'UAV1#MG' => array('UAV (MG)', 'description', ''),
		'UAV1#Bomb' => array('UAV (Bomb)', 'description', ''),

		//Stationary
		'X312#Gun' => array('Heavy MG X312', 'description', ''),
		'KORD#Gun' => array('Heavy MG KORD', 'description', ''),
		'KORN#Missile Launcher' => array('Stationary AT KORN', 'description', ''),
		'TOW2#Launcher' => array('Stationary AT TOW2', 'description', ''),
		'ZU23#Cannons' => array('Anti-Air Gun', 'description', ''),
		'VADS#AutoCannon' => array('VADS Auto Cannon', 'description', ''),
		'CAVJ#XM-307' => array('XM307 ACSW', 'description', ''),

		//*********************
		// Other Weapon Names
		//*********************
		'KNV-1' => array('Knife', 'description', ''),
		'RoadKill' => array('Road Kill', 'description', ''),
		'D2.0' => array('Demolition', 'description', ''),
		'[]' => array('Not Identified', 'description', ''),
		'1' => array('Not Identified', 'description', ''),
		' ' => array('Not Identified', 'description', ''),

		//*********************
		// Perk Names
		//*********************
		'40mmgl' => array('40mm Grenade Launcher', 'description', ''),
		'40mmsg' => array('40mm Shot Gun', 'description', ''),
		'40mmsmk' => array('40mm Smoke Launcher', 'description', ''),
		'RPG7' => array('RPG7', 'description', ''),
		'PWR-700' => array('Repair Tool', 'description', ''),
		'ATM-00' => array('Anti-Tank Mine', 'description', ''),
		'M2CG' => array('M2 Carl Gustav AT', 'description', ''),
		'M136' => array('M136 AT4', 'description', ''),
		'DEFIB' => array('Automated External Defibrillator', 'description', ''),
		'DTN-4' => array('C4 Explosive', 'description', ''),
		'MRTR-5' => array('Mortar Strike', 'description', ''),
		'HG-2' => array('Hand Grenade', 'description', ''),
		'TRCR-357' => array('Tracer Dart Gun', 'description', ''),
	),

	/**
	 * Bodypart names
	 */
	'body_parts' => array(
		/**
		 * fixed_name => array ('console_name' => 'Easy Name')
		 * DO NOT CHANGE 'fixed_name's
		 */
		'head' => array('head' => 'Head'),
		'torso_lower' => array('torso' => 'Torso'),
		'none' => array('none' => 'Total disruption'),
	),
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