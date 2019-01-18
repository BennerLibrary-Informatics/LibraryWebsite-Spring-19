<?php
   $page_title = "BIOL 370 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">BIOL 370: Ecology</h2>
    <h2>Finding reviews &amp; research articles</h2>
	<p><a id="pdf" href="/subject-guides/biology/biol370/doc/suggested_journals.pdf" target="_blank">Recommended Journals <img src="/img/get-pdf.png" /> </a></p>

	<div class="split l50-r50">
        <div class="left">
            <h4>Article databases</h4>

            <ul class="link-list irs padding15-left">
                <?php echo print_resource('564', 'basic', 'no_description', 'break'); ?>
                <!--php echo print_resource('619', 'basic', 'no_description', 'break'); -->
                <?php echo print_resource('649', 'basic', 'no_description', 'break'); ?>
                <?php echo print_resource('618', 'basic', 'no_description', 'break'); ?>
            </ul>
        </div>

        <div class="right">
            <p class="padding25-top">Once you find a citation, you need to <strong>get the article itself</strong>! You'll have three options: </p>
			<ul class="padding10-left">
				<li>Fulltext &amp; print subscription (<a href="https://login.proxy.olivet.edu/login?url=https://gg9fg7cr5h.search.serialssolutions.com" target="_blank">use title search</a>)</li>
				<li>Print subscription at Olivet (<a href="https://gg9fg7cr5h.search.serialssolutions.com">Journal Search</a>)</li>
				<li>InterLibrary Loan <a href="/forms/interlibrary-loan-request/index.php" target="_blank">request form</a></li>
			</ul>
        </div>
    </div>

    <hr />

    <h2>Find books</h2>
        <h3>Print</h3>
            <p>Browse the <span class="bold">580 section</span> in the reference collection and on the third-floor of Benner Library to find helpful titles.</p>
            <ul class="link-list irs padding15-left">
				<?php echo print_resource('967', 'basic', 'float_description', 'break'); ?>
				<?php echo print_resource('693', 'basic', 'float_description', 'break'); ?>
            </ul>

            <h3>Suggested Links</h3>

            <div  class="padding15-left padding15-right">
                <hr />
            </div>

            <div class="padding15">
              <?php echo print_bookmark('62', 'under_description', 'tab', 'no'); ?>
            </div>

        <h3>USDA Forest Service links</h3>
        <ul>
            <li><a href="http://www.nrs.fs.fed.us/data/il/ilpin/" target=_"Blank">Illinois Plant Information Network (ILPIN)</a></li><br />
            <li><a href="http://www.nrs.fs.fed.us/data/il/ilpin/county/" target=_"blank">Plants by county</a></li><br />
            <li><a href="http://www.fs.fed.us/database/gps/" target=_"blank">GPS</a></li><br />
        </ul>

        <h3>Illinois Native Trees</h3>
        <ul>
            <li><a href="http://www.inhs.uiuc.edu/~kenr/treetable.html" target=_"blank">List of Native Trees for Use Along Roadsides in Illinois (created by retired botanist from Illinois Natural History Survey)</a></li><br />
            <li><a href="http://dnr.state.il.us/education/classrm/treeseedsleaves/index.htm" target=_"blank">Leaf and seed images (Illinois Department of Natural Resources</a></li><br />
            <li><a href="http://www.museum.state.il.us/ismdepts/botany/herbarium/gallery.html?TopicID=trees" target=_"blank">Herbarium Collection (Illinois State Museum)</a></li><br />
        </ul>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
