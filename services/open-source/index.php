<?php
   $page_title = " Open Source - Benner Library";
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
<h1>Open Source Software (OSS)</h1>

	<p>The Benner Library and Resource Center at Olivet Nazarene University has had an open source software program since 1996 (noted in 2002 by <a href="http://www.americanlibrariesmagazine.org/techspeaking/2002columns2/december2002 " target="_blank">American Libraries</a>), starting with an early version of ILL Wizard based on OCLC's ILL PRISM Transfer (IPT) technology, published in the Journal of Interlibrary Loan, Document Delivery &amp; Information Supply in 1997 and now published in ONU's <a href="https://digitalcommons.olivet.edu/lsci_facp/1/" target="_blank">Digital Commons</a>.  An upgraded Java applet version appeared in a 1999 issue of the same journal, the reprogrammed software based on OCLC's Direct Request ILL functions using the ISO 10161 protocol and now also published in <a href="https://digitalcommons.olivet.edu/lsci_facp/2/" target="_blank">Digital Commons</a>.</p>
	<p>Many other open source programs that run critical functions of the library have been programmed by Informatics' computer science students as work-made-for-hire efforts, the beginning of which are mentioned here.  More will be posted soon.</p>

	<p>For more information about ONU's Open Source Program, contact the <a href="/forms/email/index.php?id=010,099">Informatics Librarian and OSS Team Leader</a>.</p>

	<h3>Current Software</h3>
	<div class="padding25-left">
		<p><a class="title-font" href="/services/open-source/dcod/index.php">DCOD - Dynamic Content on Demand</a>
		<div class="padding35-left">
			Dynamic Content on Demand (DCOD) is a bookmarking and a mini content management system that is a php web-based system.  This program automatically populates categorized bookmarks or FAQ content onto a specified webpage.</p>
		</div>
	</div>


	<h3>Retired Software</h3>
	<div class="padding25-left">
		<p>The following programs are no longer being utilized by Benner library.  Please feel free to contact the <a href="/forms/email/index.php?id=010">Informatics Librarian</a> or the <a href="/forms/email/index.php?id=001">Digital Initiatives Librarian</a> with any questions.</p>

		<p><a class="title-font" href="/services/open-source/ill-wizard/index.php">ILL Wizard 1.0</a>
		<div class="padding35-left">
			ILLWizard 1.0 is an ISO-10161-compliant, Direct-Request-compatible ILL Web form that is easily customizable by non-technical librarians. The Java applet can be customized by changing the program parameters in the html file.</p>
		</div>

		<p><a class="title-font" href="/services/open-source/warp/index.php">WARP 1.0</a>
		<div class="padding35-left">
			The Web Access Reserve Program is a Perl script that will organize electronic reserve files by professor name and class number, and make uploading files to the web server a click and drag operation.</p>
		</div>

		<p><a  class="title-font"href="/services/open-source/web-email-sender/index.php">Web Email Sender 1.0</a>
		<div class="padding35-left">
			The Web Email Sender program is a ColdFusion script that will enable you to remove all the email addresses (mailto's) from your Web site and put them in a database, thereby removing them from sight and from the reach of spammers.</p>
		</div>
	</div>		
<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
