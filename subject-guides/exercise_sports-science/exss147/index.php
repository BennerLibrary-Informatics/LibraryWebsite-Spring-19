<?php
   $page_title = "EXSS 110 & 147 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
  $reviewedDate = "";
  $creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="06/13/2011";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="09/21/2018";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">EXSS 110: Introduction to Exercise Science/
EXSS 147: Introduction to Athletic Training</h2>

	<p align="center">
		<a href="#tutorial">Tutorial: How to Read Scholarly Articles</a> |
		<a href="#journals">Suggested Journals</a> | <a href="#databases">Article databases</a>
	</p>

	<h3>Consider:</h3>
		<ul>
			<li><a href="https://youtu.be/ki1Ca1VMmx8" target="_blank">Research defined: What is a research article?</a></li>
			<li><a href="https://youtu.be/rOCQZ7QnoN0" target="_blank">Peer Reviewed Articles</a></li>
		</ul>

	<h3><a name="tutorial" id="tutorial"></a>How to Read Scholarly Articles </h3>
		<p class="title-font">Sections of a paper:
		</p>

		<ul>
			<li>Abstract</li>
			<li><a href="http://biology.kenyon.edu/Bio_InfoLit/hypothesis/index.html" target="_blank">Introduction</a></li>
			<li><a href="http://biology.kenyon.edu/Bio_InfoLit/methods/index.html" target="_blank">Methodology</a></li>
			<li><a href="http://biology.kenyon.edu/Bio_InfoLit/results/index.html" target="_blank">Results</a></li>
			<li>Discussion</li>
		</ul>

    <p>
      <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5969203/" target="_blank">Athletic training article</a> |
      <a href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC5861462/" target="_blank">Exercise science article</a>
    </p>

	<a name="journals" id="journals"></a>
	<p id="pdf" class="title-font"><a href="/subject-guides/exercise_sports-science/exss147/img/exss110journal_list.pdf">Suggested journals: EXSS 110 <img src="/img/get-pdf.png" /></a></p>
	<p id="pdf" class="title-font"><a href="/subject-guides/exercise_sports-science/exss147/img/EXSS_147journal_list.pdf">Suggested journals: EXSS 147 <img src="/img/get-pdf.png" /></a></p>

	<h3 align="left"><a name="databases" id="databases"></a>Background sources</h3>

	<ul class="link-list irs">
		<?php echo print_resource('608', 'basic', 'float_description'); ?>
		<?php echo print_resource('713', 'basic', 'float_description'); ?>
	</ul>

	<h3 align="left"><a name="databases" id="databases"></a>Article databases</h3>

	<ul class="link-list irs">
		<?php echo print_resource('756', 'basic', 'float_description'); ?>
		<?php echo print_resource('564', 'basic', 'float_description'); ?>: Olivet’s most-used article database.  Contains a mix of popular and scholarly articles on a variety of topics.
	</ul>

	<p><a href="/help/citation/apa/index.php" >APA Help</a></p>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
