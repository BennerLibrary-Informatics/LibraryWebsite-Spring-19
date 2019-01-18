<?php
   $page_title = "Print from SPSS/PASW - Benner Library";
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

<h2 class="header-line">Print from SPSS/PASW</h2>           
                                   
	<p>
            <p>There are two print options:</p>
            	<ol>
					<li>Option 1 Use PDF Creator</li>
						<ul>
						<li>File: Print</li>
						<li>Select PDF Creator as the printer</li>
						<img src= "/help/technology/printing/doc/pasw.png" />
						<li>click OK</li>
						<li> A prompt will pop-up to save the file</li>
						<li>Click save </li>
						<li>Another box will appear and click save</li>
						<li>The document will open upon saving and you will be able to print</li>
						</ul>
					<li>Option 2 If PDF Creator is not an option, you will have to use Windows XPS Document and you will have to go to:</li>
						<ul>
						<li>File: Print</li>
						<li>Select Windows XPS Document</li>
						<img src= "/help/technology/printing/doc/xps.png" /> 
						<li>Click OK</li>
						<li> A prompt will pop-up to save the file</li>
						<li>Click save </li>
						<li>Open the document depending on where you saved it and you will be able to print it.</li>
						</ul>
				</ol>
    <p>*If you have any issues after completing these steps, please find a Library Informatics Lab Assistant*</p>
		

<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>