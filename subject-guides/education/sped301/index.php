<?php
   $page_title = "SPED 301 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="3/13/2015";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">SPED 301 Trends in History Assignment </h2>

<h4>Assignment Description:</h4>
<p>Select a special education journal (i.e. <em>Exceptional Children</em>, <em>Teaching Exceptional Children</em>, <em>Journal of Learning Disabilities</em>, <em>Behavioral Disorders, Intellectual and Developmental Disabilities</em>,  <em>Journal of Autism and Developmental Disorders</em>), and find articles within this journal from three different decades (i.e. the 1960s, 1970s, 1980s, 1990s,  2000s, or 2010s) related to Special Education.  The topic may be related to instructional styles of learners with disabilities or diagnosis of learners with disabilities, or any topic that is of interest to you. The written reflection should be between two to three pages.<br /><br />

Provide a brief summary of each article (no more than 200 words per article). <br />
In addition to the summaries, write about the differences you note in the articles, including trends in special education that are reflected in the articles. Consider: <em>What are the underlying causes of these trends? Do these trends reflect positive changes in the special education profession?</em><br /><br />

<a id="pdf" href="/subject-guides/education/sped301/docs/journals.pdf" target="_blank">Recommended Journals <img src="/img/get-pdf.png" /></a></li>
</p>

	<h4>Suggested Databases</h4>
		<ul class="link-list irs">
			<?php echo print_resource('564', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('690', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('697', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('910', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('591', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('626', 'basic', 'float_description', 'tutorial'); ?>
		</ul>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
