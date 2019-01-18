<?php
   $page_title = "Web Printing - Benner Library";
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
<h2 class="header-line">Web Printing</h2>
	<div class="split l60-r40 cf">
		<div class="left">
			<p>Use the web printing feature from the top nav bar on any library web page:<br />
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Campus Links --> Web Printing<br /><br />
			The web printing feature only works from campus network connections and wifi to the library printers.<br /><br />
			Troubleshooting tip: If you are having problems getting a file to upload or print, save it as a pdf file and try again.<br /><br />
			For additional help or instructions, please see a lab assistant located in both library labs or watch the tutorial.
			<a href="/help/technology/printing/web-printing/tutorial.php"><img align='top'  src="/img/help/tutorial_movie.png" /></a>
			</p>
		</div>

		<div class="right">
			<a href="http://webprint.olivet.edu/" target="_blank" /><img class="padding15-left" src="/img/bulletins/220x130/web_printing.png" alt="Image of web printing" title="Go to web printing" /></a><br />
			<p>Click on the image above for web printing.</p>
		</div>
	</div>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
