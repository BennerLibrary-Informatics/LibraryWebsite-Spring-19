<?php
   $page_title = "SOWK 200: Introduction to Social Work I - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="06/08/2016";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">SOWK 200: Introduction to Social Work I</h2>

        <h3>eReference Books</h3>
        <ul>
        	<?php echo print_resource('608', 'basic', 'no_description', 'tutorial'); ?>
            <?php echo print_resource('895', 'basic', 'no_description', 'tutorial', 'break'); ?>
            <li><a href="http://library.olivet.edu/subject-guides/biography/index.php">Biographies</a></li>
         </ul>

         <h3>Historical &amp; primary sources</h3>
         	<ul>

                <?php echo print_resource('733', 'basic', 'no_description', 'break'); ?>
                <?php echo print_resource('709', 'basic', 'no_description', 'break'); ?>
                <?php echo print_resource('1225', 'basic', 'no_description', 'break'); ?>
            </ul>

          <h3>Images &amp; Videos</h3>
          	<ul>
                <?php echo print_resource('720', 'basic', 'no_description', 'break'); ?>
			</ul>

			<h3>Create a budget assignment tips</h3>
			<p>
				<a id="pdf" href="/subject-guides/social-work/sowk200/doc/create_a_budget_infographic.pdf" target="_blank">Infographic</a>: visual overview of the Create-A-Budget process <a href="/subject-guides/social-work/sowk200/doc/create_a_budget_infographic.pdf" target="_blank"><img src="/img/get-pdf.png" /></a><br /><br />
				<?php echo print_bookmark('218', 'under_description', 'tab', 'no'); ?>
				<small>
					Powered By <img align="absmiddle" src="/img/dcod.png" />
				</small>
			</p>

			<h3>Policy Matters</h3>
          	<p>
				<a id="pdf" href="/subject-guides/social-work/sowk200/doc/finding_government_policies.pdf" target="_blank">Finding government policies <img src="/img/get-pdf.png" /></a><br />
			</p>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
