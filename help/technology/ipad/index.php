<?php
   $page_title = "iPad Help - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
$reviewedDate = "";
$creatorID ="";		//This ID is from the help_email ie 10
	$updaterID ="10";		//This ID is from the help_email ie 10
	$createdDate ="";	//The date entered here shows up ie 3/2/2015
	$updatedDate ="2/5/2017";	//The date entered here shows up ie 3/2/2015
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
<h2 class="header-line">iPad Help</h2>
	<p>
		<div class="split l60-r40 cf">
			<div class="left">
				<ul class="link-list">
					<li><a href="/help/technology/ipad/understanding.php">Understanding the iPad</a></li><br />
					<li><a href="/help/technology/ipad/setup-instructions.php">iPad Setup Instructions</a></li><br />
					<li><a href="/help/technology/ipad/useful-suggestions.php">Useful Suggestions</a></li> <br /> 
					<li><a href="/help/technology/ipad/frequently-asked-questions.php">Frequently Asked Questions</a></li><br />
					<li><a href="/help/technology/ipad/apps/index.php">App Links &amp; Tutorials</a></li><br />
					<li><a href="/help/technology/ipad/troubleshooting.php">Troubleshooting</a></li>
				</ul>
			
			</div>
			<div class="right">
				<img src="/img/ipad.png" />
			</div>
		</div>
	</p>
	
	<p><em>Note: The content on this page is customized to reflect library faculty and staff policies.</em></p>
	
   

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>