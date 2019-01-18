<?php
   $page_title = "HIST379 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5"; //This ID is from the help_email ie 10
	$updaterID =""; //This ID is from the help_email ie 10
	$createdDate ="1/10/2019"; //The date entered here shows up ie 3/2/2015
	$updatedDate =""; //The date entered here shows up ie 3/2/2015
	$dateAdded =""; //The date entered here shows up ie 3/2/2015
	$dateRemoved =""; //The date entered here shows up ie 3/2/2015
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->
<h2 class="header-line">HIST/PSCI 379: Dev. World: Latin America</h2>
<h3>Books</h3>
	<p>
		Search for books in the <?php echo print_resource('967', 'basic', 'no_description', 'tutorial', 'no-li'); ?></a><br /><br />
    <a href="https://library.olivet.edu/help/find-books/illinois-catalog.php" target="_blank">Make an account</a> to borrow <?php echo print_resource('919', 'basic', 'no_description', 'tutorial', 'no-li'); ?></a> books
	</p>

	<h3>Latin American country background</h3>
		<ul>
			<li><a href="https://www.state.gov/p/wha/ci/index.htm" target="_blank">Western Hemisphere Affairs: U.S. Relations </a> from the US Department of State</li>
			<li><a href="https://www.cia.gov/library/publications/resources/the-world-factbook/rankorder/rankorderguide.html" target="_blank">World Factbook Guide to Country Comparisions</a> by the CIA</li>
			<li><a href="http://libguides.northwestern.edu/ForeignGovernmentList" target="_blank">Official websites of national governments</a> list compiled by Northwestern University Libraries</li>
			<?php echo print_resource('635', 'basic', 'no_description', 'break'); ?>
			<?php echo print_resource('1258', 'basic', 'no_description', 'tutorial'); ?>
      <?php echo print_resource('608', 'basic', 'no_description', 'tutorial'); ?>
      <?php echo print_resource('713', 'basic', 'no_description', 'tutorial'); ?>
		</ul>

		<h3>Geography</h3>
		<ul>
			<li>List of <a href="http://www.firstgov.gov/Topics/Maps.shtml#world" target="_blank">world map sites</a> produced by US Gov.</li>
			<?php echo print_resource('598', 'basic', 'no_description', 'break'); ?>
		</ul>

	<h3>Article & Statistics Databases</h3>
		<ul>
			<?php echo print_resource('564', 'basic', 'no_description', 'tutorial'); ?>: Partially full text periodical database
			<?php echo print_resource('704', 'basic', 'no_description', 'tutorial'); ?>
			<?php echo print_resource('633', 'basic', 'no_description', 'tutorial'); ?>
			<?php echo print_resource('654', 'basic', 'no_description', 'tutorial'); ?>
      <?php echo print_resource('578', 'basic', 'no_description', 'tutorial'); ?>
      <?php echo print_resource('734', 'basic', 'no_description', 'tutorial'); ?>: EBSCO full text newspaper sources
			<?php echo print_resource('611', 'basic', 'no_description', 'tutorial'); ?>
      <?php echo print_resource('569', 'basic', 'no_description', 'break'); ?>
		</ul>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
