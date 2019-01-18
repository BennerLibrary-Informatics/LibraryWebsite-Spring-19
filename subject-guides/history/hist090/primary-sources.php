<?php
   $page_title = "HIST090 - Benner Library";
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
<h2 align="center" class="header-line" style="margin-bottom:0">HIST090: Historiography Lab</h2>
    <p align="center" style="margin-top:0">
	<a href="/subject-guides/history/hist090/index.php">Home</a> |
	<a href="/subject-guides/history/hist090/research-strategies.php">Research Strategies</a> |
	<a href="/subject-guides/history/hist090/secondary-sources.php">Secondary Sources</a> |
	<a href="/subject-guides/history/hist090/primary-sources.php">Primary Sources</a>
	</p>
<h3>Research Strategies</h3>
	<p align="center"><a href="#free">Free online collections</a> |
		<a href="#readersGuide">Print Indexes</a> |
		<a href="#2">Subscription Resources</a> |<br />
		<a href="#4">Government documents</a> |
		<a href="#archives">Archives</a> | <a href="#4"></a><a href="#5">Regional libraries, archives, museums</a>
	</p>

	<h5><a name="free" id="free"></a>Search Engines & Directories</h5>
	<div class="padding15-left">
		<?php echo print_bookmark('151', 'under_description', 'tab', 'no'); ?>
	</div>

	<h5><a name="free" id="free"></a>Selected Free Online Collections</h5>
	<div class="padding15-left">
	<?php echo print_bookmark('152', 'under_description', 'tab', 'no'); ?>
	</div>

	<h5><a name="readersGuide" id="readersGuide"></a>Maps</h5>
	<div class="padding15-left">
	<?php echo print_bookmark('153', 'under_description', 'tab', 'no'); ?>
	</div>

	<h5><a name="readersGuide" id="readersGuide"></a>Print Indexes</h5>
	<div class="padding15-left">
	<?php echo print_bookmark('154', 'under_description', 'tab', 'no'); ?>
	</div>

	<h5>Fulltext options</h5>
		<ul class="link-list irs">
			<?php echo print_resource('963', 'basic', 'float_description', 'break'); ?>
		</ul>
		<p>Can't find the article you're looking for?  Use the <a href="/forms/interlibrary-loan-request/index.php">ILL form</a>.</p>


	<h5><a name="2" id="2"></a>Subscription Resources</h5>
		<ul class="link-list irs">
			<?php echo print_resource('597', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('966', 'basic', 'float_description', 'tutorial'); ?>
		</ul>


	<h5><a name="2" id="2"></a>Law Resources</h5>
		<ul class="link-list irs">
			<?php echo print_resource('611', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('1226', 'basic', 'float_description', 'tutorial'); ?>
		</ul>

	<h5><a name="2" id="2"></a>Newspaper Sources</h5>
		<ul class="link-list irs">
			<?php echo print_resource('709', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('718', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('816', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('733', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('734', 'basic', 'float_description', 'tutorial'); ?>
		</ul>

	<h5><a name="4" id="4"></a>Government documents</h5>
		<p>Need Help? Connect to : <a href="http://govtinfo.org/" target="_blank">Government Information Online (GIO) chat</a> - A cooperative virtual reference and information service that specializes in answering questions about government information</p>

		<p>Explanation of <a href="http://www.gl.iit.edu/govdocs/sudoc.html" target="_blank">SuDoc classification system</a> - &quot;The Federal Depository Library Program (FDLP) was established by Congress to ensure that the American public has access to its Government's information. Since 1813, depository libraries have safeguarded the public's right to know by collecting, organizing, maintaining, preserving, and assisting users with information from the Federal Government. The FDLP provides Government information at no cost to designated depository libraries throughout the country and territories. These depository libraries, in turn, provide local, no-fee access to Government information in an impartial environment with professional assistance&quot;(from, <a href="http://www.access.gpo.gov/su_docs/fdlp/about.html" target="_blank">http://www.access.gpo.gov/su_docs/fdlp/about.html</a>).</p>

	<h5>Government databases &amp; websites</h5>
	<div class="padding15-left">
	<?php echo print_bookmark('155', 'under_description', 'tab', 'no'); ?>
	</div>

	<h5>Links to selected agencies: </h5>
	<div class="padding15-left">
	<?php echo print_bookmark('156', 'under_description', 'tab', 'no'); ?>
	</div>

	<h5>Links to other non-U.S. government resources:</h5>
	<div class="padding15-left">
	<?php echo print_bookmark('157', 'under_description', 'tab', 'no'); ?>
	</div>

	<h5><a name="archives" id="archives"></a>Archives</strong></h5>
	<div class="padding15-left">
	<?php echo print_bookmark('158', 'under_description', 'tab', 'no'); ?>
	</div>

	<h5><a name="5" id="5"></a>Regional Libraries, Museums, Archives</h5>
	<h5>Abraham Lincoln Presidential Library</h5>
		<ul>
			<li><a href="http://www.alincolnlibrary.com/library/library.html" target="_blank">Abraham Lincoln Presidential Library</a></li>
			<li>Description of <a href="http://www.alplm.org/library/library_depts.html" target="_blank">library departments</a> and contact information</li>
		</ul>
		<p>Appointments (please make arrangements by telephone) are necessary for research in these collections:<br />
					  Manuscripts: (217) 785-7942<br />
					  Audiovisual: (217) 785-7955<br />
					  Lincoln: (217) 785-7954
		</p>
		<ul>
			<li><img src="/img/star.png" /> <a href="http://hip.rpls.ws/ipac20/ipac.jsp?profile=spisalp#focus" target="_blank">Library catalog</a> (part of Rolling Prairie Library System)</li>
				<ul>
					<li>Choose &quot;Advanced Search&quot;</li>
					<li>Limit location to &quot;<strong>Abraham Lincoln Presidential Library</strong>&quot; </li>
					<li><em>Note: do not limit to &quot;Lincoln Library&quot; </em></li>
				</ul>
			<li>The Reading Room at the Presidential Library contains the personal library of Steve Neal, a political columnist for the<em> Sun Times</em>. Link to <a href="http://flash.uoregon.edu/S04/obits.html" target="_blank">his obituary posted at his alma mater</a>. To read it, scroll down or use Ctrl-F to search for his name. </li>
		</ul>

	<h5>Illinois State Library</h5>
	<div class="padding15-left">
	<?php echo print_bookmark('159', 'under_description', 'tab', 'no'); ?>
	</div>

	<h5>Kankakee County Resources</h5>
	<div class="padding15-left">
	<?php echo print_bookmark('160', 'under_description', 'tab', 'no'); ?>
	</div>

	<h5>University Archives</h5>
		<div class="padding15-left">
		<strong>Website</strong>: ONU <a href="http://bennerlibrary.wordpress.com/" target="_blank">University Archives</a><br />
		<strong>Phone:</strong> (815) 939-5148<br />
		<strong>Hours:</strong> Contact Tina Simmons, University Archivist, to make an appointment.<br /><br />
		</div>
		<p>The content on this site was last updated by <a href="/forms/email/index.php?id=003">Dr. Judson Strain</a>, May 28, 2014.</p>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
