<?php
   $page_title = "PHED 360 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">PHED 360:  Physiology of Exercise</h2>

	<h4>How to read a research article</h4>
	<div class="padding15-left">
	   How to read an academic paper [video] <a href=" https://youtu.be/SKxm2HF_-k0" target="_blank"><img align='absmiddle'src="/img/help/tutorial_movie.png" /></a><br />
	   Lessons from the "<a href="http://biology.kenyon.edu/Bio_InfoLit/index.html" target="_blank">Reading primary literature in biology,</a>" tutorial hosted at Kenyon College:
	</div>
	<ul>
	<li>Abstract</li>
	<li><a href="http://biology.kenyon.edu/Bio_InfoLit/hypothesis/index.html" target="_blank">Introduction</a></li>
	<li><a href="http://biology.kenyon.edu/Bio_InfoLit/methods/index.html" target="_blank">Methodology</a></li>
	<li><a href="http://biology.kenyon.edu/Bio_InfoLit/results/index.html" target="_blank">Results</a></li>
	<li>Discussion</li></ul>

	<p><a id="pdf" href="/subject-guides/exercise_sports-science/phed360/doc/journal-list.pdf">Recommended journals</a> <img src="/img/get-pdf.png" /></p>

	<h5>Additional recommended journals which are available through ILL:</h5>

	<ul>
	<li><em>Journal of Sport and Exercise Physiology</em></li>
	</ul>

	<div class="padding15-left">
	Article not available inprint or fulltext at Benner?<a href="/forms/email/index.php?id=008"> Request it through ILL</a>
	</div>

	<h4>Article Databases</h4>
   <ul class="link-list irs">
	<?php echo print_resource('756', 'basic', 'float_description'); ?>
	<?php echo print_resource('1114', 'basic', 'float_description'); ?>
	<?php echo print_resource('564', 'basic', 'float_description'); ?>
	<?php echo print_resource('585', 'basic', 'float_description'); ?>
	</ul>

	<h4>APA Help</h4>
	<div class="padding15-left">
	Use <a href="/help/citation/apa/index.php" target="_blank">6th edition information</a>
	</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
