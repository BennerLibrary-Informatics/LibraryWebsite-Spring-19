<?php
   $page_title = "Christian Ministry - Benner Library";
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
<h1>Christian Ministry</h1>

	<div class="split l60-r40 cf">
       <div class="left">
		  <h3 class="no-margin-top bold">Selected Databases</h3>
		  <ul class="link-list irs">
			 <?php echo print_subject('47', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
		  </ul>

		  <h3 class="bold">Selected eBooks</h3>
		  <ul class="link-list irs">
			 <?php echo print_subject('47', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
		  </ul>

      	  <h3 class="bold">Selected eJournals</h3>
      	  <ul class="link-list irs">
      		 <?php echo print_subject('47', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
      	  </ul>
	   </div>


		<div class="right">
			<img class="padding15-left" src="/img/subject-guides/christian_ministry.png" alt="image" title="image" />

			<h5 class="no-margin-top bold">Course Guides</h5>
			<ul class="link-list padding10-left">
				<li><a href="/subject-guides/religion/exegesis/index.php">Exegesis</a></li>
			</ul>

			<h5 class="no-margin-top bold">Websites</h5>
			<ul class="link-list padding10-left">
				<a href="/subject-guides/religion/christian-ministry/selected-sites.php">Selected Websites</a>
			</ul>
	   </div>
	</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
