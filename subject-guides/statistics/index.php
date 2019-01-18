<?php
   $page_title = "Statistics - Benner Library";
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
<h1 class="no-margin-bottom">Statistics</h1>
	<p class="no-margin-top">
		Various disciplines have unique needs for statistics, see the "Resources by discipline" section for more concise selections.
	</p>

	<div class="split l60-r40 cf">
	   <div class="left">
		<p class="no-margin-top">
			Remember that data collection and publication takes some time, so statistics and facts that you find may not reflect the current date. Lag time between data collection and publication is normal.
		</p>

		  <h3 class="no-margin-top bold">Selected Databases</h3>
		  <ul class="link-list irs">
			 <?php echo print_subject('6', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
		  </ul>

		  <h3 class="bold">Selected eBooks</h3>
		  <ul class="link-list irs">
			 <?php echo print_subject('6', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
		  </ul>

	</div>

		<div class="right">
			<img class="padding15-left" src="/img/subject-guides/stats.png" alt="statistics" />
			<h5 class="no-margin-top bold">Resources by discipline</h5>
			<ul class="link-list padding10-left">
				<li><a href="/subject-guides/statistics/business_statistics.php">Business</a></li>
				<li><a href="/subject-guides/statistics/health_statistics.php">Health</a></li>
				<li><a href="/subject-guides/statistics/historical_statistics.php">Historical statistics</a></li>
				<li><a href="/subject-guides/statistics/kankakee_area_statistics.php">Kankakee area statistics</a></li>
			</ul>

			<h5 class="no-margin-top bold">Websites</h5>
			<ul class="link-list padding10-left">
				<li><a href="/subject-guides/statistics/selected-sites.php">Selected Sites</a></li>
			</ul>

			<h5 class="bold">Tips &amp; Tutorials</h5>
				<ul class="link-list padding10-left">
					<li><a id="pdf" href="/help/use-databases/doc/global_road_warrior.pdf">Global Road Warrior Tutorial</a></li>
				</ul>
	   </div>
	</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
