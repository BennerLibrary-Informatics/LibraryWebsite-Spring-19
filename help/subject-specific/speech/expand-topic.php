<?php
   $page_title = "Expanding a Topic - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = ""; 
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="8/15/2016";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">Expanding a Topic</h2>

	<p>
	<iframe width="640" height="480" src="https://www.youtube.com/embed/j9t3d-3iJGg" frameborder="0" allowfullscreen></iframe>
    	</p>
            
	   
	<p>Related tutorials:<br />
		<a href="/help/subject-specific/speech/choose-topic.php">Choosing a Topic: Background Sources <img align="absmiddle"src="http://library.olivet.edu/img/help/tutorial_movie.png" /></a> <br />
		<a href="/help/subject-specific/speech/narrowing-topic.php">Narrowing a Topic with the Flower Diagram <img align="absmiddle"src="http://library.olivet.edu/img/help/tutorial_movie.png" /></a></br />
	</p>

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>