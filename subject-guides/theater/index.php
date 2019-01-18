<?php
   $page_title = "Theater - Benner Library";
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
<h1>Theater</h1>

	<div class="split l60-r40 cf">
		<div class="left">
			<h3 class="no-margin-top bold">Selected Databases</h3>
			<ul class="link-list irs">
				<?php echo print_subject('90', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			</ul>

			<h3 class="bold">Selected eBooks</h3>
			<ul class="link-list irs">
				<?php echo print_subject('90', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			</ul>
		</div>
		
		<div class="right">
			<img class="padding15-left" src="/img/subject-guides/theater.png" alt="Theater" title="Theater" />
	   </div>
	</div>



<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>