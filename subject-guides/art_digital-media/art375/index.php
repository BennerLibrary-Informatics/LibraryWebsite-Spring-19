<?php
   $page_title = "ART 375 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="7/24/2018";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">ART 375: History of Non Western Art</h2>
    <h3>DVDs</h3>
        <p class="padding15-left">Check these out or watch in a second-floor Listening Room:</p>

        <p class="padding15-left">PBS: Ancient marvels |   See details in the <a href="https://vufind.carli.illinois.edu/vf-onu/Record/onu_298252">Library Catalog</a></p>

        <p class="padding15-left">PBS: Seven wonders of the Muslim world |   See details in the <a href="https://vufind.carli.illinois.edu/vf-onu/Record/onu_298250">Library Catalog</a></p>

        <p class="padding15-left">PBS: China's terracotta warriors |   See details in the <a href="https://vufind.carli.illinois.edu/vf-onu/Record/onu_298251">Library Catalog</a></p>


	<h3>Free links</h3>
		<div class="padding15-left">
			<div class="margin10-left margin10-right color-light-grey fcolor-grey center">
				<p>Note: If you have trouble with online streaming, switch to a wired connection in campus housing or a lab, rather than using wireless!</p>
			</div>

			<h5>PBS</h5>
				<p class="padding15-left">
				<?php echo print_bookmark('181', 'under_description', 'tab', 'no'); ?>
				<small>
					Powered By <img align="absmiddle" src="/img/dcod.png" />
				</small><br />
				</p>

			<h5>YouTube</h5>
				<p class="padding15-left">
				<?php echo print_bookmark('182', 'under_description', 'tab', 'no'); ?>
				<small>
					Powered By <img align="absmiddle" src="/img/dcod.png" />
				</small><br />
				</p>

			<h5>Articles &amp; Helpful Websites</h5>
				<p class="padding15-left">
				<?php echo print_bookmark('183', 'under_description', 'tab', 'no'); ?>
				<small>
					Powered By <img align="absmiddle" src="/img/dcod.png" />
				</small><br />
				</p>
		</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
