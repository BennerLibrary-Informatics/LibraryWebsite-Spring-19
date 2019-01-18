<?php
/* File Name: reset_pass_do.php
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
<?php
    // BEGIN FUNCTION BLOCK
    function randPass($length = 8,
                      $chars = 'abcdefghijklmnopqrstuvwxyz1234567890') {
        $chars_length = (strlen($chars) - 1); // Length of character list
        $string = $chars{rand(0, $chars_length)}; // Start string
        // Generate random string
        for ($i = 1; $i < $length; $i = strlen($string)) {
            $r = $chars{rand(0, $chars_length)}; // Random character from list
            // Make sure the same two characters don't appear next to each other
            if ($r != $string{$i - 1}) $string .=  $r;
        }
        // Return the string
        return $string;
    }
    // END FUNCTION BLOCK

    // Get user information
    $qUser = sprintf("SELECT name,email
                      FROM dcod_users
                      WHERE user_id = '%s'",
    		$db->real_escape_string($_REQUEST['user_id']));

    $rsUser = $db->query($qUser);

    $rowUser = $rsUser->fetch_array();

    // Choose which email to send the new password to
    $email = $rowUser['email'];

    // Generate the random password
    $randPass = randPass();

    // Prepare it to be inserted into the database
    $md5Pass = md5($randPass);

    // Email headers
    // TODO: REMOVE EXCESS VARIABLES THAT AREN'T BEING USED
    $to         = $rowUser['name'] . ' <' . $email . '>';
    $from       = $_SESSION['dcod_sys_short_name'] . ' <'.$_SESSION['dcod_sys_email'].'>';
    $subject    = 'Password Reset';
    $headers    = 'From:' . $from . "\r\n";

    $message = "As you requested, your ".$_SESSION['dcod_sys_short_name']." password has been reset.\n\n";
    $message.= "Username: " . $_REQUEST['user_id'] . "\n";
    $message.= "Password: " . $randPass . "\n\n";

    $message.= "You can change your password the next time you log into ";
    $message.= $_SESSION['dcod_sys_short_name'].".\n\n";
    $message.= "If you still cannot access your account, please reply to this ";
    $message.= "message and let your administrator know you are having issues logging ";
    $message.= "in.";
    $to_email=$email;
     
    
    
    // If the email was successfully sent
    if (mail($to_email,$subject,$message,$headers)) {
        // Insert the new password into the database
        $qNewPass = sprintf("UPDATE dcod_users
                             SET passwd = '%s'
                             WHERE user_id = '%s'",
        		$db->real_escape_string($md5Pass),
        		$db->real_escape_string($_REQUEST['user_id']));
        $resetStatus = $db->query($qNewPass);
    } else {
        header("Location: login.php?err=12");
    }

    // resetStatus == true if the email was successfully sent.
    if ($resetStatus == true) {
        header("Location: login.php?msg=17");
    } else {
        header("Location: login.php?msg=18");
    }
?>