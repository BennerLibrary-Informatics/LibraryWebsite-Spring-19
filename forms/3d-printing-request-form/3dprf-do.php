<?php
   $page_title = "Benner Library - Template";
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

<?php
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/class/phpmailer/class.phpmailer.php";
    require($path);
    $mail = new PHPMailer();
    $mail->IsSMTP(); // send via SMTP  
    $backupMail=new PHPMailer();
    $backupMail->IsSMTP();
    $idArray = explode(',', $_GET['id']);
    $count=0;
    $in='';
    while($count<=sizeof($idArray))
    {
        //$in.=$idArray[$count].',';
        $count++;
    }
    $in=substr($in,0,strlen($in)-1);
    $count=0;
    while($count<sizeof($idArray)){
        $getEmail = sprintf("SELECT name,email
                             FROM help_email 
                             WHERE id='%s'",
        		$db->real_escape_string($idArray[$count]));
        $emailResults = $db->query($getEmail) or die($db->error);

        $to_String = "";
        while($results = $emailResults->fetch_array()){
            // print_r($results['name'].$results['email']);
            $mail->AddAddress($results['email'],$results['name']);
        }
        $count++;
    }

    $backupMail->AddAddress("informaticsemailbackup@gmail.com","Informatics Backup");
	$subject = (isset($_REQUEST['subject'])) ? $_REQUEST['subject'] : "No Subject";
    if ($subject == "")
        $subject = "No Subject";
    $message = (isset($_REQUEST['message'])) ? $_REQUEST['message'] : "";
    if(isset($_REQUEST['from_name'])&&$_REQUEST['from_name']!="")
        $from=$_REQUEST['from_name']."\n";
    else $from='';
    if(isset($_REQUEST['refer'])&&$_REQUEST['refer']!='')
    {
        $message="This email originated from: ".$_REQUEST['refer']."\n ".$from.$message;
    }


    
    $message.="\n\nCohort:".$_REQUEST['cohort']."\nProgram:".$_REQUEST['program']."\nClass:".$_REQUEST['class'];

    $notification_about_noresponds = "\n\n\n<i>While we try our best to respond quickly to every inquiry, sometimes due to technology hiccups, items slip through the cracks.  If you have not received a response within 24 hours on a week day, or 48 hours on a weekend, please use reply all to resubmit your inquiry to this email.\n
    Sincerely,
    3D Printing Team - printing@bennerlibrary.com</i>";
    $message.=$notification_about_noresponds;

    $subject    = "".$subject;
	$from_name=$_REQUEST['from_name'];
	$from_email=$_REQUEST['from'];
    
    /*This is a new line that adds the requesters email address to be CC in automatically 10/27/2015*/
    $mail->AddCC($_REQUEST['from'],$_REQUEST['from_name']);

    $return_email = $_REQUEST['from']; //Reply to this email ID
    $mail->From = $return_email;
    $mail->FromName = $from_name;
    $mail->AddReplyTo($mail->From,$mail->FromName);
    $mail->WordWrap = 50; // set word wrap
    $mail->AddAttachment(""); // attachment
    $mail->AddAttachment(""); // attachment
    $mail->IsHTML(true); // send as HTML
    $mail->Subject = $subject;
    $mail->Body = nl2br($message); //HTML Body
    

    $backupMail->From = $return_email;
    $backupMail->FromName = '';
    $backupMail->AddReplyTo($mail->From,$mail->FromName);
    $backupMail->WordWrap = 50; // set word wrap
    $backupMail->AddAttachment(""); // attachment
    $backupMail->AddAttachment(""); // attachment
    $backupMail->IsHTML(true); // send as HTML
    $backupMail->Subject = $subject;
    $backupMail->Body = nl2br($message); //HTML Body
    echo "<p>";
    if(isset($_REQUEST['g-recaptcha-response']) && $_REQUEST['g-recaptcha-response'] != "") {
        if($mail->Send()){
            echo "Message has been sent - a copy of your request/message will be sent to your email shortly.<br /><br />";
            echo "While we try our best to respond quickly to every inquiry, sometimes due to technology hiccups, items slip through the cracks.  If you have not received a response within 24 hours on a week day, or 48 hours on a weekend, please try your request again.";
        }else{
            echo "Error in Sending";
        }
    } else {
        echo "Recaptcha not submitted. ";
    }
    echo "</p>";
  ?>

<script type='text/javascript'>
	function menuForward(frm, nav) {
		url = frm.nav.options[frm.nav.selectedIndex].value;//'http://library.olivet.edu/';
		//window.open(url,'_blank')   	//Open the target url in a new window.
		window.location.href = url;		//Open the target url in the current window.
		//window.location='http://library.olivet.edu';
	}
</script>
	

<p><a href="<?php echo ($_REQUEST['home'] != "1") ? "javascript:history.go(-2);" : "http://library.olivet.edu/"; ?>">Click here</a> to return to what you were doing.</p>

<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>