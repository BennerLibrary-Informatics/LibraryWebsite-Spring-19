<?php
   $page_title = "Tutorials Designed by Benner Library Staff - Benner Library";
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

<h2 class="header-line">Tutorials Designed by Benner Library Staff</h2>
	
	<div class="padding15">
		<?php echo print_bookmark('162', 'under_description', 'tab', 'no'); ?>
	</div>


<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>