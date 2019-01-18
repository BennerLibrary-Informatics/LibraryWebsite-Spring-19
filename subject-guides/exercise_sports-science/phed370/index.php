<?php
   $page_title = "PHED370 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="08/02/2018";	//The date entered here shows up ie 3/2/2015
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
<script src="//ltfl.librarything.com/forlibraries/widget.js?id=2091-5736230" type="text/javascript"></script><noscript>This page contains enriched content visible when JavaScript is enabled or by clicking <a href="http://ltfl.librarything.com/forlibraries/noscript.php?id=2091-5736230&accessibility=1">here</a>.</noscript>

<h2 class="header-line">PHED370:  Adaptive Physical Education</h2>

	<h3>Article Databases</h3>
		<h4 class="padding15-left">General</h4>
		<ul class="padding30-left">
		<?php echo print_resource('564', 'basic','no_description'); ?>
		<?php echo print_resource('569', 'basic','no_description'); ?> | <a href="https://www.statista.com/statistics/236119/disabled-youths-served-under-idea-us/" href="_blank"> Example image</a>
		<?php echo print_resource('716', 'basic','no_description'); ?> <span>Edition Sources types include: magazines & reference books</span>
		<?php echo print_resource('702', 'basic','no_description'); ?> <span> Source types include: fact sheets, pamphlets, news, magazines, drugs & herbs, encyclopedias</span>
		</ul>

		<h4 class="padding15-left">Education Research</h4>
		<ul class="padding30-left">
		<?php echo print_resource('697', 'basic', 'no_description'); ?>
		<?php echo print_resource('696', 'basic', 'no_description'); ?>
		<?php echo print_resource('748', 'basic', 'no_description'); ?></a>
		</ul>

		<h4 class="padding15-left">Exercise & Sports Science Research</h4>
		<ul class="padding30-left">
		<?php echo print_resource('756', 'basic', 'no_description'); ?>
		</ul>

	<h3>Reference Sources</h3>
	<ul class="padding30-left">
	<?php echo print_resource('608', 'basic', 'no_description'); ?>
	<?php echo print_resource('713', 'basic', 'no_description'); ?>
	<?php echo print_resource('752', 'basic', 'no_description'); ?>
	</ul>


	<div class="margin15-left">
	<div class="ltfl_bookdisplay_widget" id="ltfl_widget_ult_1160254067"></div>
	</div>


	<h3>Library of Congress Subject Headings To Seach For</h3>
	<p> Use these "Topics" or "Subjects" in <?php echo print_resource('967', 'basic', 'no_description', 'no-li'); ?> &amp; <?php echo print_resource('919', 'basic', 'no_description', 'no-li'); ?> to narrow your results: </p>
	<p>Physical education and training</p>
	<ul>
	<li>handbooks, manuals, etc.</li>
	<li>curricula</li>
	<li>study and teaching</li>
	</ul>

	<p>Deaf Children</p>
	<p>Education</p>
	<p>Children with disabilities</p>

	<h3>Recommended Links</h4>
		<p>
			<?php echo print_bookmark('235', 'under_description', 'tab', 'email'); ?>
			<small>
			Powered By <img align="absmiddle" src="/img/dcod.png" />
			</small>
		</p>

	<h3>APA Citation</h3>
	<p class="padding15-left">
	<a href="/help/citation/apa/index.php">APA guide</a> (use the 6th edition)
	</p>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
