<?php
/* File Name: search.php
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
    //If search is not set or searchType is not set we can't search. Lead them away
    if(!isset($_GET['searchType']) || !isset($_GET['search']))
    {
        header("Location: mainPage.php");
        exit;
    }
?>
<?php include 'check_session.php';?>
<?php include 'class/TopMenu.php';?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link type='text/css' rel='stylesheet' href='css/main.css' />
        <title>Search Results | <?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>
    </head>
    <body onload ="document.searchBox.search.focus()">
    <div id="page-wrapper">
    <?php echo $topMenu = new TopMenu(); ?>
    <?php include 'sidebar.php'; ?>
    <?php
        function removeIMG($instring) {
            if (strtoupper(substr($instring,0,5)) != "<IMG ") {
                return $instring;
            } else {
                return substr($instring,strrpos($instring, ">", 0) + 1 );
            }
        }
    ?>
    <?php if($_GET['searchType'] == "Content") { ?>
            <!--Div for bookmark search results-->
            <div class="box" style="float:left; width:30em; margin-right: .5em;">
                <h4 class="boxtitle">Search By Name</h4>
                <p>This box will search content whose name matches your search criteria.</p>
                <br />
                <ul style="list-style-type:none; padding-left:5px">
                    <?php
                          
                            $searchBookmarks = sprintf('SELECT name, url, num_hits, bookmark_id, date_created, invalid_url
                                                        FROM dcod_bookmark
                                                        WHERE name LIKE "%%%s%%"',
                            		$db->real_escape_string($_GET['search']));
                            $bookmarkResults = $db->query($searchBookmarks);

                            if($bookmarkResults->num_rows == 0){
                                echo 'No Results Found.';
                            } else {
                            	while($result1 = $bookmarkResults->fetch_array()){
                                    $parentheses = ($result1['url'] != "") ? "(".$result1['num_hits'].")" : "";
                                    $holdName = removeIMG($result1['name']);
                                    $displayName = (strlen($holdName) > 40) ? substr($holdName, 0, 40)."..." : $holdName;
                                    $invalidString = ($result1['invalid_url']) ? ' <font color="red" title="Invalid URL"><b>(!)</b></font>' : '';
                                    echo '<li>';
                                    echo ($result1['url'] != "") ? '<a href="'.$result1['url'].'" target="_blank"><img src="images/globe_icon.png" border=0></a>&nbsp;' : '<img src="images/globe_filler.png" border=0> ';
                                    echo '<a href ="manage_content.php?b_id=',$result1['bookmark_id'],'" title="Click to edit">',
                                         $displayName,'</a>&nbsp',$parentheses,$invalidString,'</li>';
                                }
                            }
                    ?>
                </ul>
            </div>
    <?php } ?>
    <?php if($_GET['searchType'] == "Tags") { ?>
            <!--Div for tag search results-->
            <div class="box" style="float:left; width:30em">
                <h4 class="boxtitle">Search By Tags</h4>
                <p>This box will search content whose tags most match your search criteria.</p>
                <br />
                <ul style="list-style-type:none; padding-left:5px">
                    <?php
                        $arrayTags = explode(' ', $_GET['search']);
                        $sqlTags = '(';
                        $counter = 0;
                        foreach($arrayTags as $arrayTag){
                            $sand = $db->real_escape_string($arrayTag);
                            if($counter++)
                                $sqlTags .= ' OR t.name LIKE "'.$sand.'%"';
                            else
                                $sqlTags .= ' t.name LIKE "'.$sand.'%"';
                        }
                        $sqlTags .= ')';
                        $searchTags = 'SELECT COUNT(bt.tag_id) AS tagcount, bt.bookmark_id, b.name, b.url, b.num_hits, invalid_url
                                       FROM dcod_tag t, dcod_bookmark_tag bt, dcod_bookmark b
                                       WHERE t.tag_id = bt.tag_id AND '.$sqlTags.' AND
                                       b.bookmark_id = bt.bookmark_id
                                       GROUP BY bt.bookmark_id
                                       ORDER BY COUNT(bt.tag_id) DESC';
                        $tagResults = $db->query($searchTags);

                        if($tagResults->num_rows == 0){
                            echo "No Results Found.";
                        } else {
                        	while($result2 = $tagResults->fetch_array()){
                                $parentheses = ($result2['url'] != "") ? "(".$result2['num_hits'].")" : "";
                                $holdName = removeIMG($result2['name']);
                                $displayName = (strlen($holdName) > 40) ? substr($holdName, 0, 40)."..." : $holdName;
                                $invalidString = ($result2['invalid_url']) ? ' <font color="red" title="Invalid URL"><b>(!)</b></font>' : '';
                                echo '<li>';
                                echo ($result2['url'] != "") ? '<a href="'.$result2['url'].'" target="_blank"><img src="images/globe_icon.png" border=0></a>&nbsp;' : '<img src="images/globe_filler.png" border=0> ';
                                echo '<a href ="manage_content.php?b_id=',$result2['bookmark_id'],'" title="Click to edit">',
                                     $displayName,'</a>&nbsp',$parentheses,$invalidString,'</li>';
                            }
                        }
                    ?>
                </ul>
            </div>
    <?php } ?>
    <?php if($_GET['searchType'] == "Url") { ?>
        <!--Div for url search results-->
            <div class="box" style="float:left; width:30em">
                <h4 class="boxtitle">Search By Url</h4>
                <p>This box will search content whose url matches your search criteria.</p>
                <br />
                <ul style="list-style-type:none; padding-left:5px">
                    <?php
                        $url = $_GET['search'];

                        $searchURL =  sprintf('SELECT name, url, num_hits, bookmark_id, invalid_url
                                               FROM dcod_bookmark
                                               WHERE url LIKE "%%%s%%"',
                        		$db->real_escape_string($_GET['search']));
                        $urlResults = $db->query($searchURL);

                        if($urlResults->num_rows == 0){
                            echo "No Results Found.";
                        } else {
                        	while($result3 = $urlResults->fetch_array()){
                                $parentheses = ($result3['url'] != "") ? "(".$result3['num_hits'].")" : "";
                                $holdName = removeIMG($result3['name']);
                                $displayName = (strlen($holdName) > 40) ? substr($holdName, 0, 40)."..." : $holdName;
                                $invalidString = ($result3['invalid_url']) ? ' <font color="red" title="Invalid URL"><b>(!)</b></font>' : '';
                                echo '<li>';
                                echo ($result3['url'] != "") ? '<a href="'.$result3['url'].'" target="_blank"><img src="images/globe_icon.png" border=0></a>&nbsp;' : '<img src="images/globe_filler.png" border=0> ';
                                echo '<a href ="manage_content.php?b_id=',$result3['bookmark_id'],'" title="Click to edit">',
                                     $displayName,'</a>&nbsp',$parentheses,$invalidString,'</li>';
                            }
                        }
                    ?>
                </ul>
            </div>
        <?php } ?>
        <div id="push"></div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>