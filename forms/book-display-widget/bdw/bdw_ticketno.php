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
		  	
            <!-- Related Links (if needed) -->            <h3>Example BDWs</h3>
			<a href="/bdw/dynamic.php">Dynamic Example</a>
			<a href="/bdw/scrolling.php">Scrolling Example</a>
			<a href="/bdw/carousel.php">Carousel Example</a>
			<a href="/bdw/carousel.php">3 - D Carousel Example</a>
            
            
		<!-- InstanceEndEditable -->
		<br />
		<br />		
    </div>
  </div>
  <div id='center_col'>
		
    <div class='offsetlarge'>
		<!-- InstanceBeginEditable name="main_content" -->
        
   <?php
		$id = $_GET['ticket_no'];
	?>     
	        
<h2 align="center">Book Display Widget Request Form</h2>
<div class="FormTheme1">
<form action="bdw_do_ticket.php"  name="illrequest"  method="post">
<h3 style="margin-top:0">Requestor Information</h3>
<table>
    <tr>
        <td>*</td>
        <td style="width:17em"><b>Ticket Number</b></td>
        <td><input type="hidden"  name="ticket_no"disabled="$id"  /></td>
        <?php echo '<td><input style="width:20em" type="text" name="ticket_no"  disabled value=' .$id.'></td>'?>
    </tr>
    	<td></td>
    <td valign="top"><b>Please choose one of these option:</b></td>
	</td>
	</tr>
