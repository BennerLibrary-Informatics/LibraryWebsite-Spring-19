<?php
   $page_title = "Informatics Department - Benner Library";
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


<h1>Informatics Department</h1>

    <p>The Library Informatics Department is responsible for implementing and maintaining library and research technologies, including library databases, catalogs, website and much more.  Library Informatics is a department of the library and not the campus IT unit.  It is led by the Informatics & Curriculum Librarian and staffed with library assistants.</p>

    <p>Library Informatics provides many services, including off-campus access to our library databases, lab assistants to provide help to users of the library computer lab and laptop checkout. <a id="pdf" href="https://docs.google.com/document/d/1LPnQVw8oGx5ASGr60M-_Z9W4SqIEAcYWJYciDaEKKvY/edit?usp=sharing" target="_blank">More information</a>.</p>

    <p>Watch the Benner Bulletins on the library homepage, to see when/if Informatics is hiring. If you would like to have an application on file for future openings fill out an <a href="http://library.olivet.edu/forms/student-job-application/index.php" target="_blank">application</a> online.</p>

    <div class="l40-r60">

        <div class="left">
            <ul class="padding10">
				<!--DECISION: On department pages, contact will always be first and student job description will always be last.-->
                <li><a href="/departments/informatics/contact.php">Contact Library Informatics Department</a></li>
				<li><a href="/departments/informatics/computer/gpl/index.php" title="Located on Lower Level of Benner Library">General Purpose Lab</a></li>
                <li><a href="/departments/informatics/computer/il/index.php" title="Located on First Floor of Benner Library">Instruction Lab</a></li>
                <li><a href="/departments/informatics/computer/public_research_stations/index.php" title="Located throughout First Floor of Benner Library">Public Research Stations</a></li>
                <li><a href="/departments/informatics/computer/learning-development/index.php" title="Located on Lower Level of Benner Library">Learning and Development Computer Lab</a></li>
                <li><a href="/departments/informatics/computer/gpl/laptop/index.php">How to check out a laptop</a></li>
				<li><a id="pdf" href="https://docs.google.com/document/d/1LPnQVw8oGx5ASGr60M-_Z9W4SqIEAcYWJYciDaEKKvY/edit?usp=sharing" target="_blank">Informatics' Expectations & Responsibilities</a></li>
				<!--<li><a href="/departments/informatics/student-job-description.php">Student Job Description</a></li>-->

            </ul>
        </div>

        <div class="right padding15-right padding15-left border-box">
            <img src="/img/staff/departments/informatics.jpg" alt="Department Picture" title="Informatics Department"/>
        </div>

    </div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
