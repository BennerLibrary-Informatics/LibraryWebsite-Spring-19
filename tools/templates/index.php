<?php
   $page_title = "Benner Library - Template";
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
<ul>
  <li><a href="/tools/templates/basic.php"> Basic</a></li>
  <li><a href="/tools/templates/columns.php"> Columns</a></li>
  <li><a href="/tools/templates/edited-content-template.php"> Edited Content</a></li>
  <li><a href="/tools/templates/irs_template.php"> IRS</a></li>
  <li><a href="/tools/templates/template.php"> Template</a></li>


<!-- ===== content above here ========================================================== -->
<?php
 $path = $_SERVER['DOCUMENT_ROOT'];
 $path .= "/scripts/bottom.php";
 include_once($path);
?>
