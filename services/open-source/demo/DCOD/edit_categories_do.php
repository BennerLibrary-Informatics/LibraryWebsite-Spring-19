<?php
/* File Name: edit_categories_do.php
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
<?php session_start(); ?>
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
if($_REQUEST['operation']=='update')
{
            $id=$_REQUEST['id'];
            $cat=new Category($db, $id);
            $cat->setDescription($_REQUEST['newcatDesc']);
            $cat->setUserId($_REQUEST['owner']);
            $cat->setName($_REQUEST['newcatName']);
            $cat->setNotes($_REQUEST['notes']);
            $update=$cat->updateCategory();
            if($update==true)
                    print_r(true);
}
 if($_REQUEST['operation']=='change')
 {
       $cat=new Category($db, $_REQUEST['id']);
       $cat->getBookmarks();
                        $array=$cat->getArray();
                        $length=$cat->getArrayLength();
                        $counter=0;
                        $outstring='<OL>';
                        while($counter<$length)
                        {
                            $bkmk=new Bookmark($db, $array[$counter]);
                            $outstring.='<LI>';
                            $outstring.=($bkmk->getUrl() != "") ? '<a target="_blank" href="'.$bkmk->getUrl().'"><img src="images/globe_icon.png" alt="URL" border=0></a>&nbsp;' : "<img src='images/globe_filler.png' border=0>&nbsp;";
                            $outstring.='<a href="manage_content.php?b_id='.$bkmk->getId().'&selected='.$cat->getName().'" title="Click to edit">';
                            $holdName = removeIMG($bkmk->getName());
                            $outstring.= (strlen($holdName) > 40) ? substr($holdName, 0, 40)."..." : $holdName;
                            $outstring.='</a>';
                            if($bkmk->getUrl() != "") $outstring.='&nbsp;('.$bkmk->getNumHits().')';
                            $outstring.='</LI>';
                            $counter++;

                        }
                        $outstring.='</OL>';
                        print_r($outstring);

 }
 if($_REQUEST['operation']=='remove')
 {
 	$cat=new Category($db, $_REQUEST['id']);
     $cat->removeCategory();
 }
 if($_REQUEST['operation']=='add')
 {
 	$cat=new Category($db);
     if(is_null($_REQUEST['owner'])|| is_null($_REQUEST['notes']))
        $cat->addNewCategory($_REQUEST['addName'], $_REQUEST['addDescription']);
     else $cat->addFullNewCategory ($_REQUEST['addName'], $_REQUEST['addDescription'], $_REQUEST['owner'], $_REQUEST['notes']);
     print_r($cat->getId());
 }
if($_REQUEST['operation']=='desc')
{
	$cat=new Category($db, $_REQUEST['id']);
    $sql=sprintf('SELECT name FROM dcod_users WHERE user_id="%s"',
            $db->real_escape_string($cat->getUserId()));
    $query=$db->query($sql);
    $array=$query->fetch_array();
    print_r($cat->getDescription()."/+".$cat->getUserId()."/+".$array['name']."/+".$cat->getNotes());}
if($_REQUEST['operation']=='owner')
{
	$cat=new Category($db, $_REQUEST['id']);
    print_r($cat->getUserId());
}

?>