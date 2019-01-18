
<?php
   $page_title = "Selected Nursing eJournals - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->
<h1>Selected Nursing eJournals</h1>

<div class="split l55-r45 cf">
   	<div class="left">
    <h3 class="no-margin-top no-margin-bottom bold">Selected eJournals</h3>
			 <ul class="link-list irs no-margin-top">
				<?php echo print_subject('32', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			</ul>
	</div>

	<div class="right">
		<!--<img style="margin-top:-65px; margin-left:70px;" class="padding35-left;" src="/img/subject-guides/nursing150.png" alt="Nursing" title="Nursing" />-->
		<img style="margin-top:-35px; margin-left:70px" src="/img/subject-guides/nursing.png" alt="Nursing" title="Nursing" />


   </div>
</div>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
