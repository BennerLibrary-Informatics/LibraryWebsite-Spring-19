<?php
   $page_title = "Avoid Plagiarism - Benner Library";
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


<h1>Avoid Plagiarism</h1>
	<div class="padding15">
      <?php echo print_bookmark('142', 'under_description', 'tab', 'no'); ?>
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