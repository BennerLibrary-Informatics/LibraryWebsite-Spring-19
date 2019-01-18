<?php
   $page_title = "Informatics Apps - Benner Library";
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
<h1>Informatics' Apps Icons</h2>
	<p>This icons were designed by the Informatics Graphics team and should NOT be used for any other purposes unless specific permission is given by Informatics Administration.</p>
	<div class="margin15" >

	<?php

		$directory= '../img/informatic_apps/';
		$imageArray = glob($directory."*.png");
		foreach($imageArray as $image){
      $fileName = basename($image, ".png");
		  print '<img src="'.$image.'" title = "'.$fileName.'" height = 50/>';
    }

		print'</br>';
		print'</br>';


    foreach($imageArray as $image){
      $fileName = basename($image, ".png");
		  print '<img src="'.$image.'" title = "'.$fileName.'" height = 200/>';
    }

	?>

</div>
<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
