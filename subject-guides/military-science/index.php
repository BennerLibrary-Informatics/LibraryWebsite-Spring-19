<?php
   $page_title = "Military Science - Benner Library";
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
<h1>Military Science</h1>

	<div class="split l60-r40 cf">
	   <div class="left">
		  <h3 class="no-margin-top bold">Selected Databases</h3>
		  <ul class="link-list irs">
			 <?php echo print_subject('16', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
		  </ul>

		  <h3 class="bold">Selected eBooks</h3>
		  <ul class="link-list irs">
			 <?php echo print_subject('16', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
		  </ul>

		</div>
		<div class="right">
			<img class="padding15-left" src="/img/subject-guides/military_science.png" alt="image" title="image" />
			<h5 class="bold">Course Guides</h5>
			<ul class="link-list padding10-left">
				<li><a href="/subject-guides/careers/gre_resources.php">MS3 GRE Resources</a></li>
			</ul>

			<h5 class="no-margin-top bold">Websites</h5>
			<ul class="link-list padding10-left">
				<li><a id="pdf" href="/subject-guides/military-science/docs/book_list.pdf">Suggested Reading List <img src="/img/get-pdf.png"/></a></li>
				<li><a href="https://history.army.mil/html/books/105/105-1-1/index.html" target="_blank">Professional Reading List</a></li>
			</ul>
	   </div>
	</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
