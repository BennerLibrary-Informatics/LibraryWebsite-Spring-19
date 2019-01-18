<?php
   $page_title = "Library Statistics - Benner Library";
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
<h1>Library Statistics</h1>
	<div class="split l30-r70 cf">
		<div class="left">
			<div class="margin10-left">
				<img class="border-solid" src="/img/bulletins/220x130/library_stats.png" alt="stats" title="stats" />
			</div>
		</div>

		<div class="right">
			<div class="margin5-top margin10-left">
				<!--<a href="/about/library-statistics/check_out_statistics.php">Cable & Adapter Charges</a><br /><br />-->
				<a id="pdf" href="/about/library-statistics/dc_stats.pdf">Digital Commons</a><br /><br />
				<!--<a href="/about/library-statistics/lab-statistics.php">Lab Statistics</a><br /><br />-->
				<a href="/about/library-statistics/help-statistics.php">Help Statistics</a><br /><br />
				<a href="/about/library-statistics/population-statistics.php">Population</a><br /><br />
				<a href="/about/library-statistics/printer-statistics.php">Printer</a><br /><br />
				<a href="/about/library-statistics/tutorial-statistics.php">Tutorial</a><br /><br />
				<a href="/about/library-statistics/website-statistics.php">Website</a><br />
			</div>
		</div>
	</div>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
