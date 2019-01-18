<?php
   $page_title = "Subject Guides - Benner Library - Olivet Nazarene University";
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


<h1 class="no-margin-bottom">Subject Guides</h1>
    <?php 
        $path = $_SERVER['DOCUMENT_ROOT'];
        $path .= "/scripts/resource-navigator_drop-page/subject-guides.php";
        include_once($path);
    ?>  


<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>