<?php
   $page_title = "Social Work - Benner Library";
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
<h1>Social Work</h1>

	<div class="split l60-r40 cf">
		<div class="left">
			<h3 class="no-margin-top bold">Selected Databases</h3>
			<ul class="link-list irs">
				<?php echo print_subject('9', array('5', '11'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			</ul>

			<h3 class="bold">Selected eBooks</h3>
			<ul class="link-list irs">
				<?php echo print_subject('9', array('2'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			</ul>
		</div>

		<div class="right">
			<img class="padding15-left" src="/img/subject-guides/social_work.png" alt="Image of Helping Hands" title="Hands" />

			<h5 class="no-margin-top bold">Course Guides</h5>
			<ul class="link-list padding10-left">
				<li><a href="/subject-guides/social-work/sowk200/index.php">SOWK200: Introduction to Social Work I</a></li>
				<li><a href="/subject-guides/social-work/sowk213/index.php">SOWK 213/214: Human Behavior and the Social Environment I &amp; II </a></li>
				<li><a href="/subject-guides/social-work/sowk310/index.php">SOWK 310: Social Work Practice I</a></li>
				<li><a href="/subject-guides/social-work/sowk360/index.php">SOWK 360: Child Welfare</a></li>
				<li><a href="/subject-guides/social-work/sowk412/index.php">SOWK 412: Practice III</a></li>
				<li><a href="/subject-guides/social-work/sowk420/index.php">SOWK420: Social Policy Analysis</a></li>
			  <li><a id="pdf" href="/subject-guides/social-work/doc/career-resources.pdf">Career Resources <img src="/img/get-pdf.png" /></a></li>
			</ul>

			<h5 class="no-margin-top bold">Websites</h5>
			<ul class="link-list padding10-left">
				<li><a href="/subject-guides/social-work/selected-sites.php">Selected Sites</a></li>
			</ul>
	   </div>
	</div>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
