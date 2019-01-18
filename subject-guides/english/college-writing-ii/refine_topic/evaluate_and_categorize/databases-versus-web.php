<?php
   $page_title = "Library Databases versus The Web - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = ""; 
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$creatorNotes = ""; // this note will print before created date 
	$updaterNotes = ""; // this note will print before updated date 
	$createdDate ="4/01/2014";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="5/25/2015";	//The date entered here shows up ie 3/2/2015
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
<h3 class="header-line">Library Databases versus The Web</h3>
	
	<p class="title-font">Problem: I always find information on Google.  Now my prof wants me to use databases AND she says I can “only use three online sources.” Help!<br /><br />
	Strategy: Using library databases gives you confidence that the information you are finding is reliable. There are different kinds of database depending on the information you need.
	</p>
		
		<p class="title-font">How-to:</p>
			<ol>
				<li>Need factual information like definitions, biographies, dates?  Use a <a href="/subject-guides/reference/index.php">reference database</a>.</li>
				<li>Need scholarly articles? Go to the <a href="/subject-guides/index.php">Subject Guides</a> page and choose the right discipline.  Librarians have recommended databases for each subject.</li>
				<li>Need all kinds of information and want a “Google” experience? Use the ‘Search Library Resources’ box in the upper-right corner of this page to do a Summon search of many of the library’s resources at once.</li>
			</ol>
	
	<div class="margin10-left margin10-right border-double color-light-grey fcolor-grey">
		<h6>Dig Deeper:</h6>
		<p>Library databases -v- the Web<br /><br />
			Most of the time, library databases are much more reliable than information that you find on the Web and databases are structured to make it easy to refine your searches by date, article type, etc. <br /><br /> 
			<a href="http://libguides.monroecc.edu/content.php?pid=134017&sid=1203372" target="_blank">Monroe County Library</a> compares databases &amp; the Web.<br /><br />
			<a href="https://www.youtube.com/watch?v=Q2GMtIuaNzU" target="_blank">What are databases and why you need them</a>.
		</p>
	</div>
	


<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>