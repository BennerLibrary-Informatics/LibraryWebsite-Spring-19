<?php
   $page_title = "How to Find Research Literature - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
  $reviewerID = "";
$reviewedDate = "";
$creatorID ="";		//This ID is from the help_email ie 10
	$updaterID ="2";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="6/21/2018";	//The date entered here shows up ie 3/2/2015
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

<h2 class="header-line">How to Find Research Literature</h2>
  <p>
		Download a printer friendly copy of <a id="pdf" href="/help/find-articles/docs/how_to_find_research_literature.pdf" target="_blank">How to Find Research Literature <img src="/img/get-pdf.png" /></a>
	</p>

  <div class="padding15">
    <iframe width="640" height="480" src="https://www.youtube.com/embed/nDmTNLlIYOg" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
  </div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
