-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Client: localhost
-- Généré le: Ven 04 Avril 2014 à 01:02
-- Version du serveur: 5.5.31
-- Version de PHP: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données: `TOFOLA_SN`
--
CREATE DATABASE IF NOT EXISTS `TOFOLA_SN` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `TOFOLA_SN`;

-- --------------------------------------------------------

--
-- Structure de la table `elgg_access_collections`
--

CREATE TABLE IF NOT EXISTS `elgg_access_collections` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `owner_guid` bigint(20) unsigned NOT NULL,
  `site_guid` bigint(20) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `owner_guid` (`owner_guid`),
  KEY `site_guid` (`site_guid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Structure de la table `elgg_access_collection_membership`
--

CREATE TABLE IF NOT EXISTS `elgg_access_collection_membership` (
  `user_guid` int(11) NOT NULL,
  `access_collection_id` int(11) NOT NULL,
  PRIMARY KEY (`user_guid`,`access_collection_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `elgg_annotations`
--

CREATE TABLE IF NOT EXISTS `elgg_annotations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_guid` bigint(20) unsigned NOT NULL,
  `name_id` int(11) NOT NULL,
  `value_id` int(11) NOT NULL,
  `value_type` enum('integer','text') NOT NULL,
  `owner_guid` bigint(20) unsigned NOT NULL,
  `access_id` int(11) NOT NULL,
  `time_created` int(11) NOT NULL,
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  KEY `entity_guid` (`entity_guid`),
  KEY `name_id` (`name_id`),
  KEY `value_id` (`value_id`),
  KEY `owner_guid` (`owner_guid`),
  KEY `access_id` (`access_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `elgg_api_users`
--

CREATE TABLE IF NOT EXISTS `elgg_api_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `site_guid` bigint(20) unsigned DEFAULT NULL,
  `api_key` varchar(40) DEFAULT NULL,
  `secret` varchar(40) NOT NULL,
  `active` int(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `api_key` (`api_key`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `elgg_config`
--

CREATE TABLE IF NOT EXISTS `elgg_config` (
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `site_guid` int(11) NOT NULL,
  PRIMARY KEY (`name`,`site_guid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `elgg_config`
--

INSERT INTO `elgg_config` (`name`, `value`, `site_guid`) VALUES
('view', 's:7:"default";', 1),
('language', 's:2:"fr";', 1),
('default_access', 's:1:"0";', 1),
('allow_registration', 'b:1;', 1),
('walled_garden', 'b:0;', 1),
('allow_user_default_access', 's:0:"";', 1);

-- --------------------------------------------------------

--
-- Structure de la table `elgg_datalists`
--

CREATE TABLE IF NOT EXISTS `elgg_datalists` (
  `name` varchar(255) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`name`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `elgg_datalists`
--

INSERT INTO `elgg_datalists` (`name`, `value`) VALUES
('filestore_run_once', '1396560418'),
('plugin_run_once', '1396560418'),
('elgg_widget_run_once', '1396560418'),
('installed', '1396560658'),
('path', '/Applications/XAMPP/xamppfiles/htdocs/TOFOLA/SN/'),
('dataroot', '/Applications/XAMPP/xamppfiles/htdocs/TOFOLA/uploads/'),
('default_site', '1'),
('version', '2014012000'),
('simplecache_enabled', '1'),
('system_cache_enabled', '1'),
('processed_upgrades', 'a:45:{i:0;s:14:"2008100701.php";i:1;s:14:"2008101303.php";i:2;s:14:"2009022701.php";i:3;s:14:"2009041701.php";i:4;s:14:"2009070101.php";i:5;s:14:"2009102801.php";i:6;s:14:"2010010501.php";i:7;s:14:"2010033101.php";i:8;s:14:"2010040201.php";i:9;s:14:"2010052601.php";i:10;s:14:"2010060101.php";i:11;s:14:"2010060401.php";i:12;s:14:"2010061501.php";i:13;s:14:"2010062301.php";i:14;s:14:"2010062302.php";i:15;s:14:"2010070301.php";i:16;s:14:"2010071001.php";i:17;s:14:"2010071002.php";i:18;s:14:"2010111501.php";i:19;s:14:"2010121601.php";i:20;s:14:"2010121602.php";i:21;s:14:"2010121701.php";i:22;s:14:"2010123101.php";i:23;s:14:"2011010101.php";i:24;s:61:"2011021800-1.8_svn-goodbye_walled_garden-083121a656d06894.php";i:25;s:61:"2011022000-1.8_svn-custom_profile_fields-390ac967b0bb5665.php";i:26;s:60:"2011030700-1.8_svn-blog_status_metadata-4645225d7b440876.php";i:27;s:51:"2011031300-1.8_svn-twitter_api-12b832a5a7a3e1bd.php";i:28;s:57:"2011031600-1.8_svn-datalist_grows_up-0b8aec5a55cc1e1c.php";i:29;s:61:"2011032000-1.8_svn-widgets_arent_plugins-61836261fa280a5c.php";i:30;s:59:"2011032200-1.8_svn-admins_like_widgets-7f19d2783c1680d3.php";i:31;s:14:"2011052801.php";i:32;s:60:"2011061200-1.8b1-sites_need_a_site_guid-6d9dcbf46c0826cc.php";i:33;s:62:"2011092500-1.8.0.1-forum_reply_river_view-5758ce8d86ac56ce.php";i:34;s:54:"2011123100-1.8.2-fix_friend_river-b17e7ff8345c2269.php";i:35;s:53:"2011123101-1.8.2-fix_blog_status-b14c2a0e7b9e7d55.php";i:36;s:50:"2012012000-1.8.3-ip_in_syslog-87fe0f068cf62428.php";i:37;s:50:"2012012100-1.8.3-system_cache-93100e7d55a24a11.php";i:38;s:59:"2012041800-1.8.3-dont_filter_passwords-c0ca4a18b38ae2bc.php";i:39;s:58:"2012041801-1.8.3-multiple_user_tokens-852225f7fd89f6c5.php";i:40;s:59:"2013030600-1.8.13-update_user_location-8999eb8bf1bdd9a3.php";i:41;s:62:"2013051700-1.8.15-add_missing_group_index-52a63a3a3ffaced2.php";i:42;s:53:"2013052900-1.8.15-ipv6_in_syslog-f5c2cc0196e9e731.php";i:43;s:50:"2013060900-1.8.15-site_secret-404fc165cf9e0ac9.php";i:44;s:50:"2014012000-1.8.18-remember_me-9a8a433685cf7be9.php";}'),
('admin_registered', '1'),
('simplecache_lastupdate_default', '1396565182'),
('simplecache_lastcached_default', '1396565182'),
('__site_secret__', 'z5ngRa8v1d82FHWOWH-cW7jXRIzd4sKr'),
('simplecache_lastupdate_failsafe', '0'),
('simplecache_lastcached_failsafe', '0'),
('simplecache_lastupdate_foaf', '0'),
('simplecache_lastcached_foaf', '0'),
('simplecache_lastupdate_ical', '0'),
('simplecache_lastcached_ical', '0'),
('simplecache_lastupdate_installation', '0'),
('simplecache_lastcached_installation', '0'),
('simplecache_lastupdate_json', '0'),
('simplecache_lastcached_json', '0'),
('simplecache_lastupdate_opendd', '0'),
('simplecache_lastcached_opendd', '0'),
('simplecache_lastupdate_php', '0'),
('simplecache_lastcached_php', '0'),
('simplecache_lastupdate_rss', '0'),
('simplecache_lastcached_rss', '0'),
('simplecache_lastupdate_xml', '0'),
('simplecache_lastcached_xml', '0');

-- --------------------------------------------------------

--
-- Structure de la table `elgg_entities`
--

CREATE TABLE IF NOT EXISTS `elgg_entities` (
  `guid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `type` enum('object','user','group','site') NOT NULL,
  `subtype` int(11) DEFAULT NULL,
  `owner_guid` bigint(20) unsigned NOT NULL,
  `site_guid` bigint(20) unsigned NOT NULL,
  `container_guid` bigint(20) unsigned NOT NULL,
  `access_id` int(11) NOT NULL,
  `time_created` int(11) NOT NULL,
  `time_updated` int(11) NOT NULL,
  `last_action` int(11) NOT NULL DEFAULT '0',
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`guid`),
  KEY `type` (`type`),
  KEY `subtype` (`subtype`),
  KEY `owner_guid` (`owner_guid`),
  KEY `site_guid` (`site_guid`),
  KEY `container_guid` (`container_guid`),
  KEY `access_id` (`access_id`),
  KEY `time_created` (`time_created`),
  KEY `time_updated` (`time_updated`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=40 ;

--
-- Contenu de la table `elgg_entities`
--

INSERT INTO `elgg_entities` (`guid`, `type`, `subtype`, `owner_guid`, `site_guid`, `container_guid`, `access_id`, `time_created`, `time_updated`, `last_action`, `enabled`) VALUES
(1, 'site', 0, 0, 1, 0, 2, 1396560658, 1396564653, 1396560658, 'yes'),
(2, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(3, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(4, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(5, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(6, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(7, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(8, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(9, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(10, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(11, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(12, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(13, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(14, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(15, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(16, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(17, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(18, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(19, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(20, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(21, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(22, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(23, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(24, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(25, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(26, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(27, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(28, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(29, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(30, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(31, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(32, 'object', 2, 1, 1, 1, 2, 1396560658, 1396560658, 1396560658, 'yes'),
(33, 'user', 0, 0, 1, 0, 2, 1396560716, 1396564688, 1396560716, 'yes'),
(34, 'object', 3, 33, 1, 33, 0, 1396560716, 1396560716, 1396560716, 'yes'),
(35, 'object', 3, 33, 1, 33, 0, 1396560716, 1396560716, 1396560716, 'yes'),
(36, 'object', 3, 33, 1, 33, 0, 1396560716, 1396560716, 1396560716, 'yes'),
(37, 'object', 3, 33, 1, 33, 0, 1396560716, 1396560716, 1396560716, 'yes'),
(38, 'object', 3, 33, 1, 33, 0, 1396560716, 1396560716, 1396560716, 'yes'),
(39, 'object', 2, 1, 1, 1, 2, 1396562817, 1396562817, 1396562817, 'yes');

-- --------------------------------------------------------

--
-- Structure de la table `elgg_entity_relationships`
--

CREATE TABLE IF NOT EXISTS `elgg_entity_relationships` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `guid_one` bigint(20) unsigned NOT NULL,
  `relationship` varchar(50) NOT NULL,
  `guid_two` bigint(20) unsigned NOT NULL,
  `time_created` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `guid_one` (`guid_one`,`relationship`,`guid_two`),
  KEY `relationship` (`relationship`),
  KEY `guid_two` (`guid_two`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=24 ;

--
-- Contenu de la table `elgg_entity_relationships`
--

INSERT INTO `elgg_entity_relationships` (`id`, `guid_one`, `relationship`, `guid_two`, `time_created`) VALUES
(1, 2, 'active_plugin', 1, 1396560658),
(2, 3, 'active_plugin', 1, 1396560658),
(3, 11, 'active_plugin', 1, 1396560658),
(4, 12, 'active_plugin', 1, 1396560658),
(5, 13, 'active_plugin', 1, 1396560658),
(6, 14, 'active_plugin', 1, 1396560658),
(7, 15, 'active_plugin', 1, 1396560659),
(8, 16, 'active_plugin', 1, 1396560659),
(9, 17, 'active_plugin', 1, 1396560659),
(10, 18, 'active_plugin', 1, 1396560659),
(11, 19, 'active_plugin', 1, 1396560659),
(12, 20, 'active_plugin', 1, 1396560659),
(13, 21, 'active_plugin', 1, 1396560659),
(14, 22, 'active_plugin', 1, 1396560659),
(15, 23, 'active_plugin', 1, 1396560659),
(16, 24, 'active_plugin', 1, 1396560659),
(17, 25, 'active_plugin', 1, 1396560659),
(18, 26, 'active_plugin', 1, 1396560659),
(19, 28, 'active_plugin', 1, 1396560659),
(20, 29, 'active_plugin', 1, 1396560659),
(21, 31, 'active_plugin', 1, 1396560659),
(22, 32, 'active_plugin', 1, 1396560659),
(23, 33, 'member_of_site', 1, 1396560716);

-- --------------------------------------------------------

--
-- Structure de la table `elgg_entity_subtypes`
--

CREATE TABLE IF NOT EXISTS `elgg_entity_subtypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` enum('object','user','group','site') NOT NULL,
  `subtype` varchar(50) NOT NULL,
  `class` varchar(50) NOT NULL DEFAULT '',
  PRIMARY KEY (`id`),
  UNIQUE KEY `type` (`type`,`subtype`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Contenu de la table `elgg_entity_subtypes`
--

INSERT INTO `elgg_entity_subtypes` (`id`, `type`, `subtype`, `class`) VALUES
(1, 'object', 'file', 'ElggFile'),
(2, 'object', 'plugin', 'ElggPlugin'),
(3, 'object', 'widget', 'ElggWidget'),
(4, 'object', 'blog', 'ElggBlog'),
(5, 'object', 'thewire', 'ElggWire');

-- --------------------------------------------------------

--
-- Structure de la table `elgg_geocode_cache`
--

CREATE TABLE IF NOT EXISTS `elgg_geocode_cache` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `location` varchar(128) DEFAULT NULL,
  `lat` varchar(20) DEFAULT NULL,
  `long` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `location` (`location`)
) ENGINE=MEMORY DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `elgg_groups_entity`
--

CREATE TABLE IF NOT EXISTS `elgg_groups_entity` (
  `guid` bigint(20) unsigned NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`guid`),
  KEY `name` (`name`(50)),
  KEY `description` (`description`(50)),
  FULLTEXT KEY `name_2` (`name`,`description`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `elgg_hmac_cache`
--

CREATE TABLE IF NOT EXISTS `elgg_hmac_cache` (
  `hmac` varchar(255) NOT NULL,
  `ts` int(11) NOT NULL,
  PRIMARY KEY (`hmac`),
  KEY `ts` (`ts`)
) ENGINE=MEMORY DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `elgg_metadata`
--

CREATE TABLE IF NOT EXISTS `elgg_metadata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_guid` bigint(20) unsigned NOT NULL,
  `name_id` int(11) NOT NULL,
  `value_id` int(11) NOT NULL,
  `value_type` enum('integer','text') NOT NULL,
  `owner_guid` bigint(20) unsigned NOT NULL,
  `access_id` int(11) NOT NULL,
  `time_created` int(11) NOT NULL,
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes',
  PRIMARY KEY (`id`),
  KEY `entity_guid` (`entity_guid`),
  KEY `name_id` (`name_id`),
  KEY `value_id` (`value_id`),
  KEY `owner_guid` (`owner_guid`),
  KEY `access_id` (`access_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `elgg_metadata`
--

INSERT INTO `elgg_metadata` (`id`, `entity_guid`, `name_id`, `value_id`, `value_type`, `owner_guid`, `access_id`, `time_created`, `enabled`) VALUES
(7, 1, 1, 2, 'text', 33, 2, 1396564653, 'yes'),
(2, 33, 3, 4, 'text', 33, 2, 1396560716, 'yes'),
(3, 33, 5, 4, 'text', 0, 2, 1396560716, 'yes'),
(4, 33, 6, 7, 'text', 0, 2, 1396560716, 'yes');

-- --------------------------------------------------------

--
-- Structure de la table `elgg_metastrings`
--

CREATE TABLE IF NOT EXISTS `elgg_metastrings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `string` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `string` (`string`(50))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- Contenu de la table `elgg_metastrings`
--

INSERT INTO `elgg_metastrings` (`id`, `string`) VALUES
(1, 'email'),
(2, 'naoufal.zerai@gmail.com'),
(3, 'notification:method:email'),
(4, '1'),
(5, 'validated'),
(6, 'validated_method'),
(7, 'admin_user');

-- --------------------------------------------------------

--
-- Structure de la table `elgg_objects_entity`
--

CREATE TABLE IF NOT EXISTS `elgg_objects_entity` (
  `guid` bigint(20) unsigned NOT NULL,
  `title` text NOT NULL,
  `description` text NOT NULL,
  PRIMARY KEY (`guid`),
  FULLTEXT KEY `title` (`title`,`description`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `elgg_objects_entity`
--

INSERT INTO `elgg_objects_entity` (`guid`, `title`, `description`) VALUES
(2, 'blog', ''),
(3, 'bookmarks', ''),
(4, 'categories', ''),
(5, 'custom_index', ''),
(6, 'dashboard', ''),
(7, 'developers', ''),
(8, 'diagnostics', ''),
(9, 'embed', ''),
(10, 'externalpages', ''),
(11, 'file', ''),
(12, 'garbagecollector', ''),
(13, 'groups', ''),
(14, 'htmlawed', ''),
(15, 'invitefriends', ''),
(16, 'likes', ''),
(17, 'logbrowser', ''),
(18, 'logrotate', ''),
(19, 'members', ''),
(20, 'messageboard', ''),
(21, 'messages', ''),
(22, 'notifications', ''),
(23, 'pages', ''),
(24, 'profile', ''),
(25, 'reportedcontent', ''),
(26, 'search', ''),
(27, 'tagcloud', ''),
(28, 'thewire', ''),
(29, 'tinymce', ''),
(30, 'twitter_api', ''),
(31, 'uservalidationbyemail', ''),
(32, 'zaudio', ''),
(34, '', ''),
(35, '', ''),
(36, '', ''),
(37, '', ''),
(38, '', ''),
(39, 'twitter', '');

-- --------------------------------------------------------

--
-- Structure de la table `elgg_private_settings`
--

CREATE TABLE IF NOT EXISTS `elgg_private_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `entity_guid` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `value` text NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `entity_guid` (`entity_guid`,`name`),
  KEY `name` (`name`),
  KEY `value` (`value`(50))
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=56 ;

--
-- Contenu de la table `elgg_private_settings`
--

INSERT INTO `elgg_private_settings` (`id`, `entity_guid`, `name`, `value`) VALUES
(1, 2, 'elgg:internal:priority', '1'),
(2, 3, 'elgg:internal:priority', '2'),
(3, 4, 'elgg:internal:priority', '3'),
(4, 5, 'elgg:internal:priority', '4'),
(5, 6, 'elgg:internal:priority', '5'),
(6, 7, 'elgg:internal:priority', '6'),
(7, 8, 'elgg:internal:priority', '7'),
(8, 9, 'elgg:internal:priority', '8'),
(9, 10, 'elgg:internal:priority', '9'),
(10, 11, 'elgg:internal:priority', '10'),
(11, 12, 'elgg:internal:priority', '11'),
(12, 13, 'elgg:internal:priority', '12'),
(13, 14, 'elgg:internal:priority', '13'),
(14, 15, 'elgg:internal:priority', '14'),
(15, 16, 'elgg:internal:priority', '15'),
(16, 17, 'elgg:internal:priority', '16'),
(17, 18, 'elgg:internal:priority', '17'),
(18, 19, 'elgg:internal:priority', '18'),
(19, 20, 'elgg:internal:priority', '19'),
(20, 21, 'elgg:internal:priority', '20'),
(21, 22, 'elgg:internal:priority', '21'),
(22, 23, 'elgg:internal:priority', '22'),
(23, 24, 'elgg:internal:priority', '23'),
(24, 25, 'elgg:internal:priority', '24'),
(25, 26, 'elgg:internal:priority', '25'),
(26, 27, 'elgg:internal:priority', '26'),
(27, 28, 'elgg:internal:priority', '27'),
(28, 29, 'elgg:internal:priority', '28'),
(29, 30, 'elgg:internal:priority', '29'),
(30, 31, 'elgg:internal:priority', '30'),
(31, 32, 'elgg:internal:priority', '31'),
(32, 34, 'handler', 'control_panel'),
(33, 34, 'context', 'admin'),
(34, 34, 'column', '1'),
(35, 34, 'order', '0'),
(36, 35, 'handler', 'admin_welcome'),
(37, 35, 'context', 'admin'),
(38, 35, 'order', '10'),
(39, 35, 'column', '1'),
(40, 36, 'handler', 'online_users'),
(41, 36, 'context', 'admin'),
(42, 36, 'column', '2'),
(43, 36, 'order', '-10'),
(44, 37, 'handler', 'new_users'),
(45, 37, 'context', 'admin'),
(46, 37, 'order', '10'),
(47, 37, 'column', '2'),
(48, 38, 'handler', 'content_stats'),
(49, 38, 'context', 'admin'),
(50, 38, 'order', '20'),
(51, 38, 'column', '2'),
(52, 36, 'num_display', '8'),
(53, 37, 'num_display', '5'),
(54, 38, 'num_display', '8'),
(55, 39, 'elgg:internal:priority', '32');

-- --------------------------------------------------------

--
-- Structure de la table `elgg_river`
--

CREATE TABLE IF NOT EXISTS `elgg_river` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `type` varchar(8) NOT NULL,
  `subtype` varchar(32) NOT NULL,
  `action_type` varchar(32) NOT NULL,
  `access_id` int(11) NOT NULL,
  `view` text NOT NULL,
  `subject_guid` int(11) NOT NULL,
  `object_guid` int(11) NOT NULL,
  `annotation_id` int(11) NOT NULL,
  `posted` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `type` (`type`),
  KEY `action_type` (`action_type`),
  KEY `access_id` (`access_id`),
  KEY `subject_guid` (`subject_guid`),
  KEY `object_guid` (`object_guid`),
  KEY `annotation_id` (`annotation_id`),
  KEY `posted` (`posted`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `elgg_sites_entity`
--

CREATE TABLE IF NOT EXISTS `elgg_sites_entity` (
  `guid` bigint(20) unsigned NOT NULL,
  `name` text NOT NULL,
  `description` text NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`guid`),
  UNIQUE KEY `url` (`url`),
  FULLTEXT KEY `name` (`name`,`description`,`url`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `elgg_sites_entity`
--

INSERT INTO `elgg_sites_entity` (`guid`, `name`, `description`, `url`) VALUES
(1, 'TOFOLA', '', 'http://localhost/TOFOLA/SN/');

-- --------------------------------------------------------

--
-- Structure de la table `elgg_system_log`
--

CREATE TABLE IF NOT EXISTS `elgg_system_log` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `object_id` int(11) NOT NULL,
  `object_class` varchar(50) NOT NULL,
  `object_type` varchar(50) NOT NULL,
  `object_subtype` varchar(50) NOT NULL,
  `event` varchar(50) NOT NULL,
  `performed_by_guid` int(11) NOT NULL,
  `owner_guid` int(11) NOT NULL,
  `access_id` int(11) NOT NULL,
  `enabled` enum('yes','no') NOT NULL DEFAULT 'yes',
  `time_created` int(11) NOT NULL,
  `ip_address` varchar(46) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `object_id` (`object_id`),
  KEY `object_class` (`object_class`),
  KEY `object_type` (`object_type`),
  KEY `object_subtype` (`object_subtype`),
  KEY `event` (`event`),
  KEY `performed_by_guid` (`performed_by_guid`),
  KEY `access_id` (`access_id`),
  KEY `time_created` (`time_created`),
  KEY `river_key` (`object_type`,`object_subtype`,`event`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=73 ;

--
-- Contenu de la table `elgg_system_log`
--

INSERT INTO `elgg_system_log` (`id`, `object_id`, `object_class`, `object_type`, `object_subtype`, `event`, `performed_by_guid`, `owner_guid`, `access_id`, `enabled`, `time_created`, `ip_address`) VALUES
(1, 2, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(2, 3, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(3, 4, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(4, 5, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(5, 6, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(6, 7, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(7, 8, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(8, 9, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(9, 10, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(10, 11, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(11, 12, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(12, 13, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(13, 14, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(14, 15, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(15, 16, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(16, 17, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(17, 18, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(18, 19, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(19, 20, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(20, 21, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(21, 22, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(22, 23, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(23, 24, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(24, 25, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(25, 26, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(26, 27, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(27, 28, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(28, 29, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(29, 30, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(30, 31, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(31, 32, 'ElggPlugin', 'object', 'plugin', 'create', 0, 1, 2, 'yes', 1396560658, '::1'),
(32, 1, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560658, '::1'),
(33, 7, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560659, '::1'),
(34, 8, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560659, '::1'),
(35, 9, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560659, '::1'),
(36, 10, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560659, '::1'),
(37, 11, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560659, '::1'),
(38, 12, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560659, '::1'),
(39, 13, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560659, '::1'),
(40, 14, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560659, '::1'),
(41, 15, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560659, '::1'),
(42, 16, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560659, '::1'),
(43, 17, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560659, '::1'),
(44, 18, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560659, '::1'),
(45, 19, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560659, '::1'),
(46, 20, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560659, '::1'),
(47, 21, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560659, '::1'),
(48, 22, 'ElggRelationship', 'relationship', 'active_plugin', 'create', 0, 0, 2, 'yes', 1396560659, '::1'),
(49, 23, 'ElggRelationship', 'relationship', 'member_of_site', 'create', 0, 0, 2, 'yes', 1396560716, '::1'),
(50, 33, 'ElggUser', 'user', '', 'create', 0, 0, 2, 'yes', 1396560716, '::1'),
(51, 2, 'ElggMetadata', 'metadata', 'notification:method:email', 'create', 0, 33, 2, 'yes', 1396560716, '::1'),
(52, 34, 'ElggWidget', 'object', 'widget', 'create', 0, 33, 0, 'yes', 1396560716, '::1'),
(53, 35, 'ElggWidget', 'object', 'widget', 'create', 0, 33, 0, 'yes', 1396560716, '::1'),
(54, 36, 'ElggWidget', 'object', 'widget', 'create', 0, 33, 0, 'yes', 1396560716, '::1'),
(55, 37, 'ElggWidget', 'object', 'widget', 'create', 0, 33, 0, 'yes', 1396560716, '::1'),
(56, 38, 'ElggWidget', 'object', 'widget', 'create', 0, 33, 0, 'yes', 1396560716, '::1'),
(57, 33, 'ElggUser', 'user', '', 'make_admin', 0, 0, 2, 'yes', 1396560716, '::1'),
(58, 3, 'ElggMetadata', 'metadata', 'validated', 'create', 0, 0, 2, 'yes', 1396560716, '::1'),
(59, 4, 'ElggMetadata', 'metadata', 'validated_method', 'create', 0, 0, 2, 'yes', 1396560716, '::1'),
(60, 33, 'ElggUser', 'user', '', 'update', 33, 0, 2, 'yes', 1396560716, '::1'),
(61, 33, 'ElggUser', 'user', '', 'login', 33, 0, 2, 'yes', 1396560716, '::1'),
(62, 39, 'ElggPlugin', 'object', 'plugin', 'create', 33, 1, 2, 'yes', 1396562818, '::1'),
(63, 1, 'ElggMetadata', 'metadata', 'email', 'delete', 33, 0, 2, 'yes', 1396562887, '::1'),
(64, 5, 'ElggMetadata', 'metadata', 'email', 'create', 33, 33, 2, 'yes', 1396562887, '::1'),
(65, 1, 'ElggSite', 'site', '', 'update', 33, 0, 2, 'yes', 1396562887, '::1'),
(66, 5, 'ElggMetadata', 'metadata', 'email', 'delete', 33, 33, 2, 'yes', 1396564346, '::1'),
(67, 6, 'ElggMetadata', 'metadata', 'email', 'create', 33, 33, 2, 'yes', 1396564346, '::1'),
(68, 1, 'ElggSite', 'site', '', 'update', 33, 0, 2, 'yes', 1396564346, '::1'),
(69, 6, 'ElggMetadata', 'metadata', 'email', 'delete', 33, 33, 2, 'yes', 1396564653, '::1'),
(70, 7, 'ElggMetadata', 'metadata', 'email', 'create', 33, 33, 2, 'yes', 1396564653, '::1'),
(71, 1, 'ElggSite', 'site', '', 'update', 33, 0, 2, 'yes', 1396564653, '::1'),
(72, 33, 'ElggUser', 'user', '', 'update', 33, 0, 2, 'yes', 1396564688, '::1');

-- --------------------------------------------------------

--
-- Structure de la table `elgg_users_apisessions`
--

CREATE TABLE IF NOT EXISTS `elgg_users_apisessions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_guid` bigint(20) unsigned NOT NULL,
  `site_guid` bigint(20) unsigned NOT NULL,
  `token` varchar(40) DEFAULT NULL,
  `expires` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_guid` (`user_guid`,`site_guid`),
  KEY `token` (`token`)
) ENGINE=MEMORY DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Structure de la table `elgg_users_entity`
--

CREATE TABLE IF NOT EXISTS `elgg_users_entity` (
  `guid` bigint(20) unsigned NOT NULL,
  `name` text NOT NULL,
  `username` varchar(128) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `salt` varchar(8) NOT NULL DEFAULT '',
  `email` text NOT NULL,
  `language` varchar(6) NOT NULL DEFAULT '',
  `code` varchar(32) NOT NULL DEFAULT '',
  `banned` enum('yes','no') NOT NULL DEFAULT 'no',
  `admin` enum('yes','no') NOT NULL DEFAULT 'no',
  `last_action` int(11) NOT NULL DEFAULT '0',
  `prev_last_action` int(11) NOT NULL DEFAULT '0',
  `last_login` int(11) NOT NULL DEFAULT '0',
  `prev_last_login` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`guid`),
  UNIQUE KEY `username` (`username`),
  KEY `password` (`password`),
  KEY `email` (`email`(50)),
  KEY `code` (`code`),
  KEY `last_action` (`last_action`),
  KEY `last_login` (`last_login`),
  KEY `admin` (`admin`),
  FULLTEXT KEY `name` (`name`),
  FULLTEXT KEY `name_2` (`name`,`username`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `elgg_users_entity`
--

INSERT INTO `elgg_users_entity` (`guid`, `name`, `username`, `password`, `salt`, `email`, `language`, `code`, `banned`, `admin`, `last_action`, `prev_last_action`, `last_login`, `prev_last_login`) VALUES
(33, 'admin', 'admin', '8ae090149278b82ac753af787fb12250', 'c4bs3xbL', 'naoufal.zerai@gmail.com', 'fr', '', 'no', 'yes', 1396566011, 1396566011, 1396560716, 0);

-- --------------------------------------------------------

--
-- Structure de la table `elgg_users_sessions`
--

CREATE TABLE IF NOT EXISTS `elgg_users_sessions` (
  `session` varchar(255) NOT NULL,
  `ts` int(11) unsigned NOT NULL DEFAULT '0',
  `data` mediumblob,
  PRIMARY KEY (`session`),
  KEY `ts` (`ts`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Contenu de la table `elgg_users_sessions`
--

INSERT INTO `elgg_users_sessions` (`session`, `ts`, `data`) VALUES
('l1t0kkki0evfdkspbm0haneti6', 1396566011, 0x5f5f656c67675f73657373696f6e7c733a33323a226533326433663033643165393939343131626631373065393766656466663035223b757365727c4f3a383a22456c676755736572223a383a7b733a31353a22002a0075726c5f6f76657272696465223b4e3b733a31363a22002a0069636f6e5f6f76657272696465223b4e3b733a31363a22002a0074656d705f6d65746164617461223b613a303a7b7d733a31393a22002a0074656d705f616e6e6f746174696f6e73223b613a303a7b7d733a32343a22002a0074656d705f707269766174655f73657474696e6773223b613a303a7b7d733a31313a22002a00766f6c6174696c65223b613a303a7b7d733a31333a22002a0061747472696275746573223b613a32353a7b733a343a2267756964223b693a33333b733a343a2274797065223b733a343a2275736572223b733a373a2273756274797065223b733a313a2230223b733a31303a226f776e65725f67756964223b733a313a2230223b733a393a22736974655f67756964223b733a313a2231223b733a31343a22636f6e7461696e65725f67756964223b733a313a2230223b733a393a226163636573735f6964223b733a313a2232223b733a31323a2274696d655f63726561746564223b733a31303a2231333936353630373136223b733a31323a2274696d655f75706461746564223b733a31303a2231333936353634363838223b733a31313a226c6173745f616374696f6e223b733a31303a2231333936353636303131223b733a373a22656e61626c6564223b733a333a22796573223b733a31323a227461626c65735f73706c6974223b693a323b733a31333a227461626c65735f6c6f61646564223b693a323b733a343a226e616d65223b733a353a2261646d696e223b733a383a22757365726e616d65223b733a353a2261646d696e223b733a383a2270617373776f7264223b733a33323a223861653039303134393237386238326163373533616637383766623132323530223b733a343a2273616c74223b733a383a22633462733378624c223b733a353a22656d61696c223b733a32333a226e616f7566616c2e7a6572616940676d61696c2e636f6d223b733a383a226c616e6775616765223b733a323a226672223b733a343a22636f6465223b733a303a22223b733a363a2262616e6e6564223b733a323a226e6f223b733a353a2261646d696e223b733a333a22796573223b733a31363a22707265765f6c6173745f616374696f6e223b733a31303a2231333936353635393934223b733a31303a226c6173745f6c6f67696e223b733a31303a2231333936353630373136223b733a31353a22707265765f6c6173745f6c6f67696e223b733a313a2230223b7d733a383a22002a0076616c6964223b623a303b7d677569647c693a33333b69647c693a33333b757365726e616d657c733a353a2261646d696e223b6e616d657c733a353a2261646d696e223b6d73677c613a303a7b7d);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
