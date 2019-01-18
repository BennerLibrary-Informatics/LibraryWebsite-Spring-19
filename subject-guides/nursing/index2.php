
<?php
   $page_title = "Nursing Selected Sites - Benner Library";
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
<h1>Nursing</h1>

<div class="split l55-r45 cf">
   	<div class="left">
	  	<h3 class="no-margin-top no-margin-bottom bold">Selected Databases</h3>
			<ul class="link-list irs no-margin-top">
				<?php echo print_subject('NURS', array('DATAB'), 'adv', 'tutorial', 'gon', 'flo'); ?>
			</ul>

		<h3 class="no-margin-top no-margin-bottom bold">Supplementary Databases</h3>
			<ul class="link-list irs no-margin-top">
				<?php echo print_subject('NUR2', array('DATAB'), 'adv', 'tutorial', 'gon', 'flo'); ?>
			</ul>

		<h3 class="no-margin-top no-margin-bottom bold">Selected eBooks</h3>
			 <ul class="link-list irs no-margin-top">
				<?php echo print_subject('NURS', array('EBOOK'), 'adv', 'tutorial', 'gon', 'flo'); ?>
			</ul>
	</div>

	<div class="right">
		<!--<img style="margin-top:-65px; margin-left:70px;" class="padding35-left;" src="/img/subject-guides/nursing150.png" alt="Nursing" title="Nursing" />-->
		<img style="margin-top:-35px; margin-left:70px" src="/img/subject-guides/nursing.png" alt="Nursing" title="Nursing" />

		<h5 class="no-margin-top no-margin-bottom bold">Selected Videos</h5>
	  	<ul class="link-list irs no-margin-top">
		<?php echo print_subject('NURS', array('VIDEO','FREE'), 'adv', 'tutorial', 'gon', 'flo'); ?>
		</ul>

		<h5 class="no-margin-top no-margin-bottom bold">Course Guides</h5>
	  	<ul class="link-list padding10-left no-margin-top">
		 	<li><a href="/subject-guides/nursing/guides-tutorials.php">Course Guides &amp; Tutorials</a></li>
            <li><a id="pdf" href="/subject-guides/nursing/docs/nursing-orientation.docx">Library Nursing Orientation</a></li>
	  	</ul>

	  	<h5 class="no-margin-top bold">Department Handbooks</h5>
			<ul class="link-list padding10-left no-margin-bottom">
			 	<li><a href="https://my.olivet.edu/depts/libraryresources/Resources/nursing" title="All Nursing Handbooks" target="_blank">All Nursing Handbooks</a><br /></li>
			</ul>



	  	<h5 class="no-margin-top no-margin-bottom bold">Websites</h5>
	  	<ul class="link-list irs padding10-left no-margin-top">
		 	<li class="no-graphic"><a href="/subject-guides/nursing/selected-sites.php">Selected Sites</a></li>
	  	</ul>
   </div>
</div>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
