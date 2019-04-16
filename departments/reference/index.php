<?php
   $page_title = "Reference Department - Benner Library";
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
<h1>Reference Department</h1>
	<!--Save this for summer...
	<div class="margin15 color-light-red padding5-top padding5-bottom">
		<p>Reference assistance is available on a more limited basis during the summer. To make an appointment, visit the <a href="/contact/ask-a-librarian.php">Ask a Librarian</a> page.</p>
	</div>-->
	<div class="split l30-r70 cf">
		<div class="left">
			<div class="margin10-left margin10-right border-double color-light-grey fcolor-grey center">
				<h4>Reference Desk Hours:</h4>
				<h5 class="no-margin-bottom">Monday-Thursday</h5>
				<p class="no-margin-top">9am-10pm<br>
				<h5 class="no-margin-bottom">Friday</h5>
				<p class="no-margin-top">9am-5pm</p>
				<h5 class="no-margin-bottom">Saturday</h5>
				<p class="no-margin-top">No Services</p>
				<h5 class="no-margin-bottom">Sunday</h5>
				<p class="no-margin-top">7:30pm-10:00pm<br />

				<p><em>Reference service not always available during  student breaks and university holidays.</em><br /><br />
				<a id="pdf" href="/about/hours/doc/exceptions.pdf" target="_blank">Exceptions for holidays and breaks</a></p>

			</div>
		</div>
		<div class="right">
			<h3 class="no-margin-top">Reference Services</h3>
			<ul>
				<li>Narrowing and focusing research topics, and identifying concepts</li>
				<li>Accessing useful resources and navigating the online databases</li>
				<li>Helping to properly cite sources in MLA and APA citation styles</li>
				<li>Assisting with any other general library and research related questions</li>
			</ul>


			<div class="split l50-r50 cf">
				<div class="left">
					<h4 class="no-margin-bottom">Other Reference Links:</h4>
					<ul class="padding10">
						<!--DECISION: On department pages, contact will always be first and student job description will always be last.-->
						<li>Contact the <a href="/departments/reference/contact.php">Reference Department</a></li>
						<li><a href="/departments/reference/description.php">Reference Department Description</a></li>
						<li><a href="/departments/reference/student-job-description.php">Student Job Description</a></li>
            <li><a href='/departments/reference/desk/index.php'>Reference Desk Status</a></li>
					</ul>
				</div>

				<div class="right">
					<div class="padding15-right padding15-left border-box">
						<img src="/img/staff/departments/reference.jpg" alt="Reference Department Picture" title="Reference Department"/>
					</div>

					<br />
                </div>
		    </div>
	    </div>
    </div>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
