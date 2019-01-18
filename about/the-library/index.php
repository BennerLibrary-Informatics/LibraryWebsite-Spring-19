<?php
   $page_title = "The Library - Benner Library";
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
<h1>The Library</h1>
	<p>
		<a href="/about/the-library/library_news/index.php">Library News</a><br /><br />
    <a href="/about/the-library/virtual-walk-through/index.php">Virtual walk-through (using Google Views)</a><br /><br />
		<a href="/about/the-library/floor-plans/index.php">View Library Floor Plans</a><br /><br />
    <a href="http://archives.olivet.edu/olivet_history/buildings/benner_library.php" target="_blank">Benner Library Building History</a>
	</p>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
