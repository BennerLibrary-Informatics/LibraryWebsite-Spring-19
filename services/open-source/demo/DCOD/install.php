<!-- REMOVE LINE BELOW TO ALLOW REINSTALLATION -->
<?php header('Location: login.php'); exit; ?>
<?php
/* File Name: install.php
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
<?php include 'class/TopMenu.php'?>
<html>
    <head>
        <!--Creates the title given the system name and the description which are stored in the cookie.-->
        <title>DCOD Installation</title>
        <link type='text/css' rel='stylesheet' href='css/main.css' />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
        <script type="text/javascript" src="newjs/jnotify/jquery/jNotify.jquery.js"></script>
        <link rel="stylesheet" href="newjs/jnotify/jquery/jNotify.jquery.css" type="text/css" />
        <script type="text/javascript">
            function help(id) {
                win = window.open("help.php?id="+id,"help_win","toolbar=0,location=0,status=0,scrollbars=0,resizable=0,width=300,height=200,top=400");
            }
        </script>
    </head>
    <body onload="document.installForm.admin_name.focus()">
        <div id="page-wrapper">
            <?php echo new TopMenu();?>
            <?php if(isset($_GET['err']))
            {
            ?>
                <div class="box" style="width:100%;">                
                    <h4 class='boxTitle'>Error</h4>
                    <?php echo $_GET['err']; ?>
                </div>
            <?php
            }
            ?>
            <div class="box" style="width:100%;">                
                <h4 class='boxTitle'>DCOD Setup</h4>
                <form action="install_do.php" method="post" name="installForm">
                        <table style="float:left; margin-left: 1.5em">
                            <tr><td><a href="javascript:void(0)" onclick="help(0);" class="help" title="Ex: John Doe"><img src="images/help.png"></a><input type='text' id='admin_name' name='admin_name' placeholder='Administrator Name'/></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(1);" class="help" title="Ex: jdoe@email.com"><img src="images/help.png"></a><input type='text' id='admin_email' name='admin_email' placeholder='Administrator Email'/></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(2);" class="help" title="Ex: jdoe"><img src="images/help.png"></a><input type='text' id='admin_username' name='admin_username' placeholder='Administrator Username'/></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(3);" class="help" title="Ex: thisIs4Pass"><img src="images/help.png"></a><input type='password' id='admin_pass' name='admin_pass' placeholder='Administrator Password'/></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(4);" class="help" title="Ex: dcod_db"><img src="images/help.png"></a><input type='text' id='database_name' name='database_name' placeholder='Database Name'/></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(5);" class="help" title="Ex: 13.29.4.196"><img src="images/help.png"></a><input type='text' id='database_host' name='database_host' placeholder='Database Host'/></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(6);" class="help" title="Ex: root"><img src="images/help.png"></a><input type='text' id='database_username' name='database_username' placeholder='Database Username'/></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(7);" class="help" title="Ex: dbPa55"><img src="images/help.png"></a><input type='password' id='database_password' name='database_password' placeholder='Database Password'/></td></tr>
                            <tr><td><input type='submit' value='Submit'/></td></tr>
                        </table>
                        <table style="float:left; margin-left: 3em">
                            <tr><td><a href="javascript:void(0)" onclick="help(8);" class="help" title="Ex: Dynamic Content On Demand"><img src="images/help.png"></a>System Name: </td><td><input type='text' id='sys_name' name='sys_name' value='Dynamic Content On Demand'/></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(9);" class="help" title="Ex: DCOD"><img src="images/help.png"></a>System Short Name: </td><td><input type='text' id='sys_short_name' name='sys_short_name' value='DCOD'/></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(10);" class="help" title="Ex: Bookmarking and mini-content management system"><img src="images/help.png"></a>System Description: </td><td><textarea id='sys_description' name='sys_description' cols="20" rows="3">Bookmarking and mini-content management system</textarea></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(11);" class="help" title="Ex: Library Informatics"><img src="images/help.png"></a>System Admin: </td><td><input type='text' id='sys_admin' name='sys_admin' value='Library Informatics'/></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(12);" class="help" title="Ex: library@change.me"><img src="images/help.png"></a>System Email: </td><td><input type='text' id='sys_email' name='sys_email' value='email@change.me'/></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(13);" class="help" title="Ex: http://www.mysite.com"><img src="images/help.png"></a>System Domain: </td><td><input type='text' id='sys_domain' name='sys_domain' value='http://www.localhost'/></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(14);" class="help" title="Ex: /test/new/dcod"><img src="images/help.png"></a>System Root: </td><td><input type='text' id='sys_root' name='sys_root' value='/dcod'/></td></tr>
                        </table>
                        <table style="float:left; margin-left: 3em">
                            <tr><td><a href="javascript:void(0)" onclick="help(15);" class="help" title="Ex: Benner Library & Resource Center"><img src="images/help.png"></a>Institution Long Name: </td><td><input type='text' id='inst_long_name' name='inst_long_name' value='Benner Library & Resource Center'/></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(16);" class="help" title="Ex: Benner Library"><img src="images/help.png"></a>Institution Short Name: </td><td><input type='text' id='inst_short_name' name='inst_short_name' value='Benner Library'/></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(17);" class="help" title="Ex: Olivet Nazarene University"><img src="images/help.png"></a>Campus Long Name: </td><td><input type='text' id='campus_name_long' name='campus_name_long' value='Olivet Nazarene University'/></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(18);" class="help" title="Ex: Olivet"><img src="images/help.png"></a>Campus Short Name: </td><td><input type='text' id='campus_name_short' name='campus_name_short' value='Olivet'/></td></tr>
                            <tr><td><a href="javascript:void(0)" onclick="help(19);" class="help" title="Ex: ONU"><img src="images/help.png"></a>Campus Initials: </td><td><input type='text' id='campus_initials' name='campus_initials' value='ONU'/></td></tr>
                        </table>
                </form>
            </div>
        </div>
        <div class="font8" style="float:right">Version:&nbsp;<?php echo $_SESSION['dcod_sys_version']; ?></div>
    </body>
</html>