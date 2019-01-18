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
<h1>Ai Sample</h2>
	<div class="margin15-left" >
		<p>Take the following <a href="/tools/img/now_hiring.ai">Ai file</a> and change its color to something more suited on the library website.  Look at the other <a href="/tools/benner_bulletins.php" target="_blank">Benner Bulletins</a> that are used to scroll on the bottom of the home page before you decide on a color. What else might you want to change about this graphic?</p>
	</div>

	<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
