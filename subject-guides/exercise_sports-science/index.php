<?php
   $page_title = "Exercise & Sports Science - Benner Library";
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
<h1>Exercise &amp; Sports Science</h1>

<div class="split l60-r40 cf">
   <div class="left">
	  <h3 class="no-margin-top bold">Selected Databases</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('61', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	  <h3 class="bold">Selected eBooks</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('61', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	  <!--<h3 class="bold">Selected eJournals</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('61', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>-->


</div>
	<div class="right">
	<img class="padding15-left" src="/img/subject-guides/exercise-and-sports-science.png" alt="Running Man" title="exercise-and-sports-science" />
		<h5 class="no-margin-top bold padding35-top">Course Guides</h5>
		  <ul class="link-list padding10-left">
			     <li><a href="/subject-guides/exercise_sports-science/exss129/index.php">EXSS129: Principles of Sport Management</a></li>
    		    <li><a href="/subject-guides/exercise_sports-science/exss147/index.php">EXSS 110/147: Introduction to Exercise Science/Athletic Training</a></li>
            <li><a href="/subject-guides/exercise_sports-science/phed242/index.php">PHED242: Foundations of Health Education</a></li>
            <li><a href="/subject-guides/exercise_sports-science/phed360/index.php">PHED360: Physiology of Exercise</a></li>
            <li><a href="/subject-guides/exercise_sports-science/phed370/index.php">PHED370: Adaptive Physical Education</a></li>
            <li><a href="/subject-guides/exercise_sports-science/phed472/index.php">PHED472: Kinesiology</a></li>
        </ul>

	  	<h5 class="no-margin-top bold">Websites</h5>
	  	<ul class="link-list padding10-left">
		 	<li><a href="/subject-guides/exercise_sports-science/selected-sites.php">Selected Sites</a></li>
	  	</ul>

   </div>
</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
