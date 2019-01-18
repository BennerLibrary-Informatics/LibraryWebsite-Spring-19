<?php
   $page_title = "Library Instruction Surveys - Benner Library - Olivet Nazarene University";
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


<h1 class="no-margin-bottom">Library Instruction Surveys</h1>
<p>Please find the link for your class from the list below.  Take this anonymous survey to provide feedback for improving future instruction sessions and to indicate what you've learned today.</p>

<p>
	<?php echo print_bookmark('189', 'under_description', 'tab', 'email'); ?>
	<small>
	Powered By <img align="absmiddle" src="/img/dcod.png" />
	</small>
</p>   

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>