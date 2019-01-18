<?php
   $page_title = "Cataloging Department - Benner Library";
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


<h1>Cataloging Department</h1>

	<div class="split l60-r40">
        <div class="left">
            <p>
                The Cataloging Department is responsible for adding new materials to the Benner library collection. The essential duties performed in this department include the physical processing of books and other media and adding them to the computer catalog.
            </p>
            <ul class="padding10">
				<!--DECISION: On department pages, contact will always be first and student job description will always be last.-->
                <li><a href="/departments/cataloging/contact.php">Contact Cataloging Department</a></li>
				<li><a href="/departments/cataloging/student-job-description.php">Student Job Description</a></li>
            </ul>
        </div>
        <div class="right padding15-right padding15-left border-box">
            <img src="/img/staff/departments/cataloging.jpg" alt "Department Picture" title="Cataloging Department"/>
        </div>
    </div>
	
<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>