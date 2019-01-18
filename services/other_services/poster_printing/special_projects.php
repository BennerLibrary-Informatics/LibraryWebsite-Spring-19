<?php
   $page_title = "Special Projects - Benner Library";
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

<h1>Special Projects</h1>

	<div class="split l50-r50 cf">
		<div class="left">
			<p>
				<a href="/help/technology/adobe/lightroom/index.php">Adobe Photoshop Lightroom</a><br /><br />
				<a href="/services/other_services/poster_printing/biology_photo_contest.php">Biology Photo Contest</a><br /><br />
				<a href="/services/other_services/poster_printing/multiple_photos.php">Printing Multiple Photos</a><br /><br />
				<a href="/services/other_services/poster_printing/research_presentations.php">Research Presentations</a><br /><br />
			</p>
		</div>

		<div class="right">
      <img class="padding10" src="/services/other_services/img/poster.jpg">

		</div>
	</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
