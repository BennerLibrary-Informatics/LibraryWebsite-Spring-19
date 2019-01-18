<?php
   $page_title = "COMM 457 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="5";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="7/16/2018";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">COMM 457: Communication Theory</h2>
	<h4><a name="articles" id="articles"></a>Finding Articles</h4>
	<ul>
		<li><a id="pdf" href="/subject-guides/communication/comm457/doc/journal-list.pdf">Journal List <img src="/img/get-pdf.png" /></a></li>
		<li><?php echo print_resource('963', 'basic', 'no_description', 'no-li'); ?>: Search by title to see if we have the journal in full-text or print</li>
		<li><a href="/forms/email/index.php?id=008" target="_blank">Interlibrary Loan</a> If Olivet doesn't have the journal, make a request</li>
	</ul>

	<p>
	<?php echo print_resource('652', 'basic', 'no_description', 'no-li'); ?> (EBSCO)<br />
	Offers full text for over 200 titles and contains citation coverage for additional sources.<br /><br />

	<?php echo print_resource('564', 'basic', 'no_description', 'tutorial', 'no-li'); ?> (EBSCO)<br />
	Our largest scholarly, <strong>multi-disciplinary</strong> database. Note: I found many &quot;<strong>false-hits&quot; when doing keyword searches</strong>.<br /><br />

	<?php echo print_resource('649', 'basic', 'no_description', 'no-li'); ?><br />
	Includes full-text articles for <em>Communication, Culture &amp; Critique</em> (2008-present) and <em>Communication Theory</em> (1997-present).<br /><br />

	<?php echo print_resource('676', 'basic', 'no_description', 'no-li'); ?>(EBSCO)<br />
	Most comprehensive and highest quality sociology research database. Its extensive scope and content provide users with a wealth of extremely useful information encompassing the broad spectrum of sociological study.&quot; Note: I found <strong>International</strong> publications and <strong>cross-cultural studies</strong>.<br /><br />

	<?php echo print_resource('743', 'basic', 'no_description', 'no-li'); ?><br />
	The Premier database for psychology.<br />
	</p>
	<hr />

	<h4><a name="books" id="books"></a>Finding Books</h4>
		<div class="padding15-left">
			<?php echo print_resource('608', 'basic', 'no_description', 'no-li'); ?><br /><br />
			<?php echo print_resource('713', 'basic', 'no_description', 'tutorial', 'no-li'); ?><br /><br />
			<?php echo print_resource('967', 'basic', 'no_description', 'no-li'); ?>: Olivet's online catalog<br /><br />
			<?php echo print_resource('919', 'basic', 'no_description', 'no-li'); ?>: shared catalog of 85+ libraries in Illinois.<br /><br />
			<?php echo print_resource('763', 'basic', 'no_description', 'no-li'); ?>: Check the holdings or request books from libraries across the U.S. and from other nations
		</div>

		<p>
		Suggested Library of Congress Subject Headings to use when searching in the catalogs above:
			<blockquote>
			Communication in marketing<br />
			Communication in organizations<br />
			Communication-philosophy<br />
			Discourse analysis<br />
			Interpersonal communication<br />
			Mass media<br />
			Narration (Rhetoric)<br />
			</blockquote>
		</p>




<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
