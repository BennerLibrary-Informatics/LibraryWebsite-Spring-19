<?php
   $page_title = "Subject Guides - Benner Library";
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
<h1>Subject Guide Graphics</h2>
	<div class="margin15-left" >
	
	<?php
		$dirname = '../img/subject-guides/';
		$images = glob($dirname."*.png");
		foreach($images as $image) {
		echo '<img src="'.$image.'" />';
		}
	?>

</div>
	
	<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>