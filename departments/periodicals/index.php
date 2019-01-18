<?php
   $page_title = "Periodicals Department - Benner Library";
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


<h1>Periodicals Department</h1>


	<div class="split l50-r50">
        <div class="left">
            <p>
                The Periodicals Department of Benner Library is responsible for maintaining of the physical periodical and journal collections, including newspapers, highlighted Browse Area titles, specialized religious materials, and microfiche/microfilm collections. It also maintains a pleasant physical neatness of the collections, maintains paper and electronic lists periodical holdings, and corresponds with publishers and subscription agencies.
            </p>
            <ul class="padding10">
                <!--DECISION: On department pages, contact will always be first and student job description will always be last.-->
				<li><a href="/forms/email/index.php?id=027">Contact Periodicals Department</a></li>
				<li><a href="/departments/periodicals/student-job-description.php">Student Job Description</a></li>
            </ul>
        </div>
        <div class="right padding15-right padding15-left border-box">
            <img src="/img/staff/departments/periodicals.jpg"/ alt="Department Picture" title="Periodicals Department">
        </div>
    </div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
