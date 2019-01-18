<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><!-- InstanceBegin template="/Templates/bl_help.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
	<!-- InstanceBeginEditable name="doctitle" -->
	<!-- Title example: "SUBJECT - Benner Library Online" -->
    <title>BDW - Benner Library Online</title>
	<meta http-equiv='Content-Type' content='text/html; charset=iso-8859-1' />
	<!-- InstanceEndEditable -->
	<link type='text/css' rel='stylesheet' href='/scripts/LibraryStyle2007.css' media='screen'/>
    <link type='text/css' rel='stylesheet' href='/scripts/print.css' media='print' />
    <!-- InstanceBeginEditable name="doc-specific_code" -->
    
	<!-- InstanceEndEditable -->
</head>

<body>

<div id='page_wrapper'> 
		<div id='header_new'>
         
            <div class='banner_image_new'>
                <a href="/"><img style="margin-left:1%; margin-top:1%" src="/pix/bl_logo/green.png" alt="Benner Library" /></a>

                    <div style="float:right; margin-right:1%"><h5 style="margin-top:0; margin-bottom:0;">Summon Search</h5>
                    All Library Resources  <a href="/summon/about.php"><img src="/pix/dbinfo.png" /></a>
					<script type="text/javascript" id="s3382947025e30130f8f1683935c24ab0" src="https://olivet.summon.serialssolutions.com/widgets/box.js"></script><script type="text/javascript">new SummonCustomSearchBox({"id":"#s3382947025e30130f8f1683935c24ab0","params":{},"colors":{},"searchbutton_text":"Go","advanced_text":"Advanced Search","advanced":"true","suggest":"true","popup":"true"})</script>
                    </div>
            </div>
            
            <div class='top_nav'>
            	<a href='/'>Home</a>
                <a href='/webguides.html'>Databases & Guides</a> 
                <a href='http://vufind.carli.illinois.edu/vf-onu/Search/Advanced'>Library Catalog</a> 
                <a href='https://i-share.carli.illinois.edu/all/vf/'>I-Share</a>
                <a href='https://vufind.carli.illinois.edu/vf-onu/MyResearch/Home'>Library Account</a> 
				<a href='/ebookcol.php'>eBooks</a>
                <a href='http://library.olivet.edu/pubserv/ref/ask.html'>Ask&nbsp;a&nbsp;Librarian</a>
            </div>
		</div>
	
<div id='content_wrapper'>     	
  <div id='left_col'>
	<div class='offsetleft offsetright'>
        <div id="left_menu">
            <h3 style="margin-top:1em">Library Categories</h3>
            <a href="/research.html"><img src="/pix/research_brick.gif" /> Find Books &amp; Articles</a>
            <a href="/services.html"><img src="/pix/services_brick.gif" /> Services</a>
            <a href="/sgcs_services.html"><img src="/pix/sgcs_services_brick.gif" /> Grad &amp; Cont Studies</a>
            <a style="color:#5b6f4c" href="/help.html"><img src="/pix/help_brick.gif" /> Help</a>
            <a href="/about.html"><img src="/pix/about_brick.gif" /> About</a>
            <a href="/campus.html"><img src="/pix/campus_brick.gif" /> Campus</a>
        </div>
		<!-- InstanceBeginEditable name="left_nav" -->
		  	
            <!-- Related Links (if needed) -->
            <h3>Related Links</h3>
			<div class="ltfl_bookdisplay_widget" id="ltfl_widget_527ac4b9c1bfe5"></div>
            
            
		<!-- InstanceEndEditable -->
		<br />
		<br />		
    </div>
  </div>
  <div id='center_col'>
		
    <div class='offsetlarge'>
		<!-- InstanceBeginEditable name="main_content" -->
        
        
	        <?php
/** File Name: index.php
  * OpenSource Software Name: OpenURL InterLibrary Loan Form
  *
  * Developer: Ann Johnston
  * Project Manager: Prof Ann Johnston,
  *     Olivet Nazarene University
  * If you use this code, let the project manager know
  * informatics@olivet.edu. Thank you.
  * Copyright (C) 2013 by Olivet Nazarene University
  *
  * This file is part of OpenURL ILL Form.
  *
  * OpenURL ILL Form is free software: you can redistribute it and/or modify
  * it under the terms of the GNU General Public License as published
  * by the Free Software Foundation, either version 3 of the License,
  * or (at your option) any later version.
  *
  * This program is distributed in the hope that it will be useful,
  * but WITHOUT ANY WARRANTY; without even the implied warranty of
  * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
  * GNU General Public License for more details.
  *
  * You have received a copy of the GNU General Public License along
  * with this program in the COPYING.txt file.
  * Also see <http://www.gnu.org/licenses/>.
  */
