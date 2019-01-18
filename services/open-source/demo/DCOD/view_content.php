<?php
/* File Name: view_content.php
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
        <script type="text/javascript" src="js/expand.js"></script>
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
            $(function() {
                $("h2.expand").toggler({method: "toggle", speed: 0});
                $("#content").expandAll({trigger: "h2.expand", ref: "div.demo", localLinks: "p.top a"});
            });
        </script>
    </head>
    <body>
        <div id="page-wrapper">
            <?php echo new TopMenu();?>
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

            <?php
                if(isset($_GET['num']))
                {
                    if($_GET['num'] == "all")
                        $num = 1000000;
                    else
                        $num = (intval($_GET['num']) > 0) ? intval($_GET['num']) : 10;
                }
                else
                    $num = 10;
                
                $sort = isset($_GET['sort']) ? $_GET['sort'] : "name";
                if($sort != "date_created" && $sort != "last_updated" && $sort != "num_hits")
                {
                    $sort = "name";
                    $ascDesc = " ASC";
                }
                else
                    $ascDesc = " DESC";

                if (isset($_GET['view'])) {
                    if ($_GET['view'] == 'user') {
                        // Run a query to see if they are staff
                        $isStaffString = sprintf('SELECT class_id
                                                  FROM employee
                                                  WHERE user_id = "%s" AND
                                                  class_id = 6
                                                  LIMIT 1',
                                        $db->real_escape_string($_SESSION['user']->getUserId()));
                        $isStaffQuery = $db->query($isStaffString);
                        $isStaff = (bool) $isStaffQuery->num_rows;

                        $user_id = '';
                        if ($isStaff) {
                            $user_id = $_SESSION['user']->getUserId();
                            $emp_name = $_SESSION['user']->getFirstName().' '.$_SESSION['user']->getLastName();
                        } else {
                            $getEmpString = sprintf('SELECT
                                                         e.supervisor_id,
                                                         name
                                                     FROM
                                                         emp_instance e INNER JOIN
                                                             (SELECT
                                                                 MAX(date_start) maxdate,
                                                                 user_id
                                                              FROM
                                                                  emp_instance
                                                              WHERE
                                                                  user_id="%s"
                                                              GROUP BY user_id) g ON
                                                             g.maxdate = e.date_start AND
                                                             g.user_id = e.user_id,
                                                         employee em
                                                     WHERE
                                                         e.supervisor_id = em.user_id
                                                     LIMIT 1',
                            		$db->real_escape_string($_SESSION['user']->getUserId()));
                            $getEmpQuery = $db->query($getEmpString);
                            $getEmp = $getEmpQuery->fetch_array();

                            $user_id = $getEmp['supervisor_id'];
                            $emp_name = $getEmp['ename'];
                        }

                        $bookmarkString = sprintf('SELECT
                                                       b.bookmark_id,
                                                       b.date_created,
                                                       b.name,
                                                       b.url,
                                                       b.invalid_url,
                                                       b.enabled,
                                                       b.num_hits,
                                                       b.last_updated,
                                                       c.category_id,
                                                       c.name,
                                                       bc.category_id,
                                                       bc.bookmark_id
                                                   FROM
                                                       dcod_bookmark b,
                                                       dcod_category c,
                                                       dcod_bookmark_category bc
                                                   WHERE
                                                       c.user_id = "%s" AND
                                                       c.category_id=bc.category_id AND
                                                       b.bookmark_id=bc.bookmark_id
                                                   ORDER BY
                                                       b.'.$sort.$ascDesc,
                        		$db->real_escape_string($user_id));

                        $title = 'View Content Managed By: '.$emp_name;
                    }
                    else
                    {
                        $bookmarkString = 'SELECT
                                               b.bookmark_id,
                                               b.date_created,
                                               b.name,
                                               b.url,
                                               b.invalid_url,
                                               b.enabled,
                                               b.num_hits,
                                               b.last_updated
                                           FROM
                                               dcod_bookmark b
                                           ORDER BY
                                               b.'.$sort.$ascDesc;
                        $title = 'View All Content';
                    }
                }
                else
                {
                    $bookmarkString = 'SELECT
                                           b.bookmark_id,
                                           b.date_created,
                                           b.name,
                                           b.url,
                                           b.invalid_url,
                                           b.enabled,
                                           b.num_hits,
                                           b.last_updated
                                       FROM
                                           dcod_bookmark b
                                       ORDER BY
                                           b.'.$sort.$ascDesc;
                    $title = 'View All Content';
                }
                $bookmarkQuery = $db->query($bookmarkString);
                $numBookmarks = $bookmarkQuery->num_rows;

                $numPages = ceil($numBookmarks / $num);
            ?>
            <div class="box" style="float:left; width:48%">
                <h4 class="boxtitle" align="center"><?php echo $title; ?></h4>

                <div id="Searchresult"><br /><center><img src="images/ajax-loader.gif" alt="loader" border=0 /></center></div>

                <?php if ($numPages > 1) { ?>
                    <div id="Pagination" style="font-size: large"></div>
                    <br style="clear:both;" />
                <?php } ?>
            
                <div id="hiddenresult" style="display:none; font-size: large">
                <?php
                    ini_set('max_execution_time', 300);
                    $counter = 0;
                    echo '<div class="result"><ul id="noBullet">';
                    while ($bookmark = $bookmarkQuery->fetch_array()) {
                        if ($counter++ == $num) {
                            $counter = 1;
                            echo '</ul></div>',"\n",'<div class="result"><ul id="noBullet">';
                        }
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

                        switch($sort)
                        {
                            case "date_created":
                                $parentheses = "(".date("m-d-Y", strtotime($bookmark['date_created'])).")";
                                break;
                            case "last_updated":
                                $parentheses = "(".date("m-d-Y", strtotime($bookmark['last_updated'])).")";
                                break;
                            default:
                                $parentheses = ($bookmark['url'] != "") ? "(".$bookmark['num_hits'].")" : "";
                        }
                        $holdName = removeIMG($bookmark['name']);
                        $displayName = (strlen($holdName) > 50) ? substr($holdName, 0, 50)."..." : $holdName;
                        $invalidString = ($bookmark['invalid_url']) ? ' <font color="red" title="Invalid URL"><b>(!)</b></font>' : '';
                        echo '<li>';
                        echo ($bookmark['url'] != "") ? '<a href="'.$bookmark['url'].'" target="_blank"><img src="images/globe_icon.png" border=0></a>&nbsp;' : "<img src='images/globe_filler.png' border=0>&nbsp;";
                        echo '<a href="manage_content.php?b_id=',$bookmark['bookmark_id'],'" title="Click to edit">',
                              $displayName,'</a>&nbsp;',$parentheses,$invalidString,'<br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;';

                        $tagHtml = '';
                        while ($tag = $tagQuery->fetch_array())
                            $tagHtml .= '<a href="view_by_tags.php?id='.$tag['tag_id'].'">'.$tag['name'].'</a>, ';
                        $tagHtml = rtrim($tagHtml, ', ');

                        echo $tagHtml,'</li>';
                    }
                    echo "</div>";
                ?>
                </div>
            </div>
            <div style="float:left;">
                <?php
                    //This takes care of sorting and makes sure that changing one setting won't change the other
                	$request = explode("/",$_SERVER['REQUEST_URI']);
                	$current_page = end($request);
                    if(substr_count($current_page, "?") > 0)
                    {
                        $pageArray = explode("?", $current_page);
                        $pageName = $pageArray[0];
                        if(substr_count($current_page, "&") > 0)
                        {
                            $array2 = explode("&", $pageArray[1]);
                            $pageArray[1] = $array2[0];
                            $pageArray[2] = $array2[1];
                            if(substr_count($pageArray[1], "sort") > 0)
                            {
                                $numStr = $pageName."?".$pageArray[1]."&";
                                $sortStr = $pageName."?".$pageArray[2]."&";
                            }
                            else
                            {
                                $numStr = $pageName."?".$pageArray[2]."&";
                                $sortStr = $pageName."?".$pageArray[1]."&";
                            }
                        }
                        else
                        {
                            if(substr_count($pageArray[1], "sort") > 0)
                            {
                                $numStr = $pageName."?".$pageArray[1]."&";
                                $sortStr = $pageName."?";
                            }
                            else
                            {
                                $numStr = $pageName."?";
                                $sortStr = $pageName."?".$pageArray[1]."&";
                            }
                        }
                    }
                    else
                    {
                        $numStr = $current_page."?";
                        $sortStr = $current_page."?";
                    }
                ?>
                <div class="box" style="clear:both;">
                    <h4 class="boxtitle center">Number of Results</h4>
                    Results per Page: 
                    <input type="text" size="6" name="num" id="num" value="<?php echo ($num != '1000000') ? $num : 'all'; ?>"><br />
                    <input type="button" name="update" value="Update" onclick="window.location='<?php echo $numStr."num="; ?>'+$('input:text#num').val();"><input type="button" name="all" value="All Results" onclick="window.location='<?php echo $numStr."num=all"; ?>';">
                </div>
                <div class="box" style="clear:both; line-height: 24px">
                    <h4 class="boxtitle center">Sort By</h4>
                    <a href="<?php echo $sortStr; ?>sort=name">Name</a><br />
                    <a href="<?php echo $sortStr; ?>sort=num_hits">Number of Hits</a><br />
                    <a href="<?php echo $sortStr; ?>sort=date_created">Date Added</a><br />
                    <a href="<?php echo $sortStr; ?>sort=last_updated">Last Updated</a><br />
                </div>
            </div>
            <div id="push"></div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>