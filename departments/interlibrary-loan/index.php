<?php
   $page_title = "Interlibrary Loan - Benner Library";
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
<h1>Interlibrary Loan</h1>
	<div class="split l50-r50 cf">
        <div class="left">
            <p>The Interlibrary Loan department borrows items for Olivet patrons, and lends Benner Library materials to other institutions’ patrons. Materials include journal articles, books, and media.
			</p>

			<p>If you need materials not immediately available through BLISweb or I-Share, you may request them through Interlibrary Loan (ILL).  This service allows us to access materials from thousands of other libraries throughout the world, including hundreds in Illinois.  ILL is available only to Olivet students, faculty and staff.
			</p>

        </div>
        <div class="right padding15-right padding15-left border-box">
            <img src="/img/staff/departments/interlibrary-loan.jpg" alt="Department Picture" title="Interlibrary Loan Department"/>
        </div>
    </div>

    <h4 class="no-margin-bottom">Ordering ILL Materials:</h4>
        <ol style="no-margin-top">
            <li>Before you request an item through Interlibrary Loan, be sure you've checked other resources provided by Benner Library Online for that item.</li>
                <ul>
                    <li>Check eJournals Full Text using the Journal title.</li>
                </ul>
            <li>If you identified a citation in a database use the Request link provided.</li>
                <ol>
                    <li>Most databases have an &quot;Interlibrary Loan&quot; <img align="absmiddle" src="/img/ill.png" /> graphic or another type of request graphic.</li>
                    <li>Type your patron information, click submit, and your request will go directly to our ILL department.</li>
                    <li>Turnaround time is most efficient if you use these database request forms.</li>
                </ol>
			<li>If you have a partial or full citation, you may also order using the <a href="/forms/interlibrary-loan-request/index.php" target="_blank">ILL Open URL Form</a> or email the information to an <a href="/forms/email/index.php?id=008">ILL Staff Member</a>.</li>   
        </ol>
    <h4 class="no-margin-bottom">Other Interlibrary Loan related links</h4>
            <ul class="padding10-left">
                <!--DECISION: On department pages, contact will always be first and student job description will always be last.-->
				<li><a href="/departments/interlibrary-loan/contact.php">Contact Interlibrary Loan</a></li>
				<li><a href="/departments/interlibrary-loan/policies.php">Interlibrary Loan Policies</a></li>
				<li><a href="/departments/interlibrary-loan/student-job-description.php">Student Job Description</a></li>
            </ul>




<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
