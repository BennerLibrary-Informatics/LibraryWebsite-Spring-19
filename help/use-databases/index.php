<?php
   $page_title = "Using Database - Benner Library";
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
<!--NeedsSomething.  Need description to float and line up better-->
<h1>Using Databases</h1>
	<ul class="link-list">
		<li><a href="/help/use-databases/access-issues.php">Access Issues</a></li>
		<li><a href="/help/use-databases/login-issues.php">Login Issues</a></li>
		<li><a href="/help/use-databases/password-issues.php">Password Issues</a></li>
		<li><a href="/help/use-databases/ebook_central/index.php">Ebook Central Database</a></li>
		<li><a href="/help/use-databases/ebsco/index.php">EBSCO Databases</a></li>
		<li><a href="/help/use-databases/lexis_nexis/index.php">LexisNexis Databases</a></li>
		<li><a href="/help/use-databases/proquest/index.php">ProQuest Databases</a></li>
	</ul>

	<h5>Other database help:</h5>
	<p><?php echo print_bookmark('124', 'under_description', 'tab', 'no'); ?>
		<small>
		Powered By <img align="absmiddle" src="/img/dcod.png" />
		</small>
	</p>
	
	
		

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>