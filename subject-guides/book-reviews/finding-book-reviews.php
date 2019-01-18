<?php
   $page_title = "Finding Book Reviews - Benner Library";
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
<h2 class="header-line">Finding Book Reviews</h2>
    <ul>
        <li><strong>Search for Book Reviews by the author and title of the original work.</strong> Limit your search to the year the work was published and the new few years.</li><br />
        <li><a href="http://guides.library.ucsb.edu/bookreviews" target="_blank">Definition &amp; info you need to gather before you search</a> (from UC Santa Barbara Library)</li>
    </ul>

<h2>Print Sources (starting with 1900)</h2>
    <ul>
        <li><em><strong>Book Review Digest</strong></em> (1965-present, also <a href="https://login.proxy.olivet.edu/login?url=http://search.ebscohost.com/login.aspx?authtype=ip&amp;profile=ehost&amp;defaultdb=brd" target="_blank">online</a> )<br />
        Shelved near the Circulation Desk on the first-floor of Benner Library<br />
        <a href="http://www.hencc.kctcs.net/llrc/skills/pathfinder2/book_review_digest.htm" target="_blank">About the Book Review Digest</a></li>
        <br />

        <li><em><strong>Book Review Index</strong></em> (1905-2010, also <a href="https://login.proxy.olivet.edu/login?url=http://infotrac.galegroup.com/itweb/bour15879?db=BRIP" target="_blank">online</a>: 1983-present)<br />
        Shelved near the Circulation Desk on the first-floor of Benner Library<br />
        <a href="http://www.gale.cengage.com/servlet/BrowseSeriesServlet?region=9&amp;imprint=000&amp;titleCode=BRI&amp;edition=" target="_blank">About the Book Review Index</a></li>
        <br />

        <li><em><strong>Reader’s Guide to Periodical Literature</strong></em> (1900-2011)<br />
        Shelved near the Instruction Lab on the first-floor of Benner Library<br/>
        <a href="http://onlinebooks.library.upenn.edu/webbin/serial?id=rgperiodicals" target="_blank">About the Reader's Guide</a> (including link to some online content from early 1900s)</li>
        </ul>

<h2>Online Sources (popular &amp; scholarly reviews)</h2>
    <ul class='link-list irs'>
        <?php echo print_resource('592', 'basic', 'float_description' ); ?>: Scholarly reviews.  Under “Publication Type,” choose “Review.”
        <li class="no-graphic"><a href="https://olivet.summon.serialssolutions.com/" target="_blank">Summon</a>: Search most of Benner Library's databases at once, then limit “content Type” to “Book Review”</li>
        <?php echo print_resource('578', 'basic', 'float_description', 'in-li'); ?>: Scholarly reviews.  Narrow the “Item Type” to “Reviews.”
        <?php echo print_resource('564', 'basic', 'float_description', 'in-li'); ?>: Popular and scholarly reviews; under “Document Type,” Choose “Book Review.”
        <?php echo print_resource('628', 'basic', 'float_description', 'in-li'); ?>: Reviews by librarians and faculty—includes readership level.
	</ul>
<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
