<?php
   $page_title = "COMM 305 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="";		//This ID is from the help_email ie 10
	$updaterID ="5";		//This ID is from the help_email ie 10
	$createdDate ="10/10/2014";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">COMM 305: Professional Communication</h2>

	<h3>Recommended databases for finding credible popular sources</h3>
		<ul class="link-list irs">
      <?php echo print_resource('832', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('564', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('634', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('709', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('707', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('591', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('733', 'basic', 'float_description', 'tutorial'); ?>
		</ul>

	<h3>Recommended sources for Speech on a Speech (SOS) assignment</h3>
		<div class=margin30-left>
			<h5>Biographies</h5>
				<p><a href="/subject-guides/biography/index.php">Biography Subject Guide</a></p>
			<h5>Multimedia sources</h5>
				<ul class="link-list irs">
          <?php echo print_resource('720', 'basic', 'float_description', 'tutorial'); ?>
				</ul>
			<h5>Newspapers (primary sources)</h5>
				<ul class="link-list irs">
          <?php echo print_resource('705', 'basic', 'float_description', 'tutorial'); ?>
					<?php echo print_resource('718', 'basic', 'float_description', 'tutorial'); ?>
					<?php echo print_resource('734', 'basic', 'float_description', 'tutorial'); ?>
				</ul>
				<p>
					Also see list of Recommended databases for credible popular sources (above)
				</p>

			<h5>PBS sites recommended by Prof. Patrick-Trippel</h5>
				<p><?php echo print_bookmark('224', 'under_description', 'tab', 'no', 'no'); ?>
					<small>
					Powered By <img align="absmiddle" src="/img/dcod.png" />
					</small>
				</p>

			<h5>Other sources</h5>
				<ul>
					<li><em>American orators before 1900: Critical Studies & sources</em> Call number: R 815.009 Am35d (first-floor)</li>
					<li><em>Verbal style and the presidency: a computer-based analysis</em> Call number: 815.01 H251v  (third-floor | includes analysis of speeches by Presidents Truman, Ford, Carter, Reagan)</li>
					<li><em>History and criticism of American public address (Vol. 1-4)</em> Call number: 815.09 Sp32h-r (third-floor)</li>

					<li>[FREE] <a href="https://www.theguardian.com/theguardian/series/greatspeeches" target="_blank">Great Speeches of the twentieth Century</a> (the Guardian)</li>
				</ul>

				<ul class="link-list irs">
					<?php echo print_resource('691', 'basic', 'float_description', 'tutorial'); ?>
				</ul>
			<h5>Catalogs</h5>
				<p>Tip: search for “suffrage” or other keywords associated with your person of interest</p>
				<ul class="link-list irs">
					<?php echo print_resource('967', 'basic', 'float_description', 'tutorial'); ?>
					<?php echo print_resource('919', 'basic', 'float_description', 'tutorial'); ?>
					<?php echo print_resource('763', 'basic', 'float_description', 'tutorial'); ?>
				</ul>

		</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
