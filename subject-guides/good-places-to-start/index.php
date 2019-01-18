<?php
   $page_title = "Good Places To Start - Benner Library";
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
<h1>Good Places to Start</h1>
<div class="split l60-r40 cf">
   <div class="left">
	  <h3 class="no-margin-top bold">Selected Databases</h3>
	  <ul class="link-list irs">
		 	<?php echo print_subject('63', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	  <h3 class="bold">Selected eBooks</h3>
	  <ul class="link-list irs">
		 	<?php echo print_subject('63', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

</div>
	<div class="right">
		<img class="padding15-left" src="/img/subject-guides/start.png" alt="Good Places to Start" title="Good Places to Start" />

		 <h5 class="bold">Recommended Databases for:</h5>
            <ul class="link-list padding10-left">
                <li><a href="/subject-guides/good-places-to-start/apa_database_recommendations.php">APA disciplines</a></li>
				 <li><a id="pdf" href="/subject-guides/good-places-to-start/docs/chicago_database_recommendations.pdf">Chicago/Turabian disciplines</a></li>
				 <li><a id="pdf" href="/subject-guides/good-places-to-start/docs/cse_database_recommendations.pdf">Council of Science Editors disciplines</a></li>
				  <li><a id="pdf" href="/subject-guides/good-places-to-start/docs/mla_database_recommendations.pdf">MLA disciplines</a></li>
            </ul>
   </div>
</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
