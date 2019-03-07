<?php
   $page_title = "3 Informatics Student - Benner Library";
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
    <img src="/departments/reference/desk/img/informatics_student_graphic.jpg" alt="graphic" />
    </div>

    <div class="right center">
      <h5 class="no-margin-top center">Currently staffed by</h5>
      <h2>Informatics Student</h2>
      <p><em>815-939-5355</em></p>
      <p>
        Informatic students can assist you with printing needs and minor technology needs. They can take a message.
      </p>
    </div>
  </div>

  <hr />
  <h5>NOTES for Developers:</h5>
  <ul>
    <li>This status means that there is a trained Informatics student currently staffing the reference desk.</li>
    <li>Status activates if: the Department is info and Location is Reference desk</li>
    <li>The h1 never changes in any of the situations. It will always say Reference Desk Status. </li>
    <li>The first line will not change for this situation: Reference Desk is currently staffed by</li>
    <li>The Informatics Student photograph will not change. It will pull the single graphic: /departments/reference/desk/img/informatics_student_graphic.jpg</li>
    <li>The name and phone would not change. It would stay: Informatics Student 815-939-5355</li>
    <li>The last description would not change.</li>
    <li>Final page will not include hr and everything below it.</li>
  </ul>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
