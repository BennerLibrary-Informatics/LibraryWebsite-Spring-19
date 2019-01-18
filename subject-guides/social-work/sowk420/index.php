<?php
   $page_title = "SOWK 420: Social Work Practice I - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="02/07/2017";	//The date entered here shows up ie 3/2/2015
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
<h1 align="center">SOWK 420: Social Policy Analysis</h1>
	<p align="center">
		<a href="#choose">Reference Databases</a> |
		<a href="#find">Finding your Bill</a> |
		<a href="#support">Support &amp; Opposition</a> |
		<a href="#write">Writing your Letter</a> |
		<a href="#apa">APA</a>
	</p><br />

	<div align="center">
		<a id="pdf" href="/subject-guides/social-work/doc/policy.pdf">Policy 101 <img src="/img/get-pdf.png" /></a>
	</div>

	<a name="choose" id="choose"></a>
	<h3>Reference databases</h3>
		<ul class="link-list irs">
			<?php echo print_resource('704', 'basic', 'float_description'); ?>
			<?php echo print_resource('654', 'basic', 'float_description'); ?>
      <?php echo print_resource('633', 'basic', 'float_description'); ?>
			<?php echo print_resource('569', 'basic', 'float_description'); ?>
		</ul>

		<h5><a name="find" id="find">Recommended Webpages</a></h5>
			<p>
				<img src="/img/star.png" /> <a href="http://www.library.illinois.edu/doc/researchtools/guides/usfederal/legregjud.html" target="_blank">Legislative, Regulatory, and Judicial Law Resources from University of Illinois Library</a><br />
				<img src="/img/star.png" /> <a href="http://www.naswdc.org/advocacy/default.asp" target="_blank">National Association of Social Workers Advocacy page</a>
			</p>

	<h3>Finding your Bill: details, supporters, &amp; detractors</h3>
		<ul>
		  <li><a href="http://www.law.cornell.edu/soj.html" target="_blank">Law by Jurisdiction</a> (State, Federal, World): Page within the Legal Information Institute (LII), the research and electronic publishing activity of the Cornell Law School</li>

		</ul>

		<h5>Federal Information</h5>
			<ul>

				<img src="/img/star.png" /> Use <a href="http://beta.congress.gov/">Congress.gov</a> to search from 1995-present at once; Change drop-down menu to “Congressional Record.”<br /><br />
        <li><a href="https://www.govtrack.us/" target="_blank">GovTrack.us</a>: &quot;Tracking the United States Congress: Track bills in Congress, your representative’s voting records, upcoming committee meetings, and get alerts by email&quot;</li>
        <li><a href="http://www.gpo.gov/fdsys/browse/collection.action?collectionCode=CREC" target="_blank">Congressional Record</a>: Congressional Record: 1994-present. Must choose individual session of Congress.</li>
				<li><a href="http://www.ILGA.gov" target="_blank">Illinois General Assembly</a>: Search for State legislation</li>
				<li><a href="http://www.fedstats.gov/" target="_blank">FedStats</a>: The gateway to statistics from over 100 U.S. Federal agencies</li>
				<li><a href="http://www.census.gov/" target="_blank">U.S. Census Bureau</a>: &quot;The Census Bureau serves as the leading source of quality data about the nation's people and economy.&quot;</li>

			</ul>


	<a name="support" id="support"></a>
	<h3>Articles</h3>
    <ul>
		    <li><a href="/subject-guides/news/index.php">News Subject Guide</a></li>
        <li><a href="/subject-guides/social-work/index.php">Social Work Subject Guide</a></li>
        <li><a href="/subject-guides/sociology/index.php">Sociology Subject Guide</a></li>
        <li><a href="/subject-guides/psychology/index.php">Psychology Subject Guide</a></li>
    </ul>



	<a name="write" id="write"></a>
	<h3>Writing your Letter</h3>
		<ul>
		  <li><a href="http://www.usa.gov/Contact/Elected.shtml" target="_blank">Contact Government</a></li>
		  <li>“What is the proper form of address when I write my elected Representative? -- There are several correct forms of address for a Member of Congress including "The Honorable" and "Representative".” From, <a href="http://writerep.house.gov/writerep/wyrfaqs.shtml#properform">http://writerep.house.gov/writerep/wyrfaqs.shtml#properform</a></li>
		  <li>From State Civics Toolbox (State of Connecticut)
			<ul>
			  <li><a href="http://www.ctn.state.ct.us/civics/proper_address.asp" target="_blank">Correct salutations</a></li>
			  <li><a id="pdf" href="http://www.ctn.state.ct.us/civics/pdf/Sample%20Letter.pdf" target="_blank">Sample letter</a></li>
			  <li><a id="pdf" href="http://www.ctn.state.ct.us/civics/pdf/Do's%20and%20Don'ts.pdf" target="_blank">Dos and don'ts</a></li>
			  </ul>
		   </li>
		</ul>

	<a name="apa" id="apa"></a>
	<h3>APA</h3>

		<ul>
			<li>Benner Library’s <a href="/help/citation/apa/index.php">APA Citation links</a></li>
			<li><a href="http://blog.apastyle.org/apastyle/legal/">Posts from the APA Style blog about legal references</a></li>
			<li>Citing Legal Materials in APA Style” from the University Library at California State University Stanislaus <a href="https://library.csustan.edu/jbrandt/class/apa-legal.pdf"> <img src="/img/get-pdf.png" /></a></li>
		</ul>




<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
