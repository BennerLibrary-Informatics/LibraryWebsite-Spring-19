<?php
   $page_title = "About Curriculum Center - Benner Library";
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


<h1>About Curriculum Center</h1>

	<div class="150-r50">
        <div class="left">
			<p>
				The Curriculum Center is located on the second floor of Benner Library. The collection consists of juvenile books, curriculum materials, samples of K-12 textbooks, DVDs/videos, CDs, and sheet music. The area is designed to accommodate groups working on projects and provides listening and viewing booths. A public service desk in this area is available for assistance in searching for materials on our online catalog and in locating them within the collection.
			</p>
			<ul class="padding10">
				<!--DECISION: On department pages, contact will always be first and student job description will always be last.-->
                <li><a href="/departments/curriculum-center/contact.php">Contact Curriculum Center</a></li>

            </ul>
        </div>

        <div class="right padding15-right padding15-left border-box">

        </div>
    </div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
