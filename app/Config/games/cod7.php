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
 * @package       app.
 * @since         XLRstats v3.0
 * @version       0.1
 */
$config = array(
	'gameName' => 'Call of Duty: Black Ops',

/**
 * Team names
 */
	'teams' => array(
		'2' => 'Tropas / Speznas',   // Red team
		'3' => 'OP 40 / Black Ops',  // Blue team
		'-1' => 'Spectators'
	),


//*********************
// Map names
//*********************
	'maps' => array(
		//Map Image Path
		'image_path' => '',

		'mp_array' => array('Array', 'description', 'image.png'),
		'mp_cracked' => array('Cracked', 'description', 'image.png'),
		'mp_crisis' => array('Crisis', 'description', 'image.png'),
		'mp_firingrange' => array('Firing Range', 'description', 'image.png'),
		'mp_duga' => array('Grid', 'description', 'image.png'),
		'mp_hanoi' => array('Hanoi', 'description', 'image.png'),
		'mp_cairo' => array('Havana', 'description', 'image.png'),
		'mp_havoc' => array('Jungle', 'description', 'image.png'),
		'mp_cosmodrome' => array('Launch', 'description', 'image.png'),
		'mp_nuked' => array('Nuketown', 'description', 'image.png'),
		'mp_radiation' => array('Radiation', 'description', 'image.png'),
		'mp_mountain' => array('Summit', 'description', 'image.png'),
		'mp_villa' => array('Villa', 'description', 'image.png'),
		'mp_russianbase' => array('WMD', 'description', 'image.png'),
		'mp_stadium' => array('Stadium', 'description', 'image.png'),
		'mp_kowloon' => array('Kowloon', 'description', 'image.png'),
		'mp_discovery' => array('Discovery', 'description', 'image.png'),
		'mp_berlinwall2' => array('Berlin Wall', 'description', 'image.png'),
		'mp_gridlock' => array('Convoy', 'description', 'image.png'),
		'mp_hotel' => array('Hotel', 'description', 'image.png'),
		'mp_outskirts' => array('Stockpile', 'description', 'image.png'),
		'mp_zoo' => array('Zoo', 'description', 'image.png'),
	),
//*********************
// Weapons names
//*********************
	'weapons' => array(
		//*********************
		//Sub Machine Guns
		//*********************

		//MP5K
		'mp5k_mp' => array('MP5K', 'description', 'image.png'),
		'mp5k_acog_mp' => array('MP5K ACOG Sight', 'description', 'image.png'),
		'mp5k_acog_dualclip_mp' => array('MP5K ACOG Sight & Dual Mag', 'description', 'image.png'),
		'mp5k_acog_extclip_mp' => array('MP5K ACOG Sight & Extended Mag', 'description', 'image.png'),
		'mp5k_acog_grip_mp' => array('MP5K ACOG Sight & Grip', 'description', 'image.png'),
		'mp5k_acog_rf_mp' => array('MP5K ACOG Sight & Rapid Fire', 'description', 'image.png'),
		'mp5k_acog_silencer_mp' => array('MP5K ACOG Sight & Suppressor', 'description', 'image.png'),
		'mp5k_dualclip_mp' => array('MP5K Dual Mag', 'description', 'image.png'),
		'mp5k_dualclip_silencer_mp' => array('MP5K Dual Mag & Suppressor', 'description', 'image.png'),
		'mp5k_elbit_mp' => array('MP5K Red Dot Sight', 'description', 'image.png'),
		'mp5k_elbit_dualclip_mp' => array('MP5K Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'mp5k_elbit_extclip_mp' => array('MP5K Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'mp5k_elbit_grip_mp' => array('MP5K Red Dot Sight & Grip', 'description', 'image.png'),
		'mp5k_elbit_rf_mp' => array('MP5K Red Dot Sight & Rapid Fire', 'description', 'image.png'),
		'mp5k_elbit_silencer_mp' => array('MP5K Red Dot Sight & Suppressor', 'description', 'image.png'),
		'mp5k_extclip_mp' => array('MP5K Extended Mag', 'description', 'image.png'),
		'mp5k_extclip_silencer_mp' => array('MP5K Extended Mag & Suppressor', 'description', 'image.png'),
		'mp5k_grip_mp' => array('MP5K Grip', 'description', 'image.png'),
		'mp5k_grip_rf_mp' => array('MP5K Grip & Rapid Fire', 'description', 'image.png'),
		'mp5k_grip_dualclip_mp' => array('MP5K Grip & Dual Mag', 'description', 'image.png'),
		'mp5k_grip_extclip_mp' => array('MP5K Grip & Extended Mag', 'description', 'image.png'),
		'mp5k_grip_silencer_mp' => array('MP5K Grip & Suppressor', 'description', 'image.png'),
		'mp5k_reflex_mp' => array('MP5K Reflex Sight', 'description', 'image.png'),
		'mp5k_reflex_extclip_mp' => array('MP5K Reflex Sight & Extended Mag', 'description', 'image.png'),
		'mp5k_reflex_grip_mp' => array('MP5K Reflex Sight & Grip', 'description', 'image.png'),
		'mp5k_reflex_rf_mp' => array('MP5K Reflex Sight & Rapid Fire', 'description', 'image.png'),
		'mp5k_reflex_silencer_mp' => array('MP5K Reflex Sight & Suppressor', 'description', 'image.png'),
		'mp5k_rf_mp' => array('MP5K Rapid Fire', 'description', 'image.png'),
		'mp5k_rf_silencer_mp' => array('MP5K Rapid Fire & Suppressor', 'description', 'image.png'),
		'mp5k_silencer_mp' => array('MP5K Suppressor', 'description', 'image.png'),
		'mp5kdw_mp' => array('MP5K Dual Wield', 'description', 'image.png'),

		//SKORPION
		'skorpion_mp' => array('Skorpion', 'description', 'image.png'),
		'skorpion_acog_mp' => array('Skorpion ACOG Sight', 'description', 'image.png'),
		'skorpion_acog_dualclip_mp' => array('Skorpion ACOG Sight & Dual Mag', 'description', 'image.png'),
		'skorpion_acog_grip_mp' => array('Skorpion ACOG Sight & Grip', 'description', 'image.png'),
		'skorpion_acog_rf_mp' => array('Skorpion ACOG Sight & Rapid Fire', 'description', 'image.png'),
		'skorpion_acog_silencer_mp' => array('Skorpion ACOG Sight & Suppressor', 'description', 'image.png'),
		'skorpion_dualclip_mp' => array('Skorpion Dual Mag', 'description', 'image.png'),
		'skorpion_dualclip_silencer_mp' => array('Skorpion Dual Mag & Suppressor', 'description', 'image.png'),
		'skorpion_elbit_mp' => array('Skorpion Red Dot Sight', 'description', 'image.png'),
		'skorpion_elbit_dualclip_mp' => array('Skorpion Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'skorpion_elbit_extclip_mp' => array('Skorpion Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'skorpion_elbit_grip_mp' => array('Skorpion Red Dot Sight & Grip', 'description', 'image.png'),
		'skorpion_elbit_rf_mp' => array('Skorpion Red Dot Sight & Rapid Fire', 'description', 'image.png'),
		'skorpion_elbit_silencer_mp' => array('Skorpion Red Dot Sight & Suppressor', 'description', 'image.png'),
		'skorpion_extclip_mp' => array('Skorpion Extended Mag', 'description', 'image.png'),
		'skorpion_extclip_silencer_mp' => array('Skorpion Extended Mag & Suppressor', 'description', 'image.png'),
		'skorpion_grip_mp' => array('Skorpion Grip', 'description', 'image.png'),
		'skorpion_grip_rf_mp' => array('Skorpion Grip & Rapid Fire', 'description', 'image.png'),
		'skorpion_grip_dualclip_mp' => array('Skorpion Grip & Dual Mag', 'description', 'image.png'),
		'skorpion_grip_extclip_mp' => array('Skorpion Grip & Extended Mag', 'description', 'image.png'),
		'skorpion_grip_silencer_mp' => array('Skorpion Grip & Suppressor', 'description', 'image.png'),
		'skorpion_reflex_mp' => array('Skorpion Reflex Sight', 'description', 'image.png'),
		'skorpion_reflex_extclip_mp' => array('Skorpion Reflex Sight & Extended Mag', 'description', 'image.png'),
		'skorpion_reflex_grip_mp' => array('Skorpion Reflex Sight & Grip', 'description', 'image.png'),
		'skorpion_reflex_rf_mp' => array('Skorpion Reflex Sight & Rapid Fire', 'description', 'image.png'),
		'skorpion_reflex_silencer_mp' => array('Skorpion Reflex Sight & Suppressor', 'description', 'image.png'),
		'skorpion_rf_mp' => array('Skorpion Rapid Fire', 'description', 'image.png'),
		'skorpion_rf_silencer_mp' => array('Skorpion Rapid Fire & Suppressor', 'description', 'image.png'),
		'skorpion_silencer_mp' => array('Skorpion Suppressor', 'description', 'image.png'),
		'skorpiondw_mp' => array('Skorpion Dual Wield', 'description', 'image.png'),

		//MAC11
		'mac11_mp' => array('MAC11', 'description', 'image.png'),
		'mac11_acog_mp' => array('MAC11 ACOG Sight', 'description', 'image.png'),
		'mac11_acog_dualclip_mp' => array('MAC11 ACOG Sight & Dual Mag', 'description', 'image.png'),
		'mac11_acog_grip_mp' => array('MAC11 ACOG Sight & Grip', 'description', 'image.png'),
		'mac11_acog_rf_mp' => array('MAC11 ACOG Sight & Rapid Fire', 'description', 'image.png'),
		'mac11_acog_silencer_mp' => array('MAC11 ACOG Sight & Suppressor', 'description', 'image.png'),
		'mac11_dualclip_mp' => array('MAC11 Dual Mag', 'description', 'image.png'),
		'mac11_dualclip_silencer_mp' => array('MAC11 Dual Mag & Suppressor', 'description', 'image.png'),
		'mac11_elbit_mp' => array('MAC11 Red Dot Sight', 'description', 'image.png'),
		'mac11_elbit_dualclip_mp' => array('MAC11 Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'mac11_elbit_extclip_mp' => array('MAC11 Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'mac11_elbit_grip_mp' => array('MAC11 Red Dot Sight & Grip', 'description', 'image.png'),
		'mac11_elbit_rf_mp' => array('MAC11 Red Dot Sight & Rapid Fire', 'description', 'image.png'),
		'mac11_elbit_silencer_mp' => array('MAC11 Red Dot Sight & Suppressor', 'description', 'image.png'),
		'mac11_extclip_mp' => array('MAC11 Extended Mag', 'description', 'image.png'),
		'mac11_extclip_silencer_mp' => array('MAC11 Extended Mag & Suppressor', 'description', 'image.png'),
		'mac11_grip_mp' => array('MAC11 Grip', 'description', 'image.png'),
		'mac11_grip_rf_mp' => array('MAC11 Grip & Rapid Fire', 'description', 'image.png'),
		'mac11_grip_dualclip_mp' => array('MAC11 Grip & Dual Mag', 'description', 'image.png'),
		'mac11_grip_extclip_mp' => array('MAC11 Grip & Extended Mag', 'description', 'image.png'),
		'mac11_grip_silencer_mp' => array('MAC11 Grip & Suppressor', 'description', 'image.png'),
		'mac11_reflex_mp' => array('MAC11 Reflex Sight', 'description', 'image.png'),
		'mac11_reflex_extclip_mp' => array('MAC11 Reflex Sight & Extended Mag', 'description', 'image.png'),
		'mac11_reflex_grip_mp' => array('MAC11 Reflex Sight & Grip', 'description', 'image.png'),
		'mac11_reflex_rf_mp' => array('MAC11 Reflex Sight & Rapid Fire', 'description', 'image.png'),
		'mac11_reflex_silencer_mp' => array('MAC11 Reflex Sight & Suppressor', 'description', 'image.png'),
		'mac11_rf_mp' => array('MAC11 Rapid Fire', 'description', 'image.png'),
		'mac11_rf_silencer_mp' => array('MAC11 Rapid Fire & Suppressor', 'description', 'image.png'),
		'mac11_silencer_mp' => array('MAC11 Suppressor', 'description', 'image.png'),
		'mac11dw_mp' => array('MAC11 Dual Wield', 'description', 'image.png'),

		//AK74U
		'ak74u_mp' => array('AK74U', 'description', 'image.png'),
		'ak74u_acog_mp' => array('AK74U ACOG Sight', 'description', 'image.png'),
		'ak74u_acog_dualclip_mp' => array('AK74U ACOG Sight & Dual Mag', 'description', 'image.png'),
		'ak74u_acog_grip_mp' => array('AK74U ACOG Sight & Grip', 'description', 'image.png'),
		'ak74u_acog_rf_mp' => array('AK74U ACOG Sight & Rapid Fire', 'description', 'image.png'),
		'ak74u_acog_silencer_mp' => array('AK74U ACOG Sight & Suppressor', 'description', 'image.png'),
		'ak74u_dualclip_mp' => array('AK74U Dual Mag', 'description', 'image.png'),
		'ak74u_dualclip_silencer_mp' => array('AK74U Dual Mag & Suppressor', 'description', 'image.png'),
		'ak74u_elbit_mp' => array('AK74U Red Dot Sight', 'description', 'image.png'),
		'ak74u_elbit_dualclip_mp' => array('AK74U Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'ak74u_elbit_extclip_mp' => array('AK74U Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'ak74u_elbit_grip_mp' => array('AK74U Red Dot Sight & Grip', 'description', 'image.png'),
		'ak74u_elbit_rf_mp' => array('AK74U Red Dot Sight & Rapid Fire', 'description', 'image.png'),
		'ak74u_elbit_silencer_mp' => array('AK74U Red Dot Sight & Suppressor', 'description', 'image.png'),
		'ak74u_extclip_mp' => array('AK74U Extended Mag', 'description', 'image.png'),
		'ak74u_extclip_silencer_mp' => array('AK74U Extended Mag & Suppressor', 'description', 'image.png'),
		'ak74u_gl_mp' => array('AK74U Grenade Launcher Equipped', 'description', 'image.png'),
		'ak74u_grip_mp' => array('AK74U Grip', 'description', 'image.png'),
		'ak74u_grip_rf_mp' => array('AK74U Grip & Rapid Fire', 'description', 'image.png'),
		'ak74u_grip_dualclip_mp' => array('AK74U Grip & Dual Mag', 'description', 'image.png'),
		'ak74u_grip_extclip_mp' => array('AK74U Grip & Extended Mag', 'description', 'image.png'),
		'ak74u_grip_silencer_mp' => array('AK74U Grip & Suppressor', 'description', 'image.png'),
		'ak74u_reflex_mp' => array('AK74U Reflex Sight', 'description', 'image.png'),
		'ak74u_reflex_dualclip_mp' => array('AK74U Reflex Sight & Dual Mag', 'description', 'image.png'),
		'ak74u_reflex_extclip_mp' => array('AK74U Reflex Sight & Extended Mag', 'description', 'image.png'),
		'ak74u_reflex_grip_mp' => array('AK74U Reflex Sight & Grip', 'description', 'image.png'),
		'ak74u_reflex_rf_mp' => array('AK74U Reflex Sight & Rapid Fire', 'description', 'image.png'),
		'ak74u_reflex_silencer_mp' => array('AK74U Reflex Sight & Suppressor', 'description', 'image.png'),
		'ak74u_rf_mp' => array('AK74U Rapid Fire', 'description', 'image.png'),
		'ak74u_rf_silencer_mp' => array('AK74U Rapid Fire & Suppressor', 'description', 'image.png'),
		'ak74u_silencer_mp' => array('AK74U Suppressor', 'description', 'image.png'),
		'ak74udw_mp' => array('AK74U Dual Wield', 'description', 'image.png'),

		//UZI
		'uzi_mp' => array('Uzi', 'description', 'image.png'),
		'uzi_acog_mp' => array('Uzi ACOG Sight', 'description', 'image.png'),
		'uzi_acog_dualclip_mp' => array('Uzi ACOG Sight & Dual Mag', 'description', 'image.png'),
		'uzi_acog_grip_mp' => array('Uzi ACOG Sight & Grip', 'description', 'image.png'),
		'uzi_acog_rf_mp' => array('Uzi ACOG Sight & Rapid Fire', 'description', 'image.png'),
		'uzi_acog_silencer_mp' => array('Uzi ACOG Sight & Suppressor', 'description', 'image.png'),
		'uzi_dualclip_mp' => array('Uzi Dual Mag', 'description', 'image.png'),
		'uzi_dualclip_silencer_mp' => array('Uzi Dual Mag & Suppressor', 'description', 'image.png'),
		'uzi_elbit_mp' => array('Uzi Red Dot Sight', 'description', 'image.png'),
		'uzi_elbit_dualclip_mp' => array('Uzi Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'uzi_elbit_extclip_mp' => array('Uzi Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'uzi_elbit_grip_mp' => array('Uzi Red Dot Sight & Grip', 'description', 'image.png'),
		'uzi_elbit_rf_mp' => array('Uzi Red Dot Sight & Rapid Fire', 'description', 'image.png'),
		'uzi_elbit_silencer_mp' => array('Uzi Red Dot Sight & Suppressor', 'description', 'image.png'),
		'uzi_extclip_mp' => array('Uzi Extended Mag', 'description', 'image.png'),
		'uzi_extclip_silencer_mp' => array('Uzi Extended Mag & Suppressor', 'description', 'image.png'),
		'uzi_grip_mp' => array('Uzi Grip', 'description', 'image.png'),
		'uzi_grip_rf_mp' => array('Uzi Grip & Rapid Fire', 'description', 'image.png'),
		'uzi_grip_dualclip_mp' => array('Uzi Grip & Dual Mag', 'description', 'image.png'),
		'uzi_grip_extclip_mp' => array('Uzi Grip & Extended Mag', 'description', 'image.png'),
		'uzi_grip_silencer_mp' => array('Uzi Grip & Suppressor', 'description', 'image.png'),
		'uzi_reflex_mp' => array('Uzi Reflex Sight', 'description', 'image.png'),
		'uzi_reflex_extclip_mp' => array('Uzi Reflex Sight & Extended Mag', 'description', 'image.png'),
		'uzi_reflex_grip_mp' => array('Uzi Reflex Sight & Grip', 'description', 'image.png'),
		'uzi_reflex_rf_mp' => array('Uzi Reflex Sight & Rapid Fire', 'description', 'image.png'),
		'uzi_reflex_silencer_mp' => array('Uzi Reflex Sight & Suppressor', 'description', 'image.png'),
		'uzi_rf_mp' => array('Uzi Rapid Fire', 'description', 'image.png'),
		'uzi_rf_silencer_mp' => array('Uzi Rapid Fire & Suppressor', 'description', 'image.png'),
		'uzi_silencer_mp' => array('Uzi Suppressor', 'description', 'image.png'),
		'uzidw_mp' => array('Uzi Dual Wield', 'description', 'image.png'),

		//PM63
		'pm63_mp' => array('PM63', 'description', 'image.png'),
		'pm63_acog_mp' => array('PM63 ACOG Sight', 'description', 'image.png'),
		'pm63_acog_dualclip_mp' => array('PM63 ACOG Sight & Dual Mag', 'description', 'image.png'),
		'pm63_acog_grip_mp' => array('PM63 ACOG Sight & Grip', 'description', 'image.png'),
		'pm63_acog_rf_mp' => array('PM63 ACOG Sight & Rapid Fire', 'description', 'image.png'),
		'pm63_acog_silencer_mp' => array('PM63 ACOG Sight & Suppressor', 'description', 'image.png'),
		'pm63_dualclip_mp' => array('PM63 Dual Mag', 'description', 'image.png'),
		'pm63_dualclip_silencer_mp' => array('PM63 Dual Mag & Suppressor', 'description', 'image.png'),
		'pm63_elbit_mp' => array('PM63 Red Dot Sight', 'description', 'image.png'),
		'pm63_elbit_dualclip_mp' => array('PM63 Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'pm63_elbit_extclip_mp' => array('PM63 Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'pm63_elbit_grip_mp' => array('PM63 Red Dot Sight & Grip', 'description', 'image.png'),
		'pm63_elbit_rf_mp' => array('PM63 Red Dot Sight & Rapid Fire', 'description', 'image.png'),
		'pm63_elbit_silencer_mp' => array('PM63 Red Dot Sight & Suppressor', 'description', 'image.png'),
		'pm63_extclip_mp' => array('PM63 Extended Mag', 'description', 'image.png'),
		'pm63_extclip_silencer_mp' => array('PM63 Extended Mag & Suppressor', 'description', 'image.png'),
		'pm63_grip_mp' => array('PM63 Grip', 'description', 'image.png'),
		'pm63_grip_rf_mp' => array('PM63 Grip & Rapid Fire', 'description', 'image.png'),
		'pm63_grip_dualclip_mp' => array('PM63 Grip & Dual Mag', 'description', 'image.png'),
		'pm63_grip_extclip_mp' => array('PM63 Grip & Extended Mag', 'description', 'image.png'),
		'pm63_grip_silencer_mp' => array('PM63 Grip & Suppressor', 'description', 'image.png'),
		'pm63_reflex_mp' => array('PM63 Reflex Sight', 'description', 'image.png'),
		'pm63_reflex_extclip_mp' => array('PM63 Reflex Sight & Extended Mag', 'description', 'image.png'),
		'pm63_reflex_grip_mp' => array('PM63 Reflex Sight & Grip', 'description', 'image.png'),
		'pm63_reflex_rf_mp' => array('PM63 Reflex Sight & Rapid Fire', 'description', 'image.png'),
		'pm63_reflex_silencer_mp' => array('PM63 Reflex Sight & Suppressor', 'description', 'image.png'),
		'pm63_rf_mp' => array('PM63 Rapid Fire', 'description', 'image.png'),
		'pm63_rf_silencer_mp' => array('PM63 Rapid Fire & Suppressor', 'description', 'image.png'),
		'pm63_silencer_mp' => array('PM63 Suppressor', 'description', 'image.png'),
		'pm63dw_mp' => array('PM63 Dual Wield', 'description', 'image.png'),

		//MPL
		'mpl_mp' => array('MPL', 'description', 'image.png'),
		'mpl_acog_mp' => array('MPL ACOG Sight', 'description', 'image.png'),
		'mpl_acog_dualclip_mp' => array('MPL ACOG Sight & Dual Mag', 'description', 'image.png'),
		'mpl_acog_grip_mp' => array('MPL ACOG Sight & Grip', 'description', 'image.png'),
		'mpl_acog_rf_mp' => array('MPL ACOG Sight & Rapid Fire', 'description', 'image.png'),
		'mpl_acog_silencer_mp' => array('MPL ACOG Sight & Suppressor', 'description', 'image.png'),
		'mpl_dualclip_mp' => array('MPL Dual Mag', 'description', 'image.png'),
		'mpl_dualclip_silencer_mp' => array('MPL Dual Mag & Suppressor', 'description', 'image.png'),
		'mpl_elbit_mp' => array('MPL Red Dot Sight', 'description', 'image.png'),
		'mpl_elbit_dualclip_mp' => array('MPL Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'mpl_elbit_extclip_mp' => array('MPL Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'mpl_elbit_grip_mp' => array('MPL Red Dot Sight & Grip', 'description', 'image.png'),
		'mpl_elbit_rf_mp' => array('MPL Red Dot Sight & Rapid Fire', 'description', 'image.png'),
		'mpl_elbit_silencer_mp' => array('MPL Red Dot Sight & Suppressor', 'description', 'image.png'),
		'mpl_extclip_mp' => array('MPL Extended Mag', 'description', 'image.png'),
		'mpl_extclip_silencer_mp' => array('MPL Extended Mag & Suppressor', 'description', 'image.png'),
		'mpl_grip_mp' => array('MPL Grip', 'description', 'image.png'),
		'mpl_grip_rf_mp' => array('MPL Grip & Rapid Fire', 'description', 'image.png'),
		'mpl_grip_dualclip_mp' => array('MPL Grip & Dual Mag', 'description', 'image.png'),
		'mpl_grip_extclip_mp' => array('MPL Grip & Extended Mag', 'description', 'image.png'),
		'mpl_grip_silencer_mp' => array('MPL Grip & Suppressor', 'description', 'image.png'),
		'mpl_reflex_mp' => array('MPL Reflex Sight', 'description', 'image.png'),
		'mpl_reflex_extclip_mp' => array('MPL Reflex Sight & Extended Mag', 'description', 'image.png'),
		'mpl_reflex_grip_mp' => array('MPL Reflex Sight & Grip', 'description', 'image.png'),
		'mpl_reflex_rf_mp' => array('MPL Reflex Sight & Rapid Fire', 'description', 'image.png'),
		'mpl_reflex_silencer_mp' => array('MPL Reflex Sight & Suppressor', 'description', 'image.png'),
		'mpl_rf_mp' => array('MPL Rapid Fire', 'description', 'image.png'),
		'mpl_rf_silencer_mp' => array('MPL Rapid Fire & Suppressor', 'description', 'image.png'),
		'mpl_silencer_mp' => array('MPL Suppressor', 'description', 'image.png'),
		'mpldw_mp' => array('MPL Dual Wield', 'description', 'image.png'),

		//SPECTRE
		'spectre_mp' => array('Spectre', 'description', 'image.png'),
		'spectre_acog_mp' => array('Spectre ACOG Sight', 'description', 'image.png'),
		'spectre_acog_dualclip_mp' => array('Spectre ACOG Sight & Dual Mag', 'description', 'image.png'),
		'spectre_acog_grip_mp' => array('Spectre ACOG Sight & Grip', 'description', 'image.png'),
		'spectre_acog_rf_mp' => array('Spectre ACOG Sight & Rapid Fire', 'description', 'image.png'),
		'spectre_acog_silencer_mp' => array('Spectre ACOG Sight & Suppressor', 'description', 'image.png'),
		'spectre_dualclip_mp' => array('Spectre Dual Mag', 'description', 'image.png'),
		'spectre_dualclip_silencer_mp' => array('Spectre Dual Mag & Suppressor', 'description', 'image.png'),
		'spectre_elbit_mp' => array('Spectre Red Dot Sight', 'description', 'image.png'),
		'spectre_elbit_dualclip_mp' => array('Spectre Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'spectre_elbit_extclip_mp' => array('Spectre Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'spectre_elbit_grip_mp' => array('Spectre Red Dot Sight & Grip', 'description', 'image.png'),
		'spectre_elbit_rf_mp' => array('Spectre Red Dot Sight & Rapid Fire', 'description', 'image.png'),
		'spectre_elbit_silencer_mp' => array('Spectre Red Dot Sight & Suppressor', 'description', 'image.png'),
		'spectre_extclip_mp' => array('Spectre Extended Mag', 'description', 'image.png'),
		'spectre_extclip_silencer_mp' => array('Spectre Extended Mag & Suppressor', 'description', 'image.png'),
		'spectre_grip_mp' => array('Spectre Grip', 'description', 'image.png'),
		'spectre_grip_rf_mp' => array('Spectre Grip & Rapid Fire', 'description', 'image.png'),
		'spectre_grip_dualclip_mp' => array('Spectre Grip & Dual Mag', 'description', 'image.png'),
		'spectre_grip_extclip_mp' => array('Spectre Grip & Extended Mag', 'description', 'image.png'),
		'spectre_grip_silencer_mp' => array('Spectre Grip & Suppressor', 'description', 'image.png'),
		'spectre_reflex_mp' => array('Spectre Reflex Sight', 'description', 'image.png'),
		'spectre_reflex_extclip_mp' => array('Spectre Reflex Sight & Extended Mag', 'description', 'image.png'),
		'spectre_reflex_grip_mp' => array('Spectre Reflex Sight & Grip', 'description', 'image.png'),
		'spectre_reflex_rf_mp' => array('Spectre Reflex Sight & Rapid Fire', 'description', 'image.png'),
		'spectre_reflex_silencer_mp' => array('Spectre Reflex Sight & Suppressor', 'description', 'image.png'),
		'spectre_rf_mp' => array('Spectre Rapid Fire', 'description', 'image.png'),
		'spectre_rf_silencer_mp' => array('Spectre Rapid Fire & Suppressor', 'description', 'image.png'),
		'spectre_silencer_mp' => array('Spectre Suppressor', 'description', 'image.png'),
		'spectredw_mp' => array('Spectre Dual Wield', 'description', 'image.png'),

		//KIPARIS
		'kiparis_mp' => array('Kiparis', 'description', 'image.png'),
		'kiparis_acog_mp' => array('Kiparis ACOG Sight', 'description', 'image.png'),
		'kiparis_acog_dualclip_mp' => array('Kiparis ACOG Sight & Dual Mag', 'description', 'image.png'),
		'kiparis_acog_grip_mp' => array('Kiparis ACOG Sight & Grip', 'description', 'image.png'),
		'kiparis_acog_rf_mp' => array('Kiparis ACOG Sight & Rapid Fire', 'description', 'image.png'),
		'kiparis_acog_silencer_mp' => array('Kiparis ACOG Sight & Suppressor', 'description', 'image.png'),
		'kiparis_dualclip_mp' => array('Kiparis Dual Mag', 'description', 'image.png'),
		'kiparis_dualclip_silencer_mp' => array('Kiparis Dual Mag & Suppressor', 'description', 'image.png'),
		'kiparis_elbit_mp' => array('Kiparis Red Dot Sight', 'description', 'image.png'),
		'kiparis_elbit_dualclip_mp' => array('Kiparis Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'kiparis_elbit_extclip_mp' => array('Kiparis Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'kiparis_elbit_grip_mp' => array('Kiparis Red Dot Sight & Grip', 'description', 'image.png'),
		'kiparis_elbit_rf_mp' => array('Kiparis Red Dot Sight & Rapid Fire', 'description', 'image.png'),
		'kiparis_elbit_silencer_mp' => array('Kiparis Red Dot Sight & Suppressor', 'description', 'image.png'),
		'kiparis_extclip_mp' => array('Kiparis Extended Mag', 'description', 'image.png'),
		'kiparis_extclip_silencer_mp' => array('Kiparis Extended Mag & Suppressor', 'description', 'image.png'),
		'kiparis_grip_mp' => array('Kiparis Grip', 'description', 'image.png'),
		'kiparis_grip_rf_mp' => array('Kiparis Grip & Rapid Fire', 'description', 'image.png'),
		'kiparis_grip_dualclip_mp' => array('Kiparis Grip & Dual Mag', 'description', 'image.png'),
		'kiparis_grip_extclip_mp' => array('Kiparis Grip & Extended Mag', 'description', 'image.png'),
		'kiparis_grip_silencer_mp' => array('Kiparis Grip & Suppressor', 'description', 'image.png'),
		'kiparis_reflex_mp' => array('Kiparis Reflex Sight', 'description', 'image.png'),
		'kiparis_reflex_extclip_mp' => array('Kiparis Reflex Sight & Extended Mag', 'description', 'image.png'),
		'kiparis_reflex_grip_mp' => array('Kiparis Reflex Sight & Grip', 'description', 'image.png'),
		'kiparis_reflex_rf_mp' => array('Kiparis Reflex Sight & Rapid Fire', 'description', 'image.png'),
		'kiparis_reflex_silencer_mp' => array('Kiparis Reflex Sight & Suppressor', 'description', 'image.png'),
		'kiparis_rf_mp' => array('Kiparis Rapid Fire', 'description', 'image.png'),
		'kiparis_rf_silencer_mp' => array('Kiparis Rapid Fire & Suppressor', 'description', 'image.png'),
		'kiparis_silencer_mp' => array('Kiparis Suppressor', 'description', 'image.png'),
		'kiparisdw_mp' => array('Kiparis Dual Wield', 'description', 'image.png'),

		//*********************
		//Assault Rifles
		//*********************

		//M16
		'm16_mp' => array('M16', 'description', 'image.png'),
		'm16_acog_mp' => array('M16 ACOG Sight', 'description', 'image.png'),
		'm16_acog_dualclip_mp' => array('M16 ACOG Sight & Dual Mag', 'description', 'image.png'),
		'm16_acog_extclip_mp' => array('M16 ACOG Sight & Extended Mag', 'description', 'image.png'),
		'm16_acog_silencer_mp' => array('M16 ACOG Sight & Suppressor', 'description', 'image.png'),
		'm16_dualclip_mp' => array('M16 Dual Mag', 'description', 'image.png'),
		'm16_dualclip_silencer_mp' => array('M16 Dual Mag & Suppressor', 'description', 'image.png'),
		'm16_elbit_mp' => array('M16 Red Dot Sight', 'description', 'image.png'),
		'm16_elbit_dualclip_mp' => array('M16 Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'm16_elbit_extclip_mp' => array('M16 Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'm16_elbit_silencer_mp' => array('M16 Red Dot Sight & Suppressor', 'description', 'image.png'),
		'm16_extclip_mp' => array('M16 Extended Mag', 'description', 'image.png'),
		'm16_extclip_silencer_mp' => array('M16 Extended Mag & Suppressor', 'description', 'image.png'),
		'm16_ft_mp' => array('M16 Flamethrower Equipped', 'description', 'image.png'),
		'm16_gl_mp' => array('M16 Grenade Launcher Equipped', 'description', 'image.png'),
		'm16_ir_mp' => array('M16 Infrared Scope', 'description', 'image.png'),
		'm16_ir_dualclip_mp' => array('M16 Infrared Scope & Dual Mag', 'description', 'image.png'),
		'm16_ir_extclip_mp' => array('M16 Infrared Scope & Extended Mag', 'description', 'image.png'),
		'm16_ir_silencer_mp' => array('M16 Infrared Scope & Suppressor', 'description', 'image.png'),
		'm16_mk_mp' => array('M16 Masterkey Equipped', 'description', 'image.png'),
		'm16_reflex_mp' => array('M16 Reflex Sight', 'description', 'image.png'),
		'm16_reflex_dualclip_mp' => array('M16 Reflex Sight & Dual Mag', 'description', 'image.png'),
		'm16_reflex_extclip_mp' => array('M16 Reflex Sight & Extended Mag', 'description', 'image.png'),
		'm16_reflex_silencer_mp' => array('M16 Reflex Sight & Suppressor', 'description', 'image.png'),
		'm16_silencer_mp' => array('M16 Suppressor', 'description', 'image.png'),

		//ENFIELD
		'enfield_mp' => array('Enfield', 'description', 'image.png'),
		'enfield_acog_mp' => array('Enfield ACOG Sight', 'description', 'image.png'),
		'enfield_acog_dualclip_mp' => array('Enfield ACOG Sight & Dual Mag', 'description', 'image.png'),
		'enfield_acog_extclip_mp' => array('Enfield ACOG Sight & Extended Mag', 'description', 'image.png'),
		'enfield_acog_silencer_mp' => array('Enfield ACOG Sight & Suppressor', 'description', 'image.png'),
		'enfield_dualclip_mp' => array('Enfield Dual Mag', 'description', 'image.png'),
		'enfield_dualclip_silencer_mp' => array('Enfield Dual Mag & Suppressor', 'description', 'image.png'),
		'enfield_elbit_mp' => array('Enfield Red Dot Sight', 'description', 'image.png'),
		'enfield_elbit_dualclip_mp' => array('Enfield Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'enfield_elbit_extclip_mp' => array('Enfield Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'enfield_elbit_silencer_mp' => array('Enfield Red Dot Sight & Suppressor', 'description', 'image.png'),
		'enfield_extclip_mp' => array('Enfield Extended Mag', 'description', 'image.png'),
		'enfield_extclip_silencer_mp' => array('Enfield Extended Mag & Suppressor', 'description', 'image.png'),
		'enfield_ft_mp' => array('Enfield Flamethrower Equipped', 'description', 'image.png'),
		'enfield_gl_mp' => array('Enfield Grenade Launcher Equipped', 'description', 'image.png'),
		'enfield_ir_mp' => array('Enfield Infrared Scope', 'description', 'image.png'),
		'enfield_ir_dualclip_mp' => array('Enfield Infrared Scope & Dual Mag', 'description', 'image.png'),
		'enfield_ir_extclip_mp' => array('Enfield Infrared Scope & Extended Mag', 'description', 'image.png'),
		'enfield_ir_silencer_mp' => array('Enfield Infrared Scope & Suppressor', 'description', 'image.png'),
		'enfield_mk_mp' => array('Enfield Masterkey Equipped', 'description', 'image.png'),
		'enfield_reflex_mp' => array('Enfield Reflex Sight', 'description', 'image.png'),
		'enfield_reflex_dualclip_mp' => array('Enfield Reflex Sight & Dual Mag', 'description', 'image.png'),
		'enfield_reflex_extclip_mp' => array('Enfield Reflex Sight & Extended Mag', 'description', 'image.png'),
		'enfield_reflex_silencer_mp' => array('Enfield Reflex Sight & Suppressor', 'description', 'image.png'),
		'enfield_silencer_mp' => array('Enfield Suppressor', 'description', 'image.png'),

		//M14
		'm14_mp' => array('M14', 'description', 'image.png'),
		'm14_acog_mp' => array('M14 ACOG Sight', 'description', 'image.png'),
		'm14_acog_dualclip_mp' => array('M14 ACOG Sight & Dual Mag', 'description', 'image.png'),
		'm14_acog_extclip_mp' => array('M14 ACOG Sight & Extended Mag', 'description', 'image.png'),
		'm14_acog_silencer_mp' => array('M14 ACOG Sight & Suppressor', 'description', 'image.png'),
		'm14_dualclip_mp' => array('M14 Dual Mag', 'description', 'image.png'),
		'm14_dualclip_silencer_mp' => array('M14 Dual Mag & Suppressor', 'description', 'image.png'),
		'm14_elbit_mp' => array('M14 Red Dot Sight', 'description', 'image.png'),
		'm14_elbit_dualclip_mp' => array('M14 Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'm14_elbit_extclip_mp' => array('M14 Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'm14_elbit_silencer_mp' => array('M14 Red Dot Sight & Suppressor', 'description', 'image.png'),
		'm14_extclip_mp' => array('M14 Extended Mag', 'description', 'image.png'),
		'm14_extclip_silencer_mp' => array('M14 Extended Mag & Suppressor', 'description', 'image.png'),
		'm14_ft_mp' => array('M14 Flamethrower Equipped', 'description', 'image.png'),
		'm14_gl_mp' => array('M14 Grenade Launcher Equipped', 'description', 'image.png'),
		'm14_ir_mp' => array('M14 Infrared Scope', 'description', 'image.png'),
		'm14_ir_dualclip_mp' => array('M14 Infrared Scope & Dual Mag', 'description', 'image.png'),
		'm14_ir_extclip_mp' => array('M14 Infrared Scope & Extended Mag', 'description', 'image.png'),
		'm14_ir_grip_mp' => array('M14 Infrared Scope & Grip', 'description', 'image.png'),
		'm14_ir_silencer_mp' => array('M14 Infrared Scope & Suppressor', 'description', 'image.png'),
		'm14_mk_mp' => array('M14 Masterkey Equipped', 'description', 'image.png'),
		'm14_reflex_mp' => array('M14 Reflex Sight', 'description', 'image.png'),
		'm14_reflex_dualclip_mp' => array('M14 Reflex Sight & Dual Mag', 'description', 'image.png'),
		'm14_reflex_extclip_mp' => array('M14 Reflex Sight & Extended Mag', 'description', 'image.png'),
		'm14_reflex_silencer_mp' => array('M14 Reflex Sight & Suppressor', 'description', 'image.png'),
		'm14_silencer_mp' => array('M14 Suppressor', 'description', 'image.png'),
		//m14 only
		'm14_acog_grip_mp' => array('M14 ACOG Sight & Grip', 'description', 'image.png'),
		'm14_elbit_grip_mp' => array('M14 Red Dot Sight & Grip', 'description', 'image.png'),
		'm14_grip_mp' => array('M14 Grip', 'description', 'image.png'),
		'm14_grip_extclip_mp' => array('M14 Grip & Extended Mag', 'description', 'image.png'),
		'm14_grip_silencer_mp' => array('M14 Grip & Suppressor', 'description', 'image.png'),
		'm14_reflex_grip_mp' => array('M14 Reflex Sight & Grip', 'description', 'image.png'),

		//FAMAS
		'famas_mp' => array('Famas', 'description', 'image.png'),
		'famas_acog_mp' => array('Famas ACOG Sight', 'description', 'image.png'),
		'famas_acog_dualclip_mp' => array('Famas ACOG Sight & Dual Mag', 'description', 'image.png'),
		'famas_acog_extclip_mp' => array('Famas ACOG Sight & Extended Mag', 'description', 'image.png'),
		'famas_acog_silencer_mp' => array('Famas ACOG Sight & Suppressor', 'description', 'image.png'),
		'famas_dualclip_mp' => array('Famas Dual Mag', 'description', 'image.png'),
		'famas_dualclip_silencer_mp' => array('Famas Dual Mag & Suppressor', 'description', 'image.png'),
		'famas_elbit_mp' => array('Famas Red Dot Sight', 'description', 'image.png'),
		'famas_elbit_dualclip_mp' => array('Famas Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'famas_elbit_extclip_mp' => array('Famas Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'famas_elbit_silencer_mp' => array('Famas Red Dot Sight & Suppressor', 'description', 'image.png'),
		'famas_extclip_mp' => array('Famas Extended Mag', 'description', 'image.png'),
		'famas_extclip_silencer_mp' => array('Famas Extended Mag & Suppressor', 'description', 'image.png'),
		'famas_ft_mp' => array('Famas Flamethrower Equipped', 'description', 'image.png'),
		'famas_gl_mp' => array('Famas Grenade Launcher Equipped', 'description', 'image.png'),
		'famas_ir_mp' => array('Famas Infrared Scope', 'description', 'image.png'),
		'famas_ir_dualclip_mp' => array('Famas Infrared Scope & Dual Mag', 'description', 'image.png'),
		'famas_ir_extclip_mp' => array('Famas Infrared Scope & Extended Mag', 'description', 'image.png'),
		'famas_ir_silencer_mp' => array('Famas Infrared Scope & Suppressor', 'description', 'image.png'),
		'famas_mk_mp' => array('Famas Masterkey Equipped', 'description', 'image.png'),
		'famas_reflex_mp' => array('Famas Reflex Sight', 'description', 'image.png'),
		'famas_reflex_dualclip_mp' => array('Famas Reflex Sight & Dual Mag', 'description', 'image.png'),
		'famas_reflex_extclip_mp' => array('Famas Reflex Sight & Extended Mag', 'description', 'image.png'),
		'famas_reflex_silencer_mp' => array('Famas Reflex Sight & Suppressor', 'description', 'image.png'),
		'famas_silencer_mp' => array('Famas Suppressor', 'description', 'image.png'),

		//GALIL
		'galil_mp' => array('Galil', 'description', 'image.png'),
		'galil_acog_mp' => array('Galil ACOG Sight', 'description', 'image.png'),
		'galil_acog_dualclip_mp' => array('Galil ACOG Sight & Dual Mag', 'description', 'image.png'),
		'galil_acog_extclip_mp' => array('Galil ACOG Sight & Extended Mag', 'description', 'image.png'),
		'galil_acog_silencer_mp' => array('Galil ACOG Sight & Suppressor', 'description', 'image.png'),
		'galil_dualclip_mp' => array('Galil Dual Mag', 'description', 'image.png'),
		'galil_dualclip_silencer_mp' => array('Galil Dual Mag & Suppressor', 'description', 'image.png'),
		'galil_elbit_mp' => array('Galil Red Dot Sight', 'description', 'image.png'),
		'galil_elbit_dualclip_mp' => array('Galil Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'galil_elbit_extclip_mp' => array('Galil Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'galil_elbit_silencer_mp' => array('Galil Red Dot Sight & Suppressor', 'description', 'image.png'),
		'galil_extclip_mp' => array('Galil Extended Mag', 'description', 'image.png'),
		'galil_extclip_silencer_mp' => array('Galil Extended Mag & Suppressor', 'description', 'image.png'),
		'galil_ft_mp' => array('Galil Flamethrower Equipped', 'description', 'image.png'),
		'galil_gl_mp' => array('Galil Grenade Launcher Equipped', 'description', 'image.png'),
		'galil_ir_mp' => array('Galil Infrared Scope', 'description', 'image.png'),
		'galil_ir_dualclip_mp' => array('Galil Infrared Scope & Dual Mag', 'description', 'image.png'),
		'galil_ir_extclip_mp' => array('Galil Infrared Scope & Extended Mag', 'description', 'image.png'),
		'galil_ir_silencer_mp' => array('Galil Infrared Scope & Suppressor', 'description', 'image.png'),
		'galil_mk_mp' => array('Galil Masterkey Equipped', 'description', 'image.png'),
		'galil_reflex_mp' => array('Galil Reflex Sight', 'description', 'image.png'),
		'galil_reflex_dualclip_mp' => array('Galil Reflex Sight & Dual Mag', 'description', 'image.png'),
		'galil_reflex_extclip_mp' => array('Galil Reflex Sight & Extended Mag', 'description', 'image.png'),
		'galil_reflex_silencer_mp' => array('Galil Reflex Sight & Suppressor', 'description', 'image.png'),
		'galil_silencer_mp' => array('Galil Suppressor', 'description', 'image.png'),

		//AUG
		'aug_mp' => array('AUG', 'description', 'image.png'),
		'aug_acog_mp' => array('AUG ACOG Sight', 'description', 'image.png'),
		'aug_acog_dualclip_mp' => array('AUG ACOG Sight & Dual Mag', 'description', 'image.png'),
		'aug_acog_extclip_mp' => array('AUG ACOG Sight & Extended Mag', 'description', 'image.png'),
		'aug_acog_silencer_mp' => array('AUG ACOG Sight & Suppressor', 'description', 'image.png'),
		'aug_dualclip_mp' => array('AUG Dual Mag', 'description', 'image.png'),
		'aug_dualclip_silencer_mp' => array('AUG Dual Mag & Suppressor', 'description', 'image.png'),
		'aug_elbit_mp' => array('AUG Red Dot Sight', 'description', 'image.png'),
		'aug_elbit_dualclip_mp' => array('AUG Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'aug_elbit_extclip_mp' => array('AUG Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'aug_elbit_silencer_mp' => array('AUG Red Dot Sight & Suppressor', 'description', 'image.png'),
		'aug_extclip_mp' => array('AUG Extended Mag', 'description', 'image.png'),
		'aug_extclip_silencer_mp' => array('AUG Extended Mag & Suppressor', 'description', 'image.png'),
		'aug_ft_mp' => array('AUG Flamethrower Equipped', 'description', 'image.png'),
		'aug_gl_mp' => array('AUG Grenade Launcher Equipped', 'description', 'image.png'),
		'aug_ir_mp' => array('AUG Infrared Scope', 'description', 'image.png'),
		'aug_ir_dualclip_mp' => array('AUG Infrared Scope & Dual Mag', 'description', 'image.png'),
		'aug_ir_extclip_mp' => array('AUG Infrared Scope & Extended Mag', 'description', 'image.png'),
		'aug_ir_silencer_mp' => array('AUG Infrared Scope & Suppressor', 'description', 'image.png'),
		'aug_mk_mp' => array('AUG Masterkey Equipped', 'description', 'image.png'),
		'aug_reflex_mp' => array('AUG Reflex Sight', 'description', 'image.png'),
		'aug_reflex_dualclip_mp' => array('AUG Reflex Sight & Dual Mag', 'description', 'image.png'),
		'aug_reflex_extclip_mp' => array('AUG Reflex Sight & Extended Mag', 'description', 'image.png'),
		'aug_reflex_silencer_mp' => array('AUG Reflex Sight & Suppressor', 'description', 'image.png'),
		'aug_silencer_mp' => array('AUG Suppressor', 'description', 'image.png'),

		//FN-FAL
		'fnfal_mp' => array('FN-FAL', 'description', 'image.png'),
		'fnfal_acog_mp' => array('FN-FAL ACOG Sight', 'description', 'image.png'),
		'fnfal_acog_dualclip_mp' => array('FN-FAL ACOG Sight & Dual Mag', 'description', 'image.png'),
		'fnfal_acog_extclip_mp' => array('FN-FAL ACOG Sight & Extended Mag', 'description', 'image.png'),
		'fnfal_acog_silencer_mp' => array('FN-FAL ACOG Sight & Suppressor', 'description', 'image.png'),
		'fnfal_dualclip_mp' => array('FN-FAL Dual Mag', 'description', 'image.png'),
		'fnfal_dualclip_silencer_mp' => array('FN-FAL Dual Mag & Suppressor', 'description', 'image.png'),
		'fnfal_elbit_mp' => array('FN-FAL Red Dot Sight', 'description', 'image.png'),
		'fnfal_elbit_dualclip_mp' => array('FN-FAL Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'fnfal_elbit_extclip_mp' => array('FN-FAL Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'fnfal_elbit_silencer_mp' => array('FN-FAL Red Dot Sight & Suppressor', 'description', 'image.png'),
		'fnfal_extclip_mp' => array('FN-FAL Extended Mag', 'description', 'image.png'),
		'fnfal_extclip_silencer_mp' => array('FN-FAL Extended Mag & Suppressor', 'description', 'image.png'),
		'fnfal_ft_mp' => array('FN-FAL Flamethrower Equipped', 'description', 'image.png'),
		'fnfal_gl_mp' => array('FN-FAL Grenade Launcher Equipped', 'description', 'image.png'),
		'fnfal_ir_mp' => array('FN-FAL Infrared Scope', 'description', 'image.png'),
		'fnfal_ir_dualclip_mp' => array('FN-FAL Infrared Scope & Dual Mag', 'description', 'image.png'),
		'fnfal_ir_extclip_mp' => array('FN-FAL Infrared Scope & Extended Mag', 'description', 'image.png'),
		'fnfal_ir_silencer_mp' => array('FN-FAL Infrared Scope & Suppressor', 'description', 'image.png'),
		'fnfal_mk_mp' => array('FN-FAL Masterkey Equipped', 'description', 'image.png'),
		'fnfal_reflex_mp' => array('FN-FAL Reflex Sight', 'description', 'image.png'),
		'fnfal_reflex_dualclip_mp' => array('FN-FAL Reflex Sight & Dual Mag', 'description', 'image.png'),
		'fnfal_reflex_extclip_mp' => array('FN-FAL Reflex Sight & Extended Mag', 'description', 'image.png'),
		'fnfal_reflex_silencer_mp' => array('FN-FAL Reflex Sight & Suppressor', 'description', 'image.png'),
		'fnfal_silencer_mp' => array('FN-FAL Suppressor', 'description', 'image.png'),

		//AK47
		'ak47_mp' => array('AK47', 'description', 'image.png'),
		'ak47_acog_mp' => array('AK47 ACOG Sight', 'description', 'image.png'),
		'ak47_acog_dualclip_mp' => array('AK47 ACOG Sight & Dual Mag', 'description', 'image.png'),
		'ak47_acog_extclip_mp' => array('AK47 ACOG Sight & Extended Mag', 'description', 'image.png'),
		'ak47_acog_silencer_mp' => array('AK47 ACOG Sight & Suppressor', 'description', 'image.png'),
		'ak47_dualclip_mp' => array('AK47 Dual Mag', 'description', 'image.png'),
		'ak47_dualclip_silencer_mp' => array('AK47 Dual Mag & Suppressor', 'description', 'image.png'),
		'ak47_elbit_mp' => array('AK47 Red Dot Sight', 'description', 'image.png'),
		'ak47_elbit_dualclip_mp' => array('AK47 Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'ak47_elbit_extclip_mp' => array('AK47 Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'ak47_elbit_silencer_mp' => array('AK47 Red Dot Sight & Suppressor', 'description', 'image.png'),
		'ak47_extclip_mp' => array('AK47 Extended Mag', 'description', 'image.png'),
		'ak47_extclip_silencer_mp' => array('AK47 Extended Mag & Suppressor', 'description', 'image.png'),
		'ak47_ft_mp' => array('AK47 Flamethrower Equipped', 'description', 'image.png'),
		'ak47_gl_mp' => array('AK47 Grenade Launcher Equipped', 'description', 'image.png'),
		'ak47_ir_mp' => array('AK47 Infrared Scope', 'description', 'image.png'),
		'ak47_ir_dualclip_mp' => array('AK47 Infrared Scope & Dual Mag', 'description', 'image.png'),
		'ak47_ir_extclip_mp' => array('AK47 Infrared Scope & Extended Mag', 'description', 'image.png'),
		'ak47_ir_silencer_mp' => array('AK47 Infrared Scope & Suppressor', 'description', 'image.png'),
		'ak47_mk_mp' => array('AK47 Masterkey Equipped', 'description', 'image.png'),
		'ak47_reflex_mp' => array('AK47 Reflex Sight', 'description', 'image.png'),
		'ak47_reflex_dualclip_mp' => array('AK47 Reflex Sight & Dual Mag', 'description', 'image.png'),
		'ak47_reflex_extclip_mp' => array('AK47 Reflex Sight & Extended Mag', 'description', 'image.png'),
		'ak47_reflex_silencer_mp' => array('AK47 Reflex Sight & Suppressor', 'description', 'image.png'),
		'ak47_silencer_mp' => array('AK47 Suppressor', 'description', 'image.png'),

		//COMMANDO
		'commando_mp' => array('Commando', 'description', 'image.png'),
		'commando_acog_mp' => array('Commando ACOG Sight', 'description', 'image.png'),
		'commando_acog_dualclip_mp' => array('Commando ACOG Sight & Dual Mag', 'description', 'image.png'),
		'commando_acog_extclip_mp' => array('Commando ACOG Sight & Extended Mag', 'description', 'image.png'),
		'commando_acog_silencer_mp' => array('Commando ACOG Sight & Suppressor', 'description', 'image.png'),
		'commando_dualclip_mp' => array('Commando Dual Mag', 'description', 'image.png'),
		'commando_dualclip_silencer_mp' => array('Commando Dual Mag & Suppressor', 'description', 'image.png'),
		'commando_elbit_mp' => array('Commando Red Dot Sight', 'description', 'image.png'),
		'commando_elbit_dualclip_mp' => array('Commando Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'commando_elbit_extclip_mp' => array('Commando Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'commando_elbit_silencer_mp' => array('Commando Red Dot Sight & Suppressor', 'description', 'image.png'),
		'commando_extclip_mp' => array('Commando Extended Mag', 'description', 'image.png'),
		'commando_extclip_silencer_mp' => array('Commando Extended Mag & Suppressor', 'description', 'image.png'),
		'commando_ft_mp' => array('Commando Flamethrower Equipped', 'description', 'image.png'),
		'commando_gl_mp' => array('Commando Grenade Launcher Equipped', 'description', 'image.png'),
		'commando_ir_mp' => array('Commando Infrared Scope', 'description', 'image.png'),
		'commando_ir_dualclip_mp' => array('Commando Infrared Scope & Dual Mag', 'description', 'image.png'),
		'commando_ir_extclip_mp' => array('Commando Infrared Scope & Extended Mag', 'description', 'image.png'),
		'commando_ir_silencer_mp' => array('Commando Infrared Scope & Suppressor', 'description', 'image.png'),
		'commando_mk_mp' => array('Commando Masterkey Equipped', 'description', 'image.png'),
		'commando_reflex_mp' => array('Commando Reflex Sight', 'description', 'image.png'),
		'commando_reflex_dualclip_mp' => array('Commando Reflex Sight & Dual Mag', 'description', 'image.png'),
		'commando_reflex_extclip_mp' => array('Commando Reflex Sight & Extended Mag', 'description', 'image.png'),
		'commando_reflex_silencer_mp' => array('Commando Reflex Sight & Suppressor', 'description', 'image.png'),
		'commando_silencer_mp' => array('Commando Suppressor', 'description', 'image.png'),

		//G11
		'g11_mp' => array('G11', 'description', 'image.png'),
		'g11_lps_mp' => array('G11 Low Powered Scope', 'description', 'image.png'),
		'g11_vzoom_mp' => array('G11 Variable Zoom', 'description', 'image.png'),

		//*********************
		//Shotguns
		//*********************

		//OLYMPIA
		'rottweil72_mp' => array('Olympia', 'description', 'image.png'),

		//STAKEOUT
		'ithaca_mp' => array('Stakeout', 'description', 'image.png'),
		'ithaca_grip_mp' => array('Stakeout Grip', 'description', 'image.png'),

		//SPAS-12
		'spas_mp' => array('SPAS-12', 'description', 'image.png'),
		'spas_silencer_mp' => array('SPAS-12 Suppressor', 'description', 'image.png'),

		//HS10
		'hs10_mp' => array('HS10', 'description', 'image.png'),
		'hs10dw_mp' => array('HS10 Dual Wield', 'description', 'image.png'),

		//*********************
		//Light Machine Guns
		//*********************

		//HK21
		'hk21_mp' => array('HK21', 'description', 'image.png'),
		'hk21_acog_grip_mp' => array('HK21 ACOG Sight & Grip', 'description', 'image.png'),
		'hk21_acog_mp' => array('HK21 ACOG Sight', 'description', 'image.png'),
		'hk21_acog_dualclip_mp' => array('HK21 ACOG Sight & Dual Mag', 'description', 'image.png'),
		'hk21_acog_extclip_mp' => array('HK21 ACOG Sight & Extended Mag', 'description', 'image.png'),
		'hk21_dualclip_mp' => array('HK21 Dual Mag', 'description', 'image.png'),
		'hk21_elbit_mp' => array('HK21 Red Dot Sight', 'description', 'image.png'),
		'hk21_elbit_dualclip_mp' => array('HK21 Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'hk21_elbit_extclip_mp' => array('HK21 Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'hk21_elbit_grip_mp' => array('HK21 Red Dot Sight & Grip', 'description', 'image.png'),
		'hk21_extclip_mp' => array('HK21 Extended Mag', 'description', 'image.png'),
		'hk21_grip_mp' => array('HK21 Grip', 'description', 'image.png'),
		'hk21_grip_extclip_mp' => array('HK21 Grip & Extended Mag', 'description', 'image.png'),
		'hk21_ir_grip_mp' => array('HK21 Infrared Scope & Grip', 'description', 'image.png'),
		'hk21_ir_mp' => array('HK21 Infrared Scope', 'description', 'image.png'),
		'hk21_reflex_mp' => array('HK21 Reflex Sight', 'description', 'image.png'),
		'hk21_reflex_extclip_mp' => array('HK21 Reflex Sight & Extended Mag', 'description', 'image.png'),
		'hk21_reflex_grip_mp' => array('HK21 Reflex Sight & Grip', 'description', 'image.png'),

		//RPK
		'rpk_mp' => array('RPK', 'description', 'image.png'),
		'rpk_acog_grip_mp' => array('RPK ACOG Sight & Grip', 'description', 'image.png'),
		'rpk_acog_mp' => array('RPK ACOG Sight', 'description', 'image.png'),
		'rpk_acog_dualclip_mp' => array('RPK ACOG Sight & Dual Mag', 'description', 'image.png'),
		'rpk_acog_extclip_mp' => array('RPK ACOG Sight & Extended Mag', 'description', 'image.png'),
		'rpk_dualclip_mp' => array('RPK Dual Mag', 'description', 'image.png'),
		'rpk_elbit_mp' => array('RPK Red Dot Sight', 'description', 'image.png'),
		'rpk_elbit_dualclip_mp' => array('RPK Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'rpk_elbit_extclip_mp' => array('RPK Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'rpk_elbit_grip_mp' => array('RPK Red Dot Sight & Grip', 'description', 'image.png'),
		'rpk_extclip_mp' => array('RPK Extended Mag', 'description', 'image.png'),
		'rpk_grip_mp' => array('RPK Grip', 'description', 'image.png'),
		'rpk_grip_extclip_mp' => array('RPK Grip & Extended Mag', 'description', 'image.png'),
		'rpk_ir_grip_mp' => array('RPK Infrared Scope & Grip', 'description', 'image.png'),
		'rpk_ir_mp' => array('RPK Infrared Scope', 'description', 'image.png'),
		'rpk_ir_dualclip_mp' => array('RPK Infrared Scope & Dual Mag', 'description', 'image.png'),
		'rpk_reflex_mp' => array('RPK Reflex Sight', 'description', 'image.png'),
		'rpk_reflex_dualclip_mp' => array('RPK Reflex Sight & Dual Mag', 'description', 'image.png'),
		'rpk_reflex_extclip_mp' => array('RPK Reflex Sight & Extended Mag', 'description', 'image.png'),
		'rpk_reflex_grip_mp' => array('RPK Reflex Sight & Grip', 'description', 'image.png'),

		//M60
		'm60_mp' => array('M60', 'description', 'image.png'),
		'm60_acog_grip_mp' => array('M60 ACOG Sight & Grip', 'description', 'image.png'),
		'm60_acog_mp' => array('M60 ACOG Sight', 'description', 'image.png'),
		'm60_acog_dualclip_mp' => array('M60 ACOG Sight & Dual Mag', 'description', 'image.png'),
		'm60_acog_extclip_mp' => array('M60 ACOG Sight & Extended Mag', 'description', 'image.png'),
		'm60_dualclip_mp' => array('M60 Dual Mag', 'description', 'image.png'),
		'm60_elbit_mp' => array('M60 Red Dot Sight', 'description', 'image.png'),
		'm60_elbit_dualclip_mp' => array('M60 Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'm60_elbit_extclip_mp' => array('M60 Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'm60_elbit_grip_mp' => array('M60 Red Dot Sight & Grip', 'description', 'image.png'),
		'm60_extclip_mp' => array('M60 Extended Mag', 'description', 'image.png'),
		'm60_grip_mp' => array('M60 Grip', 'description', 'image.png'),
		'm60_grip_extclip_mp' => array('M60 Grip & Extended Mag', 'description', 'image.png'),
		'm60_ir_grip_mp' => array('M60 Infrared Scope & Grip', 'description', 'image.png'),
		'm60_ir_mp' => array('M60 Infrared Scope', 'description', 'image.png'),
		'm60_reflex_mp' => array('M60 Reflex Sight', 'description', 'image.png'),
		'm60_reflex_extclip_mp' => array('M60 Reflex Sight & Extended Mag', 'description', 'image.png'),
		'm60_reflex_grip_mp' => array('M60 Reflex Sight & Grip', 'description', 'image.png'),

		//STONER63
		'stoner63_mp' => array('Stoner63', 'description', 'image.png'),
		'stoner63_acog_grip_mp' => array('Stoner63 ACOG Sight & Grip', 'description', 'image.png'),
		'stoner63_acog_mp' => array('Stoner63 ACOG Sight', 'description', 'image.png'),
		'stoner63_acog_dualclip_mp' => array('Stoner63 ACOG Sight & Dual Mag', 'description', 'image.png'),
		'stoner63_acog_extclip_mp' => array('Stoner63 ACOG Sight & Extended Mag', 'description', 'image.png'),
		'stoner63_dualclip_mp' => array('Stoner63 Dual Mag', 'description', 'image.png'),
		'stoner63_elbit_mp' => array('Stoner63 Red Dot Sight', 'description', 'image.png'),
		'stoner63_elbit_dualclip_mp' => array('Stoner63 Red Dot Sight & Dual Mag', 'description', 'image.png'),
		'stoner63_elbit_extclip_mp' => array('Stoner63 Red Dot Sight & Extended Mag', 'description', 'image.png'),
		'stoner63_elbit_grip_mp' => array('Stoner63 Red Dot Sight & Grip', 'description', 'image.png'),
		'stoner63_extclip_mp' => array('Stoner63 Extended Mag', 'description', 'image.png'),
		'stoner63_grip_mp' => array('Stoner63 Grip', 'description', 'image.png'),
		'stoner63_grip_extclip_mp' => array('Stoner63 Grip & Extended Mag', 'description', 'image.png'),
		'stoner63_ir_grip_mp' => array('Stoner63 Infrared Scope & Grip', 'description', 'image.png'),
		'stoner63_ir_mp' => array('Stoner63 Infrared Scope', 'description', 'image.png'),
		'stoner63_ir_extclip_mp' => array('Stoner63 Infrared Scope & Dual Mag', 'description', 'image.png'),
		'stoner63_reflex_mp' => array('Stoner63 Reflex Sight', 'description', 'image.png'),
		'stoner63_reflex_extclip_mp' => array('Stoner63 Reflex Sight & Extended Mag', 'description', 'image.png'),
		'stoner63_reflex_grip_mp' => array('Stoner63 Reflex Sight & Grip', 'description', 'image.png'),

		//*********************
		//Sniper Rifles
		//*********************

		//DRAGUNOV
		'dragunov_mp' => array('Dragunov', 'description', 'image.png'),
		'dragunov_acog_mp' => array('Dragunov ACOG Sight', 'description', 'image.png'),
		'dragunov_acog_extclip_mp' => array('Dragunov ACOG Sight & Extended Mag', 'description', 'image.png'),
		'dragunov_acog_silencer_mp' => array('Dragunov ACOG Sight & Suppressor', 'description', 'image.png'),
		'dragunov_extclip_mp' => array('Dragunov Extended Mag', 'description', 'image.png'),
		'dragunov_extclip_silencer_mp' => array('Dragunov Extended Mag & Suppressor', 'description', 'image.png'),
		'dragunov_ir_mp' => array('Dragunov Infrared Scope', 'description', 'image.png'),
		'dragunov_ir_extclip_mp' => array('Dragunov Infrared Scope & Extended Mag', 'description', 'image.png'),
		'dragunov_ir_silencer_mp' => array('Dragunov Infrared Scope & Suppressor', 'description', 'image.png'),
		'dragunov_silencer_mp' => array('Dragunov Suppressor', 'description', 'image.png'),
		'dragunov_vzoom_mp' => array('Dragunov Variable Zoom', 'description', 'image.png'),
		'dragunov_vzoom_extclip_mp' => array('Dragunov Variable Zoom & Extended Mag', 'description', 'image.png'),
		'dragunov_vzoom_silencer_mp' => array('Dragunov Variable Zoom & Suppressor', 'description', 'image.png'),

		//WA2000
		'wa2000_mp' => array('WA2000', 'description', 'image.png'),
		'wa2000_acog_mp' => array('WA2000 ACOG Sight', 'description', 'image.png'),
		'wa2000_acog_extclip_mp' => array('WA2000 ACOG Sight & Extended Mag', 'description', 'image.png'),
		'wa2000_acog_silencer_mp' => array('WA2000 ACOG Sight & Suppressor', 'description', 'image.png'),
		'wa2000_extclip_mp' => array('WA2000 Extended Mag', 'description', 'image.png'),
		'wa2000_extclip_silencer_mp' => array('WA2000 Extended Mag & Suppressor', 'description', 'image.png'),
		'wa2000_ir_mp' => array('WA2000 Infrared Scope', 'description', 'image.png'),
		'wa2000_ir_extclip_mp' => array('WA2000 Infrared Scope & Extended Mag', 'description', 'image.png'),
		'wa2000_ir_silencer_mp' => array('WA2000 Infrared Scope & Suppressor', 'description', 'image.png'),
		'wa2000_silencer_mp' => array('WA2000 Suppressor', 'description', 'image.png'),
		'wa2000_vzoom_mp' => array('WA2000 Variable Zoom', 'description', 'image.png'),
		'wa2000_vzoom_extclip_mp' => array('WA2000 Variable Zoom & Extended Mag', 'description', 'image.png'),
		'wa2000_vzoom_silencer_mp' => array('WA2000 Variable Zoom & Suppressor', 'description', 'image.png'),

		//L96A1
		'l96a1_mp' => array('L96A1', 'description', 'image.png'),
		'l96a1_acog_mp' => array('L96A1 ACOG Sight', 'description', 'image.png'),
		'l96a1_acog_extclip_mp' => array('L96A1 ACOG Sight & Extended Mag', 'description', 'image.png'),
		'l96a1_acog_silencer_mp' => array('L96A1 ACOG Sight & Suppressor', 'description', 'image.png'),
		'l96a1_extclip_mp' => array('L96A1 Extended Mag', 'description', 'image.png'),
		'l96a1_extclip_silencer_mp' => array('L96A1 Extended Mag & Suppressor', 'description', 'image.png'),
		'l96a1_ir_mp' => array('L96A1 Infrared Scope', 'description', 'image.png'),
		'l96a1_ir_extclip_mp' => array('L96A1 Infrared Scope & Extended Mag', 'description', 'image.png'),
		'l96a1_ir_silencer_mp' => array('L96A1 Infrared Scope & Suppressor', 'description', 'image.png'),
		'l96a1_silencer_mp' => array('L96A1 Suppressor', 'description', 'image.png'),
		'l96a1_vzoom_mp' => array('L96A1 Variable Zoom', 'description', 'image.png'),
		'l96a1_vzoom_extclip_mp' => array('L96A1 Variable Zoom & Extended Mag', 'description', 'image.png'),
		'l96a1_vzoom_silencer_mp' => array('L96A1 Variable Zoom & Suppressor', 'description', 'image.png'),

		//PSG1
		'psg1_mp' => array('PSG1', 'description', 'image.png'),
		'psg1_acog_mp' => array('PSG1 ACOG Sight', 'description', 'image.png'),
		'psg1_acog_extclip_mp' => array('PSG1 ACOG Sight & Extended Mag', 'description', 'image.png'),
		'psg1_acog_silencer_mp' => array('PSG1 ACOG Sight & Suppressor', 'description', 'image.png'),
		'psg1_extclip_mp' => array('PSG1 Extended Mag', 'description', 'image.png'),
		'psg1_extclip_silencer_mp' => array('PSG1 Extended Mag & Suppressor', 'description', 'image.png'),
		'psg1_ir_mp' => array('PSG1 Infrared Scope', 'description', 'image.png'),
		'psg1_ir_extclip_mp' => array('PSG1 Infrared Scope & Extended Mag', 'description', 'image.png'),
		'psg1_ir_silencer_mp' => array('PSG1 Infrared Scope & Suppressor', 'description', 'image.png'),
		'psg1_silencer_mp' => array('PSG1 Suppressor', 'description', 'image.png'),
		'psg1_vzoom_mp' => array('PSG1 Variable Zoom', 'description', 'image.png'),
		'psg1_vzoom_extclip_mp' => array('PSG1 Variable Zoom & Extended Mag', 'description', 'image.png'),
		'psg1_vzoom_silencer_mp' => array('PSG1 Variable Zoom & Suppressor', 'description', 'image.png'),

		//*********************
		//Pistols
		//*********************

		//ASP
		'asp_mp' => array('M1911', 'description', 'image.png'),
		'aspdw_mp' => array('M1911 Dual Wield', 'description', 'image.png'),
		'asp_auto_mp' => array('M1911 Full Auto Upgrade', 'description', 'image.png'),
		'asp_extclip_mp' => array('M1911 Extended Mag', 'description', 'image.png'),
		'asp_silencer_mp' => array('M1911 Suppressor', 'description', 'image.png'),
		'asp_upgradesight_mp' => array('M1911 Upgraded Iron Sights', 'description', 'image.png'),

		//M1911
		'm1911_mp' => array('M1911', 'description', 'image.png'),
		'm1911dw_mp' => array('M1911 Dual Wield', 'description', 'image.png'),
		'm1911_auto_mp' => array('M1911 Full Auto Upgrade', 'description', 'image.png'),
		'm1911_extclip_mp' => array('M1911 Extended Mag', 'description', 'image.png'),
		'm1911_silencer_mp' => array('M1911 Suppressor', 'description', 'image.png'),
		'm1911_upgradesight_mp' => array('M1911 Upgraded Iron Sights', 'description', 'image.png'),

		//MAKAROV
		'makarov_mp' => array('M1911', 'description', 'image.png'),
		'makarovdw_mp' => array('M1911 Dual Wield', 'description', 'image.png'),
		'makarov_auto_mp' => array('M1911 Full Auto Upgrade', 'description', 'image.png'),
		'makarov_extclip_mp' => array('M1911 Extended Mag', 'description', 'image.png'),
		'makarov_silencer_mp' => array('M1911 Suppressor', 'description', 'image.png'),
		'makarov_upgradesight_mp' => array('M1911 Upgraded Iron Sights', 'description', 'image.png'),

		//PYTHON
		'python_mp' => array('Python', 'description', 'image.png'),
		'pythondw_mp' => array('Python Dual Wield', 'description', 'image.png'),
		'python_acog_mp' => array('Python ACOG Sight', 'description', 'image.png'),
		'python_snub_mp' => array('Python Snub Nose', 'description', 'image.png'),
		'python_speed_mp' => array('Python Speed Reloader', 'description', 'image.png'),

		//CZ75
		'cz75_mp' => array('CZ75', 'description', 'image.png'),
		'cz75dw_mp' => array('CZ75 Dual Wield', 'description', 'image.png'),
		'cz75_auto_mp' => array('CZ75 Full Auto Upgrade', 'description', 'image.png'),
		'cz75_extclip_mp' => array('CZ75 Extended Mag', 'description', 'image.png'),
		'cz75_silencer_mp' => array('CZ75 Suppressor', 'description', 'image.png'),
		'cz75_upgradesight_mp' => array('CZ75 Upgraded Iron Sights', 'description', 'image.png'),

		//*********************
		//Launchers
		//*********************

		//M72 LAW
		'm72_law_mp' => array('M72 Law', 'description', 'image.png'),

		//RPG
		'rpg_mp' => array('RPG-7', 'description', 'image.png'),

		//STRELA-3
		'strela_mp' => array('Strela-3', 'description', 'image.png'),

		//CHINA LAKE
		'china_lake_mp' => array('China Lake', 'description', 'image.png'),

		//GRIM REAPER
		'm202_flash_mp' => array('Grim Reaper', 'description', 'image.png'),

		//*********************
		//Specials
		//*********************

		//BALLISTIC KNIFE
		'knife_ballistic_mp' => array('Ballistic Knife', 'description', 'image.png'),

		//CROSSBOW
		'crossbow_explosive_mp' => array('Crossbow Explosive', 'description', 'image.png'),
		'crossbow_mp' => array('Crossbow', 'description', 'image.png'),
		'explosive_bolt_mp' => array('Crossbow Explosive', 'description', 'image.png'),

		//*********************
		//Lethal
		//*********************

		//FRAG
		'frag_grenade_mp' => array('Frag Grenade', 'description', 'image.png'),

		//SEMTEX
		'sticky_grenade_mp' => array('Semtex', 'description', 'image.png'),

		//TOMAHAWK
		'hatchet_mp' => array('Tomahawk', 'description', 'image.png'),

		//*********************
		//Tactical
		//*********************

		//WILLY PETE
		'willy_pete_mp' => array('Willy Pete', 'description', 'image.png'),

		//NOVA GAS
		'tabun_gas_mp' => array('Nova Gas', 'description', 'image.png'),

		//FLASHBANG
		'flash_grenade_mp' => array('Flashbang', 'description', 'image.png'),

		//CONCUSSION
		'concussion_grenade_mp' => array('Concussion Grenade', 'description', 'image.png'),


		//*********************
		//Equipment
		//*********************

		//C4
		'satchel_charge_mp' => array('C4 Explosive', 'description', 'image.png'),

		//CLAYMORE
		'claymore_mp' => array('Claymore', 'description', 'image.png'),

		//*********************
		//Killstreaks
		//*********************
		'rcbomb_mp' => array('RC-XD Car', 'description', 'image.png'),
		'napalm_mp' => array('Napalm Strike', 'description', 'image.png'),
		'auto_gun_turret_mp' => array('Sentry Gun', 'description', 'image.png'),
		'supplydrop_mp' => array('Care Package', 'description', 'image.png'),
		'mortar_mp' => array('Mortar Strike', 'description', 'image.png'),
		'cobra_20mm_comlink_mp' => array('Attack Helicopter', 'description', 'image.png'),
		'm220_tow_mp' => array('Valkyrie Rockets', 'description', 'image.png'),
		'airstrike_mp' => array('Rolling Thunder', 'description', 'image.png'),
		'huey_minigun_gunner_mp' => array('Chopper Gunner', 'description', 'image.png'),
		'dog_bite_mp' => array('Attack Dogs', 'description', 'image.png'),
		'hind_minigun_pilot_firstperson_m' => array('Gunship', 'description', 'image.png'),
		'hind_rockets_firstperson_mp' => array('Gunship Rockets', 'description', 'image.png'),

		//*********************
		//Care Package
		//*********************
		'minigun_mp' => array('Death Machine', 'description', 'image.png'),
		'tow_turret_mp' => array('SAM Turret', 'description', 'image.png'),

		//*********************
		//Grenade Launchers
		//*********************
		'gl_ak74u_mp' => array('AK74U Grenade Launcher', 'description', 'image.png'),
		'gl_famas_mp' => array('Famas Grenade Launcher', 'description', 'image.png'),
		'gl_ak47_mp' => array('AK47 Grenade Launcher', 'description', 'image.png'),
		'gl_fnfal_mp' => array('FN-FAL Grenade Launcher', 'description', 'image.png'),
		'gl_m16_mp' => array('M16 Grenade Launcher', 'description', 'image.png'),
		'gl_aug_mp' => array('AUG Grenade Launcher', 'description', 'image.png'),
		'gl_enfield_mp' => array('Enfield Grenade Launcher', 'description', 'image.png'),
		'gl_commando_mp' => array('Commando Grenade Launcher', 'description', 'image.png'),
		'gl_galil_mp' => array('Galil Grenade Launcher', 'description', 'image.png'),
		'gl_m14_mp' => array('M14 Grenade Launcher', 'description', 'image.png'),

		//*********************
		//Flame Throwers
		//*********************
		'ft_ak47_mp' => array('AK47 Flame Thrower', 'description', 'image.png'),
		'ft_aug_mp' => array('AUG Flame Thrower', 'description', 'image.png'),
		'ft_commando_mp' => array('Commando Flame Thrower', 'description', 'image.png'),
		'ft_enfield_mp' => array('Enfield Flame Thrower', 'description', 'image.png'),
		'ft_famas_mp' => array('Famas Flame Thrower', 'description', 'image.png'),
		'ft_fnfal_mp' => array('FN-FAL Flame Thrower', 'description', 'image.png'),
		'ft_galil_mp' => array('Galil Flame Thrower', 'description', 'image.png'),
		'ft_m14_mp' => array('M14 Flame Thrower', 'description', 'image.png'),
		'ft_m16_mp' => array('M16 Flame Thrower', 'description', 'image.png'),

		//*********************
		//Masterkey
		//*********************
		'mk_ak47_mp' => array('AK47 Masterkey', 'description', 'image.png'),
		'mk_aug_mp' => array('AUG Masterkey', 'description', 'image.png'),
		'mk_commando_mp' => array('Commando Masterkey', 'description', 'image.png'),
		'mk_enfield_mp' => array('Enfield Masterkey', 'description', 'image.png'),
		'mk_famas_mp' => array('Famas Masterkey', 'description', 'image.png'),
		'mk_fnfal_mp' => array('FN-FAL Masterkey', 'description', 'image.png'),
		'mk_galil_mp' => array('Galil Masterkey', 'description', 'image.png'),
		'mk_m14_mp' => array('M14 Masterkey', 'description', 'image.png'),
		'mk_m16_mp' => array('M16 Masterkey', 'description', 'image.png'),

		//*********************
		//Misc
		//*********************
		'mod_melee' => array('Knife', 'description', 'image.png'),
		'defaultweapon_mp' => array('Default Weapon', 'description', 'image.png'),
		'destructible_car_mp' => array('Vehicle Explosion', 'description', 'image.png'),
		'explodable_barrel_mp' => array('Barrel Explosion', 'description', 'image.png'),
		'briefcase_bomb_mp' => array('Briefcase Bomb', 'description', 'image.png'),
		'mod_falling' => array('Falling', 'description', 'image.png'),

		//'nightingale_mp' => array('', 'description', 'image.png'), ???

		//No weapon?
		'none' => array('Bad luck...', 'description', 'image.png'),
	),
//*********************
// Bodypart names
//*********************
	'body_parts' => array(
		/**
		 * fixed_name => array ('console_name' => 'Easy Name')
		 * DO NOT CHANGE 'fixed_name's
		 */
		'head' => array('head' => 'Head'),
		'neck' => array('neck' => 'Neck'),
		'torso_lower' => array('torso_lower' => 'Abdomen'),
		'torso_upper' => array('torso_upper' => 'Chest'),
		'left_arm_upper' => array('left_arm_upper' => 'Left Arm Upper'),
		'left_arm_lower' => array('left_arm_lower' => 'Left Arm Lower'),
		'left_hand' => array('left_hand' => 'Left Hand'),
		'right_arm_upper' => array('right_arm_upper' => 'Right Arm Upper'),
		'right_arm_lower' => array('right_arm_lower' => 'Right Arm Lower'),
		'right_hand' => array('right_hand' => 'Right Hand'),
		'left_leg_upper' => array('left_leg_upper' => 'Left Leg Upper'),
		'left_leg_lower' => array('left_leg_lower' => 'Left Leg Lower'),
		'left_foot' => array('left_foot' => 'Left Foot'),
		'right_leg_upper' => array('right_leg_upper' => 'Right Leg Upper'),
		'right_leg_lower' => array('right_leg_lower' => 'Right Leg Lower'),
		'right_foot' => array('right_foot' => 'Right Foot'),
		'none' => array('none' => 'Total Disrupt'),
	),

/**
 * Personal Achievements, pins, ribbons, medals
 */
	'achievements' => array(),
);