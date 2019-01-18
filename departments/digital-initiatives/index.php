<?php
   $page_title = "Digital Initiatives Department - Benner Library";
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


<h1>Digital Initiatives Department</h1>


	<div class="split l60-r40">
        <div class="left">
            <p>
                The Department of Digital Initiatives digitizes and curates academic scholarship and historically significant text and images in order to provide open access electronic versions for research and to protect our past and present so it is available for our future.
            </p>
            <ul class="padding10">
                <!--DECISION: On department pages, contact will always be first and student job description will always be last.-->
				<li>Contact <a href="/departments/digital-initiatives/contact.php">Digital Initiatives Department</a></li>
				<li>Go to <a href="https://digitalcommons.olivet.edu/" target="_blank">Digital Commons</a></li>
				<li><a href="/departments/digital-initiatives/student-job-description.php">Student Job Description</a></li>
            </ul>
        </div>
        <div class="right padding15-right padding15-left border-box">
            <img src="/img/staff/jcieszyn.JPG" alt "Department Picture" title="Digital Initiatives Department"/>
        </div>
    </div>
	
<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>