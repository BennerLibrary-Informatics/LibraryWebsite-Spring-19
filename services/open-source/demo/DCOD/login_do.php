<?php
/* File Name: login_do.php
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
<?php include 'class/config.php'; ?>
<?php include 'class/User.php'; ?>
<?php
    $_SESSION['started'] = true;
    if(isset($_SESSION['locationTrue']) && isset($_SESSION['location']) && $_SESSION['locationApp'] == "dcod"){
        $locationTrue = $_SESSION['locationTrue'];
        $location = $_SESSION['location'];
    }

    // Get credentials
    $user_id = $_REQUEST['user_id'];
    $stmtCred = sprintf('SELECT user_id, passwd, name
                         FROM dcod_users
                         WHERE user_id = "%s"',
                    $db->real_escape_string($user_id));
    $stmtCredResult = $db->query($stmtCred);
    $result = $stmtCredResult->fetch_array();
    $u1=new User($db, $user_id);

    // Check for any unused tags
    $tagsql=sprintf('SELECT
                         t.tag_id
                     FROM
                         dcod_tag t LEFT JOIN dcod_bookmark_tag bt ON
                             bt.tag_id = t.tag_id
                     WHERE
                         bt.tag_id IS NULL
                     LIMIT 1');
    $unusedTagQuery=$db->query($tagsql);
    $results=$unusedTagQuery->num_rows;
    if($results)
        $tagUrl = '?msg=8';
    else
        $tagUrl = '';
    
    // If valid user
    if($u1->verifyUser($_REQUEST['passwd']))
    {
        unset($_SESSION['dcod_logout']);

        $_SESSION['LAST_ACTIVITY'] = time();
        $_SESSION['started'] = true;
        $_SESSION['dcod_started'] = true;
        $_SESSION['emp_id'] = $user_id;
        $_SESSION['emp_name'] = $u1->getFullName();
        $_SESSION['user']=$u1;
        
        //Get user group
        $sql = "SELECT global,dcod FROM group_controls WHERE emp_id = '$_SESSION[emp_id]'";
        $result = $db->query($sql) or die($db->error);
        if($result->num_rows > 0)
        {
        	$row = $result->fetch_array();
            if($row['global'] == "prog" || $row['global'] == "admin")
                $_SESSION['group'] = "admin";
            else
                $_SESSION['group'] = $row['dcod'];
        }
        else
        {
            $groupSql = "SELECT administrator, user FROM dcod_users WHERE user_id = '".$_SESSION['emp_id']."'";
            $groupResult = $db->query($groupSql) or die($db->error);
            if($groupResult->num_rows > 0)
            {
            	$row = $groupResult->fetch_array();
                if($row['administrator'] == '1')
                    $_SESSION['group'] = "admin";
                else if($row['user'] == '1')
                    $_SESSION['group'] = "normal";
                else
                    $_SESSION['group'] = "none";
            }
            else
                $_SESSION['group'] = "none";
        }
        
        if($_SESSION['group'] != "none")
        {
            if($_REQUEST['passwd'] == "password")
            {
                header("Location: change_pass.php?msg=22");
            }
            else
            {
                if(isset($locationTrue) && $locationTrue)
                    header('Location: '.$location);
                else
                {
                    if($_SESSION['group']=='admin')
                        header('Location: mainPage.php'.$tagUrl);
                    else if($_SESSION['group']=='normal')
                        header('Location: mainPage.php');
                }
            }
        }
        else
            header("Location: logout.php?msg=5");
    }
    else
        header('Location: logout.php?msg=4'); //Incorrect Username or Password
?>