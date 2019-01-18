<?php
   $page_title = "Engineering - Benner Library";
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
<h1>Engineering</h1>

<div class="split l60-r40 cf">
   <div class="left">
	  <h3 class="no-margin-top bold">Selected Databases</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('58', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	  <h3 class="bold">Selected eBooks</h3>
	  <ul class="link-list irs">
		 <?php echo print_subject('58', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
	  </ul>

	</div>
	<div class="right">
		<img class="padding15-left" src="/img/subject-guides/engineering.png" alt="Image of drawing of Geneva wheel" title="Geneva Wheel" />
		<h5 class="no-margin-top bold">Course Guides</h5>
			<ul class="link-list padding10-left">
                <li><a href="/subject-guides/engineering/engr312/index.php">ENGR 312: Thermodynamics</a></li>
            </ul>

		<h5 class="no-margin-top bold">Websites</h5>
		<ul class="link-list padding10-left">
			<li><a href="/subject-guides/engineering/selected-sites.php">Selected Sites</a></li>
			<li><a href="http://ieeexplore.ieee.org/Xplore/guesthome.jsp" target="_blank" title="(Request articles through ILL)">IEEE Citation Index:</a></li>
			<li><a href="https://www.olivet.edu/walker-school-of-engineering" target="_blank" >ONU Department of Engineering</a></li>
		</ul>
   </div>
</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
