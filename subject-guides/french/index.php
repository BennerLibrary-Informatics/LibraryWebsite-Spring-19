<?php
   $page_title = "French - Benner Library";
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
<h1>French</h1>

<div class="split l60-r40 cf">
   <div class="left">
	  <h3 class="no-margin-top bold">Selected Databases</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('62', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

    <h3 class="no-margin-top no-margin-bottom bold">Selected eJournals</h3>
			 <ul class="link-list irs no-margin-top">
				<?php echo print_subject('62', array('3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			</ul>

	  <h3 class="bold">Selected eBooks</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('62', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

</div>
	<div class="right">

		<img class="padding15-left" src="/img/subject-guides/french.png" alt="French" title="French" />
	  	<h5 class="no-margin-top bold">Websites</h5>
	  	<ul class="link-list padding10-left">
		 	<li><a href="/subject-guides/french/selected-sites.php">Selected Sites</a></li>
	  	</ul>

        <!--<h5 class="bold">Tips &amp; Tutorials</h5>
        <ul class="link-list padding10-left">
            <li></li>
        </ul>-->



   </div>
</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
