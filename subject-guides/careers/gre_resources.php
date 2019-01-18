
<?php
   $page_title = "GRE Resources - Benner Library";
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

<h1>GRE Resources</h1>
	
    
	<h3 class="no-margin-bottom">eBooks</h3>
        <p><?php echo print_bookmark('175', 'under_description', 'tab', 'no'); ?></p>
    
	
	<h3 class="no-margin-bottom">eBook Help</h3>
        <p><?php echo print_bookmark('177', 'under_description', 'tab', 'no'); ?></p>
	
	<h3 class="no-margin-bottom">Selected Websites</h3>
        <p><?php echo print_bookmark('176', 'under_description', 'tab', 'email'); ?></p>
	
	<h3 class="no-margin-bottom">Books</h3>
	<p>From any library web page, type "GRE" in the search box.  Choose the Library Catalog radio button and click on the search microscope.  Books that do not have "eBook" in the record are physical books located in the library.  Typically, there will only be one copy of these books in the library.  It will state in the record whether it is currently available.</p>
    



<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>