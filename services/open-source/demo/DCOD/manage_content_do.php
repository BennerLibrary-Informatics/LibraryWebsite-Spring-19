<?php
/* File Name: manage_content_do.php
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
    session_start();
    include 'class/User.php';
    include 'class/config.php';
    include 'class/Bookmark.php';
    include 'class/Category.php';
    include 'class/Tag.php';
    
    $_SESSION['user'] = new User($db, $_SESSION['emp_id']);

    //checks to make sure that the URL isn't already in the database before adding it.
    if(isset($_REQUEST['operation'])&&$_REQUEST['operation']=='check')
    {
        if($_SESSION['mode']=="Add")
        {
            $sql=sprintf('SELECT url FROM dcod_bookmark WHERE url="%s"',
                    $db->real_escape_string($_REQUEST['url']));
            $query=$db->query($sql);
            $array=$query->fetch_array();
            $sql1=sprintf('SELECT name,bookmark_id FROM dcod_bookmark WHERE name="%s"',
            		$db->real_escape_string($_REQUEST['name']));
            $query1=$db->query($sql1) or die($db->error);
            $array1=$query1->fetch_array();
            print_r('name '.$query1->num_rows.' url '.$query->num_rows.' '.$array1['bookmark_id']);
            
        }
    }
    else
    {
        $mode=$_REQUEST['mode'];

        //Get bookmark data
        $name = $_REQUEST['bookmark_name'];
        $url = $_REQUEST['bookmark_url'];
        $invalid = $_REQUEST['invalid'];
        $tag_array = array();
        if($_REQUEST['bookmark_tags'] != "")
        {
            $tags= preg_replace('/\s\s+/', ' ', $_REQUEST['bookmark_tags']);
            $tags=ltrim($tags);
            $tags=rtrim($tags);
            $tags=trim($tags);
            $tag_array = explode(" ",$tags);
        }
        $description = $_REQUEST['bookmark_description'];

        if(isset($_REQUEST['delete']))
        {
            $deleteBookmark = sprintf('DELETE FROM dcod_bookmark
                                    WHERE bookmark_id = %s',
                $db->real_escape_string($_REQUEST['b_id']));
            $delB = $db->query($deleteBookmark);

            $deleteTags = sprintf('DELETE FROM dcod_bookmark_tag
                                WHERE bookmark_id = %s',
            		$db->real_escape_string($_REQUEST['b_id']));
            $delT = $db->query($deleteTags);

            $deleteCategories = sprintf('DELETE FROM dcod_bookmark_category
                                        WHERE bookmark_id = %s',
            		$db->real_escape_string($_REQUEST['b_id']));
            $delC = $db->query($deleteCategories);

            header("Location: mainPage.php?msg=9");
            exit(0);
        }

        if($mode == "Add")
        {
            //Add the new bookmark to the database
            $bkmk = new Bookmark($db);
            $userid = !isset($_REQUEST['bookmarklet']) ? $_SESSION['user']->getUserId() : null;
            $bkmk->createBookmark($name, $url, 1, $description, $invalid, $userid);

            //Add the bookmark to the selected categories
            for($i=1; $i < $_REQUEST['row_count']; $i++)
            {
                $cat_id = $_REQUEST['row_id_'.$i];

                //Create category object
                $cat = new Category($db, $cat_id);

                //link category to bookmark
                $bkmk->addCategory($cat_id);
            }

            //Add tags
            for($i=0; $i < count($tag_array); $i++)
            {
                //Search for the tag name in the database
                $sql = sprintf('SELECT tag_id
                                FROM dcod_tag
                                WHERE name = "%s"
                                LIMIT 1',
                		$db->real_escape_string($tag_array[$i]));
                $query = $db->query($sql);
                $result = $query->fetch_array();

                if($query->num_rows == 0)
                {
                    //if tag doesn't exist add to the database
                	$tag = new Tag($db);
                    $tag->createTag($tag_array[$i]);
                }
                else
                {
                    //else use the tag's id
                    $tag = new Tag($db, $result['tag_id']);
                }
                //then link the bookmark and the tag
                $bkmk->addTag((int) $tag->getId());
            }
        }
        else if($mode == "Edit")
        {
            $id=$_REQUEST['b_id'];
            $bkmk=new Bookmark($db, $id);

            //Update the name, url, and description of the bookmark if they've changed
            $update = false;
            if($bkmk->getName() != $name)
            {
                $bkmk->setName($name);
                $update = true;
            }
            if($bkmk->getUrl() != $url)
            {
                $bkmk->setUrl($url);
                $update = true;
            }
            if($bkmk->getDescription() != $description)
            {
                $bkmk->setDescription($description);
                $update = true;
            }
            if($update)
                $bkmk->updateBookmark($invalid);

            //Update Categories ----------------------------------------------------
            //check if the categories have changed, then add and remove them accordingly
            //create the array of categories submitted from the page
            $page_cat_array = array();
            for($i=1; $i < $_REQUEST['row_count']; $i++)
            {
                $cat_id = $_REQUEST['row_id_'.$i];

                //Create category object
                $cat = new Category($db, $cat_id);

                //Create the array of categories from the category table on the submitted page
                $page_cat_array[$i-1]['category_id'] = $cat->getId();
                $page_cat_array[$i-1]['name'] = $cat->getName();
            }
            //get the old array of categories from the bookmark object
            $db_cat_array = $bkmk->getCategories();


            //search through the database array for cateories that aren't in the page array
            //and remove the categories that have been removed from the database
            for($i=0; $i<count($db_cat_array); $i++)
            {
                //if the category is in the database, but not from the submitted categories
                if(array_search($db_cat_array[$i] , $page_cat_array, true) === false)
                {
                    //delete the category from the bookmark
                    $bkmk->removeCategory($bkmk->getId(), $db_cat_array[$i]['category_id']);
                }
            }

            //search through the page array for categories that aren't in the database array
            //and add the missing categories to the database
            for($i=0; $i<count($page_cat_array); $i++)
            {
                //if the category is in the submitted categories, but not in the database
                if(array_search($page_cat_array[$i], $db_cat_array, true) === false)
                {
                    //add the category to the bookmark
                    $bkmk->addCategory($page_cat_array[$i]['category_id']);
                }
            }
            //End Update Categories ------------------------------------------------

            //Update Tags ----------------------------------------------------------
            //Check if the tags have changed and then update them accordingly

            //Create the array of tags from the page submission
            $page_tag_array = array();
            for($i=0; $i<count($tag_array); $i++)
            {
                //Search for the tag name in the database
                $sql = sprintf('SELECT tag_id
                                FROM dcod_tag
                                WHERE name = "%s"
                                LIMIT 1',
                		$db->real_escape_string($tag_array[$i]));
                $query = $db->query($sql);
                $result = $query->fetch_array();

                if($query->num_rows == 0)
                {
                    //if tag doesn't exist add to the database
                    $tag = new Tag($db);
                    $tag->createTag($tag_array[$i]);
                }
                else
                {
                    //else use the tag's id
                	$tag = new Tag($db, $result['tag_id']);
                }
                $page_tag_array[$i]['tag_id'] = $tag->getId();
                $page_tag_array[$i]['name'] = $tag->getName();
            }

            //get the old array of tags from the bookmark object
            $db_tag_array = $bkmk->getTags();

            //search through the database array for tags that aren't in the page array
            //and remove the tags that have been removed from the database
            for($i=0; $i<count($db_tag_array); $i++)
            {
                //if the tag is in the database, but not from the submitted tags
                if(array_search($db_tag_array[$i], $page_tag_array, true) === false)
                {
                    //delete the tag from the bookmark
                    $bkmk->removeTag($bkmk->getId(),$db_tag_array[$i]['tag_id']);
                }
            }

            //search through the page array for tags that aren't in the database array
            //and add the missing tags to the database
            for($i=0; $i<count($page_tag_array); $i++)
            {
                //if the tag is in the submitted categories, but not in the database
                if(array_search($page_tag_array[$i], $db_tag_array, true) === false)
                {
                    $bkmk->addTag((int) $page_tag_array[$i]['tag_id']);
                }
            }

            //End Update Tags ------------------------------------------------------
        }

        //if the requester is not the bookmarklet page, then go to the main page
        //otherwise, close the window
        if(!isset($_REQUEST['bookmarklet']))
        {
            $param = (substr_count($_REQUEST['referrer'], "?") > 0) ? "&" : "?";
            $selectStr = (isset($_REQUEST['selected'])) ? "&selected=".$_REQUEST['selected'] : "";
            if ($mode != 'Edit')
                header("Location: ".$_REQUEST['referrer'].$param."msg=10".$selectStr);
            else
                header('Location: '.$_REQUEST['referrer'].$param.'msg=11&urlTest='.$url.$selectStr);
        }
        else
            echo '<script type="text/javascript">self.close();</script>';
    }
?>
