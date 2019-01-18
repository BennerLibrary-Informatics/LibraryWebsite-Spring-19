<?php
   $page_title = "Biology Photo Contest - Benner Library";
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
<h2 class="header-line">Biology Photo Contest</h2>
	
	<div class="padding15">
		<?php echo print_bookmark('261', 'under_description', 'none', 'no', 'powered_by'); ?>
	</div>		
	
	

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>