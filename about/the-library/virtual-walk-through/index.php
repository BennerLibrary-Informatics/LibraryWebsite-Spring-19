<?php
   $page_title = "Virtual Walk-Through - Benner Library";
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
<h1>Virtual Walk-Through</h1>
<ul class="link-list">
	<li><a href="/about/the-library/virtual-walk-through/lower-level.php">Lower Level</a></li>
	<li><a href="/about/the-library/virtual-walk-through/first-floor.php">First Floor</a></li>
	<li><a href="/about/the-library/virtual-walk-through/second-floor.php">Second Floor</a></li>
	<li><a href="https://www.google.com/maps/@41.1552709,-87.8752093,3a,75y,36.39h,87.59t/data=!3m6!1e1!3m4!1sAF1QipNrOBstqIPbVG5ornK6R7oqWAKevPgdIyj65rkn!2e10!7i7200!8i3600" target="_blank">Third Floor</a></li>
</ul>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
