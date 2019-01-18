<?php
   $page_title = "COMM 342 - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="5";		//This ID is from the help_email ie 10
	$updaterID ="";		//This ID is from the help_email ie 10
	$createdDate ="11/7/2014";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="07/16/2018";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">COMM 342: Persuasion & Media Influence</h2>
	<p>Recommended databases for finding credible sources:</p>
		<ul class="link-list irs">
			<?php echo print_resource('832', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('564', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('634', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('709', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('707', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('691', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('591', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('816', 'basic', 'float_description', 'tutorial'); ?>
			<?php echo print_resource('733', 'basic', 'float_description', 'tutorial'); ?>
		</ul>




<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
