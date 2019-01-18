<?php
   $page_title = "All Tutorials on Benner Library's website - Benner Library";
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

<h2 class="header-line">All Tutorials on Benner Library's website</h2>
	
	<div class="padding15">
		<?php echo print_bookmark('121', 'under_description', 'tab', 'no'); ?>
	</div>


<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>