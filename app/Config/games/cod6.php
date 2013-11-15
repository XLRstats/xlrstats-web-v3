<?php
/***************************************************************************
 * Xlrstats Webmodule
 * Webrfront for XLRstats for B3 (www.bigbrotherbot.com)
 * (c) 2004-2010 www.xlr8or.com (mailto:xlr8or@xlr8or.com)
 ***************************************************************************/

/***************************************************************************
 *  This program is free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Library General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program; if not, write to the Free Software
 *  Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 *
 *  http://www.gnu.org/copyleft/gpl.html
 ***************************************************************************/
$config = array(
	'gameName' => 'Call of Duty: Modern Warfare 2',
);
/*
//*********************
// These are the standard cod:mw2 settings
//*********************

// Teamnames and colors
$team1 = "OpFor / Militia"; // red team
$team2 = "TF 141 / Rangers"; // blue team
$spectators = "Spectators";

//*********************
// Weapons names
//*********************

//*********************
//Assault Rifles
//*********************

//M4A1
$w['m4_mp'] = "M4";
$w['m4_acog_mp'] = "M4 ACOG";
$w['m4_eotech_mp'] = "M4 Holographic Sight";
$w['m4_fmj_mp'] = "M4 FMJ";
$w['m4_gl_mp'] = "M4 Grenade Launcher";
$w['m4_heartbeat_mp'] = "M4 Heartbeat Sensor";
$w['m4_reflex_mp'] = "M4 Reflex";
$w['m4_shotgun_mp'] = "M4 Shotgun";
$w['m4_silencer_mp'] = "M4 Silencer";
$w['m4_thermal_mp'] = "M4 Thermal Scope";
$w['m4_xmags_mp'] = "M4 Extended Mags";
$w['m4_acog_fmj_mp'] = "M4 ACOG & FMJ";
$w['m4_acog_gl_mp'] = "M4 ACOG & Grenade Launcher";
$w['m4_acog_heartbeat_mp'] = "M4 ACOG & Heartbeat Sensor";
$w['m4_acog_shotgun_mp'] = "M4 ACOG & Shotgun";
$w['m4_acog_silencer_mp'] = "M4 ACOG & Silencer";
$w['m4_acog_xmags_mp'] = "M4 ACOG & Extended Mags";
$w['m4_eotech_fmj_mp'] = "M4 Holographic Sight & FMJ";
$w['m4_eotech_gl_mp'] = "M4 Holographic Sight & Grenade Launcher";
$w['m4_eotech_heartbeat_mp'] = "M4 Holographic Sight & Heartbeat Sensor";
$w['m4_eotech_shotgun_mp'] = "M4 Holographic Sight & Shotgun";
$w['m4_eotech_silencer_mp'] = "M4 Holographic Sight & Silencer";
$w['m4_eotech_xmags_mp'] = "M4 Holographic Sight & Extended Mags";
$w['m4_fmj_gl_mp'] = "M4 FMJ & Grenade Launcher";
$w['m4_fmj_heartbeat_mp'] = "M4 FMJ & Heartbeat Sensor";
$w['m4_fmj_reflex_mp'] = "M4 FMJ & Reflex";
$w['m4_fmj_shotgun_mp'] = "M4 FMJ & Shotgun";
$w['m4_fmj_silencer_mp'] = "M4 FMJ & Silencer";
$w['m4_fmj_thermal_mp'] = "M4 FMJ & Thermal Scope";
$w['m4_fmj_xmags_mp'] = "M4 FMJ & Extended Mags";
$w['m4_gl_heartbeat_mp'] = "M4 Grenade Launcer & Heartbeat Sensor";
$w['m4_gl_reflex_mp'] = "M4 Grenade Launcer & Reflex";
$w['m4_gl_silencer_mp'] = "M4 Grenade Launcer & Silencer";
$w['m4_gl_thermal_mp'] = "M4 Grenade Launcer & Thermal Scope";
$w['m4_gl_xmags_mp'] = "M4 Grenade Launcer & Extended Mags";
$w['m4_heartbeat_reflex_mp'] = "M4 Heartbeat Sensor & Reflex";
$w['m4_heartbeat_shotgun_mp'] = "M4 Heartbeat Sensor & Shotgun";
$w['m4_heartbeat_silencer_mp'] = "M4 Heartbeat Sensor & Silencer";
$w['m4_heartbeat_thermal_mp'] = "M4 Heartbeat Sensor & Thermal Scope";
$w['m4_heartbeat_xmags_mp'] = "M4 Heartbeat Sensor & Extended Mags";
$w['m4_reflex_shotgun_mp'] = "M4 Reflex & Shotgun";
$w['m4_reflex_silencer_mp'] = "M4 Reflex & Silencer";
$w['m4_reflex_xmags_mp'] = "M4 Reflex & Extended Mags";
$w['m4_shotgun_silencer_mp'] = "M4 Shotgun & Silencer";
$w['m4_shotgun_thermal_mp'] = "M4 Shotgun & Thermal Scope";
$w['m4_shotgun_xmags_mp'] = "M4 Shotgun & Extended Mags";
$w['m4_silencer_thermal_mp'] = "M4 Silencer & Thermal Scope";
$w['m4_silencer_xmags_mp'] = "M4 Silencer & Extended Mags";
$w['m4_thermal_xmags_mp'] = "M4 Thermal Scope & Extended Mags";
$w['gl_m4_mp'] = "Grenade Launcher M4";
$w['m4_shotgun_attach_mp'] = "M4 Shotgun Attachment";

//AK-47
$w['ak47_mp'] = "AK-47";
$w['ak47_acog_mp'] = "AK-47 ACOG";
$w['ak47_eotech_mp'] = "AK-47 Holographic Sight";
$w['ak47_fmj_mp'] = "AK-47 FMJ";
$w['ak47_gl_mp'] = "AK-47 Grenade Launcher";
$w['ak47_heartbeat_mp'] = "AK-47 Heartbeat Sensor";
$w['ak47_reflex_mp'] = "AK-47 Reflex";
$w['ak47_shotgun_mp'] = "AK-47 Shotgun";
$w['ak47_silencer_mp'] = "AK-47 Silencer";
$w['ak47_thermal_mp'] = "AK-47 Thermal Scope";
$w['ak47_xmags_mp'] = "AK-47 Extended Mags";
$w['ak47_acog_fmj_mp'] = "AK-47 ACOG & FMJ";
$w['ak47_acog_gl_mp'] = "AK-47 ACOG & Grenade Launcher";
$w['ak47_acog_heartbeat_mp'] = "AK-47 ACOG & Heartbeat Sensor";
$w['ak47_acog_shotgun_mp'] = "AK-47 ACOG & Shotgun";
$w['ak47_acog_silencer_mp'] = "AK-47 ACOG & Silencer";
$w['ak47_acog_xmags_mp'] = "AK-47 ACOG & Extended Mags";
$w['ak47_eotech_fmj_mp'] = "AK-47 Holographic Sight & FMJ";
$w['ak47_eotech_gl_mp'] = "AK-47 Holographic Sight & Grenade Launcher";
$w['ak47_eotech_heartbeat_mp'] = "AK-47 Holographic Sight & Heartbeat Sensor";
$w['ak47_eotech_shotgun_mp'] = "AK-47 Holographic Sight & Shotgun";
$w['ak47_eotech_silencer_mp'] = "AK-47 Holographic Sight & Silencer";
$w['ak47_eotech_xmags_mp'] = "AK-47 Holographic Sight & Extended Mags";
$w['ak47_fmj_gl_mp'] = "AK-47 FMJ & Grenade Launcher";
$w['ak47_fmj_heartbeat_mp'] = "AK-47 FMJ & Heartbeat Sensor";
$w['ak47_fmj_reflex_mp'] = "AK-47 FMJ & Reflex";
$w['ak47_fmj_shotgun_mp'] = "AK-47 FMJ & Shotgun";
$w['ak47_fmj_silencer_mp'] = "AK-47 FMJ & Silencer";
$w['ak47_fmj_thermal_mp'] = "AK-47 FMJ & Thermal Scope";
$w['ak47_fmj_xmags_mp'] = "AK-47 FMJ & Extended Mags";
$w['ak47_gl_heartbeat_mp'] = "AK-47 Grenade Launcer & Heartbeat Sensor";
$w['ak47_gl_reflex_mp'] = "AK-47 Grenade Launcer & Reflex";
$w['ak47_gl_silencer_mp'] = "AK-47 Grenade Launcer & Silencer";
$w['ak47_gl_thermal_mp'] = "AK-47 Grenade Launcer & Thermal Scope";
$w['ak47_gl_xmags_mp'] = "AK-47 Grenade Launcer & Extended Mags";
$w['ak47_heartbeat_reflex_mp'] = "AK-47 Heartbeat Sensor & Reflex";
$w['ak47_heartbeat_shotgun_mp'] = "AK-47 Heartbeat Sensor & Shotgun";
$w['ak47_heartbeat_silencer_mp'] = "AK-47 Heartbeat Sensor & Silencer";
$w['ak47_heartbeat_thermal_mp'] = "AK-47 Heartbeat Sensor & Thermal Scope";
$w['ak47_heartbeat_xmags_mp'] = "AK-47 Heartbeat Sensor & Extended Mags";
$w['ak47_reflex_shotgun_mp'] = "AK-47 Reflex & Shotgun";
$w['ak47_reflex_silencer_mp'] = "AK-47 Reflex & Silencer";
$w['ak47_reflex_xmags_mp'] = "AK-47 Reflex & Extended Mags";
$w['ak47_shotgun_silencer_mp'] = "AK-47 Shotgun & Silencer";
$w['ak47_shotgun_thermal_mp'] = "AK-47 Shotgun & Thermal Scope";
$w['ak47_shotgun_xmags_mp'] = "AK-47 Shotgun & Extended Mags";
$w['ak47_silencer_thermal_mp'] = "AK-47 Silencer & Thermal Scope";
$w['ak47_silencer_xmags_mp'] = "AK-47 Silencer & Extended Mags";
$w['ak47_thermal_xmags_mp'] = "AK-47 Thermal Scope & Extended Mags";
$w['gl_ak47_mp'] = "Grenade Launcher AK-47";
$w['ak47_shotgun_attach_mp'] = "AK-47 Shotgun Attachment";

//F2000
$w['fn2000_mp'] = "F2000";
$w['fn2000_acog_mp'] = "F2000 ACOG";
$w['fn2000_eotech_mp'] = "F2000 Holographic Sight";
$w['fn2000_fmj_mp'] = "F2000 FMJ";
$w['fn2000_gl_mp'] = "F2000 Grenade Launcher";
$w['fn2000_heartbeat_mp'] = "F2000 Heartbeat Sensor";
$w['fn2000_reflex_mp'] = "F2000 Reflex";
$w['fn2000_shotgun_mp'] = "F2000 Shotgun";
$w['fn2000_silencer_mp'] = "F2000 Silencer";
$w['fn2000_thermal_mp'] = "F2000 Thermal Scope";
$w['fn2000_xmags_mp'] = "F2000 Extended Mags";
$w['fn2000_acog_fmj_mp'] = "F2000 ACOG & FMJ";
$w['fn2000_acog_gl_mp'] = "F2000 ACOG & Grenade Launcher";
$w['fn2000_acog_heartbeat_mp'] = "F2000 ACOG & Heartbeat Sensor";
$w['fn2000_acog_shotgun_mp'] = "F2000 ACOG & Shotgun";
$w['fn2000_acog_silencer_mp'] = "F2000 ACOG & Silencer";
$w['fn2000_acog_xmags_mp'] = "F2000 ACOG & Extended Mags";
$w['fn2000_eotech_fmj_mp'] = "F2000 Holographic Sight & FMJ";
$w['fn2000_eotech_gl_mp'] = "F2000 Holographic Sight & Grenade Launcher";
$w['fn2000_eotech_heartbeat_mp'] = "F2000 Holographic Sight & Heartbeat Sensor";
$w['fn2000_eotech_shotgun_mp'] = "F2000 Holographic Sight & Shotgun";
$w['fn2000_eotech_silencer_mp'] = "F2000 Holographic Sight & Silencer";
$w['fn2000_eotech_xmags_mp'] = "F2000 Holographic Sight & Extended Mags";
$w['fn2000_fmj_gl_mp'] = "F2000 FMJ & Grenade Launcher";
$w['fn2000_fmj_heartbeat_mp'] = "F2000 FMJ & Heartbeat Sensor";
$w['fn2000_fmj_reflex_mp'] = "F2000 FMJ & Reflex";
$w['fn2000_fmj_shotgun_mp'] = "F2000 FMJ & Shotgun";
$w['fn2000_fmj_silencer_mp'] = "F2000 FMJ & Silencer";
$w['fn2000_fmj_thermal_mp'] = "F2000 FMJ & Thermal Scope";
$w['fn2000_fmj_xmags_mp'] = "F2000 FMJ & Extended Mags";
$w['fn2000_gl_heartbeat_mp'] = "F2000 Grenade Launcer & Heartbeat Sensor";
$w['fn2000_gl_reflex_mp'] = "F2000 Grenade Launcer & Reflex";
$w['fn2000_gl_silencer_mp'] = "F2000 Grenade Launcer & Silencer";
$w['fn2000_gl_thermal_mp'] = "F2000 Grenade Launcer & Thermal Scope";
$w['fn2000_gl_xmags_mp'] = "F2000 Grenade Launcer & Extended Mags";
$w['fn2000_heartbeat_reflex_mp'] = "F2000 Heartbeat Sensor & Reflex";
$w['fn2000_heartbeat_shotgun_mp'] = "F2000 Heartbeat Sensor & Shotgun";
$w['fn2000_heartbeat_silencer_mp'] = "F2000 Heartbeat Sensor & Silencer";
$w['fn2000_heartbeat_thermal_mp'] = "F2000 Heartbeat Sensor & Thermal Scope";
$w['fn2000_heartbeat_xmags_mp'] = "F2000 Heartbeat Sensor & Extended Mags";
$w['fn2000_reflex_shotgun_mp'] = "F2000 Reflex & Shotgun";
$w['fn2000_reflex_silencer_mp'] = "F2000 Reflex & Silencer";
$w['fn2000_reflex_xmags_mp'] = "F2000 Reflex & Extended Mags";
$w['fn2000_shotgun_silencer_mp'] = "F2000 Shotgun & Silencer";
$w['fn2000_shotgun_thermal_mp'] = "F2000 Shotgun & Thermal Scope";
$w['fn2000_shotgun_xmags_mp'] = "F2000 Shotgun & Extended Mags";
$w['fn2000_silencer_thermal_mp'] = "F2000 Silencer & Thermal Scope";
$w['fn2000_silencer_xmags_mp'] = "F2000 Silencer & Extended Mags";
$w['fn2000_thermal_xmags_mp'] = "F2000 Thermal Scope & Extended Mags";
$w['gl_fn2000_mp'] = "Grenade Launcher F2000";
$w['fn2000_shotgun_attach_mp'] = "F2000 Shotgun Attachment";

//ACR
$w['masada_mp'] = "ACR";
$w['masada_acog_mp'] = "ACR ACOG";
$w['masada_eotech_mp'] = "ACR Holographic Sight";
$w['masada_fmj_mp'] = "ACR FMJ";
$w['masada_gl_mp'] = "ACR Grenade Launcher";
$w['masada_heartbeat_mp'] = "ACR Heartbeat Sensor";
$w['masada_reflex_mp'] = "ACR Reflex";
$w['masada_shotgun_mp'] = "ACR Shotgun";
$w['masada_silencer_mp'] = "ACR Silencer";
$w['masada_thermal_mp'] = "ACR Thermal Scope";
$w['masada_xmags_mp'] = "ACR Extended Mags";
$w['masada_acog_fmj_mp'] = "ACR ACOG & FMJ";
$w['masada_acog_gl_mp'] = "ACR ACOG & Grenade Launcher";
$w['masada_acog_heartbeat_mp'] = "ACR ACOG & Heartbeat Sensor";
$w['masada_acog_shotgun_mp'] = "ACR ACOG & Shotgun";
$w['masada_acog_silencer_mp'] = "ACR ACOG & Silencer";
$w['masada_acog_xmags_mp'] = "ACR ACOG & Extended Mags";
$w['masada_eotech_fmj_mp'] = "ACR Holographic Sight & FMJ";
$w['masada_eotech_gl_mp'] = "ACR Holographic Sight & Grenade Launcher";
$w['masada_eotech_heartbeat_mp'] = "ACR Holographic Sight & Heartbeat Sensor";
$w['masada_eotech_shotgun_mp'] = "ACR Holographic Sight & Shotgun";
$w['masada_eotech_silencer_mp'] = "ACR Holographic Sight & Silencer";
$w['masada_eotech_xmags_mp'] = "ACR Holographic Sight & Extended Mags";
$w['masada_fmj_gl_mp'] = "ACR FMJ & Grenade Launcher";
$w['masada_fmj_heartbeat_mp'] = "ACR FMJ & Heartbeat Sensor";
$w['masada_fmj_reflex_mp'] = "ACR FMJ & Reflex";
$w['masada_fmj_shotgun_mp'] = "ACR FMJ & Shotgun";
$w['masada_fmj_silencer_mp'] = "ACR FMJ & Silencer";
$w['masada_fmj_thermal_mp'] = "ACR FMJ & Thermal Scope";
$w['masada_fmj_xmags_mp'] = "ACR FMJ & Extended Mags";
$w['masada_gl_heartbeat_mp'] = "ACR Grenade Launcer & Heartbeat Sensor";
$w['masada_gl_reflex_mp'] = "ACR Grenade Launcer & Reflex";
$w['masada_gl_silencer_mp'] = "ACR Grenade Launcer & Silencer";
$w['masada_gl_thermal_mp'] = "ACR Grenade Launcer & Thermal Scope";
$w['masada_gl_xmags_mp'] = "ACR Grenade Launcer & Extended Mags";
$w['masada_heartbeat_reflex_mp'] = "ACR Heartbeat Sensor & Reflex";
$w['masada_heartbeat_shotgun_mp'] = "ACR Heartbeat Sensor & Shotgun";
$w['masada_heartbeat_silencer_mp'] = "ACR Heartbeat Sensor & Silencer";
$w['masada_heartbeat_thermal_mp'] = "ACR Heartbeat Sensor & Thermal Scope";
$w['masada_heartbeat_xmags_mp'] = "ACR Heartbeat Sensor & Extended Mags";
$w['masada_reflex_shotgun_mp'] = "ACR Reflex & Shotgun";
$w['masada_reflex_silencer_mp'] = "ACR Reflex & Silencer";
$w['masada_reflex_xmags_mp'] = "ACR Reflex & Extended Mags";
$w['masada_shotgun_silencer_mp'] = "ACR Shotgun & Silencer";
$w['masada_shotgun_thermal_mp'] = "ACR Shotgun & Thermal Scope";
$w['masada_shotgun_xmags_mp'] = "ACR Shotgun & Extended Mags";
$w['masada_silencer_thermal_mp'] = "ACR Silencer & Thermal Scope";
$w['masada_silencer_xmags_mp'] = "ACR Silencer & Extended Mags";
$w['masada_thermal_xmags_mp'] = "ACR Thermal Scope & Extended Mags";
$w['gl_masada_mp'] = "Grenade Launcher ACR";
$w['masada_shotgun_attach_mp'] = "ACR Shotgun Attachment";

//Famas
$w['famas_mp'] = "Famas";
$w['famas_acog_mp'] = "Famas ACOG";
$w['famas_eotech_mp'] = "Famas Holographic Sight";
$w['famas_fmj_mp'] = "Famas FMJ";
$w['famas_gl_mp'] = "Famas Grenade Launcher";
$w['famas_heartbeat_mp'] = "Famas Heartbeat Sensor";
$w['famas_reflex_mp'] = "Famas Reflex";
$w['famas_shotgun_mp'] = "Famas Shotgun";
$w['famas_silencer_mp'] = "Famas Silencer";
$w['famas_thermal_mp'] = "Famas Thermal Scope";
$w['famas_xmags_mp'] = "Famas Extended Mags";
$w['famas_acog_fmj_mp'] = "Famas ACOG & FMJ";
$w['famas_acog_gl_mp'] = "Famas ACOG & Grenade Launcher";
$w['famas_acog_heartbeat_mp'] = "Famas ACOG & Heartbeat Sensor";
$w['famas_acog_shotgun_mp'] = "Famas ACOG & Shotgun";
$w['famas_acog_silencer_mp'] = "Famas ACOG & Silencer";
$w['famas_acog_xmags_mp'] = "Famas ACOG & Extended Mags";
$w['famas_eotech_fmj_mp'] = "Famas Holographic Sight & FMJ";
$w['famas_eotech_gl_mp'] = "Famas Holographic Sight & Grenade Launcher";
$w['famas_eotech_heartbeat_mp'] = "Famas Holographic Sight & Heartbeat Sensor";
$w['famas_eotech_shotgun_mp'] = "Famas Holographic Sight & Shotgun";
$w['famas_eotech_silencer_mp'] = "Famas Holographic Sight & Silencer";
$w['famas_eotech_xmags_mp'] = "Famas Holographic Sight & Extended Mags";
$w['famas_fmj_gl_mp'] = "Famas FMJ & Grenade Launcher";
$w['famas_fmj_heartbeat_mp'] = "Famas FMJ & Heartbeat Sensor";
$w['famas_fmj_reflex_mp'] = "Famas FMJ & Reflex";
$w['famas_fmj_shotgun_mp'] = "Famas FMJ & Shotgun";
$w['famas_fmj_silencer_mp'] = "Famas FMJ & Silencer";
$w['famas_fmj_thermal_mp'] = "Famas FMJ & Thermal Scope";
$w['famas_fmj_xmags_mp'] = "Famas FMJ & Extended Mags";
$w['famas_gl_heartbeat_mp'] = "Famas Grenade Launcer & Heartbeat Sensor";
$w['famas_gl_reflex_mp'] = "Famas Grenade Launcer & Reflex";
$w['famas_gl_silencer_mp'] = "Famas Grenade Launcer & Silencer";
$w['famas_gl_thermal_mp'] = "Famas Grenade Launcer & Thermal Scope";
$w['famas_gl_xmags_mp'] = "Famas Grenade Launcer & Extended Mags";
$w['famas_heartbeat_reflex_mp'] = "Famas Heartbeat Sensor & Reflex";
$w['famas_heartbeat_shotgun_mp'] = "Famas Heartbeat Sensor & Shotgun";
$w['famas_heartbeat_silencer_mp'] = "Famas Heartbeat Sensor & Silencer";
$w['famas_heartbeat_thermal_mp'] = "Famas Heartbeat Sensor & Thermal Scope";
$w['famas_heartbeat_xmags_mp'] = "Famas Heartbeat Sensor & Extended Mags";
$w['famas_reflex_shotgun_mp'] = "Famas Reflex & Shotgun";
$w['famas_reflex_silencer_mp'] = "Famas Reflex & Silencer";
$w['famas_reflex_xmags_mp'] = "Famas Reflex & Extended Mags";
$w['famas_shotgun_silencer_mp'] = "Famas Shotgun & Silencer";
$w['famas_shotgun_thermal_mp'] = "Famas Shotgun & Thermal Scope";
$w['famas_shotgun_xmags_mp'] = "Famas Shotgun & Extended Mags";
$w['famas_silencer_thermal_mp'] = "Famas Silencer & Thermal Scope";
$w['famas_silencer_xmags_mp'] = "Famas Silencer & Extended Mags";
$w['famas_thermal_xmags_mp'] = "Famas Thermal Scope & Extended Mags";
$w['gl_famas_mp'] = "Grenade Launcher Famas";
$w['famas_shotgun_attach_mp'] = "Famas Shotgun Attachment";

//FAL
$w['fal_mp'] = "FAL";
$w['fal_acog_mp'] = "FAL ACOG";
$w['fal_eotech_mp'] = "FAL Holographic Sight";
$w['fal_fmj_mp'] = "FAL FMJ";
$w['fal_gl_mp'] = "FAL Grenade Launcher";
$w['fal_heartbeat_mp'] = "FAL Heartbeat Sensor";
$w['fal_reflex_mp'] = "FAL Reflex";
$w['fal_shotgun_mp'] = "FAL Shotgun";
$w['fal_silencer_mp'] = "FAL Silencer";
$w['fal_thermal_mp'] = "FAL Thermal Scope";
$w['fal_xmags_mp'] = "FAL Extended Mags";
$w['fal_acog_fmj_mp'] = "FAL ACOG & FMJ";
$w['fal_acog_gl_mp'] = "FAL ACOG & Grenade Launcher";
$w['fal_acog_heartbeat_mp'] = "FAL ACOG & Heartbeat Sensor";
$w['fal_acog_shotgun_mp'] = "FAL ACOG & Shotgun";
$w['fal_acog_silencer_mp'] = "FAL ACOG & Silencer";
$w['fal_acog_xmags_mp'] = "FAL ACOG & Extended Mags";
$w['fal_eotech_fmj_mp'] = "FAL Holographic Sight & FMJ";
$w['fal_eotech_gl_mp'] = "FAL Holographic Sight & Grenade Launcher";
$w['fal_eotech_heartbeat_mp'] = "FAL Holographic Sight & Heartbeat Sensor";
$w['fal_eotech_shotgun_mp'] = "FAL Holographic Sight & Shotgun";
$w['fal_eotech_silencer_mp'] = "FAL Holographic Sight & Silencer";
$w['fal_eotech_xmags_mp'] = "FAL Holographic Sight & Extended Mags";
$w['fal_fmj_gl_mp'] = "FAL FMJ & Grenade Launcher";
$w['fal_fmj_heartbeat_mp'] = "FAL FMJ & Heartbeat Sensor";
$w['fal_fmj_reflex_mp'] = "FAL FMJ & Reflex";
$w['fal_fmj_shotgun_mp'] = "FAL FMJ & Shotgun";
$w['fal_fmj_silencer_mp'] = "FAL FMJ & Silencer";
$w['fal_fmj_thermal_mp'] = "FAL FMJ & Thermal Scope";
$w['fal_fmj_xmags_mp'] = "FAL FMJ & Extended Mags";
$w['fal_gl_heartbeat_mp'] = "FAL Grenade Launcer & Heartbeat Sensor";
$w['fal_gl_reflex_mp'] = "FAL Grenade Launcer & Reflex";
$w['fal_gl_silencer_mp'] = "FAL Grenade Launcer & Silencer";
$w['fal_gl_thermal_mp'] = "FAL Grenade Launcer & Thermal Scope";
$w['fal_gl_xmags_mp'] = "FAL Grenade Launcer & Extended Mags";
$w['fal_heartbeat_reflex_mp'] = "FAL Heartbeat Sensor & Reflex";
$w['fal_heartbeat_shotgun_mp'] = "FAL Heartbeat Sensor & Shotgun";
$w['fal_heartbeat_silencer_mp'] = "FAL Heartbeat Sensor & Silencer";
$w['fal_heartbeat_thermal_mp'] = "FAL Heartbeat Sensor & Thermal Scope";
$w['fal_heartbeat_xmags_mp'] = "FAL Heartbeat Sensor & Extended Mags";
$w['fal_reflex_shotgun_mp'] = "FAL Reflex & Shotgun";
$w['fal_reflex_silencer_mp'] = "FAL Reflex & Silencer";
$w['fal_reflex_xmags_mp'] = "FAL Reflex & Extended Mags";
$w['fal_shotgun_silencer_mp'] = "FAL Shotgun & Silencer";
$w['fal_shotgun_thermal_mp'] = "FAL Shotgun & Thermal Scope";
$w['fal_shotgun_xmags_mp'] = "FAL Shotgun & Extended Mags";
$w['fal_silencer_thermal_mp'] = "FAL Silencer & Thermal Scope";
$w['fal_silencer_xmags_mp'] = "FAL Silencer & Extended Mags";
$w['fal_thermal_xmags_mp'] = "FAL Thermal Scope & Extended Mags";
$w['gl_fal_mp'] = "Grenade Launcher FAL";
$w['fal_shotgun_attach_mp'] = "FAL Shotgun Attachment";

//Scar-H
$w['scar_mp'] = "Scar-H";
$w['scar_acog_mp'] = "Scar-H ACOG";
$w['scar_eotech_mp'] = "Scar-H Holographic Sight";
$w['scar_fmj_mp'] = "Scar-H FMJ";
$w['scar_gl_mp'] = "Scar-H Grenade Launcher";
$w['scar_heartbeat_mp'] = "Scar-H Heartbeat Sensor";
$w['scar_reflex_mp'] = "Scar-H Reflex";
$w['scar_shotgun_mp'] = "Scar-H Shotgun";
$w['scar_silencer_mp'] = "Scar-H Silencer";
$w['scar_thermal_mp'] = "Scar-H Thermal Scope";
$w['scar_xmags_mp'] = "Scar-H Extended Mags";
$w['scar_acog_fmj_mp'] = "Scar-H ACOG & FMJ";
$w['scar_acog_gl_mp'] = "Scar-H ACOG & Grenade Launcher";
$w['scar_acog_heartbeat_mp'] = "Scar-H ACOG & Heartbeat Sensor";
$w['scar_acog_shotgun_mp'] = "Scar-H ACOG & Shotgun";
$w['scar_acog_silencer_mp'] = "Scar-H ACOG & Silencer";
$w['scar_acog_xmags_mp'] = "Scar-H ACOG & Extended Mags";
$w['scar_eotech_fmj_mp'] = "Scar-H Holographic Sight & FMJ";
$w['scar_eotech_gl_mp'] = "Scar-H Holographic Sight & Grenade Launcher";
$w['scar_eotech_heartbeat_mp'] = "Scar-H Holographic Sight & Heartbeat Sensor";
$w['scar_eotech_shotgun_mp'] = "Scar-H Holographic Sight & Shotgun";
$w['scar_eotech_silencer_mp'] = "Scar-H Holographic Sight & Silencer";
$w['scar_eotech_xmags_mp'] = "Scar-H Holographic Sight & Extended Mags";
$w['scar_fmj_gl_mp'] = "Scar-H FMJ & Grenade Launcher";
$w['scar_fmj_heartbeat_mp'] = "Scar-H FMJ & Heartbeat Sensor";
$w['scar_fmj_reflex_mp'] = "Scar-H FMJ & Reflex";
$w['scar_fmj_shotgun_mp'] = "Scar-H FMJ & Shotgun";
$w['scar_fmj_silencer_mp'] = "Scar-H FMJ & Silencer";
$w['scar_fmj_thermal_mp'] = "Scar-H FMJ & Thermal Scope";
$w['scar_fmj_xmags_mp'] = "Scar-H FMJ & Extended Mags";
$w['scar_gl_heartbeat_mp'] = "Scar-H Grenade Launcer & Heartbeat Sensor";
$w['scar_gl_reflex_mp'] = "Scar-H Grenade Launcer & Reflex";
$w['scar_gl_silencer_mp'] = "Scar-H Grenade Launcer & Silencer";
$w['scar_gl_thermal_mp'] = "Scar-H Grenade Launcer & Thermal Scope";
$w['scar_gl_xmags_mp'] = "Scar-H Grenade Launcer & Extended Mags";
$w['scar_heartbeat_reflex_mp'] = "Scar-H Heartbeat Sensor & Reflex";
$w['scar_heartbeat_shotgun_mp'] = "Scar-H Heartbeat Sensor & Shotgun";
$w['scar_heartbeat_silencer_mp'] = "Scar-H Heartbeat Sensor & Silencer";
$w['scar_heartbeat_thermal_mp'] = "Scar-H Heartbeat Sensor & Thermal Scope";
$w['scar_heartbeat_xmags_mp'] = "Scar-H Heartbeat Sensor & Extended Mags";
$w['scar_reflex_shotgun_mp'] = "Scar-H Reflex & Shotgun";
$w['scar_reflex_silencer_mp'] = "Scar-H Reflex & Silencer";
$w['scar_reflex_xmags_mp'] = "Scar-H Reflex & Extended Mags";
$w['scar_shotgun_silencer_mp'] = "Scar-H Shotgun & Silencer";
$w['scar_shotgun_thermal_mp'] = "Scar-H Shotgun & Thermal Scope";
$w['scar_shotgun_xmags_mp'] = "Scar-H Shotgun & Extended Mags";
$w['scar_silencer_thermal_mp'] = "Scar-H Silencer & Thermal Scope";
$w['scar_silencer_xmags_mp'] = "Scar-H Silencer & Extended Mags";
$w['scar_thermal_xmags_mp'] = "Scar-H Thermal Scope & Extended Mags";
$w['gl_scar_mp'] = "Grenade Launcher Scar-H";
$w['scar_shotgun_attach_mp'] = "Scar-H Shotgun Attachment";

//TAR-21
$w['tavor_mp'] = "TAR-21";
$w['tavor_acog_mp'] = "TAR-21 ACOG";
$w['tavor_eotech_mp'] = "TAR-21 Holographic Sight";
$w['tavor_fmj_mp'] = "TAR-21 FMJ";
$w['tavor_gl_mp'] = "TAR-21 Grenade Launcher";
$w['tavor_heartbeat_mp'] = "TAR-21 Heartbeat Sensor";
$w['tavor_reflex_mp'] = "TAR-21 Reflex";
$w['tavor_shotgun_mp'] = "TAR-21 Shotgun";
$w['tavor_silencer_mp'] = "TAR-21 Silencer";
$w['tavor_thermal_mp'] = "TAR-21 Thermal Scope";
$w['tavor_xmags_mp'] = "TAR-21 Extended Mags";
$w['tavor_acog_fmj_mp'] = "TAR-21 ACOG & FMJ";
$w['tavor_acog_gl_mp'] = "TAR-21 ACOG & Grenade Launcher";
$w['tavor_acog_heartbeat_mp'] = "TAR-21 ACOG & Heartbeat Sensor";
$w['tavor_acog_shotgun_mp'] = "TAR-21 ACOG & Shotgun";
$w['tavor_acog_silencer_mp'] = "TAR-21 ACOG & Silencer";
$w['tavor_acog_xmags_mp'] = "TAR-21 ACOG & Extended Mags";
$w['tavor_eotech_fmj_mp'] = "TAR-21 Holographic Sight & FMJ";
$w['tavor_eotech_gl_mp'] = "TAR-21 Holographic Sight & Grenade Launcher";
$w['tavor_eotech_heartbeat_mp'] = "TAR-21 Holographic Sight & Heartbeat Sensor";
$w['tavor_eotech_shotgun_mp'] = "TAR-21 Holographic Sight & Shotgun";
$w['tavor_eotech_silencer_mp'] = "TAR-21 Holographic Sight & Silencer";
$w['tavor_eotech_xmags_mp'] = "TAR-21 Holographic Sight & Extended Mags";
$w['tavor_fmj_gl_mp'] = "TAR-21 FMJ & Grenade Launcher";
$w['tavor_fmj_heartbeat_mp'] = "TAR-21 FMJ & Heartbeat Sensor";
$w['tavor_fmj_reflex_mp'] = "TAR-21 FMJ & Reflex";
$w['tavor_fmj_shotgun_mp'] = "TAR-21 FMJ & Shotgun";
$w['tavor_fmj_silencer_mp'] = "TAR-21 FMJ & Silencer";
$w['tavor_fmj_thermal_mp'] = "TAR-21 FMJ & Thermal Scope";
$w['tavor_fmj_xmags_mp'] = "TAR-21 FMJ & Extended Mags";
$w['tavor_gl_heartbeat_mp'] = "TAR-21 Grenade Launcer & Heartbeat Sensor";
$w['tavor_gl_reflex_mp'] = "TAR-21 Grenade Launcer & Reflex";
$w['tavor_gl_silencer_mp'] = "TAR-21 Grenade Launcer & Silencer";
$w['tavor_gl_thermal_mp'] = "TAR-21 Grenade Launcer & Thermal Scope";
$w['tavor_gl_xmags_mp'] = "TAR-21 Grenade Launcer & Extended Mags";
$w['tavor_heartbeat_reflex_mp'] = "TAR-21 Heartbeat Sensor & Reflex";
$w['tavor_heartbeat_shotgun_mp'] = "TAR-21 Heartbeat Sensor & Shotgun";
$w['tavor_heartbeat_silencer_mp'] = "TAR-21 Heartbeat Sensor & Silencer";
$w['tavor_heartbeat_thermal_mp'] = "TAR-21 Heartbeat Sensor & Thermal Scope";
$w['tavor_heartbeat_xmags_mp'] = "TAR-21 Heartbeat Sensor & Extended Mags";
$w['tavor_reflex_shotgun_mp'] = "TAR-21 Reflex & Shotgun";
$w['tavor_reflex_silencer_mp'] = "TAR-21 Reflex & Silencer";
$w['tavor_reflex_xmags_mp'] = "TAR-21 Reflex & Extended Mags";
$w['tavor_shotgun_silencer_mp'] = "TAR-21 Shotgun & Silencer";
$w['tavor_shotgun_thermal_mp'] = "TAR-21 Shotgun & Thermal Scope";
$w['tavor_shotgun_xmags_mp'] = "TAR-21 Shotgun & Extended Mags";
$w['tavor_silencer_thermal_mp'] = "TAR-21 Silencer & Thermal Scope";
$w['tavor_silencer_xmags_mp'] = "TAR-21 Silencer & Extended Mags";
$w['tavor_thermal_xmags_mp'] = "TAR-21 Thermal Scope & Extended Mags";
$w['gl_tavor_mp'] = "Grenade Launcher TAR-21";
$w['tavor_shotgun_attach_mp'] = "TAR-21 Shotgun Attachment";

//M16A4
$w['m16_mp'] = "M16A4";
$w['m16_acog_mp'] = "M16A4 ACOG";
$w['m16_eotech_mp'] = "M16A4 Hologhraphic Sight";
$w['m16_fmj_mp'] = "M16A4 FMJ";
$w['m16_gl_mp'] = "M16A4 Grenade Launcher";
$w['m16_heartbeat_mp'] = "M16A4 Heartbeat Sensor";
$w['m16_reflex_mp'] = "M16A4 Reflex";
$w['m16_shotgun_mp'] = "M16A4 Shotgun";
$w['m16_silencer_mp'] = "M16A4 Silencer";
$w['m16_thermal_mp'] = "M16A4 Thermal Scope";
$w['m16_xmags_mp'] = "M16A4 Extended Mags";
$w['m16_acog_fmj_mp'] = "M16A4 ACOG & FMJ";
$w['m16_acog_gl_mp'] = "M16A4 ACOG & Grenade Launcher";
$w['m16_acog_heartbeat_mp'] = "M16A4 ACOG & Heartbeat Sensor";
$w['m16_acog_shotgun_mp'] = "M16A4 ACOG & Shotgun";
$w['m16_acog_silencer_mp'] = "M16A4 ACOG & Silencer";
$w['m16_acog_xmags_mp'] = "M16A4 ACOG & Extended Mags";
$w['m16_eotech_fmj_mp'] = "M16A4 Hologhraphic Sight & FMJ";
$w['m16_eotech_gl_mp'] = "M16A4 Hologhraphic Sight & Grenade Launcher";
$w['m16_eotech_heartbeat_mp'] = "M16A4 Hologhraphic Sight & heartbeat Sensor";
$w['m16_eotech_shotgun_mp'] = "M16A4 Hologhraphic Sight & Shotgun";
$w['m16_eotech_silencer_mp'] = "M16A4 Hologhraphic Sight & Silencer";
$w['m16_eotech_xmags_mp'] = "M16A4 Hologhraphic Sight & Extended Mags";
$w['m16_fmj_gl_mp'] = "M16A4 FMJ & Grenade Launcher";
$w['m16_fmj_heartbeat_mp'] = "M16A4 FMJ & Heartbeat Sensor";
$w['m16_fmj_reflex_mp'] = "M16A4 FMJ & Reflex";
$w['m16_fmj_shotgun_mp'] = "M16A4 FMJ & Shotgun";
$w['m16_fmj_silencer_mp'] = "M16A4 FMJ & Silencer";
$w['m16_reflex_silencer_mp'] = "M16A4 Reflex & Silencer";
$w['gl_m16_mp'] = "Grenade Launcher M16A4";
$w['m16_shotgun_attach_mp'] = "M16A4 Shotgun Attachment";

//*********************
//Sub Machine Guns
//*********************

//MP5K
$w['mp5k_mp'] = "MP5K";
$w['mp5k_acog_mp'] = "MP5K ACOG";
$w['mp5k_akimbo_mp'] = "MP5K Akimbo";
$w['mp5k_eotech_mp'] = "MP5K Holographic Sight";
$w['mp5k_fmj_mp'] = "MP5K FMJ";
$w['mp5k_reflex_mp'] = "MP5K Reflex";
$w['mp5k_rof_mp'] = "MP5K Rapid Fire";
$w['mp5k_silencer_mp'] = "MP5K Silencer";
$w['mp5k_thermal_mp'] = "MP5K Thermal Scope";
$w['mp5k_xmags_mp'] = "MP5K Extended Mags";
$w['mp5k_acog_fmj_mp'] = "MP5K ACOG & FMJ";
$w['mp5k_acog_rof_mp'] = "MP5K ACOG & Rapid Fire";
$w['mp5k_acog_silencer_mp'] = "MP5K ACOG & Silencer";
$w['mp5k_acog_xmags_mp'] = "MP5K ACOG & Extended Mags";
$w['mp5k_akimbo_fmj_mp'] = "MP5K Akimbo FMJ";
$w['mp5k_akimbo_rof_mp'] = "MP5K Akimbo Rapid Fire";
$w['mp5k_akimbo_silencer_mp'] = "MP5K Akimbo Silencer";
$w['mp5k_akimbo_xmags_mp'] = "MP5K Akimbo Extended Mags";
$w['mp5k_eotech_fmj_mp'] = "MP5K Holographic Sight & FMJ";
$w['mp5k_eotech_rof_mp'] = "MP5K Holographic Sight & Rapid Fire";
$w['mp5k_eotech_silencer_mp'] = "MP5K Holographic Sight & Silencer";
$w['mp5k_eotech_xmags_mp'] = "MP5K Holographic Sight & Extended Mags";
$w['mp5k_fmj_reflex_mp'] = "MP5K FMJ & Reflex";
$w['mp5k_fmj_rof_mp'] = "MP5K FMJ & Rapid Fire";
$w['mp5k_fmj_silencer_mp'] = "MP5K FMJ & Silencer";
$w['mp5k_fmj_thermal_mp'] = "MP5K FMJ & Thermal Scope";
$w['mp5k_fmj_xmags_mp'] = "MP5K FMJ & Extended Mags";
$w['mp5k_reflex_rof_mp'] = "MP5K Reflex & Rapid Fire";
$w['mp5k_reflex_silencer_mp'] = "MP5K Reflex & Silencer";
$w['mp5k_reflex_xmags_mp'] = "MP5K Reflex & Extended Mags";
$w['mp5k_rof_silencer_mp'] = "MP5K Rapid Fire & Silencer";
$w['mp5k_rof_thermal_mp'] = "MP5K Rapid Fire & Thermal Scope";
$w['mp5k_rof_xmags_mp'] = "MP5K Rapid Fire & Extended Mags";
$w['mp5k_silencer_thermal_mp'] = "MP5K Silencer & Thermal Scope";
$w['mp5k_silencer_xmags_mp'] = "MP5K Silencer & Extended Mags";
$w['mp5k_thermal_xmags_mp'] = "MP5K Thermal Scope & Extended Mags";

//UMP45
$w['ump45_mp'] = "UMP45";
$w['ump45_acog_mp'] = "UMP45 ACOG";
$w['ump45_akimbo_mp'] = "UMP45 Akimbo";
$w['ump45_eotech_mp'] = "UMP45 Holographic Sight";
$w['ump45_fmj_mp'] = "UMP45 FMJ";
$w['ump45_reflex_mp'] = "UMP45 Reflex";
$w['ump45_rof_mp'] = "UMP45 Rapid Fire";
$w['ump45_silencer_mp'] = "UMP45 Silencer";
$w['ump45_thermal_mp'] = "UMP45 Thermal Scope";
$w['ump45_xmags_mp'] = "UMP45 Extended Mags";
$w['ump45_acog_fmj_mp'] = "UMP45 ACOG & FMJ";
$w['ump45_acog_rof_mp'] = "UMP45 ACOG & Rapid Fire";
$w['ump45_acog_silencer_mp'] = "UMP45 ACOG & Silencer";
$w['ump45_acog_xmags_mp'] = "UMP45 ACOG & Extended Mags";
$w['ump45_akimbo_fmj_mp'] = "UMP45 Akimbo FMJ";
$w['ump45_akimbo_rof_mp'] = "UMP45 Akimbo Rapid Fire";
$w['ump45_akimbo_silencer_mp'] = "UMP45 Akimbo Silencer";
$w['ump45_akimbo_xmags_mp'] = "UMP45 Akimbo Extended Mags";
$w['ump45_eotech_fmj_mp'] = "UMP45 Holographic Sight & FMJ";
$w['ump45_eotech_rof_mp'] = "UMP45 Holographic Sight & Rapid Fire";
$w['ump45_eotech_silencer_mp'] = "UMP45 Holographic Sight & Silencer";
$w['ump45_eotech_xmags_mp'] = "UMP45 Holographic Sight & Extended Mags";
$w['ump45_fmj_reflex_mp'] = "UMP45 FMJ & Reflex";
$w['ump45_fmj_rof_mp'] = "UMP45 FMJ & Rapid Fire";
$w['ump45_fmj_silencer_mp'] = "UMP45 FMJ & Silencer";
$w['ump45_fmj_thermal_mp'] = "UMP45 FMJ & Thermal Scope";
$w['ump45_fmj_xmags_mp'] = "UMP45 FMJ & Extended Mags";
$w['ump45_reflex_rof_mp'] = "UMP45 Reflex & Rapid Fire";
$w['ump45_reflex_silencer_mp'] = "UMP45 Reflex & Silencer";
$w['ump45_reflex_xmags_mp'] = "UMP45 Reflex & Extended Mags";
$w['ump45_rof_silencer_mp'] = "UMP45 Rapid Fire & Silencer";
$w['ump45_rof_thermal_mp'] = "UMP45 Rapid Fire & Thermal Scope";
$w['ump45_rof_xmags_mp'] = "UMP45 Rapid Fire & Extended Mags";
$w['ump45_silencer_thermal_mp'] = "UMP45 Silencer & Thermal Scope";
$w['ump45_silencer_xmags_mp'] = "UMP45 Silencer & Extended Mags";
$w['ump45_thermal_xmags_mp'] = "UMP45 Thermal Scope & Extended Mags";

//VECTOR
$w['kriss_mp'] = "Vector";
$w['kriss_acog_mp'] = "Vector ACOG";
$w['kriss_akimbo_mp'] = "Vector Akimbo";
$w['kriss_eotech_mp'] = "Vector Holographic Sight";
$w['kriss_fmj_mp'] = "Vector FMJ";
$w['kriss_reflex_mp'] = "Vector Reflex";
$w['kriss_rof_mp'] = "Vector Rapid Fire";
$w['kriss_silencer_mp'] = "Vector Silencer";
$w['kriss_thermal_mp'] = "Vector Thermal Scope";
$w['kriss_xmags_mp'] = "Vector Extended Mags";
$w['kriss_acog_fmj_mp'] = "Vector ACOG & FMJ";
$w['kriss_acog_rof_mp'] = "Vector ACOG & Rapid Fire";
$w['kriss_acog_silencer_mp'] = "Vector ACOG & Silencer";
$w['kriss_acog_xmags_mp'] = "Vector ACOG & Extended Mags";
$w['kriss_akimbo_fmj_mp'] = "Vector Akimbo FMJ";
$w['kriss_akimbo_rof_mp'] = "Vector Akimbo Rapid Fire";
$w['kriss_akimbo_silencer_mp'] = "Vector Akimbo Silencer";
$w['kriss_akimbo_xmags_mp'] = "Vector Akimbo Extended Mags";
$w['kriss_eotech_fmj_mp'] = "Vector Holographic Sight & FMJ";
$w['kriss_eotech_rof_mp'] = "Vector Holographic Sight & Rapid Fire";
$w['kriss_eotech_silencer_mp'] = "Vector Holographic Sight & Silencer";
$w['kriss_eotech_xmags_mp'] = "Vector Holographic Sight & Extended Mags";
$w['kriss_fmj_reflex_mp'] = "Vector FMJ & Reflex";
$w['kriss_fmj_rof_mp'] = "Vector FMJ & Rapid Fire";
$w['kriss_fmj_silencer_mp'] = "Vector FMJ & Silencer";
$w['kriss_fmj_thermal_mp'] = "Vector FMJ & Thermal Scope";
$w['kriss_fmj_xmags_mp'] = "Vector FMJ & Extended Mags";
$w['kriss_reflex_rof_mp'] = "Vector Reflex & Rapid Fire";
$w['kriss_reflex_silencer_mp'] = "Vector Reflex & Silencer";
$w['kriss_reflex_xmags_mp'] = "Vector Reflex & Extended Mags";
$w['kriss_rof_silencer_mp'] = "Vector Rapid Fire & Silencer";
$w['kriss_rof_thermal_mp'] = "Vector Rapid Fire & Thermal Scope";
$w['kriss_rof_xmags_mp'] = "Vector Rapid Fire & Extended Mags";
$w['kriss_silencer_thermal_mp'] = "Vector Silencer & Thermal Scope";
$w['kriss_silencer_xmags_mp'] = "Vector Silencer & Extended Mags";
$w['kriss_thermal_xmags_mp'] = "Vector Thermal Scope & Extended Mags";

//P90
$w['p90_mp'] = "P90";
$w['p90_acog_mp'] = "P90 ACOG";
$w['p90_akimbo_mp'] = "P90 Akimbo";
$w['p90_eotech_mp'] = "P90 Holographic Sight";
$w['p90_fmj_mp'] = "P90 FMJ";
$w['p90_reflex_mp'] = "P90 Reflex";
$w['p90_rof_mp'] = "P90 Rapid Fire";
$w['p90_silencer_mp'] = "P90 Silencer";
$w['p90_thermal_mp'] = "P90 Thermal Scope";
$w['p90_xmags_mp'] = "P90 Extended Mags";
$w['p90_acog_fmj_mp'] = "P90 ACOG & FMJ";
$w['p90_acog_rof_mp'] = "P90 ACOG & Rapid Fire";
$w['p90_acog_silencer_mp'] = "P90 ACOG & Silencer";
$w['p90_acog_xmags_mp'] = "P90 ACOG & Extended Mags";
$w['p90_akimbo_fmj_mp'] = "P90 Akimbo FMJ";
$w['p90_akimbo_rof_mp'] = "P90 Akimbo Rapid Fire";
$w['p90_akimbo_silencer_mp'] = "P90 Akimbo Silencer";
$w['p90_akimbo_xmags_mp'] = "P90 Akimbo Extended Mags";
$w['p90_eotech_fmj_mp'] = "P90 Holographic Sight & FMJ";
$w['p90_eotech_rof_mp'] = "P90 Holographic Sight & Rapid Fire";
$w['p90_eotech_silencer_mp'] = "P90 Holographic Sight & Silencer";
$w['p90_eotech_xmags_mp'] = "P90 Holographic Sight & Extended Mags";
$w['p90_fmj_reflex_mp'] = "P90 FMJ & Reflex";
$w['p90_fmj_rof_mp'] = "P90 FMJ & Rapid Fire";
$w['p90_fmj_silencer_mp'] = "P90 FMJ & Silencer";
$w['p90_fmj_thermal_mp'] = "P90 FMJ & Thermal Scope";
$w['p90_fmj_xmags_mp'] = "P90 FMJ & Extended Mags";
$w['p90_reflex_rof_mp'] = "P90 Reflex & Rapid Fire";
$w['p90_reflex_silencer_mp'] = "P90 Reflex & Silencer";
$w['p90_reflex_xmags_mp'] = "P90 Reflex & Extended Mags";
$w['p90_rof_silencer_mp'] = "P90 Rapid Fire & Silencer";
$w['p90_rof_thermal_mp'] = "P90 Rapid Fire & Thermal Scope";
$w['p90_rof_xmags_mp'] = "P90 Rapid Fire & Extended Mags";
$w['p90_silencer_thermal_mp'] = "P90 Silencer & Thermal Scope";
$w['p90_silencer_xmags_mp'] = "P90 Silencer & Extended Mags";
$w['p90_thermal_xmags_mp'] = "P90 Thermal Scope & Extended Mags";

//Mini Uzi
$w['uzi_mp'] = "Uzi";
$w['uzi_acog_mp'] = "Uzi ACOG";
$w['uzi_akimbo_mp'] = "Uzi Akimbo";
$w['uzi_eotech_mp'] = "Uzi Holographic Sight";
$w['uzi_fmj_mp'] = "Uzi FMJ";
$w['uzi_reflex_mp'] = "Uzi Reflex";
$w['uzi_rof_mp'] = "Uzi Rapid Fire";
$w['uzi_silencer_mp'] = "Uzi Silencer";
$w['uzi_thermal_mp'] = "Uzi Thermal Scope";
$w['uzi_xmags_mp'] = "Uzi Extended Mags";
$w['uzi_acog_fmj_mp'] = "Uzi ACOG & FMJ";
$w['uzi_acog_rof_mp'] = "Uzi ACOG & Rapid Fire";
$w['uzi_acog_silencer_mp'] = "Uzi ACOG & Silencer";
$w['uzi_acog_xmags_mp'] = "Uzi ACOG & Extended Mags";
$w['uzi_akimbo_fmj_mp'] = "Uzi Akimbo FMJ";
$w['uzi_akimbo_rof_mp'] = "Uzi Akimbo Rapid Fire";
$w['uzi_akimbo_silencer_mp'] = "Uzi Akimbo Silencer";
$w['uzi_akimbo_xmags_mp'] = "Uzi Akimbo Extended Mags";
$w['uzi_eotech_fmj_mp'] = "Uzi Holographic Sight & FMJ";
$w['uzi_eotech_rof_mp'] = "Uzi Holographic Sight & Rapid Fire";
$w['uzi_eotech_silencer_mp'] = "Uzi Holographic Sight & Silencer";
$w['uzi_eotech_xmags_mp'] = "Uzi Holographic Sight & Extended Mags";
$w['uzi_fmj_reflex_mp'] = "Uzi FMJ & Reflex";
$w['uzi_fmj_rof_mp'] = "Uzi FMJ & Rapid Fire";
$w['uzi_fmj_silencer_mp'] = "Uzi FMJ & Silencer";
$w['uzi_fmj_thermal_mp'] = "Uzi FMJ & Thermal Scope";
$w['uzi_fmj_xmags_mp'] = "Uzi FMJ & Extended Mags";
$w['uzi_reflex_rof_mp'] = "Uzi Reflex & Rapid Fire";
$w['uzi_reflex_silencer_mp'] = "Uzi Reflex & Silencer";
$w['uzi_reflex_xmags_mp'] = "Uzi Reflex & Extended Mags";
$w['uzi_rof_silencer_mp'] = "Uzi Rapid Fire & Silencer";
$w['uzi_rof_thermal_mp'] = "Uzi Rapid Fire & Thermal Scope";
$w['uzi_rof_xmags_mp'] = "Uzi Rapid Fire & Extended Mags";
$w['uzi_silencer_thermal_mp'] = "Uzi Silencer & Thermal Scope";
$w['uzi_silencer_xmags_mp'] = "Uzi Silencer & Extended Mags";
$w['uzi_thermal_xmags_mp'] = "Uzi Thermal Scope & Extended Mags";

//*********************
//Light Machine Guns
//*********************

//RPD
$w['rpd_mp'] = "RPD";
$w['rpd_acog_mp'] = "RPD ACOG";
$w['rpd_eotech_mp'] = "RPD Holographic Sight";
$w['rpd_fmj_mp'] = "RPD FMJ";
$w['rpd_grip_mp'] = "RPD Grip";
$w['rpd_heartbeat_mp'] = "RPD Heartbeat Sensor";
$w['rpd_reflex_mp'] = "RPD Reflex";
$w['rpd_silencer_mp'] = "RPD Silencer";
$w['rpd_thermal_mp'] = "RPD Thermal Scope";
$w['rpd_xmags_mp'] = "RPD Extended Mags";
$w['rpd_acog_fmj_mp'] = "RPD ACOG & FMJ";
$w['rpd_acog_grip_mp'] = "RPD ACOG & Grip";
$w['rpd_acog_heartbeat_mp'] = "RPD ACOG & Heartbeat Sensor";
$w['rpd_acog_silencer_mp'] = "RPD ACOG & Silencer";
$w['rpd_acog_xmags_mp'] = "RPD ACOG & Extended Mags";
$w['rpd_eotech_fmj_mp'] = "RPD Holographic Sight & FMJ";
$w['rpd_eotech_grip_mp'] = "RPD Holographic Sight & Grip";
$w['rpd_eotech_heartbeat_mp'] = "RPD Holographic Sight & Heartbeat Sensor";
$w['rpd_eotech_silencer_mp'] = "RPD Holographic Sight & Silencer";
$w['rpd_eotech_xmags_mp'] = "RPD Holographic Sight & Extended Mags";
$w['rpd_fmj_grip_mp'] = "RPD FMJ & Grip";
$w['rpd_fmj_heartbeat_mp'] = "RPD FMJ & Heartbeat Sensor";
$w['rpd_fmj_reflex_mp'] = "RPD FMJ & Reflex";
$w['rpd_fmj_silencer_mp'] = "RPD FMJ & Silencer";
$w['rpd_fmj_thermal_mp'] = "RPD FMJ & Thermal Scope";
$w['rpd_fmj_xmags_mp'] = "RPD FMJ & Extended Mags";
$w['rpd_grip_heartbeat_mp'] = "RPD Grip & Heartbeat Sensor";
$w['rpd_grip_reflex_mp'] = "RPD Grip & Reflex";
$w['rpd_grip_silencer_mp'] = "RPD Grip & Silencer";
$w['rpd_grip_thermal_mp'] = "RPD Grip & Thermal Scope";
$w['rpd_grip_xmags_mp'] = "RPD Grip & Extended Mags";
$w['rpd_heartbeat_reflex_mp'] = "RPD Heartbeat Sensor & Reflex";
$w['rpd_heartbeat_silencer_mp'] = "RPD Heartbeat Sensor & Silencer";
$w['rpd_heartbeat_thermal_mp'] = "RPD Heartbeat Sensor & Thermal";
$w['rpd_heartbeat_xmags_mp'] = "RPD Heartbeat Sensor & Extended Mags";
$w['rpd_reflex_silencer_mp'] = "RPD Reflex & Silencer";
$w['rpd_reflex_xmags_mp'] = "RPD Reflex & Extended Mags";
$w['rpd_silencer_thermal_mp'] = "RPD Silencer & Thermal Scope";
$w['rpd_silencer_xmags_mp'] = "RPD Silencer & Extended Mags";
$w['rpd_thermal_xmags_mp'] = "RPD Thermal Scope & Extended Mags";

//L86 LSW
$w['sa80_mp'] = "L86 LSW";
$w['sa80_acog_mp'] = "L86 LSW ACOG";
$w['sa80_eotech_mp'] = "L86 LSW Holographic Sight";
$w['sa80_fmj_mp'] = "L86 LSW FMJ";
$w['sa80_grip_mp'] = "L86 LSW Grip";
$w['sa80_heartbeat_mp'] = "L86 LSW Heartbeat Sensor";
$w['sa80_reflex_mp'] = "L86 LSW Reflex";
$w['sa80_silencer_mp'] = "L86 LSW Silencer";
$w['sa80_thermal_mp'] = "L86 LSW Thermal Scope";
$w['sa80_xmags_mp'] = "L86 LSW Extended Mags";
$w['sa80_acog_fmj_mp'] = "L86 LSW ACOG & FMJ";
$w['sa80_acog_grip_mp'] = "L86 LSW ACOG & Grip";
$w['sa80_acog_heartbeat_mp'] = "L86 LSW ACOG & Heartbeat Sensor";
$w['sa80_acog_silencer_mp'] = "L86 LSW ACOG & Silencer";
$w['sa80_acog_xmags_mp'] = "L86 LSW ACOG & Extended Mags";
$w['sa80_eotech_fmj_mp'] = "L86 LSW Holographic Sight & FMJ";
$w['sa80_eotech_grip_mp'] = "L86 LSW Holographic Sight & Grip";
$w['sa80_eotech_heartbeat_mp'] = "L86 LSW Holographic Sight & Heartbeat Sensor";
$w['sa80_eotech_silencer_mp'] = "L86 LSW Holographic Sight & Silencer";
$w['sa80_eotech_xmags_mp'] = "L86 LSW Holographic Sight & Extended Mags";
$w['sa80_fmj_grip_mp'] = "L86 LSW FMJ & Grip";
$w['sa80_fmj_heartbeat_mp'] = "L86 LSW FMJ & Heartbeat Sensor";
$w['sa80_fmj_reflex_mp'] = "L86 LSW FMJ & Reflex";
$w['sa80_fmj_silencer_mp'] = "L86 LSW FMJ & Silencer";
$w['sa80_fmj_thermal_mp'] = "L86 LSW FMJ & Thermal Scope";
$w['sa80_fmj_xmags_mp'] = "L86 LSW FMJ & Extended Mags";
$w['sa80_grip_heartbeat_mp'] = "L86 LSW Grip & Heartbeat Sensor";
$w['sa80_grip_reflex_mp'] = "L86 LSW Grip & Reflex";
$w['sa80_grip_silencer_mp'] = "L86 LSW Grip & Silencer";
$w['sa80_grip_thermal_mp'] = "L86 LSW Grip & Thermal Scope";
$w['sa80_grip_xmags_mp'] = "L86 LSW Grip & Extended Mags";
$w['sa80_heartbeat_reflex_mp'] = "L86 LSW Heartbeat Sensor & Reflex";
$w['sa80_heartbeat_silencer_mp'] = "L86 LSW Heartbeat Sensor & Silencer";
$w['sa80_heartbeat_thermal_mp'] = "L86 LSW Heartbeat Sensor & Thermal";
$w['sa80_heartbeat_xmags_mp'] = "L86 LSW Heartbeat Sensor & Extended Mags";
$w['sa80_reflex_silencer_mp'] = "L86 LSW Reflex & Silencer";
$w['sa80_reflex_xmags_mp'] = "L86 LSW Reflex & Extended Mags";
$w['sa80_silencer_thermal_mp'] = "L86 LSW Silencer & Thermal Scope";
$w['sa80_silencer_xmags_mp'] = "L86 LSW Silencer & Extended Mags";
$w['sa80_thermal_xmags_mp'] = "L86 LSW Thermal Scope & Extended Mags";

//MG4
$w['mg4_mp'] = "MG4";
$w['mg4_acog_mp'] = "MG4 ACOG";
$w['mg4_eotech_mp'] = "MG4 Holographic Sight";
$w['mg4_fmj_mp'] = "MG4 FMJ";
$w['mg4_grip_mp'] = "MG4 Grip";
$w['mg4_heartbeat_mp'] = "MG4 Heartbeat Sensor";
$w['mg4_reflex_mp'] = "MG4 Reflex";
$w['mg4_silencer_mp'] = "MG4 Silencer";
$w['mg4_thermal_mp'] = "MG4 Thermal Scope";
$w['mg4_xmags_mp'] = "MG4 Extended Mags";
$w['mg4_acog_fmj_mp'] = "MG4 ACOG & FMJ";
$w['mg4_acog_grip_mp'] = "MG4 ACOG & Grip";
$w['mg4_acog_heartbeat_mp'] = "MG4 ACOG & Heartbeat Sensor";
$w['mg4_acog_silencer_mp'] = "MG4 ACOG & Silencer";
$w['mg4_acog_xmags_mp'] = "MG4 ACOG & Extended Mags";
$w['mg4_eotech_fmj_mp'] = "MG4 Holographic Sight & FMJ";
$w['mg4_eotech_grip_mp'] = "MG4 Holographic Sight & Grip";
$w['mg4_eotech_heartbeat_mp'] = "MG4 Holographic Sight & Heartbeat Sensor";
$w['mg4_eotech_silencer_mp'] = "MG4 Holographic Sight & Silencer";
$w['mg4_eotech_xmags_mp'] = "MG4 Holographic Sight & Extended Mags";
$w['mg4_fmj_grip_mp'] = "MG4 FMJ & Grip";
$w['mg4_fmj_heartbeat_mp'] = "MG4 FMJ & Heartbeat Sensor";
$w['mg4_fmj_reflex_mp'] = "MG4 FMJ & Reflex";
$w['mg4_fmj_silencer_mp'] = "MG4 FMJ & Silencer";
$w['mg4_fmj_thermal_mp'] = "MG4 FMJ & Thermal Scope";
$w['mg4_fmj_xmags_mp'] = "MG4 FMJ & Extended Mags";
$w['mg4_grip_heartbeat_mp'] = "MG4 Grip & Heartbeat Sensor";
$w['mg4_grip_reflex_mp'] = "MG4 Grip & Reflex";
$w['mg4_grip_silencer_mp'] = "MG4 Grip & Silencer";
$w['mg4_grip_thermal_mp'] = "MG4 Grip & Thermal Scope";
$w['mg4_grip_xmags_mp'] = "MG4 Grip & Extended Mags";
$w['mg4_heartbeat_reflex_mp'] = "MG4 Heartbeat Sensor & Reflex";
$w['mg4_heartbeat_silencer_mp'] = "MG4 Heartbeat Sensor & Silencer";
$w['mg4_heartbeat_thermal_mp'] = "MG4 Heartbeat Sensor & Thermal";
$w['mg4_heartbeat_xmags_mp'] = "MG4 Heartbeat Sensor & Extended Mags";
$w['mg4_reflex_silencer_mp'] = "MG4 Reflex & Silencer";
$w['mg4_reflex_xmags_mp'] = "MG4 Reflex & Extended Mags";
$w['mg4_silencer_thermal_mp'] = "MG4 Silencer & Thermal Scope";
$w['mg4_silencer_xmags_mp'] = "MG4 Silencer & Extended Mags";
$w['mg4_thermal_xmags_mp'] = "MG4 Thermal Scope & Extended Mags";

//M240
$w['m240_mp'] = "M240";
$w['m240_acog_mp'] = "M240 ACOG";
$w['m240_eotech_mp'] = "M240 Holographic Sight";
$w['m240_fmj_mp'] = "M240 FMJ";
$w['m240_grip_mp'] = "M240 Grip";
$w['m240_heartbeat_mp'] = "M240 Heartbeat Sensor";
$w['m240_reflex_mp'] = "M240 Reflex";
$w['m240_silencer_mp'] = "M240 Silencer";
$w['m240_thermal_mp'] = "M240 Thermal Scope";
$w['m240_xmags_mp'] = "M240 Extended Mags";
$w['m240_acog_fmj_mp'] = "M240 ACOG & FMJ";
$w['m240_acog_grip_mp'] = "M240 ACOG & Grip";
$w['m240_acog_heartbeat_mp'] = "M240 ACOG & Heartbeat Sensor";
$w['m240_acog_silencer_mp'] = "M240 ACOG & Silencer";
$w['m240_acog_xmags_mp'] = "M240 ACOG & Extended Mags";
$w['m240_eotech_fmj_mp'] = "M240 Holographic Sight & FMJ";
$w['m240_eotech_grip_mp'] = "M240 Holographic Sight & Grip";
$w['m240_eotech_heartbeat_mp'] = "M240 Holographic Sight & Heartbeat Sensor";
$w['m240_eotech_silencer_mp'] = "M240 Holographic Sight & Silencer";
$w['m240_eotech_xmags_mp'] = "M240 Holographic Sight & Extended Mags";
$w['m240_fmj_grip_mp'] = "M240 FMJ & Grip";
$w['m240_fmj_heartbeat_mp'] = "M240 FMJ & Heartbeat Sensor";
$w['m240_fmj_reflex_mp'] = "M240 FMJ & Reflex";
$w['m240_fmj_silencer_mp'] = "M240 FMJ & Silencer";
$w['m240_fmj_thermal_mp'] = "M240 FMJ & Thermal Scope";
$w['m240_fmj_xmags_mp'] = "M240 FMJ & Extended Mags";
$w['m240_grip_heartbeat_mp'] = "M240 Grip & Heartbeat Sensor";
$w['m240_grip_reflex_mp'] = "M240 Grip & Reflex";
$w['m240_grip_silencer_mp'] = "M240 Grip & Silencer";
$w['m240_grip_thermal_mp'] = "M240 Grip & Thermal Scope";
$w['m240_grip_xmags_mp'] = "M240 Grip & Extended Mags";
$w['m240_heartbeat_reflex_mp'] = "M240 Heartbeat Sensor & Reflex";
$w['m240_heartbeat_silencer_mp'] = "M240 Heartbeat Sensor & Silencer";
$w['m240_heartbeat_thermal_mp'] = "M240 Heartbeat Sensor & Thermal";
$w['m240_heartbeat_xmags_mp'] = "M240 Heartbeat Sensor & Extended Mags";
$w['m240_reflex_silencer_mp'] = "M240 Reflex & Silencer";
$w['m240_reflex_xmags_mp'] = "M240 Reflex & Extended Mags";
$w['m240_silencer_thermal_mp'] = "M240 Silencer & Thermal Scope";
$w['m240_silencer_xmags_mp'] = "M240 Silencer & Extended Mags";
$w['m240_thermal_xmags_mp'] = "M240 Thermal Scope & Extended Mags";

//AUG HBAR
$w['aug_mp'] = "AUG";
$w['aug_acog_mp'] = "AUG ACOG";
$w['aug_eotech_mp'] = "AUG Holographic Sight";
$w['aug_fmj_mp'] = "AUG FMJ";
$w['aug_grip_mp'] = "AUG Grip";
$w['aug_heartbeat_mp'] = "AUG Heartbeat Sensor";
$w['aug_reflex_mp'] = "AUG Reflex";
$w['aug_silencer_mp'] = "AUG Silencer";
$w['aug_thermal_mp'] = "AUG Thermal Scope";
$w['aug_xmags_mp'] = "AUG Extended Mags";
$w['aug_acog_fmj_mp'] = "AUG ACOG & FMJ";
$w['aug_acog_grip_mp'] = "AUG ACOG & Grip";
$w['aug_acog_heartbeat_mp'] = "AUG ACOG & Heartbeat Sensor";
$w['aug_acog_silencer_mp'] = "AUG ACOG & Silencer";
$w['aug_acog_xmags_mp'] = "AUG ACOG & Extended Mags";
$w['aug_eotech_fmj_mp'] = "AUG Holographic Sight & FMJ";
$w['aug_eotech_grip_mp'] = "AUG Holographic Sight & Grip";
$w['aug_eotech_heartbeat_mp'] = "AUG Holographic Sight & Heartbeat Sensor";
$w['aug_eotech_silencer_mp'] = "AUG Holographic Sight & Silencer";
$w['aug_eotech_xmags_mp'] = "AUG Holographic Sight & Extended Mags";
$w['aug_fmj_grip_mp'] = "AUG FMJ & Grip";
$w['aug_fmj_heartbeat_mp'] = "AUG FMJ & Heartbeat Sensor";
$w['aug_fmj_reflex_mp'] = "AUG FMJ & Reflex";
$w['aug_fmj_silencer_mp'] = "AUG FMJ & Silencer";
$w['aug_fmj_thermal_mp'] = "AUG FMJ & Thermal Scope";
$w['aug_fmj_xmags_mp'] = "AUG FMJ & Extended Mags";
$w['aug_grip_heartbeat_mp'] = "AUG Grip & Heartbeat Sensor";
$w['aug_grip_reflex_mp'] = "AUG Grip & Reflex";
$w['aug_grip_silencer_mp'] = "AUG Grip & Silencer";
$w['aug_grip_thermal_mp'] = "AUG Grip & Thermal Scope";
$w['aug_grip_xmags_mp'] = "AUG Grip & Extended Mags";
$w['aug_heartbeat_reflex_mp'] = "AUG Heartbeat Sensor & Reflex";
$w['aug_heartbeat_silencer_mp'] = "AUG Heartbeat Sensor & Silencer";
$w['aug_heartbeat_thermal_mp'] = "AUG Heartbeat Sensor & Thermal";
$w['aug_heartbeat_xmags_mp'] = "AUG Heartbeat Sensor & Extended Mags";
$w['aug_reflex_silencer_mp'] = "AUG Reflex & Silencer";
$w['aug_reflex_xmags_mp'] = "AUG Reflex & Extended Mags";
$w['aug_silencer_thermal_mp'] = "AUG Silencer & Thermal Scope";
$w['aug_silencer_xmags_mp'] = "AUG Silencer & Extended Mags";
$w['aug_thermal_xmags_mp'] = "AUG Thermal Scope & Extended Mags";


//*********************
//Sniper Rifles
//*********************

//CheyTac Intervention
$w['cheytac_mp'] = "CheyTac Intervention";
$w['cheytac_acog_mp'] = "CheyTac Intervention ACOG";
$w['cheytac_fmj_mp'] = "CheyTac Intervention FMJ";
$w['cheytac_heartbeat_mp'] = "CheyTac Intervention Heartbeat Sensor";
$w['cheytac_silencer_mp'] = "CheyTac Intervention Silencer";
$w['cheytac_thermal_mp'] = "CheyTac Intervention Thermal Scope";
$w['cheytac_xmags_mp'] = "CheyTac Intervention Extended Mags";
$w['cheytac_acog_fmj_mp'] = "CheyTac Intervention ACOG & FMJ";
$w['cheytac_acog_heartbeat_mp'] = "CheyTac Intervention ACOG & Heartbeat Sensor";
$w['cheytac_acog_silencer_mp'] = "CheyTac Intervention ACOG & Silencer";
$w['cheytac_acog_xmags_mp'] = "CheyTac Intervention ACOG & Extended Mags";
$w['cheytac_fmj_heartbeat_mp'] = "CheyTac Intervention FMJ & Heartbeat Sensor";
$w['cheytac_fmj_silencer_mp'] = "CheyTac Intervention FMJ & Silencer";
$w['cheytac_fmj_thermal_mp'] = "CheyTac Intervention FMJ & Thermal Scope";
$w['cheytac_fmj_xmags_mp'] = "CheyTac Intervention FMJ & Extended Mags";
$w['cheytac_heartbeat_silencer_mp'] = "CheyTac Intervention Heartbeat Sensor & Silencer";
$w['cheytac_heartbeat_thermal_mp'] = "CheyTac Intervention Heartbeat Sensor & Thermal Scope";
$w['cheytac_heartbeat_xmags_mp'] = "CheyTac Intervention Heartbeat Sensor & Extended Mags";
$w['cheytac_silencer_thermal_mp'] = "CheyTac Intervention Silencer & Thermal Scope";
$w['cheytac_silencer_xmags_mp'] = "CheyTac Intervention Silencer & Extended Mags";
$w['cheytac_thermal_xmags_mp'] = "CheyTac Intervention Thermal Scope & Extended Mags";

//Barrett .50Cal
$w['barrett_mp'] = "Barrett .50Cal";
$w['barrett_acog_mp'] = "Barrett ACOG";
$w['barrett_fmj_mp'] = "Barrett FMJ";
$w['barrett_heartbeat_mp'] = "Barrett Heartbeat Sensor";
$w['barrett_silencer_mp'] = "Barrett Silencer";
$w['barrett_thermal_mp'] = "Barrett Thermal Scope";
$w['barrett_xmags_mp'] = "Barrett Extended Mags";
$w['barrett_acog_fmj_mp'] = "Barrett ACOG & FMJ";
$w['barrett_acog_heartbeat_mp'] = "Barrett ACOG & Heartbeat Sensor";
$w['barrett_acog_silencer_mp'] = "Barrett ACOG & Silencer";
$w['barrett_acog_xmags_mp'] = "Barrett ACOG & Extended Mags";
$w['barrett_fmj_heartbeat_mp'] = "Barrett FMJ & Heartbeat Sensor";
$w['barrett_fmj_silencer_mp'] = "Barrett FMJ & Silencer";
$w['barrett_fmj_thermal_mp'] = "Barrett FMJ & Thermal Scope";
$w['barrett_fmj_xmags_mp'] = "Barrett FMJ & Extended Mags";
$w['barrett_heartbeat_silencer_mp'] = "Barrett Heartbeat Sensor & Silencer";
$w['barrett_heartbeat_thermal_mp'] = "Barrett Heartbeat Sensor & Thermal Scope";
$w['barrett_heartbeat_xmags_mp'] = "Barrett Heartbeat Sensor & Extended Mags";
$w['barrett_silencer_thermal_mp'] = "Barrett Silencer & Thermal Scope";
$w['barrett_silencer_xmags_mp'] = "Barrett Silencer & Extended Mags";
$w['barrett_thermal_xmags_mp'] = "Barrett Thermal Scope & Extended Mags";

//WA2000
$w['wa2000_mp'] = "WA2000";
$w['wa2000_acog_mp'] = "WA2000 ACOG";
$w['wa2000_fmj_mp'] = "WA2000 FMJ";
$w['wa2000_heartbeat_mp'] = "WA2000 Heartbeat Sensor";
$w['wa2000_silencer_mp'] = "WA2000 Silencer";
$w['wa2000_thermal_mp'] = "WA2000 Thermal Scope";
$w['wa2000_xmags_mp'] = "WA2000 Extended Mags";
$w['wa2000_acog_fmj_mp'] = "WA2000 ACOG & FMJ";
$w['wa2000_acog_heartbeat_mp'] = "WA2000 ACOG & Heartbeat Sensor";
$w['wa2000_acog_silencer_mp'] = "WA2000 ACOG & Silencer";
$w['wa2000_acog_xmags_mp'] = "WA2000 ACOG & Extended Mags";
$w['wa2000_fmj_heartbeat_mp'] = "WA2000 FMJ & Heartbeat Sensor";
$w['wa2000_fmj_silencer_mp'] = "WA2000 FMJ & Silencer";
$w['wa2000_fmj_thermal_mp'] = "WA2000 FMJ & Thermal Scope";
$w['wa2000_fmj_xmags_mp'] = "WA2000 FMJ & Extended Mags";
$w['wa2000_heartbeat_silencer_mp'] = "WA2000 Heartbeat Sensor & Silencer";
$w['wa2000_heartbeat_thermal_mp'] = "WA2000 Heartbeat Sensor & Thermal Scope";
$w['wa2000_heartbeat_xmags_mp'] = "WA2000 Heartbeat Sensor & Extended Mags";
$w['wa2000_silencer_thermal_mp'] = "WA2000 Silencer & Thermal Scope";
$w['wa2000_silencer_xmags_mp'] = "WA2000 Silencer & Extended Mags";
$w['wa2000_thermal_xmags_mp'] = "WA2000 Thermal Scope & Extended Mags";

//M21 EBR
$w['m21_mp'] = "M21";
$w['m21_acog_mp'] = "M21 ACOG";
$w['m21_fmj_mp'] = "M21 FMJ";
$w['m21_heartbeat_mp'] = "M21 Heartbeat Sensor";
$w['m21_silencer_mp'] = "M21 Silencer";
$w['m21_thermal_mp'] = "M21 Thermal Scope";
$w['m21_xmags_mp'] = "M21 Extended Mags";
$w['m21_acog_fmj_mp'] = "M21 ACOG & FMJ";
$w['m21_acog_heartbeat_mp'] = "M21 ACOG & Heartbeat Sensor";
$w['m21_acog_silencer_mp'] = "M21 ACOG & Silencer";
$w['m21_acog_xmags_mp'] = "M21 ACOG & Extended Mags";
$w['m21_fmj_heartbeat_mp'] = "M21 FMJ & Heartbeat Sensor";
$w['m21_fmj_silencer_mp'] = "M21 FMJ & Silencer";
$w['m21_fmj_thermal_mp'] = "M21 FMJ & Thermal Scope";
$w['m21_fmj_xmags_mp'] = "M21 FMJ & Extended Mags";
$w['m21_heartbeat_silencer_mp'] = "M21 Heartbeat Sensor & Silencer";
$w['m21_heartbeat_thermal_mp'] = "M21 Heartbeat Sensor & Thermal Scope";
$w['m21_heartbeat_xmags_mp'] = "M21 Heartbeat Sensor & Extended Mags";
$w['m21_silencer_thermal_mp'] = "M21 Silencer & Thermal Scope";
$w['m21_silencer_xmags_mp'] = "M21 Silencer & Extended Mags";
$w['m21_thermal_xmags_mp'] = "M21 Thermal Scope & Extended Mags";

//*********************
//Machine Pistols
//*********************

//PP2000
$w['pp2000_mp'] = "PP2000";
$w['pp2000_akimbo_mp'] = "PP2000 Akimbo";
$w['pp2000_eotech_mp'] = "PP2000 Holographic Sight";
$w['pp2000_fmj_mp'] = "PP2000 FMJ";
$w['pp2000_reflex_mp'] = "PP2000 Reflex";
$w['pp2000_silencer_mp'] = "PP2000 Silencer";
$w['pp2000_xmags_mp'] = "PP2000 Extended Mags";
$w['pp2000_akimbo_fmj_mp'] = "PP2000 Akimbo FMJ";
$w['pp2000_akimbo_silencer_mp'] = "PP2000 Akimbo Silencer";
$w['pp2000_akimbo_xmags_mp'] = "PP2000 Akimbo Extended Mags";
$w['pp2000_eotech_fmj_mp'] = "PP2000 Holographic Sight & FMJ";
$w['pp2000_eotech_silencer_mp'] = "PP2000 Holographic Sight & Silencer";
$w['pp2000_eotech_xmags_mp'] = "PP2000Holographic Sight & Extended Mags";
$w['pp2000_fmj_reflex_mp'] = "PP2000 FMJ & Reflex";
$w['pp2000_fmj_silencer_mp'] = "PP2000 FMJ & Silencer";
$w['pp2000_fmj_xmags_mp'] = "PP2000 FMJ & Extended Mags";
$w['pp2000_reflex_silencer_mp'] = "PP2000 Reflex & Silencer";
$w['pp2000_reflex_xmags_mp'] = "PP2000 Reflex & Extended Mags";
$w['pp2000_silencer_xmags_mp'] = "PP2000 Silencer & Extended Mags";

//G18 Glock
$w['glock_mp'] = "G18 Glock";
$w['glock_akimbo_mp'] = "G18 Glock Akimbo";
$w['glock_eotech_mp'] = "G18 Glock Holographic Sight";
$w['glock_fmj_mp'] = "G18 Glock FMJ";
$w['glock_reflex_mp'] = "G18 Glock Reflex";
$w['glock_silencer_mp'] = "G18 Glock Silencer";
$w['glock_xmags_mp'] = "G18 Glock Extended Mags";
$w['glock_akimbo_fmj_mp'] = "G18 Glock Akimbo FMJ";
$w['glock_akimbo_silencer_mp'] = "G18 Glock Akimbo Silencer";
$w['glock_akimbo_xmags_mp'] = "G18 Glock Akimbo Extended Mags";
$w['glock_eotech_fmj_mp'] = "G18 Glock Holographic Sight & FMJ";
$w['glock_eotech_silencer_mp'] = "G18 Glock Holographic Sight & Silencer";
$w['glock_eotech_xmags_mp'] = "G18 Glock Holographic Sight & Extended Mags";
$w['glock_fmj_reflex_mp'] = "G18 Glock FMJ & Reflex";
$w['glock_fmj_silencer_mp'] = "G18 Glock FMJ & Silencer";
$w['glock_fmj_xmags_mp'] = "G18 Glock FMJ & Extended Mags";
$w['glock_reflex_silencer_mp'] = "G18 Glock Reflex & Silencer";
$w['glock_reflex_xmags_mp'] = "G18 Glock Reflex & Extended Mags";
$w['glock_silencer_xmags_mp'] = "G18 Glock Silencer & Extended Mags";

//M93 RAFFICA
$w['beretta_mp'] = "Beretta";
$w['beretta_akimbo_mp'] = "Beretta Akimbo";
$w['beretta_eotech_mp'] = "Beretta Holographic Sight";
$w['beretta_fmj_mp'] = "Beretta FMJ";
$w['beretta_reflex_mp'] = "Beretta Reflex";
$w['beretta_silencer_mp'] = "Beretta Silencer";
$w['beretta_xmags_mp'] = "Beretta Extended Mags";
$w['beretta_akimbo_fmj_mp'] = "Beretta Akimbo FMJ";
$w['beretta_akimbo_silencer_mp'] = "Beretta Akimbo Silencer";
$w['beretta_akimbo_xmags_mp'] = "Beretta Akimbo Extended Mags";
$w['beretta_eotech_fmj_mp'] = "Beretta Holographic Sight & FMJ";
$w['beretta_eotech_silencer_mp'] = "Beretta Holographic Sight & Silencer";
$w['beretta_eotech_xmags_mp'] = "Beretta Holographic Sight & Extended Mags";
$w['beretta_fmj_reflex_mp'] = "Beretta FMJ & Reflex";
$w['beretta_fmj_silencer_mp'] = "Beretta FMJ & Silencer";
$w['beretta_fmj_xmags_mp'] = "Beretta FMJ & Extended Mags";
$w['beretta_reflex_silencer_mp'] = "Beretta Reflex & Silencer";
$w['beretta_reflex_xmags_mp'] = "Beretta Reflex & Extended Mags";
$w['beretta_silencer_xmags_mp'] = "Beretta Silencer & Extended Mags";

//TMP
$w['tmp_mp'] = "TMP";
$w['tmp_akimbo_mp'] = "TMP Akimbo";
$w['tmp_eotech_mp'] = "TMP Holographic Sight";
$w['tmp_fmj_mp'] = "TMP FMJ";
$w['tmp_reflex_mp'] = "TMP Reflex";
$w['tmp_silencer_mp'] = "TMP Silencer";
$w['tmp_xmags_mp'] = "TMP Extended Mags";
$w['tmp_akimbo_fmj_mp'] = "TMP Akimbo FMJ";
$w['tmp_akimbo_silencer_mp'] = "TMP Akimbo Silencer";
$w['tmp_akimbo_xmags_mp'] = "TMP Akimbo Extended Mags";
$w['tmp_eotech_fmj_mp'] = "TMP Holographic Sight & FMJ";
$w['tmp_eotech_silencer_mp'] = "TMP Holographic Sight & Silencer";
$w['tmp_eotech_xmags_mp'] = "TMP Holographic Sight & Extended Mags";
$w['tmp_fmj_reflex_mp'] = "TMP FMJ & Reflex";
$w['tmp_fmj_silencer_mp'] = "TMP FMJ & Silencer";
$w['tmp_fmj_xmags_mp'] = "TMP FMJ & Extended Mags";
$w['tmp_reflex_silencer_mp'] = "TMP Reflex & Silencer";
$w['tmp_reflex_xmags_mp'] = "TMP Reflex & Extended Mags";
$w['tmp_silencer_xmags_mp'] = "TMP Silencer & Extended Mags";

//*********************
//Shotguns
//*********************

//SPAS-12
$w['spas12_mp'] = "SPAS-12";
$w['spas12_eotech_mp'] = "SPAS-12 Holographic Sight";
$w['spas12_fmj_mp'] = "SPAS-12 FMJ";
$w['spas12_grip_mp'] = "SPAS-12 Grip";
$w['spas12_reflex_mp'] = "SPAS-12 Reflex";
$w['spas12_silencer_mp'] = "SPAS-12 Silencer";
$w['spas12_xmags_mp'] = "SPAS-12 Extended Mags";
$w['spas12_eotech_fmj_mp'] = "SPAS-12 Holographic Sight & FMJ";
$w['spas12_eotech_grip_mp'] = "SPAS-12 Holographic Sight & Grip";
$w['spas12_eotech_silencer_mp'] = "SPAS-12 Holographic Sight & Silencer";
$w['spas12_eotech_xmags_mp'] = "SPAS-12 Holographic Sight & Extended Mags";
$w['spas12_fmj_grip_mp'] = "SPAS-12 FMJ & Grip";
$w['spas12_fmj_reflex_mp'] = "SPAS-12 FMJ & Reflex";
$w['spas12_fmj_silencer_mp'] = "SPAS-12 FMJ & Silencer";
$w['spas12_fmj_xmags_mp'] = "SPAS-12 FMJ & Extended Mags";
$w['spas12_grip_reflex_mp'] = "SPAS-12 Grip & Reflex";
$w['spas12_grip_silencer_mp'] = "SPAS-12 Grip & Silencer";
$w['spas12_grip_xmags_mp'] = "SPAS-12 Grip & Extended Mags";
$w['spas12_reflex_silencer_mp'] = "SPAS-12 Reflex & Silencer";
$w['spas12_reflex_xmags_mp'] = "SPAS-12 Reflex & Extended Mags";
$w['spas12_silencer_xmags_mp'] = "SPAS-12 Silencer & Extended Mags";

//AA-12
$w['aa12_mp'] = "AA-12";
$w['aa12_eotech_mp'] = "AA-12 Holographic Sight";
$w['aa12_fmj_mp'] = "AA-12 FMJ";
$w['aa12_grip_mp'] = "AA-12 Grip";
$w['aa12_reflex_mp'] = "AA-12 Reflex";
$w['aa12_silencer_mp'] = "AA-12 Silencer";
$w['aa12_xmags_mp'] = "AA-12 Extended Mags";
$w['aa12_eotech_fmj_mp'] = "AA-12 Holographic Sight & FMJ";
$w['aa12_eotech_grip_mp'] = "AA-12 Holographic Sight & Grip";
$w['aa12_eotech_silencer_mp'] = "AA-12 Holographic Sight & Silencer";
$w['aa12_eotech_xmags_mp'] = "AA-12 Holographic Sight & Extended Mags";
$w['aa12_fmj_grip_mp'] = "AA-12 FMJ & Grip";
$w['aa12_fmj_reflex_mp'] = "AA-12 FMJ & Reflex";
$w['aa12_fmj_silencer_mp'] = "AA-12 FMJ & Silencer";
$w['aa12_fmj_xmags_mp'] = "AA-12 FMJ & Extended Mags";
$w['aa12_grip_reflex_mp'] = "AA-12 Grip & Reflex";
$w['aa12_grip_silencer_mp'] = "AA-12 Grip & Silencer";
$w['aa12_grip_xmags_mp'] = "AA-12 Grip & Extended Mags";
$w['aa12_reflex_silencer_mp'] = "AA-12 Reflex & Silencer";
$w['aa12_reflex_xmags_mp'] = "AA-12 Reflex & Extended Mags";
$w['aa12_silencer_xmags_mp'] = "AA-12 Silencer & Extended Mags";

//Striker
$w['striker_mp'] = "Striker";
$w['striker_eotech_mp'] = "Striker Holographic Sight";
$w['striker_fmj_mp'] = "Striker FMJ";
$w['striker_grip_mp'] = "Striker Grip";
$w['striker_reflex_mp'] = "Striker Reflex";
$w['striker_silencer_mp'] = "Striker Silencer";
$w['striker_xmags_mp'] = "Striker Extended Mags";
$w['striker_eotech_fmj_mp'] = "Striker Holographic Sight & FMJ";
$w['striker_eotech_grip_mp'] = "Striker Holographic Sight & Grip";
$w['striker_eotech_silencer_mp'] = "Striker Holographic Sight & Silencer";
$w['striker_eotech_xmags_mp'] = "Striker Holographic Sight & Extended Mags";
$w['striker_fmj_grip_mp'] = "Striker FMJ & Grip";
$w['striker_fmj_reflex_mp'] = "Striker FMJ & Reflex";
$w['striker_fmj_silencer_mp'] = "Striker FMJ & Silencer";
$w['striker_fmj_xmags_mp'] = "Striker FMJ & Extended Mags";
$w['striker_grip_reflex_mp'] = "Striker Grip & Reflex";
$w['striker_grip_silencer_mp'] = "Striker Grip & Silencer";
$w['striker_grip_xmags_mp'] = "Striker Grip & Extended Mags";
$w['striker_reflex_silencer_mp'] = "Striker Reflex & Silencer";
$w['striker_reflex_xmags_mp'] = "Striker Reflex & Extended Mags";
$w['striker_silencer_xmags_mp'] = "Striker Silencer & Extended Mags";

//Ranger
$w['ranger_mp'] = "Ranger";
$w['ranger_akimbo_mp'] = "Ranger Akimbo";
$w['ranger_fmj_mp'] = "Ranger FMJ";
$w['ranger_akimbo_fmj_mp'] = "Ranger Akimbo FMJ";

//M1014
$w['m1014_mp'] = "M1014";
$w['m1014_eotech_mp'] = "M1014 Holographic Sight";
$w['m1014_fmj_mp'] = "M1014 FMJ";
$w['m1014_grip_mp'] = "M1014 Grip";
$w['m1014_reflex_mp'] = "M1014 Reflex";
$w['m1014_silencer_mp'] = "M1014 Silencer";
$w['m1014_xmags_mp'] = "M1014 Extended Mags";
$w['m1014_eotech_fmj_mp'] = "M1014 Holographic Sight & FMJ";
$w['m1014_eotech_grip_mp'] = "M1014 Holographic Sight & Grip";
$w['m1014_eotech_silencer_mp'] = "M1014 Holographic Sight & Silencer";
$w['m1014_eotech_xmags_mp'] = "M1014 Holographic Sight & Extended Mags";
$w['m1014_fmj_grip_mp'] = "M1014 FMJ & Grip";
$w['m1014_fmj_reflex_mp'] = "M1014 FMJ & Reflex";
$w['m1014_fmj_silencer_mp'] = "M1014 FMJ & Silencer";
$w['m1014_fmj_xmags_mp'] = "M1014 FMJ & Extended Mags";
$w['m1014_grip_reflex_mp'] = "M1014 Grip & Reflex";
$w['m1014_grip_silencer_mp'] = "M1014 Grip & Silencer";
$w['m1014_grip_xmags_mp'] = "M1014 Grip & Extended Mags";
$w['m1014_reflex_silencer_mp'] = "M1014 Reflex & Silencer";
$w['m1014_reflex_xmags_mp'] = "M1014 Reflex & Extended Mags";
$w['m1014_silencer_xmags_mp'] = "M1014 Silencer & Extended Mags";

//Model 1887
$w['model1887_mp'] = "Model 1887";
$w['model1887_akimbo_mp'] = "Model 1887 Akimbo";
$w['model1887_fmj_mp'] = "Model 1887 FMJ";
$w['model1887_akimbo_fmj_mp'] = "Model 1887 Akimbo FMJ";

//*********************
//Handguns
//*********************

//USP .45
$w['usp_mp'] = "USP";
$w['usp_akimbo_mp'] = "USP Akimbo";
$w['usp_fmj_mp'] = "USP FMJ";
$w['usp_silencer_mp'] = "USP Silencer";
$w['usp_tactical_mp'] = "USP Tactical";
$w['usp_xmags_mp'] = "USP Extended Mags";
$w['usp_akimbo_fmj_mp'] = "USP Akimbo FMJ";
$w['usp_akimbo_silencer_mp'] = "USP Akimbo Silencer";
$w['usp_akimbo_xmags_mp'] = "USP Akimbo Extended Mags";
$w['usp_fmj_silencer_mp'] = "USP FMJ & Silencer";
$w['usp_fmj_tactical_mp'] = "USP FMJ & Tactical";
$w['usp_fmj_xmags_mp'] = "USP FMJ & Extended Mags";
$w['usp_silencer_tactical_mp'] = "USP Silencer & Tactical";
$w['usp_silencer_xmags_mp'] = "USP Silencer & Extended Mags";
$w['usp_tactical_xmags_mp'] = "USP Tactical & Extended Mags";

//.44 Magnum
$w['coltanaconda_mp'] = ".44 Magnum";
$w['coltanaconda_akimbo_mp'] = ".44 Magnum Akimbo";
$w['coltanaconda_fmj_mp'] = ".44 Magnum FMJ";
$w['coltanaconda_tactical_mp'] = ".44 Magnum Tactical";
$w['coltanaconda_akimbo_fmj_mp'] = ".44 Magnum Akimbo FMJ";
$w['coltanaconda_fmj_tactical_mp'] = ".44 Magnum FMJ Tactical";

//Desert Eagle
$w['deserteagle_mp'] = "Desert Eagle";
$w['deserteagle_akimbo_mp'] = "Desert Eagle Akimbo";
$w['deserteagle_fmj_mp'] = "Desert Eagle FMJ";
$w['deserteagle_tactical_mp'] = "Desert Eagle Tactical";
$w['deserteagle_akimbo_fmj_mp'] = "Desert Eagle Akimbo FMJ";
$w['deserteagle_fmj_tactical_mp'] = "Desert Eagle FMJ Tactical";
$w['deserteaglegold_mp'] = "Desert Eagle Gold";

//*********************
//Launchers
//*********************

$w['at4_mp'] = "AT4-HS";
$w['m79_mp'] = "Thumper";
$w['stinger_mp'] = "Stinger";
$w['javelin_mp'] = "Javelin";
$w['rpg_mp'] = "RPG-7";

//*********************
//Equipment
//*********************

$w['frag_grenade_mp'] = "Frag Grenade";
$w['frag_grenade_short_mp'] = "Short Fuse Frag Grenade";
$w['smoke_grenade_mp'] = "Smoke Grenade";
$w['claymore_mp'] = "Claymore Mine";
$w['throwingknife_mp'] = "Throwing Knife";
$w['c4_mp'] = "C4";

//*********************
//Special Grenades
//*********************

$w['semtex_mp'] = "Semtex";
$w['concussion_grenade_mp'] = "Concussion Grenade";
$w['flash_grenade_mp'] = "Flashbang";

//*********************
//Killstreaks
//*********************

$w['harrier_20mm_mp'] = "Harrier Strike 20mm";
$w['harrier_ffar_mp'] = "Harrier Strike";
$w['harrier_missile_mp'] = "Harrier Striker Missile";
$w['pavelow_minigun_mp'] = "Pave Low";
$w['sentry_minigun_mp'] = "Sentry Gun";
$w['stealth_bomb_mp'] = "Stealth Bomber";
$w['cobra_20mm_mp'] = "Attack Helicopter";
$w['cobra_player_minigun_mp'] = "Chopper Gunner";
$w['ac130_105mm_mp'] = "AC-130 105mm";
$w['ac130_40mm_mp'] = "AC-130 40mm";
$w['ac130_25mm_mp'] = "AC-130 25mm";
$w['remotemissile_projectile_mp'] = "Predator Missile";
$w['artillery_mp'] = "Precision Airstrike";

//*********************
//Misc
//*********************

$w['mod_melee'] = "Knife";
$w['destructible_car'] = "Vehicle Explosion";
$w['barrel_mp'] = "Barrel Explosion";
$w['turret_minigun_mp'] = "Minigun";
$w['briefcase_bomb_mp'] = "Briefcase Bomb";
$w['scavenger_bag_mp'] = "Scavenger Bag";
$w['defaultweapon_mp'] = "Default Weapon";
$w['mod_falling'] = "Falling...";

//No weapon? 
$w['none'] = "Bad luck...";

//*********************
// Map names
//*********************
// Stock MW2
$m['mp_abandon'] = "Carnival";
$m['mp_afghan'] = "Afghan";
$m['mp_boneyard'] = "Scrapyard";
$m['mp_brecourt'] = "Wasteland";
$m['mp_checkpoint'] = "Karachi";
$m['mp_compact'] = "Salvage";
$m['mp_crash'] = "Crash";
$m['mp_complex'] = "Bailout";
$m['mp_derail'] = "Derail";
$m['mp_estate'] = "Estate";
$m['mp_favela'] = "Favela";
$m['mp_fuel2'] = "Fuel";
$m['mp_highrise'] = "Highrise";
$m['mp_nightshift'] = "Skidrow";
$m['mp_invasion'] = "Invasion";
$m['mp_quarry'] = "Quarry";
$m['mp_rundown'] = "Rundown";
$m['mp_rust'] = "Rust";
$m['mp_subbase'] = "Subbase";
$m['mp_terminal'] = "Terminal";
$m['mp_trailerpark'] = "Trailerpark";
$m['mp_underpass'] = "Underpass";
$m['mp_storm'] = "Storm";
$m['mp_strike'] = "Strike";
$m['mp_overgrown'] = "Overgrown";
$m['mp_vacant'] = "Vacant";

//*********************
// Event names
//*********************

//*********************
// Bodypart names
//*********************
$b['head'] = $text["head"];
$b['neck'] = $text["neck"];
$b['torso_lower'] = $text["torso_lower"];
$b['torso_upper'] = $text["torso_upper"];
$b['left_arm_upper'] = $text["left_arm_upper"];
$b['left_arm_lower'] = $text["left_arm_lower"];
$b['left_hand'] = $text["left_hand"];
$b['right_arm_upper'] = $text["right_arm_upper"];
$b['right_arm_lower'] = $text["right_arm_lower"];
$b['right_hand'] = $text["right_hand"];
$b['left_leg_upper'] = $text["left_leg_upper"];
$b['left_leg_lower'] = $text["left_leg_lower"];
$b['left_foot'] = $text["left_foot"];
$b['right_leg_upper'] = $text["right_leg_upper"];
$b['right_leg_lower'] = $text["right_leg_lower"];
$b['right_foot'] = $text["right_foot"];
$b['none'] = $text["totaldisrupt"];

*/
