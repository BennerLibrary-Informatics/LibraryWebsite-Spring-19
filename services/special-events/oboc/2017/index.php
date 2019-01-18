<?php
   $page_title = "OBOC 2017 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="08/17/2017";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="";	//The date entered here shows up ie 3/2/2015
	$dateAdded ="";		//The date entered here shows up ie 3/2/2015
	$dateRemoved ="";	//The date entered here shows up ie 3/2/2015
$videoProducer = ""; //This can either be ID or typed name(for 1 time shot)
$videoDirector = "";//This can either be ID or typed name(for 1 time shot)
$videoEditor = "";//This can either be ID or typed name(for 1 time shot)
$voiceOver = "";//This can either be ID or typed name(for 1 time shot)
$videoDate = "";
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->
<script type="text/javascript" src="http://ltfl.librarything.com/forlibraries/widget.js?id=2091-5736230"></script>
<!--Decision: Save one event from year previous and then archive the rest.  Archived on T Drive: T:\Informatics\Website - Archival pages\Library Events\authors  -->

<h1>One Book, One Community 2017</h1>
<div class = "split 190-r10 cf">
  <div class = "left">
	<h2 class="no-margin-top" align="">Author: Jane Austen</h2>

	<p align="">
		<a href="http://kalamembers.wordpress.com/" target="_target">Sponsored by Kankakee Area Library Association</a><br />
	</p>

	<h4>Events</h4>
		<ul>
			<li><a id="pdf" href="/services/special-events/oboc/2017/docs/list_of_events.pdf" target="_blank">October events</a> in the Kankakee area </li>
			<li><strong>Austen @ Olivet</strong>, a Facebook photo contest, begins October 1st.  Rules and supplies coming in September!<br />
				<blockquote>
				Current students, faculty, and staff are invited to take pictures of regency Era figures around Olivet’s campus.  Post your pics to Benner Library’s facebook page for a chance to win a gift certificate to Olive Garden.
				</blockquote>
			</li>
			<li><strong>Austen in Autumn</strong>, a party!  Join us on Friday, October 13, 2-4pm for an Austen-inspired party featuring refreshments, games, and letter-writing.        </li>
		</ul>
  </div>
  <div class = "right">
    <p style = "padding-left: 80px">
    <img style = "width: 250px" src="/services/special-events/oboc/2017/img/contest_pic.png">
    <img style = "width: 250px" src=/services/special-events/oboc/2017/img/party_pic.png>
  </p>
  </div>
</div>
	<h4>Books available at Benner Library</h4>

		<div class="margin15-left">
			<div class="ltfl_bookdisplay_widget" id="ltfl_widget_ult_68312442"></div>
		</div>

	<h4 class="no-margin-bottom">Links</h4>
		<div class="padding15">
			<?php echo print_bookmark('239', 'under_description', 'tab', 'no'); ?>
		<small>
			Powered By <img align="absmiddle" src="/img/dcod.png" />
		</small>
		</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
