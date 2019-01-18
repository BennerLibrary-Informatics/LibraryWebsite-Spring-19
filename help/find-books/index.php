<?php
   $page_title = "Finding Books - Benner Library";
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

<h1>Finding Books</h1>

	<p>
		<?php echo print_bookmark('120', 'under_description', 'tab', 'no'); ?>
		<small>
			Powered By <a href="/services/open-source/dcod/index.php" target="_blank"><img align="absmiddle" src="/img/dcod.png" /></a>
		</small>
	</p>
   
<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>