<?php
   $page_title = "Keywords &amp; Subject Headings - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$creatorNotes =""; // this note will print before created date
	$updaterNotes = ""; // this note will print before updated date
	$createdDate ="4/01/2014";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="1/8/2019";	//The date entered here shows up ie 3/2/2015
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
<h3>Keywords &amp; Subject Headings</h3>
	<p class="title-font bold">Problem: I'm not sure which words to use when I search.</p>
	<p>Strategy: Take advantage of how a database is constructed.  Start with a word that describes your topic, then see which official term has been matched to the books or articles.
	</p>
	<div class="split l50-r50 cf">
		<div class="left">
			<p class="title-font">How-to:</p>
			<ol>
				<li>Do a keyword search in a database.  Using one or two words to describe your topic.</li>
				<li>Find a result that looks relevant.</li>
				<li>Look at the details for the relevant result. Which subject headings or descriptors have been assigned to it?</li>
				<li>Click on one of them to do a new search for more articles/books on this exact topic</li>
			</ol>
		</div>

		<div class="right">
			<div class="margin10-left margin10-right border-double color-light-grey fcolor-grey center">
			<h6>Now you know:</h6>
			<p>Different databases use their own list of controlled vocabulary terms and real humans assign the terms to the books and articles included in the database.  Take notes of the subject terms that work well for each database you use. Library catalogs use the Library of Congress Subject Headings.<br /><br />
			Watch it on YouTube<br />
      (Want to skip the intro? Start with 0:31) <a href="http://youtu.be/6uRPJOd-dbc" target="_blank"><http://youtu.be/6uRPJOd-dbc> <img src="/img/help/tutorial_movie.png" /></a>
			</p>
			</div>
		</div>
	</div>

	<h4>Tutorials to help you evaluate sources</h4>

	<div class="margin10-left margin10-right border-double color-light-grey fcolor-grey">
		<h6>Dig Deeper</h6>
		<p>Some professions have their own controlled vocabularies. Here are a few:</p>
		<ul>
			<li><a href="http://www.getty.edu/research/conducting_research/vocabularies/aat/" target="_blank">Art & Architecture Thesaurus</a></li>
			<li><a href="http://www.eric.ed.gov/ERICWebPortal/Home.portal?_nfpb=true&amp;_pageLabel=Thesaurus&amp;_nfls=false" target="_blank">(Education) ERIC Thesaurus</a></li>
			<li><a href="http://www.icpsr.umich.edu/icpsrweb/ICPSR/thesaurus/" target="_blank">Inter-university Consortium for Political & Social Research</a></li>
			<li><a href="http://www.ams.org/msc/" target="_blank">Mathematics Subject Classification</a></li>
			<li><a href="http://www.nlm.nih.gov/mesh/MBrowser.html" target="_blank">Medical Subject Headings</a></li>
			<li><a href="http://www.ncjrs.gov/abstractdb/thesaurus/search.asp" target="_blank">National Criminal Justice Reference Service Thesaurus</a></li>
			<li>Thesaurus of Psychological Index Terms - Benner call #: R 150.3 T343, 2005</li>
			<li>Thesaurus of Sociological Indexing Terms - Benner call #: R 300.3 T343s</li>
		</ul>
	</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
