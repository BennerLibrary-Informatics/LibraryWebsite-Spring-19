<?php
   $page_title = "Course eBooks - Benner Library";
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


<h1>Course eBooks</h1>
   <div class="split">
	   <div class="left">
		<h4>Communication Courses</h4>
		   <ul class="link-list irs padding25-left">
				<?php echo print_subject('51', array('2'), 'bas', 'tutorial', 'gon', 'und'); ?> 
		   </ul>

		<h4>Education Courses</h4>
		   <ul class="link-list irs padding25-left">
				<?php echo print_subject('52', array('2'), 'bas', 'tutorial', 'gon', 'und'); ?> 
		   </ul>

		<h4>Engineering Courses</h4>
		   <ul class="link-list irs padding25-left">
				<?php echo print_subject('53', array('2'), 'bas', 'tutorial', 'gon', 'und'); ?> 
		   </ul>

		   <h4>Philosophy Courses</h4>
		   <ul class="link-list irs padding25-left">
				<?php echo print_subject('54', array('2'), 'bas', 'tutorial', 'gon', 'und'); ?> 
		   </ul>

	   </div>

	   <div class="right">

		   <h4>Science Courses</h4>
		   <ul class="link-list irs padding25-left">
				<?php echo print_subject('55', array('2'), 'bas', 'tutorial', 'gon', 'und'); ?> 
		   </ul>


		   <h4>Theology Courses</h4>
		   <ul class="link-list irs padding25-left">
				<?php echo print_subject('56', array('2'), 'bas', 'tutorial', 'gon', 'und'); ?> 
		   </ul>

		   <h4><img src="/img/sgcs.png" /> SGCS Faculty Orientation</h4>
		   <ul class="link-list irs padding25-left">
				<?php echo print_subject('86', array('2'), 'bas', 'tutorial', 'gon', 'und'); ?> 
		   </ul>
	   </div>
   </div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
