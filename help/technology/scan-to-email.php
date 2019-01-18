<?php
   $page_title = "Scan to Email - Benner Library";
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

<h2 class="header-line">Scan to Email</h2>
  
	<ol>
		<li>Log in with Tiger Card using the Cpad.</li>
		<li>Click on Email.</li>
		<li>Enter either the recipient's email - *If you do not add recipient first you will not be able to scan your documents*</li>
		<li>To put multiple pages into one document, see <a href="/help/technology/job-assembly.php">Job Assembly</a>.</li>
	</ol>	
		

		  
    <p>*If you have any issues after completing these steps, please find a Library Informatics Lab Assistant*</p>
		

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>