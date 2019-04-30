<?php
   $page_title = "Template - Benner Library";
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


<h1>Journal Search</h1>
<p>Search for a journal by title or ISSN.</p>
<div class="margin15">
<iframe style="width:100%; height:1000px; border:none; scroll:none" src="https://gg9fg7cr5h.search.serialssolutions.com/?SS_searchTypeJournal=yes"></iframe> 
</div>
<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>