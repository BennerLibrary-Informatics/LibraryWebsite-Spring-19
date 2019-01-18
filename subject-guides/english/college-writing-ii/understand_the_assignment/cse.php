<?php
   $page_title = "Council of Science Editors (CSE) - Benner Library";
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
	$createdDate ="1/12/2018";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="1/8/2019";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">Council of Science Editors (CSE)</h2>

<div class="split l10-r90 cf margin10-left">
	<div class="left">
		<img  width="80" src="/subject-guides/english/college-writing-ii/img/beaker_cse.png" />
	</div>
	<div class="right">
		<br />
	</div>
</div>

<p>Your audience is your professor and classmates. They are educated people, but novices in the subject area you are writing about. Be prepared to provide foundational explanations of key terms, theories, etc.</p>
<p>Your Annotated Bibliography requires the following kinds of sources:</p>

<table class="margin15-left" border="1">
	<tr>
		<td><h5>Number</h5></td>
		<td><h5>Type of Source</h5></td>
		<td><h5>Notes</h5></td>
	</tr>

	<tr>
		<td  style="text-align:center">2</td>
		<td>Specialized Reference sources</td>
		<td>Print or eBook okay</td>
	</tr>

	<tr>
		<td style="text-align:center">2</td>
		<td>Books</td>
		<td>Reference books do not count</td>
	</tr>

	<tr>
		<td style="text-align:center">7+</td>
		<td>Journal articles</td>
		<td>1 or more should be primary research, published since 2013</td>
	</tr>

	<tr>
		<td style="text-align:center">2</td>
		<td>additional sources</td>
		<td>trade publications, journal articles, or books</td>
	</tr>

	<tr>
		<td style="text-align:center">2</td>
		<td>Websites</td>
		<td>2 is max.</td>
	</tr>

</table>

<p><strong>Total:</strong> 20 sources for Annotated Bibliography (two due dates with 10-sources each)<br />
8 of these must be cited in your final paper<br />
For more details and due dates, see your Professor’s online course.
</p>

<p class="title-font"><a href="/help/citation/cse/index.php">CSE Citation Help</a></p>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
