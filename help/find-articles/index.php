<?php
   $page_title = "Finding Articles - Benner Library";
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

<h1>Finding Articles</h1>
	<p>
		<?php echo print_bookmark('123', 'under_description', 'tab', 'no'); ?>
		<small>
			Powered By <img align="absmiddle" src="/img/dcod.png" />
		</small>
	</p>

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>