<?php
   $page_title = "Adobe - Benner Library";
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
<h1>Adobe Help</h1>

	<p>Choose a category below for additional tutorials and help links:</p>
	
	<div class="padding15-left">
		<ul class="link-list">
			<li><a href="/help/technology/adobe/acrobat/index.php">Adobe Acrobat</a></li>
			<li><a href="/help/technology/adobe/lightroom/index.php">Adobe Lightroom</a></li>

	</div>
	
	 
		
		

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>