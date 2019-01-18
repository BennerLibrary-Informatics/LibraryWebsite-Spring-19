<?php
   $page_title = "iPad Help - Benner Library";
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
<h2 class="header-line">Understanding the iPad</h2>
	<p>
		Your iPad has a two year Apple Care warranty.  Replacements have an $80 deductible.<br /><br />
		<?php echo print_bookmark('114', 'under_description', 'tab', 'no'); ?>		
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