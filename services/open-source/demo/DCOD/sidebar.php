<?php
/* File Name: catCloud.php
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
<script type="text/javascript">
    function resetHits() {
        var accepted = confirm("Are you sure you want to reset hit counters for ALL content?");
        if(accepted)
        {
            $.ajax({
                type: 'POST',
                url:  'reset_hits.php',
                async: 'false',
                success:function(result){
                    if(result === "success")
                        window.location = "mainPage.php?msg=23";
                    else
                        window.location = "mainPage.php?msg=24";
                }
            });
        }
    }
</script>
<div style="float: left" id="left_sidebar">
    <div class="box">
        <h4 class="boxtitle center" style="width: 200px">User Tasks</h4>
        <ul>
            <li><a href="manage_content.php" title="Add content and link content to categories">Add Content Item</a></li>
            <li><a href="view_content.php" title="Review all content with sorting functionality">View All Content</a></li>
            <li>View Categories:</li>
                <div class="bookmark"><a href="view_content_collapse.php?view=user" title="View your categories"><img src="images/user_icon.png" style="height: 48px" alt="view your content" border=0></a></div>
                <div class="bookmark"><a href="cat_owner.php" title="View all categories and their owners" style="margin-left: 6px;"><img src="images/user-group_icon.png" style="height: 48px" alt="view all content" border=0></a></div>
        </ul>
    </div><br />
<?php
    //Check if they are an admin and in the admin view
    if($_SESSION['user']->getGroupId() == 'admin' && $_SESSION['view']=='admin')
    {
?>
        <div class="box" style="clear:both; width: 205px">
            <h4 class="boxtitle center">Administrator Tasks</h4>
                <ul>
                    <li><a href="add_user.php" title="Add other administrators or users">Add New User</a></li>
                    <li><a href="manage_users.php" title="Edit, delete, reset passwords">Manage Users</a></li>
                    <li><a href="edit_categories.php" title="Create new categories and assign owners">Add Categories</a></li>
                    <li><a href="edit_categories.php?mode=Edit" title="Edit, delete, or view and link to content associated with a category">Edit Categories</a></li>
                    <li><a href="link_builder.php" title="Select a category and build code to copy <?php echo $_SESSION['dcod_sys_short_name']; ?> content onto a website">Link Builder</a></li>
                    <li><a href="edit_tags.php" title="Edit tag name, delete tags, and see associated content selected tag">Manage Tags</a></li>
                    <li><a href="unused_tags.php" title="List tags that no longer have content associated to them">Manage Unused Tags</a></li>
                    <li><a href="configure.php" title="Review/edit system information"><?php echo $_SESSION['dcod_sys_short_name']; ?> Configuration</a></li>
                    <li><a href="javascript:void(0)" onclick="resetHits()" title="Reset all access numbers to zero">Reset Hit Counters</a></li>
                </ul>
        </div>
<?php
    }
?>
<div class="box" style="clear:both; width: 205px">
    <h4 class="boxtitle center">Key</h4>
    <p>
        Date added &nbsp; &#151; &nbsp; (##-##-####)<br />
        Num. of hits &nbsp; &#151; &nbsp; (#)<br />
        Invalid URL &nbsp; &#151; &nbsp; <font color="#FF0000" title="Invalid URL"><b>(!)</b></font><br />
        Visit Link &nbsp; &#151; &nbsp; <img src="images/globe_icon.png"><br />
    </p>
</div>
</div>