<?php
   $page_title = "LIT 318: Shakespeare - Benner Library";
    $body_class = "";
    $body_id = "";
    $css = "";
    $js = "";
	$reviewerID = "";
  $reviewedDate = "";
  $creatorID =""; //This ID is from the help_email ie 10
	$updaterID ="5"; //This ID is from the help_email ie 10
	$createdDate =""; //The date entered here shows up ie 3/2/2015
	$updatedDate ="8/1/2018"; //The date entered here shows up ie 3/2/2015
	$dateAdded =""; //The date entered here shows up ie 3/2/2015
	$dateRemoved =""; //The date entered here shows up ie 3/2/2015
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->
<h2 class="header-line">LIT 318: Shakespeare</h2>

	<p>
		In class handouts:<br />
		<a id="pdf" href="/subject-guides/literature/lit318/docs/reference-sources.pdf" target="_blank">Suggested reference sources at Benner</a> &amp;<br />
		<a id="pdf" href="/subject-guides/literature/lit318/docs/tips_library-catalog.pdf" target="_blank">Search tips for BLISweb &amp; Literature Online</a>
	</p>

	<h3>Finding books in online catalogs</h3>

		<ul class="link-list irs">
		<?php echo print_resource('967', 'basic', 'no_proxy'); ?>
		<?php echo print_resource('919', 'basic', 'no_proxy'); ?>
		</ul>

		<p>Do a Subject search for “Shakespeare AND_____”   Or, after doing a keyword search, narrow your results using the “topics” on the right side of the screen (see images on in-class handout)
		<br /><br />

		<a id="pdf" href="/subject-guides/literature/lit318/docs/shakespeare-ddc.pdf" target="_blank">Finding Shakespeare using the Dewey Decimal System</a><br />
		<a id="pdf" href="/subject-guides/literature/lit318/docs/shakespearean_criticism.pdf" target="_blank">How to use the Shakespearean Criticism</a>
		</p>

		<h3>Finding reference citations</h3>

		<div class="padding15-left">
			<a href="http://www.galenet.com/servlet/LitIndex" target="_blank">Literary Index</a> - This free database is “a master index to author and title listings from over <a href="http://www.galenet.com/servlet/LitIndex/litindex5.htm?l=h" target="_blank">130 literature products</a> from Gale and the imprints Charles Scribner's Sons, St. James Press, and Twayne Publishers [including Shakespearean Criticism]….The referenced products themselves [are typically print books found in library reference collections and] will contain complete biographies on authors and critical essays on their writings.”  Of all of the Gale books in this free online index, Benner only owns these titles:<br /><br />
			Exploring Poetry: 821.08 R727e (3rd floor)<br /><br />
			Shakespearean Criticism: 822.33 DC679s (3rd floor)<br /><br />
			<a href="http://www.galenet.com/servlet/LitIndex/form?l=1&amp;u=LI&amp;o=DocT..." target="_blank">Author Search</a><br /><br />
			<a href="http://www.galenet.com/servlet/LitIndex/form?l=2&amp;u=LI&amp;o=DocT..." target="_blank">Title Search</a><br /><br />
		</div>


		<h3>Finding Scholarly Articles</h3>

		<ul class="link-list irs">
			<?php echo print_resource('564', 'basic', 'float_description'); ?>
			<?php echo print_resource('1172', 'basic', 'float_description'); ?>
			<?php echo print_resource('550', 'basic', 'float_description'); ?>
			<?php echo print_resource('578', 'basic', 'float_description'); ?>
			<?php echo print_resource('963', 'basic', 'float_description'); ?>
		</ul>

            <h3>Helpful Links</h3>

		<div class="padding15-left">
			<a href="http://www.shakespeare-online.com/sonnets/sonnetanalyze.html" target="_blank">How to Analyze a Shakespearean Sonnet</a><br /><br />
			<a href="http://www.opensourceshakespeare.org/views/plays/plays.php" target="_blank">Complete list of Shakespeare’s plays</a> (Open Source Shakespeare at George Mason University)<br /><br />
			<a id="pdf" href="http://www.longwoodshakespeare.net/shakespeare/topics.pdf" target="_blank">Suggestions for Writing About Shakespeare</a><br /><br />
			<a href="http://globalshakespeares.mit.edu/#" target="_blank">MIT Global Shakespeares: video & performance archive </a><br />
			<a href="https://library.biblioboard.com/search-results/queryType=ANY&g=shakespeare" target="_blank">BiblioBoard</a>
		</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
