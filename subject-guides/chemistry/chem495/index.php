<?php
   $page_title = "CHEM 495: Chemistry Seminar - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="5";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="1/8/2018";	//The date entered here shows up ie 3/2/2015
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
<script src="//ltfl.librarything.com/forlibraries/widget.js?id=2091-5736230" type="text/javascript"></script><noscript>This page contains enriched content visible when JavaScript is enabled or by clicking <a href="http://ltfl.librarything.com/forlibraries/noscript.php?id=2091-5736230&accessibility=1">here</a>.</noscript>

<h2 class="header-line" align="center">CHEM 495:Chemistry Seminar</h2>
	<p align="center"><a href="#2nd">Secondary sources</a> |
		<a href="#1st">Primary sources</a> |
		<a href="#Help">Help</a>
	</p>

	<h3>Secondary Sources</h3>
		<p class="title-font">Need ideas for a research topic?</p>
		<p>Questions to consider:</p>
			<ul>
				<li>What interests me?</li>
				<li>What do I already know about this topic?</li>
				<li>What questions will I answer for my audience?</li>
			</ul>


		<p class="title-font">Consult science news sources: </p>
			<ul>
				<li><a href="http://www.newscientist.com" target="_blank">New Scientist</a> Assortment of scientific topics; information ranges from artificial intelligence to alternative fuel vehicles</li>
				<li><a href="http://www.sciencedaily.com/" target="_blank">Science Daily Magazine</a> Information on the latest discoveries and research taking place within the United States</li>
				<li><a href="http://www.eurekalert.org/doe/" target="_blank">Energy Science News</a> Published quarterly by the US Department of Energy&#8217;s Office of Planning and Analysis within the Office of Science; the purpose of the publication is to inform about current research initiatives and progress in science related fields </li>
			</ul>

               <p class="title-font">Get inspired by history: </h3>
                  <ul>
                    <li><a href="http://nobelprize.org/nobel_prizes/chemistry/" target="_blank">Nobel e-Museum</a> Reviews the Noble Prize winners in chemistry</li>
                    <li><a href="https://www.chemheritage.org/historical-biographies" target="_blank">Chemical Achievers</a> Biographical information on scientists who have made a contribution to science and chemistry</li>
                  </ul>

                <p class="title-font">Need background info?</h2>
                <p>Websites</p>
                  <ul>
                    <li><a href="http://elchem.kaist.ac.kr/vt/chem-ed/analytic/ac-basic.htm" target="_blank">Analytical Chemistry Basics</a> Information on the fundamental concepts and methods of analytical chemistry. Topics include chemical equilibrium, gravimetric analysis, titrations, electrochemistry, spectroscopy, and separations </li>
                  </ul>

        <h3>Books</h3>

			<ul class="link-list irs">
				<?php echo print_resource('967', 'basic', 'float_description'); ?>
				<?php echo print_resource('919', 'basic', 'float_description'); ?><br />

			</ul>

			 <h3>Suggested titles</h4>
				<div class="margin15-left">
					<div class="ltfl_bookdisplay_widget" id="ltfl_widget_ult_3303206214"></div></p>
				</div>

			 <p class="padding-top:0"><a href="http://en.wikipedia.org/wiki/List_of_Dewey_Decimal_classes" target="_blank">Dewey Decimal Classification System</a></p>

			  <h3>Library of Congress Subject Headings ("Topics"):</h3>
				<ul>
				  <li><a href="https://i-share.carli.illinois.edu/onu/cgi-bin/Pwebrecon.cgi?Search_Arg=chemistry&amp;SL=None&amp;Search_Code=SUBJ_&amp;CNT=20&amp;DB=local" target="_blank">Chemistry</a></li>
				  <li><a href="https://i-share.carli.illinois.edu/onu/cgi-bin/Pwebrecon.cgi?Search_Arg=biochemistry&amp;SL=None&amp;Search_Code=SUBJ_&amp;CNT=20&amp;DB=local" target="_blank">Biochemistry</a></li>
				  <li><a href="https://i-share.carli.illinois.edu/onu/cgi-bin/Pwebrecon.cgi?Search_Arg=nanotechnology&amp;SL=None&amp;Search_Code=SUBJ_&amp;CNT=20&amp;DB=local" target="_blank">Nanotechnology</a></li>
				  <li><a href="https://i-share.carli.illinois.edu/onu/cgi-bin/Pwebrecon.cgi?Search_Arg=geochemistry&amp;SL=None&amp;Search_Code=SUBJ_&amp;CNT=20&amp;DB=local" target="_blank">Geochemistry</a></li>
				  <li><a href="https://i-share.carli.illinois.edu/onu/cgi-bin/Pwebrecon.cgi?Search_Arg=environmental%2Bscience&amp;SL=None&amp;Search_Code=SUBJ_&amp;CNT=20&amp;DB=local" target="_blank">Environmental Science</a></li>
				</ul>


			  <h3>Browse these call ranges: </h3>
				<ul>
				  <li>540 Chemistry &amp; allied sciences </li>
				  <li>541 Physical &amp; theoretical chemistry </li>
				  <li>543 Analytical chemistry </li>
				  <li>546 Inorganic chemistry </li>
				  <li>547 Organic chemistry </li>
				  <li>548 Crystallography </li>
				  <li>615 Pharmacology &amp; theraputics </li>
				  <li>660 Chemical engineering</li>
				  <li> 661 Industrial chemicals technology</li>
				  <li>667 Cleaning, color, related technologies </li>
				</ul>

				<p>Search for ebooks in <?php echo print_resource('693', 'basic', 'no_description', 'no-li'); ?>.  You may print 5 pages at once, up to 40 pages per browser session. Create a username and password in order to highlight text and save books to your virtual book shelf.</p>

			<h3>Chemical Reviews</h3>
				<ul class="link-list irs">
					<?php echo print_resource('617', 'basic', 'float_description'); ?> Limit your search to the journal title "Chemical Reviews"
				</ul>

				<p>Want to get your hands on articles referenced in ACS journals? Try the ACS journal search first, then use Summon or <a href="#Help">InterLibrary Loan</a></p>

            <h3><a name="1st" id="1st"></a>Primary Sources</h3>
                <ul class="link-list irs">
				   <?php echo print_resource('617', 'basic', 'float_description'); ?>
				   <?php echo print_resource('616', 'basic', 'float_description'); ?>
				   <?php echo print_resource('649', 'basic', 'float_description'); ?>
				</ul>

				<ul class="link-list irs">
				<?php echo print_resource('910', 'basic', 'no_description'); ?>
				</ul>

				<p>Use the Summon search box at the top of this page in order to check all of our databases at once!</p>

            <h3>STN Easy (<em>Chemical Abstracts</em> online)</h3>
                  <ul>
                    <li><a href="http://stneasy.cas.org/html/english/login1.html?service=STN" target="_blank">Connect to STN Easy</a>: Log in using the password from the Chemistry Research Assistant</li>
					<li>Fill out <a id="pdf" href="/subject-guides/chemistry/chem495/docs/stn_easy_request_sheet.pdf">this form</a> before your training session with Chesley [cmrowlett]</li>
					<li>STN Search <a id="pdf" href="/subject-guides/chemistry/chem495/docs/public_stn_instructions.pdf">Instructions</a></li>
                  </ul>

			<h3>Getting articles</h3>
				<ol>
                    <li>Check Journal Search to see if we have print or full text for the article you want in one of our library databases</li>
					<li>Check Google Scholar to see if a free version is available online.  DON’T PAY for an article!</li>
					<li>Use the Interlibrary Loan form to make a request for articles</li>
                  </ol>


			<h3><a name="Help" id="Help"></a>Help</h3>
				<h4>Interlibrary Loan</h3>
                  <ul class="link-list irs">
                    Check <?php echo print_resource('963', 'basic', 'float_description'); ?> options</ul>

                <p>Check Summon and Google Scholar first.  If you can’t find the fulltext, use <a href="http://library.olivet.edu/forms/interlibrary-loan-request/index.php" target="_blank">Interlibrary Loan</a> to make a request for articles from journals that ONU doesn't own. Provide your name, email, and complete citation</p>





<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
