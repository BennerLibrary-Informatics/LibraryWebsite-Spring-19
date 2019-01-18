<?php
   $page_title = "Bones Kit - Benner Library";
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

<!--NeedsSomething Phase2 bone graphic or photo of kit...-->

<h1>Bones Kit</h1>
	<h3>Contents of Kit</h3>
		<ul class="padding45-left">
			<li>Skeletal X-rays</li>
			<li>Paper Skeleton</li>
			<li>Labeled Skeleton</li>
			<li>Pretzel Activity</li>
			<li>Skeleton Cast with magnets</li>
			<li>Skeleton Cast without magnets</li>
			<li>Skeleton Mold</li>
			<li>Cumbaa, S. (1992). <em>The bones book.</em> La Fave, K. (Illus.). New York: Workman Publishing Company.</li>
			<li>Suggested Books Ring</li>
			<li>Resource Binder</li>
		</ul>

	<h3>Uses</h3>
		<ul>
			<li>Formation of the Body</li>
			<li>Ancient Civilizations: Death and Burial</li>
			<li>Archaeology</li>
		</ul>

	<h3>Recommended Readings</h3>
		<p>
			Type in "skeleton" or "human body" in the search box below to perform a subject search in BLISweb.  On the results page, click on either "Curriculum Center" or "Juvenile" on the right side to limit your search.<br />
			<br />
			<form method="get" action="http://vufind.carli.illinois.edu/vf-onu/Search/Home" name="searchForm" class="search" target="vufind">
			<fieldset style="border-style: hidden">
			<label for="lookFor"><strong>Search BLISweb: </strong></label>
			<input type="hidden" name="start_over" value="1" />
			<input type="text" name="lookfor" id="lookFor" size="25" value="" />
			<input type="hidden" name="type" value="subject" />
			<input type="submit" name="submit" value="Find" />
			<br />
			<input type="hidden" name="search" value="new" />
			</fieldset>
			</form>
		</p>

	<h3>Teacher Resources</h3>
		<p><?php echo print_bookmark('63', 'under_description', 'tab', 'no'); ?></p>

	<h3>Student Resources</h3>
		<p><?php echo print_bookmark('65', 'under_description', 'tab', 'email'); ?></p>


<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>