<?php
   $page_title = "OSS WARP - Benner Library";
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
<h1>WARP 1.0</h1>
                    
    <h2>Web Access Reserve Program</h2>
                    
    <h4>WARP from the User's Perspective:</h4>
                            
        <p>When library patrons click on your library's web page link for eReserve, this script takes them to a page that lists the professors who have items on eReserve. When a professor's name is clicked, the class numbers show for which there are eReserve items. When the class number is clicked, the article titles show, ending with a &quot;.pdf&quot;. When a title is clicked, the article is displayed in Adobe Acrobat format.</p>
                        
    <h4>WARP has the Following Features:</h4>

        <div class="padding35-left">
            <ol>
                <li>WARP is written in Perl and is portable to any UNIX, Linux, NT/2000, or Novell Netware platforms.</li>
                <li>WARP checks the IP address of the person making the inquiry.  If it does not belong to your home institution, then a "request denied" web page is returned.  WARP files can be authenticated with proxy systems like EZProxy.</li>
                <li>If the user is coming from an authorized IP address, then the script reads the file structure for the names of the professors, class numbers, and article names along with the "padding" of your library's web page layout (background, logos, etc).</li>
                <li>Persons managing eReserve create directories/folders with professor names on the web server network drive; subfolders are then created within the Professor's Name folder named with the professors' class numbers, and the script puts those same professor names and class numbers on their respective web pages.  Clicking on a class number brings up the pdf articles for that class.</li>
                <li>Persons managing eReserve should name the scanned articles to be used with the title of the article.  They can click and drag the pdf files they stored on their workstation's hard drive to the network drive's class number directory/folder which will make the pdf article title immediately available on the Web.</li>
                <li>EReserve can be managed by deleting the pdf files on the network drive but keeping the files on the local workstation in case the professor wants to have them available during a later semester.</li>
                <li>Be sure to follow your institution's fair use copyright eReserve policy.  WARP's structure limits access to any authenticated university user, not just to members in a specific class.  This might be a problem with some eReserve copyright policies, but what college student in their right mind will read readings for classes they're not in?</li>
                <li>The WARP zip file includes the warpREADME.html, reserve.pl, and cgi-lib.pl files: Download <a HREF="/services/open-source/downloads/warp.zip">WARP 1.0</a> here.</li>
            </ol>
        </div>

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>