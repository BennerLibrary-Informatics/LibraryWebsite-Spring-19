<?php
/* File Name: mainPage.php
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
<?php include 'check_session.php'; ?>
<?php include 'class/TopMenu.php'; ?>
<?php include 'class/wordCloud.php'; ?>
<html>
    <head>
        <title><?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>

        <link type='text/css' rel='stylesheet' href='css/main.css' />
        <link type='text/css' rel='stylesheet' href='css/wordcloud.css' />
        <link rel="stylesheet" href="newjs/jnotify/jquery/jNotify.jquery.css" type="text/css" />
    	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script>
        <script type="text/javascript" src="newjs/jnotify/jquery/jquery.js"></script>
        <script type="text/javascript" src="newjs/jnotify/jquery/jNotify.jquery.js"></script>
        <script type="text/javascript">
            $(function(){
                //To use tag cloud instead of category cloud, simply uncomment the following line and comment out $('catCloud')...
                //$('#tagCloud').load('cloudOut.php')
                $('#catCloud').load('catCloud.php')
            });
            
            function collapse(btn, div){
            var theBtn = document.getElementById(btn);
            var theDiv = document.getElementById(div);
                if(theDiv.style.display === "none")
                {
                    $(theDiv).slideDown();
                    $(theBtn).css("background-image", "url('images/collapse_arrow_up.png')");
                }
                else
                {
                    $(theDiv).slideUp();
                    $(theBtn).css("background-image", "url('images/collapse_arrow_down.png')");
                }
            }
        </script>
    </head>
    <body onload="document.searchBox.search.focus()">
        <div id="page-wrapper">
            <?php echo new TopMenu();?>
            <?php include 'sidebar.php'; ?>
            <div class="box" style="position: relative; left: 1%; width: 65%">
                <button id="recentlyUpdatedBtn" class="skinny" onclick="collapse('recentlyUpdatedBtn','recentlyUpdated')">        
                    <font class="headText1">Recently Updated</font><br />
                    <font class="headText2">Most recent results displayed first</font>
                </button><br /><br />
                <div id='recentlyUpdated'>
                    <ol class='result_list'>
                        <?php
                            function removeIMG($instring) {
                                if (strtoupper(substr($instring,0,5)) != "<IMG ") {
                                    return $instring;
                                } else {
                                    return substr($instring,strrpos($instring, ">", 0) + 1 );
                                }
                            }

                            //Get most recent bookmarks by date created from the database
                            $recentString='SELECT *
                                        FROM dcod_bookmark
                                        ORDER BY last_updated DESC
                                        LIMIT 10';
                            $recentResults=  $db->query($recentString);
                        ?>
                        <div style="float:left; padding-right: 50px">
                        <?php
                            //Display results
                            $count = 0;
                            while ($recentTags = $recentResults->fetch_array()) {
                                $holdName = removeIMG($recentTags['name']);
                                $displayName = (strlen($holdName) > 40) ? substr($holdName, 0, 40)."..." : $holdName;
                                $invalidString = ($recentTags['invalid_url']) ? ' <font color="#FF0000" title="Invalid URL"><b>(!)</b></font>' : '';
                                echo '<li>';
                                echo ($recentTags['url'] != "") ? '<a href="'.$recentTags['url'].'" target="_blank"><img src="images/globe_icon.png" border=0></a>&nbsp;' : "<img src='images/globe_filler.png' border=0>&nbsp;";
                                echo '<a href ="manage_content.php?b_id=',$recentTags['bookmark_id'],'" title="Click to edit">',$displayName,'</a>&nbsp;('.date("m-d-Y", strtotime($recentTags['last_updated'])),')',$invalidString,'</li>';
                                $count++;
                                if($count == 5)
                                    echo "</div><div style='float:left'>";
                            }
                        ?>
                        </div>
                    </ol>
                    <div style="clear: both"><?php if($count == 10) { ?><br /><a href='view_content.php?sort=last_updated'>More &rarr;</a><br /><?php } ?><br /></div>
                </div>
                <button id="recentlyAddedBtn" class="skinny" onclick="collapse('recentlyAddedBtn','recentlyAdded')">        
                    <font class="headText1">Recently Added</font><br />
                    <font class="headText2">Most recent results displayed first</font>
                </button><br /><br />
                <div id='recentlyAdded' style="display: none;">
                    <ol class='result_list'>
                        <?php
                            //Get most recent bookmarks by date created from the database
                            $recentString='SELECT *
                                        FROM dcod_bookmark
                                        ORDER BY date_created DESC
                                        LIMIT 10';
                            $recentResults=  $db->query($recentString);
                        ?>
                        <div style="float:left; padding-right: 50px">
                        <?php
                            //Display results
                            $count = 0;
                            while ($recentTags = $recentResults->fetch_array()) {
                                $holdName = removeIMG($recentTags['name']);
                                $displayName = (strlen($holdName) > 40) ? substr($holdName, 0, 40)."..." : $holdName;
                                $invalidString = ($recentTags['invalid_url']) ? ' <font color="#FF0000" title="Invalid URL"><b>(!)</b></font>' : '';
                                echo '<li>';
                                echo ($recentTags['url'] != "") ? '<a href="'.$recentTags['url'].'" target="_blank"><img src="images/globe_icon.png" border=0></a>&nbsp;' : "<img src='images/globe_filler.png' border=0>&nbsp;";
                                echo '<a href ="manage_content.php?b_id=',$recentTags['bookmark_id'],'" title="Click to edit">',$displayName,'</a>&nbsp;('.date("m-d-Y", strtotime($recentTags['date_created'])),')',$invalidString,'</li>';
                                $count++;
                                if($count == 5)
                                    echo "</div><div style='float:left'>";
                            }
                        ?>
                        </div>
                    </ol>
                    <div style="clear: both"><?php if($count == 10) { ?><br /><a href='view_content.php?sort=date_created'>More &rarr;</a><br /><?php } ?><br /></div>
                </div>
                <button id="mostAccessedBtn" class="skinny" onclick="collapse('mostAccessedBtn','mostAccessed')">         
                    <font class="headText1">Most Accessed</font><br />
                <?php
                    //Get the last reset date; if it hasn't been reset, get the date the first entry was created
                    $sql = "SELECT last_reset, date_created FROM dcod_bookmark ORDER BY date_created ASC LIMIT 1";
                    $result = $db->query($sql) or die($db->error);
                    if($result->num_rows)
                    {
                    	$row = $result->fetch_array();
                        $reset_stamp = ($row['last_reset'] != null) ? strtotime($row['last_reset']) : strtotime($row['date_created']);
                    }
                    else
                        $reset_stamp = time();
                    $last_reset = date("m-d-Y", $reset_stamp);
                ?>
                    <font class="headText2">Organized by # of Hits (Since <?php echo $last_reset; ?>)</font>
                </button><br /><br />
                <div id='mostAccessed' style="display: none;">
                    <ol class='result_list'>
                        <?php
                            //Get top bookmarks by number of hits from the database
                            $topString='SELECT name, num_hits, url, bookmark_id, invalid_url
                                        FROM dcod_bookmark
                                        ORDER BY num_hits DESC
                                        LIMIT 10';
                            $tagResults=  $db->query($topString);
                        ?>
                        <div style="float:left; padding-right: 50px">
                        <?php
                            //Display results
                            $count = 0;
                            while ($topTags = $tagResults->fetch_array()) {
                                $holdName = removeIMG($topTags['name']);
                                $displayName = (strlen($holdName) > 40) ? substr($holdName, 0, 40)."..." : $holdName;
                                $invalidString = ($topTags['invalid_url']) ? ' <font color="#FF0000" title="Invalid URL"><b>(!)</b></font>' : '';
                                echo '<li>';
                                echo ($topTags['url'] != "") ? '<a href="'.$topTags['url'].'" target="_blank"><img src="images/globe_icon.png" border=0></a>&nbsp;' : "<img src='images/globe_filler.png' border=0>&nbsp;";
                                echo '<a href ="manage_content.php?b_id=',$topTags['bookmark_id'],'" title="Click to edit">',$displayName,'</a>';
                                if($topTags['url'] != "") echo '&nbsp;('.$topTags['num_hits'],')',$invalidString,'</li>';
                                $count++;
                                if($count == 5)
                                    echo "</div><div style='float:left'>";
                            }
                        ?>
                        </div>
                    </ol>
                    <div style="clear:both"><?php if($count == 10) { ?><br /><a href="view_content.php?sort=num_hits">More &rarr;</a><br /><?php } ?><br /></div>
                </div>
                <!-- THIS IS THE HALFWAY POINT. BELOW THIS STARTS THE BOX WITH TOP CATEGORIES and CLOUD
                
                    <button id=tagCloudBtn" class="skinny" onclick="collapse('tagCloudBtn','tagCloud')" style='background-image: url('images/collapse_arrow_up.png');">
                        <font class="headText1">Tags</font>
                    <div id="tagCloud" class="word center" style="display: none;"><br />
                        <img src="images/ajax-loader.gif" alt="loader" border=0 >
                    </div>
                    <hr>
                -->
                    
                <button id="catCloudBtn" class="skinny" onclick="collapse('catCloudBtn','catCloud')">
                    <font class="headText1">Categories</font><br />
                    <font class="headText2">The bigger the word, the more content associated with that category</font>
                </button><br />
                <div id="catCloud" class="word center" style="display: none;"><br />
                    <img src="images/ajax-loader.gif" alt="loader" border=0 >
                </div>
            </div>
            <div id="push"></div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>