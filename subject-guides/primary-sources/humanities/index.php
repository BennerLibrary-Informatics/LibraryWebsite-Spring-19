<?php
   $page_title = "Primary Sources: Humanities - Benner Library";
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
<h1>Primary Sources: Humanities</h1>

<div class="split l60-r40 cf">
   <div class="left">
		<h3 class="no-margin-top bold">Selected Resources</h3>
		<p>Including art, history, political science, religion, etc.</p>
			<ul class="link-list irs">
			<?php echo print_subject('79', array('5', '2', '3', '11', '12'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			</ul>
<br />
		<h5 class="no-margin-top bold">Primary Sources by Topic</h5>
		   	<ul class="link-list padding10-left">
				<li><a href="/subject-guides/primary-sources/humanities/african-american-studies.php">African American Studies</a></li>
				<li><a href="/subject-guides/primary-sources/humanities/art.php">Art</a></li>
				<li><a href="/subject-guides/primary-sources/humanities/history.php">History</a></li>
				<li><a href="/subject-guides/primary-sources/humanities/maps.php">Maps</a></li>
				<li><a href="/subject-guides/primary-sources/humanities/military-science.php">Military Science</a></li>
				<li><a href="/subject-guides/primary-sources/humanities/music.php">Music</a></li>
				<li><a href="/subject-guides/primary-sources/humanities/news.php">News</a></li>
				<li><a href="/subject-guides/primary-sources/humanities/religion.php">Religion</a></li>
		    </ul>
	</div>

	<div class="right">
		<img class="padding15-left" src="/img/subject-guides/primary_sources_humanities.png" alt="Primary Sources Humanities" />



	<h5 class="no-margin-top bold">Websites</h5>
		   	<ul class="link-list padding10-left">
				<li><a href="http://libguides.asu.edu/content.php?pid=6321&sid=39557" target="_blank">Open Access Primary Sources</a></li>
				<li><?php echo print_resource('705', 'basic', 'no_description'); ?></li>
				<li><?php echo print_resource('802', 'basic', 'no_description'); ?></li>
				<li><?php echo print_resource('547', 'basic', 'no_description'); ?></li>
		    </ul>

	<h5 class="bold">Definition &amp; Tutorials</h5>
        	<ul class="link-list padding10-left">
	            <li><a href="http://www.princeton.edu/~refdesk/primary2.html" target="_blank">Definition from Princeton University Library</a></li>
				<li><a href="http://www.library.illinois.edu/village/primarysource/mod1/index.htm" target="_blank"><img align="absmiddle"src="/img/help/tutorial.png" /> University of Illinois Library (what are primary sources; tutorial contains images and 15 examples) </a></li>
				<li><a href="http://www.library.illinois.edu/village/primarysource/mod3/index.htm" target="_blank"><img align="absmiddle"src="/img/help/tutorial.png" /> Five-step process tutorial from University of Illinois Library</a></li>
	        </ul>
   </div>


</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
