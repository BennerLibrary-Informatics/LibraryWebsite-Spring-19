<?php
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

  <div class="split l30-r70 cf">
    <div class="left center">
    <img src="/departments/reference/desk/img/student-staff.png" alt="graphic" />
    </div>

    <div class="right center">
      <h5 class="no-margin-top center">Currently staffed by</h5>
      <h2>Informatics Student</h2>
      <p><em>815-939-5355</em></p>
      <p>
        Informatic students can assist you with printing needs and minor technology needs.
        They can take a message.
      </p>
    </div>
  </div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
