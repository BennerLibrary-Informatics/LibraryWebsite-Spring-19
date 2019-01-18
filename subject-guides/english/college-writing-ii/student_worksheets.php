<?php
   $page_title = "Student worksheets - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="5";		//This ID is from the help_email ie 10
	$creatorNotes = ""; // this note will print before created date
	$updaterNotes = ""; // this note will print before updated date
	$createdDate ="9/6/2016";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="1/11/2018";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">Student worksheets for Library Instruction</h2>

<h4>Homework</h4>
	<h6>Day 1</h6>
		<p>
			<a id="pdf" href="/subject-guides/english/college-writing-ii/docs/apa_homework_day1.pdf" target="_blank">APA</a> |
			<a id="pdf" href="/subject-guides/english/college-writing-ii/docs/mla_homework_day1.pdf" target="_blank">MLA</a> |
			<a id="pdf" href="/subject-guides/english/college-writing-ii/docs/cms_homework_day1.pdf" target="_blank">Chicago</a> |
			<a id="pdf" href="/subject-guides/english/college-writing-ii/docs/cse_homework_day1.pdf" target="_blank">Council of Science Editors</a>
		</p>

	<h6>Day 2</h6>
		<p>
			<a id="pdf" href="/subject-guides/english/college-writing-ii/docs/apa_homework_day2.pdf" target="_blank">APA</a> |
			<a id="pdf" href="/subject-guides/english/college-writing-ii/docs/mla_homework_day2.pdf" target="_blank">MLA</a> |
			<a id="pdf" href="/subject-guides/english/college-writing-ii/docs/cms_homework_day2.pdf" target="_blank">Chicago</a> |
			<a id="pdf" href="/subject-guides/english/college-writing-ii/docs/cse_homework_day2.pdf" target="_blank">Council of Science Editors</a>
		</p>

<h6>Handout:</h6>

		<p><a id="pdf" href="/subject-guides/english/college-writing-ii/docs/isp_benner.pdf" target="_blank">Information Search Process <img src="/img/get-pdf.png" /></a><br /><br />
		</p>




<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
