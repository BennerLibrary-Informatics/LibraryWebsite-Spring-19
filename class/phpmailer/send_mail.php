<?php
    require("class.phpmailer.php");

function email($to_name,$to_email,$from_name,$from_email,$subject,$message,$file){
    $mail = new PHPMailer();
    $mail->IsSMTP(); // send via SMTP
    
    try {
        $mail->From=$from_email;
        $mail->FromName = $from_name;
        if(strpos($to_email,','))
        {
            $to_email=explode(',',$to_email);
            $to_email=array_map('trim',$to_email);
            $to_name=explode(',',$to_name);
            $to_name=array_map('trim',$to_name);
            $x=0;
            foreach($to_email as $email)
            {
                $test = $mail->AddAddress($email, $to_name[$x].$x);
                if(!$test)
                    return false;
                $x++;
            }
        }
        else
        {
            $test = $mail->AddAddress($to_email,$to_name);
            if(!$test)
                return false;
        }
        $mail->AddReplyTo($from_email,$from_name);
        $mail->WordWrap = 50; // set word wrap
        $mail->AddAttachment($file); // attachment
        $mail->IsHTML(true); // send as HTML
        $mail->Subject = $subject;
        $mail->Body = $message; //HTML Body

        $mail->Send();
    } catch (phpmailerException $e) {
        echo $e->errorMessage();
        return false;
    } catch (Exception $e) {
        echo $e->getMessage();
        return false;
    }
    
    return true;
}
?>