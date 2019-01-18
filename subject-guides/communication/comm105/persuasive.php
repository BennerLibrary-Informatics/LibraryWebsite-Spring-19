<?php
   $page_title = "Persuasive Speech - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="2/15/2016";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">Persuasive Speech</h2>

	<p>
		Persuasive Speech video tutorials for help with your research:<br />
	</p>
		<ul>
			<li><a href="/help/use-databases/issues_controversies.php">Issues &amp; Controversies <img align="absmiddle"src="http://library.olivet.edu/img/help/tutorial_movie.png" /></a> <br />
			<li><a href="/help/use-databases/global_issues_in_context.php">Global Issues in Context <img align="absmiddle"src="http://library.olivet.edu/img/help/tutorial_movie.png" /></a> <br />
			<li><a href="/help/use-databases/statista.php">Statista <img align="absmiddle"src="http://library.olivet.edu/img/help/tutorial_movie.png" /></a> <br />
		</ul>

<h1>Recommended Persuasive Databases</h1>
       <ul class="link-list irs">
		   <?php echo print_resource('633', 'basic', 'float_description', 'tutorial', 'break'); ?>
		   <?php echo print_resource('654', 'basic', 'float_description', 'tutorial', 'break'); ?>
		   <?php echo print_resource('656', 'basic', 'float_description', 'tutorial', 'break'); ?>
		   <?php echo print_resource('569', 'basic', 'float_description', 'tutorial', 'break'); ?>
		   <?php echo print_resource('591', 'basic', 'float_description', 'tutorial', 'break'); ?>
		   <?php echo print_resource('626', 'basic', 'float_description', 'tutorial', 'break'); ?>
		   <?php echo print_resource('564', 'basic', 'float_description', 'tutorial', 'break'); ?>
		</ul>
	   

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
