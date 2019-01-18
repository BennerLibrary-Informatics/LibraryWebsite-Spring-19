<?php
   $page_title = "Help - Benner Library";
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


<h1>Benner Library Help</h1>
	<?php 
	   $path = $_SERVER['DOCUMENT_ROOT'];
	   $path .= "/scripts/resource-navigator_drop-page/help.php";
	   include_once($path);
	?>			

	
	<div class="split cf">
		<div class="left">
			<h6 class="bold">Additional Help Links</h6>
				<ul class="link-list">
					<li><a href="/help/technology/ipad/index.php">iPad Help</a></li>
					<li><a href="/help/curriculum-center/index.php">Curriculum Center Help</a></li>
					<li><a href="/help/benner-library.php">Tutorials Designed by Benner Library Staff</a></li>
				</ul>
		</div>
	</div>		


<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>