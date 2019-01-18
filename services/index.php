<?php
   $page_title = " - Benner Library - Services";
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

<h1>Services</h1>

	<?php
	   $path = $_SERVER['DOCUMENT_ROOT'];
	   $path .= "/scripts/resource-navigator_drop-page/services.php";
	   include_once($path);
	?>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
