<?php
/* File Name: reset_pass.php
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
<?php include 'class/config.php' ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
    <!--Creates the title given the system name and the description which are stored in the cookie.-->
    <title>Reset Password | <?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>
    <link type='text/css' rel='stylesheet' href='css/main.css' />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
</head>
<body onload="document.resetPasswordForm.user_id.focus()">
    <div id="page-wrapper">
        <div class="box" style="width:98.5%; margin-top: 8px">
            <div style="width:98%;height:0em;"><canvas id="c"></canvas></div>
            <form action="reset_pass_do.php" method="post" name="resetPasswordForm">
                <div align="center">
                <h4 align="left" class="boxTitle">Reset Password</h4>
                    <p>Forgot your password? No problem. We'll send a new one to your e-mail.</p>
                    <table>
                        <tr><td align='left'><b>Username:</b>&nbsp;<input type='text' name='user_id' maxlength='15'/></td></tr>
                        <tr><td>&nbsp;</td></tr>
                    </table>
                </div>
                <center>
                    <input type="submit" name="OK" value="OK" onclick="return checkForm()" />
                    <input type="button" name="Cancel" value="Cancel" onclick="window.location='login.php'" /><br/>
                </center>
            </form>
        </div>
    </div>
    <div class="font8" style="float:right">Version:&nbsp;<?php echo $_SESSION['dcod_sys_version']; ?></div>
</body>
</html>
<script type='text/javascript'>
// Checks the form to make sure that all required fields are filled in.
function checkForm() {
    if (document.resetPasswordForm.user_id.value == "") {
        alert("Hey, wait a minute! You forgot to enter your username!");
        return false;
    }
    return true;
}
</script>