<?php
   $page_title = "Tools Index";
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
<h2>Tools Links</h2>
	<p>
		<ul>
			<li> <a href="/tools/benner_bulletins.php">Benner Bulletins</li>
			<li> <a href="/tools/informatics_apps_icons.php">Informatics Apps Icons</li>
			<li> <a href="/tools/color_palette/informatics_apps.php">Informatics Apps Color Palette</li>
			<li> <a href="/tools/subject_guides.php">Subject Guides</li>
			<li> <a href="/tools/color_palette/index.php">Website Color Palette</li>
			<li> <a href="/services/other_services/3d_printing/pla_colors.php">Makerbot Plastic Colors</li>
      <li> <a href="/tools/templates/index.php"> Templates </a>
		</ul>
	</p>
	<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
