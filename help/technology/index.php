<?php
   $page_title = "Technology Help - Benner Library";
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
<h1>Technology Help</h1>

	<p>Choose a category below for additional tutorials and help links:</p>

	<div class="padding15-left">
		<ul class="link-list">
			<li><a href="/help/technology/adobe/index.php">Adobe Products</a></li>
			<li><a href="/help/technology/apple/index.php">Apple Products</a></li>
			<li><a href="/help/technology/browser/index.php">Browser (Internet Issues)</a></li>
			<li><a href="/help/technology/microsoft/index.php">Microsoft Office Products</a></li>
			<li><a href="/help/technology/printing/index.php">Printing/Scanning</a></li>
			<li><a href="/help/technology/password/index.php">Password</a></li>
			<li><a id="pdf" href="/help/technology/docs/net_storage.pdf">Storage Solutions</a></li>
			<li><a href="/help/technology/tv/index.php">Presentation TV</a></li>
			<li><a href="/help/technology/recommended_apps.php">Recommended Apps</a></li>
			<li><a href="/help/technology/library_computers/index.php">Using Library Computers</a></li>
		</ul>
	</div>





<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