?>

<h2 align="center">Book Display Widget Request Form</h2>
<div class="FormTheme1">
<form name="illrequest" action="ill_request.php" method="post">
<h3 style="margin-top:0">Requestor Information</h3>
<table>
    <tr>
        <td>*</td>
        <td style="width:17em"><b>First Name</b></td>
        <td><input style="width:20em" type="text" name="first_name" /></td>
    </tr>
    <tr>
        <td>*</td>
        <td><b>Last Name</b></td>
        <td><input style="width:20em" type="text" name="last_name" /></td>
    </tr>
    <tr>
        <td>*</td>
        <td><b>ONU E-mail Address</b></td>
        <td></a><input style="width:20em" type="text" name="email" /><button onclick="sendMail(); return false">Send</button></td>
    </tr>
    <tr>
        <td></td>
        <td><b>Department</b></td>
        <td><input style="width:20em" type="text" name="department" /></td>
    </tr>
    <tr>
        <td></td>
        <td><b>Phone</b></td>
        <td><input style="width:20em" type="text" name="phone" /></td>
    </tr>
    <tr>
        <td>*</td>
        <td><b>Date Needed</b></td>
        <td>
            <input style="width:15em" type="text" name="date_needed"
                value="<?php
                    $future = mktime(0,0,0,date("m"),date("d")+21,date("Y"));
                    echo date("m/d/Y", $future);
                ?>"
            />
            <input type='button' value='select' onclick="displayDatePicker('date_needed', false, 'mdy', '/');">
        </td>
    </tr>
	<tr>
        <td></td>
        <td valign="top"><b>URL</b></td>
        <td>
            <textarea name="url" style="width:20em"></textarea>
        </td>
    </tr>
    <tr>
        <td></td>
        <td valign="top"><b>Comments</b></td>
        <td>
            <textarea name="comments" style="width:20em"></textarea>
        </td>
    </tr>

</table>
<br/>
   
   <input type="hidden" name="request_uri" value="<?php echo $_SERVER['HTTP_REFERER']; ?>" />
<input type="submit" value="Submit" onclick="return checkForm()" />
<input type="button" name="reset" value="Reset Form" />
</form>
</div>

<script language="javascript">
    function checkForm() {
        if (document.illrequest.first_name.value == "") {
            alert("Please provide your first name.");
            document.illrequest.first_name.focus();
            return false;
        } else if (document.illrequest.last_name.value == "") {
            alert("Please provide your last name.");
            document.illrequest.last_name.focus();
            return false;
        } else if (!olivetecheck(document.illrequest.email.value)) {
            alert("Please provide a valid Olivet E-mail Address");
            document.illrequest.email.focus();
            return false;
        } else if (document.illrequest.status.value == "") {
            alert("Please provide a status.");
            document.illrequest.status.focus();
            return false;
        } else if (document.illrequest.date_needed.value == "") {
            alert("Please specify the date needed.");
            document.illrequest.date_needed.focus();
            return false;
        } else if (document.illrequest.database.value == "") {
            alert("Please specify the database that you were searching in when you found the article.\n\nIf you weren't in a database, please tell us the page from which you accessed this form.");
            document.illrequest.date_needed.focus();
            return false;
        } else if (!olivetecheck(document.illrequest.email.value)) {
            var answer = confirm("The InterLibrary Loan department strongly recommends that you use your Olivet email address.\nYou have entered a non-Olivet email address.\n\nAre you sure you still want to do this?");
            document.illrequest.email.focus();
            return answer;
        }
    }
 
