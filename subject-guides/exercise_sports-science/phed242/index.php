<?php
   $page_title = "PHED 242: Foundations of Health Education - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="12/06/2006";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="08/02/2018";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">PHED 242: Foundations of Health Education</h2>

<h3>Prepare for library instruction</h3>
<ul>
  <li> Read this <a href="https://www.scribd.com/doc/266969860/Chocolate-causes-weight-loss" target="_blank">article</a></li>
  <li> Rate it with this <a id="pdf" href="/subject-guides/exercise_sports-science/phed242/doc/article_review_check_list.pdf" target="_blank">worksheet<img src="/img/get-pdf.png" /></a>
</ul>
	<h3><a name="article" id="article"></a>Structure of a research article</h3>

		<ul>
			<li>Abstract</li>
			<li><a href="http://biology.kenyon.edu/Bio_InfoLit/hypothesis/index.html" target="_blank">Introduction</a></li>
			<li><a href="http://biology.kenyon.edu/Bio_InfoLit/methods/index.html" target="_blank">Methodology</a></li>
			<li><a href="http://biology.kenyon.edu/Bio_InfoLit/results/index.html" target="_blank">Results</a></li>
			<li>Discussion</li>
		</ul>

		<p>Links point to lessons from the &quot;<a href="http://biology.kenyon.edu/Bio_InfoLit/index.html" target="_blank">Reading primary literature in biology</a>,&quot; tutorial hosted at Kenyon College </p>
  <h3>Source types-defined</h3>
  <ul>
    <li><b><a href="#primary">Primary sources:</a></b> Published research in peer-reviewed (refereed) journals or eyewitness accounts.</li>
    <li><b><a href="#secondary">Secondary Sources</a></b> contain a summary of primary sources, including <b> review articles.</b></li>
    <li><b><a href="#tertiary">Tertiary sources</a></b> are typically reference sources, including encyclopedias and handbooks.</li>
    <li><b><a href="#popular">Popular sources:</a></b> Written for a <b>lay-audience</b>, rarely contain detailed citation information</li>
  </ul>

<h3> Recommended Databases:</h3>
<br />
	<h4><a name="primary" id="primary"></a>Primary Sources</h4>

<div class="padding25-left">
				<p class="title-font">Medical</p>
				<ul class="link-list irs">
					<?php echo print_resource('1185', 'basic', 'float_description'); ?>
					<?php echo print_resource('717', 'basic', 'float_description'); ?>
					<?php echo print_resource('623', 'basic', 'float_description'); ?>
					<?php echo print_resource('1114', 'basic', 'float_description'); ?>
				</ul>

				<p class="title-font">Education</p>
				<ul class="link-list irs">
					<?php echo print_resource('696', 'basic', 'float_description'); ?>
				</ul>

				<p class="title-font">Social Science</p>

				<ul class="link-list irs">
					<?php echo print_resource('1194', 'basic', 'float_description'); ?>
					<?php echo print_resource('676', 'basic', 'float_description'); ?>
				</ul>
			</div>

    <h4><a name="secondary" id="secondary"></a>Secondary &amp; Tertiary sources</h4>


			<ul class="link-list irs">
				<?php echo print_resource('967', 'basic', 'float_description'); ?>
				<?php echo print_resource('919', 'basic', 'float_description'); ?>
				<?php echo print_resource('763', 'basic', 'float_description'); ?>
            </ul>

        <p class="title-font">To browse for books at Benner Library, visit the third floor:</p>
				<p></p>

				<ul>
					<li><strong>372</strong> - Elementary education - Health</li>
          <li><strong>610</strong>  - Medical Sciences - Education</li>
					<li><strong>611</strong>  - Human Anatomy</li>
					<li><strong>612</strong>  - Human Physiology</li>
					<li><strong>613</strong>  - Promotion of Health</li>
					<li><strong>615</strong>  - Incidence &amp; Prevention of Disease</li>
					<li><strong>615</strong>  - Pharmacology</li>
					<li><strong>616</strong>  - Diseases</li>
				</ul>

        <p class="title-font">Ebook collections: </p>
          <ul class="link-list irs">
    				<?php echo print_resource('789', 'basic', 'float_description'); ?>
    				<?php echo print_resource('794', 'basic', 'float_description'); ?>
    				<?php echo print_resource('693', 'basic', 'float_description'); ?>
          </ul>


    <h3><a name="popular" id="popular"></a>Popular press</h3>


		<ul class="link-list irs">
			<?php echo print_resource('564', 'basic', 'float_description'); ?>
			<?php echo print_resource('716', 'basic', 'float_description'); ?>
		</ul>




<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
