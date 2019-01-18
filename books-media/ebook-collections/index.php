<?php
   $page_title = "eBook Collections - Benner Library";
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


<h1>eBook Collection</h1>
   <div class="split">
	   <div class="left">
		   <ul class="link-list irs">
			  <?php echo print_subject('18', array('5', '2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
		   </ul>
	   </div>

	   <div class="right">
			<img src="/img/subject-guides/ebook.png" alt="eBook Collection" title="Book" />
	   </div>
   </div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
