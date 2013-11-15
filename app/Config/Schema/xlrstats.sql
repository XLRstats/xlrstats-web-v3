-- phpMyAdmin SQL Dump
-- version 3.4.11.1deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2013 at 08:42 PM
-- Server version: 5.5.31
-- PHP Version: 5.4.4-14+deb7u4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `xlrstats_config`
--

-- --------------------------------------------------------

--
-- Table structure for table `acos`
--

CREATE TABLE IF NOT EXISTS `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=54 ;

--
-- Dumping data for table `acos`
--

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, '', NULL, 'controllers', 1, 108),
(2, 1, '', NULL, 'Dashboard', 2, 107),
(3, 2, '', NULL, 'Servers', 3, 16),
(4, 3, '', NULL, 'admin_index', 4, 5),
(5, 3, '', NULL, 'admin_view', 6, 7),
(6, 3, '', NULL, 'admin_add', 8, 9),
(7, 3, '', NULL, 'admin_edit', 10, 11),
(8, 3, '', NULL, 'admin_delete', 12, 13),
(9, 2, '', NULL, 'ServerGroups', 17, 28),
(10, 9, '', NULL, 'admin_index', 18, 19),
(11, 9, '', NULL, 'admin_view', 20, 21),
(12, 9, '', NULL, 'admin_add', 22, 23),
(13, 9, '', NULL, 'admin_edit', 24, 25),
(14, 9, '', NULL, 'admin_delete', 26, 27),
(15, 2, '', NULL, 'Options', 29, 40),
(16, 15, '', NULL, 'admin_index', 30, 31),
(17, 15, '', NULL, 'admin_edit', 32, 33),
(18, 15, '', NULL, 'admin_view', 34, 35),
(19, 15, '', NULL, 'admin_add', 36, 37),
(20, 15, '', NULL, 'admin_delete', 38, 39),
(21, 2, '', NULL, 'ServerOptions', 41, 52),
(22, 21, '', NULL, 'admin_index', 42, 43),
(23, 21, '', NULL, 'admin_view', 44, 45),
(24, 21, '', NULL, 'admin_add', 46, 47),
(25, 21, '', NULL, 'admin_edit', 48, 49),
(26, 21, '', NULL, 'admin_delete', 50, 51),
(27, 2, '', NULL, 'AppUsers', 53, 68),
(28, 27, '', NULL, 'admin_index', 54, 55),
(29, 27, '', NULL, 'admin_view', 56, 57),
(30, 27, '', NULL, 'admin_add', 58, 59),
(31, 27, '', NULL, 'admin_edit', 60, 61),
(32, 27, '', NULL, 'admin_delete', 62, 63),
(33, 27, '', NULL, 'admin_search', 64, 65),
(34, 2, '', NULL, 'Groups', 69, 80),
(35, 34, '', NULL, 'admin_index', 70, 71),
(36, 34, '', NULL, 'admin_view', 72, 73),
(37, 34, '', NULL, 'admin_add', 74, 75),
(38, 34, '', NULL, 'admin_edit', 76, 77),
(39, 34, '', NULL, 'admin_delete', 78, 79),
(40, 2, '', NULL, 'PlayerSoldiers', 81, 92),
(41, 40, '', NULL, 'admin_index', 82, 83),
(42, 40, '', NULL, 'admin_view', 84, 85),
(43, 40, '', NULL, 'admin_add', 86, 87),
(44, 40, '', NULL, 'admin_edit', 88, 89),
(45, 40, '', NULL, 'admin_delete', 90, 91),
(46, 2, '', NULL, 'Maintenance', 93, 98),
(47, 46, '', NULL, 'admin_index', 94, 95),
(48, 46, '', NULL, 'admin_clearcache', 96, 97),
(49, 2, '', NULL, 'Dashboard', 99, 102),
(50, 49, '', NULL, 'admin_index', 100, 101),
(51, 3, '', NULL, 'admin_serversJson', 14, 15),
(52, 2, '', NULL, 'Home', 103, 106),
(53, 52, '', NULL, 'admin_index', 104, 105),
(54, 27, NULL, NULL, 'admin_indexJson', 66, 67);

-- --------------------------------------------------------

--
-- Table structure for table `aros`
--

CREATE TABLE IF NOT EXISTS `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `aros`
--

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`) VALUES
(1, NULL, 'Group', 1, 'Super Admin', 1, 2),
(2, NULL, 'Group', 2, 'Admin', 3, 4),
(3, NULL, 'Group', 3, 'User', 5, 6);

-- --------------------------------------------------------

--
-- Table structure for table `aros_acos`
--

CREATE TABLE IF NOT EXISTS `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `aros_acos`
--

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`) VALUES
(1, 1, 1, '1', '1', '1', '1'),
(2, 2, 3, '1', '1', '1', '1'),
(3, 2, 21, '1', '1', '1', '1'),
(4, 2, 27, '1', '1', '1', '1'),
(5, 2, 49, '1', '1', '1', '1'),
(6, 2, 52, '1', '1', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `level` tinyint(3) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `level`, `created`, `modified`) VALUES
(1, 'Super Admin', 100, '2013-03-30 18:26:27', '2013-03-30 18:26:27'),
(2, 'Admin', 40, '2013-03-30 18:27:17', '2013-03-30 18:27:17'),
(3, 'User', 1, '2013-03-30 18:27:43', '2013-03-30 18:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

CREATE TABLE IF NOT EXISTS `options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group` varchar(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` text NOT NULL,
  `locked` tinyint(1) DEFAULT NULL,
  `description` text,
  PRIMARY KEY (`id`),
  UNIQUE KEY `name` (`name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `options`
--

INSERT INTO `options` (`id`, `group`, `name`, `value`, `locked`, `description`) VALUES
(1, 'server', 'min_connections', '10', 0, 'Minimum number of connections before showing up in a league (not for certain leaderboards)'),
(2, 'server', 'hide_banned', '1', 0, 'Hide banned players from the leagues?'),
(3, 'server', 'disqus_shortname', '', 0, 'Your www.disqus.com shortname to allow comments on several places'),
(4, 'server', 'opponents_count', '15', 0, 'How many opponents to show in the opponents tab on the playerstats pages'),
(5, 'website', 'tos_organisation', 'xlrstats.com', 0, 'Terms Of Service: your clan-, community- or organisationname'),
(6, 'website', 'tos_country', 'The Netherlands', 0, 'Terms Of Service: your country'),
(7, 'website', 'homelink', 'http://www.xlrstats.com/', 0, 'URL to your main community site (http://www.blah.com)'),
(8, 'website', 'must_accept_cookies', '1', 0, 'Users must allow us to save cookies in Europe. Set this to "Yes" to satisfy the European Cookie Law'),
(9, 'website', 'google_analytics_account', '', 1, 'Your Google Analytics account for traffic analysis purposes.'),
(10, 'server', 'max_days', '60', 0, 'Maximum number of days before a player is considered M.I.A.'),
(11, 'server', 'theme', 'default', 0, 'Theme'),
(12, 'server', 'showMIA', '1', 0, 'Show M.I.A. playerblock'),
(13, 'server', 'show_donate_button', '0', 1, 'Show XLRstats donation button'),
(14, 'website', 'license', '', 1, 'Your XLRstats license key (visit http://www.xlrstats.com/license_server/licenses/add for a key)'),
(15, 'website', 'show_banlist', '1', 0, 'Show Bans or Penalties '),
(16, 'website', 'show_bans_only', '0', 0, 'Show bans only (or also penalties and kicks)'),
(17, 'server', 'ban_dispute_link', '', 0, 'Link to your ban-appeal forum - leave blank to use disqus comments'),
(18, 'server', 'ban_disputable', '1', 0, 'Allow banned players to dispute a ban'),
(19, 'server', 'min_kills', '100', 0, 'Minimum number of kills before showing up in a league (not for certain leaderboards)');

-- --------------------------------------------------------

--
-- Table structure for table `servers`
--

CREATE TABLE IF NOT EXISTS `servers` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `gamename` varchar(15) CHARACTER SET latin1 NOT NULL,
  `servername` varchar(100) CHARACTER SET latin1 NOT NULL,
  `servername_a` varchar(255) CHARACTER SET latin1 NOT NULL,
  `dbhost` varchar(255) CHARACTER SET latin1 NOT NULL,
  `dbuser` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dbpass` varchar(50) CHARACTER SET latin1 NOT NULL,
  `dbname` varchar(50) CHARACTER SET latin1 NOT NULL,
  `server_group_id` smallint(6) DEFAULT NULL,
  `statusurl` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT 'none',
  `slogan` varchar(255) CHARACTER SET latin1 NOT NULL DEFAULT 'www.xlrstats.com',
  `time_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `server_groups`
--

CREATE TABLE IF NOT EXISTS `server_groups` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `name` varchar(16) NOT NULL,
  `description` varchar(255) NOT NULL,
  `active_group` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `server_groups`
--

INSERT INTO `server_groups` (`id`, `name`, `description`, `active_group`) VALUES
(1, 'default', 'This is the default server group', 0);
-- --------------------------------------------------------

--
-- Table structure for table `server_groups_users`
--

CREATE TABLE IF NOT EXISTS `server_groups_users` (
  `id` int(6) NOT NULL AUTO_INCREMENT,
  `server_group_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `server_options`
--

CREATE TABLE IF NOT EXISTS `server_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `server_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `password` varchar(128) DEFAULT NULL,
  `password_token` varchar(128) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `email_verified` tinyint(1) DEFAULT '0',
  `email_token` varchar(255) DEFAULT NULL,
  `email_token_expires` datetime DEFAULT NULL,
  `tos` tinyint(1) DEFAULT '0',
  `active` tinyint(1) DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `last_action` datetime DEFAULT NULL,
  `is_admin` tinyint(1) DEFAULT '0',
  `group_id` int(11) NOT NULL DEFAULT '3',
  `role` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `BY_USERNAME` (`username`),
  KEY `BY_EMAIL` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(36) NOT NULL,
  `position` float NOT NULL DEFAULT '1',
  `field` varchar(255) NOT NULL,
  `value` text,
  `input` varchar(16) NOT NULL,
  `data_type` varchar(16) NOT NULL,
  `label` varchar(128) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `UNIQUE_PROFILE_PROPERTY` (`field`,`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_soldiers`
--

CREATE TABLE IF NOT EXISTS `user_soldiers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(36) NOT NULL,
  `server_id` int(5) NOT NULL,
  `playerstats_id` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
