<?php
   $page_title = "Popular versus Scholarly Sources - Benner Library";
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
<h3 class="header-line">Popular versus Scholarly Sources</h3>
	
		<p class="title-font bold">Problem: How can I tell if I’ve found the right kind of article?</p>
		<p class="title-font">Strategy: Once you know what to look for, popular and scholarly articles have specific identifying characteristics.</p>
		<p class="title-font">How-to: University of Arizona librarians provide a clear list of the differences in this <a href="http://www.library.arizona.edu/help/tutorials/scholarly/guide.html" target="_blank">Popular vs. Scholarly Articles – Guide</a></p>
	


<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>