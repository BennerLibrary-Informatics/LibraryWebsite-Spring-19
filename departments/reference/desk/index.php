<?php
   $page_title = "Reference Desk - Benner Library";
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
<h1>Currently at Reference Desk</h1>

	<div class="split l50-r50 cf">
		<div class="left center">
        <img src="/img/staff/photo_filler.jpg" />
        <h5 class="no-margin-top center">Reference Desk is<br />
          currently staffed by</h5>
          <h2>Informatics Student</h2>
        <p>Informatic Students can assist you with printing needs and minor technology needs. They can either contact an oncall reference staff to help you with research or take a reference referral. </p>
		</div>

<div class="right center">
    <img src="/img/staff/mwmarcukaitis.jpg" />
    <h5 class="no-margin-top center">On Call<br />
      Reference Staff</h5>

    <h2 class="no-margin-top center">Matt Marcukaitis</h2>
    <p>  <a href="/forms/email/index.php?id=020"><img align="absmiddle" src="/img/email.png" alt="email" title="contact via email"/></a>
      <i> | 815-928-5511</i></p>
    <p>This would be information about Matt... when his picture was pulled this paragraph would also uncomment and appear. Maybe an include file would be better.</p>

</div>
</div>

<hr />

<div class="split l50-r50 cf">
  <div class="left center">
        <img src="/img/staff/ajohnsto.jpg" />
        <h5>Reference Desk is<br />
          currently staffed by</h5>

        <h2 class="no-margin-top center">Ann Johnston</h2>
        <p>  <a href="/forms/email/index.php?id=009"><img align="absmiddle" src="/img/email.png" alt="email" title="contact via email"/></a>
          <i> | 815-939-5355</i></p>
        <p>The reference staff sits at the reference desk to assist with research and library specific questions.</p>
      </div>

      <div class="right center">
            <img src="/img/bulletins/220x260/help_kb.png" />
            <h5>Reference Desk is<br />
              not currently staffed</h5>

            <h2 class="no-margin-top center">Email a Library Staff member for assistance.</h2>
            <p>  <a href="/forms/email/index.php?id=009"><img align="absmiddle" src="/img/email.png" alt="email" title="contact via email"/></a>
              <i> | 815-939-5355</i></p>
            <p>Even though there is no one currently staffing the reference desk, our website is open 24/7. Go to Help on the homepage for self-help links. Feel free to use the email link above to contact a staff member who will return your email within 24 to 48 hours.</p>
          </div>
  </div>

  <hr />
  <h5>NOTES for Developers:</h5>
  <ul>
    <li>There is a order to fallow when looking at the status:
      <ol>
        <li>the Department is benlib and Location is Reference desk stop processing goto option 1 below</li>
        <li>the Department is info   and Location is Reference desk could be option 2 or 3 below depanding on next item</li>
        <li>the Department is benlib and Covering is Reference desk could be option 2 or 4 depending on previous item</li>
        <li>if none of the above goto to option 5 below</li>
      </ol>
  </ul>


<hr />
        <h4 class="no-margin-bottom">Other Reference Links:</h4>
        <ul class="padding10">
        <li><a href="/departments/reference/index.php">Reference Desk Schedule</a></li>
        </ul>

        <ol>
          <li><a href="/departments/reference/desk/1staffed.php" target="_blank">Staffed</a></li>
          <li><a href="/departments/reference/desk/2info_on_call.php" target="_blank">Informatics Student and On Call Staff</a></li>
          <li><a href="/departments/reference/desk/3info_student.php" target="_blank">Informatics Student</a></li>
          <li><a href="/departments/reference/desk/4on_call.php" target="_blank">On Call Staff</a></li>
          <li><a href="/departments/reference/desk/5no_staff.php" target="_blank">No Staff</a></li>
        </ol>






<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
