<?php
   $page_title = "Email Do - Benner Library";
    $body_class = "";
    $body_id = "";
    $css = "";
    $js = ""; 
?>

<?php include_once($_SERVER['DOCUMENT_ROOT']."/scripts/top.php");?>
<?php
    require($_SERVER['DOCUMENT_ROOT']."/class/phpmailer/class.phpmailer.php"); // "class/phpmailer/class.phpmailer.php");
    $mail = new PHPMailer();
    $mail->IsSMTP(); // send via SMTP  
    $backupMail=new PHPMailer();
    $backupMail->IsSMTP();
    $idArray = explode(',', $_GET['id']);
    $count=0;
    $in='';
    while($count<=sizeof($idArray)) {
        //$in.=$idArray[$count].',';
        $count++;
    }
    $in=substr($in,0,strlen($in)-1);
    $count=0;
    
    while($count<sizeof($idArray)){
        $getEmail = sprintf("SELECT name,email
                      FROM help_email WHERE id='%s'",
                $db->real_escape_string($idArray[$count]));
        $emailResults = $db->query($getEmail) or die($db->error);
        $to_String = "";
        while($results = $emailResults->fetch_array()){
            //print_r($results['name'].$results['email']);
            $mail->AddAddress($results['email'],$results['name']);
        }
        $count++;
    }
    $backupMail->AddAddress("informaticsemailbackup@gmail.com","Informatics Backup");
	 $subject = (isset($_REQUEST['subject'])) ? $_REQUEST['subject'] : "No Subject";
    if ($subject == "")
        $subject = "No Subject";
    $message = (isset($_REQUEST['message'])) ? $_REQUEST['message'] : "";
    if(isset($_REQUEST['refer'])&&$_REQUEST['refer']!='')
    {
        $message="This email originated from: ".$_REQUEST['refer']."\n ".$message;
    }
    
    $subject    = "".$subject;
	$from_name='';
	$from_email=$_REQUEST['from'];

    $return_email = $_REQUEST['from']; //Reply to this email ID
    $mail->From = $return_email;
    $mail->FromName = '';
    $mail->AddReplyTo($mail->From,$mail->FromName);
    $mail->WordWrap = 50; // set word wrap
    $mail->AddAttachment(""); // attachment
    $mail->AddAttachment(""); // attachment
    $mail->IsHTML(true); // send as HTML
    $mail->Subject = $subject;
    $mail->Body = nl2br($message); //HTML Body
    

    $backupMail->From = $return_email;
    $backupMail->FromName = '';
    $backupMail->AddReplyTo($backupMail->From,$backupMail->FromName);
    $backupMail->WordWrap = 50; // set word wrap
    $backupMail->AddAttachment(""); // attachment
    $backupMail->AddAttachment(""); // attachment
    $backupMail->IsHTML(true); // send as HTML
    $backupMail->Subject = $subject;
    $backupMail->Body = nl2br($message); //HTML Body
	echo "<p>";
        if($mail->Send()){
            echo "Message has been sent";
        }else{
            echo "Error in Sending";
        }
    echo "</p>";    
?>

<p>Your message was successfully sent. Please <a href="<?php echo ($_REQUEST['home'] != "1") ? "javascript:history.go(-2);" : "http://library.olivet.edu/"; ?>">click here</a> to return to what you were doing.</p>


<!-- ===== content above here ========================================================== -->                
<?php 
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>