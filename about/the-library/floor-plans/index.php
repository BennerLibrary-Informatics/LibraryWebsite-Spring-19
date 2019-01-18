<?php
   $page_title = "Floor Plans - Benner Library";
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
<h1>Library Floor Plans</h1>

	<ul class="link-list">
	<li><a id="pdf" href="/about/the-library/floor-plans/doc/lower_level_fp_LIBonly.pdf" target="_blank">Lower Level</a></li>
	<li><a id="pdf" href="/about/the-library/floor-plans/doc/first_floor_fp_LIBonly.pdf" target="_blank">First Floor</a></li>
	<li><a id="pdf" href="/about/the-library/floor-plans/doc/second_floor_fp.pdf" target="_blank">Second Floor</a></li>
	<li><a id="pdf" href="/about/the-library/floor-plans/doc/third_floor_fp.pdf" target="_blank">Third Floor</a></li>
	</ul>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
