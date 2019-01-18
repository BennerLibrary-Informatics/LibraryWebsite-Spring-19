<?php
   $page_title = "Refine Topic/Take a Position - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$creatorNotes = ""; // this note will print before created date
	$createdDate ="6/25/2015";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="7/24/2018";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">Refine Topic/Take a Position</h2>

<div class="split l30-r70 cf margin15-left">
		<div class="left">
			<img src="/subject-guides/english/college-writing-ii/img/refine_topic_graphic.png" />
		</div>

		<div class="right">
			<br />
			<h4><a href="/subject-guides/english/college-writing-ii/refine_topic/locate_scholarly_sources.php"><strong>Locate</strong> scholarly sources</a></h4><br />
			<h4><a href="/subject-guides/english/college-writing-ii/refine_topic/writing_tips.php">Writing Tips</a></h4><br />
			<h4><a href="/subject-guides/english/college-writing-ii/refine_topic/evaluate_and_categorize/index.php"><strong>Evaluate</strong> &amp; categorize</a></h4><br />

		</div>
	</div>

<br />

<div class="margin10-left margin10-right border-double color-light-grey fcolor-grey">
<a name="books"></a>
	<h4>Books: may provide context or in-depth analysis</h4>
		<ul>
			<li>Search a collection of eReference books, e.g. <?php echo print_resource('608', 'basic', 'float_description', 'no-li'); ?> or <?php echo print_resource('713', 'basic', 'float_description', 'no-li'); ?>.</li>
			<li>Search in <?php echo print_resource('967', 'basic', 'float_description', 'no-li'); ?>, along with one or two words describing your topic, use these keywords “encyclopedia OR dictionary” | <a href="/help/find-books/index.php">How-to-videos</a></li>
			<li><a href="/books-media/ebook-collections/index.php">eBook Collection Subject Guide</a></li>
			<li>Our books are organized according to the <a href="/subject-guides/english/college-writing-ii/research_concepts/dewey-decimal-system.php">Dewey Decimal System</a>.</li>
			<li>If you can't find what you need in Benner Library's collection, search more broadly:  <?php echo print_resource('919', 'basic', 'float_description', 'no-li'); ?> |  <?php echo print_resource('763', 'basic', 'float_description', 'no-li'); ?> </li>
		</ul>
</div>

<br />

<div class="margin10-left margin10-right border-double color-light-grey fcolor-grey">
<a name="research"></a>
		<h4>Research articles: provide in-depth analysis</h4>
		<ul>
			<li>Go to the correct <a href="/subject-guides/index.php">subject guide</a> and choose from the recommended databases</li>
			<li>If you already know which one you want, choose a database directly from the <a href="/journals-articles/eresources_a-z.php">eResources A-Z</a>.</li>
			<li>Need help?
				<ul>
					<li><a href="/help/find-articles/index.php">How-to-videos</a></li>
					<li>Get personal suggestions from a <a href="/contact/ask-a-librarian.php">librarian</a>.</li>
				</ul>
			<li>Clarify the <a href="http://libguides.tru.ca/academicarticletypes">kind of articles</a> your professor wants you to find.  APA students need research articles as their primary source.</li>
			<li>Stay organized</li>
				<ul>
					<li><a href="/help/find-articles/using_purls.php">Using PURLS</a></li>
					<li>Create an account in a library database (how-to-videos)</li>
						<ul>
						<li><a href="https://www.youtube.com/watch?v=uxaOgBLKH04" target="_blank">EBSCO</a></li>
						<li><a href="https://www.youtube.com/watch?v=vACzvMeYdg0" target="_blank">Proquest</a></li>
						</ul>
				</ul>
		</ul>
</div>

		<h4>For APA Students</h4>
		<div class="split l10-r90 margin10-left cf">
			<div class="left ">
				<img width="90" src="/subject-guides/english/college-writing-ii/img/beaker_apa.png" />
			</div>

			<div class="right">
				<ul>
					<li><a id="pdf" href="/subject-guides/good-places-to-start/docs/apa_database_recommendations.pdf">APA Database Recommendations</a> <img src="/img/get-pdf.png" /></li>

				</ul>
			</div>
		</div>

		<h4>For MLA Students</h4>
		<div class="split l10-r90 margin10-left cf">
			<div class="left ">
				<img width="90" src="/subject-guides/english/college-writing-ii/img/music_note_mla.png" />
			</div>

			<div class="right">
				<ul>
					<li>Use the <a href="/subject-guides/book-reviews/index.php">Book Reviews</a> subject guide</li>
					<li>Find <a href="/subject-guides/news/index.php">newspaper articles</a> online</li>
					<li><a id="pdf" href="/subject-guides/good-places-to-start/docs/mla_database_recommendations.pdf">MLA Database Recommendations<img src="/img/get-pdf.png" /></a></li>
				</ul>
			</div>
		</div>

		<h4>For CMS Students</h4>
		<div class="split l10-r90 margin10-left cf">
			<div class="left ">
				<img width="90" src="/subject-guides/english/college-writing-ii/img/cross_cms.png" />
			</div>

			<div class="right">
				<ul>
					<li><a href="/subject-guides/primary-sources/index.php">Primary Sources Subject Guides</a></li>
					<li><a id="pdf" href="/subject-guides/good-places-to-start/docs/chicago_database_recommendations.pdf">Chicago Database Recommendations <img src="/img/get-pdf.png" /></a></li>
				</ul>
			</div>
		</div>

    <h4>For CSE Students</h4>
    <div class="split l10-r90 margin10-left cf">
      <div class="left ">
        <img width="90" src="/subject-guides/english/college-writing-ii/img/beaker_cse.png" />
      </div>

      <div class="right">
        <ul>
          <li><a id="pdf" href="/subject-guides/good-places-to-start/docs/cse_database_recommendations.pdf">Council of Science Editors Database recommendations</a> <img src="/img/get-pdf.png" /></li>
        </ul>
      </div>
    </div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
