<?php
/* File Name: create_tables.php
 * OpenSource Software Name:  Dynamic Content On Demand - DCOD
 *
 * Developer: Bruce Cheek, Michael Kirkpatrick, Matt Marcukaitis
 * Project Managers: Profs Ann Johnston and Craighton Hippenhammer,
 *     Benner Library and Resource Center, Olivet Nazarene University
 * If you use this code, let a project manager know at
 * oss-lib@olivet.edu. Thank you.
 * Copyright (C) 2013 Olivet Nazarene University
 *
 * This file is part of DCOD.
 *
 * DCOD is free software: you can redistribute it and/or modify
 * it under the terms of the Creative Commons CC-BY license at
 * http://creativecommons.org/licenses/by/3.0/
 * 
 * This license lets you distribute, remix, tweak, and build upon
 * our work, even commercially, as long as you credit us for the
 * original creation. 
 * 
 * 
 * You are free:
 *    to Share — to copy, distribute and transmit the work
 *    to Remix — to adapt the work
 *    to make commercial use of the work

 * Under the following conditions:
 *    Attribution — You must attribute the work in the manner
 * specified by the author or licensor (but not in any way that
 * suggests that they endorse you or your use of the work) with the
 * understanding that:
 *    Waiver — Any of the above conditions can be waived if you get
 * permission from the copyright holder.
 *    Public Domain — Where the work or any of its elements is in the
 * public domain under applicable law, that status is in no way
 * affected by the license.
 *    Other Rights — In no way are any of the following rights
 * affected by the license:
 *    Your fair dealing or fair use rights, or other applicable
 * copyright exceptions and limitations;
 *    The author's moral rights;
 *    Rights other persons may have either in the work itself or in
 * how the work is used, such as publicity or privacy rights.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * CC-BY License for more details.
 *
 */