</table>
<br/>
<table>
    <tr>
		<tr>
		<td></td>
	<td style="vertical-align:top";><input type="radio" name="x" value="dynamic_grid" onclick="hideall();showit('x1')"><b>Dynamic Grid<b></td>
	<td>
		<span id="x1" style="display:none">
			<select name="display_sorting_dg">
				<option>Display Sorting</option>
				<option value="random">Random</option>
				<option value="title">Title</option>
				<option value="author">Author</option>
				<option value="date">Date(recent first)</option>
			</select><br>
			<select name="height_width_dg">
				<option>Cover Height and Width</option>
				<option value="width">Fixed width </option>
				<option value="height">Fixed height</option>
				<option value="croppped">Cropped Square</option>
			</select><a href = " http://library.olivet.edu/bdw/dynamic.php"/>More information</a><br>
			<select name="row_cover_dg">
				<option>Cover per row or per cover</option>
				<option value="row">Covers per row</option>
				<option value="cover">Rows per cover</option>
			</select><a href = " http://library.olivet.edu/bdw/dynamic.php"/>More information</a><br>
			<select name="cover_size_dg">
				<option>Cover Size</option>
				<option  value="x_small">x-small</option>
				<option  value="small">small</option>
				<option  value="medium">medium</option>
				<option  value="large">large</option>
				<option  value="x_large">x-large</option>
			</select><br>
			<select name="fade_dg">
				<option>Fade</option>
				<option value="slow">Slow</option>
				<option value="medium">Medium</option>
				<option value="fast">Fast</option>
			</select><br>
			<select name="fade_from_dg">
				<option>Fade From</option>
				<option value="fade_random">Radnom</option>
				<option value="top_left">Top Left</option>
				<option value="bottom_right">Bottom Right</option>
				<option value="date">Date(recent first)</option>
			</select><br>
			<select name="show_item_dg">
				<option>Show Items Without Covers</option>
				<option value="Yes">Yes</option>
				<option value="no">No</option>
			</select><br>
			<select name="link_cover_dg">
				<option>Link Covers</option>
				<option value="direct">Direct</option>
				<option value="new_window">New Window</option>
				<option value="off">Off</option>
			</select><a href = " http://library.olivet.edu/bdw/dynamic.php"/>More information</a><br>
			<select name="author_display_dg">
				<option>Author Display values</option>
				<option value=="not_change">Do not change</option>
				<option value=="first">First, Last</option>
				<option value=="last">Last,First</option>
			</select><br>
			<select name="roll_over_dg">
				<option>Rollover Highlighting</option>
				<option value=="on">On</option>
				<option value="off">Off</option>
			</select><br>
		</span>
	</td>
	</tr>
	<tr>
	<td></td>
	<td style="vertical-align:top";><input type="radio" name="x" value="Scrolling" onclick="hideall();showit('x2')"><b>Scrolling <b></td>
	<td>
		<span id="x2" style="display:none">
			<select name="display_sorting_s">
				<option>Display Sorting</option>
				<option value="random">Random</option>
				<option value="title">Title</option>
				<option value="author">Author</option>
				<option value="date">Date(recent first)</option>
			</select><br>
			<select name="cover_size_s">
				<option>Cover Size</option>
				<option value"x_small">x-small</option>
				<option value"small">small</option>
				<option value"medium">medium</option>
				<option value"large">large</option>
				<option value"x_large">x-large</option>
			</select><br>
			<select name="show_item_s">
				<option>Show Items Without Covers</option>
				<option value"Yes">Yes</option>
				<option value"no">No</option>
			</select><br>
			<select name="link_cover_s">
				<option>Link Covers</option>
				<option value"direct">Direct</option>
				<option value"new_window">New Window</option>
				<option value"off">Off</option>
			</select><a href = "http://library.olivet.edu/bdw/scrolling.php">More information</a><br>
			<select name="cover_height_s">
				<option>Author Display Names</option>
				<option value"not_change">Do not change</option>
				<option value"first">First, Last</option>
				<option value"last">Last,First</option>
			</select><br>
			<select name="scroll_speed_s">
				<option>Scroll Speed</option>
				<option value="Slow">Slow</option>
				<option value="Meduim">Meduim</option>
				<option value="Fast">Fast</option>
			</select><br>
			<select name="height_width_s">
				<option>Cover Height and Width</option>
				<option value="width">Fixed width</option>
				<option value="height">Fixed height</option>
				<option value="cropped">Cropped Square</option>
			</select><a href = " http://library.olivet.edu/bdw/scrolling.php"/>More information</a><br>
			<select name="scroll_type_s">
				<option>Scroll Type</option>
				<option value="Horizontal">Horizontal</option>
				<option value="Vertical">Vertical</option>
			</select><br>
			<select name="maximum_s">
				<option> Rollover Highlighting</option>
				<option value="On">On</option>
				<option value="Off">Off</option>
			</select><br>
		</span>
	</td>
	</tr>	
	<td></td>
	<td style="vertical-align:top";><input type="radio" name="x" value="Carousel" onclick="hideall();showit('x3')"><b>Carousel<b></td>
	<td>
		<span id="x3" style="display:none">
		<select name="display_sorting_c">
			<option>Display Sorting</option>
			<option value="random">Random</option>
			<option value="title">Title</option>
			<option value="author">Author</option>
			<option value="date">Date(recent first)</option>
		</select><br>
		<select name="height_width_c">
			<option>Cover Height and Width</option>
			<option value="width">Fixed width</option>
			<option value="height">Fixed height</option>
			<option value="cropped">Cropped Square</option>
		</select><a href = " http://library.olivet.edu/bdw/carousel.php"/>More information</a><br>
		<select name="row_cover_c">
			<option>Cover per row or per cover</option>
			<option value="row">Covers per row</option>
			<option value="cover">Rows per cover</option>
		</select><a href = " http://library.olivet.edu/bdw/carousel.php"/>More information</a><br>
		<select name="cover_size_c">
			<option>Cover Size</option>
			<option value="x_small">x-small</option>
			<option value="small">small</option>
			<option value="medium">medium</option>
			<option value="large">large</option>
			<option value="x_large">x-large</option>
		</select><br>
		<select name="show_item_c">
			<option>Show Items Without Covers</option>
			<option value="Yes">Yes</option>
			<option value="no">No</option>
		</select><br>
		<select name="link_cover_c">
			<option>Link Covers</option>
			<option value="direct">Direct</option>
			<option value="new_window">New Window</option>
			<option value="off">Off</option>
		</select><a href = " http://library.olivet.edu/bdw/carousel.php"/>More information</a><br>
		<select name="author_display_c">
			<option>Author Display values</option>
			<option value="not_change">Do not change</option>
			<option value="first">First, Last</option>
			<option value="last">Last,First</option>
		</select><br>
			<select name="scroll_auto_c">
			<option selected="selected" value="0">Scroll Auto</option>
			<option value="2">-8</option>
		</select><br>
		<select name="auto_scroll_c">
			<option>Automatic Scrolling</option>
			<option value="5_seconds">5 seconds</option>
			<option value="No">No</option>
		</select><br>
		<select name="roll_over_c">
			<option>Rollover Highlighting</option>
			<option value="on">On</option>
			<option value="off">Off</option>
		</select><br>
		</span>
	</td>
	</tr>
		<td></td>
	<td style="vertical-align:top";><input type="radio" name="x" value="d_Carousel" onclick="hideall();showit('x4')"><b>3-D Carousel<b></td>
	<td>
		<span id="x4" style="display:none">
		<select name="display_sorting_d">
			<option>Display Sorting</option>
			<option value="random">Random</option>
			<option value="title">Title</option>
			<option value="author">Author</option>
			<option value="date">Date(recent first)</option>
		</select><br>
		<select name="cover-size_d">
			<option>Cover Size</option>
			<option value"x_small">x-small</option>
			<option value="small">small</option>
			<option value="medium">medium</option>
			<option value="large">large</option>
			<option value="x_large">x-large</option>
		</select><br>
		<select name="show_item_d">
			<option>Show Items Without Covers</option>
			<option value="Yes">Yes</option>
			<option value="no">No</option>
		</select><br>
		<select name="link_cover_d">
			<option>Link Covers</option>
			<option value="direct">Direct</option>
			<option value="new_window">New Window</option>
			<option value="off">Off</option>
		</select><a href = "http://library.olivet.edu/bdw/carousel3d.php"/>More information</a><br>
		<select name="author_display_d">
			<option>Author Display Names</option>
			<option value="not_change">Do not change</option>
			<option value="first">First, Last</option>
			<option value="last">Last,First</option>
		</select><br>
		<select name="scroll_auto_d">
			<option>Scroll Auto</option>
			<option value="-9">-9</option>
		</select><br>
		<select name="auto_scroll_d">
			<option>Automatic Scrolling</option>
			<option value="5_seconds">5 seconds</option>
			<option value="No">No</option>
		</select><br>
		<select name="maximum_d">
			<option>Maximum items: 1-75 Rollover Highlighting</option>
			<option value="On">On</option>
			<option value="Off">Off</option>
		</select><br>
		</span>
	</td>
	</tr>
</table>
<br/>
	<input type="hidden" name="request_uri" value="<?php echo $_SERVER['HTTP_REFERER']; ?>" />
	<input type="hidden" name="ticketno" value="ticketno" />
	<input type="submit"  id="submit" name="submit" value="Submit"  onclick="return checkForm()" />
	<input type="reset" value="Reset Form" />

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
        } else if (document.illrequest.date_needed.value == "") {
            alert("Please specify the date needed.");
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
	function showit(it) {
	  document.getElementById(it).style.display = "block";
	  document.getElementById("it").style.display = "More Information  http://library.olivet.edu/bdw/dynamic.php";
	}

	function hideit(it) {
	  document.getElementById(it).style.display = "none";
	}

	function hideall() {
	  for (var i=1; i<=4; i++) {
		hideit("x" + i);
	  }
	}
</script>
<br />
<br />
	<!--Dynamic Grid MultiWidget-->
	
   
   
            
 
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