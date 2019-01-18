<?php
/* File Name: cat_owner.php
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
<?php include 'check_session.php';?>
<?php include 'class/TopMenu.php';?>
<?php
/*
 * This page will allow the users to see a list of the categories and who owns them
 * the user will be able to sort by category name, or by owner.
 *
 */
?>
<?php extract($_REQUEST); ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <title>Category Owners | <?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>
        <link type='text/css' rel='stylesheet' href='css/main.css' />

        <link type="text/css" href="css/jquery.jnotify.min.css" rel="stylesheet" />
    	
        <!-- jNotify CSS -->
        <link rel="stylesheet" href="newjs/jnotify/jquery/jNotify.jquery.css" type="text/css" />
        <!-- jNotify and jQuery files -->
        <script type="text/javascript" src="newjs/jnotify/jquery/jquery.js"></script>
        <script type="text/javascript" src="newjs/jnotify/jquery/jNotify.jquery.js"></script>
        <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.js'></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>
        <style type="text/css" title="currentStyle">
                @import "js/DataTables-1.9.4/media/css/jquery.dataTables.css";	
	</style>
        <script type="text/javascript" language="javascript" src="js/DataTables-1.9.4/media/js/jquery.js"></script>        
        <script type="text/javascript" language="javascript" src="js/DataTables-1.9.4/media/js/jquery.dataTables.min.js"></script>

        <script type="text/javascript">
        function create(){
                $.ajax({
                    type: 'POST',
                    url: 'csv_create.php',
                    success:function(data){
                        if(data=='done')
                            window.location='cat_list.csv';
                    }
                });
            }

            function email() {
                <?php $pactive = (isset($active)) ? "active=$active&" : ""; ?>
                <?php $pmethod = (isset($method)) ? "method=$method&" : ""; ?>
                <?php $pdepartment = (isset($department)) ? "department=$department&" : ""; ?>
                <?php $plibrarian = (isset($librarian)) ? "librarian=$librarian" : ""; ?>
                <?php $params = rtrim($pactive.$pmethod.$pdepartment.$plibrarian, "&"); ?>
                window.location='email_group.php?<?php echo $params; ?>';
            }
            function change() {
                document.getElementById('printer').bgColor = "#FFFFFF";
            }

            $(document).ready(function() {
                $("#categoryOwners").dataTable();
                document.getElementById("categoryOwners").style.display = "block";
                document.getElementById("loading").style.display = "none";
            });
        </script>
    </head>
    <body>
        <div id ='page-wrapper'>
            <?php echo new TopMenu();?>
            <?php include 'sidebar.php'; ?>
            <span id="catOwn">
            <?php
                $sql=sprintf('SELECT ic.category_id,ic.name,ic.user_id,ic.notes
                FROM dcod_category ic
                GROUP BY ic.category_id');
                $query=$db->query($sql) or die($db->error);
            ?>
                <div class="box">
                    <h4 class="boxTitle center">Categories and Owners</h4><br />
                    <a href="javascript:void(0)" style="float:right; border: none" onclick="create()" title="Export as CSV"><img src="images/excel.gif" style="border: none"/></a>
                    <div id="loading"><center><img src="images/ajax-loader.gif" alt="loader" border=0 /></center></div>
                    <table class="tableD" id="categoryOwners" style="display:none">
                        <thead>
                            <tr>
                                <th>Owners</th>
                                <th>Category</th>
                                <th>Amount of Content</th>
                                <th>Notes</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        while($result=$query->fetch_array())
                            {
                                $name='';
                                $count=0;
                                if(isset($result['user_id'])&&$result['user_id']!='')
                                {
                                    $sql1=sprintf('SELECT CONCAT(pref_name," ",last_name) AS name
                                                   FROM employee WHERE emp_id="%s"',
                                            $db->real_escape_string($result['user_id']));
                                    $query2=$db->query($sql1);
                                    if($query2->num_rows > 0)
                                    {
                                    	$name=$query2->fetch_array();
                                        $name=$name['name'];
                                    }
                                    else
                                    {
                                        $sql2=sprintf('SELECT name FROM dcod_users WHERE user_id="%s"',
                                        		$db->real_escape_string($result['user_id']));
                                        $query3=$db->query($sql2);
                                        $name=$query3->fetch_array();
                                        $name=$name['name'];
                                    }
                                }
                                $sqlCount=sprintf('SELECT count(bookmark_id) as potato
                                                   FROM dcod_bookmark_category
                                                   WHERE category_id="%s"',
                                		$db->real_escape_string($result['category_id']));
                                $query3=$db->query($sqlCount) or die($db->error);
                                if($query3->num_rows>0)
                                {
                                	$counts=$query3->fetch_array();
                                    $count=$counts['potato'];
                                }
                                echo '<tr><td>'.$name.'</td>';
                                echo '<td><a href="view_by_category.php?id='.$result['category_id'].'">'.$result['name'].'</a></td>';
                                echo '<td> '.$count.'</td>';
                                echo '<td width="250px">'.$result['notes'].'</td></tr>';
                            }
                        ?>
                        </tbody>
                    </table>
                </div>
            </span>
            <div id="push"></div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>