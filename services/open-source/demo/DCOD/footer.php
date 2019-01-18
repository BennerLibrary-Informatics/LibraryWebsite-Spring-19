<?php
/* File Name: footer.php
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
<div class="box" id="bottom">
    <div class="font8" style="float:left; margin-top: 4px">Version:&nbsp;<?php echo $_SESSION['dcod_sys_version']; ?></div>
    <span style="position: absolute; left: 35%; width: 40%; margin-top: 4px">
        <?php echo $_SESSION['dcod_sys_short_name']; ?> operated by <?php echo $_SESSION['dcod_inst_short_name']; ?><br />at <?php echo $_SESSION['dcod_campus_name_long']; ?>
    </span>
    <?php
        //Show the change view button only if the user is an admin
        if($_SESSION['user']->getGroupId()=='admin')
        {
            $pageArray = explode("/",$_SERVER['REQUEST_URI']);
            //Set up the current page name and get rid of v= string if present
            $curPage = end($pageArray);
            $curPage = str_ireplace("?v=admin","", $curPage);
            $curPage = str_ireplace("&v=admin","", $curPage);
            $curPage = str_ireplace("?v=normal","", $curPage);
            $curPage = str_ireplace("&v=normal","", $curPage);

            if(substr_count($curPage, "?") === 0)
                $symbol = "?";
            else
                $symbol = "&";
            $location = $curPage.$symbol."v=";
            $location .= ($_SESSION['view'] == 'normal') ? "admin" : "normal";
    ?>
            <div style="float:right; cursor: pointer" onclick="window.location='<?php echo $location; ?>'">
                <div>Change View<br />
                    <img src="<?php echo ($_SESSION['view'] == "admin") ? 'images/switch_admin.png' : 'images/switch_user.png'; ?>" alt="Switch Views" border=0>
                </div>
            </div>
    <?php
        }
    ?>
</div>