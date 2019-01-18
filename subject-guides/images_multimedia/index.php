<?php
   $page_title = "Images & Multimedia - Benner Library";
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
<h1>Images &amp; Multimedia</h1>

<div class="split l60-r40 cf">
   <div class="left">
	  	<h3 class="no-margin-top bold">Images</h3>
	  	<ul class="link-list irs">
			<?php echo print_subject('71', array('5', '2', '3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  		<li><a href="/subject-guides/images_multimedia/selected-image-sites.php">Selected Image Sites</a></li>
	  	</ul>

		<h4 class="no-margin-top bold">Sound</h4>
		<ul class="link-list irs">
			<?php echo print_subject('69', array('5', '2', '3'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			<li><a href="/subject-guides/images_multimedia/selected-sound-sites.php">Selected Sound Sites</a></li>
		</ul>

		<h4 class="no-margin-top bold">Maps</h4>
	  	<ul class="link-list irs">
		 	<?php echo print_subject('70', array('5', '2', '3', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			<li><a href="/subject-guides/images_multimedia/selected-map-sites.php">Selected Map Sites</a></li>
	  	</ul>

</div>
	<div class="right">
		<img class="padding15-left" src="/img/subject-guides/images_multimedia.png" alt="image" title="image" />
		<h3 class="bold">Videos</h3>
		  <ul class="link-list irs">
				<?php echo print_subject('68', array('5', '2', '3', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
				<li><a href="/subject-guides/images_multimedia/selected-video-sites.php">Selected Video Sites</a></li>
		  </ul>



   </div>
</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
