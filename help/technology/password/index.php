<?php
   $page_title = "Password Help - Benner Library";
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
<h2 class="header-line">Password Help</h2>

	<p>
		<?php echo print_bookmark('204', 'under_description', 'none', 'email'); ?>
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