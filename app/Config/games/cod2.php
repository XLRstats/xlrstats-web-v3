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
	'gameName' => 'Call of Duty 2',

	/**
	 * Team names
	 */
	'teams' => array(
		'2' => 'Axis',		// Red team
		'3' => 'Allies',	// Blue team
		'-1' => 'Spectators'
	),


	'maps' => array(
		//Map Image Path
		'image_path' => 'http://www.xlrstats.com/xlrstats-images/v3.app.img/maps/cod2/middle/',

		//*********************
		// Map names
		//*********************
		// Stock CoD
		'mp_bocage' => array('Bocage', 'description', 'mp_bocage.jpg'),
		'mp_brecourt' => array('Brecourt', 'description', 'mp_brecourt.jpg'),
		'mp_carentan' => array('Carentan', 'description', 'mp_carentan.jpg'),
		'mp_chateau' => array('Chateau', 'description', 'mp_chateau.jpg'),
		'mp_dawnville' => array('Dawnville', 'description', 'mp_dawnville.jpg'),
		'mp_depot' => array('Depot', 'description', 'mp_depot.jpg'),
		'mp_harbor' => array('Harbor', 'description', 'mp_harbor.jpg'),
		'mp_hurtgen' => array('Hurtgen', 'description', 'mp_hurtgen.jpg'),
		'mp_neuville' => array('Neuville', 'description', 'mp_neuville.jpg'),
		'mp_pavlov' => array('Pavlov', 'description', 'mp_pavlov.jpg'),
		'mp_powcamp' => array('POW Camp', 'description', 'mp_powcamp.jpg'),
		'mp_railyard' => array('Railyard', 'description', 'mp_railyard.jpg'),
		'mp_rocket' => array('Rocket', 'description', 'mp_rocket.jpg'),
		'mp_ship' => array('Ship', 'description', 'mp_ship.jpg'),
		'mp_stalingrad' => array('Stalingrad', 'description', 'mp_stalingrad.jpg'),

		//Stock UO
		'mp_uo_stanjel' => array('Stanjel (UO)', 'description', 'mp_uo_stanjel.jpg'),
		'mp_arnhem' => array('Arnhem', 'description', 'mp_arnhem.jpg'),
		'mp_berlin' => array('Berlin', 'description', 'mp_berlin.jpg'),
		'mp_italy' => array('Italy', 'description', 'mp_italy.jpg'),
		'mp_sicily' => array('Sicily', 'description', 'mp_sicily.jpg'),
		'mp_kharkov' => array('Kharkov', 'description', 'mp_kharkov.jpg'),
		'mp_kursk' => array('Kursk', 'description', 'mp_kursk.jpg'),
		'mp_rhinevalley' => array('Rhine Valley', 'description', 'mp_rhinevalley.jpg'),
		'mp_ponyri' => array('Ponyri', 'description', 'mp_ponyri.jpg'),
		'mp_foy' => array('Foy', 'description', 'mp_foy.jpg'),
		'mp_cassino' => array('Monte Cassino', 'description', 'mp_cassino.jpg'),

		//Custom CoD
		'nuenen' => array('Nuenen', 'description', 'nuenen.jpg'),
		'mp_stanjel' => array('Stanjel', 'description', 'mp_stanjel.jpg'),
		'mp_maaloy_final' => array('Maaloy (final)', 'description', 'mp_maaloy_final.jpg'),
		'mp_omahabeach' => array('Omaha Beach', 'description', 'mp_omahabeach.jpg'),
		'univermag' => array('Univermag', 'description', 'univermag.jpg'),
		'mp_falaisevilla' => array('Falaise Villa', 'description', 'mp_falaisevilla.jpg'),
		'mp_viervilleN' => array('Vierville (N)', 'description', 'mp_viervilleN.jpg'),
		'mp_amberville' => array('Amberville', 'description', 'mp_amberville.jpg'),
		'german_town' => array('German Town', 'description', 'german_town.jpg'),
		'mp_tigertown' => array('Tiger Town', 'description', 'mp_tigertown.jpg'),
		'mp_abbey' => array('Abbey', 'description', 'mp_abbey.jpg'),
		'mp_jailbreak' => array('Jailbreak', 'description', 'mp_jailbreak.jpg'),
		'mp_stcomedumont' => array('St Come du Mont', 'description', 'mp_stcomedumont.jpg'),

		'unknown' => array('Custom Map', 'description', 'unknown.jpg'),
		'None' => array('-Unknown-', 'description', 'None.jpg'),
	),

	'weapons' => array(
		//Weapon Image Path
		'image_path' => 'http://www.xlrstats.com/xlrstats-images/v3.app.img/weapons/cod2/small/',

		//*********************
		// Weapons names
		//*********************
		//Stock CoD
		'bar_mp' => array('BAR', 'description', 'bar_mp.png'),
		'bar_slow_mp' => array('BAR (Slow)', 'description', 'bar_slow_mp.png'),
		'bren_mp' => array('Bren', 'description', 'bren_mp.png'),
		'colt_mp' => array('Colt', 'description', 'colt_mp.png'),
		'enfield_mp' => array('Enfield', 'description', 'enfield_mp.png'),
		'kar98k_mp' => array('Kar98k', 'description', 'kar98k_mp.png'),
		'kar98k_sniper_mp' => array('Kar98k (Sniper)', 'description', 'kar98k_sniper_mp.png'),
		'fg42_mp' => array('FG 42', 'description', 'fg42_mp.png'),
		'fg42_semi_mp' => array('FG 42 (Semi)', 'description', 'fg42_semi_mp.png'),
		'fraggrenade_mp' => array('Grenade (US)', 'description', 'fraggrenade_mp.png'),
		'grenade_mp' => array('Grenade', 'description', 'grenade_mp.png'),
		'luger_mp' => array('Luger', 'description', 'luger_mp.png'),
		'm1carbine_mp' => array('M1 Carbine', 'description', 'm1carbine_mp.png'),
		'm1garand_mp' => array('M1 Garand', 'description', 'm1garand_mp.png'),
		'mg42_bipod_mp' => array('MG-42', 'description', 'mg42_bipod_mp.png'),
		'mg42_bipod_stand_mp' => array('MG-42 (Stand)', 'description', 'mg42_bipod_stand_mp.png'),
		'mg42_bipod_prone_mp' => array('MG-42 (Prone)', 'description', 'mg42_bipod_prone_mp.png'),
		'mk1britishfrag_mp' => array('Grenade (British)', 'description', 'mk1britishfrag_mp.png'),
		'mod_explosive' => array('Explosion', 'description', 'mod_explosive.png'),
		'mod_falling' => array('Gravity', 'description', 'mod_falling.png'),
		'mod_melee' => array('Bash', 'description', 'mod_melee.png'),
		'mod_projectile' => array('Projectile', 'description', 'mod_projectile.png'),
		'mod_suicide' => array('Suicide', 'description', 'mod_suicide.png'),
		'mosin_nagant_mp' => array('Nagant', 'description', 'mosin_nagant_mp.png'),
		'mosin_nagant_sniper_mp' => array('Nagant (Sniper)', 'description', 'mosin_nagant_sniper_mp.png'),
		'mp40_mp' => array('MP-40', 'description', 'mp40_mp.png'),
		'mp44_mp' => array('MP-44', 'description', 'mp44_mp.png'),
		'mp44_semi_mp' => array('MP-44 (Semi)', 'description', 'mp44_semi_mp.png'),
		'panzerfaust_mp' => array('Panzerfaust', 'description', 'panzerfaust_mp.png'),
		'ppsh_mp' => array('PPSH', 'description', 'ppsh_mp.png'),
		'ppsh_semi_mp' => array('PPSH (Semi)', 'description', 'ppsh_semi_mp.png'),
		'rgd-33russianfrag_mp' => array('Grenade (Russian)', 'description', 'rgd.png'),
		'springfield_mp' => array('Springfield', 'description', 'springfield_mp.png'),
		'sten_mp' => array('Sten', 'description', 'sten_mp.png'),
		'stielhandgranate_mp' => array('Grenade (German)', 'description', 'stielhandgranate_mp.png'),
		'thompson_mp' => array('Thompson', 'description', 'thompson_mp.png'),
		'thompson_semi_mp' => array('Thompson (Semi)', 'description', 'thompson_semi_mp.png'),

		//Stock UO
		'gewehr43_mp' => array('Gewehr 43', 'description', 'gewehr43_mp.png'),
		'g43_mp' => array('Gewehr 43', 'description', 'g43_mp.png'),
		'SVT40_mp' => array('Tokarev SVT-40', 'description', 'SVT40_mp.png'),
		'panzeriv_turret_mp' => array('Panzer IV turret', 'description', 'panzeriv_turret_mp.png'),
		't34_turret_mp' => array('T34 turret', 'description', 't34_turret_mp.png'),
		'sherman_turret_mp' => array('Sherman turret', 'description', 'sherman_turret_mp.png'),
		'flak88_turret_mp' => array('Flak-88', 'description', 'flak88_turret_mp.png'),
		'mg42_turret_mp' => array('MG-42 (turret)', 'description', 'mg42_turret_mp.png'),
		'mg30cal_mp' => array('MG 30-cal.', 'description', 'mg30cal_mp.png'),
		'mg34_mp' => array('Machinegewehr 34 (MG-34)', 'description', 'mg34_mp.png'),
		'mg34_tank_mp' => array('MG-34 (tank)', 'description', 'mg34_tank_mp.png'),
		'sg43_tank_mp' => array('SG-43 MG (tank)', 'description', 'sg43_tank_mp.png'),
		'50cal_tank_mp' => array('50-cal. (tank)', 'description', '50cal_tank_mp.png'),
		'su152_turret_mp' => array('SU-152 (turret)', 'description', 'su152_turret_mp.png'),
		'elefant_turret_mp' => array('Elefant (turret)', 'description', 'elefant_turret_mp.png'),
		'sg43_turret_mp' => array('SG-43 (turret)', 'description', 'sg43_turret_mp.png'),
		'flamethrower_mp' => array('Flammenwerfer 35 (Flamethrower)', 'description', 'flamethrower_mp.png'),
		'bazooka_mp' => array('M1A1 Bazooka', 'description', 'bazooka_mp.png'),
		'panzerschreck_mp' => array('Panzerschreck', 'description', 'panzerschreck_mp.png'),
		'satchelcharge_mp' => array('Satchel Charge', 'description', 'satchelcharge_mp.png'),
		'webley_mp' => array('Webley Mk-4', 'description', 'webley_mp.png'),
		'30cal_tank_mp' => array('30-cal. (tank)', 'description', '30cal_tank_mp.png'),
		'dp28_mp' => array('Degtyarev-Pekhotny 28 (DP-28)', 'description', 'dp28_mp.png'),
		'tt33_mp' => array('Tokarev TT-33', 'description', 'tt33_mp.png'),
		'binoculars_artillery_mp' => array('Pinpointing Artillery Support', 'description', 'binoculars_artillery_mp.png'),

		//AWE weapons
		'sten_silenced_mp' => array('Silenced Sten', 'description', 'sten_silenced_mp.png'),
		'cook2_frag_grenade_german_mp' => array('Grenade (German)', 'description', 'frag_grenade_german_mp.png'),
		'cook2_frag_grenade_british_mp' => array('Grenade (British)', 'description', 'frag_grenade_british_mp.png'),
		'cook2_frag_grenade_american_mp' => array('Grenade (American)', 'description', 'frag_grenade_american_mp.png'),
		'cook2_frag_grenade_russian_mp' => array('Grenade (Russian)', 'description', 'frag_grenade_russian_mp.png'),

		//No weapon?
		'none' => array('Bad luck...', 'description', 'image.png'),
	),

	/**
	 * Personal Achievements, pins, ribbons, medals
	 */
	'achievements' => array(
		'Rifle' => array(
			'enfield_mp',
			'kar98k_mp',
			'm1carbine_mp',
			'm1garand_mp',
			'mosin_nagant_mp',
			'springfield_mp',
			'gewehr43_mp',
			'g43_mp',
			'SVT40_mp',
		),
		'Heavy Gunner' => array(
			'bar_mp',
			'bar_slow_mp',
			'bren_mp',
			'mg42_bipod_mp',
			'mg42_bipod_stand_mp',
			'mg42_bipod_prone_mp',
			'mk1britishfrag_mp',
			'panzeriv_turret_mp',
			't34_turret_mp',
			'sherman_turret_mp',
			'flak88_turret_mp',
			'mg42_turret_mp',
			'mg30cal_mp',
			'mg34_mp',
			'mg34_tank_mp',
			'sg43_tank_mp',
			'50cal_tank_mp',
			'su152_turret_mp',
			'elefant_turret_mp',
			'sg43_turret_mp',
			'panzerschreck_mp',
			'satchelcharge_mp',
		),
		'Sniper' => array(
			'kar98k_sniper_mp',
			'fg42_mp',
			'fg42_semi_mp',
			'mosin_nagant_sniper_mp',
			'springfield_mp',
		),
	),



	'events' => array(

		//*********************
		// Event names
		//*********************
		'bomb_plant' => array('Bomb Plant', 'description', 'image.png'),
		'bomb_defuse' => array('Bomb Defuse', 'description', 'image.png'),
		're_pickup' => array('Pickup', 'description', 'image.png'),
		're_capture' => array('Capture', 'description', 'image.png'),
		're_drop' => array('Drop', 'description', 'image.png'),
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
		'neck' => array('neck' => 'Neck'),
		'torso_lower' => array('torso_lower' => 'Lower torso'),
		'torso_upper' => array('torso_upper' => 'Upper torso'),
		'left_arm_upper' => array('left_arm_upper' => 'Upper left arm'),
		'left_arm_lower' => array('left_arm_lower' => 'Lower left arm'),
		'left_hand' => array('left_hand' => 'Left hand'),
		'right_arm_upper' => array('right_arm_upper' => 'Upper right arm'),
		'right_arm_lower' => array('right_arm_lower' => 'Lower right arm'),
		'right_hand' => array('right_hand' => 'Right hand'),
		'left_leg_upper' => array('left_leg_upper' => 'Upper left leg'),
		'left_leg_lower' => array('left_leg_lower' => 'Lower left leg'),
		'left_foot' => array('left_foot' => 'Left foot'),
		'right_leg_upper' => array('right_leg_upper' => 'Upper right leg'),
		'right_leg_lower' => array('right_leg_lower' => 'Lower right leg'),
		'right_foot' => array('right_foot' => 'Right foot'),
		'none' => array('none' => 'Total disruption'),
	),

);
