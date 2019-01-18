<?php
   $page_title = "EDUC 150: History & Philosophy of Education - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="9/16/2004";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="7/16/2018";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">EDUC 140 &amp EDUC 151</h2>
<h4>EDUC 140: Multicultural Foundations of Education <br />
	EDUC 151: Introduction To Education</h4>

	<h2>Debate Resources</h2>
		<div class="padding15-left">
			<?php echo print_resource('654', 'basic', 'no_description', 'tutorial', 'no-li'); ?><br />
			<?php echo print_resource('608', 'basic', 'no_description', 'tutorial', 'no-li'); ?><br />
			<?php echo print_resource('772', 'basic', 'no_description', 'tutorial', 'no-li'); ?>
		</div>

	<h2>Article Database</h2>

	<p><?php echo print_resource('697', 'basic', 'no_description', 'tutorial', 'no-li'); ?> (EBSCO):<br />
	The topics covered in this database include all levels of education and specialties, such as health, multilingual, and testing. There is full text for over 600 journals.</p>

	<h2>APA Citation Style</h2>
	<div class="padding25-left">
	<a href="/help/citation/apa/index.php">APA Tutorials and Links</a><br /><br />
	<a href="http://owl.english.purdue.edu/owl/resource/560/07/" target="_blank">Example of basic form</a> for periodicals from Purdue OWL: <br />
	Tutorials on using <a href="https://owl.english.purdue.edu/owl/resource/560/01/" target="_blank"> using American Psychological Association (APA) Format</a> from Purdue University Online Writing Lab (OWL):<br />


	 <a href="http://owl.english.purdue.edu/owl/resource/560/01/#resourcenav" target="_blank">All subtopics</a><br />
	 <a href="http://owl.english.purdue.edu/owl/resource/560/07/" target="_blank">Articles in Periodicals</a><br />
	 <a href="http://owl.english.purdue.edu/owl/resource/560/10/" target="_blank">Electronic Sources</a><br /><br />
	</div>





<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
