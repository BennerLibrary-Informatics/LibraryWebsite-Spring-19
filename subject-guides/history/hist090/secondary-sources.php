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
<h2>Secondary Sources</h2>
	<div class="padding15-left">
		<h3><a name="IShare" id="IShare"></a>Books</h3>
			<ul class="link-list irs">
				<?php echo print_resource('967', 'basic', 'float_description', 'tutorial'); ?> --Olivet's holdings
				<?php echo print_resource('919', 'basic', 'float_description', 'tutorial'); ?> --Illinois partner libraries
				<?php echo print_resource('763', 'basic', 'float_description', 'tutorial'); ?>
			</ul>

		<h3><a name="ebooks" id="ebooks"></a>eBooks</h3>
			<p><a href="/books-media/ebook-collections/index.php">Benner Library eBook collections</a></p>

			<ul class="link-list irs">
				<?php echo print_resource('714', 'basic', 'float_description', 'break'); ?>
				<?php echo print_resource('693', 'basic', 'float_description', 'break'); ?>
				<?php echo print_resource('608', 'basic', 'float_description', 'break'); ?>
				<?php echo print_resource('750', 'basic', 'float_description', 'break'); ?>
			</ul>

			<p><a href="http://print.google.com" target="_blank">Google Print</a>: Free, book digitization project between Google, selected libraries, and publishers
	</div>

        <h3>Selected Online Reference Collections</h3>
            <ul class="link-list irs">
				<?php echo print_resource('609', 'basic', 'float_description', 'break'); ?>
				<?php echo print_resource('612', 'basic', 'float_description', 'break'); ?>
				<?php echo print_resource('713', 'basic', 'float_description', 'break'); ?>
			</ul>

        <h3>Scholarly Publications</h3>
			<div class="padding15-left">
				<h5><a name="bibliographies" id="bibliographies"></a>Bibliographies</h5>
					<p>&quot;BIBLIOGRAPHY - This term can be used in two ways: (1) References used while doing research for an article or book. These are gathered together at the end of the work, usually arranged alphabetically by author. (2) <strong>A publication that consists only of a list of books, articles and other works on a particular topic. Sometimes bibliographies are annotated; that is, they include brief abstracts summarizing the important features of the works. Bibliographies of both types can be very valuable in locating information on a subject</strong>.&quot; from Auburn University Library.</a></p>

					<p align="left"><a href="http://www.lib.duke.edu/libguide/fi_bibliog.htm" target="_blank">How to find bibliographies</a> (books and article) from Duke Libraries</p>

					<p><img src="/subject-guides/history/hist090/img/bibliographies.jpg" width="719" height="149" /></p>

				<h5>Book reviews</h5>
					<p>Please refer to <a href="/subject-guides/book-reviews/index.php">the Book Reviews Subject Guidepage</a> for links to some online sources and detailed instructions for finding book reviews.</p>

				<h5>Scholarly Article Databases</h3>
					<ul class="link-list irs">
						<?php echo print_resource('673', 'basic', 'float_description', 'break'); ?>
						<?php echo print_resource('691', 'basic', 'float_description', 'break'); ?>
						<?php echo print_resource('1156', 'basic', 'float_description', 'break'); ?>
						<?php echo print_resource('1202', 'basic', 'float_description', 'break'); ?>
						<?php echo print_resource('676', 'basic', 'float_description', 'break'); ?>
						<?php echo print_resource('649', 'basic', 'float_description', 'break'); ?>
					</ul>

				<h5>Free Resources</h5>
					<p><?php echo print_resource('910', 'basic', 'no_description'); ?> - Links to citations/abstracts/fulltext of articles and books. Some resources are free, some are for a fee, some are available through Olivet's <a href="/journals-articles/eresources_a-z.php">subscription databases</a></p>
					<p><a href="http://books.google.com" target="_blank"><strong>Google Books</strong></a></p>

				<h5>Fulltext options</h5>
					<ul class="link-list irs">
						<?php echo print_resource('963', 'basic', 'float_description', 'break'); ?>
					</ul>
					<p>Can't find the article you're looking for?  Use the <a href="/forms/interlibrary-loan-request/index.php">ILL form</a>.</p>
			</div>

		<p>The content on this site was last updated by <a href="/forms/email/index.php?id=003">Dr. Judson Strain</a>, May 28, 2014.</p>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
