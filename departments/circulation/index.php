<?php
   $page_title = "Circulation Department - Benner Library";
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


<h1>Circulation Department</h1>
	<p>The Circulation Department administers the circulation of library materials, course reserves, and stack maintenance. The Main Circulation Desk on first floor is where library patrons may check out and return books and course reserve materials, activate library privileges, request and pick-up interlibrary loan materials, pay library bills, and get information about library materials and services. Circulation is responsible for opening and closing the building, monitoring adherence to house rules, and the general safety and security of the building and collections. It is led by the Access Services Librarian and staffed by Circulation Supervisors and Student Assistants.</p>

	<div class="split l30-r70">
        <div class="left">
			<ul class="padding10">
				<!--DECISION: On department pages, contact will always be first and student job description will always be last.-->
                <li><a href="/departments/circulation/contact.php">Contact Circulation Department</a></li>
				<li><a href="/departments/circulation/circulation-desk.php" title="">Circulation Desk Policies</a></li>
				<li><a href="/departments/circulation/student-job-description.php">Student Job Description</a></li>
            </ul>
        </div>
        <div class="right padding15-right padding15-left border-box">
            <img src="/img/staff/departments/circulation.jpg" alt="Department Picture" title="Circulation Department"/>
        </div>
    </div>
	
<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>