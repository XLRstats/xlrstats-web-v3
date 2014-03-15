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

//*********************
// BF4 config settings
//*********************

$config = array(
	'gameName' => 'Battlefield 4',
	/**
	 * Map: name, description, image
	 */
	'maps' => array(
		// Map Image Path
		'image_path' => 'http://battlelog-cdn.battlefield.com/cdnprefix/288d9afd0553cbdb/public/base/bf4/map_images/146x79/',

		//Stock
		'MP_Abandoned' => array('Zavod 311', 'description', 'mp_abandoned.jpg'),
		'MP_Damage' => array('Lancang Dam', 'description', 'mp_damage.jpg'),
		'MP_Flooded' => array('Flood Zone', 'description', 'mp_flooded.jpg'),
		'MP_Journey' => array('Golmud Railway', 'description', 'mp_journey.jpg'),
		'MP_Naval' => array('Paracel Storm', 'description', 'mp_naval.jpg'),
		'MP_Prison' => array('Operation Locker', 'description', 'mp_prison.jpg'),
		'MP_Resort' => array('Hainan Resort', 'description', 'mp_resort.jpg'),
		'MP_Siege' => array('Siege of Shanghai', 'description', 'mp_siege.jpg'),
		'MP_TheDish' => array('Rogue Transmission', 'description', 'mp_thedish.jpg'),
		'MP_Tremors' => array('Dawnbreaker', 'description', 'mp_tremors.jpg'),
		'XP0_Caspian' => array('Caspian Border 2014', 'description', 'xp0_caspian.jpg'),
		'XP0_Firestorm' => array('Firestorm 2014', 'description', 'xp0_firestorm.jpg'),
		'XP0_Metro' => array('Operation Metro 2014', 'description', 'xp0_metro.jpg'),
		'XP0_Oman' => array('Gulf Of Oman 2014', 'description', 'xp0_oman.jpg'),
		'XP1_001' => array('Silk Road', 'description', 'xp1_001.jpg'),
		'XP1_002' => array('Altai Range', 'description', 'xp1_002.jpg'),
		'XP1_003' => array('Guilin Peaks', 'description', 'xp1_003.jpg'),
		'XP1_004' => array('Dragon Pass', 'description', 'xp1_004.jpg'),
	),
	/**
	 * Weapon: name, description, image
	 */
	'weapons' => array(
		//Weapon Image Path
		//'image_path' => 'http://battlelog-cdn.battlefield.com/cdnprefix/98ed2fe-3/public/profile/bf3/stats/items_147x88/',

		// Assault Rifles
		'U_GalilACE23' => array('ACE 23', 'description', 'image.png'),
		'U_SteyrAug' => array('AUG A3', 'description', 'image.png'),
		'U_CZ805' => array('CZ-805', 'description', 'image.png'),
		'U_FAMAS' => array('FAMAS', 'description', 'image.png'),
		'U_L85A2' => array('L85A2', 'description', 'image.png'),
		'U_M16A4' => array('M16A4', 'description', 'image.png'),
		'U_QBZ951' => array('QBZ-95-1', 'description', 'image.png'),
		'U_SAR21' => array('SAR-21', 'description', 'image.png'),
		'U_AEK971' => array('AEK-971', 'description', 'image.png'),
		'U_AK12' => array('AK-12', 'description', 'image.png'),
		'U_M416' => array('M416', 'description', 'image.png'),
		'U_SCAR-H' => array('SCAR-H', 'description', 'image.png'),

		// Underslug
		'U_AEK971_M320_HE' => array('AEK-971 M320 HE', 'description', 'image.png'),
		'U_AEK971_M320_LVG' => array('AEK-971 M320 LVG', 'description', 'image.png'),
		'U_AEK971_M320_SHG' => array('AEK-971 M320 Shotgun', 'description', 'image.png'),
		'U_AK12_M320_HE' => array('AK-12 M320 HE', 'description', 'image.png'),
		'U_AK12_M320_SMK' => array('AK-12 M320 Smoke', 'description', 'image.png'),
		'U_CZ805_M320_HE' => array('CZ-805 M320 HE', 'description', 'image.png'),
		'U_M16A4_M320_HE' => array('M16A4 M320 HE', 'description', 'image.png'),
		'U_M16A4_M320_LVG' => array('M16A4 M320 LVG', 'description', 'image.png'),
		'U_SteyrAug_M320_FLASH' => array('AUG A3 M320 Flashbang', 'description', 'image.png'),
		'U_SteyrAug_M320_HE' => array('AUG A3 M320 HE', 'description', 'image.png'),
		'U_SteyrAug_M320_LVG' => array('AUG A3 M320 LVG', 'description', 'image.png'),
		'U_M26Mass_Flechette' => array('M26 DART', 'description', 'image.png'),
		'U_M26Mass_Frag' => array('M26 FRAG', 'description', 'image.png'),
		'U_M26Mass_Slug' => array('M26 SLUG', 'description', 'image.png'),
		'U_M320_SHG' => array('M320 DART', 'description', 'image.png'),
		'U_M320_FLASH' => array('M320 FB', 'description', 'image.png'),
		'U_M320_HE' => array('M320 HE', 'description', 'image.png'),
		'U_M320_LVG' => array('M320 LVG', 'description', 'image.png'),
		'U_M320_SMK' => array('M320 SMK', 'description', 'image.png'),
		'U_M416_M26_Buck' => array('M416 M26 Buckshot', 'description', 'image.png'),
		'U_M416_M26_Flechette' => array('M416 M26 Flechette', 'description', 'image.png'),
		'U_M416_M26_Frag' => array('M416 M26 Fragment', 'description', 'image.png'),
		'U_M416_M26_Slug' => array('M416 M26 Slug', 'description', 'image.png'),
		'U_M416_M320_FLASH' => array('M416 M320 Flashbang', 'description', 'image.png'),
		'U_M416_M320_HE' => array('M416 M320 HE', 'description', 'image.png'),
		'U_M416_M320_SMK' => array('M416 M320 Smoke', 'description', 'image.png'),
		'U_QBZ951_M320_HE' => array('QBZ-95-1 M320 HE', 'description', 'image.png'),
		'U_SAR21_M320_HE' => array('SAR-21 M320 HE', 'description', 'image.png'),
		'U_SAR21_M320_SMK' => array('SAR-21 M320 Smoke', 'description', 'image.png'),
		'U_SCAR-H_M26_Buck' => array('SCAR-H M26 Buckshot', 'description', 'image.png'),
		'U_SCAR-H_M26_Flechette' => array('SCAR-H M26 Flechette', 'description', 'image.png'),
		'U_SCAR-H_M320_HE' => array('SCAR-H M320 HE', 'description', 'image.png'),
		'U_USAS-12_Nightvision' => array('USAS-12 FLIR', 'description', 'image.png'),
		'U_XM25' => array('XM25 AIRBURST', 'description', 'image.png'),
		'U_XM25_Flechette' => array('XM25 DART', 'description', 'image.png'),
		'U_XM25_Smoke' => array('XM25 SMOKE', 'description', 'image.png'),

		// Carbines
		'U_A91' => array('A91', 'description', 'image.png'),
		'U_GalilACE' => array('ACE 21 CQB', 'description', 'image.png'),
		'U_GalilACE52' => array('ACE 52 CQB', 'description', 'image.png'),
		'U_ACR' => array('ACW-R', 'description', 'image.png'),
		'U_AK5C' => array('AK 5C', 'description', 'image.png'),
		'U_AKU12' => array('AKU-12', 'description', 'image.png'),
		'U_G36C' => array('G36C', 'description', 'image.png'),
		'U_M4A1' => array('M4', 'description', 'image.png'),
		'U_MTAR21' => array('MTAR21', 'description', 'image.png'),
		'U_SG553LB' => array('SG553', 'description', 'image.png'),
		'U_Type95B' => array('TYPE-95B-1', 'description', 'image.png'),

		// DMR/PDW
		'U_GalilACE53' => array('ACE 53 SV', 'description', 'image.png'),
		'U_M39EBR' => array('M39 EMR', 'description', 'image.png'),
		'U_MK11' => array('MK11 MOD 0', 'description', 'image.png'),
		'U_QBU88' => array('QBU-88', 'description', 'image.png'),
		'U_RFB' => array('RFB', 'description', 'image.png'),
		'U_SCAR-HSV' => array('SCAR-H SV', 'description', 'image.png'),
		'U_SKS' => array('SKS', 'description', 'image.png'),
		'U_SVD12' => array('SVD-12', 'description', 'image.png'),

		// Sniper Rifles
		'U_SRS' => array('338-Recon', 'description', 'image.png'),
		'U_CS-LR4' => array('CS-LR4', 'description', 'image.png'),
		'U_FY-JS' => array('FY-JS', 'description', 'image.png'),
		'U_JNG90' => array('JNG-90', 'description', 'image.png'),
		'U_L96A1' => array('L96A1', 'description', 'image.png'),
		'U_M40A5' => array('M40A5', 'description', 'image.png'),
		'U_M98B' => array('M98B', 'description', 'image.png'),
		'U_Scout' => array('Scout Elite', 'description', 'image.png'),
		'U_M200' => array('SSR-61', 'description', 'image.png'),
		'U_SV98' => array('SV98', 'description', 'image.png'),

		// LMG
		'U_LSAT' => array('LSAT', 'description', 'image.png'),
		'U_M240' => array('M240B', 'description', 'image.png'),
		'U_M249' => array('M249', 'description', 'image.png'),
		'U_MG4' => array('MG4', 'description', 'image.png'),
		'U_Pecheneg' => array('PKP Pecheneg', 'description', 'image.png'),
		'U_QBB95' => array('QBB-95', 'description', 'image.png'),
		'U_RPK-74' => array('RPK', 'description', 'image.png'),
		'U_RPK12' => array('RPK-12', 'description', 'image.png'),
		'U_Type88' => array('TYPE 88 LMG', 'description', 'image.png'),
		'U_Ultimax' => array('U-100 MK5', 'description', 'image.png'),

		// SMG
		'U_CBJ-MS' => array('CBJ-MS', 'description', 'image.png'),
		'U_Scorpion' => array('CZ-3A1', 'description', 'image.png'),
		'U_JS2' => array('JS2', 'description', 'image.png'),
		'U_MP7' => array('MP7', 'description', 'image.png'),
		'U_MX4' => array('MX4', 'description', 'image.png'),
		'U_P90' => array('P90', 'description', 'image.png'),
		'U_MagpulPDR' => array('PDW-R', 'description', 'image.png'),
		'U_PP2000' => array('PP-2000', 'description', 'image.png'),
		'U_UMP45' => array('UMP45', 'description', 'image.png'),
		'U_UMP9' => array('UMP9', 'description', 'image.png'),

		// Shotguns
		'U_870' => array('870 MCS', 'description', 'image.png'),
		'U_DBV12' => array('DBV-12', 'description', 'image.png'),
		'U_HAWK' => array('HAWK 12G', 'description', 'image.png'),
		'U_M1014' => array('M1014', 'description', 'image.png'),
		'U_QBS09' => array('QBS-09', 'description', 'image.png'),
		'U_SAIGA_20K' => array('SAIGA 12K', 'description', 'image.png'),
		'U_SerbuShorty' => array('Shorty 12GA', 'description', 'image.png'),
		'U_SPAS12' => array('SPAS-12', 'description', 'image.png'),
		'U_UTAS' => array('UTS 15', 'description', 'image.png'),
		'U_M26Mass' => array('M26 MASS', 'description', 'image.png'),

		// Handguns
		'U_Taurus44' => array('.44 MAGNUM', 'description', 'image.png'),
		'U_HK45C' => array('COMPACT 45', 'description', 'image.png'),
		'U_CZ75' => array('CZ-75', 'description', 'image.png'),
		'U_FN57' => array('FN57', 'description', 'image.png'),
		'U_Glock18' => array('G18', 'description', 'image.png'),
		'U_M1911' => array('M1911', 'description', 'image.png'),
		'U_M9' => array('M9', 'description', 'image.png'),
		'U_M93R' => array('M93R', 'description', 'image.png'),
		'U_MP412Rex' => array('MP412 REX', 'description', 'image.png'),
		'U_MP443' => array('MP443', 'description', 'image.png'),
		'U_P226' => array('P226', 'description', 'image.png'),
		'U_QSZ92' => array('QSZ-92', 'description', 'image.png'),

		// Grenades
		'U_Flashbang' => array('Flashbang', 'description', 'image.png'),
		'U_M34' => array('M34 INCENDIARY', 'description', 'image.png'),
		'U_M67' => array('M67 FRAG', 'description', 'image.png'),
		'U_Grenade_RGO' => array('RGO IMPACT', 'description', 'image.png'),
		'U_V40' => array('V40 MINI', 'description', 'image.png'),

		// map pick up
		'U_AMR2' => array('AMR-2', 'description', 'image.png'),
		'U_AMR2_MED' => array('AMR-2 MID', 'description', 'image.png'),
		'U_AT4' => array('M136 CS', 'description', 'image.png'),
		'U_MGL' => array('M32 MGL', 'description', 'image.png'),
		'U_M82A3' => array('M82A3', 'description', 'image.png'),
		'U_M82A3_CQB' => array('M82A3 CQB', 'description', 'image.png'),
		'U_M82A3_MED' => array('M82A3 MID', 'description', 'image.png'),
		'U_USAS-12' => array('USAS-12', 'description', 'image.png'),

		// Gadgets
		'U_C4' => array('C4', 'description', 'image.png'),
		'U_C4_Support' => array('C4', 'description', 'image.png'),
		'U_Defib' => array('Defibrillator', 'description', 'image.png'),
		'U_Claymore' => array('M18 CLAYMORE', 'description', 'image.png'),
		'U_Claymore_Recon' => array('M18 CLAYMORE', 'description', 'image.png'),
		'U_FGM148' => array('FGM-148 JAVELIN', 'description', 'image.png'),
		'U_SRAW' => array('FGM-172 SRAW', 'description', 'image.png'),
		'U_SMAW' => array('MK153 SMAW', 'description', 'image.png'),
		'U_FIM92' => array('FIM-92 Stinger', 'description', 'image.png'),
		'U_RPG7' => array('RPG-7V2', 'description', 'image.png'),
		'U_Sa18IGLA' => array('SA-18 IGLA', 'description', 'image.png'),
		'U_PortableMedicpack' => array('FIRST AID PACK', 'description', 'image.png'),
		'U_Medkit' => array('MEDIC BAG', 'description', 'image.png'),
		'U_Starstreak' => array('HVM-II', 'description', 'image.png'),
		'U_M15' => array('M15 AT MINE', 'description', 'image.png'),
		'U_SLAM' => array('M2 SLAM', 'description', 'image.png'),
		'U_Repairtool' => array('REPAIR TOOL', 'description', 'image.png'),

		// Commander
		'U_Tomahawk' => array('CRUISE MISSILE', 'description', 'image.png'),

		// Knifes
		'Melee' => array('Melee', 'description', 'image.png'),

		// misc
		'U_NLAW' => array('MBT LAW', 'description', 'image.png'),

		'SoldierCollision' => array('Soldier Collision', 'description', 'image.png'),
		'Suicide' => array('Suicide', 'description', 'image.png'),
		'Death' => array('Vehicle', 'description', 't90.png'),
		'RoadKill' => array('Road Kill', 'description', 'vdv.png'),
		'DamageArea' => array('Damage Area', 'description', 'image.png'),
		' ' => array('Not Identified', 'description', 'image.png'),
	),
	/**
	 * Team names
	 */
	'teams' => array(
		'1' => 'US Marines',
		'2' => 'RU/CN Army',
		'-1' => 'Spectators'
	),

);
