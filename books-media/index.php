<?php
   $page_title = "Books &amp; Media - Benner Library";
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


<h1>Books &amp; Media</h1>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/resource-navigator_drop-page/books-media.php";
   include_once($path);
?>


<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>