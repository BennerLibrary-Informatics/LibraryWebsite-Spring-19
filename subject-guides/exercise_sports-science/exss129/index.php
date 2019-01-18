<?php
   $page_title = "EXSS 129: Principles of Sport Management - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "08/01/2018";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="09/02/2018";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">EXSS 129: Principles of Sport Management</h2>

	<h3>Historical Origins of the sport</h3>
		<p class="font-title">Strategy: Read books &amp; encyclopedias for background</p>
		<ol>
			<li><em>Browse the Reference and third-floor circulating collections by Dewey Decimal Number </em>(biographies 927, sports 796)</li><br />
			<li><em>Do a Keyword search in <a href="http://vufind.carli.illinois.edu/vf-onu/Search/Advanced" target="_blank">Library Catalog</a> for your sport</em></li>
				<ul>
					<li><em>AND encyclopedia</em></li>
					<li><em>narrow the results by “topic”</em></li>
				</ul>
			<li><em>Use an eReference collection like</em></li>
				<ol type="a">
				<?php echo print_resource('608', 'basic', 'no_description'); ?>
				<?php echo print_resource('713', 'basic', 'no_description'); ?>
				<?php echo print_resource('750', 'basic', 'no_description'); ?>
				</ol>
		</ol>

	<h3>How has the sport evolved?</h3>
		<p class="font-title">Specific sources:</p>
		<ul class="link-list irs">
			<?php echo print_resource('564', 'basic', 'float_description'); ?>
			<?php echo print_resource('756', 'basic', 'float_description'); ?>
			<?php echo print_resource('1230', 'basic', 'float_description', 'tutorial', 'break'); ?>
		</ul>

	<h3>Biography & News Sources</h3>
		<ul>
			<li><a href="/subject-guides/biography/index.php">Biography Subject Guide</a></li>
			<li><a href="/subject-guides/news/index.php">News Subject Guide</a></li>
			<?php echo print_resource('569', 'basic', 'no_description'); ?>
		</ul>

	<h3>Help</h3>
		<p>
			<a href="/help/citation/apa/index.php">APA Help</a><br />
			<a id="pdf" href="/subject-guides/exercise_sports-science/exss129/docs/library_instruction.pdf">Library Instruction Session <img src="/img/get-pdf.png" /></a>
		</p>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
