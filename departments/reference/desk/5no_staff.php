<?php
   $page_title = "5 No Staff - Benner Library";
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
  <div class="split l30-r70 cf padding30">
    <div class="left center">
      <a href="/forms/email/index.php?id=009"><img src="/departments/reference/desk/img/email_librarian.png" alt="graphic" /></a>
    </div>

    <div class="right center">
      <h5>Reference Desk is not currently staffed</h5>
      <h2 class="no-margin-top center">Email a Library Staff member for assistance</h2>
      <p>  <a href="/forms/email/index.php?id=009"><img align="absmiddle" src="/img/email.png" alt="email" title="contact via email"/></a>
      <i> | 815-939-5355</i></p>
      <p>
        Even though there is no one currently staffing the reference desk, our website is open 24/7.
        Go to the Help tab on the homepage for self-help links or use the email link above to contact a staff member who will return your email within 48 hours.
      </p>
    </div>
  </div>

  <hr />
  <h5>NOTES for Developers:</h5>
  <ul>
    <li>This status means that there is no one currently covering the desk.</li>
    <li>Status activates if all of these are false:</li>
      <ul>
        <li>the Department is benlib and Location is Reference desk</li>
        <li>the Department is benlib and Covering is Reference desk</li>
        <li>the Department is info   and Location is Reference desk</li>
      </ul>
    <li>None of the information on the page changes for this status</li>
    <li>Final page will not include hr and everything below it.</li>
  </ul>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
