<?php
   $page_title = "Education: ESL/ELL/Bilingual - Benner Library";
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
<h1>Education: ESL/ELL/Bilingual</h1>

<div class="split l60-r40 cf">
   <div class="left">
	  <h3 class="no-margin-top bold">Selected Databases</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('10', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	  <h3 class="bold">Selected eBooks</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('10', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>
	
	<h3 class="bold">Selected eJournals</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('10', array('3','4'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>
	
</div>
	<div class="right padding30-top">	
	
	<img class="padding15-left" src="/img/subject-guides/esl_sgcs.png" alt="SGCS ESL" title="SGCS ESL" />
		<!--<h5 class="no-margin-top bold">Class & Program Guides</h5>
		<div class="padding30-left">
			<img src="/img/sgcs.png" /> <a class="like-link-list" href="/subject-guides/education/read/index.php">READ Program</a><br />
        </div>-->
<br />
	  	<h5 class="no-margin-top bold">Websites</h5>
	  	<ul class="link-list padding10-left">
		 	<li><a href="https://my.olivet.edu/acaddepts/teachereduc/Teacher%20Education/Forms/AllItems.aspx" target="_blank" title="Log in with your My.Olivet credentials">Teacher Education Handbook</a></li>
			<li><a href="http://www.isbe.net" target="_blank">Illinois State Board of Education</a></li>
            <li><a href="http://www.in.gov/sboe/" target="_blank">Indiana State Board of Education</a></li>
            <li><a href="https://www.wida.us/" target="_blank">WIDA</a></li>
			<li><a href="http://www.thecenterweb.org/" target="_blank">TESOL International Association</a></li>
			<li><a href="http://www.tesol.org/" target="_blank">Resources for Teaching and Learning</a></li>
			<li><a href="http://www.itbe.org/" target="_blank">Illinois Teachers of English to Speakers of Other Languages</a></li>
	  	</ul>

        <h5 class="bold">Tips &amp; Tutorials</h5>
        <ul class="link-list padding10-left">
            <li><a href="/help/citation/apa/index.php">APA Help</a></li>
        </ul>



   </div>
</div>


<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>