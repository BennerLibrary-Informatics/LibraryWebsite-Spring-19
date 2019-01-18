
<?php
   $page_title = "Liberal Arts/ Liberal Education - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = ""; 
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="111";	//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="11/24/2015";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="3/18/2018";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">Liberal Arts/ Liberal Education</h2>

		<div class="split cf">
			<div class="left">
				<div class="padding15-left" align="center">
				<h6>Liberal Education</h6>
				<p>“An approach to college learning that empowers individuals and prepares them to deal with complexity, diversity, and change… emphasiz[ing] broad knowledge of the wider world (e.g., science, culture, and society) [and] in-depth achievement in a specific field of interest. It helps students develop a sense of social responsibility; strong intellectual and practical skills that span all major fields of study, such as communication, analytical, and problem-solving skills; and the demonstrated ability to apply knowledge and skills in real-world settings.” The emphasis in Liberal Education is on competencies and may or may not include core courses in humanities and sciences outside the student’s selected professional studies. </p>
				</div>
			</div>
			
			<div class="right">
				<div class="padding15-left" align="center">
				<h6>Liberal Arts Education</h6>
				<p>According to Breneman (1990) Liberal Arts institutions traditionally offer a 4-year degree that includes a core of interdisciplinary courses in humanities and sciences.  Liberal Arts schools are usually “private” in the sense that their mission includes religious or other values that distinguish them from public institutions. The schools are characterized by small class size, by teaching faculty who interact closely with students, and by emphasis on service learning. Historically, these institutions have been “the source of a disproportionate number of graduates who go on to earn doctorates and to pursue academic careers” (p. 3).</p>
			</div>
			</div>
		</div>	
		
		<div class="padding15-left">
			<div class="hanging-indent">
				<a href="https://www.aacu.org/leap/what-is-a-liberal-education" target="_blank">
				Association of American Colleges & Universities (n.d.). <em>What is a 21st century liberal education?</em> Retrieved from: www.aacu.org/leap/what-is-a-liberal-education</a>			
			</div>
			
			<div class="hanging-indent">
				<a href="http://eric.ed.gov/?id=ED339260" target="_blank">
				Breneman, D. W. 1990. Are we losing our liberal arts colleges? <em>AAHE Bulletin</em>, <em>43</em>(2), 3–6.</a>	
			</div>
		</div>
				
		
	<h4>What is a Liberal Arts Education</h4>                  
		<p><?php echo print_bookmark('251', 'under_description', 'tab', 'no'); ?></p>	
	
	<h4>History</h4>
		<p><?php echo print_bookmark('252', 'under_description', 'tab', 'no'); ?></p>
		
	<h4>Value/Purpose</h4>
		<p><?php echo print_bookmark('253', 'under_description', 'tab', 'no'); ?></p>
		
	<h4>The Value of a Christian Liberal Arts Education</h4>
		<p><?php echo print_bookmark('254', 'under_description', 'tab', 'no'); ?></p>

	<h4>The End Goal for the Student</h4>
		<p><?php echo print_bookmark('255', 'under_description', 'tab', 'no'); ?></p>
		
	<h4>Comparisons to Professional Education</h4>
		<p><?php echo print_bookmark('256', 'under_description', 'tab', 'no'); ?>
			<small>
			Powered By <img align="absmiddle" src="/img/dcod.png" />
			</small>
		</p>

	
	
<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>