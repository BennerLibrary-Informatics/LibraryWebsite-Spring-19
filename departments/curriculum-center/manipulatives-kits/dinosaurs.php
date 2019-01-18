<?php
   $page_title = "Dinosaur Kit - Benner Library";
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
<!--NeedsSomething Phase2 dinosaurs graphic or photo of kit... -->

<h1>Dinosaur Kit</h1>

	<h3>Contents of Kit</h3>
		<ul class="padding45-left">
			<li>Murphy, J. (1987). <em>Once upon a dinosaur</em>[CD]. Long Branch, NJ: Kimbo Educational.</li>
			<li>Fossil Rubbing Plates</li>
			<li>Triceratops Cast</li>
			<li>Tyrannosaurus Cast</li>
			<li>Triceratops Mold</li>
			<li>Tyrannosaurus Mold</li>
			<li>Schafer, L. (1992). <em>Dinosaur dig: Pull-out game board, cards, spinner, integrated mini-unit.</em> New York: Scholastic Professional Books.</li>
			<li>Brandenberg, A. (1988). <em>Digging up dinosaurs.</em> New York: HarperCollins Publishers Inc.</li>
			<li>Duke, K. (1997). <em>Archaeologists dig for clues.</em> New York: HarperCollins Publishers Inc.</li>
			<li>Suggested Books Ring</li>
			<li>Resource Binder</li>
		</ul>

	<h3>Uses</h3>
		<ul class="margin60-left">
			<li>Dinosaurs</li>
			<li>Paleontology</li>
			<li>Archaeology</li>
		</ul>

	<h3>Recommended Readings</h3>
		<p>Type in "dinosaur" or "paleontology" in the search box below to perform a subject search in BLISweb.  On the results page, click on either "Curriculum Center" or "Juvenile" on the right side to limit your search.<br />
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
		<p><?php echo print_bookmark('71', 'under_description', 'tab', 'no'); ?></p>

	<h3>Student Resources</h3>
		<p><?php echo print_bookmark('72', 'under_description', 'tab', 'email'); ?></p>


<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>