<?php
   $page_title = "OSS ILL Wizard - Benner Library";
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
<h1>ILL Wizard</h1>

    <h4>ILL Wizard 1.0</h4>

        <p>ILLWizard 1.0 is our newest ISO-compliant ILL Web form and is superior to the REDIR-reliant version below.  The version 1.0 now available works in IE versions 4.01 and later and Netscape versions 4.51 and later. ILL Wizard is more easily customizable and is better designed than previous versions. It can run from a desktop or from your library's Web site server directory.  If you have questions concerning this product, write the <a href="/forms/email/index.php?id=010">Informatics Librarian</a> or the <a href="/forms/email/index.php?id=001">Digital Initiatives Librarian</a>.</p>

        <p>Non programmer technical librarians should be able to configure and mount this Java Web form without help from the Computer Center.  Customize the applet by changing the Java parameters in the illwizard.html file; customize the web page on which the applet appears by adding your own html code to the same file. Be sure to follow the documentation in the README.html file.</p>

        <p>The Java code for ILLWizard is also available in another zip file for those who need or want to change code, but it is not necessary to do so as the program is quite customizable.</p>

        <p><a HREF="/services/open-source/downloads/illwizard.zip">ILL WIZARD VERSION 1.0</a><br /><br />
        <a HREF="/services/open-source/downloads/wizardsource.zip">ILL WIZARD VERSION 1.0 Source Code</a>><br /><br /></p>

    <h4>ONU-ILL 3</h4>

        <p>ONU-ILL Version 3 is an older version of ILL Wizard, also programmed in Java and Direct Request enabled to the OCLC ILL function. These forms should work on Windows and UNIX servers and workstations. Other operating systems may work as well. To download the ISO archive files, click on the links below.</p>
        <p><a href="/services/open-source/downloads/onu-ill-3.1.zip">VERSION 3.1</a>  (Java application compiled and non-compiled .zip versions)</p>
        <p><a href="/services/open-source/downloads/onu-ill-3.2.zip">VERSION 3.2</a>  (Java applet .zip version - requires REDIR on the server, Linux only)</p>
        <p>All code is open and available for customizing. Developers of Versions 3.1 and 3.2 have published their work and thought processes in the following article.<br />
            <blockquote>Hippenhammer, Craighton, and Bryan Wilhelm. "Interlibrary Loan Form Java Programming and Direct Request." <span class="italic">Journal of Interlibrary Loan, Document Delivery &amp; Information Supply</span>>. Vol 9(4) 1999, pp. 5-13 and also in Benner Library's <a href="https://digitalcommons.olivet.edu/lsci_facp/2/" target="_blank">Digital Commons</a>.</blockquote>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
