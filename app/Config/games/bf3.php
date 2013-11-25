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
// BF3 config settings
//*********************

$config = array(
	'gameName' => 'BattleField 3',

/**
 * Map: name, description, image
 */
	'maps' => array(
		//Map Image Path
		'image_path' => 'http://battlelog-cdn.battlefield.com/cdnprefix/98ed2fe-3/public/base/bf3/map_images/146x79/',

		//Stock
		'MP_001' => array('Grand Bazaar', 'description', 'mp_001.jpg'),
		'MP_003' => array('Teheran Highway', 'description', 'mp_003.jpg'),
		'MP_007' => array('Caspian Border', 'description', 'mp_007.jpg'),
		'MP_011' => array('Seine Crossing', 'description', 'mp_011.jpg'),
		'MP_012' => array('Operation Firestorm', 'description', 'mp_012.jpg'),
		'MP_013' => array('Damavand Peak', 'description', 'mp_013.jpg'),
		'MP_017' => array('Noshahar Canals', 'description', 'mp_017.jpg'),
		'MP_018' => array('Kharg Island', 'description', 'mp_018.jpg'),
		'MP_Subway' => array('Operation Metro', 'description', 'mp_subway.jpg'),

		//Back to Karkand
		'XP1_001' => array('Strike At Karkand', 'description', 'xp1_001.jpg'),
		'XP1_002' => array('Gulf of Oman', 'description', 'xp1_002.jpg'),
		'XP1_003' => array('Sharqi Peninsula', 'description', 'xp1_003.jpg'),
		'XP1_004' => array('Wake Island', 'description', 'xp1_004.jpg'),

		//Close Quarters
		'XP2_Factory' => array('Scrapmetal', 'description', 'xp2_factory.jpg'),
		'XP2_Office' => array('Operation 925', 'description', 'xp2_office.jpg'),
		'XP2_Palace' => array('Donya Fortress', 'description', 'xp2_palace.jpg'),
		'XP2_Skybar' => array('Ziba Tower', 'description', 'xp2_skybar.jpg'),

		//Armored Kill
		'XP3_Desert' => array('Bandar Desert', 'description', 'xp3_desert.jpg'),
		'XP3_Alborz' => array('Alborz Mountains', 'description', 'xp3_alborz.jpg'),
		'XP3_Shield' => array('Armored Shield', 'description', 'xp3_shield.jpg'),
		'XP3_Valley' => array('Death Valley', 'description', 'xp3_valley.jpg'),

		//Aftermath
		'XP4_Quake' => array('Epicenter', 'description', 'xp4_quake.jpg'),
		'XP4_FD' => array('Markaz Monolith', 'description', 'xp4_fd.jpg'),
		'XP4_Parl' => array('Azadi Palace', 'description', 'xp4_parl.jpg'),
		'XP4_Rubble' => array('Talah market', 'description', 'xp4_rubble.jpg'),

		//Misc
		'None' => array('-Unknown-', 'description', 'image.png'),
	),

/**
 * Weapon: name, description, image
 */
	'weapons' => array(
		//Weapon Image Path
		'image_path' => 'http://battlelog-cdn.battlefield.com/cdnprefix/98ed2fe-3/public/profile/bf3/stats/items_147x88/',

		//Assault
		'AEK-971' => array('AEK-971 Assault Rifle', 'description', 'aek971.png'),
		'Weapons/AK74M/AK74' => array('AK-74M Assault Rifle', 'description', 'ak74m.png'),
		'AN-94 Abakan' => array('AN-94 Abakan Assault Rifle', 'description', 'an94.png'),
		'Steyr AUG' => array('AUG A3 Assault Rifle', 'description', 'xp2_steyraug.png'), //CQ DLC
		'F2000' => array('FN2000 Assault Rifle', 'description', 'f2000.png'),
		'FAMAS' => array('FAMAS Assault Rifle', 'description', 'xp1_famas.png'),
		'Weapons/G3A3/G3A3' => array('G3 Assault Rifle', 'description', 'g3.png'), // B2K DLC
		'Weapons/KH2002/KH2002' => array('Khaybar KH-2002 Assault Rifle', 'description', 'kh2002.png'),
		'Weapons/XP1_L85A2/L85A2' => array('L85A2 Assault Rifle', 'description', 'xp1_l85a2.png'), // B2K DLC
		//Confusing as RCON spits out both
		'M416' => array('M416 Assault Rifle', 'description', 'm416.png'),
		'Weapons/M416/M416' => array('M416 Assault Rifle', 'description', 'm416.png'),
		'M16A4' => array('M16A3 Assault Rifle', 'description', 'm16a4.png'),
		'SCAR-L' => array('SCAR-L Assault Rifle', 'description', 'xp2_scarl.png'), // CQ DLC

		//Engineer (SMGs and Carbines)
		'Weapons/A91/A91' => array('A-91 Sub Carbine Rifle', 'description', 'a91.png'),
		'Weapons/XP2_ACR/ACR' => array('ACW-R Carbine Rifle', 'description', 'xp2_acr.png'), // CQ DLC
		'AKS-74u' => array('AKS 74U Sub Machine Gun', 'description', 'aks74u.png'),
		'Weapons/G36C/G36C' => array('G36C Carbine Rifle', 'description', 'g36c.png'),
		'HK53' => array('G53 Carbine Rifle', 'description', 'xp1_hk53.png'), // B2K DLC
		'M4A1' => array('M4A1 Carbine Rifle', 'description', 'm4a1.png'),
		'Weapons/XP2_MTAR/MTAR' => array('MTAR-21 Carbine Rifle', 'description', 'xp2_mtar.png'), // CQ DLC
		'QBZ-95' => array('QBZ-95 Carbine Rifle', 'description', 'xp1_qbz95b.png'), // B2K DLC
		'Weapons/SCAR-H/SCAR-H' => array('SCAR-H Carbine Rifle', 'description', 'scarh.png'),
		'SG 553 LB' => array('SG553 Carbine Rifle', 'description', 'sg553lb.png'), // B2K DLC

		//Recon
		'JNG90' => array('JNG-90 Sniper Rifle', 'description', 'xp2_jng90.png'), // CQ DLC
		'L96' => array('L96 Sniper Rifle', 'description', 'xp1_l96.png'),
		'M39' => array('M39 EMR Semi Automatic Sniper Rifle', 'description', 'm39.png'),
		'M40A5' => array('M40A5 Sniper Rifle', 'description', 'm40a5.png'),
		'M417' => array('M417 Semi Automatic Sniper Rifle', 'description', 'xp2_hk417.png'), // CQ DLC
		'Model98B' => array('M98B Bolt Action Sniper Rifle', 'description', 'm98b.png'),
		'Mk11' => array('MK11 Sniper Rifle', 'description', 'mk11.png'),
		'QBU-88' => array('QBU-88 Sniper Rifle', 'description', 'xp1_qbu88.png'), // B2K DLC
		'SKS' => array('SKS Semi Automatic Sniper Rifle', 'description', 'sks.png'),
		'SV98' => array('SV98 Bolt Action Sniper Rifle', 'description', 'sv98.png'),
		'SVD' => array('SVD Semi Automatic Sniper Rifle', 'description', 'svd.png'),

		//Support
		'Weapons/XP2_L86/L86' => array('L86A2 Machine Gun', 'description', 'xp2_l86.png'), // CQ DLC
		'LSAT' => array('LSAT Machine Gun', 'description', 'xp2_lsat.png'), // CQ DLC
		'M240' => array('M240B Machine Gun', 'description', 'm240.png'),
		'M249' => array('M249 Machine Gun', 'description', 'm249.png'),
		'M27IAR' => array('M27 IAR Machine Gun', 'description', 'm27.png'),
		'RPK-74M' => array('RPK Machine Gun', 'description', 'rpk.png'),
		'M60' => array('M60E4 Machine Gun', 'description', 'm60.png'),
		'MG36' => array('MG36  Machine Gun', 'description', 'xp1_mg36.png'), // CQ DLC
		'Pecheneg' => array('PKP Pecheneg Machine Gun', 'description', 'pecheneg.png'),
		'QBB-95' => array('QBB-95 Machine Gun', 'description', 'xp1_qbb95.png'), // B2K DLC
		'Type88' => array('Type 88 Machine Gun', 'description', 'type88.png'),

		//Shotguns
		'870MCS' => array('Remington 870 Shotgun', 'description', 'remington870.png'),
		'DAO-12' => array('DAO 12 Semi Automatic Shotgun', 'description', 'dao12.png'),
		'M1014' => array('M1014 Semi Automatic Shotgun', 'description', 'm1014.png'),
		'jackhammer' => array('MK3A1 Automatic Shotgun', 'description', 'xp1_jackhammer.png'), // B2K DLC
		'Siaga20k' => array('Saiga 12 Semi Automatic Shotgun', 'description', 'saiga12.png'),
		'USAS-12' => array('USAS 12 Semi Automatic Shotgun', 'description', 'usas12.png'),
		'SPAS-12' => array('SPAS-12 Pump Action Shutgun', 'description', 'xp2_spas12.png'), // CQ DLC

		//Sidearms
		'M1911' => array('M1911 Pistol', 'description', 'm1911.png'),
		'M9' => array('Beretta M9 Semi Automatic Pistol', 'description', 'm9.png'),
		'Weapons/MP443/MP443' => array('MP-443 Grach Semi Automatic Pistol', 'description', 'mp443_grach.png'),
		'Weapons/MP443/MP443_GM' => array('MP-443 Grach Semi Automatic Pistol', 'description', 'mp443_grach.png'),
		'Glock18' => array('G18 Fully Automatic Pistol', 'description', 'mp443_grach.png'),
		'Taurus .44' => array('.44 Magnum Pistol', 'description', 'taurus44.png'),
		'Weapons/MP412Rex/MP412REX' => array('MP412 REX .357 Magnum Pistol', 'description', 'mp412rex.png'),
		'M93R' => array('93R Pistol', 'description', 'm93r.png'),

		//SMGs
		'PP-19' => array('PP-19 Sub Machine Gun', 'description', 'xp1_pp19.png'),
		'PP-2000' => array('PP-2000 Sub Machine Gun', 'description', 'pp2000.png'),
		'Weapons/UMP45/UMP45' => array('UMP-45 Sub Machine Gun', 'description', 'ump.png'),
		'Weapons/MagpulPDR/MagpulPDR' => array('PDW-R Sub Machine Gun', 'description', 'magpul.png'),
		'Weapons/P90/P90' => array('P90 Sub Machine Gun', 'description', 'p90.png'),
		'Weapons/P90/P90_GM' => array('P90 Gun Master', 'description', 'p90.png'),
		'MP7' => array('MP7 Sub Machine Gun', 'description', 'mp7.png'),
		'Weapons/XP2_MP5K/MP5K' => array('M5K Sub Machine Gun', 'description', 'xp2_mp5k.png'), // CQ DLC

		//Assault
		'AS Val' => array('AS VAL Assault Rifle', 'description', 'asval.png'),

		//Rocket Launchers
		'RPG-7' => array('RPG-7V2 Rocket Launcher', 'description', 'rpg7.png'),											//Engineer
		'SMAW' => array('SMAW Rocket Launcher', 'description', 'smaw.png'),												//Engineer
		'FGM-148' => array('FGM-148 Javelin', 'description', 'fgm148.png'),												//Engineer
		'FIM92' => array('FIM-92 Stinger Anti Air Missile Launcher', 'description', 'fim92a_stinger.png'),				//Engineer
		'Weapons/Sa18IGLA/Sa18IGLA' => array('SA-18 IGLA Anti Air Missile Launcher', 'description', 'sa18igla.png'),	//Engineer

		//Equipment
		'Weapons/Gadgets/C4/C4' => array('C4 explosives', 'description', 'c4.png'),						//Support
		'Weapons/Gadgets/Claymore/Claymore' => array('M18 Claymore', 'description', 'claymore.png'),	//Support
		'M15 AT Mine' => array('M15 AT Mine', 'description', 'mine.png'),								//Engineer
		'Repair Tool' => array('Repair Tool', 'description', 'repairtool.png'),							//Engineer
		'Defib' => array('Defibrillator', 'description', 'defib.png'),									//Assault
		'M26Mass' => array('M26 MASS', 'description', 'm26mass.png'),									//Assault
		'M320' => array('M320 Grenade Launcher', 'description', 'm320.png'),							//Assault
		'Weapons/Knife/Knife' => array('Knife', 'description', 'combatknife.png'),						//General
		'Knife_RazorBlade' => array('Knife', 'description', 'combatknife.png'),							//General
		'M67' => array('M67 Hand Grenade', 'description', 'm67-grenade.png'),							//General
		'Medkit' => array('Medkit', 'description', 'medkit.png'),

		//Misc
		'SoldierCollision' => array('Soldier Collision', 'description', 'image.png'),
		'Suicide' => array('Suicide', 'description', 'image.png'),
		'Melee' => array('Melee', 'description', 'image.png'),
		'Death' => array('Vehicle/Mortar Kill', 'description', 't90.png'),
		'RoadKill' => array('Road Kill', 'description', 'vdv.png'),
		'DamageArea' => array('Damage Area', 'description', 'image.png'), //?
		' ' => array('Not Identified', 'description', 'image.png'),
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
		'torso_upper' => array('torso' => 'Body'),
	),

/**
 * Personal Achievements, pins, ribbons, medals
 */
	'achievements' => array(
		'Assault Class' => array(
			'AEK-971',
			'Weapons/AK74M/AK74',
			'AN-94 Abakan',
			'Steyr AUG',
			'F2000',
			'FAMAS',
			'Weapons/G3A3/G3A3',
			'Weapons/KH2002/KH2002',
			'Weapons/XP1_L85A2/L85A2',
			'M416',
			'Weapons/M416/M416',
			'M16A4',
			'SCAR-L',
			'Defib',
			'M26Mass',
			'M320',
			'AS Val',
		),
		'Engineer Class' => array(
			'Weapons/A91/A91',
			'Weapons/XP2_ACR/ACR',
			'AKS-74u',
			'Weapons/G36C/G36C',
			'HK53',
			'M4A1',
			'Weapons/XP2_MTAR/MTAR',
			'QBZ-95',
			'Weapons/SCAR-H/SCAR-H',
			'SG 553 LB',
		),
		'Recon Class' => array(
			'JNG90',
			'L96',
			'M39',
			'M40A5',
			'M417',
			'Model98B',
			'Mk11',
			'QBU-88',
			'SKS',
			'SV98',
			'SVD',
		),
		'Support Class' => array(
			'Weapons/XP2_L86/L86',
			'LSAT',
			'M240',
			'M249',
			'M27IAR',
			'RPK-74M',
			'M60',
			'MG36',
			'Pecheneg',
			'QBB-95',
			'Type88',
		),
		'Shotguns' => array(
			'870MCS',
			'DAO-12',
			'M1014',
			'jackhammer',
			'Siaga20k',
			'USAS-12',
			'SPAS-12',
		),
		'Sidearms' => array(
			'M1911',
			'M9',
			'Weapons/MP443/MP443',
			'Weapons/MP443/MP443_GM',
			'Glock18',
			'Taurus .44',
			'Weapons/MP412Rex/MP412REX',
			'M93R',
		),
		'SMG\'s' => array(
			'PP-19',
			'PP-2000',
			'Weapons/UMP45/UMP45',
			'Weapons/MagpulPDR/MagpulPDR',
			'Weapons/P90/P90',
			'Weapons/P90/P90_GM',
			'MP7',
			'Weapons/XP2_MP5K/MP5K',
		),
		'Rocket Launchers' => array(
			'RPG-7',
			'SMAW',
			'FGM-148',
			'FIM92',
			'Weapons/Sa18IGLA/Sa18IGLA',
		),
		'Equipment' => array(
			'Weapons/Gadgets/C4/C4',
			'Weapons/Gadgets/Claymore/Claymore',
			'M15 AT Mine',
			'Repair Tool',
			'Defib',
			'M26Mass',
			'M320',
			'Weapons/Knife/Knife',
			'Knife_RazorBlade',
			'M67',
			'Medkit',
		),
		'Misshaps' => array(
			'SoldierCollision',
			'Suicide',
			'Melee',
			'Death',
			'RoadKill',
		),
	),

	/**
	 * Team names
	 */
	'teams' => array(
		'1' => 'US Marines',
		'2' => 'RU Army',
		'-1' => 'Spectators'
	),
);
