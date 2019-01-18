<?php
   $page_title = "Selected Sites - Benner Library";
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
<h1>Selected Sites</h1> 
<h3>Nutrition and Dietetics</h3>
	<div class="padding15-left">
			
			<?php echo print_bookmark('16', 'under_description', 'tab', 'email'); ?>
			
		
		<small>
		Powered By <img align="absmiddle" src="/img/dcod.png" />
		</small>
	</div>
<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>