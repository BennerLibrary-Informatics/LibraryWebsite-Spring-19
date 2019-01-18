<?php
   $page_title = "Citation Assistance - Benner Library";
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


<h1>Citation Assistance</h1>

    <ul class="link-list cf">
        <li><a href="/help/citation/apa/index.php">APA Help</a></li>
        <li><a href="/help/citation/chicago-turabian/index.php">Chicago/Turabian Help</a></li>
        <li><a href="/help/citation/cse/index.php">Council of Science Editors (CSE)</a></li>
        <li><a href="https://ieee-dataport.org/sites/default/files/analysis/27/IEEE%20Citation%20Guidelines.pdf" target="_blank">IEEE</a></li>
        <li><a href="/help/citation/mla/index.php">MLA Help</a></li>
    </ul>

    <ul class="link-list highlight cf padding25-top">
        <li><a href="/contact/ask-a-librarian.php">Ask A Librarian</a></li>
        <li><a href="/forms/sgcs_email/index.php?id=004,010,016">Contact SGCS Librarians</a></li>
    </ul>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