// (http://www.smartwebby.com/dhtml/)
    function echeck(str) {
        var at="@";
        var dot=".";
        var lat=str.indexOf(at);
        var lstr=str.length;
		var ldot=str.indexOf(dot);

        if (str.indexOf(at)==-1) 
            return false;

        if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr)
            return false;

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr)
		    return false;

		if (str.indexOf(at,(lat+1))!=-1)
		    return false;

		if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot)
		    return false;

		if (str.indexOf(dot,(lat+2))==-1)
		    return false;

    	if (str.indexOf(" ")!=-1)
		    return false;

 		return true;
	}

    function olivetecheck(str) {
		var splitStr = str.split("@");
        if(splitStr.length != 2 || splitStr[1] != "olivet.edu")
			return false;

 		return true;
	}
	function sendMail() {
    var link = "chbrewer@olivet.edu"
             + "?cc=myCCaddress@example.com"
             + "&subject=" + escape("This is my subject")
             + "&body=" + escape(document.getElementById('myText').value)
    ;
    window.location.href = link;
}
</script>
<br />
<br />
	<!--Dynamic Grid MultiWidget-->
	<div class="ltfl_bookdisplay_widget" id="ltfl_widget_527aaecce6da62"></div> 
	
	<h3>Dynamic Grid</h3>	
	Display Sorting<br />
	Don't Sort<br />
	Random<br />
	Title<br />
	Author<br />
	Date (recent first)<br /><br />
	
	Cover height and width<br />
	Fixed width - This choice sets the width of each book cover.  It does not adjust height so the display may be taller depending on the size of each cover.  This will display the entire book widget but it will not necessarily be uniform from cover to cover.<br />
	Fixed height - This choice sets the height of each book cover.  It shrinks the size of the books so that they fit in a certain frame vertically.  This will display the entire book widget but it will not necessarily be uniform from cover to cover.<br />
	Cropped Square - This choice sets the height and width the entire "frame" and of each cover.  It crops the cover so that you can see the title and a portion of the cover.  It displays uniformally from cover to cover.<br /><br />
	
	Covers per row (how many covers across): Choose from 1-11 (4 or 5 seem at medium size are about the limit in our current website layout)<br />
	Rows per cover: Choose from 1-7 (Note to Informatics - height may need to be adjusted in global settings)<br /><br />
	Cover size:<br />
	x-small<br />
	small<br />
	medium<br />
	large<br />
	x-large<br /><br />
	Refresh: Never - 25 seconds<br />
	Fade:<br />
	slow<br />
	medium<br />
	fast<br />
	Fade from<br />
	Random<br />
	Top left<br />
	Bottom right<br /><br />
	Show items without covers<br />
	yes<br />
	no<br /><br />
	
	Link Covers<br />
	Direct - this is only an option if the page is directing back to a page on the library website<br />
	New Window - this is the option for link directing to Library Catalog<br />
	Off<br /><br />
	
	Author Display names:<br />
	Do not change<br />
	First Last<br />
	Last, First<br /><br />
	
	Rollover highlighting:<br />
	On<br />
	Off<br /><br />
	
	<!--Carousel MultiWidget-->
	<div class="ltfl_bookdisplay_widget" id="ltfl_widget_527abcfa61bf64"></div> 
	
	<h3>Carousel</h3>	
	Display Sorting<br />
	Don't Sort<br />
	Random<br />
	Title<br />
	Author<br />
	Date (recent first)<br /><br />
	
	
	Covers per row (how many covers across): Choose from 1-11 (4 or 5 seem at medium size are about the limit in our current website layout)<br /><br />
	
	Cover size:<br />
	x-small<br />
	small<br />
	medium<br />
	large<br />
	x-large<br /><br />
	
	Show items without covers<br />
	yes<br />
	no<br /><br />
	
	Link Covers<br />
	Direct - this is only an option if the page is directing back to a page on the library website<br />
	New Window - this is the option for link directing to Library Catalog<br />
	Off<br /><br />
	
	Author Display names:<br />
	Do not change<br />
	First Last<br />
	Last, First<br /><br />
	
	Cover height and width<br />
	Fixed width - This choice sets the width of each book cover.  It does not adjust height so the display may be taller depending on the size of each cover.  This will display the entire book widget but it will not necessarily be uniform from cover to cover.<br />
	Fixed height - This choice sets the height of each book cover.  It shrinks the size of the books so that they fit in a certain frame vertically.  This will display the entire book widget but it will not necessarily be uniform from cover to cover.<br />
	Cropped Square - This choice sets the height and width the entire "frame" and of each cover.  It crops the cover so that you can see the title and a portion of the cover.  It displays uniformally from cover to cover.<br /><br />
	
	Scroll count: Auto - 8<br />
	Automatic Scrolling: 5 seconds<br />
	Rollover highlighting:<br />
	On<br />
	Off<br /><br />
			
	<!--3-D Carousel MultiWidget-->
	<div class="ltfl_bookdisplay_widget" id="ltfl_widget_527ac06b08c115"></div> 
	
	<h3>3-D Carousel</h3>	
	Display Sorting<br />
	Don't Sort<br />
	Random<br />
	Title<br />
	Author<br />
	Date (recent first)<br /><br />
	
	Cover size:<br />
	x-small<br />
	small<br />
	medium<br />
	large<br />
	x-large<br /><br />
	
	Show items without covers<br />
	yes<br />
	no<br /><br />
	
	Link Covers<br />
	Direct - this is only an option if the page is directing back to a page on the library website<br />
	New Window - this is the option for link directing to Library Catalog<br />
	Off<br /><br />
	
	Author Display names:<br />
	Do not change<br />
	First Last<br />
	Last, First<br /><br />

	Automatic Scrolling: Off - 9 seconds<br />
	Maximum items: 1-75
	Rollover highlighting:<br />
	On<br />
	Off<br /><br />		
			
   <!--Scrolling MultiWidget-->
	<div class="ltfl_bookdisplay_widget" id="ltfl_widget_527ac50383d498"></div> 
	
	<h3>Scrolling</h3>	
	Display Sorting<br />
	Don't Sort<br />
	Random<br />
	Title<br />
	Author<br />
	Date (recent first)<br /><br />
	
	Cover size:<br />
	x-small<br />
	small<br />
	medium<br />
	large<br />
	x-large<br /><br />
	
	Show items without covers<br />
	yes<br />
	no<br /><br />
	
	Link Covers<br />
	Direct - this is only an option if the page is directing back to a page on the library website<br />
	New Window - this is the option for link directing to Library Catalog<br />
	Off<br /><br />
	
	Author Display names:<br />
	Do not change<br />
	First Last<br />
	Last, First<br /><br />
	
	Scrolling speed:<br />
	Slow<br />
	Medium<br />
	Fast<br /><br />
	
	Cover height and width<br />
	Fixed width - This choice sets the width of each book cover.  It does not adjust height so the display may be taller depending on the size of each cover.  This will display the entire book widget but it will not necessarily be uniform from cover to cover.<br />
	Fixed height - This choice sets the height of each book cover.  It shrinks the size of the books so that they fit in a certain frame vertically.  This will display the entire book widget but it will not necessarily be uniform from cover to cover.<br />
	Cropped Square - This choice sets the height and width the entire "frame" and of each cover.  It crops the cover so that you can see the title and a portion of the cover.  It displays uniformally from cover to cover.<br /><br />
	
	Type:
	Horizontal<br />
	Vertical<br /><br />
	
	Rollover highlighting:<br />
	On<br />
	Off<br /><br />
   
   
            
 
		<!-- InstanceEndEditable -->
    </div>
  </div>
