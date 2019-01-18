<?php
   $page_title = "Education: Special Education - Benner Library";
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
<h1>Education: Special Education</h1>

<div class="split l60-r40 cf">
   <div class="left">
	  <h3 class="no-margin-top bold">Selected Databases</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('21', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	  <h3 class="bold">Selected eBooks</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('21', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	  <h3 class="bold">Selected eJournals</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('21', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>
	</div>

	<div class="right padding30-top">
		<img class="padding15-left" src="/img/subject-guides/education_special.png" alt="image" title="image" />

		<h5 class="no-margin-top bold">Course Guides</h5>
		<ul class="link-list padding10-left">
			<li><a href="/subject-guides/education/special-education/books.php">Search for books.</a></li>
			<li><a href="/subject-guides/education/sped301/index.php">SPED301 Characteristics of Students with Disability</a></li>
			<li><a id="pdf" href="/subject-guides/education/special-education/docs/sped_resources.pdf">Resources for SPED 601 & SPED 611</a></li>
        </ul>

	  	<h5 class="no-margin-top bold">Websites</h5>
	  	<ul class="link-list padding10-left">
		 	<li><a href="https://my.olivet.edu/acaddepts/teachereduc/Teacher%20Education/Forms/AllItems.aspx" target="_blank" title="Log in with your My.Olivet credentials">Teacher Education Handbook</a></li>
			<li><a href="https://www.isbe.net/Pages/Learning-Standards.aspx" target="_blank">Illinois State Standards</a></li>
            <li><a href="/subject-guides/education/selected-sites/special-education.php">Selected Sites</a></li>
	  	</ul>

        <h5 class="bold">Tips &amp; Tutorials</h5>
        <ul class="link-list padding10-left">
		<li><a href="https://youtu.be/HYRXFAh_lvA">People First Language (from Langara EA Students)</a></li>
            <li><a href="/help/use-databases/eric.php">Searching the ERIC (EBSCO) Database</a></li>
        </ul>



   </div>
</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
