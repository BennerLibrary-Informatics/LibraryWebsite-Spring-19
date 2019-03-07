<?php
   $page_title = "2 Informatics Student and On Call - Benner Library";
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

  <div class="split l50-r50 cf">
    <div class="left center">
      <h5 class="no-margin-top center">Currently staffed by</h5>
      <img src="/departments/reference/desk/img/informatics_student_graphic.jpg" alt="graphic" />
      <h2 class="no-margin-top center">Informatics Student</h2>
      <p><em>815-939-5355</em></p>
      <p>
        Informatic Students can assist you with printing needs and minor technology needs.
        They can either contact an on call reference staff member to help you with research or take a message.
      </p>
    </div>

    <div class="right center">
      <h5 class="no-margin-top center">On Call<br />
      Reference Staff</h5>
      <img src="/departments/reference/desk/img/oncall/mwmarcukaitis.jpg" alt="graphic" />
      <h2 class="no-margin-top center">Matt Marcukaitis</h2>
      <p>  <a href="/forms/email/index.php?id=020"><img align="absmiddle" src="/img/email.png" alt="email" title="contact via email"/></a>
      <i> | 815-928-5511</i></p>
      <p>
        Even though the reference staff member is not physically at the desk currently. He or she is on call.
        This means that you can contact him/her by ONU email or phone.
        He/she will also be happy to meet you at the reference desk, just ask a student at one of the service desks for help.
      </p>
    </div>
  </div>

  <hr />
  <h5>NOTES for Developers:</h5>
  <ul>
    <li>This status means that there is a trained Informatics student currently staffing the reference desk with a trained library staff member on call.</li>
    <li>Status activates if:</li>
    <ul class="no-margin-top no-margin-bottom">
      <li>the Department is info and Location is Reference desk</li>
      <li><em>AND</em></li>
      <li>the Department is benlib and Covering is Reference desk</li>
    </ul>
    <li>The h1 never changes in any of the situations. It will always say Reference Desk Status. </li>
    <li>Informatics Student side</li>
      <ul class="no-margin-top no-margin-bottom">
        <li>The first line will not change for this situation: Reference Desk is currently staffed by</li>
        <li>The Informatics Student photograph will not change. It will pull the single graphic: /departments/reference/desk/img/informatics_student_graphic.jpg</li>
        <li>The name and phone would not change. It would stay: Informatics Student 815-939-5355</li>
        <li>The last description would not change.</li>
      </ul>
    <li>On Call Refference Staff side</li>
      <ul class="no-margin-top no-margin-bottom">
        <li>The first line would never change for this situation: On Call Reference Staff</li>
        <li>The on-call photograph would change based on Status username.</li>
          <ul class="no-margin-top no-margin-bottom">
              <li>Photographs will be pulled from /departments/reference/desk/img/oncall/</li>
              <li>Graphic may be jpg or png - yet to be determined.</li>
              <li>Each photo in this picture will have a frame or graphic indicating that they are on call</li>
              <li>Current size of photos are 160 x 240</li>
          </ul>
        <li>The name, email, and phone would change based on Status username. Other information is currently in /departments/refernce/desk/docs/user_info.xlsx</li>
        <li>The last description would not change for different staff members.</li>
      </ul>

    <li>Final page will not include hr and everything below it.</li>
  </ul>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
