<?php

Configure::write('level', array(
	100	=> array(128, 'Super Admin'),
	80	=> array(64, 'Senior Admin'),
	60	=> array(32, 'Full Admin'),
	40	=> array(16, 'Admin'),
	20	=> array(8, 'Moderator'),
	2	=> array(2, 'Regular'),
	1	=> array(1, 'User'),
	0	=> array(0, 'Guest'),
	)
);
