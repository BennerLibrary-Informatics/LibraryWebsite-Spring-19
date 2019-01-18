<?php
   $page_title = "Benner Bulletins - Benner Library";
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
<h1>Benner Bulletins Graphics</h2>
<div class="margin15-left" >	
	<?php
	$dirname = '../img/bulletins/220x130/';
	$dirname2 = '../img/bulletins/220x260/';
	$images = array_merge(glob($dirname."*.png"), glob($dirname2."*.png"));
	
	foreach($images as $image) {
		$info = pathinfo($image);
		
		if ($info['extension'] != "db") {
			$thing_display = basename($image,'.'.$info['extension']);
			
			echo "<img onclick='javascript:copyToClipboard(\"$thing_display\");' src='$image' title='$thing_display'/>";
		}
	}
	?>
</div>
	
	<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>