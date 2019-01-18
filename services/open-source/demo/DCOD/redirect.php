<?php
/* File Name: redirect.php
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
<?php include 'class/Bookmark.php'; ?>
<?php
    $url = '';//change to library.olivet.edu
    $id = -1;

    if(isset($_GET['url'])) {
        $url = $_GET['url'];
    }

    try {
        if(isset($_GET['id'])) {
            $id = $_GET['id'];
        }

        $user_ip=$_SERVER['REMOTE_ADDR'];
    
        // if the bookmark id is defined
        if($id != -1) {
            echo "id defined<br/>";
            // create bookmark
            $bkmk = new Bookmark($db, $id);

            // add hit to bookmark
            $bkmk->addHit();

            // check if the url is defined
            if($url == '') {
                echo "id defined & url !defined<br/>";
                // if not get the url from the database
                $url = $bkmk->getUrl();
            }

            // add an entry to the stats table
            $stats_query = sprintf("INSERT INTO dcod_statistic (bookmark_id, ip_address)
                                    VALUES (%s,'%s')",
            		$db->real_escape_string($id),
            		$db->real_escape_string($user_ip));
            $db->query($stats_query);

            echo 'Please wait.  You are being redirected to '.$url.'.<br/>  If this page
                 does not redirect you within 10 seconds click <a href="'.$url.'">
                 here</a>.';
            // redirect to the page
            header('Location: '.$url);

        // if the bookmark id is not defined
        } else {
            // check if the url is defined
            if($url != '') {
                echo 'Please wait.  You are being redirected to '.$url.'.<br/>  If this page
                     does not redirect you within 10 seconds click <a href="'.$url.'">
                     here</a>.';
                // redirect to the page
                header('Location: '.$url);
            // otherwise throw an error
            } else {
                header('Location: http://www.google.com/');
            }
        }
    } catch (Exception $e) {
        // if anything goes wrong redirect user anyways
        if($url != '')
            header('Location: '.$url);
        else
            header('Location: http://www.google.com/');
    }
?>