  <div class="split l30-r70 cf">
    <div class="left center">
			<?php if (file_exists('./img/staff/'.$username.'.jpg')){
							echo "<img style=position:absolute src=/departments/reference/desk/img/staff/$username.jpg alt=graphic />";
							echo "<img style=position:relative src=/departments/reference/desk/img/on-call-frame.png />";
						} else {
							echo "<img src=/img/staff/photo_filler.jpg />";
						}  ?>
    </div>

    <div class="right center">
    <h5 class="no-margin-top center">On Call<br />
    Reference Staff</h5>
    <h2 class="no-margin-top center"><?php echo $Staff_Name?></h2>
      <p>
        <?php echo "<a style=text-decoration:none href=/forms/email/index.php?id=$Staff_Email>" ?>
          <img align="absmiddle" src="/img/email.png" alt="email" title="contact via email"/>
        </a>
        <i> | <?php echo $Staff_Phone_Number ?></i>
      </p>
      <p>
        Even though the reference staff member is not physically at the desk currently.
        He or she is on call.
        This means that you can contact him/her by ONU email or phone.
        He/she will also be happy to meet you at the reference desk, just ask a student
        at one of the service desks for help.
      </p>
    </div>
  </div>
