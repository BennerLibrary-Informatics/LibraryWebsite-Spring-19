<?php
   $page_title = "Chicago/Turabian Help - Benner Library";
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
<h1>Chicago/Turabian Help</h1>

    <h5>Citation Help</h5>

		<div class="margin15">

		Full text version of <?php echo print_resource('801', 'basic', 'no_description', 'no-li'); ?> 17th ed. (2017)<br /><br />
		<a href="https://owl.english.purdue.edu/owl/resource/717/01/" target="_blank">Chicago Manual of Style Online 17th Ed. (2017)</a> - Purdue OWL<br /><br />
		<a href="http://writing.wisc.edu/Handbook/DocChicago.html" target="_blank">Chicago/Turabian Documentation Style</a> - The Writing Center at the University of WI-Madison<br /><br />
        <a id="pdf" href="/help/citation/chicago-turabian/docs/turabian_companion.pdf " target="_blank">Turabian Companion for Olivet Nazarene University undergraduates</a> -  Dr. Edward J. Ellis<br /><br />
		</div>

    <h5>Writing Help</h5>
        <p class="no-margin-top"><a href="http://writing2.richmond.edu/writing/wweb/tura.html" target="_blank">Turabian Writing Help</a> - University of Richmond</p>
        <p class="no-margin-top"><a href="http://www.press.uchicago.edu/books/turabian/turabian_citationguide.html" target="_blank">Turabian Citations</a> - University of Chicago</p>
		<p class="no-margin-top"><a id="pdf" href="https://owl.english.purdue.edu/media/pdf/1300991022_717.pdf" target="_blank">Sample paper</a> - from the Purdue Online Writing Lab.<br />
		<em>Note: On each new page, the first time a source is used add a shortened note. Use “ibid.” only after the shortened note has been listed.</em></p>


    <h5>DOI Help</h5>
        <p class="no-margin-top"> <a href="http://dx.doi.org/ " target="_blank">DOI Resolver</a><br />
            <a href="http://www.crossref.org/guestquery/" target="_blank">Find a DOI</a><br />
            <a href="http://www.crossref.org/SimpleTextQuery/ " target="_blank">Simple Text Query Form</a><br />
            <a href="http://blog.apastyle.org/apastyle/2009/12/how-to-find-a-doi.html " target="_blank">How to Find a DOI</a><br />
        </p>



<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
