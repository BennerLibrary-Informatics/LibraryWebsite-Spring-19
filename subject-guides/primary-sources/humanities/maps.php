<?php
   $page_title = "Primary Sources: Humanities: Maps - Benner Library";
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
<h1>Primary Sources: Humanities</h1>

<div class="split l60-r40 cf">
	<div class="left">
		<h3 class="no-margin-top bold">Selected Map Resources</h3>
			<ul class="link-list irs">
			<?php echo print_subject('85', array('5', '2', '3', '11', '12'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			</ul>
		<img class="padding15-left" src="/img/subject-guides/primary_sources_plain.png" alt="Primary Sources" />
	</div>

	<div class="right">
	<br /><br />
		<h5 class="no-margin-top bold">More Selected Resources</h5>
		   	<ul class="link-list padding10-left">
				<li><a href="/subject-guides/primary-sources/humanities/index.php">Primary Sources: Humanities</a></li>
				<li><a href="/subject-guides/primary-sources/humanities/african-american-studies.php">African American Studies</a></li>
				<li><a href="/subject-guides/primary-sources/humanities/art.php">Art</a></li>
				<li><a href="/subject-guides/primary-sources/humanities/history.php">History</a></li>
				<li><a href="/subject-guides/primary-sources/humanities/military-science.php">Military Science</a></li>
				<li><a href="/subject-guides/primary-sources/humanities/music.php">Music</a></li>
				<li><a href="/subject-guides/primary-sources/humanities/news.php">News</a></li>
				<li><a href="/subject-guides/primary-sources/humanities/religion.php">Religion</a></li>
		    </ul>
	</div>
</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
