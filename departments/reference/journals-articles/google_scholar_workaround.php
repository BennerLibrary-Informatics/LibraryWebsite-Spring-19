<?php
   $page_title = "Google Scholar Workaround - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "<script src=\"https://use.fontawesome.com/8136fa61ab.js\"></script>";
	$js = "";
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->
<!--NeedsSomething - Redo tutorial.  Consult w Pam-->

<h2 class="header-line">Google Scholar Workaround</h2>

	<p>
	If you need to link Olivet Nazarene University resources to Google scholar follow the steps below. This is also the workaround if you are getting a reCAPTCHA error when you try to access Google Scholar from the designated library link."
	</p>

	<ol>
		<li>
			Go to <a href="https://scholar.google.com" target="_blank">Google scholar <i class="fa fa-external-link" aria-hidden="true"></i></a> from this link (not from normal library link).
		</li>
		<li>
			Click on Settings (top navigation - last entry / or more then settings).
		</li>
		<li>
			Click on Library Links (left navigation - about third entry down).
		</li>
		<li>
			Type Olivet in the blank box and click the search box.
		</li>
		<li>
			Check both Olivet Nazarene University options and click Save.
		</li>
		<li>
			This should return you to the Google Scholar main search page where you can continue your research. When the library has access to a resource Olivet Nazarene Univ will appear as a link to the right of the citation.
		</li>
		<li>
			If you still get a reCAPTCHA error again try these steps:
			<ul>
				<li>Close all browser windows (including Canvas) and start with a new window. Go straight to http://library.olivet.edu - do NOT use Canvas or My Olivet links.</li>
				<li>Type in https://scholar.google.com instead of following the link.</li>
				<li>Clear cache, cookies, and history.</li>
			</ul>
			then repeat steps 2-6.
		</li>
	</ol>

	<p>If you have any further issues please do not hesitate to <a href="/forms/email/index.php?id=105">contact our team</a>.</p>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
