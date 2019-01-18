<?php
/* File Name: add_user.php
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
<?php
    if(!isset($_GET['b_url']))
        include 'check_session.php';
    else
    {
        include 'class/config.php';
        include 'class/User.php';
    }
?>
<?php include 'class/TopMenu.php'; ?>
<?php include 'class/Bookmark.php'; ?>
<?php
    //Don't allow non-admins to access this page.
    if($_SESSION['user']->getGroupId()!='admin' || $_SESSION['view'] == "normal")
    {
        header("Location: mainPage.php?msg=25");
        exit;
    }
?>
<?php

    //Check to see if a name and a URL have been passed to this page
    $url = '';
    $name = '';
    if (isset($_GET['b_url']))
        $url = $_GET['b_url'];
    if (isset($_GET['b_name']))
        $name = $_GET['b_name'];
    if(isset($_GET['b_url']))
    {
        $sql=sprintf('SELECT bc.category_id,bc.bookmark_id,b.bookmark_id,c.category_id,c.user_id idemp
                    FROM dcod_bookmark b,dcod_bookmark_category bc,dcod_category c
                    WHERE b.url="%s" 
                            AND bc.bookmark_id=b.bookmark_id
                            AND bc.category_id=c.category_id',
                $db->real_escape_string($_GET['b_url']));
    }
    if(isset($_GET['b_id']))
    {
        $sql=sprintf('SELECT bc.category_id,bc.bookmark_id,b.bookmark_id,c.category_id,c.user_id idemp
                  FROM dcod_bookmark b,dcod_bookmark_category bc,dcod_category c
                  WHERE b.bookmark_id="%s" 
                        AND bc.bookmark_id=b.bookmark_id
                        AND bc.category_id=c.category_id',
        		$db->real_escape_string($_GET['b_id']));
    }
    
    //If there is a bookmark id in the url, Edit, otherwise Add
    if(isset($_GET['b_id']))
    {
        $mode="Edit";
        $_SESSION['mode']="Edit";
    }
    else
    {
        $mode="Add";
        $_SESSION['mode']="Add";
    }
    //Check to see if a name and a URL have been passed to this page
    $url = '';
    $name = '';
    if (isset($_GET['b_url']))
        $url = $_GET['b_url'];
    if (isset($_GET['b_name']))
        $name = $_GET['b_name'];

    //If we are in edit mode, get all of the data about the bookmark
    if($mode == "Edit"||$mode=='View')
    {
        $bookmark = new Bookmark($db, $_GET['b_id']);

        //Get the bookmark's tags
        $tags_array = $bookmark->getTags();
        $tag_string = "";
        for($i=0; $i<count($tags_array) ;$i++)
        {
            if($i != 0)
                $tag_string.= ' ';
            $tag_string .= $tags_array[$i]['name'];
        }        
        //Get the bookmark's categories
        $cats_array = $bookmark->getCategories();
        $onload_str = "onLoad=\"";
        for($i=0; $i<count($cats_array) ;$i++)
        {
            $onload_str .= "addSelectedCategory(".$cats_array[$i]['category_id'].",'".$cats_array[$i]['name']."');";
        }
        $onload_str .= "\"";
    }
    //Get all bookmark categories for the dropdown list
    $categoryQuery = 'SELECT category_id, name
                      FROM dcod_category
                      ORDER BY name';
    $categoryResult = $db->query($categoryQuery);
    $categoryString = '<option value=0 selected> </option>';
    while($categoryArray = $categoryResult->fetch_array())
    {
        $categoryString .= '<option name="'.$categoryArray['name'].'"
                                    value='.$categoryArray['category_id'].'
                                    id='.$categoryArray['category_id'].'>'.$categoryArray['name'].'</option>';
    }
?>
<html>
    <head>
        <title>Add User | <?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>
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
    <body <?php if(isset($onload_str))echo $onload_str;?>>
    <?php
        if (!isset($_GET['bookmarklet']))
        {
    ?>
            <div id="page-wrapper">
                <?php echo new TopMenu(); ?>
                <?php include 'sidebar.php'; ?>
    <?php
        }
    ?>
    <div id="content">
        <div class="box" style="margin-right:.5em;">
            <h4 class="boxtitle center">Add User</h4>
            <form id="add_user" name="manage_content" action="add_user_do.php" method="post">
                <input name="bookmarklet" type="hidden" value="<?php if(isset($_GET['bookmarklet']))echo 1;else echo 0;?>"/>
                <input name="mode" type="hidden" value="<?php echo $mode; ?>" />
                
                <!-- TODO: cellpadding is deprecated -->
                <table cellpadding="7">
                    <tr>  
                        <td valign="top">
                            Name <span style="color: #CC0000">*</span><br/>
                            <input name="name" id="name" type="text" size="45" />
                        </td>                        
                    </tr>
                    <tr>  
                        <td valign="top">
                            User ID <span style="color: #CC0000">*</span><br/>
                            <input name="user_id" id="user_id" type="text" size="45" />
                        </td>                        
                    </tr>
                    <tr>
                        <td>
                            Email <span style="color: #CC0000">*</span><br/>
                            <input name="email" id="email" onkeyup="//check_email()" type="text" size="45" /><br />                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Group <span style="color: #CC0000">*</span><br/>
                            <select id="group_id" name="group_id">
                                <option value="0"></option>
                                <option value="1">Administrator</option>
                                <option value="2">User</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" class="center">
                            <input type="button" value="Add" onClick="validateForm();" />
                            <input type="reset" name="Clear" value ="Clear"/>
                        </td>
                    </tr>
                </table>
            </form>
            <span style="color: #CC0000">* Required Fields</span>
        </div>
        <div class="box" style="width:300px;">
            <h4 class="boxtitle center">Instructions</h4>
            Add a User Id, Name, Email, and Group for your user.
            <hr/>
            The user's password will default to "password" and they will 
            be prompted to change it upon login.
        </div>
    </div>
        <?php
            if(!isset($_GET['bookmarklet']))
            {
        ?>
                <div id="push"></div>
                </div>
        <?php
                include 'footer.php';
            }
        ?>
    </body>
</html>
<script type="text/javascript">
    //checks to see if the url is in the database
    function addUser(name,user,email,group) {
        $.ajax({
            type: 'POST',
            url: 'add_user_do.php',
            data: {
                operation:'create',
                name: name,
                user_id: user,
                email: email,
                group_id: group
            },
            success: function(data) {
                window.location = "add_user.php?msg=20";
            }
        });
    }   
    function checkUserNameAvail(){
     $.ajax({
            type: 'POST',
            url: 'add_user_do.php',
            data: {
                operation:'check',                
                user_id: document.getElementById("user_id").value
            },
            success: function(data) {
              if(data== 0) {
                return true;
              } else {
                return false;
              }
            }
        });
        return $.ajax 
    }
    function validateForm() {
        var e = document.getElementById("group_id");
        var group = e.options[e.selectedIndex].value;
        var name=document.getElementById("name").value;
        var user=document.getElementById("user_id").value;
        var email=document.getElementById("email").value;
        if(name == "") {
            alert("A name is required.");
            return false;
        } else if(user == "") {
            alert("A user id is required.");
            return false;
        } else if(!checkUserNameAvail()){
            alert('That username is already in use.  -- ' + checkUserNameAvail());
            return false;
        }else if(email == "") {
            alert("An email is required.");
            return false;
        } else if(group==0) {
            alert("A group is required.");
            return false;
        } 
        addUser(name,user,email,group);
        return false;
    }
</script>