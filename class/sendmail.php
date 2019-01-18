<?php
function Sendmail($ToName, $ToEmail, $FromName, $FromEmail, $Subject, $Body, $Header){
   $SMTP = fsockopen("mail.olivet.edu", 25, $errno, $errstr);

   if(!$SMTP) {
     return false;
   }

   $InputBuffer = fgets($SMTP, 1024);

   fputs($SMTP, "HELO olivet.edu\n");
   $InputBuffer = fgets($SMTP, 1024);
   fputs($SMTP, "mail From: <$FromEmail>\n");
   $InputBuffer = fgets($SMTP, 1024);
   fputs($SMTP, "RCPT To: <$ToEmail>\n");
   $InputBuffer = fgets($SMTP, 1024);
   fputs($SMTP, "DATA\n");
   $InputBuffer = fgets($SMTP, 1024);
   fputs($SMTP, "$Header");
   fputs($SMTP, "From: $FromName <$FromEmail>\n");
   fputs($SMTP, "To: $ToName <$ToEmail>\n");
   fputs($SMTP, "Subject: $Subject\n\n");
   fputs($SMTP, "$Body\r\n.\r\n");
   fputs($SMTP, "QUIT\n");
   $InputBuffer = fgets($SMTP, 1024);

   fclose($SMTP);

    if(!$errno) {
      return true;
   } else {
      return false;
   }

}
?>
