<?php
   $page_title = "Sociology - Benner Library";
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
<h1>Sociology</h1>

	<div class="split l60-r40 cf">
		<div class="left">
			<h3 class="no-margin-top bold">Selected Databases</h3>
  			<ul class="link-list irs">
  				<?php echo print_subject('35', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
  			</ul>

      <h3 class="bold">Selected eJournals</h3>
        <ul class="link-list irs">
          <?php echo print_subject('35', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
        </ul>

			<h3 class="bold">Selected eBooks</h3>
  			<ul class="link-list irs">
  				<?php echo print_subject('35', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
  			</ul>
		</div>

		<div class="right">
			<img class="padding15-left" src="/img/subject-guides/sociology.png" alt="Sociology" title="Sociology" />

			<h5 class="no-margin-top bold">Course Guides</h5>
			<ul class="link-list padding10-left">
				<li><a href="/subject-guides/psychology/psyc331">PSYC331: Basic Research &amp; Statistics</a></li>
				<li><a href="/subject-guides/sociology/socy489/index.php">SOCY489: Senior Research</a></li>
			</ul>

			<h5 class="no-margin-top bold">Websites</h5>
			<ul class="link-list padding10-left">
				<li><a href="/subject-guides/sociology/selected-sites.php">Selected Sites</a></li>
			</ul>

			<h5 class="bold">Tips &amp; Tutorials</h5>
			<ul class="link-list padding10-left">
				<li><a href="/help/use-databases/ebsco/cinahl/finding-research.php" target="_blank">
				<img align="absmiddle"src="/img/help/tutorial.png" /> Finding Research</a></li>

				<li><a href="/help/subject-specific/social-science/index.php" target="_blank">
				<img align="absmiddle"src="/img/help/tutorial.png" /> Finding Social Science Research Network (SSRN) on ABI/Inform</a></li>
			</ul>
	   </div>
	</div>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
