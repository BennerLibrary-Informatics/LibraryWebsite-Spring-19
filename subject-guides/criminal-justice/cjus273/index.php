<?php
   $page_title = "CJUS273/SOCY372: Criminology - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
  $reviewerID = "5";
  $reviewedDate = "6/26/2018";
  $creatorID ="";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="10/28/2016";	//The date entered here shows up ie 3/2/2015
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


<h2 class="header-line">CJUS/SOCY273: Criminology</h2>

	 <h3>Newspapers</h3>


	 <ul class="link-list irs">
		 <?php echo print_resource('734', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
		 <?php echo print_resource('611', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
		 <?php echo print_resource('709', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
		 <?php echo print_resource('733', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
		 <?php echo print_resource('591', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
	 </ul>

	 <h3>Background Sources</h3>
	 <ul class="link-list irs">
		 <?php echo print_resource('713', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
		 <?php echo print_resource('608', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
		 <?php echo print_resource('720', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
		 <?php echo print_resource('547', 'basic', 'float_description', 'tutorial', 'break', 'no_proxy'); ?>
	 </ul>

	 <h3>Books</h3>
	 <ul class="link-list irs">
		 <?php echo print_resource('967', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
		 <?php echo print_resource('919', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
		 <?php echo print_resource('763', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
	 </ul>

	 <h3>Scholarly Articles</h3>
	 <ul class="link-list irs">
		 <?php echo print_resource('743', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
		 <?php echo print_resource('676', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
		 <?php echo print_resource('564', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
		 <?php echo print_resource('673', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
		 <?php echo print_resource('761', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
		 <?php echo print_resource('649', 'basic', 'float_description', 'tutorial', 'break'); ?><br />
	</ul>

	<h3>Infographics</h3>
		<p>
			<a id="pdf" href="/subject-guides/criminal-justice/cjus273/docs/infographics.pdf">Download the library presentation  <img src="/img/get-pdf.png" /></a>
		</p>

		<p>
			<?php echo print_bookmark('227', 'under_description', 'tab', 'email'); ?>
				<small>
				Powered By <img align="absmiddle" src="/img/dcod.png" />
				</small>
		</p>


	<p><a href="/help/citation/apa/index.php">APA Help</a></p>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
