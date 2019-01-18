<?php
   $page_title = "English - Benner Library";
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
<h1>English</h1>

<div class="split l50-r50 cf">
   <div class="left">
	  <h3 class="no-margin-top bold">Selected Databases</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('30', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	  <h3 class="bold">Selected eBooks</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('30', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	</div>
	<div class="right">

		<img class="padding15-left" src="/img/subject-guides/english.png" alt="English" title="English" />
		<h5 class="no-margin-top bold">Course Guides</h5>
		<ul class="link-list padding10-left">
            <li><a href="/subject-guides/english/college-writing-ii/index.php">ENGL 208/209/210: College Writing II</a></li>	
        </ul>

	  	<h5 class="no-margin-top bold">Websites</h5>
	  	<ul class="link-list padding10-left">
		 	<li><a href="/subject-guides/english/selected-sites.php">Selected Sites</a></li>
			<li><a href="/subject-guides/literature/index.php">Literature Subject Guide</a></li>
	  	</ul>

   </div>
</div>


<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>