</div>
<div id='footer'> 
	<div class='offsetsmall'> 
		<div class='footer_search'> 
            <form target="_top" name="querybox" action="https://i-share.carli.illinois.edu/onu/cgi-bin/Pwebrecon.cgi" method="get">
                <input type="hidden" name="DB" value="local" />
                <input type="hidden" name="CNT" value="20" />
                <input class="formelem" onfocus="this.value='';" size="21" maxlength="100" value="BLISweb Quick Search" name="Search_Arg" />
                
                <select class="formelem" name="Search_Code" style="width: 11em;">
                    <option value="FT*">Keyword Search</option>
                    <option value="TALL">Start of Title</option>

                    <option value="CMD">Boolean Search</option>
                    <option value="SUBJ_">Subject Heading</option>
                    <option value="NAME_">Author</option>
                    <option value="CALL_">Call Number</option>
                 </select>
                 
                 <input class="formelem" type="submit" value="Search" />
            </form>

		</div>

		<div class='footer_contact'>
	    	<a href='http://library.olivet.edu/email.php?id=10'>Webmaster</a> . Benner Library &amp; Resource Center<br/>
            Olivet Nazarene University<br/>
			One University Avenue . Bourbonnais, IL . 60914<br/>
			Library Phone . 815-939-5354<br/>
		</div>
	</div>
</div>
</div>
<script type="text/javascript">
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script>
<script type="text/javascript">
try {
var pageTracker = _gat._getTracker("UA-15188682-1");
pageTracker._trackPageview();
} catch(err) {}</script>
</body>
<!-- InstanceEnd --></html>