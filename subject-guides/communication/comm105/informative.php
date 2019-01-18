<?php
   $page_title = "Informative Speech - Benner Library";
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
<h2 class="header-line">Explore a Topic/Informative Speech</h2>

	<p>
		Informative Speech video tutorials for help with your research:<br />
	</p>
		<ul>
			<li><a href="/help/subject-specific/speech/choose-topic.php">Choosing a Topic: Background Sources <img align="absmiddle"src="http://library.olivet.edu/img/help/tutorial_movie.png" /></a></li>
			<li><a href="/help/subject-specific/speech/narrowing-topic.php">Narrowing a Topic with the Flower Diagram <img align="absmiddle"src="http://library.olivet.edu/img/help/tutorial_movie.png" /></a></li>
			<li><a href="/help/subject-specific/speech/expand-topic.php">Expanding a Topic (&amp; MasterFile Premier) <img align="absmiddle"src="http://library.olivet.edu/img/help/tutorial_movie.png" /></a></li>
		</ul>

    <h4>People</h4>
		<ul class="link-list irs">
			<li class="no-graphic"><a href="/subject-guides/biography/index.php" target="_blank">Biography Subject Guide</a></li>
			<?php echo print_resource('874', 'basic', 'float_description', 'tutorial', 'break'); ?>
		</ul>

	<h4>History &amp; Events</h4>
		<ul class="link-list irs">
			<?php echo print_resource('1087', 'basic', 'float_description', 'tutorial', 'break'); ?>
			<?php echo print_resource('1123', 'basic', 'float_description', 'tutorial', 'break'); ?>
			<?php echo print_resource('733', 'basic', 'float_description', 'tutorial', 'break'); ?>
			<?php echo print_resource('709', 'basic', 'float_description', 'tutorial', 'break'); ?>
			<?php echo print_resource('799', 'basic', 'float_description', 'tutorial', 'break'); ?>
		</ul>

	<h4>Science</h4>
		<ul class="link-list irs">
			<?php echo print_resource('590', 'basic', 'float_description', 'tutorial', 'break'); ?>
		</ul>

	<h4>Travel, Customs, Countries</h4>
		<ul class="link-list irs">
			<?php echo print_resource('635', 'basic', 'float_description', 'tutorial', 'break'); ?>
			<?php echo print_resource('792', 'basic', 'float_description', 'tutorial', 'break'); ?>
		</ul>

	<h4>Careers</h4>
		<ul class="link-list irs">
			<?php echo print_resource('642', 'basic', 'float_description', 'tutorial', 'break'); ?>
			<?php echo print_resource('641', 'basic', 'float_description', 'tutorial', 'break'); ?>
		</ul>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