?>
<?php
include 'class/config.php';

                $sql[0]=sprintf("CREATE TABLE IF NOT EXISTS `dcod_bookmark` (
  `bookmark_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID column',
  `date_created` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' COMMENT 'Date the bookmark was created',
  `name` varchar(512) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Name of the bookmark',
  `url` varchar(512) COLLATE utf8_unicode_ci NOT NULL COMMENT 'Bookmark URL',
  `invalid_url` tinyint(1) NOT NULL DEFAULT '0' COMMENT 'If the URL has been marked as invalid (i.e. the PHP file_exists function cannot verify the URL)',
  `enabled` tinyint(1) NOT NULL DEFAULT '1' COMMENT 'If the URL is enabled (i.e. will show up on link rolls)',
  `num_hits` int(11) NOT NULL DEFAULT '0' COMMENT 'The number of times this link has been visited',
  `description` text COLLATE utf8_unicode_ci COMMENT 'A short description for this bookmark',
  `last_updated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP COMMENT 'Last time this bookmark entry was updated',
  `last_reset` timestamp NULL DEFAULT NULL COMMENT 'Time when the num_hits counter was last reset',
  PRIMARY KEY (`bookmark_id`),
  FULLTEXT KEY `name` (`name`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='All bookmarks, both valid and invalid, enabled and disabled.' AUTO_INCREMENT=1");
                $sql[1]=sprintf("CREATE TABLE IF NOT EXISTS `dcod_bookmark_category` (
  `bookmark_category_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID column',
  `bookmark_id` int(11) NOT NULL COMMENT 'foreign key to the dcod_bookmark table',
  `category_id` int(11) NOT NULL COMMENT 'foreign key to the dcod_category table',
  PRIMARY KEY (`bookmark_category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1");
                $sql[2]=sprintf("CREATE TABLE IF NOT EXISTS `dcod_bookmark_tag` (
  `bookmark_tag_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID column',
  `bookmark_id` int(11) NOT NULL COMMENT 'Foreign key to dcod_bookmark table',
  `tag_id` int(11) NOT NULL COMMENT 'Foreign key to dcod_tag table',
  PRIMARY KEY (`bookmark_tag_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1");
                $sql[3]=sprintf("CREATE TABLE IF NOT EXISTS `dcod_category` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID column',
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The name of the category',
  `description` text COLLATE utf8_unicode_ci COMMENT 'A short description of the category.',
  `user_id` varchar(24) COLLATE utf8_unicode_ci DEFAULT NULL,
  `notes` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Categories create link rolls on library web site' AUTO_INCREMENT=1");
                $sql[4]=sprintf("CREATE TABLE IF NOT EXISTS `dcod_statistic` (
  `statistic_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID column',
  `bookmark_id` int(11) NOT NULL COMMENT 'Foreign key to dcod_bookmark table',
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP COMMENT 'An exact timestamp the URL was accessed',
  `ip_address` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT 'The IP address the link was access from',
  PRIMARY KEY (`statistic_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Log hits on bookmark links from this system.' AUTO_INCREMENT=1");
                $sql[5]=sprintf("CREATE TABLE IF NOT EXISTS `dcod_tag` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'ID column',
  `name` varchar(64) COLLATE utf8_unicode_ci NOT NULL COMMENT 'The tag name',
  PRIMARY KEY (`tag_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci COMMENT='Bookmark tags will be used for searching purposes only.' AUTO_INCREMENT=1");
                $sql[6]=sprintf("CREATE TABLE IF NOT EXISTS `dcod_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(256) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(128) COLLATE utf8_unicode_ci NOT NULL,
  `passwd` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `administrator` tinyint(4) NOT NULL,
  `user` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1");
                $sql[7]=sprintf("CREATE TABLE IF NOT EXISTS `dcod_config` (
  `sys_name` varchar(64) NOT NULL,
  `sys_short_name` varchar(64) NOT NULL,
  `sys_description` text NOT NULL,
  `sys_version` float NOT NULL DEFAULT '1',
  `sys_admin` varchar(64) NOT NULL,
  `sys_email` varchar(64) NOT NULL,
  `sys_domain` varchar(64) NOT NULL,
  `sys_root` varchar(64) NOT NULL,
  `inst_long_name` varchar(128) NOT NULL,
  `inst_short_name` varchar(64) NOT NULL,
  `campus_name_long` varchar(128) NOT NULL,
  `campus_name_short` varchar(64) NOT NULL,
  `campus_initials` varchar(16) NOT NULL,
  UNIQUE KEY `sys_version` (`sys_version`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;");
                $password=md5($_REQUEST['pass']);
                $sql[8]=sprintf('INSERT INTO dcod_users(user_id,name,email,passwd,administrator) VALUES("%s","%s","%s","%s",1)',
                        $db->real_escape_string($_REQUEST['user']),
                		$db->real_escape_string($_REQUEST['name']),
                		$db->real_escape_string($_REQUEST['email']),
                		$db->real_escape_string($password));
                $sql[9]=sprintf('INSERT INTO dcod_config (sys_name,sys_short_name,sys_description,sys_admin,
                                                          sys_email,sys_domain,sys_root,inst_long_name,inst_short_name,
                                                          campus_name_long,campus_name_short,campus_initials)
                                             VALUES ("%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s","%s")',
                		($_REQUEST['sys_name'] != "") ? $db->real_escape_string($_REQUEST['sys_name']) : "Dynamic Content on Demand",
                		($_REQUEST['sys_short_name'] != "") ? $db->real_escape_string($_REQUEST['sys_short_name']) : "DCOD",
                		$db->real_escape_string($_REQUEST['sys_description']),
                		$db->real_escape_string($_REQUEST['sys_admin']),
                		$db->real_escape_string($_REQUEST['sys_email']),
                		($_REQUEST['sys_domain'] != "") ? $db->real_escape_string($_REQUEST['sys_domain']) : "http://www.localhost",
                		($_REQUEST['sys_root'] != "") ? $db->real_escape_string($_REQUEST['sys_root']) : "/dcod",
                		$db->real_escape_string($_REQUEST['inst_long_name']),
                		$db->real_escape_string($_REQUEST['inst_short_name']),
                		$db->real_escape_string($_REQUEST['campus_name_long']),
                		$db->real_escape_string($_REQUEST['campus_name_short']),
                		$db->real_escape_string($_REQUEST['campus_initials']));
                
                
        for($x=0;$x<count($sql);$x++){
        	$db->query($sql[$x]) or die(header("Location: install.php?err=".$db->error));
        }
                
$file = fopen("install.php", 'r+');
rewind($file);
$old_contents = file_get_contents("install.php");
fwrite($file, "<!-- REMOVE LINE BELOW TO ALLOW REINSTALLATION -->\n<?php header('Location: login.php'); exit; ?> \n" . $old_contents);
fclose($file);

?>