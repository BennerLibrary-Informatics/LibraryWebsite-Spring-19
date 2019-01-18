<?php
   $page_title = "Dietetics - Benner Library";
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
<h1>Dietetics</h1>

	<div class="split l60-r40 cf">
	   <div class="left">
		<h3 class="no-margin-top bold">Selected Databases</h3>
		<ul class="link-list irs">
		<?php echo print_subject('93', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
		</ul>

		<h3 class="bold">Selected eJournals</h3>
		<ul class="link-list irs">
		<?php echo print_subject('93', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
		</ul>

		<h3 class="bold">Selected eBooks</h3>
		<ul class="link-list irs">
		<?php echo print_subject('93', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
		</ul>

	</div>
		<div class="right">
			<img class="padding15-left" src="/img/subject-guides/dietetics.png" alt="FACS" title="FACS" />
			
			<h5 class="no-margin-top bold padding35-top">Course Guides</h5>
				<ul class="link-list padding10-left">
					<li><a href="/subject-guides/family_consumer-sciences/index.php">FACS Subject Guide Page</a></li>	
					<li><a href="/subject-guides/statistics/index.php">Statistics Subject Guide Page</a></li>
				</ul>
		
			<h5 class="no-margin-top bold">Websites</h5>
				<ul class="link-list padding10-left">
					<li><a href="http://www.hhs.gov/" target="_blank">U.S. Department of Health and Human Services (HHS)</li>
					<li><a href="http://www.ahrq.gov/" target="_blank">Agency for Healthcare Research and Quality</li>  
					<li><a href="http://www.guideline.gov/" target="_blank">National Guideline Clearinghouse</li>  
					<li><a href="/subject-guides/dietetics/selected-sites.php">Selected Sites</a></li>
				</ul>
	   </div>
	</div>


<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>