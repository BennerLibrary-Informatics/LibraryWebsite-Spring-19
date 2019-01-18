
<?php
   $page_title = "CINAHL Basics Tutorial - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="4";		//This ID is from the help_email ie 10
	$updaterID ="4";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="6/1/2018";	//The date entered here shows up ie 3/2/2015
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

<h2 class="header-line">CINAHL Basics Tutorial</h2>
  <p>
		Download a printer friendly copy of <a id="pdf" href="/help/use-databases/ebsco/cinahl/doc/cinahl_basics.pdf" target="_blank">CINAHL Basic Tutorial <img src="/img/get-pdf.png" /></a>
	</p>

	<div class="padding15">
	   <iframe width="640" height="480" src="https://www.youtube.com/embed/wPJOYFUG_e8" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	</div>



	<!-- <p>NeedsSomething 	- Add citation information</p>-->

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
