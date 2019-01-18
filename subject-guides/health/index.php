<?php
   $page_title = "Health - Benner Library";
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
<h1>Health</h1>

<div class="split l60-r40 cf">
   <div class="left">
	  <h3 class="no-margin-top bold">Selected Databases</h3>
	  <ul class="link-list irs">
		 	<?php echo print_subject('65', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

    <h3 class="no-margin-top no-margin-bottom bold">Selected eJournals</h3>
			 <ul class="link-list irs no-margin-top">
				<?php echo print_subject('65', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			</ul>

	  <h3 class="bold">Selected eBooks</h3>
	  <ul class="link-list irs">
		 	<?php echo print_subject('65', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

</div>
	<div class="right">
		<img class="padding15-left" src="/img/subject-guides/health.png" alt="Health" title="Health" />
	  	<h5 class="no-margin-top bold">Websites</h5>
	  	<ul class="link-list padding10-left">
			<li><a href="/subject-guides/health/selected-sites.php">Selected Sites</a></li>
	  	</ul>

		<h5 class="bold">Tips &amp; Tutorials</h5>
            <ul class="link-list padding10-left">
                <li><a id="pdf" href="/subject-guides/health/doc/wellness-ebook-tips.pdf">Wellness Resources</a></li>
            </ul>
   </div>
</div>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
