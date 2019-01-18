<?php
/* File Name: change_pass.php
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
<?php include 'check_session.php'; ?>
<?php include 'class/TopMenu.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Change Password | <?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>
        <link type='text/css' rel='stylesheet' href='css/main.css' media='screen' />
        <script type="text/javascript" src="scripts/backgroundFunctions.js"></script>
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
        <!-- jNotify CSS -->
        <link rel="stylesheet" href="newjs/jnotify/jquery/jNotify.jquery.css" type="text/css" />
        <!-- jNotify and jQuery files -->
        <script type="text/javascript" src="newjs/jnotify/jquery/jquery.js"></script>
        <script type="text/javascript" src="newjs/jnotify/jquery/jNotify.jquery.js"></script>
    </head>
    <body>
        <div id="darkBackgroundLayer" class="darkenBackground" style="display:none"></div>
        <div id='page-wrapper'>
            <?php echo $topMenu = new TopMenu(); ?>
            <?php include 'sidebar.php'; ?>
            <div class="box">
                <h4 class="boxTitle">Change Password</h4>
                <form action="change_pass_do.php" method="post" name="passForm">
                    <table>
                        <tr><td>Username:&nbsp;&nbsp;</td><td><?php echo $_SESSION['user']->getUserId() ?></td></tr>
                        <tr><td>Current Password:&nbsp;&nbsp;</td><td><input type="password" name="curpass" tabindex="1"/></td></tr>
                        <tr><td colspan="2">&nbsp;</td></tr>
                        <tr><td>New Password:&nbsp;&nbsp;</td><td><input type="password" name="newpass" tabindex="2"/></td></tr>
                        <tr><td>Confirm New Password:&nbsp;&nbsp;</td><td><input type="password" name="confnewpass" onkeyup="checkMatch()" tabindex="3"/></td></tr>
                        <tr><td colspan="2"><input style='background-color:#FFFFFF; border:0; color:#FF0000' type='text' name='theLabel' disabled='disabled' size='50'/></td></tr>
                        <tr><td><input type="reset" value="Start Over" /></td><td class="right"><input type="submit" value="OK" style="width:5em;" onclick="return checkForm()" tabindex="4"/></td></tr>
                    </table>
                    <input type="hidden" name="referrer" value="<?php echo $_SERVER['PHP_SELF']?>" />
                </form>
            </div>
            <script type="text/javascript">
                function checkForm() {
                    if (document.passForm.curpass.value == "") {
                        alert("You forgot to supply your current password.");
                        return false;
                    }
                    if (document.passForm.newpass.value == "") {
                        alert("Please supply the new password.");
                        return false;
                    }
                    if (document.passForm.newpass.value != document.passForm.confnewpass.value) {
                        alert("Supplied passwords do not match!");
                        return false;
                    }
                    if (confirm("Are you sure you want to change your password?  "))
                        return true;
                    return false;
                }
                function checkMatch() {
                    if (document.passForm.newpass.value != document.passForm.confnewpass.value) {
                        document.passForm.theLabel.value = "Supplied passwords do not match!";
                    } else {
                        document.passForm.theLabel.value = "";
                    }
                }
            </script>
            <div id="push"></div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>