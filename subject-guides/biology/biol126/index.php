<?php
   $page_title = "BIOL 126 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="1/10/2019";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">BIOL 126: Biology II</h2>
<h4 class="bold"><a id="pdf" href="/subject-guides/biology/biol126/docs/journals.pdf">Recommended Journals <img src="/img/get-pdf.png" /></a></h4>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
