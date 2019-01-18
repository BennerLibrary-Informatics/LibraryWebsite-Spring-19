<?php
   $page_title = "College Writing II - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$creatorNotes = ""; // this note will print before created date
	$createdDate ="1/11/2019";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="";	//The date entered here shows up ie 3/2/2015
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

<h1>College Writing II</h1>
	<table border = "1">
		<thead>
			<tr>
				<td></td>

        <td>
						<div class="center">
							Tools for Topic Exploration
						</div>
				</td>

        <td>
						<div class="center">
              Citation Help
						</div>
				</td>
			</tr>
		</thead>

		<tbody>
			<tr>
				<td align="center"><img  width="70" src="/subject-guides/english/college-writing-ii/img/beaker_apa.png" /><br />
        APA<br />
        <a href="/subject-guides/english/college-writing-ii/understand_the_assignment/apa.php">Required Resources</a></td>
				<td align="center" rowspan="4">
          <?php echo print_resource('608', 'basic', 'float_description', 'tutorial', 'no-li'); ?> <br /><br />
          <a href="/subject-guides/reference/index.php">Reference Subject Guide</a><br /><br />
          <a href="https://en.wikipedia.org/wiki/List_of_Dewey_Decimal_classes#Class_000_%E2%80%93_Computer_science,_information_&_general_works" target="_blank">Dewey Decimal Classification System </a><br /><br />
          <?php echo print_resource('967', 'basic', 'float_description', 'tutorial', 'no-li'); ?> <br /><br />
          <?php echo print_resource('919', 'basic', 'float_description', 'tutorial', 'no-li'); ?> <br /><br />
          <?php echo print_resource('693', 'basic', 'float_description', 'tutorial', 'no-li'); ?> <br /><br />
          <?php echo print_resource('564', 'basic', 'float_description', 'tutorial', 'no-li'); ?> <br /><br />
          <?php echo print_resource('544', 'basic', 'float_description', 'tutorial', 'no-li'); ?> <br /><br />
          <a href="/subject-guides/index.php">Subject Guides</a><br /><br />
        </td>

        <td align="center">
          Print source:<br />
            <a href="https://owl.purdue.edu/owl/research_and_citation/apa_style/apa_formatting_and_style_guide/reference_list_books.html" target="_blank">book</a> |
            <a href="https://owl.purdue.edu/owl/research_and_citation/apa_style/apa_formatting_and_style_guide/reference_list_other_print_sources.html" target="_blank">other</a><br />
            <a href="https://owl.purdue.edu/owl/research_and_citation/apa_style/apa_formatting_and_style_guide/reference_list_electronic_sources.html" target="_blank">Online Sources</a><br />
            <a href="/help/citation/apa/index.php">Benner APA Help</a>
        </td>
			</tr>

			<tr>
				<td align="center"><img  width="45" src="/subject-guides/english/college-writing-ii/img/cross_cms.png" /><br />
        Chicago Style (CMS)<br />
      <a href="/subject-guides/english/college-writing-ii/understand_the_assignment/cms.php">Required Resources</a>
    </td>
				<td align="center">
          <a href="http://www.press.uchicago.edu/books/turabian/turabian_citationguide.html" target="_blank">Turabian Quick Guide</a><br />
          <a href="/help/citation/chicago-turabian/index.php">Benner CMS Help</a>
        </td>
			</tr>

		  <tr>
				<td align="center"><img  width="45" src="/subject-guides/english/college-writing-ii/img/beaker_cse.png" /><br />
        Council of Science Editors (CSE)<br />
      <a href="/subject-guides/english/college-writing-ii/understand_the_assignment/cse.php">Required Resources</a>
    </td>
				<td align="center">
          <a href="http://www.scientificstyleandformat.org/Tools/SSF-Citation-Quick-Guide.html" target="_blank">Citation Quick Guide</a><br />
          <a href="https://library.olivet.edu/help/citation/cse/index.php">Benner CSE Help</a>
        </td>
			</tr>

		  <tr>
				<td align="center"><img  width="60" src="/subject-guides/english/college-writing-ii/img/music_note_mla.png" /><br />
        MLA<br />
				<a href="/subject-guides/english/college-writing-ii/understand_the_assignment/mla.php">Required Resources</a>
				</td>
        <td align="center">
          Print source:<br />
            <a href="https://owl.purdue.edu/owl/research_and_citation/mla_style/mla_formatting_and_style_guide/mla_works_cited_periodicals.html" target="_blank">Print articles</a> |
            <a href="http://owl.english.purdue.edu/owl/resource/747/06/" target="_blank">book</a><br />
          Online:<br />
            <a href="https://style.mla.org/citing-an-e-book/" target="_blank">article or website</a> |
            <a href="https://style.mla.org/citing-an-e-book/" target="_blank">book</a><br />
            <a href="https://owl.english.purdue.edu/owl/resource/747/05/" target="_blank">Benner MLA Help</a>
        </td>
			</tr>
		</tbody>
    </table>

    <p>
        Links for Students:
          <a href="/subject-guides/english/college-writing-ii/student_worksheets.php">Library Worksheets</a> |
          <a href="/subject-guides/english/college-writing-ii/refine_topic/writing_tips.php">Writing Tips</a> |
          <a href="/help/citation/avoid-plagiarism.php">Avoiding Plagiarism</a><br />
    </p>

    <p>
        <a href="/subject-guides/english/college-writing-ii/links_for_faculty.php">Links for Faculty</a><br />
    </p>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
