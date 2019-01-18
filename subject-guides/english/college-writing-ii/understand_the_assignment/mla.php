<?php
   $page_title = "Modern Language Association (MLA) Style - Benner Library";
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
	$createdDate ="6/25/2015"; //The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">Modern Language Association (MLA) Style</h2>

	<div class="split l10-r90 cf margin10-left">
		<div class="left">
			<img  width="90" src="/subject-guides/english/college-writing-ii/img/music_note_mla.png" />
		</div>
		<div class="right">
			<p class="margin20-top">This Infographic highlights the MLA approach to research. <a id="pdf" href="/subject-guides/english/college-writing-ii/understand_the_assignment/docs/mla_topic.pdf" target="_blank"><img src="/img/get-pdf.png" /></a></p>
		</div>
	</div>

  <p>Your audience is your professor and classmates. They are educated people, but novices in the subject area you are writing about. Be prepared to provide foundational explanations of key terms, theories, etc.</p>
  <p>Your Annotated Bibliography requires the following kinds of sources:</p>

	<table class="margin15-left" border="1">
		<tr>
			<td style="vertical-align:top"><h5>Type of Source</h5></td>
			<td><h5>Notes</h5>
			<p>Generally published in last 10 years(See prof. regarding exceptions)</p>
			</td>
		</tr>
		<tr>
			<td>Primary Source</td>
			<td>Not required; may be used</td>
		</tr>
		<tr>
			<td>Specialized Reference sources</td>
			<td>Print or eBook okay</td>
		</tr>

		<tr>
			<td>Books</td>
			<td>Print or eBook okay<br />
			Reference books do not count
	</td>
		</tr>

		<tr>
			<td>Journal articles found through ONU databases </td>
			<td>Must be peer-reviewed</td>
		</tr>

		<tr>
			<td>Additional sources from above types</td>
			<td></td>
		</tr>

		<tr>
			<td>Websites</td>
			<td>.org, .gov, or .edu <em>not</em> .com
	</td>
		</tr>

	</table>

	<p><strong>Total:</strong> 15 sources for Annotated Bibliography<br />
	Due date 1: 5 Print books & reference sources only<br />
	Due date 2: 5 Periodicals only<br /><br />

	Write an 8-10 page research paper using 8-10 sources. The Bible may not be used as one of your research sources. The topic should be directly related to your major and meet most of these criteria:
		<ul>
			<li>Raise questions you'd love to learn the answers to</li>
			<li>Be a topic you feel strongly about and about which have some ideas you'd like to explore</li>
			<li>Offer the possibility of interviews, informal survey, Internet research, or other sources of authoritative information</li>
			<li>Force you to reflect on what you think about the topic and formulate an argument about it</li>
		</ul>
	</p>

	<p>
		For more details and due dates, see your Professor’s online course.
	</p>

<p class="title-font"><a href="http://owl.english.purdue.edu/owl/resource/747/05/"> MLA Citation Help</a></p>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
