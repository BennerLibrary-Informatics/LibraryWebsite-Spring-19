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
	<h4>General Travel Sites:</h4>
	<div class="padding15-left">
	<?php echo print_bookmark('168', 'under_description', 'tab', 'no'); ?><br />
	</div>
	
	<h4>Traveling to Alaska:</h4>
	<div class="padding15-left">
	<?php echo print_bookmark('170', 'under_description', 'tab', 'no'); ?><br />
	</div>
	
	<h4>Traveling to Washington DC:</h4>
	<div class="padding15-left">
	<?php echo print_bookmark('169', 'under_description', 'tab', 'email'); ?><br />
	</div>
	
	<p>
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