<?php
/* File Name: link_connector.php
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
<?php include "class/config.php"; ?>
<?php include "class/Category.php"; ?>
<?php include "class/Bookmark.php"; ?>
<?php include "shared/Database.php"; ?>
<style>
/* This css is necessary for float descriptions to work. Modify this to change the style */
a.descText {
    outline: none;
}

a.descText span.float_description {
    position: absolute;
    left: 100px;
    bottom: 24px;
    z-index: 10;
    display: none;
    border: 2px solid #BFBFBF;
    background-color: #FFFFFF;
    color: #000000;
    padding: 6px;
    min-width: 150px;
    max-width: 300px;
}

a.descText:hover span.float_description {
    display: block;
    text-decoration: none;
}
</style>
<?php
	/**
	 * @deprecated Use get_bookmark() below
	 */
	function print_bookmark($link_cats, $desc_loc, $open_pref, $email_boolean, $powered_by = 'no') {
		// to anyone reading this code, you should not be creating an instance of the database like this
		// this is solely done for compatibilty with programs that rely on DCOD
		return get_bookmark(new Database(), $link_cats, $desc_loc, $open_pref, $email_boolean, $powered_by);
	}
	
	function get_bookmark($db, $link_cats, $desc_loc, $open_pref, $email_boolean, $powered_by = 'no') {
        $outstring='';
        $arrayCats=explode(',',$link_cats);
        $sql=sprintf('SELECT DISTINCT user_id FROM dcod_category WHERE category_id IN (%s)', $link_cats);
        $query=$db->query($sql) or die($db->error);
        $count = 0;
        while($name=$query->fetch_array())
        {
            if($count == 0)
                $owner_ids = $name['user_id'];
            else
                $owner_ids .= ",".$name['user_id'];
            $count++;
        }

        if($arrayCats!=null)
        {
            $size = sizeof($arrayCats);
            $catIds = $arrayCats;
            
            //Get category names to be used later
            $sql = sprintf("SELECT name FROM dcod_category WHERE category_id IN (%s)", $link_cats);
            $result = $db->query($sql) or die($db->error);
            $count = 0;
            while($row = $result->fetch_array())
            {
                if($count == 0)
                    $catString = $row['name'];
                else
                    $catString .= ", ".$row['name'];
                $count++;
            }

            $select_str = 'SELECT bc1.bookmark_id id3, b1.url,
                                  b1.name, b1.description ';
            $from_str = 'FROM dcod_bookmark b1, ';
            $where_1_str = 'WHERE bc1.bookmark_id = b1.bookmark_id AND '; //all permutations of bc1 = bc2, etc.
            $where_2_str = '';

            if($size == 1) {
                $from_str .= 'dcod_bookmark_category bc1 ';
                $where_1_str .= 'bc1.category_id = '.$catIds[0];
            } else {
                for($i=0; $i<$size; $i++) {
                    // concatenate to from clause
                    $from_str .= 'dcod_bookmark_category bc'.($i+1);
                    if($i != ($size - 1))
                        $from_str .= ', ';
                    else
                        $from_str .= ' ';

                    // concatenate to where clause
                    if($i > 1)
                        $where_1_str .= 'AND ';
                    if($i != 0)
                        $where_1_str .= 'bc1.bookmark_id = bc'.($i+1).'.bookmark_id ';
                    $where_2_str .= 'AND bc'.($i+1).'.category_id = '.$catIds[$i].' ';
                }
            }
            //get the bookmark id's
            $b_id_query = $select_str.$from_str.$where_1_str.$where_2_str.' ORDER BY b1.name';
            $b_id_result = $db->query($b_id_query) or die($db->error);

            //Build link list
            //determine where the description will be
            switch($desc_loc) {
                case 'float_description':
                	while($b_id_array = $b_id_result->fetch_array()) {
                        //determine where the link will open
                        $target_str = getTargetString($open_pref, $b_id_array['url']);

                        //build the link
                        if(strlen($b_id_array['url'])>0)
                        $outstring.='<a href='.$_SESSION['dcod_sys_root'].'/redirect.php?id='.$b_id_array['id3'].'&urlencode='.$b_id_array['url'].''.$target_str.
                                    'class="descText">'.$b_id_array['name'].'<div style="position: relative;"><span class="float_description"><strong>'.$b_id_array['name'].'</strong><br/><i>'.$b_id_array['description'].'</i></span></div></a>';
                        else $outstring.='<b>'.$b_id_array['name'].'</b><br/>'.$b_id_array['description'].'<br/><br/>';
                    }
                    break;
                case 'under_description':
                	while($b_id_array = $b_id_result->fetch_array()) {
                        //determine where the link will open
                        $target_str = getTargetString($open_pref, $b_id_array['url']);

                        //build the link
                        if(strlen($b_id_array['url'])>0)
                        $outstring.='<a href='.$_SESSION['dcod_sys_root'].'/redirect.php?id='.$b_id_array['id3'].'&urlencode='.$b_id_array['url'].''.$target_str.'>'.$b_id_array['name'].
                                    '</a><br/>';
                        else $outstring.='<b>'.$b_id_array['name'].'</b><br/>';
                        if(strlen($b_id_array['description'])>0)
                            $outstring.=$b_id_array['description'].'<br/><br/>';
                        else $outstring.="<br/>";
                    }
                    break;
                case 'no_description':
                	while($b_id_array = $b_id_result->fetch_array()) {
                        //determine where the link will open
                        $target_str = getTargetString($open_pref, $b_id_array['url']);

                        //build the link
                        if(strlen($b_id_array['url'])>0)
                        $outstring.='<a href='.$_SESSION['dcod_sys_root'].'/redirect.php?id='.$b_id_array['id3'].'&urlencode='.$b_id_array['url'].''.$target_str.'>'.$b_id_array['name'].'</a><br/>';
                        else $outstring.='<b>'.$b_id_array['name'].'</b><br/>';
                    }
                    break;
                case 'link_list':
                	while($b_id_array = $b_id_result->fetch_array()) {
                        //determine where the link will open
                        $target_str = getTargetString($open_pref, $b_id_array['url']);

                        //build the link
                        if(strlen($b_id_array['url'])>0)
                        $outstring.='<li><a href='.$_SESSION['dcod_sys_root'].'/redirect.php?id='.$b_id_array['id3'].'&urlencode='.$b_id_array['url'].''.$target_str.'>'.$b_id_array['name'].'</a></li>';
                        else $outstring.='<b>'.$b_id_array['name'].'</b><br/>'.$b_id_array['description'].'<br/><br/>';
                    }
                    break;
                case 'powered_by':
                	while($b_id_array = $b_id_result->fetch_array()) {
                        $target_str = getTargetString($open_pref, $b_id_array['url']);
                    }

            }
            if(isset($email_boolean)&&$email_boolean==='email'){
            if($owner_ids != ""&& $owner_ids != null)
                  $outstring.="<img src='".$_SESSION['dcod_sys_root']."/images/email.png' /> <a href=\"javascript:(function(){var%20a=window,b=document,c=encodeURIComponent,d=a.open('".$_SESSION['dcod_sys_domain'].$_SESSION['dcod_sys_root']."/email.php?user_ids=".$owner_ids."&cat=".$catString."','bkmk_popup','left='+((a.screenX||a.screenLeft)+10)+',top='+((a.screenY||a.screenTop)+10)+',height=480px,width=430px,resizable=1,alwaysRaised=1');a.setTimeout(function(){d.focus()},300)})();\">Submit a question or suggest a link.</a><br /><br />";
            else $outstring.="<img src='".$_SESSION['dcod_sys_root']."/images/email.png' /> <a href=\"javascript:(function(){var%20a=window,b=document,c=encodeURIComponent,d=a.open('".$_SESSION['dcod_sys_domain'].$_SESSION['dcod_sys_root']."/email.php?cat=".$catString."','bkmk_popup','left='+((a.screenX||a.screenLeft)+10)+',top='+((a.screenY||a.screenTop)+10)+',height=480px,width=430px,resizable=1,alwaysRaised=1');a.setTimeout(function(){d.focus()},300)})();\">Submit a question or suggest a link.</a><br /><br />";
        }
            if(isset($powered_by)&&$powered_by==='powered_by'){
            if($owner_ids != ""&& $owner_ids != null)
                $outstring.="<img src='".$_SESSION['dcod_sys_root']."/images/dcod_powered-by.png' />";
            }
    }
        return $outstring;
    }

    function getTargetString($target_type, $url='' /*only necessary for window case */) {
        //determine where the link will open
        $target_str = '';
        switch($target_type) {
            case 'tab':
                $target_str = ' target="_blank" style="target-name:_blank; target-new:tab;" ';
                break;
            case 'window':
                $target_str = " onClick=\"popup = window.open('$url', 'PopupPage', 'height=700,width=1000,scrollbars=yes,resizable=yes');
                                return false;\"
                            target=\"_blank\"";
                break;
            case 'none':
                $target_str = ' style="target-name:current; target-new:none;" ';
                break;
        }
        return $target_str;
    }
?>
