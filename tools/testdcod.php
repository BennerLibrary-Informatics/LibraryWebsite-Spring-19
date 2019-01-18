
<?php
   $page_title = "TestDCOD - Benner Library";
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


<h1>Testing DCOD</h1>

<h2>Education Professional</h2>

<h3>New Tab - Float - Email</h3>
<div class="padding15" style="display:block; width 100%;">
   <?php echo print_bookmark('4', 'float_description', 'none', 'no'); ?>
</div>


<h3>New Window - Underneath - NO-email</h3>
<p><?php echo print_bookmark('4', 'under_description', 'window', 'no'); ?></p>

<h3>Same Window - No Description - NO-email</h3>
<p><?php echo print_bookmark('4', 'no_description', 'none', 'no'); ?></p>

<h3>New Window - Underneath - email - powered by dcod TESTING SPACING UNDERNEATH W/O Description</h3>
<p><?php echo print_bookmark('201', 'under_description', 'tab', 'email', 'powered_by'); ?></p>




<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>