<?php
   $page_title = "Exploration Stage - Benner Library";
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
	$updatedDate ="7/18/2018";	//The date entered here shows up ie 3/2/2015
	$dateAdded ="";		//The date entered here shows up ie 3/2/2015
	$dateRemoved ="";	//The date entered here shows up ie 3/2/2015
$videoProducer = ""; //This can either be ID or typed name(for 1 time shot)
$videoDirector = "";//This can either be ID or typed name(for 1 time shot)
$videoEditor = "";//This can either be ID or typed name(for 1 time shot)
$voiceOver = "";//This can either be ID or typed name(for 1 time shot)
$videoDate = "";
	$additionalMessage = ""; //This message is in a new paragraph after create/update
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->
<h2 class="header-line">Exploration Stage</h2>

<div class="split l30-r70 cf margin15-left">
		<div class="left">
			<img src="/subject-guides/english/college-writing-ii/img/exploration_graphic.png" />
		</div>

		<div class="right">
			<br />
			<h4><a href="/subject-guides/english/college-writing-ii/exploration/know_your_purpose.php">Know your <strong>purpose</strong></a></h4><br />
			<h4><a href="/subject-guides/english/college-writing-ii/exploration/choose_a_topic.php">Choose a <strong>topic</strong></a></h4><br />
			<h4><a href="/subject-guides/english/college-writing-ii/exploration/gather_background_information.php">Gather <strong>background information</strong></a></h4><br />
			</p>
		</div>
	</div>

<div class="margin10-left margin10-right border-double color-light-grey fcolor-grey">
	<h4>Subject-specific reference books</h4>
		<ul>
			<li>Search a collection of eReference books from the <a href="/subject-guides/reference/index.php">Reference Subject Guide</a></li>
			<li>Search in <?php echo print_resource('967', 'basic', 'float_description', 'no-li'); ?>, then limit the location to “Reference” OR add the words “encyclopedia OR dictionary” to your search</li>
		  <li>Reading for some articles and full-length books?  Consult the recommended databases on the <a href="/subject-guides/good-places-to-start/index.php">Good Places to Start</a> subject guide</li>
		</ul>
</div>

<p><a href="https://youtu.be/Q0B3Gjlu-1o" target="_blank">Picking your topic IS research!</a> (YouTube video) created by NCSU Libraries.  “When you pick your topic, it's not set in stone. Picking and adjusting your topic is an integral part of the research process! "



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
