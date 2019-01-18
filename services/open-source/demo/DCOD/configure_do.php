<?php
/* File Name: configure_do.php
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
<?php include 'class/config.php'; ?>
<?php
    session_start();
    $sql = sprintf("UPDATE dcod_config SET sys_name='%s', sys_short_name='%s', sys_description='%s', sys_admin='%s',
            sys_email='%s', sys_domain='%s', sys_root='%s', inst_long_name='%s', inst_short_name='%s',
            campus_name_long='%s', campus_name_short='%s', campus_initials='%s'",
            $db->real_escape_string($_REQUEST['sys_name']),
    		$db->real_escape_string($_REQUEST['sys_short_name']),
    		$db->real_escape_string($_REQUEST['sys_description']),
    		$db->real_escape_string($_REQUEST['sys_admin']),
    		$db->real_escape_string($_REQUEST['sys_email']),
    		$db->real_escape_string($_REQUEST['sys_domain']),
    		$db->real_escape_string($_REQUEST['sys_root']),
    		$db->real_escape_string($_REQUEST['inst_long_name']),
    		$db->real_escape_string($_REQUEST['inst_short_name']),
    		$db->real_escape_string($_REQUEST['campus_name_long']),
    		$db->real_escape_string($_REQUEST['campus_name_short']),
    		$db->real_escape_string($_REQUEST['campus_initials']));
    $result = $db->query($sql) or die($db->error);
    
    if($result > 0)
        header("Location: configure.php?msg=26");
    else
        header("Location: configure.php?msg=27");
?>