<?php
/* File Name: link_builder_do.php
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
<?php include 'class/config.php';?>
<?php include 'class/Category.php';?>
<?php include 'class/Bookmark.php';?>
<?php

    function removeIMG($instring) {
        if (strtoupper(substr($instring,0,5)) != "<IMG ") {
            return $instring;
        } else {
            return substr($instring,strrpos($instring, ">", 0) + 1 );
        }
    }

        //Get the requested categories as an array of the category ids
        $getCats = explode(",", $_REQUEST['cats']);
        //Set up an array for each category
        $cat = array();
        for($i = 0; $i < count($getCats); $i++)
        {
        	$cat[$i]=new Category($db, $getCats[$i]);
            $cat[$i]->getBookmarks();
            //If it is not the first one, compare it to the results so far and only save the one's in common
            if($i != 0)
            {
                $array = $cat[$i]->getArray();
                $results = array_intersect($results, $array);
            }
            else
            {
                //This is the first category; make the results array from it
                $results = $cat[0]->getArray();
            }
        }
        
        //Now give the results a nice output display
        $outstring='<OL>';
        if(count($results) > 0)
        {
            foreach($results as $val)
            {
                $bkmk=new Bookmark($db, $val);
                $outstring.='<LI>';
                $outstring.=($bkmk->getUrl() != "") ? '<a target="_blank" href="'.$bkmk->getUrl().'"><img src="images/globe_icon.png" alt="URL" border=0></a>&nbsp;' : "<img src='images/globe_filler.png' border=0>&nbsp;";
                $outstring.='<a href="manage_content.php?b_id='.$bkmk->getId().'" title="Click to edit">';
                $holdName = removeIMG($bkmk->getName());
                $outstring.= (strlen($holdName) > 40) ? substr($holdName, 0, 40)."..." : $holdName;
                $outstring.='</a>';
                if($bkmk->getUrl() != "") $outstring.='&nbsp;('.$bkmk->getNumHits().')';
                $outstring.='</LI>';
            }
        }
        $outstring.='</OL>';
        print_r($outstring);
?>