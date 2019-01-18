<?php
   $page_title = "Second Floor - Virtual Walk-Through - Benner Library";
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
<h1>Second Floor - Virtual Walk-Through</h1>
	<p>
	<?php echo print_bookmark('165', 'under_description', 'tab', 'no'); ?>
	</p>
	
<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>