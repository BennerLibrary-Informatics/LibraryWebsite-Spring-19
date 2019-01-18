<?php
   $page_title = "Ask A Librarian - Benner Library";
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


<h1>Ask a Librarian</h1>

<div class="split cf">
    <div class="left">
        <p class="title-font">Call: 815-939-5355</p>
        <p class="title-font">Email (Undergrads):<br />
		<a href="/forms/email/index.php?id=009">ONULibrary</a></p>

        <p class="title-font">Email (Grad &amp; Continuing Studies):<br />
		<a href="/forms/sgcs_email/index.php?id=004,010,016">Grad & Adult Librarians</a></p>

        <p class="title-font">Reference Hours:<br />
		<a href="/departments/reference/index.php">Reference Department</a></p>
    </div>

    <div class="right">
        <p><img src="/img/staff/librarian3.png" alt="Librarian Picture" title="The Librarians" width="100% height="auto"/></p>
    </div>
</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
