<?php
   $page_title = "EDUC 376 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
  $reviewedDate = "";
  $creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
  $creatorNotes = "and Dr. Brian Stipp"; // this note will print before created date
	$createdDate ="11/7/2014";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="8/2/2018";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">Library Guide for EDUC 376: Teaching Diverse Populations</h2>

	<p align=center><a href="#Disability">Disability research project</a> |
		<a href="#RtI">RtI group project</a>
	</p>



	<a name="Disability" id="Disability"></a>
	<h3>Disability research project</a></h3>
	<h5>Recommended Web Resources</h5>
		<ul>
		  <li><a href="http://www.teachingld.org/alerts" target="_blank">Teaching LD</a></li>
		  <li><a href="http://www.Autismspeaks.org" target="_blank">Autismspeaks.org</a></li>
      <li><a href="http://www.CHADD.org" target="_blank">CHADD.org</a></li>
		  <li><a href="https://www.parentcenterhub.org/wp-content/uploads/repo_items/gr3.pdf " target="_blank">13 disability categories</a></li>
		</ul>

	<a name="RtI" id="RtI"></a>
	<h3>RtI group project</h3>
	<h5>Article Databases</h5>
		<ul class="link-list irs">
		<?php echo print_resource('697', 'basic'); ?>
		</ul>
		<p><img src="/subject-guides/education/educ376/img/education-research-complete_screenshot.png" /></p>

	 <p class="title-font">Subject Terms (SU):</p>
	 <ul>
		 <li>Individual education programs</li>
		 <li>Education intervention</li>
		 <li>Education evaluation</li>
		 <li>Empirical research</li>
		 <li>Evidence-based education</li>
		 <li>Response to intervention</li>
	 </ul>

  <div class="margin10-left margin10-right border-double color-light-grey fcolor-grey">
    <p>
      <a id="pdf" href="/help/subject-specific/doc/9-factor-checklist/checklist.pdf" target="_blank">9 Factor Checklist: How to Evaluate Whether an Educational Intervention is Supported by Scientifically-Based Research <img src="/img/get-pdf.png" /></a>
    </p>
  </div>

	  <h2>Background Information About Disabilities</h2>
		 <ul>
		   <li><em>Pre-Referral Intervention Manual</em> (2014) R 371.93 M126p, 2014</li>
		</ul>

	   <h3>Electronic Books</h3>
		<ul class="link-list irs">
			<?php echo print_resource('608', 'basic', 'float_description'); ?>
			<?php echo print_resource('772', 'basic', 'float_description', 'break'); ?>
			<?php echo print_resource('967', 'basic', 'float_description', 'break'); ?>
		</ul>

		<ul>
		<li><a href="https://login.proxy.olivet.edu/login?url=http://site.ebrary.com/lib/olivet/Doc?id=10539286">Tier 2 Interventions (2012)</a></li>
		<li><a href="https://login.proxy.olivet.edu/login?url=http://site.ebrary.com/lib/olivet/Doc?id=10539288">Academic and behavioral interventions (2012)</a></li>
		</ul>

		<h2>Article Databases</h2>
		<div class="padding15-left">
		Academic disciplines other than education (e.g.)nursing, psychology, sociology) may provide you with excellent descriptions of disabilities and their impact on family systems and school environments. Consider using one of these databases when exploring your disability:
		</div>
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
