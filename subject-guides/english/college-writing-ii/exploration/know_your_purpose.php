<?php
   $page_title = "Exploration Stage - Benner Library";
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
	$createdDate ="6/25/2015";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="";	//The date entered here shows up ie 3/2/2015
	$dateAdded ="";		//The date entered here shows up ie 3/2/2015
	$dateRemoved ="";	//The date entered here shows up ie 3/2/2015
$videoProducer = ""; //This can either be ID or typed name(for 1 time shot)
$videoDirector = "";//This can either be ID or typed name(for 1 time shot)
$videoEditor = "";//This can either be ID or typed name(for 1 time shot)
$voiceOver = "";//This can either be ID or typed name(for 1 time shot)
$videoDate = "";
	$additionalMessage = ""; //This message is in a new paragraph after create/update
?>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->
<h2 class="header-line">Know your purpose</h2>
	<ul>
		<li>To get a quick reminder about the kind of question you will ultimately ask, refer to the <a href="/subject-guides/english/college-writing-ii/understand_the_assignment/index.php">Understanding the assignment</a> section of this site (choose your section of College Writing II).    Depending on the discipline, your purpose will be to inform or persuade.</li>
		<li>Your audience is your professor and classmates.  They are educated people, but novices in the subject area you are writing about.  Be prepared to provide foundational explanations of key terms, theories, etc.</li>
	</ul>



<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>