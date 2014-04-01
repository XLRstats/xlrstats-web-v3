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

		/* Maps for China Rising */
		'XP1_001' => array('Silk Road', 'description', 'xp1_001.jpg'),
		'XP1_002' => array('Altai Range', 'description', 'xp1_002.jpg'),
		'XP1_003' => array('Guilin Peaks', 'description', 'xp1_003.jpg'),
		'XP1_004' => array('Dragon Pass', 'description', 'xp1_004.jpg'),
		
		/* Maps for Second Assault */
		'XP0_Caspian' => array('Caspian Border 2014', 'description', 'xp0_caspian.jpg'),
		'XP0_Firestorm' => array('Operation Firestorm 2014', 'description', 'xp0_firestorm.jpg'),
		'XP0_Metro' => array('Operation Metro 2014', 'description', 'xp0_metro.jpg'),
		'XP0_Oman' => array('Gulf of Oman 2014', 'description', 'xp0_oman.jpg'),
		
		/* Maps for Naval Strike */		
		'XP2_001' => array('Lost Islands', 'description', 'xp2_001.jpg'),
		'XP2_002' => array('Nansha Strike', 'description', 'xp2_002.jpg'),
		'XP2_003' => array('Wave Breaker', 'description', 'xp2_003.jpg'),
		'XP2_004' => array('Operation Mortar', 'description', 'xp2_004.jpg'),
	),
	/**
	 * Weapon: name, description, image
	 */
	'weapons' => array(
		//Weapon Image Path
		/* Set this to ur private Server because of wrong paths */
		'image_path' => '/img/bf4/',

		// Assault Rifles
		'U_GalilACE23' => array('ACE 23', 'The ACE 23 is a weapon featured in Battlefield 4 for the Assault class.<br />It is unlocked upon completing the Assault Expert gold tier assignment.<br />It functions similarly to the M16A3 from Battlefield 3, coming closest <br />to its 800 RPM from the automatic weapons, having a firerate of 770 RPM,<br />making it one of the better assault rifles to be used in close quarters.<br />At longer ranges, more controlled bursts are recommended to maintain accuracy.<br />The addition of stability-enhancing attachments such as the Muzzle Brake<br />coupled with Stubby Grip; or Angled Grip with <b>Heavy Barrel</b> greatly extend<br />the weapon\'s effectiveness	beyond close and even mid-ranges.', 'galil_ace23_fancy.png','http://symthic.com/bf4-weapon-info?w=ACE_23'),
		'U_SteyrAug' => array('AUG A3', 'description', 'steyraug_fancy.png','http://symthic.com/bf4-weapon-info?w=AUG_A3'),
		'U_CZ805' => array('CZ-805', 'description', 'cz805_fancy.png','http://symthic.com/bf4-weapon-info?w=CZ-805'),
		'U_FAMAS' => array('FAMAS', 'description', 'famas_fancy.png','http://symthic.com/bf4-weapon-info?w=FAMAS'),
		'U_L85A2' => array('L85A2', 'description', 'l85a2_fancy.png','http://symthic.com/bf4-weapon-info?w=L85A2'),
		'U_M16A4' => array('M16A4', 'description', 'm16a4_fancy.png','http://symthic.com/bf4-weapon-info?w=M16A4'),
		'U_QBZ951' => array('QBZ-95-1', 'description', 'qbz951_fancy.png','http://symthic.com/bf4-weapon-info?w=QBZ-95-1'),
		'U_SAR21' => array('SAR-21', 'description', 'sar21_fancy.png','http://symthic.com/bf4-weapon-info?w=SAR-21'),
		'U_AEK971' => array('AEK-971', 'description', 'aek971_fancy.png', 'http://symthic.com/bf4-weapon-info?w=AEK-971'),
		'U_AK12' => array('AK-12', 'description', 'ak12_fancy.png','http://symthic.com/bf4-weapon-info?w=AK-12'),
		'U_M416' => array('M416', 'description', 'm416_fancy.png','http://symthic.com/bf4-weapon-info?w=M416'),
		'U_SCAR-H' => array('SCAR-H', 'description', 'scarh_fancy.png','http://symthic.com/bf4-weapon-info?w=SCAR-H'),
		'U_F2000' => array('F2000', 'description', 'f2000_fancy.png','http://symthic.com/bf4-weapon-info?w=F2000'),
		'U_AR160' => array('AR 160', 'description', 'ar160_fancy.jpg','http://symthic.com/bf4-weapon-info?w=AR-160'),
		
		// Underslug
		'U_AEK971_M320_HE' => array('AEK-971 M320 HE', 'description', 'aek971_fancy.png', 'http://symthic.com/bf4-weapon-info?w=AEK-971'),
		'U_AEK971_M320_LVG' => array('AEK-971 M320 LVG', 'description', 'aek971_fancy.png', 'http://symthic.com/bf4-weapon-info?w=AEK-971'),
		'U_AEK971_M320_SHG' => array('AEK-971 M320 Shotgun', 'description', 'aek971_fancy.png', 'http://symthic.com/bf4-weapon-info?w=AEK-971'),
		'U_AK12_M320_HE' => array('AK-12 M320 HE', 'description', 'ak12_fancy.png','http://symthic.com/bf4-weapon-info?w=AK-12'),
		'U_AK12_M320_SMK' => array('AK-12 M320 Smoke', 'description', 'ak12_fancy.png','http://symthic.com/bf4-weapon-info?w=AK-12'),
		'U_CZ805_M320_HE' => array('CZ-805 M320 HE', 'description', 'm16a4_fancy.png','http://symthic.com/bf4-weapon-info?w=M16A4'),
		'U_M16A4_M320_HE' => array('M16A4 M320 HE', 'description', 'm16a4_fancy.png','http://symthic.com/bf4-weapon-info?w=M16A4'),
		'U_M16A4_M320_LVG' => array('M16A4 M320 LVG', 'description', 'm16a4_fancy.png','http://symthic.com/bf4-weapon-info?w=M16A4'),
		'U_SteyrAug_M320_FLASH' => array('AUG A3 M320 Flashbang', 'description', 'steyraug_fancy.png','http://symthic.com/bf4-weapon-info?w=AUG_A3'),
		'U_SteyrAug_M320_HE' => array('AUG A3 M320 HE', 'description', 'steyraug_fancy.png','http://symthic.com/bf4-weapon-info?w=AUG_A3'),
		'U_SteyrAug_M320_LVG' => array('AUG A3 M320 LVG', 'description', 'steyraug_fancy.png','http://symthic.com/bf4-weapon-info?w=AUG_A3'),
		'U_M26Mass_Flechette' => array('M26 DART', 'Compact shotgun capable of being mounted below the barrel of some Assault Rifles.<br />Loaded with flechette rounds which reduce damage but increase range and penetration. ', 'm26mass_fancy.png','http://symthic.com/bf4-shotgun-stats?p=stats'),
		'U_M26Mass_Frag' => array('M26 FRAG', 'Compact shotgun capable of being mounted below the barrel of some Assault Rifles.<br />Loaded with explosive FRAG ammunition for increased suppressing power.',  'm26mass_fancy.png','http://symthic.com/bf4-shotgun-stats?p=stats'),
		'U_M26Mass_Slug' => array('M26 SLUG', 'Compact shotgun capable of being mounted below the barrel of some Assault Rifles.<br /> Loaded with SABOT slug rounds for accurate medium range fire.', 'm26mass_fancy.png','http://symthic.com/bf4-shotgun-stats?p=stats'),
		'U_M26Mass' => array('M26 Mass', 'Compact shotgun capable of being mounted below the barrel of some Assault Rifles.br />Loaded with standard buckshot with high damage but no penetration.', 'm26mass_fancy.png','http://symthic.com/bf4-shotgun-stats?p=stats'),
		'U_M320_SHG' => array('M320 DART', 'Flechettes packed in a 40mm cartridge that effectively transforms the<br />launcher into a shotgun.', 'm320_fancy.png'),
		'U_M320_FLASH' => array('M320 FB', 'Flash Bang 40mm grenade with a suppressive flash to temporarily <br />blind enemies in close quarters.', 'm320_fancy.png'),
		'U_M320_HE' => array('M320 HE', 'High Explosive 40mm grenade with a small blast radius for engaging grouped infantry and light vehicles.', 'm320_fancy.png'),
		'U_M320_LVG' => array('M320 LVG', 'Timed 40mm grenade with a small anti-personnel warhead that bounces<br />off surfaces before exploding. ', 'm320_fancy.png'),
		'U_M320_SMK' => array('M320 SMK', '40mm grenade that creates a blinding cloud of white smoke on impact which also blocks spotting.', 'm320_fancy.png'),
		'U_M416_M26_Buck' => array('M416 M26 Buckshot', 'description', 'm416_fancy.png','http://symthic.com/bf4-weapon-info?w=M416'),
		'U_M416_M26_Flechette' => array('M416 M26 Flechette', 'description', 'm416_fancy.png','http://symthic.com/bf4-weapon-info?w=M416'),
		'U_M416_M26_Frag' => array('M416 M26 Fragment', 'description', 'm416_fancy.png','http://symthic.com/bf4-weapon-info?w=M416'),
		'U_M416_M26_Slug' => array('M416 M26 Slug', 'description', 'm416_fancy.png','http://symthic.com/bf4-weapon-info?w=M416'),
		'U_M416_M320_FLASH' => array('M416 M320 Flashbang', 'description', 'm416_fancy.png','http://symthic.com/bf4-weapon-info?w=M416'),
		'U_M416_M320_HE' => array('M416 M320 HE', 'description', 'm416_fancy.png','http://symthic.com/bf4-weapon-info?w=M416'),
		'U_M416_M320_SMK' => array('M416 M320 Smoke', 'description', 'm416_fancy.png','http://symthic.com/bf4-weapon-info?w=M416'),
		'U_QBZ951_M320_HE' => array('QBZ-95-1 M320 HE', 'description', 'qbz951_fancy.png','http://symthic.com/bf4-weapon-info?w=QBZ-95-1'),
		'U_SAR21_M320_HE' => array('SAR-21 M320 HE', 'description', 'sar21_fancy.png','http://symthic.com/bf4-weapon-info?w=SAR-21'),
		'U_SAR21_M320_SMK' => array('SAR-21 M320 Smoke', 'description', 'sar21_fancy.png','http://symthic.com/bf4-weapon-info?w=SAR-21'),
		'U_SCAR-H_M26_Buck' => array('SCAR-H M26 Buckshot', 'description', 'scarh_fancy.png','http://symthic.com/bf4-weapon-info?w=SCAR-H'),
		'U_SCAR-H_M26_Flechette' => array('SCAR-H M26 Flechette', 'description', 'scarh_fancy.png','http://symthic.com/bf4-weapon-info?w=SCAR-H'),
		'U_SCAR-H_M320_HE' => array('SCAR-H M320 HE', 'description', 'scarh_fancy.png','http://symthic.com/bf4-weapon-info?w=SCAR-H'),
		'U_USAS-12_Nightvision' => array('USAS-12 FLIR', 'description', 'usas12_nv_fancy.png'),
		'U_XM25' => array('XM25 AIRBURST', 'Fires 25mm grenades that can explode mid-flight creating an airburst effect to eliminate targets behind cover.<br/>Aiming down the sights at a cover will lock in that distance,<br />allowing the grenade to explode in the air 3 meters past the cover. ', 'xm25_fancy.png'),
		'U_XM25_Flechette' => array('XM25 DART', 'Fires a 25mm cartridge packed with penetrating Flechettes that effectively transform the launchery<br />into a semiautomatic shotgun. ', 'xm25_fancy.png'),
		'U_XM25_Smoke' => array('XM25 SMOKE', 'Fires 25mm grenades that can explode mid-flight creating an airburst smoke effect to block sight and spotting.<br />Aiming down the sights at a cover will lock in that distance,<br /> allowing the grenade to explode in the air 3 meters past the cover. ', 'xm25_fancy.png'),

		// Carbines
		'U_A91' => array('A91', 'description', 'a91_fancy.png','http://symthic.com/bf4-weapon-info?w=A-91'),
		'U_GalilACE' => array('ACE 21 CQB', 'description', 'galil_ace21cqb_fancy.png','http://symthic.com/bf4-weapon-info?w=ACE_21_CQB'),
		'U_GalilACE52' => array('ACE 52 CQB', 'description', 'galil_ace52cqb_fancy.png','http://symthic.com/bf4-weapon-info?w=ACE_52_CQB'),
		'U_ACR' => array('ACW-R', 'description', 'acwr_fancy.png','http://symthic.com/bf4-weapon-info?w=ACW-R'),
		'U_AK5C' => array('AK 5C', 'description', 'ak5c_fancy.png','http://symthic.com/bf4-weapon-info?w=AK_5C'),
		'U_AKU12' => array('AKU-12', 'description', 'aku12_fancy.png','http://symthic.com/bf4-weapon-info?w=AKU-12'),
		'U_G36C' => array('G36C', 'description', 'g36c_fancy.png','http://symthic.com/bf4-weapon-info?w=G36C'),
		'U_M4A1' => array('M4', 'description', 'm4a1_fancy.png','http://symthic.com/bf4-weapon-info?w=M4'),
		'U_MTAR21' => array('MTAR21', 'description', 'mtar21_fancy.png','http://symthic.com/bf4-weapon-info?w=MTAR-21'),
		'U_SG553LB' => array('SG553', 'description', 'sg553lb_fancy.png','http://symthic.com/bf4-weapon-info?w=SG553'),
		'U_Type95B' => array('TYPE-95B-1', 'description', 'type95b1_fancy.png','http://symthic.com/bf4-weapon-info?w=Type-95B-1'),

		// DMR/PDW
		'U_GalilACE53' => array('ACE 53 SV', 'description', 'galil_ace53sv_fancy.png','http://symthic.com/bf4-weapon-info?w=ACE_53_SV'),
		'U_M39EBR' => array('M39 EBR', 'description', 'm39_fancy.png'),
		'U_M39EMR' => array('M39 EMR', 'description', 'm39_fancy.png','http://symthic.com/bf4-weapon-info?w=M39_EMR'),
		'U_MK11' => array('MK11 MOD 0', 'description', 'mk11_fancy.png','http://symthic.com/bf4-weapon-info?w=MK11_MOD_0'),
		'U_QBU88' => array('QBU-88', 'description', 'qbu88_fancy.png','http://symthic.com/bf4-weapon-info?w=QBU-88'),
		'U_RFB' => array('RFB', 'description', 'rfb_fancy.png','http://symthic.com/bf4-weapon-info?w=RFB'),
		'U_SCAR-HSV' => array('SCAR-H SV', 'description', 'scarhsv_fancy.png','http://symthic.com/bf4-weapon-info?w=SCAR-H_SV'),
		'U_SKS' => array('SKS', 'description', 'sks_fancy.png','http://symthic.com/bf4-weapon-info?w=SKS'),
		'U_SVD12' => array('SVD-12', 'description', 'svd12_fancy.png','http://symthic.com/bf4-weapon-info?w=SVD-12'),

		// Sniper Rifles
		'U_SRS' => array('338-Recon', 'description', 'srs_338recon_fancy.png','http://symthic.com/bf4-weapon-info?w=338-Recon'),
		'U_CS-LR4' => array('CS-LR4', 'description', 'cslr4_fancy.png','http://symthic.com/bf4-weapon-info?w=CS-LR4'),
		'U_FY-JS' => array('FY-JS', 'description', 'fyjs_fancy.png','http://symthic.com/bf4-weapon-info?w=FY-JS'),
		'U_JNG90' => array('JNG-90', 'description', 'jng90_fancy.png','http://symthic.com/bf4-weapon-info?w=JNG-90'),
		'U_L96A1' => array('L96A1', 'description', 'l96a1_fancy.png','http://symthic.com/bf4-weapon-info?w=L96A1'),
		'U_M40A5' => array('M40A5', 'description', 'm40a5_fancy.png','http://symthic.com/bf4-weapon-info?w=M50A5'),
		'U_M98B' => array('M98B', 'description', 'm98b_fancy.png','http://symthic.com/bf4-weapon-info?w=M98B'),
		'U_Scout' => array('Scout Elite', 'description', 'scoutelite_fancy.png','http://symthic.com/bf4-weapon-info?w=Scout_Elite'),
		'U_M200' => array('SSR-61', 'description', 'm200_srr61_fancy.png','http://symthic.com/bf4-weapon-info?w=SRR-61'),
		'U_SV98' => array('SV98', 'description', 'sv98_fancy.png','http://symthic.com/bf4-weapon-info?w=SV98'),
		'U_GOL' => array('GOL Magnum', 'description', 'gol_fancy.png','http://symthic.com/bf4-weapon-info?w=GOL_Magnum'),
		'U_SR338' => array('338-RECON', 'description', 'srs_338recon_fancy.png','http://symthic.com/bf4-weapon-info?w=338-Recon'),

		// LMG
		'U_LSAT' => array('LSAT', 'description', 'lsat_fancy.png','http://symthic.com/bf4-weapon-info?w=LSAT'),
		'U_M240' => array('M240B', 'description', 'm240_fancy.png','http://symthic.com/bf4-weapon-info?w=M240B'),
		'U_M249' => array('M249', 'description', 'm249_fancy.png','http://symthic.com/bf4-weapon-info?w=M249'),
		'U_MG4' => array('MG4', 'description', 'mg4_fancy.png','http://symthic.com/bf4-weapon-info?w=MG4'),
		'U_M60E4' => array('M60-E4', 'description', 'm60_fancy.jpg','http://symthic.com/bf4-weapon-info?w=M60E4'),
		'U_Pecheneg' => array('PKP Pecheneg', 'description', 'pecheneg_fancy.png','http://symthic.com/bf4-weapon-info?w=PKP_Pecheneg'),
		'U_QBB95' => array('QBB-95', 'description', 'qbb95_fancy.png','http://symthic.com/bf4-weapon-info?w=QBB-95-1'),
		'U_RPK-74' => array('RPK-74M', 'description', 'rpk74_fancy.png','http://symthic.com/bf4-weapon-info?w=RPK-74M'),
		'U_RPK12' => array('RPK-12', 'description', 'rpk12_fancy.png','http://symthic.com/bf4-weapon-info?w=RPK-12'),
		'U_Type88' => array('TYPE 88 LMG', 'description', 'type88_fancy.png','http://symthic.com/bf4-weapon-info?w=Type-88_LMG'),
		'U_Ultimax' => array('U-100 MK5', 'description', 'ultimax_fancy.png','http://symthic.com/bf4-weapon-info?w=U-100_MK5'),
		'U_AWS' => array('AWS', 'description', 'aws_fancy.jpg'),
		
		// SMG
		'U_CBJ-MS' => array('CBJ-MS', 'description', 'cbjms_fancy.png','http://symthic.com/bf4-weapon-info?w=CBJ-MS'),
		'U_Scorpion' => array('CZ-3A1', 'description', 'scorpion_fancy.png','http://symthic.com/bf4-weapon-info?w=CZ-3A1'),
		'U_JS2' => array('JS2', 'description', 'js2_fancy.png','http://symthic.com/bf4-weapon-info?w=JS2'),
		'U_MP7' => array('MP7', 'description', 'mp7_fancy.png','http://symthic.com/bf4-weapon-info?w=MP7'),
		'U_MX4' => array('MX4', 'description', 'mx4_fancy.png','http://symthic.com/bf4-weapon-info?w=MX4'),
		'U_P90' => array('P90', 'description', 'p90_fancy.png','http://symthic.com/bf4-weapon-info?w=P90'),
		'U_MagpulPDR' => array('PDW-R', 'description', 'magpulpdr_fancy.png','http://symthic.com/bf4-weapon-info?w=PDW-R'),
		'U_PP2000' => array('PP-2000', 'description', 'pp2000_fancy.png','http://symthic.com/bf4-weapon-info?w=PP-2000'),
		'U_UMP45' => array('UMP-45', 'description', 'ump_fancy.png','http://symthic.com/bf4-weapon-info?w=UMP-45'),
		'U_UMP9' => array('UMP-9', 'description', 'ump9_fancy.png','http://symthic.com/bf4-weapon-info?w=UMP-9'),
		'U_ASVal' => array('ASVal', 'description', 'asval_fancy.png','http://symthic.com/bf4-weapon-info?w=AS_VAL'),

		// Shotguns
		'U_870' => array('870 MCS', 'description', 'remington870_fancy.png','http://symthic.com/bf4-shotgun-stats?p=stats'),
		'U_DBV12' => array('DBV-12', 'description', 'dbv12_fancy.png','http://symthic.com/bf4-shotgun-stats?p=stats'),
		'U_HAWK' => array('HAWK 12G', 'description', 'hawk12g_fancy.png','http://symthic.com/bf4-shotgun-stats?p=stats'),
		'U_M1014' => array('M1014', 'description', 'm1014_fancy.png','http://symthic.com/bf4-shotgun-stats?p=stats'),
		'U_QBS09' => array('QBS-09', 'description', 'qbs09_fancy.png','http://symthic.com/bf4-shotgun-stats?p=stats'),
		'U_SAIGA_12K' => array('SAIGA 12K', 'description', 'saiga12_fancy.png','http://symthic.com/bf4-shotgun-stats?p=stats'),
		'U_SAIGA_20K' => array('SAIGA 12K', 'description', 'saiga12_fancy.png','http://symthic.com/bf4-shotgun-stats?p=stats'),
		'U_SerbuShorty' => array('Shorty 12GA', 'description', 'shorty12g_fancy.png','http://symthic.com/bf4-shotgun-stats?p=stats'),
		'U_SPAS12' => array('SPAS-12', 'description', 'spas12_fancy.png','http://symthic.com/bf4-shotgun-stats?p=stats'),
		'U_UTAS' => array('UTS 15', 'description', 'utas_fancy.png','http://symthic.com/bf4-shotgun-stats?p=stats'),
		'U_DAO12' => array('DAO-12', 'description', 'dao12_fancy.png','http://symthic.com/bf4-shotgun-stats?p=stats'),
		'U_SR2' => array('SR-2', 'description', 'sr2_fancy.jpg','http://symthic.com/bf4-shotgun-stats?p=stats'),
			
		// Handguns
		'U_Taurus44' => array('.44 MAGNUM', 'description', 'taurus44_fancy.png','http://symthic.com/bf4-weapon-info?w=44_Magnum'),
		'U_HK45C' => array('COMPACT 45', 'description', 'hk45c_fancy.png','http://symthic.com/bf4-weapon-info?w=Compact_45'),
		'U_CZ75' => array('CZ-75', 'description', 'cz75_fancy.png','http://symthic.com/bf4-weapon-info?w=CZ-75'),
		'U_FN57' => array('FN57', 'description', 'fn57_fancy.png','http://symthic.com/bf4-weapon-info?w=FN57'),
		'U_Glock18' => array('G18', 'description', 'glock18_fancy.png','http://symthic.com/bf4-weapon-info?w=G18'),
		'U_M1911' => array('M1911', 'description', 'm1911_fancy.png','http://symthic.com/bf4-weapon-info?w=M1911'),
		'U_M9' => array('M9', 'description', 'm9_fancy.png','http://symthic.com/bf4-weapon-info?w=M9'),
		'U_M93R' => array('M93R', 'description', 'm93r_fancy.png','http://symthic.com/bf4-weapon-info?w=93R'),
		'U_MP412Rex' => array('MP412 REX', 'description', 'mp412rex_fancy.png','http://symthic.com/bf4-weapon-info?w=MP412_Rex'),
		'U_MP443' => array('MP443', 'description', 'mp443_grach_fancy.png','http://symthic.com/bf4-weapon-info?w=MP443'),
		'U_P226' => array('P226', 'description', 'p226_fancy.png','http://symthic.com/bf4-weapon-info?w=P226'),
		'U_QSZ92' => array('QSZ-92', 'description', 'qsz-92_fancy.png','http://symthic.com/bf4-weapon-info?w=QSZ-92'),
		'U_SW40' => array('SW 40', 'description', 'sw40_fancy.png'),

		// Grenades
		'U_Flashbang' => array('Flashbang', 'Hand grenade with a suppressive Flash Bang effect to temporarily blind enemies in close quarters.', 'm84_flashbang_fancy.png'),
		'U_M34' => array('M34 INCENDIARY', 'Incendiary hand grenade which creates a cloud of intense burning particles for a short duration.<br />Particles stick to soldiers and will continue to burn outside the original fire.', 'm34_incendiary_fancy.png'),
		'U_M67' => array('M67 FRAG', 'Standard timed fuze hand grenade with all around performance and balanced range and damage.', 'm67_grenade_fancy.png'),
		'U_Grenade_RGO' => array('RGO IMPACT', 'Russian RGO Impact grenade which explodes shortly after impacting a surface. <br />A smaller grenade with a lower blast yield, two of these grenades can be carried at one time. ', 'rgo_impact_fancy.png'),
		'U_V40' => array('V40 MINI', 'Mini hand grenade that can be thrown further than the standard M67 but with reduced blast yield.<br />3 of these grenades can be carried.', 'v40_mini_fancy.png'),

		// map pick up
		'U_AMR2' => array('AMR-2', 'description', 'amr_far_fancy.png'),
		'U_AMR2_MED' => array('AMR-2 MID', 'description', 'amr_med_fancy.png'),
		'U_AT4' => array('M136 CS', 'Confined Space version of the M136, capable of being fired indoors without harming the shooter.<br />A capable dumb fire anti-armor and anti-personnel weapon.', 'm136_fancy.png'),
		'U_AMR2_CQB' => array('AMR-2 CQB', 'description', 'amr_cqb_fancy.png'),
		'U_M136' => array('M136 CS', 'description', 'm136_fancy.png'),
		'U_MGL' => array('M32 MGL', 'description', 'mgl_fancy.png'),
		'U_M82A3' => array('M82A3', 'description', 'm82a3_far_fancy.png'),
		'U_M82A3_CQB' => array('M82A3 CQB', 'description', 'm82a3_cqb_fancy.png'),
		'U_M82A3_MED' => array('M82A3 MID', 'description', 'm82a3_med_fancy.png'),
		'U_USAS-12' => array('USAS-12', 'description', 'usas12_bp_fancy.png'),
		
		// Gadgets
		'U_C4' => array('C4', 'Plastic explosives that stick to most surfaces. Capable of a Mobility Kill on vehicles, and the remote detonator<br /> allows for traps and ambushes.', 'c4_fancy.png'),
		'U_C4_Support' => array('C4', 'Plastic explosives that stick to most surfaces. Capable of a Mobility Kill on vehicles, and the remote detonator<br /> allows for traps and ambushes. ', 'c4_fancy.png'),
		'U_Defib' => array('Defibrillator', 'Automated External Defibrillator (AED) revives downed teammates and electrocutes enemies.<br />Charging the paddles will revive teammates with increased health.<br />Needs to recharge after multiple quick uses. ', 'defib_fancy.png'),
		'U_Claymore' => array('M18 CLAYMORE', 'Anti-personnel mine that launches 3 trip wires shortly after being deployed. Breaking a wire<br />will detonate the mine. A mine with no trip wires is unable to detonate and should be redeployed.', 'claymore_fancy.png'),
		'U_Claymore_Recon' => array('M18 CLAYMORE', 'Anti-personnel mine that launches 3 trip wires shortly after being deployed.<br/>Breaking a wire will detonate the mine. A mine with no trip wires is unable to detonate and should be redeployed.', 'claymore_fancy.png'),
		'U_FGM148' => array('FGM-148 JAVELIN', 'Guided Anti-Tank missile launcher that locks on to land vehicles. Warhead does medium damage to armor from any angle of attack.<br /> Launcher must maintain lock until the missile hits the target.', 'fgm148_javelin_fancy.png'),
		'U_SRAW' => array('FGM-172 SRAW', 'The Wire-Guided Anti-Tank missile launcher can be manually guided to the target as long as<br /> the launcher is in aimed mode. Capable of locking on to laser-designated targets.', 'fgm172_sraw_fancy.png'),
		'U_SMAW' => array('MK153 SMAW', 'High speed, low drag Anti-Vehicle launcher with flatter trajectory but lower damage than the RPG-7V2.<br />Most effective against the sides and rear of armored targets.', 'mk153_smaw_fancy.png'),
		'U_FIM92' => array('FIM-92 Stinger', 'Fire and Forget Anti-Air missile capable of Mobility Kills on most aircraft at short range.<br />STINGER missiles will guide themselves to the target after launch.', 'fim92_stinger_fancy.png'),
		'U_RPG7' => array('RPG-7V2', 'Powerful rocket-propelled Anti-Vehicle launcher capable of disabling even heavily armored vehicles<br />from the sides and rear. ', 'rpg7_fancy.png'),
		'U_Sa18IGLA' => array('SA-18 IGLA', 'Anti-Air missile capable of Mobility Kills on most aircraft at medium range.<br />Launcher must maintain lock until the missile hits the target.', 'sa18_igla_fancy.png'),
		'U_PortableMedicpack' => array('FIRST AID PACK', 'description', 'medicpack.png'),
		'U_Medkit' => array('MEDIC BAG', 'description', 'medicbag.png'),
		'U_Starstreak' => array('HVM-II', 'Fires a cluster of 3 projectiles that are highly effective against both Aircraft and Light Vehicles.<br/>Launcher must maintain lock until the missile hits the target.<br /> Capable of locking on to laser designated targets. ', 'hvm_starstreak_fancy.png'),
		'U_M15' => array('M15 AT MINE', 'High Explosive Anti-Tank mine that detonates when vehicles pass by in close proximity.<br />Capable of a Mobility Kill on even the heaviest armored vehicles.', 'at_mine_fancy.png'),
		'U_SLAM' => array('M2 SLAM', 'Selectable Lightweight Attack Munition usable as either an off-route Anti-Tank mine or a traditional land mine.<br />Blast damage is less than the M15, but is still capable of a<br /> Mobility Critical on heavily armored vehicles. ', 'm2_slam_fancy.png'),
		'U_Repairtool' => array('REPAIR TOOL', 'Hand held oxy-fuel welding and cutting torch that repairs friendly vehicles and damages enemy vehicles and infantry.', 'repairtool_fancy.png'),
		'U_M320_3GL'  => array('M320 3GL', 'Fires 3 smaller 40mm grenades for attacking several targets with less<br />damage than the HE grenade.', 'm320_3gl_fancy.png', ''),

		// Commander
		'U_Tomahawk' => array('CRUISE MISSILE', 'Commander Attack Weapon', 'image.png'),

		// Knifes
		'Melee' => array('Melee', 'description', 'knife_bowie_fancy.png'),

		// misc
		'U_NLAW' => array('MBT LAW', 'Smart Anti-Tank missile that automatically detects vehicles near the warhead and guides to the target.<br />Easy to use but low damage from all angles of attack.<br />Capable of locking on to laser-designated targets. ', 'mbt_law_fancy.png'),

		//Vehicles and new weapon Images since Dice just put out the names of Vehicle Deaths,Kills
		'Gameplay/Vehicles/M1A2/M1Abrams' => array('M1 ABRAMS', 'description', 'm1a2_fancy.png'),
		'T90' => array('T-90A', 'description', 't90_fancy.png'),
		'Gameplay/Vehicles/9K22_Tunguska_M/9K22_Tunguska_M' => array('9K22 TUNGUSKA-M', 'description', 'tunguska_fancy.png'),
		'Gameplay/Vehicles/BTR-90/BTR90' => array('BTR-90', 'description', 'btr90_fancy.png'),
		'Gameplay/Vehicles/LAV25/LAV25' => array('LAV-25', 'description', 'lav-25_fancy.png'),
		'Gameplay/Vehicles/LAV25/LAV_AD' => array('LAV-AD', 'description', 'lav-ad_fancy.png'),
	 	'Gameplay/Vehicles/CH_AA_PGZ-95/CH_AA_PGZ-95'  => array('Type 95 AA', 'description', 'type95aa_fancy.png'),
		'Gameplay/Vehicles/Centurion_C-RAM/Centurion_C-RAM' => array('HJ-8 LAUNCHER', 'description', 'centurion_fancy.png'),
		'Gameplay/Vehicles/AC130/AC130_Gunship' => array('AC-130 Gunship', 'description', 'ac130_fancy.png'),
		'Gameplay/Vehicles/AH1Z/AH1Z' => array('AH1Z Viper', 'description', 'ah1z_fancy.png'),
		'Gameplay/Vehicles/SU-25TM/SU-25TM' => array('SU-25TM FROGFOOT', 'description', 'su25_fancy.png'),
		'Gameplay/Vehicles/Mi28/Mi28' => array('Mi-28 HAVOC', 'description', 'mi28_fancy.png'),
		'Gameplay/Vehicles/AH6/AH6_Littlebird' => array('AH6-Littlebird', 'description', 'ah6_fancy.png'),
		'Gameplay/Vehicles/CH_JET_Qiang-5-fantan/CH_JET_Q5_FANTAN' => array('Q-5 FANTAN', 'description', 'q5_fancy.png'),
		'Gameplay/Vehicles/CH_IFV_ZBD09/CH_IFV_ZBD09' => array('ZBD-09', 'description', 'zbd09_fancy.png'),
	 	'Gameplay/Vehicles/CH_MBT_Type99/CH_MBT_Type99' => array('TYPE 99 MBT', 'description', 'type99mbt_fancy.png'),
		'Gameplay/Vehicles/F35/F35B' => array('F35', 'description', 'f35_fancy.png'),
		'Gameplay/Vehicles/HIMARS/HIMARS' => array('M142', 'description', 'himars_fancy.png'),
		'Gameplay/Vehicles/RU_FJET_T-50_Pak_FA/RU_FJET_T-50_Pak_FA' => array('SU-50', 'description', 'su50-t50pak_fancy.png'),
		'Gameplay/Vehicles/TOW2/TOW2' => array('M220 TOW LAUNCHER', 'description','tow_fancy.png'),
		'Gameplay/Vehicles/Z11W/spec/Z-11w_CH' => array('Z-11W', 'description', 'z11_fancy.png'),
		'Gameplay/Vehicles/Z11W/Z-11w' => array('Z-11W', 'description', 'z11_fancy.png'),
		'Z-10w' => array('Z-10W', 'description', 'z10w_fancy.png'),
		'Gameplay/Vehicles/CH_FAC_DV15/CH_FAC_DV15' => array('DV-15 CH', 'description' , 'dv15_fancy.png'),
		'Gameplay/Vehicles/CH_FAC_DV15/spec/CH_FAC_DV15_RU' => array('DV-15 RU', 'description' , 'dv15_fancy.png'),
		'Gameplay/Vehicles/A-10_THUNDERBOLT/A10_THUNDERBOLT'=> array('A10 WARTHOG', 'description' , 'a10_fancy.png'),
		'XP1/Gameplay/Gadgets/UCAV/UCAV_Launcher' => array('UCAV', 'A small reconnaissance unmanned combat areal vehicle armed with an explosive warhead<br />that allows the support class to use it as guided munitions. ', 'ucav_fancy.png'),
		'RHIB' => array('RHIB BOAT', 'description', 'rhib_fancy.png'),
		'Gameplay/Vehicles/Ch_FJET_J-20/CH_FJET_J-20' => array('J-20', 'description', 'j20_fancy.png'),
		'Gameplay/Vehicles/Venom/Venom' => array('UH-1Y VENOM', 'description', 'venom_fancy.png'),
		'Gameplay/Vehicles/Pantsir/Pantsir-S1' => array('PANTSIR-S1', 'description', 'pantsir_fancy.png'),
		'DPV' => array('DPV', 'description', 'dpv_fancy.png'),
		'XP1/Gameplay/Vehicles/H6K/H6K' => array('Bomber', 'description', 'h6k_fancy.png'),
		'AA Mine' => array('Anti Air Mine', 'Anti-Air Mine which targets air vehicles flying within its radius.', 'aamine_fancy.png'),
		'Gameplay/Vehicles/US_FAC-CB90/US_FAC-CB90' => array('RCB', 'description', 'rcb90_fancy.png'),
		'Gameplay/Vehicles/CH_ATGM_HJ-8/CH_ATGM_HJ-8' => array('HJ-8 LAUNCHER', 'description', 'hj8_fancy.png'),
		'M224' => array('M224 MORTAR', 'Remote-controlled 60mm Mortar that fires high explosive rounds using a terrain grid targeting system.<br />Shells travel a ballistic path and may hit objects between the launcher and the intended target.<br />Rapid fire is very inaccurate, single shells have great precision.', 'm224_mortar_fancy.png'),
		'Gameplay/Vehicles/GunShieldAndTripod/GunShieldTripod' => array('.50 CAL', 'description', 'gunshield_fancy.png'),
		'Gameplay/Vehicles/CH_MRAP-ZFB-05/CH_MRAP-ZFB-05' => array('MRAP', 'description', 'mrap-cougar_fancy.png'),
		'Gameplay/Vehicles/AAV-7A1/AAV-7A1' => array('AAV-7A1 AMTRAC', 'description', 'aav_fancy.png'),
		'Kornet' => array('9M133 KORNET LAUNCHER', 'description', 'kornet_fancy.png'),
		'Gameplay/Vehicles/CH_LTHE_Z-9/CH_LTHE_Z-9' => array('Z-9 HAITUN', 'description', 'z9-haitun_fancy.png'),
		'Gameplay/Vehicles/CH_FAV_LYT2021/CH_FAV_LYT2021' => array('LYT 2021', 'description', 'lyt2021_fancy.png'),
		'Gameplay/Gadgets/MAV/MAV' => array('MAV', 'description', 'mav_fancy.png'),
		'Gameplay/Vehicles/CH_CIWS-LD-2000/CH_CIWS-LD-2000' => array('LD 2000', 'description', 'ld2000_fancy.png'),
		'UCAV' => array('UCAV', 'description', 'ucav_fancy.png'),
		'Ka-60' => array('Ka-60 Kasatka', 'description', 'ka60_fancy.png'),
		'XP1/Gameplay/Vehicles/B1Lancer/B1Lancer' => array('B1 Lancer', 'description', 'image.png'),
		'Gameplay/Vehicles/GrowlerITV/GrowlerITV' => array('M1161 ITV', 'description', 'growler_fancy.png', ''),

		
		/* Example */
		//'' => array('', 'description', '', ''),
		
		

		// 
		
		

		'SoldierCollision' => array('Soldier Collision', 'description', 'image.png'),
		'Suicide' => array('Suicide', 'description', 'image.png'),
		'Death' => array('Vehicle', 'description', 't90_fancy.png'),
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
