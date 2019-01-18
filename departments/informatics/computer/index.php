<?php
   $page_title = "Informatics` Lab - Benner Library";
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

<h1 class="no-margin-top">Informatics` Computers</h1>

    <ul class="link-list padding10-left">
        <li><a href="/departments/informatics/computer/gpl/index.php" title="Located on Lower Level of Benner Library">General Purpose Lab</a></li>
        <li><a href="/departments/informatics/computer/il/index.php" title="Located on First Floor of Benner Library">Instruction Lab</a></li>
        <li><a href="/departments/informatics/computer/public_research_stations/index.php" title="Located throughout First Floor of Benner Library">Public Research Stations</a></li>
        <li><a href="/departments/informatics/computer/learning-development/index.php" title="Located on Lower Level of Benner Library">Learning and Development Computer Lab</a></li>
        <li><a href="/departments/informatics/computer/gpl/laptop/index.php">How to check out a laptop</a></li>
    </ul>



<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>