<?php
   $page_title = "SOWK 360: Child Welfare - Benner Library";
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

<h2 class="header-line">SOWK 360: Child Welfare</h2>

	<h3>eBooks</h3>
		<div class="margin15-left">
			<?php echo print_bookmark('191', 'float_description', 'tab', 'no'); ?>
			<small>
			Powered By <img align="absmiddle" src="/img/dcod.png" />
			</small>
		</div>

	<h3>Search for more titles in these Library Catalogs</h3>
		<ul>
			<?php echo print_resource('967', 'basic', 'no_description', 'tutorial'); ?>
			<?php echo print_resource('919', 'basic', 'no_description', 'tutorial'); ?>
			<?php echo print_resource('763', 'basic', 'no_description', 'tutorial', 'break'); ?>
		</ul>

	<h3>Use these Recommended Keywords</h3>
		<p>socialization<br />
		cooperativeness<br />
		</p>

	<h3>Recommended Subject Words/Topics</h3>
		<p>These terms work in all library catalogs because they are official Library of Congress Subject Headings.<br />
			<div class="margin40-left">
				“social skills”<br />
				self-esteem<br />
				“conflict management”<br />
				Self-consciousness<br />
				“self-consciousness (awareness)”<br />
				anger<br />
				“social problems”<br />
				arts<br />
				“life skills”<br />
			</div>
		</p>

	<h3>Narrower Subject Terms</h3>
		<p>After doing one of the searches above, these terms may be listed in the “topic” section of the limit bar as a way to narrow your results
			<div class="margin40-left">
				in children<br />
				psychology<br />
				handbooks, manuals<br />
				study and teaching (elementary) (e.g. social skills in children, study and teaching (elementary), handbooks and manuals)<br />
				in Literature<br />
				therapeutic use  e.g.  (arts-therapeutic use)<br />
				guides (e.g. life skills guides)<br />
			</div>
		</p>

	<h3>Recommended Social Emotional Learning (SEL) Web Links</h3>
		<div class="margin15-left">
			<?php echo print_bookmark('192', 'float_description', 'tab', 'no'); ?>
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
