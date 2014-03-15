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
		'image_path' => 'http://eaassets-a.akamaihd.net/bl-cdn/cdnprefix/35fcafc68cc4a84dd0cce41632300509e/public/profile/warsaw/gamedata/',

		// Assault Rifles
		'U_GalilACE23' => array('ACE 23', 'description', 'weapon_unlock/squarelarge/galil_ace23_fancy.png'),
		'U_SteyrAug' => array('AUG A3', 'description', 'weapon_unlock/squarelarge/steyraug_fancy.png'),
		'U_CZ805' => array('CZ-805', 'description', 'weapon_unlock/squarelarge/cz805_fancy.png'),
		'U_FAMAS' => array('FAMAS', 'description', 'weapon_unlock/squarelarge/famas_fancy.png'),
		'U_L85A2' => array('L85A2', 'description', 'weapon_unlock/squarelarge/l85a2_fancy.png'), // China Rising DLC1
		'U_M16A4' => array('M16A4', 'description', 'weapon_unlock/squarelarge/m16a4_fancy.png'),
		'U_QBZ951' => array('QBZ-95-1', 'description', 'weapon_unlock/squarelarge/qbz951_fancy.png'),
		'U_SAR21' => array('SAR-21', 'description', 'weapon_unlock/squarelarge/sar21_fancy.png'),
		'U_AEK971' => array('AEK-971', 'description', 'weapon_unlock/squarelarge/aek971_fancy.png'),
		'U_AK12' => array('AK-12', 'description', 'weapon_unlock/squarelarge/ak12_fancy.png'),
		'U_M416' => array('M416', 'description', 'weapon_unlock/squarelarge/m416_fancy.png'),
		'U_SCAR-H' => array('SCAR-H', 'description', 'weapon_unlock/squarelarge/scarh_fancy.png'),
		'U_F2000' => array('F2000', 'description', 'weapon_unlock/squarelarge/f2000_fancy.png'), // Second Assault DLC2
		'U_AR160' => array('AR160', 'description', 'weapon_unlock/squarelarge/ar160_fancy.png'), // Naval Strike DLC3


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
		'U_A91' => array('A91', 'description', 'weapon_unlock/squarelarge/a91_fancy.png'),
		'U_GalilACE' => array('ACE 21 CQB', 'description', 'weapon_unlock/squarelarge/galil_ace21cqb_fancy.png'),
		'U_GalilACE52' => array('ACE 52 CQB', 'description', 'weapon_unlock/squarelarge/galil_ace52cqb_fancy.png'),
		'U_ACR' => array('ACW-R', 'description', 'weapon_unlock/squarelarge/acwr_fancy.png'),
		'U_AK5C' => array('AK 5C', 'description', 'weapon_unlock/squarelarge/ak5c_fancy.png'),
		'U_AKU12' => array('AKU-12', 'description', 'weapon_unlock/squarelarge/aku12_fancy.png'),
		'U_G36C' => array('G36C', 'description', 'weapon_unlock/squarelarge/g36c_fancy.png'),
		'U_M4A1' => array('M4', 'description', 'weapon_unlock/squarelarge/m4a1_fancy.png'),
		'U_MTAR21' => array('MTAR-21', 'description', 'weapon_unlock/squarelarge/mtar21_fancy.png'), // China Rising DLC1
		'U_SG553LB' => array('SG553', 'description', 'weapon_unlock/squarelarge/sg553lb_fancy.png'),
		'U_Type95B' => array('TYPE-95B-1', 'description', 'weapon_unlock/squarelarge/type95b1_fancy.png'),

		// DMR/PDW
		'U_GalilACE53' => array('ACE 53 SV', 'description', 'weapon_unlock/squarelarge/galil_ace53sv_fancy.png'),
		'U_M39EBR' => array('M39 EMR', 'description', 'weapon_unlock/squarelarge/m39_fancy.png'),
		'U_MK11' => array('MK11 MOD 0', 'description', 'weapon_unlock/squarelarge/mk11_fancy.png'),
		'U_QBU88' => array('QBU-88', 'description', 'weapon_unlock/squarelarge/qbu88_fancy.png'),
		'U_RFB' => array('RFB', 'description', 'weapon_unlock/squarelarge/rfb_fancy.png'),
		'U_SCAR-HSV' => array('SCAR-H SV', 'description', 'weapon_unlock/squarelarge/scarhsv_fancy.png'),
		'U_SKS' => array('SKS', 'description', 'weapon_unlock/squarelarge/sks_fancy.png'),
		'U_SVD12' => array('SVD-12', 'description', 'weapon_unlock/squarelarge/svd12_fancy.png'),


		// Sniper Rifles
		'U_SRS' => array('338-Recon', 'description', 'weapon_unlock/squarelarge/srs_338recon_fancy.png'),
		'U_CS-LR4' => array('CS-LR4', 'description', 'weapon_unlock/squarelarge/cslr4_fancy.png'),
		'U_FY-JS' => array('FY-JS', 'description', 'weapon_unlock/squarelarge/fyjs_fancy.png'),
		'U_JNG90' => array('JNG-90', 'description', 'weapon_unlock/squarelarge/jng90_fancy.png'),
		'U_L96A1' => array('L96A1', 'description', 'weapon_unlock/squarelarge/l96a1_fancy.png'), // China Rising DLC1
		'U_M40A5' => array('M40A5', 'description', 'weapon_unlock/squarelarge/m40a5_fancy.png'),
		'U_M98B' => array('M98B', 'description', 'weapon_unlock/squarelarge/m98b_fancy.png'),
		'U_Scout' => array('Scout Elite', 'description', 'weapon_unlock/squarelarge/scoutelite_fancy.png'),
		'U_M200' => array('SSR-61', 'description', 'weapon_unlock/squarelarge/m200_srr61_fancy.png'),
		'U_SV98' => array('SV98', 'description', 'weapon_unlock/squarelarge/sv98_fancy.png'),
		'U_GOL' => array('GOL MAGNUM', 'description', 'weapon_unlock/squarelarge/gol_fancy.png'), // Second Assault DLC2
		//'' => array('SR338', 'description', 'weapon_unlock/squarelarge/sr338_fancy.png'), // Naval Strike DLC3

		// LMG
		'U_LSAT' => array('LSAT', 'description', 'weapon_unlock/squarelarge/lsat_fancy.png'),
		'U_M240' => array('M240B', 'description', 'weapon_unlock/squarelarge/m240_fancy.png'),
		'U_M249' => array('M249', 'description', 'weapon_unlock/squarelarge/m249_fancy.png'),
		'U_MG4' => array('MG4', 'description', 'weapon_unlock/squarelarge/mg4_fancy.png'),
		'U_Pecheneg' => array('PKP Pecheneg', 'description', 'weapon_unlock/squarelarge/pecheneg_fancy.png'),
		'U_QBB95' => array('QBB-95-1', 'description', 'weapon_unlock/squarelarge/qbb95_fancy.png'),
		'U_RPK-74' => array('RPK-74M', 'description', 'weapon_unlock/squarelarge/rpk74_fancy.png'), // China Rising DLC1
		'U_RPK12' => array('RPK-12', 'description', 'weapon_unlock/squarelarge/rpk12_fancy.png'),
		'U_Type88' => array('TYPE 88 LMG', 'description', 'weapon_unlock/squarelarge/type88_fancy.png'),
		'U_Ultimax' => array('U-100 MK5', 'description', 'weapon_unlock/squarelarge/ultimax_fancy.png'),
		'U_M60E4' => array('M60-E4', 'description', 'weapon_unlock/squarelarge/m60e4_fancy.png'), // Second Assault DLC2
		'U_AWS' => array('AWS', 'description', 'weapon_unlock/squarelarge/aws_fancy.png'), // Naval Strike DLC3


		// SMG
		'U_CBJ-MS' => array('CBJ-MS', 'description', 'weapon_unlock/squarelarge/cbjms_fancy.png'),
		'U_Scorpion' => array('CZ-3A1', 'description', 'weapon_unlock/squarelarge/scorpion_fancy.png'),
		'U_JS2' => array('JS2', 'description', 'weapon_unlock/squarelarge/js2_fancy.png'),
		'U_MP7' => array('MP7', 'description', 'weapon_unlock/squarelarge/mp7_fancy.png'), // China Rising DLC1
		'U_MX4' => array('MX4', 'description', 'weapon_unlock/squarelarge/mx4_fancy.png'),
		'U_P90' => array('P90', 'description', 'weapon_unlock/squarelarge/p90_fancy.png'),
		'U_MagpulPDR' => array('PDW-R', 'description', 'weapon_unlock/squarelarge/magpulpdr_fancy.png'),
		'U_PP2000' => array('PP-2000', 'description', 'weapon_unlock/squarelarge/pp2000_fancy.png'),
		'U_UMP45' => array('UMP-45', 'description', 'weapon_unlock/squarelarge/ump_fancy.png'),
		'U_UMP9' => array('UMP-9', 'description', 'weapon_unlock/squarelarge/ump9_fancy.png'),
		'U_ASVal' => array('AS VAL', 'description', 'weapon_unlock/squarelarge/asval_fancy.png'), // Second Assault DLC2
		'U_SR2' => array('SR-2', 'description', 'weapon_unlock/squarelarge/sr2_fancy.png'), // Naval Strike DLC3


		// Shotguns
		'U_870' => array('870 MCS', 'description', 'weapon_unlock/squarelarge/remington870_fancy.png'),
		'U_DBV12' => array('DBV-12', 'description', 'weapon_unlock/squarelarge/dbv12_fancy.png'),
		'U_HAWK' => array('HAWK 12G', 'description', 'weapon_unlock/squarelarge/hawk12g_fancy.png'),
		'U_M1014' => array('M1014', 'description', 'weapon_unlock/squarelarge/m1014_fancy.png'),
		'U_QBS09' => array('QBS-09', 'description', 'weapon_unlock/squarelarge/qbs09_fancy.png'),
		'U_SAIGA_20K' => array('SAIGA 12K', 'description', 'weapon_unlock/squarelarge/saiga12_fancy.png'),
		'U_SerbuShorty' => array('Shorty 12GA', 'description', 'weapon_unlock/squarelarge/shorty12g_fancy.png'),
		'U_SPAS12' => array('SPAS-12', 'description', 'weapon_unlock/squarelarge/spas12_fancy.png'),
		'U_UTAS' => array('UTS 15', 'description', 'weapon_unlock/squarelarge/utas_fancy.png'),
		'U_M26Mass' => array('M26 MASS', 'description', 'weapon_unlock/squarelarge/m26mass_fancy.png'),
		'U_DAO12' => array('DAO-12', 'description', 'weapon_unlock/squarelarge/dao12_fancy.png'), // Second Assault DLC2

		// Handguns
		'U_Taurus44' => array('.44 MAGNUM', 'description', 'weapon_unlock/squarelarge/taurus44_fancy.png'),
		'U_HK45C' => array('COMPACT 45', 'description', 'weapon_unlock/squarelarge/hk45c_fancy.png'),
		'U_CZ75' => array('CZ-75', 'description', 'weapon_unlock/squarelarge/cz75_fancy.png'),
		'U_FN57' => array('FN57', 'description', 'weapon_unlock/squarelarge/fn57_fancy.png'),
		'U_Glock18' => array('G18', 'description', 'weapon_unlock/squarelarge/glock18_fancy.png'),
		'U_M1911' => array('M1911', 'description', 'weapon_unlock/squarelarge/m1911_fancy.png'),
		'U_M9' => array('M9', 'description', 'weapon_unlock/squarelarge/m9_fancy.png'),
		'U_M93R' => array('93R', 'description', 'weapon_unlock/squarelarge/m93r_fancy.png'),
		'U_MP412Rex' => array('M412 REX', 'description', 'weapon_unlock/squarelarge/mp412rex_fancy.png'),
		'U_MP443' => array('MP443', 'description', 'weapon_unlock/squarelarge/mp443_grach_fancy.png'),
		'U_P226' => array('P226', 'description', 'weapon_unlock/squarelarge/p226_fancy.png'),
		'U_QSZ92' => array('QSZ-92', 'description', 'weapon_unlock/squarelarge/qsz-92_fancy.png'),
		'U_SW40' => array('SW40', 'description', 'weapon_unlock/squarelarge/sw40_fancy.png'), // Naval Strike DLC3

		// Grenades
		'U_Flashbang' => array('Flashbang', 'description', 'weapon_unlock/squarelarge/m84_flashbang_fancy.png'),
		'U_M34' => array('M34 INCENDIARY', 'description', 'weapon_unlock/squarelarge/m34_incendiary_fancy.png'),
		'U_M67' => array('M67 FRAG', 'description', 'weapon_unlock/squarelarge/m67_grenade_fancy.png'),
		'U_Grenade_RGO' => array('RGO IMPACT', 'description', 'weapon_unlock/squarelarge/rgo_impact_fancy.png'),
		'U_V40' => array('V40 MINI', 'description', 'weapon_unlock/squarelarge/v40_mini_fancy.png'),

		// map pick up
		'U_AMR2' => array('AMR-2', 'description', 'weapon_unlock/squarelarge/amr_far_fancy.png'),
		'U_AMR2_CQB' => array('AMR-2 CQB', 'description', 'weapon_unlock/squarelarge/amr_cqb_fancy.png'),
		'U_AMR2_MED' => array('AMR-2 MID', 'description', 'weapon_unlock/squarelarge/amr_med_fancy.png'),
		'U_AT4' => array('M136 CS', 'description', 'weapon_unlock/squarelarge/m136_fancy.png'),
		'U_MGL' => array('M32 MGL', 'description', 'weapon_unlock/squarelarge/mgl_fancy.png'),
		'U_M82A3' => array('M82A3', 'description', 'weapon_unlock/squarelarge/m82a3_far_fancy.png'),
		'U_M82A3_CQB' => array('M82A3 CQB', 'description', 'weapon_unlock/squarelarge/m82a3_cqb_fancy.png'),
		'U_M82A3_MED' => array('M82A3 MID', 'description', 'weapon_unlock/squarelarge/m82a3_med_fancy.png'),
		'U_USAS-12' => array('USAS-12', 'description', 'weapon_unlock/squarelarge/usas12_nv_fancy.png'),

		// Gadgets
		'U_C4' => array('C4', 'description', 'weapon_unlock/squarelarge/c4_fancy.png'),
		'U_C4_Support' => array('C4', 'description', 'weapon_unlock/squarelarge/c4_fancy.png'),
		'U_Defib' => array('Defibrillator', 'description', 'weapon_unlock/squarelarge/defib_fancy.png'),
		'U_Claymore' => array('M18 CLAYMORE', 'description', 'weapon_unlock/squarelarge/claymore_fancy.png'),
		'U_Claymore_Recon' => array('M18 CLAYMORE', 'description', 'weapon_unlock/squarelarge/claymore_fancy.png'),
		'U_FGM148' => array('FGM-148 JAVELIN', 'description', 'weapon_unlock/squarelarge/fgm148_javelin_fancy.png'),
		'U_SRAW' => array('FGM-172 SRAW', 'description', 'weapon_unlock/squarelarge/fgm172_sraw_fancy.png'),
		'U_SMAW' => array('MK153 SMAW', 'description', 'weapon_unlock/squarelarge/mk153_smaw_fancy.png'),
		'U_FIM92' => array('FIM-92 Stinger', 'description', 'weapon_unlock/squarelarge/fim92_stinger_fancy.png'),
		'U_RPG7' => array('RPG-7V2', 'description', 'weapon_unlock/squarelarge/rpg7_fancy.png'),
		'U_Sa18IGLA' => array('SA-18 IGLA', 'description', 'weapon_unlock/squarelarge/sa18_igla_fancy.png'),
		'U_PortableMedicpack' => array('FIRST AID PACK', 'description', 'image.png'),
		'U_Medkit' => array('MEDIC BAG', 'description', 'image.png'),
		'U_Starstreak' => array('HVM-II', 'description', 'weapon_unlock/squarelarge/hvm_starstreak_fancy.png'),
		'U_M15' => array('M15 AT MINE', 'description', 'weapon_unlock/squarelarge/at_mine_fancy.png'),
		'U_SLAM' => array('M2 SLAM', 'description', 'weapon_unlock/squarelarge/m2_slam_fancy.png'),
		'U_Repairtool' => array('REPAIR TOOL', 'description', 'weapon_unlock/squarelarge/repairtool_fancy.png'),
		'M224' => array('M224 MORTAR', 'description', 'weapon_unlock/squarelarge/m224_mortar_fancy.png'),
		//'Gameplay/Gadgets/SUAV/SUAV' => array('SUAV', 'description', 'image.png')
		//'Gameplay/Gadgets/MAV/MAV' => array('MAV', 'description', 'image.png')
		'AA Mine' => array('AA Mine', 'description', 'weapon_unlock/squarelarge/aamine_fancy.png'), // Naval Strike DLC3

		// Commander
		'U_Tomahawk' => array('CRUISE MISSILE', 'description', 'image.png'),

		// Knifes
		'Melee' => array('Knife', 'description', 'weapon_unlock/squarelarge/knife_fancy.png'),

		// misc
		'U_NLAW' => array('MBT LAW', 'description', 'image.png'),

		'SoldierCollision' => array('Soldier Collision', 'description', 'image.png'),
		'Suicide' => array('Suicide', 'description', 'image.png'),
		'Death' => array('Vehicle', 'description', 't90.png'),
		'RoadKill' => array('Road Kill', 'description', 'vdv.png'),
		'DamageArea' => array('Damage Area', 'description', 'image.png'),
		' ' => array('Not Identified', 'description', 'image.png'),

		// Vehicle Main Battle Tanks
		'Gameplay/Vehicles/M1A2/M1Abrams' => array('M1 ABRAMS', 'description', 'vehicle_unlock/squarelarge/m1a2_fancy.png'),
		'T90' => array('T-90A', 'description', 'vehicle_unlock/squarelarge/t90_fancy.png'),
		'Gameplay/Vehicles/CH_MBT_Type99/CH_MBT_Type99' => array('TYPE 99 MBT', 'description', 'vehicle_unlock/squarelarge/type99mbt_fancy.png'),

		// Vehicle Infantry Fighting Vehicle
		'Gameplay/Vehicles/LAV25/LAV25' => array('LAV-25', 'description', 'vehicle_unlock/squarelarge/lav-25_fancy.png'),
		'Gameplay/Vehicles/BTR-90/BTR90' => array('BTR-90', 'description', 'vehicle_unlock/squarelarge/btr90_fancy.png'),
		'Gameplay/Vehicles/CH_IFV_ZBD09/CH_IFV_ZBD09' => array('ZBD-09', 'description', 'vehicle_unlock/squarelarge/zbd09_fancy.png'),

		// Vehicle Anti Air
		'Gameplay/Vehicles/LAV25/LAV_AD' => array('LAV-AD', 'description', 'vehicle_unlock/squarelarge/lav-ad_fancy.png'),
		'Gameplay/Vehicles/CH_AA_PGZ-95/CH_AA_PGZ-95' => array('TYPE 95 AA', 'description', 'vehicle_unlock/squarelarge/type95aa_fancy.png'),
		'Gameplay/Vehicles/9K22_Tunguska_M/9K22_Tunguska_M' => array('9K22 TUNGUSKA-M', 'description', 'vehicle_unlock/squarelarge/tunguska_fancy.png'),

		// Vehicle Air Helicopter Scout
		'Gameplay/Vehicles/Z11W/spec/Z-11w_CH' => array('Z-11W', 'description', 'vehicle_unlock/squarelarge/z11_fancy.png'),
		'Gameplay/Vehicles/Z11W/Z-11w' => array('Z-11W', 'description', 'vehicle_unlock/squarelarge/z11_fancy.png'),
		'Gameplay/Vehicles/AH6/AH6_Littlebird' => array('AH-6J LITTLE BIRD', 'description', 'vehicle_unlock/squarelarge/ah6_fancy.png'),

		// Vehicle Air Helicopter Attack
		'Gameplay/Vehicles/Mi28/Mi28' => array('MI-28 HAVOC', 'description', 'vehicle_unlock/squarelarge/mi28_fancy.png'),
		'Gameplay/Vehicles/AH1Z/AH1Z' => array('AH-1Z VIPER', 'description', 'vehicle_unlock/squarelarge/ah1z_fancy.png'),
		'Z-10W' => array('Z-10W', 'description', 'vehicle_unlock/squarelarge/z10w_fancy.png'),

		// Vehicle Air
		'XP1/Gameplay/Vehicles/H6K/H6K' => array('BOMBER', 'description', 'vehicle_unlock/squarelarge/h6k_fancy.png'),
		'Gameplay/Vehicles/AC130/AC130_Gunship' => array('AC-130 GUNSHIP', 'description', 'vehicle_unlock/squarelarge/ac130_fancy.png'),

		// Vehicle Air Jet Attack
		'Gameplay/Vehicles/A-10_THUNDERBOLT/A10_THUNDERBOLT' => array('A10 WARTHOG', 'description', 'vehicle_unlock/squarelarge/a10_fancy.png'),
		'Gameplay/Vehicles/SU-25TM/SU-25TM' => array('SU-25TM FROGFOOT', 'description', 'vehicle_unlock/squarelarge/su25_fancy.png'),
		'Gameplay/Vehicles/CH_JET_Qiang-5-fantan/CH_JET_Q5_FANTAN' => array('Q-5 FANTAN', 'description', 'vehicle_unlock/squarelarge/q5_fancy.png'),

		// Vehicle Fast Attack Craft
		'Gameplay/Vehicles/CH_FAC_DV15/CH_FAC_DV15' => array('DV-15', 'description', 'vehicle_unlock/squarelarge/dv15_fancy.png'),
		'Gameplay/Vehicles/CH_FAC_DV15/spec/CH_FAC_DV15_RU' => array('DV-15', 'description', 'vehicle_unlock/squarelarge/dv15_fancy.png'),
		'Gameplay/Vehicles/US_FAC-CB90/US_FAC-CB90' => array('RCB', 'description', 'vehicle_unlock/squarelarge/rcb90_fancy.png'),

		// Vehicle Mobile Artillery
		'Gameplay/Vehicles/HIMARS/HIMARS' => array('M142', 'description', 'vehicle_unlock/squarelarge/himars_fancy.png'),

		// Vehicle Air Jet Stealth
		'Gameplay/Vehicles/F35/F35B' => array('F35', 'description', 'vehicle_unlock/squarelarge/f35_fancy.png'),
		'Gameplay/Vehicles/RU_FJET_T-50_Pak_FA/RU_FJET_T-50_Pak_FA' => array('SU-50', 'description', 'vehicle_unlock/squarelarge/su50-t50pak_fancy.png'),
		'Gameplay/Vehicles/Ch_FJET_J-20/CH_FJET_J-20' => array('J-20', 'description', 'vehicle_unlock/squarelarge/j20_fancy.png'),

		// Vehicle Boat
		'RHIB' => array('RHIB BOAT', 'description', 'vehicle_unlock/squarelarge/rhib_fancy.png'),
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
