<?php
   $page_title = "Life Cycles Kit - Benner Library";
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
<!--NeedsSomething life cycles graphic or photo of kit... -->

<h1>Life Cycles Kit</h1>

	<h3>Contents of Kit</h3>
		<ul class="padding45-left">
            <li>Life Cycle Stages of Frog</li>
            <li>Life Cycle Stages of Butterfly</li>
            <li>Life Cycle Stages of Ladybug</li>
            <li>Butterfly Net</li>
            <li>Butterfly Casts</li>
            <li>Butterfly Mold</li>
            <li>Butterfly Puppet</li>
            <li>Ladybug Puppet</li>
            <li>Butterfly Placemat</li>
            <li>Brust, B. W. (2004). Butterflies. <em>Zoobooks.</em></li>
            <li>Heiligman, D. (1996). <em>From caterpillar to butterfly.</em> Weissman, B. (Illus.). New York: HarperCollins Publishers Inc.</li>
            <li>Ivy, B. (1986). <em>Nature's children: Monarch butterfly.</em> Danbury, Conn.: Groleir Educational.</li>
            <li>Suggested Books Ring</li>
            <li>Resource Binder</li>
        </ul>
            
    <h3>Uses</h3>
        <ul class="margin60-left">
            <li>Life Cycles</li>
            <li>Classification</li>
        </ul>
           
    <h3>Recommended Readings</h3>
		<p>
			Type in "life cycles" or "butterflies" in the search box below to perform a subject search in BLISweb.  On the results page, click on either "Curriculum Center" or "Juvenile" on the right side to limit your search.<br />
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
		<p><?php echo print_bookmark('67', 'under_description', 'tab', 'no'); ?></p>
           
    <h3>Student Resources</h3>
        <p><?php echo print_bookmark('70', 'under_description', 'tab', 'email'); ?></p>


<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>