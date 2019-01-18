<?php
   $page_title = "ICLZ Dedication - Benner Library";
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
<h1>ICLZ Dedication</h1>

<p>A dedication ceremony was held in the Irene Clerico Learning Zone (ICZL) on Tuesday, October 10, 2017. In attendance was Irene's daughter along with a good family friend.</p>

	<ul>
		<li><a id="pdf" href="/donations/clerico_farley/docs/welcome.pptx">Welcome</a> - powerpoint presentation</li>
		<li><a id="pdf" href="/donations/clerico_farley/docs/iclz_stats.pdf">Poster</a> - usage statistics in the ICLZ</li>
		<li><a href="/donations/clerico_farley/docs/collage.jpg">Collage of Irene Clerico</a> - from Olivet yearbook photos</li>
	</ul>

	<div class="margin15" >

	<?php

		$directory= '../../donations/clerico_farley/img/';
		$imageArray = glob($directory."*.jpg");

		foreach($imageArray as $image){
			$fileName = basename($image, ".jpg");
			print '<img src="'.$image.'"class="margin5" height = 200 border = 2/>';
		}

	?>

</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
