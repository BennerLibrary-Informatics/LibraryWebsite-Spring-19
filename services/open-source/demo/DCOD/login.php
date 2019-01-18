<?php
/* File Name: login.php
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
<?php session_start(); ?>
<?php include 'class/config.php' ?>
<?php include 'class/TopMenu.php'?>
<?php
    if ($universal_login == true)
    {
        if (isset($_SESSION['started']) && !isset($_SESSION['dcod_logout']))
        {
            header('Location: mainPage.php');
            exit;
        }
    }
    else if (isset($_SESSION['dcod_started']) && !isset($_SESSION['dcod_logout']))
    {
        header('Location: mainPage.php');
        exit;
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
    <head>
        <!--Creates the title given the system name and the description which are stored in the cookie.-->
        <title>Login | <?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>
        <link type='text/css' rel='stylesheet' href='css/main.css' />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="newjs/jnotify/jquery/jNotify.jquery.js"></script>
        <link rel="stylesheet" href="newjs/jnotify/jquery/jNotify.jquery.css" type="text/css" />
    </head>
    <body onload="document.loginForm.user_id.focus()">
        <div id="page-wrapper">
            <?php echo new TopMenu();?>
            <div class="box" style="width:98.5%; margin-top: 8px">
                <div style="width:98%;height:0em;"><canvas id="c"></canvas></div>
                <form action="login_do.php" method="post" name="loginForm">
                    <div align="center">
                        <h2><?php echo $_SESSION['dcod_sys_name']?></h2>
                        <table>
                            <tr>
                                <td colspan="2"></td>
                            </tr>
                            <tr>
                                <td>Username:</td><td><input name="user_id" id="user_id"  type="text" maxlength="50"  size="14"  /></td>
                            </tr>
                            <tr>
                                <td>Password:</td><td><input name="passwd" id="passwd"  type="password" maxlength="50"  size="14"  /></td>
                            </tr>
                            <tr>
                                <td colspan="2"><a href="reset_pass.php"> Reset Password</a></td>
                            </tr>
                        </table>
                    </div>
                    <center>
                        <input type="reset" name="Clear" value="Clear" />
                        <input type="hidden" name="page" value="<?php echo (isset($_GET['page'])) ? $_GET['page'] : ''; ?>" />
                        <input type="submit" name="OK" value="Log in" onclick="return checkForm()" />
                        <!--The bookmark system will not function without javascript.-->
                        <noscript>
                            <p><b>You do not appear to have JavaScript turned on.</b><br/>The resource database will not function properly unless JavaScript is enabled!</p>
                        </noscript>
                    </center>
                </form>
            </div>
        </div>
        <div class="font8" style="float:right">Version:&nbsp;<?php echo $_SESSION['dcod_sys_version']; ?></div>
        <script type='text/javascript'>
            // Checks the form to make sure that all required fields are filled in.
            function checkForm() {
                if(document.loginForm.user_id.value == "") {
                    alert("Please enter your username before continuing.");
                    return false;
                }
                if(document.loginForm.passwd.value == "") {
                    alert("Please enter your password before continuing.");
                    return false;
                }
                return true;
            }
        </script>
    </body>
</html>