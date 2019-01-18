<?php
   $page_title = "FACS 101 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
  $reviewedDate = "08/14/2018";
  $creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="06/2/2016";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">FACS 101: Orientation to FACS</h2>

	<h3>Professional Journal Assignment</h3>
		<h6>Part 1:</h6>
		<p>The <em>Journal of Family and Consumer Sciences</em> is available in print in the Lower Level of Benner Library from 1994 to present</p>

		<h6>Part 2:</h6>
		<p>Journal list & availability <a id="pdf" href="/subject-guides/family_consumer-sciences/facs101/docs/journal_list.pdf" target="_blank"><img src="/img/get-pdf.png" /></a></p>

	<h3>Suggested webpage</h3>
	 <p>
		<a href="http://www.aafcs.org/DevelopmentCenter/FCScareersource.asp" target="_blank">American Association of Family and Consumer Sciences</a> - Membership not required to access career information
	</p>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
