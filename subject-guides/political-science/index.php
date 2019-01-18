<?php
   $page_title = "Political Science - Benner Library";
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
<h1>Political Science</h1>

<div class="split l60-r40 cf">
   	<div class="left">
	  	<h3 class="no-margin-top bold">Selected Databases</h3>
	  	<ul class="link-list irs">
		 	<?php echo print_subject('8', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  	</ul>

	  	<h3 class="bold">Selected eBooks</h3>
	 	 <ul class="link-list irs">
		 	<?php echo print_subject('8', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  	</ul>

	  	<h3 class="bold">Selected eJournals</h3>
	 	 <ul class="link-list irs">
		 	<?php echo print_subject('8', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  	</ul>

</div>
	<div class="right">

		<img class="padding15-left" src="/img/subject-guides/political-science.png" alt="Political Science" title="Political Science">

		<h5 class="no-margin-top bold">Course Guides</h5>
	  	<ul class="link-list padding10-left">
		 	<li><a href="/subject-guides/political-science/psci447/index.php">PSCI447: American Constitutional Law</a></li>
      <li><a href="/subject-guides/history/hist379/index.php">HIST379/PSCI379: Dev. World: Latin America</a></li>

      </ul>

		<h5 class="no-margin-top bold">Websites</h5>
	  	<ul class="link-list padding10-left">
		 	<li><a href="/subject-guides/political-science/selected-sites.php">Selected sites</a></li>
			<li><a href="/subject-guides/statistics/historical_statistics.php">Historical statistics</a></li>
	  	</ul>
   </div>
</div>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
