<?php
   $page_title = "Chemistry - Benner Library";
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
<h1>Chemistry</h1>

<div class="split l60-r40 cf">
   <div class="left">
	  <h3 class="no-margin-top bold">Selected Databases</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('45', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	  <h3 class="bold">Selected eBooks</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('45', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>
		<img class="padding15-left" src="/img/subject-guides/chemistry.png" alt="Beaker Image" title="Decorative Beaker Image" />

</div>
	<div class="right padding30-top">
	   	<h5 class="no-margin-top bold";>Course Guides</h5>
		<ul class="link-list padding10-left">
            <li><a href="/subject-guides/chemistry/chem495/index.php">CHEM495: Seminar in Chemistry</a></li>
	  	</ul>

	  	<h5 class="no-margin-top bold">Websites</h5>
	  	<ul class="link-list padding10-left">
			<li><a href="http://bibpurl.oclc.org/web/38864" target="_blank">Safety in Academic Chemistry Laboratories Vol 1</a></li>
			<li><a href="http://bibpurl.oclc.org/web/38865" target="_blank">Safety in Academic Chemistry Laboratories Vol 2</a></li>
        	<li><a href="/subject-guides/chemistry/selected-sites.php">Selected Sites</a></li>
	  	</ul>

        <h5 class="bold">Tips &amp; Tutorials</h5>
        <ul class="link-list padding10-left">
    		<li><a id="pdf" href="/help/subject-specific/doc/american-chemical-society/chem_abs.pdf" target="_blank" title="pdf file">American Chemical Society Tips</a></li>
    	</ul>



   </div>
</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
