<?php
   $page_title = "Primary Sources: Sciences - Benner Library";
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
<h1>Primary Sources</h1>
<p>The definition of primary source varies by discipline. The sciences rely on data, while scholars in the humanities rely on eye-witness accounts. Select a category below to learn more and to access selected resources available for Benner Library patrons.</p>

<div class="split l60-r40 cf">
	<div class="left">
		<p><a href="/subject-guides/primary-sources/humanities/index.php">Primary Sources: Humanities</a> - Including art, history, political science, religion, etc.</p>
		<p><a href="/subject-guides/primary-sources/sciences.php">Primary Sources: Sciences</a> - Including biology, chemistry, mathematics, nursing, etc.</p>
		<p><a href="/subject-guides/primary-sources/social-sciences.php">Primary Sources: Social Sciences</a> - Including business, criminal justice,  sociology, psychology, etc.</p>
	</div>
	
	<div class="right">
		<img class="padding15-left" src="/img/subject-guides/primary_sources.png" alt="Primary Sources" />
   </div>
</div>


<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>