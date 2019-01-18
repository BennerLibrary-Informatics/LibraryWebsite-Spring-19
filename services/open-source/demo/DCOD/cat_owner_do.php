<?php
/* File Name: cat_owner_do.php
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
session_start();
$outString="";
$orderStyle=$_REQUEST['orderBy'];
$_SESSION['orderStyle']=$orderStyle;
                $sql=sprintf('SELECT ic.category_id,ic.name,ic.user_id 
                                    FROM dcod_category ic                                    
                                    GROUP BY ic.category_id
                                    ORDER BY '.$orderStyle.'');
//                $sql=sprintf('SELECT category_id,name,user_id FROM dcod_category ORDER BY '.$orderStyle.'');
                $query=$db->query($sql) or die($db->error);
                $outString.= '<div class="box"style="width:28em"><br /><a style="cursor: pointer; "><img src="images/excel.gif" onclick="create()" alt="export as CSV" border=0 /></a>';
                $outString.= '<div class="boxTitle"><H3>Categories and Owners</H3></div>';
                $outString.= '<table class="tableD" width=100%;>';
//                $outString.='<tr><td><b><div id="noshow"><a onclick="outPut(\'user_id\')" style="cursor: pointer">Owners</a></div></b></td>';
//                '<td><b><div id="noshow"><a onclick="outPut(\'name\')" style="cursor: pointer">Category</a></div></b></td></tr>';
                $outString.='<tr><td><b><div id="noshow"><a onclick="outPut(\'user_id\')" style="cursor: pointer">Owners</a></div></b></td>';
                $outString.='<td><b><div id="noshow"><a onclick="outPut(\'name\')" style="cursor: pointer">Category</a></div></b></td>';
                $outString.='<td><b><div id="noshow">Amount of Content</div></b></td></tr>';
                while($result=$query->fetch_array())
                {
                    $name='';
                    $count=0;
                    if(isset($result['user_id'])&&$result['user_id']!=''){
                    $sql1=sprintf('SELECT name FROM dcod_users WHERE user_id="%s"',
                    		$db->real_escape_string($result['user_id']));
                    $query2=$db->query($sql1);
                    $name=$query2->fetch_array();
                    $name=$name['name'];}
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
                    $outString.= '<tr><td>';
                    $outString.= $name."</td><td>";
                    $outString.= '<a href="view_by_category.php?id='.$result['category_id'].'">'.$result['name'].'</a></td>';
                    $outString.='<td> '.$count.'';
                    $outString.='</td></tr>';
                }
                $outString.= '</table></div></div>';
                print_r($outString);
?>