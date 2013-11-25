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
	'gameName' => 'Call of Duty: World at War',
);
/*
//*********************
// These are the standard cod:waw settings
//*********************

// Team names and colors
function getTeamName($gamename) {
  $x_t[-1] = 'Spectators';
  $x_t[1] = 'Spectators';
  $x_t[2] = 'Marine Raiders / Red Army';
  $x_t[3] = 'Wehrmacht / Imperial Army';

  return $x_t;
}

//*********************
// Weapons names
//*********************
//Stock CoDWaW

function getWeaponName() {
  $x_w['30cal_bipod_crouch_mp'] = t('M1919A6 Bipod (Crouch)');
  $x_w['30cal_bipod_mp'] = t('Browning M1919A6 Bipod');
  $x_w['30cal_bipod_prone_mp'] = t('Browning M1919A6 Bipod (Prone)');
  $x_w['30cal_bipod_stand_mp'] = t('Browning M1919A6 Bipod (Stand)');
  $x_w['30cal_mp'] = t('Browning M1919A6');
  $x_w['357magnum_mp'] = t('.357 Magnum Revolver');
  $x_w['artillery_mp'] = t('Artillery');
  $x_w['bar_bipod_crouch_mp'] = t('B.A.R. Bipod (Crouch)');
  $x_w['bar_bipod_mp'] = t('B.A.R. Bipod');
  $x_w['bar_bipod_prone_mp'] = t('B.A.R. Bipod (Prone)');
  $x_w['bar_bipod_stand_mp'] = t('B.A.R. Bipod (Stand)');
  $x_w['bar_mp'] = t('B.A.R.');
  $x_w['bazooka_mp'] = t('M9A1 Bazooka');
  $x_w['briefcase_bomb_defuse_mp'] = t('Bomb Defuse');
  $x_w['briefcase_bomb_mp'] = t('Bomb Explosion');
  $x_w['colt_mp'] = t('Colt M1911');
  $x_w['defaultweapon_mp'] = t('Default Weapon');
  $x_w['dogs_mp'] = t('Dogs');
  $x_w['dog_bite_mp'] = t('Dog Bite');
  $x_w['doublebarreledshotgun_grip_mp'] = t('Double-Barreled Shotgun Grip');
  $x_w['doublebarreledshotgun_mp'] = t('Double-Barreled Shotgun');
  $x_w['doublebarreledshotgun_sawoff_mp'] = t('Double-Barreled Shotgun Sawoff');
  $x_w['dp28_bipod_crouch_mp'] = t('DP-28 Bipod (Crouch)');
  $x_w['dp28_bipod_mp'] = t('DP-28 Bipod');
  $x_w['dp28_bipod_prone_mp'] = t('DP-28 Bipod (Prone)');
  $x_w['dp28_bipod_stand_mp'] = t('DP-28 Bipod (Stand)');
  $x_w['dp28_mp'] = t('DP-28');
  $x_w['fg42_bipod_crouch_mp'] = t('FG42 Bipod (Crouch)');
  $x_w['fg42_bipod_mp'] = t('FG42 Bipod');
  $x_w['fg42_bipod_prone_mp'] = t('FG42 Bipod (Prone)');
  $x_w['fg42_bipod_stand_mp'] = t('FG42 Bipod (Stand)');
  $x_w['fg42_mp'] = t('FG42');
  $x_w['fg42_telescopic_mp'] = t('FG42 Telescopic Sight');
  $x_w['frag_grenade_mp'] = t('Frag Grenade');
  $x_w['frag_grenade_short_mp'] = t('Martyrdom');
  $x_w['gewehr43_aperture_mp'] = t('Gewehr 43 Aperture Sight');
  $x_w['gewehr43_gl_mp'] = t('Gewehr 43 Grenade Launcher');
  $x_w['gewehr43_mp'] = t('Gewehr 43');
  $x_w['gewehr43_silenced_mp'] = t('Gewehr 43 Suppressor');
  $x_w['gewehr43_telescopic_mp'] = t('Gewehr 43 Telescopic Sight');
  $x_w['kar98k_bayonet_mp'] = t('Kar98k Bayonet');
  $x_w['kar98k_gl_mp'] = t('Kar98k Grenade Launcher');
  $x_w['kar98k_mp'] = t('Kar98k');
  $x_w['kar98k_scoped_mp'] = t('Kar98k Sniper Scope');
  $x_w['m1carbine_aperture_mp'] = t('M1A1 Carbine Aperture Sight');
  $x_w['m1carbine_bayonet_mp'] = t('M1A1 Carbine Bayonet');
  $x_w['m1carbine_bigammo_mp'] = t('M1A1 Carbine Box Magazine');
  $x_w['m1carbine_flash_mp'] = t('M1A1 Carbine Flash Hider');
  $x_w['m1carbine_mp'] = t('M1A1 Carbine');
  $x_w['m1garand_bayonet_mp'] = t('M1 Garand Bayonet');
  $x_w['m1garand_flash_mp'] = t('M1 Garand Flash Hider');
  $x_w['m1garand_gl_mp'] = t('M1 Garand Grenade Launcher');
  $x_w['m1garand_mp'] = t('M1 Garand');
  $x_w['m1garand_scoped_mp'] = t('M1 Garand Sniper Scope');
  $x_w['m2_flamethrower_mp'] = t('M2 Flamethrower');
  $x_w['m8_white_smoke_mp'] = t('M8 White Smoke');
  $x_w['mg42_bipod_crouch_mp'] = t('MG42 Bipod (Crouch)');
  $x_w['mg42_bipod_mp'] = t('MG42 Bipod');
  $x_w['mg42_bipod_prone_mp'] = t('MG42 Bipod (Prone)');
  $x_w['mg42_bipod_stand_mp'] = t('MG42 Bipod (Stand)');
  $x_w['mg42_mp'] = t('MG42');
  $x_w['mine_bouncing_betty_mp'] = t('Bouncing Betty');
  $x_w['molotov_mp'] = t('Molotov Cocktail');
  $x_w['mosinrifle_bayonet_mp'] = t('Mosin Nagant Bayonet');
  $x_w['mosinrifle_gl_mp'] = t('Mosin Nagant Grenade Launcher');
  $x_w['mosinrifle_mp'] = t('Mosin Nagant');
  $x_w['mosinrifle_scoped_mp'] = t('Mosin Nagant Sniper Scope');
  $x_w['mp40_aperture_mp'] = t('MP40 Aperture Sight');
  $x_w['mp40_bigammo_mp'] = t('MP40 Dual Magazines');
  $x_w['mp40_mp'] = t('MP40');
  $x_w['mp40_silenced_mp'] = t('MP40 Suppressor');
  $x_w['nambu_mp'] = t('Nambu');
  $x_w['napalmblob_mp'] = t('Molotov Cocktail');
  $x_w['panzer4_gunner_front_mp'] = t('Panzer IV Frontgunner');
  $x_w['panzer4_gunner_mp'] = t('Panzer IV Gunner');
  $x_w['panzer4_mp_explosion_mp'] = t('Panzer IV Explosion');
  $x_w['panzer4_turret_mp'] = t('Panzer IV Turret');
  $x_w['panzershrek_mp'] = t('Panzerschreck');
  $x_w['ppsh_aperture_mp'] = t('PPSh-41 Aperture Sight');
  $x_w['ppsh_bigammo_mp'] = t('PPSh-41 Round Drum');
  $x_w['ppsh_mp'] = t('PPSh-41');
  $x_w['ptrs41_mp'] = t('PTRS-41');
  $x_w['radar_mp'] = t('Recon Plane');
  $x_w['satchel_charge_mp'] = t('Satchel Charge');
  $x_w['shotgun_bayonet_mp'] = t('M1897 Trenchgun Bayonet');
  $x_w['shotgun_grip_mp'] = t('M1897 Trenchgun Grip');
  $x_w['shotgun_mp'] = t('M1897 Trenchgun');
  $x_w['signal_flare_mp'] = t('Signal Flare');
  $x_w['springfield_bayonet_mp'] = t('Springfield Bayonet');
  $x_w['springfield_gl_mp'] = t('Springfield Grenade Launcher');
  $x_w['springfield_mp'] = t('Springfield');
  $x_w['springfield_scoped_mp'] = t('Springfield Sniper Scope');
  $x_w['stg44_aperture_mp'] = t('StG44 Aperture Sight');
  $x_w['stg44_flash_mp'] = t('StG44 Flash Hider');
  $x_w['stg44_mp'] = t('StG44');
  $x_w['stg44_telescopic_mp'] = t('StG44 Telescopic Sight');
  $x_w['sticky_grenade_mp'] = t('N 74 ST Grenade');
  $x_w['svt40_aperture_mp'] = t('SVT-40 Aperture Sight');
  $x_w['svt40_flash_mp'] = t('SVT-40 Flash Hider');
  $x_w['svt40_mp'] = t('SVT-40');
  $x_w['svt40_telescopic_mp'] = t('SVT-40 Telescopic Sight');
  $x_w['t34_gunner_front_mp'] = t('T-34 Front Gunner');
  $x_w['t34_gunner_mp'] = t('T-34 Gunner');
  $x_w['t34_mp_explosion_mp'] = t('T-34 Explosion');
  $x_w['t34_turret_mp'] = t('T-34 Turret');
  $x_w['tabun_gas_mp'] = t('Tabun Gas');
  $x_w['thompson_aperture_mp'] = t('Thompson Aperture Sight');
  $x_w['thompson_bigammo_mp'] = t('Thompson Round Drum');
  $x_w['thompson_mp'] = t('Thompson');
  $x_w['thompson_silenced_mp'] = t('Thompson Suppressor');
  $x_w['tokarev_mp'] = t('Tokarev TT-33');
  $x_w['type100smg_aperture_mp'] = t('Type 100 Aperture Sight');
  $x_w['type100smg_bigammo_mp'] = t('Type 100 Box Magazine');
  $x_w['type100smg_mp'] = t('Type 100');
  $x_w['type100smg_silenced_mp'] = t('Type 100 Suppressor');
  $x_w['type99lmg_bayonet_mp'] = t('Type 99 Bayonet');
  $x_w['type99lmg_bipod_mp'] = t('Type 99 Bipod');
  $x_w['type99lmg_mp'] = t('Type 99');
  $x_w['type99rifle_bayonet_mp'] = t('Arisaka Bayonet');
  $x_w['type99rifle_gl_mp'] = t('Arisaka Grenade Launcher');
  $x_w['type99rifle_mp'] = t('Arisaka');
  $x_w['type99rifle_scoped_mp'] = t('Arisaka Sniper Scope');
  $x_w['type99_lmg_bipod_crouch_mp'] = t('Type 99 Bipod (Crouch)');
  $x_w['type99_lmg_bipod_prone_mp'] = t('Type 99 Bipod (Prone)');
  $x_w['type99_lmg_bipod_stand_mp'] = t('Type 99 Bipod (Stand)');
  $x_w['walther_mp'] = t('Walther P38');
  $x_w['mod_melee'] = t('Knife');
  $x_w['mod_falling'] = t('Falling');

  //No weapon?
  $x_w['none'] = t('Bad luck...');

  //These are not in iw_14.iwd, I'm not very sure about them
  $x_w['explodable_barrel'] = t('Barrel Explosion');
  $x_w['destructible_car'] = t('Vehicle Explosion');

  return $x_w;
}

//*********************
// Map names
//*********************

function getMapName() {
  // Stock CoDWaW
  $x_m['mp_airfield'] = t('Airfield');
  $x_m['mp_asylum'] = t('Asylum');
  $x_m['mp_castle'] = t('Castle');
  $x_m['mp_courtyard'] = t('Courtyard');
  $x_m['mp_dome'] = t('Dome');
  $x_m['mp_downfall'] = t('Downfall');
  $x_m['mp_hangar'] = t('Hangar');
  $x_m['mp_makin'] = t('Makin');
  $x_m['mp_outskirts'] = t('Outskirts');
  $x_m['mp_roundhouse'] = t('Roundhouse');
  $x_m['mp_seelow'] = t('Seelow');
  $x_m['mp_shrine'] = t('Cliffside');
  $x_m['mp_suburban'] = t('Upheaval');
  $x_m['mp_makin_day'] = t('Makin Day');
  $x_m['mp_subway'] = t('Station');
  $x_m['mp_nachtfeuer'] = t('Nightfire');
  $x_m['mp_kneedeep'] = t('Knee Deep');
  $x_m['mp_kwai'] = t('Banzai');
  $x_m['mp_stalingrad'] = t('Corrosion');
  $x_m['mp_docks'] = t('Sub Pens');
  $x_m['mp_drum'] = t('Battery');
  $x_m['mp_bgate'] = t('Breach');
  $x_m['mp_vodka'] = t('Revolution');

  // Custom Maps CoDWaW

  return $x_m;
}

//*********************
// Event names
//*********************
function getEventName() {
  $x_e['bomb_plant'] = t('Bomb Plant');
  $x_e['bomb_defuse'] = t('Bomb Defuse');
  $x_e['re_pickup'] = t('Pickup');
  $x_e['re_capture'] = t('Capture');
  $x_e['re_drop'] = t('Drop');

  return $x_m;
}

//*********************
// Bodypart names
//*********************
function getBodypartName() {
  $x_b['head'] = t('head');
  $x_b['neck'] = t('neck');
  $x_b['torso_lower'] = t('torso_lower');
  $x_b['torso_upper'] = t('torso_upper');
  $x_b['left_arm_upper'] = t('left_arm_upper');
  $x_b['left_arm_lower'] = t('left_arm_lower');
  $x_b['left_hand'] = t('left_hand');
  $x_b['right_arm_upper'] = t('right_arm_upper');
  $x_b['right_arm_lower'] = t('right_arm_lower');
  $x_b['right_hand'] = t('right_hand');
  $x_b['left_leg_upper'] = t('left_leg_upper');
  $x_b['left_leg_lower'] = t('left_leg_lower');
  $x_b['left_foot'] = t('left_foot');
  $x_b['right_leg_upper'] = t('right_leg_upper');
  $x_b['right_leg_lower'] = t('right_leg_lower');
  $x_b['right_foot'] = t('right_foot');
  $x_b['none'] = t('totaldisrupt');

  return $x_b;
}
*/