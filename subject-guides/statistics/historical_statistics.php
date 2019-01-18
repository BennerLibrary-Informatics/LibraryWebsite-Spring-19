<?php
   $page_title = "Historical Statistics - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="6/1/2016";	//The date entered here shows up ie 3/2/2015
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
<h1>Historical Statistics</h1>
	<h5>Selected databases &amp; ebooks</h5>
	<ul class="padding60-left">
			<?php echo print_resource('633', 'basic', 'no_description'); ?> <br /> Browse the Issues and Topics to see "Statistics" as a content category, when available.
			<?php echo print_resource('636', 'basic', 'tutorial', 'no_description'); ?> <br /> Data through the year 2000. Topics in include: migration, health, crime, and the Confederate States of America. Users can graph individual tables and create customized tables and spreadsheets.
			<?php echo print_resource('838', 'basic', 'no_description'); ?> <br /> Service = Grey House Publishing <br /> This database provides the demographics, income, education, residential real estate, employment &amp; earnings in IL. (all full text)
			<?php echo print_resource('569', 'basic', 'no_description'); ?> <br /> Statistical data from 18,000+ sources. Forecasts, infographics, studies, and industry reports.
			<?php echo print_resource('839', 'basic', 'no_description'); ?> <br /> Actual prices of thousands of items purchased from the Civil War to the present, along with facts about investment options and income opportunities.
	</ul>

	<h5>Related subject guides</h5>
		<p>
			Also, see these subject guides for scholarly and popular articles which may contain data.
			<ul>
				<li><a href="/subject-guides/history/index.php">History</a></li>
				<li><a href="/subject-guides/news/index.php">News</a></li>
				<li><a href="/subject-guides/political-science/index.php">Political Science</a></li>
			</ul>
		</p>

	<h5>Help</h5>
		<p>
			<a href="/contact/ask-a-librarian.php">Ask a Librarian</a>
		</p>

	<h5>Selected sites</h5>
		<div class="padding15">
			<?php echo print_bookmark('217', 'under_description', 'tab', 'email'); ?>
			<small>
			Powered By <img align="absmiddle" src="/img/dcod.png" />
			</small>
		</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
