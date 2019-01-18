<?php
   $page_title = "Curriculum Center Department - Benner Library";
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


<h1>Curriculum Center</h1>

<div class="split l30-r70 cf">
    <div class="left">
        <div class="margin10-left margin10-right border-double color-light-grey fcolor-grey">
            <ul class="link-list">
				<li><a href="/departments/curriculum-center/about.php">About Curriculum Center</a></li>
				<hr />
				<li><a href="/subject-guides/education/professional/index.php">Education: Professional Subject Guide</a></li>
				<hr />
				<li><a href="/subject-guides/education/k12/index.php">Education: K-12 Subject Guide</a></li>
				<hr />
				<li><a href="/departments/curriculum-center/common-core/index.php">Common Core Resources</a></li>
				<hr />
				<li> <a href="https://www.isbe.net/Pages/Learning-Standards.aspx" target="_blank">Illinois State Standards</a></li>
				<hr />
				<li><a href="http://www.il.nesinc.com/" target="_blank">IL Certification Testing System</a></li>
        </div>
	</div>

    <div class="right">
		<ul class="link-list col-2 center">
			<ul>
			<a href="/departments/curriculum-center/books-periodicals/index.php">
			<img class="center" src="/departments/curriculum-center/img/books_periodicals.png" alt="Books & Periodicals" title="Link to Books & Periodicals" /></a>

			<a href="/departments/curriculum-center/manipulatives-kits/index.php">
			<img class="center" src="/departments/curriculum-center/img/manipulatives_kits.png" alt="Manipulatives & Kits" title="Link to Manipulatives & Kits" /></a>
			</ul>

			<ul>
			<a href="/departments/curriculum-center/supplies/index.php">
			<img class="center" src="/departments/curriculum-center/img/supplies.png" alt="Materials & Supplies" title="Link to Materials & Supplies" /></a>

			<a href="/help/curriculum-center/index.php">
			<img class="center" src="/departments/curriculum-center/img/tutorials.png" alt="Tips & Tutorials" title="Link to Tips & Tutorials" /></a>
			</ul>
	</div>
</div>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
