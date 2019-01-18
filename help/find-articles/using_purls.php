<?php
   $page_title = "Using PURLs to Stay Organized - Benner Library";
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
	$updatedDate ="5/25/2015";	//The date entered here shows up ie 3/2/2015
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
<h3>Using PURLs to Stay Organized</h3>

	<p class="title-font">Problem: I don’t have time to download or read all of these articles right now.<br /><br />
	Strategy: Save the PURLs so you can come back later. Most databases have a built-in tool for capturing a link to the database record (description) of each article.<br /><br />
	Simply copying the URL from the search box will probably NOT work—these links often expire after you close the browser.<br />
	<img src="/subject-guides/english/college-writing-ii/research_concepts/img/purl.png" />
	</p>
		<p class="title-font">How-to:</p>
			<ol>
				<li>Look in the database tools or on the <a id="pdf" href="/help/use-databases/doc/guide-to-linking.pdf" target="_blank">Guide to Linking to Articles and eBooks</a> to find the PURL option.</li>
				<li>Copy and paste the PURL from the database into a Word document, email, or wherever you keep notes.</li>
				<li>Look at the PURL.  Does it have the proxy prefix at the beginning?  If so, you’re done.  This link will consistently get you back to the article screen in the database.  From there you can see the subject headings, format the citation, and link to the fulltext or InterLibrary Loan (ILL) options.<br />
				<img src="/subject-guides/english/college-writing-ii/research_concepts/img/proxy-prefix.png" /></li>
				<li>No Proxy prefix?  Use the <a href="/forms/resource-link-creator/index.php">Resource Link Creator</a> (located under Services on the library website) to add it.
			</ol>

	<div class="margin10-left margin10-right border-double color-light-grey fcolor-grey">
		<h6>Now you know:</h6>
		<p>Regardless of the name, they all work the same: permalink, Stable URL, PURL</p>
	</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
