<?php
   $page_title = "Understanding the Assignment - Benner Library";
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
	$createdDate ="6/25/2015";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">American Psychological Association (APA) Style</h2>

<div class="split l10-r90 cf margin10-left">
	<div class="left">
		<img  width="80" src="/subject-guides/english/college-writing-ii/img/beaker_apa.png" />
	</div>
	<div class="right">
		<p>This Infographic highlights the APA approach to research. <a id="pdf" href="/subject-guides/english/college-writing-ii/understand_the_assignment/docs/apa_topic.pdf" target="_blank"> <img src="/img/get-pdf.png" /></a></p>

		<p><a href="https://youtu.be/Og4BGyZr_Nk" target="_blank">“What is research?”</a> a graphical presentation (5-minute video)</p>
	</div>
</div>
<p>Your audience is your professor and classmates. They are educated people, but novices in the subject area you are writing about. Be prepared to provide foundational explanations of key terms, theories, etc.</p>
<p>Your Annotated Bibliography requires a variety of sources similar to those listed below. Check with your professor for his or her requirements.</p>

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
		<td style="text-align:center">3</td>
		<td>Books</td>
		<td>Reference books do not count</td>
	</tr>

	<tr>
		<td style="text-align:center">6</td>
		<td>Journal articles, including 1 primary source (from past 5-years)</td>
		<td>Must be peer-reviewed</td>
	</tr>

	<tr>
		<td style="text-align:center">2</td>
		<td>Additional sources from above types</td>
		<td></td>
	</tr>

	<tr>
		<td style="text-align:center">2</td>
		<td>Websites</td>
		<td></td>
	</tr>

</table>

<p><strong>Total:</strong> 15 sources for Annotated Bibliography<br />
For more details and due dates, see your Professor’s online course.
</p>

<p class="title-font"><a href="/help/citation/apa/index.php">APA Citation Help</a></p>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
