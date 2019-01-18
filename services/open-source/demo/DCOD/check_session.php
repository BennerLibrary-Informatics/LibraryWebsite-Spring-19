<?php
/* File Name: check_session.php
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
<?php include_once 'class/config.php'; ?>
<?php include_once 'class/User.php'; ?>
<?php
    if ($universal_login == true)
    {
        if (!isset($_SESSION['started']) || isset($_SESSION['dcod_logout']))
        {
            $_SESSION['locationTrue'] = true;
            $_SESSION['location'] = $_SERVER['REQUEST_URI'];
            $_SESSION['locationApp'] = "dcod";
            header("Location: login.php");
            exit;
        }
        else
            $_SESSION['locationTrue'] = false;
    }
    else if (!isset($_SESSION['dcod_started']) || isset($_SESSION['dcod_logout']))
    {
        $_SESSION['locationTrue'] = true;
        $_SESSION['location'] = $_SERVER['REQUEST_URI'];
        $_SESSION['locationApp'] = "dcod";
        header('Location: login.php');
        exit;
    }
    else
        $_SESSION['locationTrue'] = false;
    
    $currentTime = time();
    
    if ($currentTime - $_SESSION['LAST_ACTIVITY'] > $sess_expire)
    {
        header('Location: logout.php?msg=28');
        exit;
    }
    else
        $_SESSION['LAST_ACTIVITY'] = $currentTime;
    
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
    }
    
    $developer = $db->query("SELECT *
                              FROM web_development_group
                              WHERE emp_id = '$_SESSION[emp_id]'
                              LIMIT 1");

    $_SESSION['developer'] = $developer->num_rows;

    if($_SESSION['group'] == "none")
    {
        //They don't have permissions to use dcod
        header("Location: logout.php?msg=5");
        exit;
    }
    
    //Fix DCOD specific variables
    if(!isset($_SESSION['view']))
        $_SESSION['view'] = ($_SESSION['group'] == "admin") ? 'admin' : 'normal';
    if(!isset($_SESSION['user']))
    	$_SESSION['user'] = new User($db, $_SESSION['emp_id']);
?>