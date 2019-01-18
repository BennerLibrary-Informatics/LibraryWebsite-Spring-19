<?php
   $page_title = "OSS Web Email Sender - Benner Library";
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
<h1>Web Email Sender</h1>
                                        
    <a class="padding15-left title-font" href="/services/open-source/downloads/web-email-sender.zip">Web Email Sender 1.0</a>

    <p>The Web Email Sender program is a ColdFusion script that will enable you to remove all the email addresses (mailto's) from your Web site and put them in a database, thereby removing them from sight and from the reach of spammers.</p>
               
<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>