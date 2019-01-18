<?php
   $page_title = "PHED472: Kinesiology - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="02/07/2018";	//The date entered here shows up ie 3/2/2015
	$dateAdded ="";		//The date entered here shows up ie 3/2/2015
	$dateRemoved ="";	//The date entered here shows up ie 3/2/2015
$videoProducer = ""; //This can either be ID or typed name(for 1 time shot)
$videoDirector = "";//This can either be ID or typed name(for 1 time shot)
$videoEditor = "";//This can either be ID or typed name(for 1 time shot)
$voiceOver = "";//This can either be ID or typed name(for 1 time shot)
$videoDate = "";
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->
<h2 class="header-line">PHED472: Kinesiology</h2>
        <h2>Finding Books</h2>
        <p class="title-font">Search library catalogs: </p>
        <ul class="link-list irs">
        <?php echo print_resource('967', 'basic', 'float_description'); ?> |
        <?php echo print_resource('919', 'basic', 'float_description'); ?> |
        <?php echo print_resource('763', 'basic', 'float_description'); ?>
        </ul>


        <p class="title-font">Library of Congress Subject Headings (LCSH):</p>
            <ul>
                <li>Biomechanics</li>
                <li>Kinesiology</li>
                <li>Human Mechanics</li>
                <li>Movement Disorders</li>
            </ul>


        <p class="title-font">Medical Subject Headings:</p>
            <ul>
                <li>Biomechanics</li>
                <li>Kinesiology</li>
                <li>Movement--physiology</li>
                <li>Movement Disorders</li>
            </ul>


      <h2>Finding Images</h2>
        <ul class="link-list irs">
          <?php echo print_resource('585', 'basic', 'print_description', 'break'); ?>
        </ul>

        <h2>Finding Articles</h2>
        <h3>eJournal Fulltext</h3>
        <table style='width:100%'>
          <tr>
              <td valign="top">
                  <?php echo print_resource('963', 'basic', 'float_description', 'no-li'); ?>
                </td>
                <td valign="top">
                  Health and Biological Sciences&nbsp;&gt;
                </td>
                <td valign="top">
                  Human Anatomy &amp; Physiology<br/>
                    Physical Therapy<br/>
                    Medicine&nbsp;&gt;
                </td>
                <td valign="top">
                  <br/>
                    <br/>
                    Sports Medicine
            </tr>
        </table>

        <h3>Print Titles at Benner (visit Lower Level)</h3>
        <ul>
			<li><em>Athletic Therapy Today</em></li>
			<li><em>Athletic Training &amp; Sports Health Care</em></li>
			<li><em>Journal of Sport Rehabilitation</em></li>
			<li><em>Journal of Sport &amp; Social Issues</em></li>
			<li><em>Sports Medicine</em></li>
        </ul>

        <h3>Article Databases</h3>
        <ul class="link-list irs">
			<?php echo print_resource('564', 'basic', 'float_description', 'break'); ?>
			<?php echo print_resource('626', 'basic', 'float_description', 'break'); ?>
			<?php echo print_resource('699', 'basic', 'float_description', 'break'); ?>
			<?php echo print_resource('691', 'basic', 'float_description', 'break'); ?>
			<?php echo print_resource('623', 'basic', 'float_description', 'break'); ?>
			<?php echo print_resource('741', 'basic', 'float_description', 'break'); ?>
        </ul>


        <h3>Suggested Web Links</h3>
        <ul>
			<li><a href='http://www.indiana.edu/~libhper/physedulinks.html'>Indiana University's HPER [library] Kinesiology/Physical Education Links</a></li>
            <li><a href='http://www.usatf.org/'>USA Track &amp; Field</a> : <a href='http://www.usatf.org/groups/Coaches/library/'>Coaches Library</a></li>
        </ul>

        <h2>APA</h2>
        <p><a href='/help/citation/apa/index.php'>Citation Help</a></p>

        <p>Page created by <a href='/departments/instructional-services/contact.php?id=5'>Jasmine Cieszynski</a>. Last updated October 1, 2009.


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
