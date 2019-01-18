<?php
   $page_title = "Locate Scholarly Sources - Benner Library";
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
<h2 class="header-line">Locate Scholarly Sources</h2>

	<p>At this phase, you need pertinent information. General facts are not enough.  Seek information that is relevant to your focused topic.</p>
	<div class="split l30-r70 cf margin15-left">
		<div class="left margin10-top">
			<img src="/subject-guides/english/college-writing-ii/img/feeling.png" />
		</div>

		<div class="right">
			<p>Researcher Carol Collier Kuhlthau invested more than 20-years into developing a model to describe the actions and feelings of researchers.  Her <a href="https://comminfo.rutgers.edu/~kuhlthau/information_search_process.htm" target="_blank">Information Search Process</a>.<br /><br />
			Once you become “sufficiently informed about a topic to form a focus or personal point of view,” your confidence and interest in the material are likely to increase as you make connections and find a focus.</p>
		</div>
	</div>

<div class="padding15-left">
	<div class="hanging-indent padding15-left">
	<a href="https://comminfo.rutgers.edu/~kuhlthau/information_search_process.htm" target="_blank">Kuhlthau, C.C. (n.d) <em>Carol Collier Kuhlthau: Information Search Process</em>.  Retrieved from https://comminfo.rutgers.edu/~kuhlthau/information_search_process.htm</a>
	</div>
</div>


<h4>Research strategies</h4>
	<ul>
		<li><a href="help/use-databases/boolean-operators.php">Boolean operators (AND, OR, NOT, "")</a></li>
		<li>Worksheet<a href="" target="_blank"><img src="/img/get-pdf.png" /></a></li>
		<li><a href="/help/find-articles/using_purls.php">Using article PURLs to stay organized</a></li>
	</ul>

<h4>Signs of completion:</h4>
	<ul>
		<li>You find fewer “new” articles, but instead keep finding the same citations again and again.</li>
		<li>The new articles you find have less relevance.</li>
	</ul>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
