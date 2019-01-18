<?php
    $page_title = "SGCS_email - Benner Library";
    $body_class = "";
    $body_id = "";
    $css = "";
    $js = "<script type=\"text/javascript\" src=\"/js/libraries/livevalidation.js\"></script>";
?>

<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/scripts/top.php";
    include_once($path);
?>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script type="text/javascript">
function checkCaptcha() {
    if (grecaptcha.getResponse() == ""){
      alert("You must submit the recaptcha!");
      return false;
    }
    return true;
}
</script>

<?php
    if(isset($_GET['id'])){
    	$idArray = explode(',', $_GET['id']);

        $getEmail = sprintf("SELECT *
                             FROM help_email");
        $emailResults = $db->query($getEmail) or die($db->error);
        $counter = 0;
        while ($results = $emailResults->fetch_array()) {
            if (isset($idArray[$counter]) && $results['ID'] == $idArray[$counter]) {
                $nameArray[$counter] = $results['name'];
                $emailArray[$counter] = $results['email'];
                $phoneArray[$counter] = $results['phone'];
                $titleArray[$counter++] = $results['title'];
            }
        }
        $counter2 = 0;
	}
	if(isset($_GET['emp_ids'])){
		$_SESSION['cat_owner']=$_GET['emp_ids'];
		$sql=sprintf('SELECT e.first_name,e.last_name,e.olivet_email,esg.emp_id,e.emp_id FROM employee e,emp_staff_group esg WHERE esg.id ="%s"AND esg.emp_id=e.emp_id',
				$db->real_escape_string($_GET['emp_ids']));
		$query=$db->query($sql)or die($db->error);
		$emailName=$query->fetch_array();
		$_SESSION['email_string']=$emailName['first_name'].' '.$emailName['last_name'].' | Selected Sites Manager';
		$sql7=sprintf('SELECT ID FROM help_email WHERE name="%s"',
				$db->real_escape_string($emailName['first_name'].' '.$emailName['last_name']));
		$query7=$db->query($sql7);
		$results=$query7->fetch_array();
		$id=$results['ID'];
		echo 'ID IS'.$id;
    }

		// If an sid (subject ID) is set in url, interpret the subject
	if (isset($_GET['sid'])) {
		switch ($_GET['sid']) {
			case 1:
				$subject = "Edit Job Application";
				break;
		}
	} else
		$subject = "";
?>

<!-- ===== content below here ========================================================== -->

<form name="email" action="sgcs_email_do.php?id=<?php if(isset($_GET['id']))echo $_GET['id'];else if(isset($id))echo $id; ?>" method="post">
    <h3 class="no-margin-top">Send Email to:</h3>
    <h4 class="no-margin-top padding10-left">
        <?php
		    if(isset($_GET['emp_ids']))
			   echo $_SESSION['email_string'];
			else
			    if (isset($counter)&&$counter > 1) {
                    $counter2 = 0;
                    while ($counter2 < $counter) {
                        if ($idArray[$counter2] == 16) { // only want to show one but send to all
                            echo $nameArray[$counter2];
	       				    if ($titleArray[$counter2] != "")
			     			    echo ': '.$titleArray[$counter2];
                            if ($phoneArray[$counter2] != "")
                                echo '<h6 class="no-margin-top padding15-left" style="padding-top:0px">Phone Number: '.$phoneArray[$counter2].'</h6><h4 class="no-margin-top padding10-left" style="padding-top:0px">';
                                echo '<h6 class="no-margin-top padding15-left" style="padding-top:0px">If you are having issues please email sgcslibrary@olivet.edu directly.';
                        }
                        if ($counter2++ != ($counter - 1))
                            echo '';
                    }
                } else {
			        if (!isset($nameArray[0]))
			            $name='Benner Library';
			        else $name=$nameArray[0];
                        echo $name;
			        if ((isset($titleArray[0]))&&$titleArray[0] != "")
					    echo ': '.$titleArray[0];
                    if ((isset($phoneArray[0]))&&$phoneArray[0] != "")
                        echo '<br /><h6 class="padding15-left">Phone Number: '.$phoneArray[0].'</h6><h4>';
			    }
        ?>
    </h4>
    <label for="name" style="margin-bottom:0px;"><span>Your Name</span></label>
        <div class="set-wrapper">
        <div class="field-wrapper" style="padding-bottom:0px;">
        <input id="name" type="text" name="from_name" size="39">
        <script>
            var from = new LiveValidation('from', {wait: 500});
            from.add( Validate.Presence );
            from.add( Validate.Email);
        </script>
        </div>
        </div>
    <label for="from" style="margin-bottom:0px;">From: (email address) *</label>
        <div class="set-wrapper">
        <div class="field-wrapper" style="padding-bottom:0px;">
        <input id="from" type="text" name="from" size="39">
        <script>
            var from = new LiveValidation('from', {wait: 500});
            from.add( Validate.Presence );
            from.add( Validate.Email);
        </script>
        </div>
        </div>
    <label for="subject" style="margin-bottom:0px;">Subject *</label>
        <div class="set-wrapper">
        <div class="field-wrapper" style="padding-bottom:0px;">
        <input id="subject" type="text" name="subject" size="39" value="<?php echo $subject; ?>">
        <script>
            var subject = new LiveValidation('subject', {wait: 500});
            subject.add( Validate.Presence );
        </script>
        </div>
        </div>
    <label for="cohort" style="margin-bottom:0px;">Cohort Number</label>
        <div class="set-wrapper">
        <div class="field-wrapper" style="padding-bottom:0px;">
        <input id="cohort" name="cohort" type="text">
        </div>
        </div>
    <label for="program" style="margin-bottom:0px;">Program</label>
        <div class="set-wrapper">
        <div class="field-wrapper" style="padding-bottom:0px;">
        <select id="program" name="program">
            <option value="" selected disabled>Choose One</option>
            <option value="BBA">BBA</option>
            <option value="BSN">BSN</option>
            <option value="EDD">EDD</option>
            <option value="Education Masters">Education Masters</option>
            <option value="eMBA">eMBA</option>
            <option value="FNP">FNP</option>
            <option value="MBA">MBA</option>
            <option value="MOL">MOL</option>
            <option value="MSN">MSN</option>
        </select>
        </div>
        </div>
    <label for="class" style="margin-bottom:0px;">Class Name</label>
        <div class="set-wrapper">
        <div class="field-wrapper" style="padding-bottom:0px;">
        <input id="class" name="class" type="text">
        </div>
        </div>
    <label for="message"><span>Message:</span><textarea id="message" name="message" rows="10" cols="80"></textarea></label>

    <div class="padding20-left">
        <div class="g-recaptcha" data-sitekey="6Lfr2hAUAAAAABoJpYKxlm5Tl-bwZMaJ1ZEhHTt0"></div>
    </div>

    <input type="hidden" name="home" value="<?php echo (isset($_GET['home']) && $_GET['home']) ? "1" : "0"; ?>">
    <label>
        <input type="submit" name="send" value="Send" onclick="return checkCaptcha();">
        <input type="reset" name="Clear Fields" value="Clear All Fields">
    </label>
    <input type="hidden" name='refer' id='refer'>

</form>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
