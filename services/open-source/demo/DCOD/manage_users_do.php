<?php
/* File Name: manage_users_do.php
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
<?php include 'class/User.php';?>
<?php include 'class/config.php';?>
<?php
$_SESSION['user'] = new User($db, $_SESSION['emp_id']);

if($_REQUEST['operation']=='change')
{
    $user=new User($_REQUEST['id']);
    $sql=sprintf('SELECT name, email FROM dcod_users WHERE user_id="%s"',
            $db->real_escape_string($user->getUserId()));
    $query=$db->query($sql);
    $array=$query->fetch_array();
    print_r($array['name']."/+".$_REQUEST['id']."/+".$array['email']."/+".$user->getGroupId());
}
if($_REQUEST['operation']=='delete')
{
	$sql=sprintf("DELETE FROM dcod_users WHERE user_id='%s'", $db->real_escape_string($_REQUEST['id']));
    $db->query($sql) or die($db->error);
    //Now delete them as the owner from their categories
    $sql = sprintf("UPDATE dcod_category SET user_id='' WHERE user_id='%s'",
    		$db->real_escape_string($_REQUEST['id']));
    $db->query($sql) or die($db->error);
}
if($_REQUEST['operation']=='update')
{
    $user=new User($_REQUEST['id']);
    $old_id = $user->getUserId();
    switch($_REQUEST['group'])
    {
        case 1:
            $admin = 1;
            $user = 0;
            break;
        case 2:
            $admin = 0;
            $user = 1;
            break;
        default:
            $admin = 0;
            $user = 0;
    }
    $sql = sprintf("UPDATE dcod_users SET user_id='%s', name='%s', email='%s', administrator='%s', user='%s'
                    WHERE user_id='".$_REQUEST['id']."'",
    		$db->real_escape_string($_REQUEST['user_id']),
    		$db->real_escape_string($_REQUEST['name']),
    		$db->real_escape_string($_REQUEST['email']),
                    $admin,
                    $user);
    $db->query($sql) or die($db->error);
    
    //Now update the category owners to the new user_id
    $sql = sprintf("UPDATE dcod_category SET user_id='%s' WHERE user_id='%s'",
    		$db->real_escape_string($_REQUEST['user_id']),
    		$db->real_escape_string($old_id));
    $db->query($sql) or die($db->error);
}
if($_REQUEST['operation']=='reset')
{
    $sql = sprintf("UPDATE dcod_users SET passwd='%s' WHERE user_id='%s'",
                    md5("password"),
                    $_REQUEST['id']);
    $db->query($sql) or die($db->error);
}

?>