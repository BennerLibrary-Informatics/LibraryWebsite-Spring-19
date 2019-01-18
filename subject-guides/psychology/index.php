<?php
   $page_title = "Psychology - Benner Library";
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
<h1>Psychology</h1>

	<div class="split l60-r40 cf">
		<div class="left">
			<h3 class="no-margin-top bold">Selected Databases</h3>
			<ul class="link-list irs">
				<?php echo print_subject('33', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			</ul>

			<h3 class="bold">Selected eBooks</h3>
			<ul class="link-list irs">
				<?php echo print_subject('33', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			</ul>

			<h3 class="bold">Selected eJournals</h3>
			<ul class="link-list irs">
				<?php echo print_subject('33', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			</ul>
		</div>

		<div class="right">
			<img class="padding15-left" src="/img/subject-guides/psychology.png" alt="psychology" title="psychology" />

			<h5 class="no-margin-top bold">Course Guides</h5>
			<ul class="link-list padding10-left">
				<li><a href="/subject-guides/psychology/psyc331">PSYC331: Basic Research &amp; Statistics</a></li>
				<li><a href="/subject-guides/psychology/psyc603/">PSYC603</a></li>
			</ul>

			<h5 class="no-margin-top bold">Websites</h5>
			<ul class="link-list padding10-left">
				<li><a href="/subject-guides/psychology/selected-sites.php">Selected Sites</a></li>
			</ul>

			<h5 class="bold">Tips &amp; Tutorials</h5>
			<ul class="link-list padding10-left">
				<li><a href="/help/find-articles/find-research-literature.php">Finding Research</a></li>
				<li><a id="pdf" href="http://www.apa.org/pubs/databases/training/ebsco.pdf" target="_blank">PsycINFO Search Guide</a></li>
			</ul>
	   </div>
	</div>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
