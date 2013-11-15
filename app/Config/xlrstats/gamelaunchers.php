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
 * @package       app.Config.xlrstats
 * @since         XLRstats v3.0
 * @version       0.1
 */

Configure::write('gamelaunchers', array(

		'xfire' => array(
			'cod1' => 'codmp',
			'coduo' => 'coduomp',
			'cod2' => 'cod2mp',
			'cod4' => 'cod4mp',
			'cod5' => 'codwawmp',
			'urt' => 'utq3',
			'q3a' => 'q3',
			'smg' => 'smokin',
			'wop' => 'wopad',
		),

		'qtracker' => array(
			'cod1' => 'CallOfDuty',
			'coduo' => 'CallOfDutyUnitedOffensive',
			'cod2' => 'CallOfDuty2',
			'cod4' => 'CallOfDuty4',
			'cod5' => 'CallOfDutyWorldAtWar',
			'urt' => 'UrbanTerror',
			'q3a' => 'Quake3',
			'smg' => 'Quake3',
			'wop' => 'WorldOfPadman',
		),

		'gsc' => array(
			'cod1' => 'cod',
			'coduo' => 'uo',
			'cod2' => 'cod2',
			'cod4' => 'cod4',
			'cod5' => 'codww',
			'urt' => 'urbanterror',
			'q3a' => 'q3',
			'smg' => 'q3',
			'wop' => 'wop',
		),

		/* hlsw does not use a translation, we just need confirmation if a game is supported */
		'hlsw' => array(
			'cod1' => '1',
			'coduo' => '1',
			'cod2' => '1',
			'cod4' => '1',
			'cod5' => '1',
			'urt' => '1',
			'q3a' => '1',
			'smg' => '1',
			'wop' => '1',
		),
	)
);
