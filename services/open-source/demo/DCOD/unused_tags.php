<?php
/* File Name: unused_tags.php
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
<?php include 'class/TopMenu.php';?>
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
        <title>Unused Tags | <?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>
        <link type='text/css' rel='stylesheet' href='css/main.css' />
    	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script>
        <!-- jNotify CSS -->
        <link rel="stylesheet" href="newjs/jnotify/jquery/jNotify.jquery.css" type="text/css" />
        <!-- jNotify and jQuery files -->
        <script type="text/javascript" src="newjs/jnotify/jquery/jquery.js"></script>
        <script type="text/javascript" src="newjs/jnotify/jquery/jNotify.jquery.js"></script>
        <script type="text/javascript">
            function delete_tag(id){
                var tag_id=id;
                var answer=confirm("Are you sure you wish to delete the unused tag?");
                
                if(answer)
                    $.ajax({
                        type: 'POST',
                        url:  'unused_tags_do.php',
                        data: {
                            operation: 'remove',
                            id: tag_id
                        },
                        success: function() {
                            jSuccess("Tag successfully deleted.",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});
                            //removes the currently selected item
                            $('tr:#'+tag_id).remove();
                        }

                    });
            }
        </script>
    </head>
    <body>
        <div id="page-wrapper">
            <?php echo new TopMenu();?>
            <?php include 'sidebar.php'; ?>
            <div id="content">
            <div class="box" style="margin-right:.5em;">
                <h4 class="boxtitle center">Unused Tags</h4><br />
                <?php
                    $sql=sprintf('SELECT DISTINCT tag_id,name FROM dcod_tag
                                 WHERE NOT EXISTS (SELECT * FROM dcod_bookmark_tag
                            WHERE dcod_bookmark_tag.tag_id = dcod_tag.tag_id);');
                    $unusedTagQuery=$db->query($sql) or die($db->error);
                    $results=$unusedTagQuery->num_rows;
                    $outString = '<table class="tableD"id="unusedTable" align=center>
                               <tr>
                                   <th>Tag Name</th>
                                   <th>Delete</th>
                               </tr>';
                    $counter=0;
                    $unusedTagArray=$unusedTagQuery->fetch_array();
                    while($counter<$results)
                    {   
                        $outString.="<tr id=".$unusedTagArray['tag_id']."><td>";
                        $outString.=$unusedTagArray['name'];
                        $outString.="</td>";
                        $outString.="<td>";
                        $outString.='<input type="button" name="remove" value="Delete" onClick="delete_tag('.$unusedTagArray['tag_id'].')">';
                        $outString.="</tr>";
                        $counter++;
                        $unusedTagArray=$unusedTagQuery->fetch_array();
                    }
                    $outString.="</table>";
                    echo $outString;
                ?>
            </div>
            <div class="box" style="width:300px">
                <h4 class="boxtitle" align="center">Instructions</h4>
                <span id="instructions">
                    <p>
                        These tags were added to content and the content was deleted.
                        As a result, these tags no longer have content associated with them.<br /><br />
                        Remove a tag from the database by clicking the Delete button next to a tag.
                    </p>
                </span>
            </div>
            <div id="push"></div>
        </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>