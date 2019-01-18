<?php
   $page_title = "Basics of ProQuest - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="4";		//This ID is from the help_email ie 10
	$updaterID ="21";		//This ID is from the help_email ie 10
	$createdDate ="5/28/2014";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="4/22/2018";	//The date entered here shows up ie 3/2/2015
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

<h2 class="header-line">The Basics of ProQuest Databases</h2>

	<p>Even though nursing was the example used in this tutorial,<br />
		the strategies can be applied in most ProQuest databases for any subjects.
	</p>

	<p>
		Download a printer friendly copy of <a id="pdf" href="/help/use-databases/proquest/doc/proquest-basics.pdf" target="_blank">The Basics of ProQuest Databases. <img src="/img/get-pdf.png" /></a>
	</p>

	<div class="padding15">
		<iframe width="640" height="480" src="https://www.youtube.com/embed/YIMQb_shfjo?rel=0" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>





<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
