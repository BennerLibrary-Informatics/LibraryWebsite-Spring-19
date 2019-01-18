<?php
   $page_title = "Communication - Benner Library";
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
<h1>Communication</h1>

<div class="split l60-r40 cf">
   <div class="left">
	  <h3 class="no-margin-top bold">Selected Databases</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('49', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>
	  
	  <h3 class="bold">Selected eJournals</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('49', array('4', '3', 'PCA'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	  <h3 class="bold">Selected eBooks</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('49', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>


</div>
	<div class="right">

		<img class="padding15-left" src="/img/subject-guides/communications.png" alt="Communications" title="Communications" />
		<h5 class="no-margin-top bold">Course Guides</h5>
		<ul class="link-list padding10-left">
			<li><a href="/subject-guides/communication/comm105/index.php">COMM105: Fundamentals of Communication</a></li>
			<li><a href="/subject-guides/communication/comm305/index.php">COMM305: Professional Communication</a></li>
			<li><a href="/subject-guides/communication/comm325/index.php">COMM325: Event Planning</a></li>
			<li><a href="/subject-guides/communication/comm342/index.php">COMM342: Persuasion &amp; Media Influence</a></li>
        	<li><a href="/subject-guides/communication/comm457/index.php">COMM457: Communication Theory</a></li>
		</ul>

	  	<h5 class="no-margin-top bold">Websites</h5>
	  	<ul class="link-list padding10-left">
    		<li><a href="/subject-guides/communication/selected-sites.php">Selected Sites</a></li>
	  	</ul>

        <!-- <h5 class="bold">Tips &amp; Tutorials</h5>
        <ul class="link-list padding10-left">
    	</ul> -->



   </div>
</div>



<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>