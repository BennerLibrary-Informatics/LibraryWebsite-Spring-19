
<?php
   $page_title = " Open Source - Benner Library";
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
<h1>DCOD - FAQ</h1>
					
	<center>
		<strong>Jump to:  </strong>
		<a href="#duf">User FAQ</a> |
		<a href="#daf">Administrative FAQ</a> |
		<a href="#dif">Installation FAQ</a>
	</center>
	
	<div class "margin10-right"> 					
		<h3>General - FAQ</h3>
			<blockquote>
				<?php echo print_bookmark('139', 'under_description', 'tab', 'no'); ?>
			</blockquote>
		
		<h3><a name="duf" id="duf"></a>User - FAQ</h3>
			<blockquote>
				<?php echo print_bookmark('141', 'under_description', 'tab', 'no'); ?>
			</blockquote>

		<h3><a name="daf" id="daf"></a>Administrative - FAQ</h3>
			<blockquote>
				<?php echo print_bookmark('137', 'under_description', 'tab', 'no'); ?>
			</blockquote>

		<h3><a name="dif" id="dif"></a>Installation - FAQ</h3>
			<blockquote>
				<?php echo print_bookmark('140', 'under_description', 'tab', 'email'); ?>
			</blockquote>
	</div>

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>