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
<h2>Research Strategies</h2>
    <p>Jump to:
		<a href="#tutorials">Introductory tutorials</a> |
		<a href="#classification">Classification systems</a> |
		<a href="#ILL">Interlibrary Loan</a> |
		<a href="#eval">Evaluation criteria</a>
	</p>


	<h3><a name="tutorials" id="tutorials"></a>Tutorial lessons</h3>

		<p><img src="/img/star.png" /> <strong>Before the first lab session, read the following <em>required</em> lessons:</strong></p>
		<ol>
			<li><a href="http://www.lanecc.edu/library/instruction/tutorial/basic/index.html">Keywords and Subject Headings</a> from Lane Community College: Just below the "Lane Community College" header,click on the link for tutorial page number 9. Read and test yourself with the question on the bottom of this page.</li>
			<li><a href="http://lib.colostate.edu/tutorials/boolean.html" target="_blank">Interactive Basic Boolean Tutorial </a>(Colorado State University Libraries) </li>
			<li><a href="http://liblearn.osu.edu/courses/english110/old%20stuff/narrow_topic.ppt" target="_blank">Narrowing a topic</a> <em>brief lesson </em>(Ohio State University)</li>
			<li><a href="http://www2.lib.udel.edu/e110/tutorial2009/researching/researching5.html" target="_blank">Brainstorm keywords</a> <em>brief lesson </em>(University of Delaware)</li>
			<li><a href="http://lib.colostate.edu/tutorials/booleanadv_info.html" target="_blank">Advanced Boolean Operators</a> <em>3-5 minutes</em> (Colorado State University)</li>
		</ol>

	<h3><a name="classification" id="classification"></a>Classification Systems </h3>

		<div class="padding15-left">
			<h5>By appearance:</h5>
				<p>Read the <a href="http://www.npr.org/templates/story/story.php?storyId=4182224" target="_blank">NPR story</a> from November 22, 2004 (click on &quot;view gallery&quot; for pictures) about a book store that allowed its <a href="http://www.mcsweeneys.net/links/events/chriscobb.html" target="_blank">books to be arranged by color</a></p>

			<h5>By author:</h5>
				<p><a name="sudoc" id="sudoc"></a><a href="http://www.gl.iit.edu/govdocs/sudoc.html" target="_blank">Superintendent of Documents Classification System</a> (U.S. government publications)</p>

			<h5>By subject:</h5>
				<p>Dewey Decimal Classification system:<a href="http://www-lib.nearnorth.edu.on.ca/dewey/ddc.htm" target="_blank">division of knowledge by tens</a> (click on a number, e.g. &quot;300&quot; to see divisions by ones, and decimals) </li>
				<p>Library of Congress classification system</strong>
					<ul>
						<li><a href="http://www.loc.gov/catdir/cpso/lcco/lcco.html" target="_blank">21 divisions of knowledge </a> </li>
						<li><a href="http://geography.about.com/library/congress/blhowto.htm" target="_blank">how to read an LC call number </a>(sorry about the ads!)<br />
						<img src="/subject-guides/history/hist090/img/call_numbers.gif" width="568" height="276" /><br />
						Image from, <a href="http://www.lib.washington.edu/uwill/research101/finding05.htm" target="_blank">University of Washington Research 101 tutorial</a> </li>
					</ul>

			<p><a href="http://en.wikipedia.org/wiki/Comparison_of_Dewey_and_Library_of_Congress_subject_classification" target="_blank">Detailed comparison of Dewey and LC CLassification</a> (from Wikipedia)</p>
		</div>


	<h3><a name="ILL" id="ILL"></a>Interlibrary Loan</h3>
		<p>Learn more about ordering from <a href="/departments/interlibrary-loan/index.php">Interlibrary Loan</a></p>

		<div class="padding15">
			<h5><a name="books" id="books"></a>Books</h5>
				<ul class="link-list irs">
					<?php echo print_resource('967', 'basic', 'float_description', 'tutorial'); ?> --Olivet's holdings<br /><br />
					<?php echo print_resource('919', 'basic', 'float_description', 'tutorial'); ?> --Illinois partner libraries
				</ul>

			<h5><a name="ILLarticles" id="ILLarticles"></a>Articles</h3>
			<p>Use built-in ILL options in database or use the <a href="/forms/interlibrary-loan-request/index.php">ILL form</a>.</p>
		</div>



	<h3><a name="eval" id="eval"></a>Evaluation Techniques</h3>

		<p>Web sources: <a href="http://www.lib.berkeley.edu/TeachingLib/Guides/Internet/Evaluate.html" target="_blank">Questions to ask yourself</a> |
				<a href="http://lib.nmsu.edu/instruction/evalcrit.html" target="_blank">brief list of considerations</a></p>

		<p>The content on this site was last updated by <a href="/forms/email/index.php?id=003">Dr. Judson Strain</a>, May 28, 2014.</p>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
