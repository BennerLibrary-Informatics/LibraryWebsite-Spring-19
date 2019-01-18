<?php
   $page_title = "Primary Sources: Social Sciences - Benner Library";
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
<h1>Primary Sources: Social Sciences</h1>

<div class="split l60-r40 cf">
	<div class="left">
		<h3 class="bold">Social Sciences</h3>
		<p>Including business, criminal justice, sociology, psychology, etc.</p>
			<ul class="link-list irs">
			<?php echo print_subject('5', array('5', '2', '3', '12'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			</ul>
	</div>

	<div class="right">
		<img class="padding15-left" src="/img/subject-guides/primary_sources_social_sciences.png" alt="Primary Sources: Social Sciences" />
	
	<!--<h5 class="bold">Tips &amp; Tutorials</h5>
        	<ul class="link-list padding10-left">
	            <li><a href="#" target="_blank">Add text</a></li> 
	        </ul>-->
   </div>
   
   
</div>

<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>