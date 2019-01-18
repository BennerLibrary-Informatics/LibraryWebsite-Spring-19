<?php
/* File Name: config.php
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
	require_once(dirname(__FILE__) . "/../shared/Database.php");
	$db = new Database();

    //Do not try to load config if it has not been installed
    $uri = explode("/", $_SERVER['REQUEST_URI']);
    if(end($uri) != 'install.php' && end($uri) != 'login.php?msg=21')
    {

        // Get all the configuration settings from the database
        $sql = "SELECT * FROM dcod_config LIMIT 1";
        $result = $db->query($sql) or die($db->error);
        $row = $result->fetch_array();

        $_SESSION['dcod_sys_name'] = $row['sys_name'];
        $_SESSION['dcod_sys_description'] = $row['sys_description'];
        $_SESSION['dcod_sys_version'] = $row['sys_version'];
        $_SESSION['dcod_sys_admin'] = $row['sys_admin'];
        $_SESSION['dcod_sys_email'] = $row['sys_email'];
        $_SESSION['dcod_sys_short_name'] = $row['sys_short_name'];

        $_SESSION['dcod_sys_domain'] = $row['sys_domain'];
        $_SESSION['dcod_sys_root'] = $row['sys_root'];

        $_SESSION['dcod_inst_long_name'] = $row['inst_long_name'];
        $_SESSION['dcod_inst_short_name'] = $row['inst_short_name'];
        $_SESSION['dcod_campus_name_long'] = $row['campus_name_long'];
        $_SESSION['dcod_campus_name_short'] = $row['campus_name_short'];
        $_SESSION['dcod_campus_initials'] = $row['campus_initials'];

        //If version doesn't have a . add .0, just because it looks prettier
        if(substr_count($_SESSION['dcod_sys_version'], ".") == 0)
            $_SESSION['dcod_sys_version'] .= ".0";
    }
    else
    {
        //Set some defaults if the database can't load them
        $_SESSION['dcod_sys_name'] = "Dynamic Content on Demand";
        $_SESSION['dcod_sys_short_name'] = "DCOD";
        $_SESSION['dcod_sys_version'] = "1.0";
    }

    //This is the default timezone for all timestamps
    date_default_timezone_set("America/Chicago");

    //This is the time for the session to stay active before logging the user out
    //DEFAULT: 3600 seconds = 60 mins = 1 hour
    //Set to 0 for no expiration.
    $sess_expire = 18000;

    //This gets global settings required for universal login from the database
    $sql = ("SELECT * FROM global_settings WHERE id = 1");
    $result = $db->query($sql) or die($db->error);
    $row = $result->fetch_array();
    //These variable are for enabling/disabling a universal login/logout system for all apps
    $universal_login = $row['universal_login'];
    $universal_logout = $row['universal_logout'];
?>
