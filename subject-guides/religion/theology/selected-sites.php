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
  
	<div class="padding15-left">
		<?php echo print_bookmark('55', 'under_description', 'tab', 'email'); ?><br />
	</div>
        
<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>