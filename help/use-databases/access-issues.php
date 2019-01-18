<?php
   $page_title = "Database Access Issues - Benner Library";
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

<h2 class="header-line">Database Access Issues</h2>

	<p>If you are having issues accessing a database or pdf <strong>after a successful login</strong> try the following steps:<br />
    This is not the solution if you are having problems with off campus (ezproxy) logins.

		<ol>
			<li>Restart your computer</li>
			<li>Try a different browser.  If you are using Internet explorer try Firefox.  If you are using Firefox try Internet Explorer, Safari, or Google Chrome.  If you are installing a new browser, do not allow it to add toolbars.</li>
				<ul>
				<li><a href="http://www.mozilla.org/en-US/firefox/fx/#desktop/" target="_blank">Install Firefox</a></li>
				<li><a href="http://www.google.com/chrome/" target="_blank">Install Google Chrome</a></li>
				<li><a href="http://windows.microsoft.com/en-US/internet-explorer/downloads/ie" target="_blank">Install Internet Explorer</a></li>
				<li><a href="http://www.apple.com/safari/download/" target="_blank">Install Safari</a></li>
				</ul>
			<li>Empty your cache. (Search the internet for "empty cache" and the name of your browser for instructions.)</li>
			<li>Delete cookies. (Search the internet for "delete cookies" and the name of your browser for instructions.)</li>
			<li>Remove any extra toolbars (particularly the google toolbar).</li>
			<li>The issue might be your security software.  EBSCO has step by step directions on two of the most common software issues: Norton and McAfee Virus Scanner (see links below).  They are actually very simple to follow.</li>
				<ul>
				<li>Help Guide for <a  id="pdf" href="/help/use-databases/ebsco/doc/ebsco_ie.pdf" target="_blank">Current EBSCO issue with Internet Explorer</a></li>
				<li><a href="http://support.ebsco.com/knowledge_base/detail.php?id=3565" target="_blank">EBSCO Support page</a> - locate the link that relates to your software product.</li>
				<li><a href="http://support.epnet.com/knowledge_base/detail.php?topic=996&amp;id=4370&amp;page=1" target="_blank">Norton Internet Security Help Page</a></li>

				</ul>
			<li>If you continue to have problems and would like assistance <a href="/contact/index.php">contact the library</a>.  They may ask to share you to share your screen. You can do so for free by following the directions at the <a href="/help/technology/screen-sharing.php">Screen Sharing</a> assistance site.</li>
		 </ol>
	</p>




<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
