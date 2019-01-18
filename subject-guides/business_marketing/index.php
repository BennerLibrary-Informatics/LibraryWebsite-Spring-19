<?php
   $page_title = "Business & Marketing - Benner Library";
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
<h1>Business &amp; Marketing</h1>

<div class="split l60-r40 cf">
   <div class="left">
	  <h3 class="no-margin-top bold">Selected Databases</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('2', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	  <h3 class="bold">Selected eBooks</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('2', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	  <h3 class="bold">Selected eJournals</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('2', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

</div>
	<div class="right">
		<img class="padding15-left" src="/img/subject-guides/business_marketing.png" alt="image" title="image" />

		  <h5 class="no-margin-top bold";>Course Guides</h5>
        <ul class="link-list padding10-left">
          <li><a href="/subject-guides/business_marketing/bsns440/index.php">BSNS440: Marketing Research</a></li>
          <li><a href="/subject-guides/communication/comm325/index.php">COMM325: Event Planning</a></li>
        </ul>

	    <h5 class="no-margin-top bold">Websites</h5>
		   	<ul class="link-list padding10-left">

				<li><a href="/subject-guides/business_marketing/selected-sites.php">Selected Sites</a></li>
				<li><a href="http://hbr.org/search/" target="_blank" title="$6.95 charge per user required for Copyright compliance">Harvard Business School Case Studies</a></li>
			</ul>

        <h5 class="bold">Tips &amp; Tutorials</h5>
        	<ul class="link-list padding10-left">
	            <li><a href="/help/subject-specific/business/company-profiles_swot-analyses.php" target="_blank"><img align="absmiddle"src="/img/help/tutorial.png" /> Finding MarketLine (Datamonitor) Reports &amp; SWOT Analyses</a></li>
				<li><a href="/help/subject-specific/business/index.php" target="_blank"><img align="absmiddle"src="/img/help/tutorial.png" /> Other Business Tutorials</a></li>
	        </ul>
    </div>
</div>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
