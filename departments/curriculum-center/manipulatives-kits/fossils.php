<?php
   $page_title = "Fossils Kit - Benner Library";
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
<!--NeedsSomething Phase2 fossils graphic or photo of kit... -->

<h1>Fossils Kit</h1>

	<h3>Contents of Kit</h3>
		<ul class="padding45-left">
            <li>You Want To Get Geophysical? Fossil Box</li>
            <li>Deck of 50 Fossil Cards</li>
            <li>Sea Fossil Casts</li>
            <li>Sea Fossil Mold</li>
		    <li>Paintbrush</li>
            <li>Dental Pick</li>
            <li>Magnifying Glass</li>
            <li>Tape Measure</li>
            <li>Ruler</li>
            <li>Notebook</li>
            <li>Pencil</li>
			<li>Brandenberg, A. (1990). <em>Fossils tell of long ago.</em> New York: HarperCollins Publishers Inc.</li>
            <li>Suggested Books Ring</li>
            <li>Resource Binder</li>
        </ul>
            
    <h3>Uses</h3>
        <ul class="margin60-left">
            <li>Classification</li>
            <li>Archaeology</li>
            <li>Ocean/Sea Life</li>
            <li>Study of the Past</li>
        </ul>
           
    <h3>Recommended Readings</h3>
		<p>
			Type in "fossils" or "archaeology" in the search box below to perform a subject search in BLISweb.  On the results page, click on either "Curriculum Center" or "Juvenile" on the right side to limit your search.<br />
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
		<p><?php echo print_bookmark('64', 'under_description', 'tab', 'no'); ?></p>
           
    <h3>Student Resources</h3>
        <p><?php echo print_bookmark('66', 'under_description', 'tab', 'email'); ?></p>


<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>