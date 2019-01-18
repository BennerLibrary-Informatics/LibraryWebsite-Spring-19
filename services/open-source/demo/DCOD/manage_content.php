<?php
/* File Name: manage_content.php
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
<?php include 'class/User.php'; ?>
<?php 
    if(!isset($_REQUEST['bookmarklet']))
    {
        include 'check_session.php';
        include 'class/TopMenu.php';
    }
    else
        include 'class/config.php';
?>
<?php include 'class/Bookmark.php'; ?>
<?php

    //Check to see if a name and a URL have been passed to this page
    $url = '';
    $name = '';
    if (isset($_GET['b_url']))
        $url = $_GET['b_url'];
    if (isset($_GET['b_name']))
        $name = $_GET['b_name'];
    if(isset($_GET['b_url']))
    {
        $sql=sprintf('SELECT bc.category_id,bc.bookmark_id,b.bookmark_id,c.category_id,c.user_id idemp
                    FROM dcod_bookmark b,dcod_bookmark_category bc,dcod_category c
                    WHERE b.url="%s" 
                            AND bc.bookmark_id=b.bookmark_id
                            AND bc.category_id=c.category_id',
                $db->real_escape_string($_GET['b_url']));
    }
    if(isset($_GET['b_id']))
    {
        $sql=sprintf('SELECT bc.category_id,bc.bookmark_id,b.bookmark_id,c.category_id,c.user_id idemp
                  FROM dcod_bookmark b,dcod_bookmark_category bc,dcod_category c
                  WHERE b.bookmark_id="%s" 
                        AND bc.bookmark_id=b.bookmark_id
                        AND bc.category_id=c.category_id',
        		$db->real_escape_string($_GET['b_id']));
    }
    
    //If there is a bookmark id in the url, Edit, otherwise Add
    if(isset($_GET['b_id']))
    {
        $mode="Edit";
        $_SESSION['mode']="Edit";
    }
    else
    {
        $mode="Add";
        $_SESSION['mode']="Add";
    }
    //Check to see if a name and a URL have been passed to this page
    $url = '';
    $name = '';
    if (isset($_GET['b_url']))
        $url = $_GET['b_url'];
    if (isset($_GET['b_name']))
        $name = $_GET['b_name'];

    //If we are in edit mode, get all of the data about the bookmark
    if($mode == "Edit"||$mode=='View')
    {
        $bookmark = new Bookmark($db, $_GET['b_id']);

        //Get the bookmark's tags
        $tags_array = $bookmark->getTags();
        $tag_string = "";
        for($i=0; $i<count($tags_array) ;$i++)
        {
            if($i != 0)
                $tag_string.= ' ';
            $tag_string .= $tags_array[$i]['name'];
        }        
        //Get the bookmark's categories
        $cats_array = $bookmark->getCategories();
        $onload_str = "onLoad=\"";
        for($i=0; $i<count($cats_array) ;$i++)
        {
            $onload_str .= "addSelectedCategory(".$cats_array[$i]['category_id'].",'".$cats_array[$i]['name']."');";
        }
        $onload_str .= "\"";
    }
    //Get all bookmark categories for the dropdown list
    $categoryQuery = 'SELECT category_id, name
                      FROM dcod_category
                      ORDER BY name';
    $categoryResult = $db->query($categoryQuery);
    $categoryString = '<option value=0 selected> </option>';
    while($categoryArray = $categoryResult->fetch_array())
    {
        $categoryString .= '<option name="'.$categoryArray['name'].'"
                                    value='.$categoryArray['category_id'].'
                                    id='.$categoryArray['category_id'].'>'.$categoryArray['name'].'</option>';
    }
?>
<html>
    <head>
        <title>Manage Content | <?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>
        <link type='text/css' rel='stylesheet' href='css/main.css' />
    	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.js'></script>
       	<script type='text/javascript' src='js/bridge.js'></script>
        <script type='text/javascript' src='js/spinners.js'></script>
        <!-- jNotify CSS -->
        <link rel="stylesheet" href="newjs/jnotify/jquery/jNotify.jquery.css" type="text/css" />
        <!-- jNotify and jQuery files -->
        <script type="text/javascript" src="newjs/jnotify/jquery/jquery.js"></script>
        <script type="text/javascript" src="newjs/jnotify/jquery/jNotify.jquery.js"></script>
    </head>
    <body <?php if($mode == "Edit") echo $onload_str; ?>>
    <div id="page-wrapper">
            <?php if(!isset($_REQUEST['bookmarklet'])) echo new TopMenu(); ?>
            <?php if(!isset($_REQUEST['bookmarklet'])) include 'sidebar.php'; ?>
        <div id="content">
        <div class="box" style="margin-right:.5em;">
            <h4 class="boxtitle center"><?php echo $mode;?> Content</h4>
            <?php if($mode=='View')
                {
            ?>
                    <h3>You do not own the category of this content and thus can not edit</h3>
            <?php
                }
            ?>
            <form name="manage_content" action="manage_content_do.php" method="post">
                <input name="mode" type="hidden" value="<?php echo $mode; ?>" />
                <?php
                    if($mode == "Edit"|| $mode=='View')
                    {
                        echo "<input name=\"b_id\" type=\"hidden\" value=\"".$bookmark->getId()."\">";
                    }
                    if($mode == "Edit")
                    {
                        echo "<center><h3 class='center' valign='top' style='max-width: 400px'>",$bookmark->getName(),"</h3></center>";
                    }
                ?>
                <table cellpadding="7">
                    <tr>  
                        <td valign="top">
                            Name <span style="color: #CC0000">*</span><br/>
                            <input name="bookmark_name" <?php if($mode=='View')echo 'disabled="disabled"'?> id="bookmark_name" type="text" size="35" value="<?php if($mode == "Edit"||$mode=='View') echo $bookmark->getName(); echo $name; ?>" />
                        </td>
                        <td <?php if($mode=='View')echo 'style="display:none;"';?>>
                            Category<br/>
                            <select name="bookmark_categories" id="bookmark_categories" <?php if($mode=='View')echo 'style="display:none;"';?>onchange="addSelectedCategory('bookmark_categories')">
                                <?php echo $categoryString; ?>
                            </select>
                        </td>
                      
                    </tr>
                    <tr>
                        <td>
                            Location (URL) <br/>
                            <input name="bookmark_url" <?php if($mode=='View')echo 'disabled="disabled"';?>id="bookmark_url" onkeyup="check_url()" type="text" size="45" placeholder="Ex: http://www.somewhere.com/" value="<?php if($mode == "Edit"|| $mode=='View'){ echo $bookmark->getUrl(); echo $url;}else echo $url; ?>" /><br />
                            <span id="url_loader" style="display: none"><img src="images/ajax-loader.gif" alt="loading..." border=0 ></span>
                            <span id="url_message" style="display: none"><b><img src="images/alert.gif" alt="alert" border=0 >&nbsp;URL appears to not exist!</b></span>
                        </td>
                        <td rowspan="3" valign="top">
                            <input name="row_count" id="row_count" type="hidden" value=0 />
                            <table id="selected_cat_tbl">
                                <tr><th colspan="2">Selected Categories</th></tr>                                
                            </table>
                            <span id="bookmarkExist"></span>
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Tags <br/>
                            <input name="bookmark_tags" <?php if($mode=='View')echo 'disabled="disabled"'?>id="bookmark_tags" type="text" size="45" <?php if($mode == "Edit"||$mode=='View') echo "value='".$tag_string."' "; ?> />
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Description<br/>
                            <textarea name="bookmark_description" <?php if($mode=='View')echo 'disabled="disabled"'?>id="bookmark_description" rows="5" cols="34"><?php if($mode == "Edit"||$mode=='View') echo $bookmark->getDescription(); ?></textarea>
                        </td>
                    </tr>
                    <?php if($mode!='View'){ ?>
                    <tr>
                        <td colspan="2" class="center">
                            <input type="hidden" name="invalid" id="invalid" value="0" />
                            <?php if(isset($_SERVER['HTTP_REFERER']))
                            	echo "<input type='hidden' name='referrer' value='{$_SERVER['HTTP_REFERER']}' />";
                			?>
                            <?php if(isset($_REQUEST['selected'])) echo "<input type='hidden' name='selected' value='",$_REQUEST['selected'],"' />"; ?>
                            <?php if(isset($_REQUEST['bookmarklet'])) echo "<input type='hidden' name='bookmarklet' value='1' />"; ?>
                            <input type="submit" value="<?php echo ($mode == "Edit") ? "Update" : $mode; ?>" onClick="return validateForm();" />
                            <?php if($mode=='Add'){ ?>
                                <input type="reset" name="clear" value="Clear" />
                            <?php } else { ?>
                                <input type="submit" name="delete" value="Delete" onClick="return confirm('Do you really want to delete this item?');" />
                            <?php } ?>
                        </td>
                    </tr>
                    <?php }?>
                </table>
            </form>
            <span style="color: #CC0000">* Required Fields</span>
        </div>
    <?php
        if(!isset($_REQUEST['bookmarklet']))
        {
    ?>
        <div class="box" style="width:300px;">
            <h4 class="boxtitle center">Instructions</h4>
            Add a Name, Location, and Description for your bookmark.  Tags may be any single word.  Each subsequent tag must
            be separated from the previous tag by a space (i.e.:"Tag1 Tag2 Tag3").
            <ul><li>Tags are descriptors that will only be used to search for content.</li></ul>
            You may select multiple categories from the drop-down list.
            <ul>
                <li>Category is used for adding grouped content to a specific web page and assigns ownership.</li>
                <li>If you want to add a category that does not exist follow the link below.</li>
            </ul>
            <?php if($_SESSION['user']->getGroupId()=='admin' && $_SESSION['view'] == "admin") { ?>
                    <a href="edit_categories.php" target="_blank">Add another Category</a>
            <?php } else { ?>
                    <a href="javascript:(function(){var%20a=window,b=document,c=encodeURIComponent,d=a.open('<?php echo $_SESSION['dcod_sys_domain'].$_SESSION['dcod_sys_root']; ?>/email.php?type=category','bkmk_popup','left='+((a.screenX||a.screenLeft)+10)+',top='+((a.screenY||a.screenTop)+10)+',height=480px,width=430px,resizable=1,alwaysRaised=1');a.setTimeout(function(){d.focus()},300)})();">Suggest another Category</a>
            <?php } ?>
                    <br /><br />
            <?php
                if($mode == "Edit"||$mode=='View')
                    echo '<i style="color: #CC0000">Any changes to tags or categories are not final until the "Update" button is pressed.</i><br />'
            ;?>
            <hr>
            Drag and drop the following link to your bookmark toolbar to instantly bookmark any website you are visiting.<br /><br />
            <a href="javascript:(function(){var%20a=window,b=document,c=encodeURIComponent,d=a.open('<?php echo $_SESSION['dcod_sys_domain'].$_SESSION['dcod_sys_root']; ?>/manage_content.php?bookmarklet&b_url='+c(b.location)+'&b_name='+c(b.title),'bkmk_popup','left='+((a.screenX||a.screenLeft)+10)+',top='+((a.screenY||a.screenTop)+10)+',height=480px,width=550px,resizable=1,alwaysRaised=1');a.setTimeout(function(){d.focus()},300)})();">
                Bookmark for DCOD
            </a><br/><br />
            <i>This feature supports Google Chrome and Firefox only.</i>
        </div>
        <div id="push"></div>
    </div>
    </div>
    <?php include 'footer.php'; ?>
    <?php
        }
        else
            echo "</div>";
    ?>
    </body>
</html>
<script type="text/javascript">
    var urlExist;
    var nameExist;
    var b_id;
    //checks to see if the url is in the database
    function check_url() {
        $('#url_loader').show();
        var url = $('#bookmark_url').val();

        $.ajax({
            type: 'POST',
            url: 'url_exists.php',
            data: {
                url: url
            },
            success: function(data) {
                $('#url_loader').hide();
                if (data == 'exists')
                    $('#url_message').fadeOut(500);
                else
                    $('#url_message').fadeIn(500);
            }
        });
    }
    function addSelectedCategory(select_id) {
        var select = document.getElementById(select_id);
        if (isNaN(select_id)) {
            var cat_id = select.options[select.selectedIndex].value;
            var cat_name = select.options[select.selectedIndex].text;
        } else {
            var cat_id = select.value;
            var cat_name = select.text;
        }
        if (cat_id != 0){
            //cat_id, cat_name
            //Add the new row to the table if it doesn't already exist
            tableID = "selected_cat_tbl";
            var table = document.getElementById(tableID);
            var rowCount = table.rows.length;

            var addNewRow = 1;
            if(rowCount > 1) {
                for(var i=1; i<rowCount; i++) {
                    var row = table.rows[i];
                    var row_id = row.cells[2].childNodes[0].value;
                    if(row_id == cat_id) {
                        addNewRow = 0;
                        alert("You cannot add the same Category twice.");
                        break;
                    }
                }
            }

            if(addNewRow == 1) 
                addRow(tableID, cat_id, cat_name);
        }

        document.getElementById(select_id).selectedIndex = 0;
    }
    function addRow(tableID, cat_id, cat_name) {
        
        var table = document.getElementById(tableID);

        var rowCount = table.rows.length;
        var row = table.insertRow(rowCount);

        document.getElementById("row_count").value = rowCount + 1;

        var cell1 = row.insertCell(0);
        cell1.innerHTML = cat_name;

        var cell2 = row.insertCell(1);
        <?php
            if($mode!='View')
            {
        ?>
                var deleteButton = document.createElement("input");
                deleteButton.type = "button";
                deleteButton.value = "x";
                deleteButton.onclick = function deleteSelectedCategory() {
                                            deleteRow(tableID, cat_id);
                                    };
                cell2.appendChild(deleteButton);
        <?php
            }
        ?>

        var cell3 = row.insertCell(2);
        var row_id = document.createElement("input");
        row_id.type = "hidden";
        row_id.name = "row_id_"+rowCount;
        row_id.value = cat_id;
        cell3.appendChild(row_id);
    }
    function deleteRow(tableID, cat_id) {       
        //Remove the row
        var table = document.getElementById(tableID);
        var rowCount = table.rows.length;

        document.getElementById("row_count").value = rowCount - 1;

        for(var i=1; i<rowCount; i++) {
            var row = table.rows[i];
            var row_id = row.cells[2].childNodes[0].value;
            if(row_id == cat_id) {
                table.deleteRow(i);
                break;
            }
        }
        //Rename last cell in each row with the new row number
        for(var i=1; i<rowCount; i++) {
            var row = table.rows[i];
            row.cells[2].childNodes[0].name = "row_id_" + i;
        }
    }
    function validateForm() {
        check_urlExist();
        var outString='<a href="manage_content.php?b_id='+b_id+'">Link to Existing Bookmark</a>';
        if(document.getElementById("bookmark_name").value == "") {
            alert("A bookmark name is required.");
            return false;
        } else if (!urlExist) {
            document.getElementById('bookmarkExist').innerHTML=outString;            
            alert("There is already a bookmark that exists with that URL.");
            return false;
        } else if (!nameExist) {
            document.getElementById('bookmarkExist').innerHTML=outString;
            alert("There is already a bookmark that exists with that name.");
            return false;
        } else if(url_validate(document.getElementById("bookmark_url").value) == false) {
            alert("Please enter a valid URL (e.g. \"http://www.url.com/\")");
            return false;        
        } else if($('#url_message').is(':visible')) {
            var accepted = confirm('The URL appears to be a bad link, are you sure you still want to create this bookmark?');
            if(accepted)
                document.getElementById("invalid").value = "1";
            return accepted;
        } else if($('#bookmark_url').val() === "") {
            return confirm('The URL is blank - do you want to continue?');
        }
        return true;
    }
    function check_urlExist() {
        $.ajax({
            type: 'POST',
            url:  'manage_content_do.php',
            data: {
            url:  $('#bookmark_url').val(),
            name: $('#bookmark_name').val(),
            operation: 'check'
            },
            success: function(data) {
                var array=data.split(" ");
                if(array[1]>0){
                    nameExist=false;
                    b_id=array[4];
                } else nameExist=true;

                if(array[3]>0){
                    urlExist=false;
                    b_id=array[4];
                } else urlExist=true;
            },
            async: false
        });
    }
    function url_validate(url) {
    if(url.length==0)
        return true;
        var regUrl = /^(https?|ftp):\/\/.*$/
        if(regUrl.test(url) == false)
            return false;
        else
            return true;
    }
</script>