<?php
/* File Name: manage_users.php
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
<?php
$userQuery = 'SELECT *
              FROM dcod_users
              ORDER BY name';
$userResult = $db->query($userQuery);
$userString = '';
if($userResult!=null)
	while ($userArray = $userResult->fetch_array())
        $userString .= '<option id="userDropDown" value="'.$userArray['user_id'].'">'.$userArray['name'].'</option>';
?>
<html>
<head>
    <title>Manage Users | <?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>
    <link type='text/css' rel='stylesheet' href='css/main.css' />
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script>
    <script type='text/javascript' src='js/bridge.js'></script>
    <script type='text/javascript' src='js/spinners.js'></script>
    <!-- jNotify CSS -->
    <link rel="stylesheet" href="newjs/jnotify/jquery/jNotify.jquery.css" type="text/css" />
    <!-- jNotify and jQuery files -->
    <script type="text/javascript" src="newjs/jnotify/jquery/jquery.js"></script>
    <script type="text/javascript" src="newjs/jnotify/jquery/jNotify.jquery.js"></script>
</head>
<body onload="getUser();">
<div id="page-wrapper">
    <?php echo new TopMenu(); ?>
    <?php include 'sidebar.php'; ?>
    <div id="content">
    <div class="box" style="margin-right:.5em;">
        <h4 class="boxtitle center">Manage User</h4>
        <form id="add_user" name="manage_content" action="add_user_do.php" method="post">
            <table cellpadding="7">
                <tr id="userSelectshow">
                    <td valign="top">
                        <strong>User: </strong>
                        <select name="userSelection" id="userSelect" onChange="getUser()">
                            <?php echo $userString; ?>
                        </select>
                    </td>
                </tr>
                <tr id="userNameshow" style="display:none">  
                    <td valign="top">
                        Name<br/>
                        <input name="name" id="name" type="text" size="45" />
                    </td>                        
                </tr>
                <tr id="userIdshow" style="display:none">  
                    <td valign="top">
                        User ID<br/>
                        <input name="user_id" id="user_id" type="text" size="45" />
                    </td>                        
                </tr>
                <tr id="userEmailshow" style="display:none">
                    <td>
                        Email<br/>
                        <input name="email" id="email" type="text" size="45" /><br />                            
                    </td>
                </tr>
                <tr id="userGroupshow" style="display:none">
                    <td>
                        Group<br/>
                        <select id="group_id" name="group_id">
                            <option value="0"></option>
                            <option value="1">Administrator</option>
                            <option value="2">User</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2" class="center">
                        <input type="button" name="edit" id="edit" value="Edit" onClick="edit_user()">
                        <input type="button" name="reset_pass" id="reset_pass" value="Reset Password" onClick="pass_reset()"/>
                        <input type="button" name="delete" value="Delete" id="delete" onClick="delete_user()"/>
                        <span id="updateshow" style="display:none"><input type="button" name="update" id="submit" value="Update" onclick="update_user()"></span>
                        <span id="cancelshow" style="display:none;"><input type="button" name="cancel" id="cancelButton" value="Cancel"onclick="cancel_edit()"></span>
                        <img src="images/ajax-loader.gif" alt="loading" id="loading" style="display: none" border=0>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <div class="box" style="width:300px;">
        <h4 class="boxtitle center">Instructions</h4>
        <span id="instructions">
            <ul>
                <li>Click edit to change the user's information.</li>
                <li>Click Reset Password to reset the user's password to "password".</li>
                <li>Click Delete to delete the user from the database.</li>
            </ul>
        </span>
    </div>
    <div id="push"></div>
</div>
</div>
<?php include 'footer.php'; ?>
</body>
</html>
<script type="text/javascript">
    //this function pulls the links associated with the currently selected item in the drop down
    function getUser(){            
        $.ajax({
            type: 'POST',
            url:  'manage_users_do.php',
            data: {
            id:        $('select:#userSelect').val(),
            operation: 'change'
            },
            success: function(data) {
                var array=data.split("/+");
                document.getElementById('name').value=array[0];
                document.getElementById('user_id').value=array[1];
                document.getElementById('email').value=array[2];
                if(array[3] === "admin")
                    document.getElementById('group_id').value=1;
                else
                    document.getElementById('group_id').value=2;
            }
        });
    }
        
    function update_user() {
        $('#updateshow').hide();
        $('#cancelshow').hide();
        $('#loading').show();
        $.ajax({
            type: 'POST',
            url:  'manage_users_do.php',
            data: {
            name:      $('input:text#name').val(),
            id:        $('select:#userSelect').val(),
            user_id:   $('input:text#user_id').val(),
            email:     $('input:text#email').val(),
            group:     $('select#group_id').val(),
            operation: 'update'
            },
            success: function(data) {
                $('#loading').hide();
                if($('select:#userSelect option:selected').val() === '<?php echo $_SESSION['user']->getUserId(); ?>')
                    jNotify("You have changed your own user information. Take note that if you changed your group, you may not be able to access some features anymore. This change will take effect after logging out.",{autoHide : false, clickOverlay : true, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});
                else
                    jSuccess("User successfully updated.",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});
                //this changes the name of the currently selected item in the dropdown to whatever the user typed
                //as the new name for the tag so as to avoid having to refresh the page
                $('select:#userSelect option:selected').text($('input:text#name').val());
                $('select:#userSelect option:selected').val($('input:text#user_id').val());
                cancel_edit();
                getUser();
            }
        });
    }

    function delete_user(){
        if($('select:#userSelect option:selected').val() === '<?php echo $_SESSION['user']->getUserId(); ?>')
        {
            alert("You cannot delete yourself!");
            return false;
        }
        var answer=confirm("                   Are you sure you want to delete this user?\n"+
                           "This user's categories will no longer have an owner.");
        if(answer)
        {
            $('#loading').show();
            $('#edit').hide();
            $('#reset_pass').hide();
            $('#delete').hide();
            $.ajax({
                type: 'POST',
                url:  'manage_users_do.php',
                data: {
                id:        $('select:#userSelect').val(),
                operation: 'delete'
                },
                success: function() {
                    $('#loading').hide();
                    $('#edit').show();
                    $('#reset_pass').show();
                    $('#delete').show();
                    jSuccess("User successfully deleted.",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});
                    //removes the currently selected item from the drop down so as to avoid page refresh
                    $('select:#userSelect option:selected').remove();
                    getUser();
                }
            });
        }
    }
    
    function pass_reset(){
        var answer=confirm("Are you sure you want to reset this user's password?\n");
        if(answer)
        {
            $('#loading').show();
            $('#edit').hide();
            $('#reset_pass').hide();
            $('#delete').hide();
            $.ajax({
                type: 'POST',
                url:  'manage_users_do.php',
                data: {
                id:        $('select:#userSelect').val(),
                operation: 'reset'
                },
                success: function() {
                    $('#loading').hide();
                    $('#edit').show();
                    $('#reset_pass').show();
                    $('#delete').show();
                    jSuccess("User's password successfully reset to default of \"password\".",{autoHide : true, clickOverlay : false, MinWidth :1, TimeShown : 3000, ShowTimeEffect : 200, HideTimeEffect : 200, LongTrip :20, HorizontalPosition : 'left', VerticalPosition : 'top', ShowOverlay : false, ColorOverlay : '#000', OpacityOverlay : 0.3});
                }
            });
        }
    }
    
    function edit_user(){
        $('#userSelectshow').hide();
        $('#userNameshow').show();
        $('#userIdshow').show();
        $('#userEmailshow').show();
        $('#userGroupshow').show();
        $('#edit').hide();
        $('#delete').hide();
        $('#reset_pass').hide();
        $('#updateshow').show();
        $('#cancelshow').show();
        //updates instruction box
        document.getElementById('instructions').innerHTML = "<UL><li>Click Update when you are finished.</li></UL>";
    }
    
    function cancel_edit(){
        $('#userSelectshow').show();
        $('#userNameshow').hide();
        $('#userIdshow').hide();
        $('#userEmailshow').hide();
        $('#userGroupshow').hide();
        $('#edit').show();
        $('#delete').show();
        $('#reset_pass').show();
        $('#updateshow').hide();
        $('#cancelshow').hide();
         document.getElementById('instructions').innerHTML="<ul><li>Click edit to change the user's information.</li>\n\
                <li>Click Reset Password to reset the user's password to \"password\".</li>\n\
                <li>Click Delete to delete the user from the database.</li></ul>";
    }   
</script>