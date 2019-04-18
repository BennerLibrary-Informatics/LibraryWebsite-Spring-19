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
      <?php if (file_exists('./img/staff/'.$username.'.jpg')){
							echo "<img src=/departments/reference/desk/img/staff/$username.jpg alt=graphic />";
						} else {
							echo "<img src=/img/staff/photo_filler.jpg />";
						}  ?>
  </div>

  <div class="right center">
    <h5>Currently staffed by</h5>
    <h2 class="no-margin-top center"><?php echo $Staff_Name?></h2>
    <p>
      <?php echo "<a style=text-decoration:none href=/forms/email/index.php?id=$Staff_Email>" ?>
      <img align="absmiddle" src="/img/email.png" alt="email" title="contact via email"/>
      </a>
      <i> | 815-939-5355 </i>
    </p>
    <p>
      Our reference staff sit at the reference desk in order to assist with research and
      library specific questions.
      Please "interrupt" us.
    </p>
  </div>
</div>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
