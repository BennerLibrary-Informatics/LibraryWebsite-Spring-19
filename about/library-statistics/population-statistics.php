<?php
   $page_title = "Population Statistics - Benner Library";
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
<h2 class="header-line">Population Statistics</h2>

	<div class="margin15 color-light-grey padding5-top padding5-bottom">
		<h5>Gate Count for SY2016 (January 5, 2016-May 5, 2016): 260,502</h5>
	</div>
	
	<div class="margin15 color-light-grey padding5-top padding5-bottom">
		<h5>Computer Usage (January 5, 2016-May 5, 2016): 46,201</h5>
	</div>
	
	<div class="margin15 color-light-grey padding5-top padding5-bottom">
		<h5>Computer Usage Max (during chapel hour on non-chapel days): 56</h5>
	</div>

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>