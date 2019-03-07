<?php
   $page_title = "1 Staffed - Benner Library";
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
<h1>Reference Desk Status</h1>

<div class="split l30-r70 cf">
  <div class="left center">
    <a href="/forms/email/index.php?id=009"><img src="/departments/reference/desk/img/staffed/ajohnsto.jpg" alt="graphic" /></a>
  </div>

  <div class="right center">
    <h5>Currently staffed by</h5>
    <h2 class="no-margin-top center">Ann Johnston</h2>
    <p><a href="/forms/email/index.php?id=009"><img align="absmiddle" src="/img/email.png" alt="email" title="contact via email"/></a>
    <i> | 815-939-5355</i></p>
    <p>
      Our reference staff sit at the reference desk in order to assist with research and library specific questions.
      Please "interrupt" us.
    </p>
  </div>
</div>

<hr />
<h5>NOTES for Developers:</h5>
<ul>
  <li>This status means that there is a trained library staff member currently staffing the reference desk.</li>
  <li>Status activates if the Department is benlib and Location is Reference desk</li>
  <li>The h1 never changes in any of the situations. It will always say Reference Desk Status. </li>
  <li>The photograph would change based on Status username.</li>
    <ul class="no-margin-top no-margin-bottom">
        <li>Photographs will be pulled from /departments/reference/desk/img/staffed/</li>
        <li>Graphic may be jpg or png - yet to be determined.</li>
        <li>Each photo in this picture will have a frame or graphic indicating that they are available</li>
        <li>Current size of photos are 160 x 240</li>
    </ul>
  <li>The first line would never change for this situation: Reference Desk is currently staffed by</li>
  <li>The name would change based on Status username.</li>
  <li>The email and phone will remain the same for all options.</li>
  <li>The last description would not change for different staff members.</li>
  <li>Final page will not include hr and everything below it.</li>
</ul>







<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
