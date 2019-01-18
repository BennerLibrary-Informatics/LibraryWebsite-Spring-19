<?php
   $page_title = "Template - Benner Library";
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

<h1>eBook Search</h1>
<p>Search for a journal by title or ISBN.</p>
<iframe src="https://gg9fg7cr5h.search.serialssolutions.com/?SS_searchTypeBook=yes"></iframe> 

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>