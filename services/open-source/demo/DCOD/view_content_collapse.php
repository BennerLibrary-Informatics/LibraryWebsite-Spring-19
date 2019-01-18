<?php
/* File Name: view_content_collapse.php
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
<?php include 'class/Category.php';?>
<?php include 'class/TopMenu.php';?>
<html>
    <head>
        <title>View Your Content | <?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>
        <link type='text/css' rel='stylesheet' href='css/main.css' />
    	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.js'></script>
        <!-- jNotify CSS -->
        <link rel="stylesheet" href="newjs/jnotify/jquery/jNotify.jquery.css" type="text/css" />
        <!-- jNotify and jQuery files -->
        <script type="text/javascript" src="newjs/jnotify/jquery/jquery.js"></script>
        <script type="text/javascript" src="newjs/jnotify/jquery/jNotify.jquery.js"></script>
        <link type="text/css" href="js/pagination/pagination.css" rel="stylesheet" />
        <script type="text/javascript" src="js/pagination/jquery.pagination.js"></script>
        <script type="text/javascript" src="js/expand.js"></script>
        <script type="text/javascript">
            function pageSelectCallback(page_index, jq){
                var new_content = $('#hiddenresult div.result:eq('+page_index+')').clone();
                $('#Searchresult').empty().append(new_content);
                return false;
            }

            function initPagination() {
                var num_entries = $('#hiddenresult div.result').length;
                $("#Pagination").pagination(num_entries, {
                    callback: pageSelectCallback,
                    items_per_page: 1,
                    num_edge_entries: 1
                });
             }

            $(document).ready(function(){
                initPagination();
            });
            $(function() {
    // --- Using the default options:
    //$("h3.expand").toggler();
    // --- Other options:
//    $("h3.expand").toggler({method: "toggle", speed: 0});
    //$("h3.expand").toggler({method: "toggle"});
    //$("h3.expand").toggler({speed: "fast"});
    $("h3.expand").toggler({method: "fadeToggle"});
    //$("h3.expand").toggler({method: "slideFadeToggle"});    
    $("#content").expandAll({trigger: "h3.expand", ref: "div.demo", localLinks: "p.top a"});
});
        </script>
    </head>
    <body>
        <div id="page-wrapper">
            <?php echo new TopMenu();?>
            <?php include 'sidebar.php'; ?>
            <?php
                if (isset($_GET['view'])) {
                   $catSQL=sprintf('SELECT category_id,name cname FROM dcod_category WHERE user_id="%s"',
                           $db->real_escape_string($_SESSION['user']->getUserId()));
                   $catQuery=$db->query($catSQL);
                }
                else
                {
                    header("Location: ".$_SERVER['SCRIPT_NAME']."?view=user");
                    exit;
                }
                $numPerPage = 10;
                $emp_name = $_SESSION['user']->getName();
                $title = 'View Content Managed By: '.$emp_name;
            ?>
            <div class="box" style="float:left;">
                <h4 class="boxtitle" align="center"><?php echo $title; ?></h4>

                <div id="Searchresult"><br /><center><img src="images/ajax-loader.gif" alt="loader" border=0 /></center></div>

                <div id="Pagination" style="display:none;font-size: large"></div>
                <br style="clear:both;" />

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
                        while ($result = $catQuery->fetch_array()) {
                            echo '<h3 style="margin: 0 0 0 0;padding: 0 0 0 0"; class="expand"><a style="display:block" href="#" title="Expand/Collapse" />'.$result['cname'].'</a> &nbsp; &nbsp; </h3><div class="collapse">';
                            if ($counter == $numPerPage-1) {
                                $counter = 1;
                                echo '</ul></div>',"\n",'<div class="result"><ul id="noBullet">';
                            }                                 
                            $cat=new Category($db, $result['category_id']);
                            if($cat->getArrayLength()>0){
                                $cat->getBookmarks();
                                $bArray=$cat->getArray();
                                for($x=0;$x<$cat->getArrayLength();$x++)
                                {
                                    $bSQL=sprintf('SELECT invalid_url,url,bookmark_id,name z,num_hits FROM dcod_bookmark WHERE bookmark_id="'.$bArray[$x].'"');
                                    $bQuery=$db->query($bSQL)or die($db->error);
                                    $bookmark=$bQuery->fetch_assoc();
                                    $tagString = 'SELECT
                                              t.name,
                                              t.tag_id
                                          FROM
                                              dcod_tag t,
                                              dcod_bookmark_tag bt
                                          WHERE
                                              t.tag_id = bt.tag_id AND
                                              bt.bookmark_id = '.$bookmark['bookmark_id'].'
                                          ORDER BY
                                              t.name';
                                    $tagQuery = $db->query($tagString);
                                    $holdName = removeIMG($bookmark['z']);
                                    $displayName = (strlen($holdName) > 40) ? substr($holdName, 0, 40)."..." : $holdName;
                                    $invalidString = ($bookmark['invalid_url']) ? ' <font color="red" title="Invalid URL"><b>(!)</b></font>' : '';
                                    echo '<li style="margin-left:45px;" >';
                                    echo ($bookmark['url'] != "") ? '<a href="'.$bookmark['url'].'" target="_blank"><img src="images/globe_icon.png" border=0 ></a>&nbsp;' : "<img src='images/globe_filler.png' border=0>&nbsp;";
                                    echo '<a href="manage_content.php?b_id=',$bookmark['bookmark_id'],'" title="Click to edit">',$displayName,'</a>&nbsp;';
                                    if($bookmark['url'] != "") echo '(',$bookmark['num_hits'],')';
                                    echo $invalidString,'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';
                                    $tagHtml = '';
                                    while ($tag = $tagQuery->fetch_array())
                                $tagHtml .= '<a href="view_by_tags.php?id='.$tag['tag_id'].'">'.$tag['name'].'</a>, ';
                            $tagHtml = rtrim($tagHtml, ', ');

                            echo $tagHtml,'</li>';
                                }

                            }
                           echo '</div>';
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