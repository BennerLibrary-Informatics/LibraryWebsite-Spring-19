<?php
  $page_title = "THEO 421/621: Theology of the Church Fathers - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
  $reviewedDate = "08/02/2018";
  $creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="10/7/2016";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="10/20/2016";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">THEO 421/621: Theology of the Church Fathers</h2>

	<p>
		<a id="pdf" href="/subject-guides/religion/theology/theo421-621/docs/theo421_list1.pdf" target="_blank">Useful Primary texts (book series) </a>
		<a id="pdf" href="/subject-guides/religion/theology/theo421-621/docs/theo421_list1.pdf" target="_blank"><img src="/img/get-pdf.png" /></a><br /><br />

		<a id="pdf" href="/subject-guides/religion/theology/theo421-621/docs/theo421_list2.pdf" target="_blank">Useful Secondary texts (book series) </a>
		<a id="pdf" href="/subject-guides/religion/theology/theo421-621/docs/theo421_list2.pdf" target="_blank"><img src="/img/get-pdf.png" /></a><br /><br />

		<a id="pdf" href="/subject-guides/religion/theology/theo421-621/docs/theo421_list3.pdf" target="_blank">Standard Journals </a>
		<a id="pdf" href="/subject-guides/religion/theology/theo421-621/docs/theo421_list3.pdf" target="_blank"><img src="/img/get-pdf.png" /></a><br /><br />

	</p>

	<h3>Useful websites </h3>
			<p>
				<?php echo print_bookmark('226', 'under_description', 'tab', 'no'); ?>
				<small>
					Powered By <img align="absmiddle" src="/img/dcod.png" />
				</small>
			</p>

	<h3>Library Databases</h3>
		<ul>
			<?php echo print_resource('564', 'basic', 'no_description', 'tutorial'); ?>
			<?php echo print_resource('592', 'basic', 'no_description', 'tutorial'); ?>
			<?php echo print_resource('711', 'basic', 'no_description', 'tutorial'); ?>
			<?php echo print_resource('919', 'basic', 'no_description', 'tutorial'); ?>
			<?php echo print_resource('578', 'basic', 'no_description', 'tutorial'); ?>
		 </ul>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
