<?php
   $page_title = "Evaluate - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$creatorNotes = ""; // this note will print before created date
	$createdDate ="6/25/2015";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">Evaluate &amp; Categorize</h2>
	<h4>Tutorials to help you evaluate &amp; use sources</h4>
	<ul>
		<li><a href="/subject-guides/english/college-writing-ii/refine_topic/evaluate_and_categorize/databases-versus-web.php">Library databases -v- the web</a></li>
		<li><a href="/subject-guides/english/college-writing-ii/refine_topic/evaluate_and_categorize/popular-versus-scholarly.php">Popular -v- scholarly sources</a></li>
		<li><a href="/subject-guides/english/college-writing-ii/refine_topic/evaluate_and_categorize/evaluating-print.php">Evaluating print sources</a></li>
		<li><a href="/help/use-databases/peer-review.php">How can I tell if this journal is peer reviewed?</a></li>
		<li><a href="https://youtu.be/rOCQZ7QnoN0" target="_blank">What is Peer Review? (video)</a></li>
		<li><a href="/subject-guides/english/college-writing-ii/refine_topic/evaluate_and_categorize/evaluating-web.php">Evaluating web sources</a></li>
	</ul>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
