<?php
   $page_title = " - Benner Library - Template";
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


	<h1>Faculty Scholarship</h1>

			<p>View the <a href="/bin/faculty-scholarship/faculty-listing.php">Olivet Faculty Scholarship Database</a></p>

			<!-- NeedsSomething http://archives.olivet.edu/facultyscholar.html did this page get carried over or not?
			<p>Get help <a href="http://library.olivet.edu/facultyscholar.php">creating links</a> for the Faculty Scholarship Database</p>-->


			<p>Add to or update curriculum vitae in the Faculty Scholarship Database using one of the two options:</p>
				<ol>
					<li>Email your new publication citations and other scholarship activities to the <a href="/forms/email/index.php?id=001">Digital Initiatives Department</a> to have the library update your vitae for you.</li>
					<li>Update it yourself by using a library-supplied login and password, which you can get from the <a href="/forms/email/index.php?id=001">Digital Initiatives Department</a>.</li>
				</ol>

<!-- NeedsSomething - should the above two email come to Informatics or should they go to Craighton?-->


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
