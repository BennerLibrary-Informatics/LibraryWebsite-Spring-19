<?php
   $page_title = "Template - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = ""; 
   $creatorID    = "10";  //This ID is from the help_email ie 10
   $updaterID    = "20";  //This ID is from the help_email ie 10
   $creatorNotes = "and someone";  // this note will print before created date
   $updaterNotes = "and someoneelse";  // this note will print before updated date
   $createdDate  = "03/02/2015";  //The date entered here shows up ie 3/2/2015
   $updatedDate  = "07/07/2015";  //The date entered here shows up ie 3/2/2015
   $dateAdded    = "01/01/2015";  //The date entered here shows up ie 3/2/2015
   $dateRemoved  = "02/01/2015";  //The date entered here shows up ie 3/2/2015
   $additionalMessage = "This might be any additional comment at the end of the page."; //This message is in a new paragraph after create/update

?>

<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/top.php";
   include_once($path);
?>
<!-- ===== content below here ========================================================== -->
<h1>Heading One</h1>
<ul class="link-list col-3">
   <ul>
      <li><a href="#">Accounting/Finance <img src="/img/new.png" /></a></li>
      <li><a href="#">Art &amp; Digital Media</a></li>
      <li><a href="#">Astronomy</a></li>
   </ul>
   <ul>
      <li><a href="#">Accounting/Finance</a></li>
      <li><a href="#">Art &amp; Digital Media</a></li>
      <li><a href="#">Astronomy</a></li>
   </ul>
   <ul>
      <li><a href="#">Accounting/Finance</a></li>
      <li><a href="#">Art &amp; Digital Media</a></li>
      <li><a href="#">Astronomy</a></li>
   </ul>
   <li class="cf"></li>
</ul>

<h2>Heading Two</h2>
<h3>Heading	Three</h3>
<h4>Heading Four</h4>
<h5>Heading Five</h5>
<h6>Heading Six</h6>

<hr>

<h1>Heading One</h1>
<div class="float-box-right">
   <h3>Selected Gen Ed Course Guides:</h3>
   <br>
   <p><a href="#">Speech</a></p>
   <p><a href="#">College Writing II</a></p>
   <p><a href="#">Exegesis</a></p>
</div>
<p>Upscaling the resurgent networking exchange solutions, achieving a breakaway systemic electronic data interchange system synchronization, thereby exploiting technical environments for mission critical broad based capacity constrained systems. </p>
<p>In integrating non-aligned structures into existing legacy systems, a holistic gateway blueprint is a backward compatible packaging tangible of immeasurable strategic value in right-sizing conceptual frameworks when thinking outside the box. </p>

<ul>
   <li>resurgent</li>
   <li>existing</li>
   <li>systems</li>
   <ul>
      <li>resurgent</li>
      <li>existing</li>
      <li>systems</li>
   </ul>
</ul>

<h2>Heading Two</h2>
<p>Upscaling the resurgent networking exchange solutions, achieving a breakaway systemic electronic data interchange system synchronization, thereby exploiting technical environments for mission critical broad based capacity constrained systems. </p>

<h3>Heading	Three</h3>
<p>To more fully clarify the current exchange, a few aggregate issues will require addressing to facilitate this distributed communication venue. </p>

<h4>Heading Four</h4>
<p>Fundamentally transforming well designed actionable information whose semantic content is virtually null. </p>

<h5>Heading Five</h5>
<p>In integrating non-aligned structures into existing legacy systems, a holistic gateway blueprint is a backward compatible packaging tangible of immeasurable strategic value in right-sizing conceptual frameworks when thinking outside the box. </p>

<h6>Heading Six</h6>
<p>This being said, the ownership issues inherent in dominant thematic implementations cannot be understated vis-a vis document distribution on a real operating system consisting primarily of elements regarded as outdated and therefore impelling as a integrated out sourcing avenue to facilitate multi-level name value pairing in static components. </p>


<!-- ===== content above here ========================================================== -->				
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>