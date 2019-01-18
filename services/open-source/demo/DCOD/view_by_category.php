<?php
/* File Name: view_by_category.php
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
<?php include 'class/Bookmark.php'; ?>
<?php include 'class/Category.php'; ?>
<html>
    <head>
        <title>View Content | <?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>
        <link type='text/css' rel='stylesheet' href='css/main.css' />
    	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script>
        <!-- jNotify CSS -->
        <link rel="stylesheet" href="newjs/jnotify/jquery/jNotify.jquery.css" type="text/css" />
        <!-- jNotify and jQuery files -->
        <script type="text/javascript" src="newjs/jnotify/jquery/jquery.js"></script>
        <script type="text/javascript" src="newjs/jnotify/jquery/jNotify.jquery.js"></script>
        <link type="text/css" href="js/pagination/pagination.css" rel="stylesheet" />
        <script type="text/javascript" src="js/pagination/jquery.pagination.js"></script>
        <script type="text/javascript">
            function pageselectCallback(page_index, jq){
                var new_content = $('#hiddenresult div.result:eq('+page_index+')').clone();
                $('#Searchresult').empty().append(new_content);
                return false;
            }

            function initPagination() {
                var num_entries = $('#hiddenresult div.result').length;
                $("#Pagination").pagination(num_entries, {
                    callback: pageselectCallback,
                    items_per_page: 1,
                    num_edge_entries: 1
                });
             }
            $(document).ready(function(){
                initPagination();
            });
        </script>
    </head>
    <body>
        <div id="page-wrapper">
            <?php echo new TopMenu();?>
            <?php include 'sidebar.php'; ?>
            <div class="box">
                <?php
                	$category = new Category($db, $_GET['id']);
                    
                    $sort = isset($_GET['sort']) ? $_GET['sort'] : "name";
                    if($sort != "date_created" && $sort != "num_hits")
                    {
                        $sort = "name";
                        $ascDesc = " ASC";
                    }
                    else
                        $ascDesc = " DESC";
                ?>
                <h4 class="boxTitle" align="center">Content Categorized: <?php echo $category->getName(); ?></h4>

                <div id="Searchresult"></div>
                <?php
                    $bookmarkString = 'SELECT
                                           b.bookmark_id,
                                           b.name,
                                           b.date_created,
                                           b.url,
                                           b.invalid_url,
                                           b.enabled,
                                           b.num_hits
                                       FROM
                                           dcod_bookmark b,
                                           dcod_bookmark_category bt
                                       WHERE
                                           b.bookmark_id = bt.bookmark_id AND
                                           bt.category_id = '.$category->getId().'
                                       ORDER BY
                                           b.name';
                    $bookmarkQuery = $db->query($bookmarkString);
                    $numBookmarks = $bookmarkQuery->num_rows;

                    $numPerPage = 10;
                    $numPages = ceil($numBookmarks / $numPerPage);

                    if ($numPages > 1) {
                ?>
                <div id="Pagination" style="font-size: large"></div>
                <br style="clear:both;" />
                <?php } ?>

                <div id="hiddenresult" style="display:none; font-size: large">
                    <?php
                        function removeIMG($instring) {
                            if (strtoupper(substr($instring,0,5)) != "<IMG ") {
                                return $instring;
                            } else {
                                return substr($instring,strrpos($instring, ">", 0) + 1 );
                            }
                        }

                        $counter = 0;
                        echo '<div class="result"><ul id="noBullet">';
                        while ($bookmark = $bookmarkQuery->fetch_array()) {
                            if ($counter++ == $numPerPage) {
                                $counter = 1;
                                echo '</ul></div>'."\n".'<div class="result"><ul id="noBullet">';
                            }
                            $catString = 'SELECT
                                              t.name,
                                              t.category_id
                                          FROM
                                              dcod_category t,
                                              dcod_bookmark_category bt
                                          WHERE
                                              t.category_id = bt.category_id AND
                                              bt.bookmark_id = '.$bookmark['bookmark_id'].'
                                          ORDER BY
                                              t.name';
                            $catQuery = $db->query($catString);
                            
                            $parentheses = ($sort == "date_created") ? "(".date("m-d-Y", strtotime($bookmark['date_created'])).")" : (($bookmark['url'] != "") ? "(".$bookmark['num_hits'].")" : "");

                            $holdName = removeIMG($bookmark['name']);
                            $displayName = (strlen($holdName) > 40) ? substr($holdName, 0, 40)."..." : $holdName;
                            $invalidString = ($bookmark['invalid_url']) ? ' <font color="red" title="Invalid URL"><b>(!)</b></font>' : '';
                            echo '<li>';
                            echo ($bookmark['url'] != "") ? '<a href="'.$bookmark['url'].'" target="_blank"><img src="images/globe_icon.png" border=0 ></a>&nbsp;' : "<img src='images/globe_filler.png' border=0>&nbsp;";
                            echo '<a href="manage_content.php?b_id=',$bookmark['bookmark_id'],'" title="Click to edit">',
                                  $displayName,'</a>&nbsp;',$parentheses,$invalidString,'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                            $catHtml = '';
                            while ($cat = $catQuery->fetch_array())
                            {
                                if($cat['category_id'] != $category->getId())
                                    $catHtml .= '<a href="view_by_category.php?id='.$cat['category_id'].'">'.$cat['name'].'</a>, ';
                            }
                            $catHtml = rtrim($catHtml, ', ');

                            echo $catHtml.'</li>';
                        }
                        echo "</div>";
                    ?>
                </div>
            </div>
            <div id="push"></div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>