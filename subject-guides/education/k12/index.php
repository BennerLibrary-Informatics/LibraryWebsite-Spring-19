<?php
   $page_title = "Education K-12 - Benner Library";
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
<h1>Education K-12</h1>

<div class="split l60-r40 cf">
   <div class="left">
	  <h3 class="no-margin-top bold">Selected Databases</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('57', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	  <h3 class="bold">Selected eJournals</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('57', array('3'), 'bas', 'tutorial', 'gon', 'flo', 'poff'); ?>
	  </ul>

</div>
	<div class="right">
        <img class="padding15-left" src="/img/subject-guides/education_k12.png" alt="Education K-12" title="Decorative Chalkboard Image" />
		<h5 class="no-margin-top bold">Course Guides</h5>
    <div class="padding30-left">
    <img src="/img/sgcs.png" /> <a class="like-link-list" href="/subject-guides/education/read/index.php">Grad Programs</a><br />
    <a class="like-link-list" href="/subject-guides/education/educ140-151/index.php">EDUC140: Multicultural Foundations of Education</a></li>
    <a class="like-link-list" href="/subject-guides/education/educ140-151/index.php">EDUC151: Introduction To Education</a></li>
        <a class="like-link-list" href="/subject-guides/education/educ210/index.php">EDUC210: Instructional Methods of Early Childhood Education</a></li>
        <a class="like-link-list" href="/subject-guides/education/educ376/index.php">EDUC376: Teaching Diverse Populations in the Regular Classroom</a></li>
      </div>
<br />

	  	<h5 class="no-margin-top bold">Websites</h5>
	  	<ul class="link-list padding10-left">
		 	<li><a href="https://my.olivet.edu/acaddepts/teachereduc/Teacher%20Education/Forms/AllItems.aspx" target="_blank" title="Log in with your My.Olivet credentials">Teacher Education Handbook</a></li>
			<li><a href="http://law.justia.com/codes/illinois/2010/chapter105/1005.html" target="_blank">2010 Illinois School Code</a></li>
            <li><a href="https://www.isbe.net/Pages/Learning-Standards.aspx" target="_blank">Illinois State Standards</a></li>
            <li><a href="/subject-guides/education/selected-sites/index.php">Selected Sites for the Classroom</a></li>
            <li><a href="/subject-guides/education/selected-sites/professional.php">Selected Sites for the Professional</a></li>
	  	</ul>

   </div>
</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
