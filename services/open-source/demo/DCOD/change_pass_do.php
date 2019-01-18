<?php
/* File Name: change_pass_do.php
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
<?php include 'check_session.php';?>
<?php
    $_SESSION['user'] = new User($db, $_SESSION['emp_id']);
    $qCurPass = sprintf("SELECT passwd
                          FROM dcod_users
                          WHERE user_id = '%s'",
                 $db->real_escape_string($_SESSION['user']->getUserId()));

    $rsCurPass = $db->query($qCurPass);

    $rowCurPass = $rsCurPass->fetch_array();

    // Check if current passwords match
    if ($rowCurPass['passwd'] == md5($_REQUEST['curpass'])) {
        // Check if new passwords match
        if ($_REQUEST['newpass'] == $_REQUEST['confnewpass']) {
            $qUpdatePass = sprintf("UPDATE dcod_users
                            SET passwd = '%s'
                            WHERE user_id = '%s'",
            		$db->real_escape_string(md5($_REQUEST['newpass'])),
            		$db->real_escape_string($_SESSION['user']->getUserId()));

            $resultUpdate = $db->query($qUpdatePass);
            // echo "Password Changed!";
            header("Location: mainPage.php?msg=14");
        } else {
            // New passwords didn't match, start over.
            // echo "New passwords didn't match.";
            header("Location: ".$_REQUEST['referrer']."?msg=16");
        }
    } else {
        // Current passwords didn't match, start over.
        //echo "Current password didn't match.";
        header("Location: change_pass.php?msg=15");
    }
?>