<?php
   $page_title = "Microsoft Help - Benner Library";
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
<h1>Microsoft Help</h1>

	<p>
		<?php echo print_bookmark('203', 'under_description', 'tab', 'no'); ?>
		<small>
			Powered By <img align="absmiddle" src="/img/dcod.png" />
		</small>
	</p>

<h3>Other Microsoft Links and Help</h3>
	<p>
		<a href="/help/technology/microsoft/excel.php">Microsoft Excel</a><br /><br />
		<a href="/help/technology/microsoft/outlook.php">Microsoft Outlook</a><br />
	</p>
	
<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>