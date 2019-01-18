<?php
/* File Name: link_builder.php
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
<?php include 'class/TopMenu.php';?>
<html>
    <head>
        <title>Link Builder | <?php echo $_SESSION['dcod_sys_short_name']," | ",$_SESSION['dcod_sys_name']; ?></title>
        <link type="text/css" href="css/main.css" rel="stylesheet" />
    	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js'></script>
    	<script type='text/javascript' src='https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.10/jquery-ui.min.js'></script>
        <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/ui-darkness/jquery-ui.css" rel="stylesheet" />
        <script type="text/javascript" src="js/jquery.multiselect.min.js"></script>
        <link type="text/css" href="css/jquery.multiselect.css" rel="stylesheet" />
        <script type="text/javascript" src="js/jquery.multiselect.filter.min.js"></script>
        <link type="text/css" href="css/jquery.multiselect.filter.css" />
        <!-- jNotify CSS -->
        <link rel="stylesheet" href="newjs/jnotify/jquery/jNotify.jquery.css" type="text/css" />
        <!-- jNotify and jQuery files -->
        <script type="text/javascript" src="newjs/jnotify/jquery/jquery.js"></script>
        <script type="text/javascript" src="newjs/jnotify/jquery/jNotify.jquery.js"></script>
        <script type="text/javascript">
        var selectedCats;
            function update_link() {
                var cat_id;
                var description_float = false;
                var description = true;
                var tab = true;
                var window = false;
                var email = 'email';
                var powered_by = 'powered_by';
                var outString = "";
                    outString+="<";
                    outString+="?php echo ";
                    if (document.getElementById('email').style.backgroundColor == 'rgb(13, 13, 204)' ||
                        document.getElementById('email').style.backgroundColor == '#0d0dcc')
                        {
                            email='email';
                        }
                        else email='no';
                    if (document.getElementById('powered_by').style.backgroundColor == 'rgb(13, 13, 204)' ||
                        document.getElementById('powered_by').style.backgroundColor == '#0d0dcc')
                        {
                            powered_by='powered_by';
                        }
                        else powered_by='no';
                    if (document.getElementById('flot').style.backgroundColor == 'rgb(13, 13, 204)' ||
                        document.getElementById('flot').style.backgroundColor == '#0d0dcc')
                        description_float = true;
                     
                    if (document.getElementById('noD').style.backgroundColor == 'rgb(13, 13, 204)' ||
                        document.getElementById('noD').style.backgroundColor == '#0d0dcc')
                        {
                            description = false;
                            description_float=false;
                        }
                    if (document.getElementById('under').style.backgroundColor=='rgb(13,13,204' ||
                        document.getElementById('under').style.backgroundColor=='#0d0dcc')
                        {
                            description=true;
                            description_float=false;
                        }
                    if (document.getElementById('newTab').style.backgroundColor == 'rgb(13, 13, 204)' ||
                        document.getElementById('newTab').style.backgroundColor == '#0d0dcc')
                        {
                            tab = true;
                            window=false;
                        }
                    else if (document.getElementById('newWindow').style.backgroundColor == 'rgb(13, 13, 204)' ||
                             document.getElementById('newWindow').style.backgroundColor == '#0d0dcc') {
                        window = true;
                        tab = false;

                    }
                    else if (document.getElementById('sameWindow').style.backgroundColor == 'rgb(13, 13, 204)' ||
                             document.getElementById('sameWindow').style.backgroundColor == '#0d0dcc') {
                        window = false;
                        tab = false;

                    }

                   selectedCats = new Array();
                    var x=0;
                    for (var i = 0; i < category.options.length; i++) // The category array is pitching
                        if (category.options[i].selected){
                            selectedCats[x]=category.options[i].value;// The selectedCats array is catching
                            x++}
                    cat_id=selectedCats;



                    // Start string
                    outString += "print_bookmark('" + cat_id + "'";

                   
                    // Create description
                    
                    if (description_float)
                        outString += ", 'float_description'";
                    else if (!description)
                        outString += ", 'no_description'";
                    else
                        outString += ", 'under_description'";

                    //create opening style
                    if (tab && !window)
                        outString += ", 'tab'";
                    else if (!tab && window)
                        outString += ", 'window'";
                    else
                        outString += ", 'none'";
                    //create email link
                    outString +=", '"+email+"'";
                    outString +=", '"+powered_by+"'";
                    // End string
                    outString += ");";
                    outString += " ?>";

                    // Output string
                    document.getElementById('link').value = outString;
                    grab_assoc_bmarks();
                }

            function change_color(id) {
                if (id == 'flot') {
                    document.getElementById('under').style.backgroundColor = '#666666';
                    document.getElementById('noD').style.backgroundColor =  '#666666';
                    document.getElementById('flot').style.backgroundColor='#0d0dcc';
                                                                                
                }
                if (id == 'under') {
                    document.getElementById('flot').style.backgroundColor ='#666666';
                    document.getElementById('noD').style.backgroundColor ='#666666';
                    document.getElementById('under').style.backgroundColor='#0d0dcc';
                }
                if(id == 'noD')
                    {
                    document.getElementById('under').style.backgroundColor = '#666666';
                    document.getElementById('flot').style.backgroundColor ='#666666';
                    document.getElementById('noD').style.backgroundColor='#0d0dcc';
                    }
                if (id == 'newTab') {
                    document.getElementById('newWindow').style.backgroundColor = '#666666';
                    document.getElementById('sameWindow').style.backgroundColor ='#666666';
                    document.getElementById('newTab').style.backgroundColor = '#0d0dcc';
                }
                if (id == 'newWindow') {
                    document.getElementById('newTab').style.backgroundColor = '#666666';
                    document.getElementById('sameWindow').style.backgroundColor ='#666666';
                    document.getElementById('newWindow').style.backgroundColor = '#0d0dcc';
                }
                if (id == 'sameWindow') {
                    document.getElementById('newWindow').style.backgroundColor = '#666666';
                    document.getElementById('newTab').style.backgroundColor ='#666666';
                    document.getElementById('sameWindow').style.backgroundColor ='#0d0dcc';
                }
                if (id == 'email') {
                    if(document.getElementById('email').style.backgroundColor == 'rgb(102, 102, 102)'){
                        document.getElementById('email').style.backgroundColor = '#0d0dcc';
                        document.getElementById('email').value='Yes';}
                    else if(document.getElementById('email').style.backgroundColor == 'rgb(13, 13, 204)'){
                        document.getElementById('email').style.backgroundColor = '#666666';
                        document.getElementById('email').value='No';}
                }
                if (id == 'powered_by') {
                    if(document.getElementById('powered_by').style.backgroundColor == 'rgb(102, 102, 102)'){
                        document.getElementById('powered_by').style.backgroundColor = '#0d0dcc';
                        document.getElementById('powered_by').value='Yes';}
                    else if(document.getElementById('powered_by').style.backgroundColor == 'rgb(13, 13, 204)'){
                        document.getElementById('powered_by').style.backgroundColor = '#666666';
                        document.getElementById('powered_by').value='No';}
                }

            }
        // Look at me and my fancy function names
        function grab_assoc_bmarks()
        {
                    $.ajax({
                    type: 'POST',
                    url:  'link_builder_do.php',
                    data: {
                        cats: selectedCats+""//Add a blank string so it doesn't error if there is no selected category
                    },
                    success: function(data) {                        
                        document.getElementById("assocbmark").innerHTML=data;
                    }
                });
        }
        // :)
        function changeSize(size)
        {
            document.getElementById('category').size=size;
        }
        </script>

    </head>
    <body>
        <div id="page-wrapper">
            <?php echo new TopMenu();?>
            <?php include 'sidebar.php'; ?>
            <div id="content">
            <div id="left">
                <div class="box">
                    <h4 class="boxTitle">Link Builder</h4>
                    <br />
                    <?php
                    $categorySQL = "SELECT name,category_id
                                   FROM dcod_category
                                   ORDER BY name";
                    $categoryQuery = $db->query($categorySQL);
                    ?>

                    <b>Select the categories of links to be displayed</b><br />
                    <select id="category" size="3"name="category" multiple="multiple" style="width:370px">
                        <?php //Prints out the categories
                    	$size=$categoryQuery->num_rows;
                        if(!($size<20))
                                $size=20;
                        echo '<script type="text/javascript">';
                        echo 'changeSize('.($size).')';
                        echo '</script>';
                        while($categoryResults=$categoryQuery->fetch_array())
                            echo "<option id='catList' onClick='update_link()'onChange='update_link()'value=".$categoryResults['category_id'].">".$categoryResults['name']."</option>";
                        ?>

                    </select>

                    <br /><br /><br />

                    <b>How to open up the links</b><br />
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <input type="button" name="newTab" id="newTab" value="New Tab"
                                               style="background-color: #0d0dcc;color:white;"
                                               onclick="change_color('newTab'); update_link();">
                                    </td>
                                    <td>
                                        <input type="button" name="newWindow" id="newWindow" value="New Window"
                                               style="background-color: #666666; color: white"
                                               onclick="change_color('newWindow'); update_link();">
                                    </td>
                                    <td>
                                        <input type="button" name="sameWindow" id="sameWindow" value="Same Window"
                                               style="background-color: #666666; color: white"
                                               onclick="change_color('sameWindow'); update_link();">
                                    </td>
                                </tr>

                            </table>
                        </td>
                    </tr>
                    <b>Link description options</b><br />
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <input type="button" name="flot" id="flot" value="Float"
                                               style="background-color: #0d0dcc; color: white"
                                               onclick="change_color('flot'); update_link('f');">
                                    </td>
                                    <td>
                                        <input type="button" name="under" id="under" value="Underneath"
                                               style="background-color: #666666; color: white"
                                               onclick="change_color('under'); update_link('u');">
                                    </td>
                                    <td>
                                        <input type="button" name="noD" id="noD" value="No Description"
                                               style="background-color: #666666; color: white"
                                               onclick="change_color('noD'); update_link('u');">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <b>Include Link to Email Contact?</b><br />
                    <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <input type="button" name="email" id="email" value="Yes"
                                               style="background-color: #0d0dcc;color:white;"
                                               onclick="change_color('email'); update_link();">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <b>Include Powered by DCOD</b>
                     <tr>
                        <td>
                            <table>
                                <tr>
                                    <td>
                                        <input type="button" name="powered_by" id="powered_by" value="Yes"
                                               style="background-color: #0d0dcc;color:white;"
                                               onclick="change_color('powered_by'); update_link();">
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <br/><br/>
                    <b>Link</b><br />
                    <input type="text" id="link" name="link" style="width: 470px" value="">
                </div>
                <div class="box"  style="margin-right:.5em;clear:both;">
                <h4 class="boxtitle" align="center">All Associated Content</h4>
                        <span id="assocbmark"></span>
                </div>
            </div>
            <div id="right" style="float:left">
                <div class="box" style="max-width: 250px; width: 100%; padding: 0 .5em .5em .5em">
                    <h4 class="boxTitle center">Instructions</h4>
                    <p id="list">
                        To use this page, first select the desired category or categories to pull links from.
                        (Selecting multiple categories will get results that are in ALL selected categories.)<br /><br />

                        Next choose how to open up these links.  Following that, choose how you want
                        the link descriptions to be displayed. Finally, choose whether or not to display
                        the contact's email link.<br /><br />

                        Next, copy and paste the text in the box 'Link' under 'HTML link' into your
                        HTML source code where you want the content to appear.<br /><br />

                        <strong>Make sure you have this tag in your Web page:<br /></strong>
                        <input style='width: 100%' value="&#60;&#63;php include $_SERVER['DOCUMENT_ROOT'].'<?php echo $_SESSION['dcod_sys_root']; ?>/link_connector.php'; ?&#62;"><br /><br />
                        <strong>NOTE: Your config.ini file MUST be set correctly for this feature to work!</strong><br />
                        Your config.ini file indicates that "<?php echo $_SESSION['dcod_sys_root']; ?>" is your directory for <?php echo $_SESSION['dcod_sys_short_name']; ?>.
                        If this is incorrect, please change your config.ini settings.<br /><br />
                        <i>If you are having issues with the styling of your page, try putting this code block in the body of your page.</i>
                    </p>
                </div>
                <div id="push"></div>
            </div>
        </div>
        </div>
        <?php include 'footer.php'; ?>
    </body>
</html>