<?php
   $page_title = "Evaluating Print Sources - Benner Library";
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
	$createdDate ="5/01/2014";	//The date entered here shows up ie 3/2/2015
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
<h3 class="header-line">Evaluating Print Sources</h3>
	
		<p class="title-font bold">Problem: How can I choose the best print sources for my paper?</p>
		<p class="title-font">Strategy: As you decide if a source is “good enough” to be included in your paper, consider both the characteristics of the source itself, as well as how well it fits with your topic. Cornell University Library provides an excellent guide, Critically Analyzing Information Sources: <a href="http://guides.library.cornell.edu/criticallyanalyzing" target="_blank">Ten things to look for when you evaluate an information source.</a></p>
		<p class="title-font">How-to:</p>
			<ol>
				<li>Look at each part of the citation: reliable journal? Too old to be relevant?</li>
				<li>Read the piece: consider style, arguments used, etc.</li>
				<li>Is it relevant to your topic? Often the title alone doesn’t give you enough information.</li>
			</ol>


<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>