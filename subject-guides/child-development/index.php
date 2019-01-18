<?php
   $page_title = "Child Development - Benner Library";
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
<h1>Child Development</h1>

	<div class="split l60-r40 cf">
	   <div class="left">
		<h3 class="no-margin-top bold">Selected Databases</h3>
		<ul class="link-list irs">
		<?php echo print_subject('94', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
		</ul>

		<h3 class="bold">Selected eJournals</h3>
		<ul class="link-list irs">
		<?php echo print_subject('94', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
		</ul>

		<h3 class="bold">Selected eBooks</h3>
		<ul class="link-list irs">
		<?php echo print_subject('94', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
		</ul>

	</div>
		<div class="right">
			<img class="padding15-left" src="/img/subject-guides/child_development.png" alt="FACS" title="FACS" />

			<h5 class="no-margin-top bold padding35-top">Course Guides</h5>
				<ul class="link-list padding10-left">
					<li><a href="/subject-guides/dietetics/index.php">Dietetics Subject Guide Page</a></li>
          <li><a href="/subject-guides/education/professional/index.php">Education: Professional Subject Guide Page</a></li>
				</ul>

			<h5 class="no-margin-top bold">Websites</h5>
				<ul class="link-list padding10-left">
					<li><a href="/subject-guides/child-development/selected-sites.php">Selected Sites</a></li>
          <li><a href="/help/find-articles/education_research_literature.php">Education Research Literature</a></li>
				</ul>
	   </div>
	</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
