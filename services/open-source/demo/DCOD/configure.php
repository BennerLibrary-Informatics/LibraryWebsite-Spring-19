<?php
/* File Name: configure.php
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
<?php include 'class/TopMenu.php'; ?>
<?php
    //Don't allow non-admins to access this page.
    if($_SESSION['user']->getGroupId()!='admin' || $_SESSION['view'] == "normal")
    {
        header("Location: mainPage.php?msg=25");
        exit;
    }
?>
<html>
<head>
    <title>Configuration | <?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>
    <link type='text/css' rel='stylesheet' href='css/main.css' />
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
    <script type="text/javascript" src="newjs/jnotify/jquery/jNotify.jquery.js"></script>
    <link rel="stylesheet" href="newjs/jnotify/jquery/jNotify.jquery.css" type="text/css" />
    <script type="text/javascript">
        function help(id) {
            win = window.open("help.php?id="+id,"help_win","toolbar=0,location=0,status=0,scrollbars=0,resizable=0,width=300,height=200,top=500");
        }
    </script>
</head>
<body>
<div id="page-wrapper">
    <?php echo new TopMenu();?>
    <?php include 'sidebar.php'; ?>
    <div id="content">
        <div class="box" style="float: left;">
            <h4 class='boxTitle'><?php echo $_SESSION['dcod_sys_short_name']; ?> Configuration</h4>
            <form action="configure_do.php" method="post">
                <table style="float:left;">
                    <tr><td><a href="javascript:void(0)" onclick="help(8);" class="help" title="Ex: Dynamic Content On Demand"><img src="images/help.png"></a>System Name: </td><td><input type='text' size="30" id='sys_name' name='sys_name' value='<?php echo $_SESSION['dcod_sys_name']; ?>'/></td></tr>
                    <tr><td><a href="javascript:void(0)" onclick="help(9);" class="help" title="Ex: DCOD"><img src="images/help.png"></a>System Short Name: </td><td><input type='text' size="30" id='sys_short_name' name='sys_short_name' value='<?php echo $_SESSION['dcod_sys_short_name']; ?>'/></td></tr>
                    <tr><td><a href="javascript:void(0)" onclick="help(10);" class="help" title="Ex: Bookmarking and mini-content management system"><img src="images/help.png"></a>System Description: </td><td><textarea size="30" id='sys_description' name='sys_description' cols="24" rows="3"><?php echo $_SESSION['dcod_sys_description']; ?></textarea></td></tr>
                    <tr><td><a href="javascript:void(0)" onclick="help(11);" class="help" title="Ex: Library Informatics"><img src="images/help.png"></a>System Admin: </td><td><input type='text' size="30" id='sys_admin' name='sys_admin' value='<?php echo $_SESSION['dcod_sys_admin']; ?>'/></td></tr>
                    <tr><td><a href="javascript:void(0)" onclick="help(12);" class="help" title="Ex: library@change.me"><img src="images/help.png"></a>System Email: </td><td><input type='text' size="30" id='sys_email' name='sys_email' value='<?php echo $_SESSION['dcod_sys_email']; ?>'/></td></tr>
                    <tr><td><a href="javascript:void(0)" onclick="help(13);" class="help" title="Ex: http://www.mysite.com"><img src="images/help.png"></a>System Domain: </td><td><input type='text' size="30" id='sys_domain' name='sys_domain' value='<?php echo $_SESSION['dcod_sys_domain']; ?>'/></td></tr>
                    <tr><td><a href="javascript:void(0)" onclick="help(14);" class="help" title="Ex: /test/new/dcod"><img src="images/help.png"></a>System Root: </td><td><input type='text' size="30" id='sys_root' name='sys_root' value='<?php echo $_SESSION['dcod_sys_root']; ?>'/></td></tr>
                    <tr><td><input type="submit" name="submit" value="Update"><input type="button" name="cancel" value="Cancel" onclick="window.location='mainPage.php'"></td></tr>
                </table>
                <table style="float:left; margin-left: 3em">
                    <tr><td><a href="javascript:void(0)" onclick="help(15);" class="help" title="Ex: Benner Library & Resource Center"><img src="images/help.png"></a>Institution Long Name: </td><td><input type='text' size="30" id='inst_long_name' name='inst_long_name' value='<?php echo $_SESSION['dcod_inst_long_name']; ?>'/></td></tr>
                    <tr><td><a href="javascript:void(0)" onclick="help(16);" class="help" title="Ex: Benner Library"><img src="images/help.png"></a>Institution Short Name: </td><td><input type='text' size="30" id='inst_short_name' name='inst_short_name' value='<?php echo $_SESSION['dcod_inst_short_name']; ?>'/></td></tr>
                    <tr><td><a href="javascript:void(0)" onclick="help(17);" class="help" title="Ex: Olivet Nazarene University"><img src="images/help.png"></a>Campus Long Name: </td><td><input type='text' size="30" id='campus_name_long' name='campus_name_long' value='<?php echo $_SESSION['dcod_campus_name_long']; ?>'/></td></tr>
                    <tr><td><a href="javascript:void(0)" onclick="help(18);" class="help" title="Ex: Olivet"><img src="images/help.png"></a>Campus Short Name: </td><td><input type='text' size="30" id='campus_name_short' name='campus_name_short' value='<?php echo $_SESSION['dcod_campus_name_short']; ?>'/></td></tr>
                    <tr><td><a href="javascript:void(0)" onclick="help(19);" class="help" title="Ex: ONU"><img src="images/help.png"></a>Campus Initials: </td><td><input type='text' size="30" id='campus_initials' name='campus_initials' value='<?php echo $_SESSION['dcod_campus_initials']; ?>'/></td></tr>
                </table>
            </form>
        </div>
    </div>
    <div id="push"></div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>