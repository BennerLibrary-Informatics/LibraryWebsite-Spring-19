<?php
   $page_title = "SOCY 489:Senior Research - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
	$reviewerID = "";
  $reviewedDate = "08/02/2018";
  $creatorID ="5"; //This ID is from the help_email ie 10
	$updaterID =""; //This ID is from the help_email ie 10
	$createdDate =""; //The date entered here shows up ie 3/2/2015
	$updatedDate =""; //The date entered here shows up ie 3/2/2015
	$dateAdded =""; //The date entered here shows up ie 3/2/2015
	$dateRemoved =""; //The date entered here shows up ie 3/2/2015
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->
<h2 class="header-line">SOCY 489: Senior Research</h2>

    <p><a href="http://biology.kenyon.edu/Bio_InfoLit/index.html" target=_blank><img src="/img/help/tutorial_html.png" /> Tutorial: How to read a scholarly article</a></p>

    <h5>Refining and demonstrating importance of topic: Background sources</h5>
    <ul>
    	<?php echo print_resource('704', 'basic', 'no_description', 'break'); ?>
        <?php echo print_resource('633', 'basic', 'no_description', 'break'); ?>
        <?php echo print_resource('608', 'basic', 'no_description', 'break'); ?>
        <li><a href="/subject-guides/good-places-to-start/index.php">Other Good Places to Start</a></li>
	</ul>

	<h5>Secondary Sources</h5>
    <ul>
    	<?php echo print_resource('564', 'basic', 'no_description', 'break'); ?>
        <?php echo print_resource('649', 'basic', 'no_description', 'break'); ?>
    </ul>

   <h5>Primary Sources</h5>
		<ul>
		<?php echo print_resource('676', 'basic', 'no_description', 'break'); ?>
		<?php echo print_resource('762', 'basic', 'no_description', 'break'); ?>
		<?php echo print_resource('761', 'basic', 'no_description', 'break'); ?>
		</ul>

    <h5>Citation Help</h5>
		<div class="padding15-left">
		<a href="/help/citation/apa/index.php">APA Help</a><br />
		</div>

    <h5>{Free} Career Resources</h5>
		<p>
		<a href="http://www.bls.gov/ooh/" target=_blank>Occupational Outlook handbook</a><br />
		<a href="http://www.onetonline.org/" target=_blank>O*NET Online</a>
		</p>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
