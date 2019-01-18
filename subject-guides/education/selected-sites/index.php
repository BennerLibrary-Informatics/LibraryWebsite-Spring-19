<?php
   $page_title = "Selected Sites for Teachers - Benner Library";
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
<h1>Selected Sites for Teachers</h1> 
   <div class="padding15-left">
      <a href="/subject-guides/education/selected-sites/general-education.php">General Education Selected Sites</a><br /><br />
      <a href="/subject-guides/education/selected-sites/art-music.php">Art and Music Selected Sites</a><br /><br />
      <a href="/subject-guides/education/selected-sites/language-arts.php">Language Arts Selected Sites</a><br /><br />
      <a href="/subject-guides/education/selected-sites/math.php">Math Selected Sites</a><br /><br /> 
      <a href="/subject-guides/education/selected-sites/physical-education.php">Physical Education and Health Selected Sites</a><br /><br /> 
      <a href="/subject-guides/education/selected-sites/reading.php">Reading Selected Sites</a><br /><br />
      <a href="/subject-guides/education/selected-sites/science.php">Science Selected Sites</a><br /><br /> 
      <a href="/subject-guides/education/selected-sites/social-studies.php">Social Studies Selected Sites</a><br /><br />
      <a href="/subject-guides/education/selected-sites/special-education.php">Special Education Selected Sites</a><br /><br />
      <a href="/subject-guides/education/selected-sites/technology.php">Technology Selected Sites</a><br /><br /> 
   </div>
<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>