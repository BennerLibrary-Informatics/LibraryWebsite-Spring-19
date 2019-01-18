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
<h1>Primary Sources: Sciences</h1>

<div class="split l60-r40 cf">
   <div class="left">
		<h3 class="no-margin-top bold">Selected Databases</h3>
		<p>Including biology, chemistry, mathematics, nursing, etc.</p>
			<ul class="link-list irs">
			<?php echo print_subject('27', array('5', '2', '3', '12'), 'bas', 'tutorial', 'gon', 'flo'); ?>
			</ul>

</div>
	<div class="right">
		<img class="padding15-left" src="/img/subject-guides/primary_sources_sciences.png" alt="Primary Sources Sciences" />

	<h5 class="bold">Definition &amp; Tutorials</h5>
        	<ul class="link-list padding10-left">
	            <li><a href="http://libguides.lib.msu.edu/scienceprimarysources" target="_blank">Definition from Michigan State University Libraries</a></li>
				<li><a href="/help/find-articles/find-research-literature.php">How to Find Research Literature</a></li> 
				<li><a href="/help/find-articles/use-google-scholar.php ">Using Google Scholar</a></li>
	        </ul>
   </div>


</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
