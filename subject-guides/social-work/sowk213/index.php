<?php
   $page_title = "SOWK 213 & 214 Human Behavior in the Social Env. I & II - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
  $reviewedDate = "";
  $creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="08/02/2018";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">SOWK 213 &amp; 214:<br />Human Behavior in the Social Env. I &amp; II</h2>

	<p align="center">
		<a href="#online">eJournals</a> |
		<a href="#govtinfo">Websites</a> |
		<a href="#books">Books</a><br />
		<a id="pdf" href="/subject-guides/social-work/doc/policy.pdf">Policy 101 <img src="/img/get-pdf.png" /></a>
	</p>

	<p></p>

	<a name="online" id="online"></a>
	<h3>eJournals</h3>
		<p>
			<a href="https://login.proxy.olivet.edu/login?url=https://gg9fg7cr5h.search.serialssolutions.com/?V=1.0&L=GG9FG7CR5H&S=SC&C=GO&SS_searchTypeAll=yes&SS_searchTypeBook=yes&SS_searchTypeJournal=yes&SS_searchTypeOther=yes" target="_blank">Law, Politics &amp; Government</a> <br />
			<a href="https://login.proxy.olivet.edu/login?url=https://gg9fg7cr5h.search.serialssolutions.com/?V=1.0&L=GG9FG7CR5H&S=SC&C=SO&SS_searchTypeAll=yes&SS_searchTypeBook=yes&SS_searchTypeJournal=yes&SS_searchTypeOther=yes&SS_searchTypeAll=yes&SS_searchTypeBook=yes&SS_searchTypeJournal=yes&SS_searchTypeOther=yes" target="_blank">Social Sciences</a><br />
		</p>
	<h3 style="margin-bottom:0">Article databases (use to identify article citations and find  full-text):</h3>

	<table width="100%" border="1">
		<tr>
			<th>Research &amp; News</th>
			<th>Database</th>
		</tr>

		 <tr valign="top">
			<td><strong>News &amp; Research</strong></td>
			<td height="63"><?php echo print_resource('564', 'basic', 'no_description', 'tutorial', 'no-li'); ?> Fulltext of news articles and radio transcripts.</td>
		</tr>

		<tr valign="top">
			<td><strong>Research</strong></td>
			<td><?php echo print_resource('649', 'basic', 'no_description', 'tutorial', 'no-li'); ?> Full-text articles of 850+ journals, including the social sciences. </td>
		</tr>

		<tr valign="top">
			<td><strong>Research</strong></td>
			<td><?php echo print_resource('747', 'basic', 'no_description', 'tutorial', 'no-li'); ?><strong> Full-text articles</strong> in general and specialized psychology.</td>
		</tr>

		<tr valign="top">
			<td><strong>Research</strong></td>
			<td><?php echo print_resource('676', 'basic', 'no_description', 'tutorial', 'no-li'); ?> Comprehensive coverage of sociology, encompassing all sub-disciplines and closely related areas of study. These include abortion, criminology &amp; criminal justice, demography, ethnic &amp; racial studies, gender studies, marriage &amp; family, political sociology, religion, rural &amp; urban sociology, social development, social psychology, social structure, social work, socio-cultural anthropology, sociological history, sociological research, sociological theory, substance abuse and other addictions, and violence. </td>
		</tr>
	</table>

	<a name="govtinfo" id="govtinfo"></a>

	<h3>Recommended Websites</h3>

	<h5>National Research and Policy Organizations</h5>
		<ul>
		  <li><a href="http://www.nsclc.org/" target="_blank">National Senior Citizens Law Center</a></li>
		  <li><a href="http://www.hhs.gov/" target="_blank">Department of Health and Human Services</a></li>
		</ul>

	<h5>General Statistical Data</h5>
		<ul>
		  <li><a href="https://www.census.gov/topics/income-poverty/poverty.html" target="_blank">Poverty Statistics at the Census Bureau</a></li>
		  <li><a href="http://www.census.gov/compendia/statab/cats/income_expenditures_poverty_wealth/poverty.html" target="_blank">Statistical Abstract of the U.S. -- Poverty</a></li>
		  <li><a href="https://www.usa.gov/statistics" target="_blank">Federal Statistics</a>: The gateway to statistics from over 100 U.S. Federal agencies</li>
		</ul>


	<h5> Policy Analysis and Evaluation</h5>
		<ul>
		  <li><a href="http://www.ahcpr.gov/" target="_blank">Agency for Health Care Research and Quality</a></li>
		  <li><a href="http://www.aspe.hhs.gov/population/" target="_blank">Dept of Health and Human Services - Studies by Population</a></li>
		</ul>

	<h5> Legislative Information and Updates</h5>
		<ul>
		  <li><a href="http://www.cwla.org/" target="_blank">Child Welfare League of America</a> (Child Abuse)</li>
		  <li> <a href="http://www.acf.hhs.gov/" target="_blank">Administration for Children and Families</a></li>
		  <li> <a href="http://www.thomas.gov/" target="_blank">Thomas</a> (Library of Congress)</li>
		</ul>



	<a name="books" id="books"></a>
	<h2>Books </h2>

	<div class="padding35-left">
	<a id="pdf" href="/subject-guides/social-work/sowk213/doc/ddc_social-work.pdf">Dewey Decimal Call Numbers for Social Work <img src="/img/get-pdf.png" /></a>
<br /><br />

	<strong>Find more:</strong>
	<ol>
	<li>Search <?php echo print_resource('967', 'basic', 'no_description', 'tutorial'); ?>: (Olivet's catalog) or
	<?php echo print_resource('919', 'basic', 'no_description', 'tutorial'); ?>: (90+ academic libraries in Illinois) </li>
	<li>Use the "subject" tab to search for these subject headings:
	  <ul>
		<li>African American Families.</li>
		<li>Family services--United States.</li>
		<li> Family social work--United States.</li>
		<li> Multiculturalism--United States.</li>
	  </ul>
	</li>
	</ol>
	</div>




<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
