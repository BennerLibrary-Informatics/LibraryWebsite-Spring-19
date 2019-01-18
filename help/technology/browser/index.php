<?php
   $page_title = "Browser Help - Benner Library";
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
<h2 class="header-line">Browser Help</h2>
	
	<p>
		<?php echo print_bookmark('207', 'under_description', 'none', 'email'); ?>
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