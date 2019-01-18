<?php
/* File Name: edit_tags.php
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
<?php include 'check_session.php'; ?>
<?php include 'class/Tag.php';?>
<?php include 'class/Bookmark.php';?>
<?php include 'class/TopMenu.php';?>
<?php
$tagQuery = 'SELECT *
                  FROM dcod_tag
                  ORDER BY name ASC';
    $tagResult = $db->query($tagQuery);
    $tagString = '';
    if($tagResult!=null)
    	while ($tagArray = $tagResult->fetch_array()){
    		$tag=new Tag($db, $tagArray['tag_id']);
        	$tag->getBookmarks();
        	$selected = (isset($_REQUEST['selected'])) ? (($tag->getName() == $_REQUEST['selected']) ? "selected" : "") : $selected = "";
        	$tagString .= '<option id="tagDropDown" value="'.$tagArray['tag_id'].'" '.$selected.'>'.$tagArray['name'].'</option>';
    	}
    ?>

<html>
<head>
    <title>Tag Manager | <?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>
    <link type='text/css' rel='stylesheet' href='css/main.css' />
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script>
    <!-- jNotify CSS -->
    <link rel="stylesheet" href="newjs/jnotify/jquery/jNotify.jquery.css" type="text/css" />
    <!-- jNotify and jQuery files -->
    <script type="text/javascript" src="newjs/jnotify/jquery/jquery.js"></script>
    <script type="text/javascript" src="newjs/jnotify/jquery/jNotify.jquery.js"></script>
    <script type="text/javascript">
        function update_tag() {
            $('#submit').hide();
            $('#loading').show();
            $.ajax({
                type: 'POST',
                url:  'edit_tags_do.php',
                data: {
                newtagName:  $('input:text#newName').val(),
                id:        $('select:#tagSelect').val(),
                operation: 'update'
                },
                success: function(data) {
                    $('#loading').hide();
                    $('#submit').show();
                    if(data==true)
                    jNotify("Tag successfully updated.",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});
                //this changes the name of the currently selected item in the dropdown to whatever the user typed
                //as the new name for the tag so as to avoid having to refresh the page
                $('select:#tagSelect option:selected').text($('input:text#newName').val());
                $('#edit').show();
                $('#updateshow').hide();
                $('#newNameshow').hide();
                $('#remove').show();
                $('#cancelshow').hide();
                //updates instruction box
                document.getElementById('instructions').innerHTML="<ul><li>Click edit to change the name of the Tag.</li>\n\
                        <li>Click Delete to remove the Tag from the database.</li></ul>";
            }


            });
        }

        function delete_tag(){
            var answer=confirm("                      Are you sure you want to delete the tag?\n"+
                               "All of the associated links will also have the tag removed from them");
            if(answer)
            $.ajax({
                type: 'POST',
                url:  'edit_tags_do.php',
                data: {
                id:        $('select:#tagSelect').val(),
                operation: 'remove'
                },
                success: function() {
                    $('#loading').hide();
                    $('#submit').show();            
                    jNotify("Tag successfully deleted.",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});
                //removes the currently selected item from the drop down so as to avoid page refresh
                $('select:#tagSelect option:selected').remove();
            }
            });
        }
        function edit_tag(){
            $('#newNameshow').show();
            $('#edit').hide();
            $('#updateshow').show();
            $('#remove').hide();
            $('#cancelshow').show();
            //updates instruction box
            document.getElementById('instructions').innerHTML = "<UL><li>Click Update when you are finished.</li></UL>";
        }
         //this function pulls the links associated with the currently selected item in the drop down
        function changeAssociated(){            
                $.ajax({
                type: 'POST',
                url:  'edit_tags_do.php',
                data: {
                name:  $('input:text#newName').val(),
                id:        $('select:#tagSelect').val(),
                operation: 'change'
                },
                success: function(data) {
                    //sets the associated link div to have the data that is returned from the do page
                    document.getElementById('associatedLinks').innerHTML=data;
                    document.getElementById('newName').value=$('select:#tagSelect option:selected').text();
                    }
            });
        }
            function cancel_edit(){
                $('#newNameshow').hide();
                $('#edit').show();
                $('#updateshow').hide();
                $('#cancelshow').hide();
                $('#remove').show();
                 document.getElementById('instructions').innerHTML="<ul><li>Click edit to change the name of the Tag.</li>\n\
                        <li>Click Delete to remove the Tag from the database.</li></ul>";
        }
    </script>
</head>
<body onload="changeAssociated();">
<div id="page-wrapper">
    <?php echo new TopMenu();?>
    <?php include 'sidebar.php'; ?>
    <div id="content">
    <div id="left">
        <div class="box" style="margin-right:.5em;">
            <h4 class="boxtitle" align="center">Tag Editor</h4>
            <table>
                <tr>
                    <tr><td><b>Tag Name:
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</b>
                            <select name="tagSelection" id="tagSelect" onChange="changeAssociated()">
                            <?php echo $tagString; ?>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            <span id="newNameshow" style="display:none">
                                Change name:
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <input type="text" size="26"name="newName" id="newName"/>
                            </span>
                        <td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="button" name="edit" id="edit" value="Edit" onClick="edit_tag()">
                            <span id="updateshow" style="display:none"><input type="button" name="update" id="submit" value="Update" onclick="update_tag()">
                            </span>
                            <img src="images/ajax-loader.gif" alt="loading" id="loading" style="display: none" border=0>
                            <input type="button" id="remove"name="remove" value="Delete" onClick="delete_tag()">
                            <span id="cancelshow" style="display:none;"><input type="button" name="cancel" id="cancelButton" value="Cancel"onclick="cancel_edit()"></span>
                        </td>
                    </tr>
             </table>
        </div>
        <div class="box" style="margin-right:.5em;clear:both">
            <h4 class="boxtitle" align="center">All Associated Content</h4>
                <span id="associatedLinks"></span>
        </div>
    </div>
    <div id="right">
        <div class="box" align="left">
            <h4 class="boxtitle" align="center">Instructions</h4>
            <span id="instructions">
                <UL>
                    <li>Click edit to change the name of the Tag.</li>
                    <li>Click Delete to remove the Tag from the database.</li>
                </UL>
            </span>
        </div>
    </div>
    <div id="push"></div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>