<?php
   $page_title = "Criminal Justice - Benner Library";
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
<h1>Criminal Justice</h1>

<div class="split l60-r40 cf">
   <div class="left">
	  <h3 class="no-margin-top bold">Selected Databases</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('14', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	  <h3 class="bold">Selected eJournals</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('14', array('3'), 'bas', 'tutorial', 'gon', 'flo', 'poff'); ?>
	  </ul>

	  <h3 class="bold">Selected eBooks</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('14', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

</div>
	<div class="right">
		<img class="padding15-left" src="/img/subject-guides/criminal_justice.png" alt="Criminal Justice" title="Criminal Justice" />
	   	<h5 class="no-margin-top bold";>Course Guides</h5>
		<ul class="link-list padding10-left">
			<li><a href="/subject-guides/criminal-justice/cjus273/index.php">CJUS/SOCY 273: Criminology</a></li>
            <li><a href="/subject-guides/criminal-justice/crim316/index.php">CRIM316: Correctional Process</a></li>
            <li><a href="/subject-guides/psychology/psyc331/index.php">PSYC331: Basic Research &amp; Statistics</a></li>
	  </ul>

	  <h5 class="no-margin-top bold">Websites</h5>
	  <ul class="link-list padding10-left">
		    <li><a href="/subject-guides/criminal-justice/selected-sites.php">Selected Sites</a></li>
    </ul>
     <div class="margin30-left">Selected Links from <strong>Campbell Systematic Reviews</strong> (Published by Campbell Collaboration):</div>
     <ul class="link-list padding20-left">
        <li><a href="https://campbellcollaboration.org/library.html" target="_blank">Search Screen</a></li>
        <li><a href="https://campbellcollaboration.org/component/jak2filter/?Itemid=1352&issearch=1&isc=1&category_id=101&ordering=publishUpp" target="_blank">Advanced Search</a></li>
        <li><a href="https://campbellcollaboration.org/campbell-systematic-reviews.html" target="_blank">List of Issues</a></li>
      </ul>



   </div>
</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
