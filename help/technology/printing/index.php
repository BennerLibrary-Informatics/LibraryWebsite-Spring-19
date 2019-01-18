<?php
   $page_title = "Printing - Benner Library";
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
<h2 class="header-line">Printing Help</h2>

	<h4>Patron Printing/Copying Help</h4>
	<div class="padding15">
		<?php echo print_bookmark('144', 'under_description', 'none', 'no'); ?>
	</div>
	
	<h4>Staff Printing/Copying Help</h4>
	<P>
		<?php echo print_bookmark('145', 'under_description', 'none', 'email'); ?>
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