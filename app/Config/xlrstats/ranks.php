<?php
/***************************************************************************
 * Xlrstats Webmodule
 * Webfront for XLRstats for B3 (www.bigbrotherbot.com)
 * (c) 2004-2010 www.xlr8or.com (mailto:xlr8or@xlr8or.com)
 ***************************************************************************/

/***************************************************************************
 *  This program is free software you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation either version 2 of the License, or
 *  (at your option) any later version.
 *
 *  This program is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU Library General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with this program if not, write to the Free Software
 *  Foundation, Inc., 59 Temple Place - Suite 330, Boston, MA 02111-1307, USA.
 *
 *  http://www.gnu.org/copyleft/gpl.html
 ***************************************************************************/

//*********************
// Ranks based on kills
//*********************
Configure::write('rank', array(
	// array(rankname, killsneeded, image)
	1	=> array('Private',0, "pvt.png"),
	2	=> array('Private First Class 1',10, "1_star/1-pvt.png"),
	3	=> array('Private First Class 2',20, "2_stars/2-pvt.png"),
	4	=> array('Lance Corporal',40, "Lance-Corporal.png"),
	5	=> array('Lance Corporal 1',80, "1_star/1-Lance-Corporal.png"),
	6	=> array('Lance Corporal 2',160, "2_stars/2-Lance-Corporal.png"),
	7	=> array('Corporal',300, "copral.png"),
	8	=> array('Corporal 1',400, "1_star/1-copral.png"),
	9	=> array('Corporal 2',600, "2_stars/2-copral.png"),
	10	=> array('Sergeant',900, "Sergeant.png"),
	11	=> array('Sergeant 1',1300, "1_star/1-Sergeant.png"),
	12	=> array('Sergeant 2',1800, "2_stars/2-Sergeant.png"),
	13	=> array('Staff Sergeant',2400, "Staff-Sergeant.png"),
	14	=> array('Staff Sergeant 1',3000, "1_star/1-Staff-Sergeant.png"),
	15	=> array('Staff Sergeant2',4000, "2_stars/2-Staff-Sergeant.png"),
	16	=> array('Gunnery Sergeant',5000, "Gunnery-Sergeant.png"),
	17	=> array('Gunnery Sergeant1',6000, "1_star/1-Gunnery-Sergeant.png"),
	18	=> array('Gunnery Sergeant 2',7000, "2_stars/2-Gunnery-Sergeant.png"),
	19	=> array('Master Sergeant',8000, "Master-Sergeant.png"),
	20	=> array('Master Sergeant 1',9000, "1_star/1-Master-Sergeant.png"),
	21	=> array('Master Sergeant 2',10000, "2_stars/2-Master-Sergeant.png"),
	22	=> array('Master Gunnery Sgt',11000, "Master-Gunnery-Sergeant.png"),
	23	=> array('Master Gunnery Sgt 1',12000, "1_star/1-Master-Gunnery-Sergeant.png"),
	24	=> array('Master Gunnery Sgt 2',13000, "2_stars/2-Master-Gunnery-Sergeant.png"),
	25	=> array('2nd Lieutenant',14000, "Second-Lieutenant.png"),
	26	=> array('2nd Lieutenant 2',15000, "1_star/1-Second-Lieutenant.png"),
	27	=> array('2nd Lieutenant 2',16000, "2_stars/2-Second-Lieutenant.png"),
	28	=> array('1st Lieutenant',17000, "First-Lieutenant.png"),
	29	=> array('1st Lieutenant 1',18000, "1_star/1-First-Lieutenant.png"),
	30	=> array('1st Lieutenant 2',19000, "2_stars/2-First-Lieutenant.png"),
	31	=> array('Captain',20000, "Captain.png"),
	32	=> array('Captain 1',21000, "1_star/1-Captain.png"),
	33	=> array('Captain 2',22000, "2_stars/2-Captain.png"),
	34	=> array('Major',23000, "Major.png"),
	35	=> array('Major 1',24000, "1_star/1-Major.png"),
	36	=> array('Major 2',25000, "2_stars/2-Major.png"),
	37	=> array('Lieutenant Colonel',26000, "Lieutenant-Colonel.png"),
	38	=> array('Lieutenant Colonel 1',27000, "1_star/1-Lieutenant-Colonel.png"),
	39	=> array('Lieutenant Colonel 2',28000, "2_stars/2-Lieutenant-Colonel.png"),
	40	=> array('Colonel',29000, "Colonel.png"),
	41	=> array('Colonel 1',30000, "1_star/1-Colonel.png"),
	42	=> array('Colonel 2',31000, "2_stars/2-Colonel.png"),
	43	=> array('Brigadier General',32000, "Brigadier-General.png"),
	44	=> array('Brigadier General 1',33000, "1_star/1-Brigadier-General.png"),
	45	=> array('Brigadier General 2',34000, "2_stars/2-Brigadier-General.png"),
	46	=> array('Major General',35000, "Major-General.png"),
	47	=> array('Major General 1',36000, "1_star/1-Major-General.png"),
	48	=> array('Major General 2',38000, "2_stars/2-Major-General.png"),
	49	=> array('Lieutenant General',40000, "Lieutenant-General.png"),
	50	=> array('Lieutenant General 1',43000, "1_star/1-Lieutenant-General.png"),
	51	=> array('Lieutenant General 2',46000, "2_stars/2-Lieutenant-General.png"),
	52	=> array('General',49000, "General.png"),
	53	=> array('General 1',52000, "1_star/1-General.png"),
	54	=> array('General 2',54000, "2_stars/2-General.png"),
	55	=> array('Commander',60000, "Commander.png"),
	)
);