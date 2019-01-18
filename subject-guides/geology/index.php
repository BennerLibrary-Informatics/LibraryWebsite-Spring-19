<?php
   $page_title = "Geology - Benner Library";
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
<h1>Geology</h1>

<div class="split l60-r40 cf">
   <div class="left">
	  <h3 class="no-margin-top bold">Selected Databases</h3>
	  <ul class="link-list irs">
		 	<?php echo print_subject('25', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	  <h3 class="bold">Selected eBooks</h3>
	  <ul class="link-list irs">
		 	<?php echo print_subject('25', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

</div>
	<div class="right">
		<img class="padding15-left" src="/img/subject-guides/geology.png" alt="Mountain" title="Mountain" />
		<h5 class="no-margin-top bold">Course Guides</h5>
		<ul class="link-list padding10-left">
			<li><a id="pdf" href="/subject-guides/geology/docs/geoscience-journals.pdf" target="_blank">Recommended Geology Journals <img src="/img/get-pdf.png" /></a></li>
		</ul>

	  	<h5 class="no-margin-top bold">Websites</h5>
	  	<ul class="link-list padding10-left">
		 	<li><a href="http://geology.olivet.edu/" target="_blank">Geology Department</a></li>
            <li><a href="/subject-guides/geology/selected-sites.php">Selected Sites</a></li>
	  	</ul>
   </div>
</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
