<?php
   $page_title = "Instructional Services - Benner Library";
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


<h1>Instructional Services</h1>

    <div class="split l50-r50 cf">
		<div class="left">
				<p>
					The Instructional Services department of Benner Library coordinates library orientation for new students and conducts research instruction for general education courses with research assignments. Sessions for more advanced courses are provided upon faculty request.
				</p>
				<ul class="padding10">
					<!--DECISION: On department pages, contact will always be first and student job description will always be last.-->
	                <li><a href="/departments/instructional-services/contact.php">Contact Instructional Services</a></li>
					<li><a href="/forms/email/index.php?id=113">Schedule Library Instruction</a></li>
					<li><a href="/departments/instructional-services/student-job-description.php">Student Job Description</a></li>
	            </ul>
		</div>

		<div class="right padding15-right padding15-left border-box">
				<img src="/img/staff/departments/instructional-services.jpg" alt="Department Picture"  title="Instruction Services"/>
		</div>
	</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
