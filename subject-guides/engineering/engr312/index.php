<?php
  $page_title = "ENGR 312 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
  $reviewerID = "5";
  $reviewedDate = "6/26/2018";
  $creatorID ="";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="08/26/2015";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">ENGR 312: Thermodynamics</h2>

    <h2>Scientific Writing</h2>
		<p>
			<?php echo print_bookmark('200', 'under_description', 'tab', 'no'); ?>
			<small>
				Powered By <img align="absmiddle" src="/img/dcod.png" />
			</small>
		</p>

	<h2>Finding Articles</h2>
		<ul class="link-list irs padding15-left">
            <?php echo print_resource('616', 'basic', 'no_description'); ?>
        </ul>
	<h2>APA Help</h2>
		<ul>
			<li><a href="/help/citation/apa/index.php">Benner’s Help page</a> </li>
			<li>Purdue University’s Online Writing Lab’s (OWL) <a id="pdf" href="https://owl.english.purdue.edu/media/pdf/20090212013008_560.pdf" target="_blank">sample paper</a> </li>
        </ul>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
