<?php
/* File Name: edit_categories.php
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
<?php include 'class/Category.php';?>
<?php include 'class/Bookmark.php';?>
<?php include 'class/TopMenu.php';?>
<?php
    //Don't allow non-admins to access this page.
    if($_SESSION['user']->getGroupId()!='admin' || $_SESSION['view'] == "normal")
    {
        header("Location: mainPage.php?msg=25");
        exit;
    }
?>
<?php

$mode = isset($_REQUEST['mode']) ? $_REQUEST['mode'] : "Add";

if($mode == "Edit")
{
    $catQuery = 'SELECT *
                 FROM dcod_category
                 ORDER BY name ASC';
    $catResult = $db->query($catQuery);
    $catString = '';
    if($catResult!=null)
    	while ($catArray = $catResult->fetch_array()) {
        	$selected = (isset($_REQUEST['selected'])) ? (($catArray['name'] == $_REQUEST['selected']) ? "selected" : "") : $selected = "";
        	$catString .= '<option id="catDropDown" value="'.$catArray['category_id'].'" '.$selected.'>'.$catArray['name'].'</option>';
    	}
}
?>
<html>
<head>
    <title>Category Manager | <?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>
    <link type='text/css' rel='stylesheet' href='css/main.css' />
    <link type="text/css" href="css/jquery.jnotify.min.css" rel="stylesheet" />
    <script type="text/javascript" src="js/jquery.jnotify.min.js"></script>
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script>
    <!-- jNotify CSS -->
    <link rel="stylesheet" href="newjs/jnotify/jquery/jNotify.jquery.css" type="text/css" />
    <!-- jNotify and jQuery files -->
    <script type="text/javascript" src="newjs/jnotify/jquery/jquery.js"></script>
    <script type="text/javascript" src="newjs/jnotify/jquery/jNotify.jquery.js"></script>
    <script type="text/javascript">
    <?php
        if($mode == "Edit")
        {
    ?>
        function update_cat() {
            $('#submit').hide();
            $('#loading').show();
            $.ajax({
                type: 'POST',
                url:  'edit_categories_do.php',
                data: {
                newcatName:  $('input:text#newName').val(),
                id:          $('select:#catSelect').val(),
                owner:       $('select:#owner').val(),
                notes:       document.getElementById('notes').value,
                newcatDesc: document.getElementById('newDesc').value,
                operation: 'update'
                },
                success: function() {
                    $('#loading').hide();
                    $('#submit').show();
                    jSuccess("Category successfully updated.",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});
                    //this changes the name of the currently selected item in the dropdown to whatever the user typed
                    //as the new name for the tag so as to avoid having to refresh the page
                    $('select:#catSelect option:selected').text($('input:text#newName').val());
                    $('#edit').show();
                    $('#remove').show();
                    $('#cancelshow').hide();
                    $('#updateshow').hide();
                    $('#catNameshow').show();
                    $('#newNameshow').hide();
                    $('#addDescshow').hide();
                    $('#changeOwner').hide();
                    $('#notesShow').hide();
                    //updates instruction box
                    document.getElementById('instructions').innerHTML="<ul><li>Select a Category from the dropdown.</li><li>Click edit to change the name of the Category.</li>\n\
                            <li>Click Delete to remove the Category from the database.</li><br /><i>It is recommended to delete or re-categorize<br />\n\
                        associated content before deleting a category.</i></ul>";
                    getDesc();
            }


            });
        }

        function delete_cat(){
             var answer=confirm("                   Are you sure you want to delete the category?\n"+
                               "All associated content will no longer be linked to this category.");
            if(answer)
            $.ajax({
                type: 'POST',
                url:  'edit_categories_do.php',
                data: {
                id:        $('select:#catSelect').val(),
                operation: 'remove'
                },
                success: function() {
                    $('#loading').hide();
                    $('#submit').show();
                    jSuccess("Category successfully deleted.",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});
                //removes the currently selected item from the drop down so as to avoid page refresh
                $('select:#catSelect option:selected').remove();
                getDesc();
            }
            });
        }
        function edit_cat(){
            $('#catNameshow').hide();
            $('#newNameshow').show();
            $('#edit').hide();
            $('#updateshow').show();
            $('#addDescshow').show();
            $('#cancelshow').show();
            $('#changeOwner').show();
            $('#notesShow').show();
            $('#remove').hide();
            //updates instruction box
            document.getElementById('instructions').innerHTML = "<UL><li>Click Update when you are finished.</li></UL>";
        }
        function cancel_edit(){
            $('#catNameshow').show();
            $('#newNameshow').hide();
            $('#edit').show();
            $('#updateshow').hide();
            $('#addDescshow').hide();
            $('#cancelshow').hide();
            $('#changeOwner').hide();
            $('#notesShow').hide();
            $('#remove').show();
                 document.getElementById('instructions').innerHTML="<ul><li>Select a Category from the dropdown.</li><li>Click edit to change the name of the Category.</li>\n\
                        <li>Click Delete to remove the Category from the database.</li><br /><i>It is recommended to delete or re-categorize<br />\n\
                        associated content before deleting a category.</i></ul>";
        }   

        function getDesc(){
            $.ajax({
                type: 'POST',
                url:  'edit_categories_do.php',
                data: {
                id:        $('select:#catSelect').val(),
                operation: 'desc'
                },
                success: function(data) {
                    var array=data.split("/+");
                    //document.getElementById('desc').innerHTML=array[0];
                    document.getElementById('newDesc').value=array[0];
                    document.getElementById('owner').value=array[1];
                    //document.getElementById('Currentowner').innerHTML=array[2];
                    document.getElementById('notes').innerHTML=array[3];
                     }
                 });
        }
        //this function pulls the links associated with the currently selected item in the drop down
        function changeAssociated(){            
                getDesc();
                $.ajax({

                type: 'POST',
                url:  'edit_categories_do.php',
                data: {
                name:  $('input:text#newName').val(),
                id:        $('select:#catSelect').val(),
                operation: 'change'
                },
                success: function(data) {
                    //sets the associated link div to have the data that is returned from the do page
                    document.getElementById('associatedLinks').innerHTML=data;                
                    document.getElementById('newName').value=$('select:#catSelect option:selected').text();               
                    }
            });
        }
    <?php
        }
    ?>

        function addCat(){
                $.ajax({
                type: 'POST',
                url:  'edit_categories_do.php',
                data: {
                addName:  $('input:text#addName').val(),
                addDescription: $('input:text#addDescription').val(),
                owner: $('select:#addOwner').val(),
                notes: $('input:text#addNotes').val(),
                operation: 'add'
                },
                success: function(data) {
                 if(data=='false')
                 jError("Category Name is Empty",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});
                     else{
                 var newString='<option id="catDropDown" value="'+data+'">'+$('input#addName').val()+'</option>';
                 $('select:#catSelect').append($(newString));
                 jSuccess("Category successfully created.",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});
                 $('#addName').val('');
                 $('#addDescription').val('');}
                 $('#addNotes').val('');
            }

            });
        }
    </script>
</head>
<div id="page-wrapper">
    <?php echo new TopMenu();?>
    <?php include 'sidebar.php'; ?>
    <body onload="changeAssociated();">
    <div id="content">
        <div id="left">
        <?php
        if($mode == "Edit")
        {
        ?>
            <div class="box" style="margin-right:.5em;">
                <h4 class="boxtitle center">Edit Category</h4>
                <table>
                    <tr id="catNameshow">
                        <td>
                            <b>Category Name:</b>
                        </td>
                        <td>
                            <select name="catSelection" id="catSelect" onChange="changeAssociated()">
                                <?php echo $catString; ?>
                            </select>
                        </td>
                    </tr>
                    <tr id="newNameshow" style="display:none">
                        <td>
                            Change Name:
                        </td>
                        <td>
                            <input type="text" size="26"name="newName" id="newName"/>
                        <td>
                    </tr>
                    <tr id="addDescshow" style="display:none">
                        <td>
                            Change Description:
                        </td>
                        <td>
                            <textarea cols ="20" rows="3"name="newDesc" id="newDesc"></textarea>
                        <td>
                    </tr>
                    <tr id="changeOwner"style="display:none;">
                        <td>
                            Change Owner:
                        </td>
                        <td>
                            <select name="owner" id="owner">
                                <option value=""></option>
                                <?php
                                    $curatorSQL = "SELECT DISTINCT user_id, name FROM
                                                   (
                                                      (SELECT emp_id AS user_id, CONCAT(pref_name,' ',last_name) AS name
                                                      FROM employee
                                                      WHERE emp_id IN (SELECT emp_id FROM group_controls
                                                                       WHERE global != 'inactive'
                                                                       AND (dcod != 'none' OR global != 'none'))
                                                      ORDER BY name)
                                                      UNION ALL
                                                      (SELECT user_id, name FROM dcod_users ORDER BY name)
                                                   ) AS blah
                                                   ORDER BY
                                                        name";
                                    $curatorQuery = $db->query($curatorSQL) or die($db->error);

                                    while ($curator = $curatorQuery->fetch_array())
                                        echo '<option value="',$curator['user_id'],'">',$curator['name'],'</option>';
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr id="notesShow" style="display:none">
                        <td>
                            Change Notes:
                        </td>
                        <td>
                            <textarea cols ="20" rows="3"name="notes" id="notes"></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <input type="button" name="edit" id="edit" value="Edit" onClick="edit_cat()">
                            <span id="updateshow" style="display:none"><input type="button" name="update" id="submit" value="Update" onclick="update_cat()">
                            </span>
                            <img src="images/ajax-loader.gif" alt="loading" id="loading" style="display: none" border=0>
                            <input type="button" name="remove" value="Delete" id="remove"onClick="delete_cat()"/>

                            <span id="cancelshow" style="display:none;"><input type="button" name="cancel" id="cancelButton" value="Cancel"onclick="cancel_edit()">
                            </span>
                        </td>
                    </tr>
                    <span id="submitSuccess" style="display: none; position: fixed; top: 30%; left: 35%; font-size: 10em">
                        Success
                    </span>
                </table><br/>
            </div>
            <div class="box" style="margin-right:.5em;clear:both">
                <h4 class="boxtitle" align="center">All Associated Content</h4>
                <span id="associatedLinks"></span>
            </div>
        <?php
        }
        else
        {
        ?>
            <div class="box" style="margin-right:.5em;">
                <h4 class="boxtitle center">Add Category</h4>

                    <table>
                        <tr>
                            <td colspan="2">
                                Please type the name of the category in the box below.
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Category:
                            </td>
                            <td>
                                <input type="text" name="addName" id="addName" value="" size="62"/>
                            <td>
                        </tr>
                        <tr>
                            <td>
                                Description:
                            </td>
                            <td>
                                <input type="text" name ="addDescription"id="addDescription" size="62"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Owner:
                            </td>
                            <td>
                                <select name="addOwner" id="addOwner">
                                    <option value=""></option>
                                    <?php
                                        $curatorSQL = "SELECT DISTINCT user_id, name FROM
                                                   (
                                                      (SELECT emp_id AS user_id, CONCAT(pref_name,' ',last_name) AS name
                                                      FROM employee
                                                      WHERE emp_id IN (SELECT emp_id FROM group_controls
                                                                       WHERE global != 'inactive'
                                                                       AND (dcod != 'none' OR global != 'none'))
                                                      ORDER BY name)
                                                      UNION ALL
                                                      (SELECT user_id, name FROM dcod_users ORDER BY name)
                                                   ) AS blah
                                                   ORDER BY
                                                        name";
                                        $curatorQuery = $db->query($curatorSQL);

                                        while ($curator = $curatorQuery->fetch_array())
                                            echo '<option value="',$curator['user_id'],'">',$curator['name'],'</option>';
                                    ?>
                                 </select>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                Notes:
                            </td>
                            <td>
                                <input type="text" name="addNotes" id="addNotes" size="62"/>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="button" name="submit" id="submit" value="Add" onClick="addCat()">
                            </td>
                        </tr>
                    </table>

            </div>
        <?php
        }
        ?>
    </div>
    <div id="right">
        <div class="box" align="left" style="position:relative;margin-right:.5em;">
            <h4 class="boxtitle" align="center">Instructions</h4>
            <span id="instructions">
                <ul>
                 <?php
                    if($mode == "Edit")
                    {
                 ?>
                        <li>Select a Category from the dropdown.</li>
                        <li>Click Edit to change details of the Category.</li>
                        <li>Click Delete to remove the Category from the database.</li><br />
                        <i>It is recommended to delete or re-categorize<br />
                            associated content before deleting a category.</i>
                 <?php
                    }
                    else
                    {
                 ?>
                        <li>Enter a name and description for the Category.</li>
                        <li>Selecting an owner is optional.</li>
                        <li>Press "Add" to add the Category.</li>
                 <?php
                    }
                 ?>
                </ul>
            </span>
        </div>
    </div>
    <div id="push"></div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>