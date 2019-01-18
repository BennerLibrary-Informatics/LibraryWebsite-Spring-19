<?php
/* File Name: email.php
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
<?php
    $type = isset($_GET['type']) ? $_GET['type'] : "none";
    switch($type)
    {
        case "category":
            $subject = "New Category Suggestion";
            $input_text = "Suggested Category";
            $input_size = 37;
            break;
        default:
            $type = "none";
            $subject = isset($_GET['cat']) ? "Question/Suggestion for ".$_GET['cat'] : "";
            break;
    }
    
    //Get the category owner's name from database
    if(isset($_GET['user_ids']))
    {
        $userids = $_GET['user_ids'];
        //Fix it so the ids will work as a list of strings
        $userids = explode(",", $userids);
        for($i = 0; $i < count($userids); $i++)
            $userids[$i] = "'".$userids[$i]."'";
        $userids = implode(",", $userids);
    }
    
    if(isset($userids))
    {
        $sql = "SELECT name, email FROM dcod_users WHERE user_id IN (".$userids.")";
        $result = $db->query($sql) or die($db->error);
        $count = 0;
        while($catowner = $result->fetch_array())
        {
            if($count == 0)
            {
                $owner_names = $catowner['name'];
                $owner_emails = $catowner['email'];
            }
            else
            {
                $owner_names .= ", ".$catowner['name'];
                $owner_emails .= ", ".$catowner['email'];
            }
            $count++;
        }
    }
?>
<html>
    <head>
        <title>Email | <?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>
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
    <body>
        <div class="box">
            <h4 class="boxtitle center">Email</h4>
            <h2>Send Email To:</h2>
            <h3 style="margin-top: -15px;"> &nbsp; &nbsp; <?php echo isset($userids) ? $owner_names : $_SESSION['dcod_sys_admin']; ?></h3><br />
            <form name="email" action="email_do.php" method="post">
                From: (email address) <input name="from" size="36"><br />
                Subject: <input name="subject" size="50" value="<?php echo $subject; ?>"><br />
                <?php if($type != "none") echo $input_text,": <input name='",$type,"' size='",$input_size,"'><br />"; ?>
                Message:<br />
                <textarea name="message" cols="46" rows="10"></textarea><br />
                <input type="hidden" name="to_names" value="<?php echo isset($userids) ? $owner_names : $_SESSION['dcod_sys_admin']; ?>">
                <input type="hidden" name="to_emails" value="<?php echo isset($userids) ? $owner_emails : $_SESSION['dcod_sys_email']; ?>">
                <input type="submit" name="submit" value="Send"><input type="reset" name="clear" value = "Clear All">
            </form>
            <span style="color: #CC0000">* Required Fields</span>
        </div>
    </body>
</html>