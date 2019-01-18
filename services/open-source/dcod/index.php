<?php
   $page_title = " Open Source - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->

<h1>DCOD - Dynamic Content on Demand</h1>


	<p><strong>Dynamic Content on Demand (DCOD)</strong> is a bookmarking and a mini content management system that is a php web-based system designed by an Academic Library department.  This program automatically populates categorized bookmarks or FAQ content onto a specified webpage.  DCOD allows secured users access to maintain the content without any web programming experience.  It was originally designed to replace Delicious Link Rolls.</p>
	<br />
	<div class="padding50-left">
		<strong><a href="/services/open-source/downloads/dcod.zip">Download DCOD</a> Version 1</strong> -- Released June 2013<br /><br />

		<strong>System Requirements:</strong>
		<div class="padding25-left">
			PHP5<br />
			MySQL Database<br />
			JavaScript Enabled<br />
			Performs best on newer browser versions<br />
		</div>
		<br />
		<strong><a id="pdf" href="/services/open-source/dcod/doc/installation.pdf" target="_blank">Installation Instructions</a><br /><br /></strong>
	</div>

	<p>Try out the program before you download it by <a href="/forms/email/index.php?id=010,099">requesting a login</a> to our <a href="/services/open-source/demo/dcod/login.php" target="_blank">demonstration program.</a><br />

	<div class="padding50-left">
		<p>You cannot utilize the DCOD demo to place content on a page.  This functionality requires that the server software and the webpages be on the same server.</p>
	</div>

	<p>Have questions about DCOD?  Check out <a href="/services/open-source/dcod/faq.php">DCOD FAQ</a>.</p>

	<p>For feature improvement suggestions or questions contact the <a href="/forms/email/index.php?id=010,099">Benner Library OSS Team</a>.</p>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
