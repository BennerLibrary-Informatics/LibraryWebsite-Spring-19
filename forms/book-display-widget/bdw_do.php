<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><!-- InstanceBegin template="/Templates/bl_help.dwt" codeOutsideHTMLIsLocked="false" -->
<body>
            <!-- <?php //include 'sendmail.php';?> -->
            <?php  include '../../class/sendmail.php'; ?>
<?php

/* File Name: ill_request.php
 * OpenSource Software Name: OpenURL InterLibrary Loan Form
 *
 * Developer: Paul Trotter
 * Project Manager: Prof Craighton Hippenhammer,
 *     Olivet Nazarene University
 * If you use this code, let the project manager know
 * informatics@olivet.edu. Thank you.
 * Copyright (C) 2009 by Olivet Nazarene University
 *
 * This file is part of OpenURL ILL Form.
 *
 * OpenURL ILL Form is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published
 * by the Free Software Foundation, either version 3 of the License,
 * or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR Purpose.  See the
 * GNU General Public License for more details.
 *
 * You have received a copy of the GNU General Public License along
 * with this program in the COPYING.txt file.
 * Also see <http://www.gnu.org/licenses/>.
 */

// April 3, 2009
// Email Configuration:
// Change the second parameter to use your institution's SMTP server.
ini_set("SMTP", "mail.olivet.edu");

// Address to use in the "to" part of the header.

$SENDTO_ADDRESS = "bdw_committee@bennerlibrary.com";
$SENDTO_ADDRESS2 = "informatics@olivet.edu";


// Name to use in the "to" part of the header.
$SENDTO_NAME = "BDW Request";

// Subject of the Email. This is the title of the email seen by your ILL dept.
$subject = "Book Display Widget Request";

// If the variable exists, store it to be printed in the message. Else, store ""
/*if (isset($_REQUEST['first_name']))
    { $first_name = $_REQUEST['first_name'] };

if (isset($_REQUEST['last_name']))
    { $last_name = $_REQUEST['last_name'] };

if (isset($_REQUEST['email']))
    { $email = $_REQUEST['email'] };

if (isset($_REQUEST['department']))
    { $department = $_REQUEST['department'] };

if (isset($_REQUEST['Purpose']))
    { $Purpose = $_REQUEST['Purpose'] };

if (isset($_REQUEST['date_needed']))
    { $date_needed = $_REQUEST['date_needed'] };

if (isset($_REQUEST['ISBN']))
    { $ISBN = $_REQUEST['ISBN'] };

if (isset($_REQUEST['comments']))
    { $comments = $_REQUEST['comments'] };

if (isset($_REQUEST['URL']))
    { $URL = $_REQUEST['URL'] };

if(strpos($URL, 'http://') == false)
   $URL = "http://" . $URL;*/


$first_name = (isset($_REQUEST['first_name'])) ? $_REQUEST['first_name'] : "";
$last_name = (isset($_REQUEST['last_name'])) ? $_REQUEST['last_name'] : "";
$email = (isset($_REQUEST['email'])) ? $_REQUEST['email'] : "";
$department = (isset($_REQUEST['department'])) ? $_REQUEST['department'] : "";
$Purpose = (isset($_REQUEST['Purpose'])) ? $_REQUEST['Purpose'] : "";
$date_needed = (isset($_REQUEST['date_needed'])) ? $_REQUEST['date_needed'] : "";
$ISBN = (isset($_REQUEST['ISBN'])) ? $_REQUEST['ISBN'] : "";
$comments = (isset($_REQUEST['comments'])) ? str_replace("\n", "\n\t\t", $_REQUEST['comments']) : "";
$URL = (isset($_REQUEST['URL'])) ? $_REQUEST['URL'] : "";
if(strpos($URL, 'http://') === false)
   $URL = "http://" . $URL;



/*//If the submit button has not been pressed
if(!(isset($_POST['submit']))){

//display our form
echo $form;

//otherwise, the button must have been pressed, check anyway though
}elseif(isset($_POST['submit'])){

//now let's look at our checkbox (called emailCopy) and see if it's checked
if(isset($_POST['emailCopy'])){

//get the email address from the form, assign it to variable $ccAddress
$ccAddress=$_POST['email'];
//append the address to the email headers
$headers .= 'Bcc: '.$ccAddress. "\r\n";
//then send the mail
Sendmail($to_name,$to_email,$from_name,$from_email,$subject,$message,$header);

//otherwise, a copy has not been requested, just display a message
}else{
//output a message
echo 'The email has been sent to just the admin';}
//just send the mail to the site admin
Sendmail($to_name,$to_email,$from_name,$from_email,$subject,$message,$header);
}*/



// Used to generate the random multipart boundary code.
$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

// Mime message (same as the plain text message)
$plaintextmessage = "Book Display Widget Request" . "\n\n" .
    "Name:\t\t" . $first_name . " " .
                  $last_name . "\n" .
    "E-mail:\t\t" . $email . "\n" .
    "Department:\t" . $department . "\n" .
    "Purpose:\t\t" . $Purpose . "\n" .
    "ITEM DETAILS" . "\n" .
    "Date Needed:\t" . $date_needed . "\n" .
    "URL Used:\t" . $URL . "\t(as entered by patron)\n" .
	"ISBN:\t" . $ISBN . "\n" .
    "Comments:\t" . $comments . "\r\n".


// Set the message variable (which is passed to the mail function)
//   to initially equal only the plain text message.
$message = '';
$message2 = '';

// Display the plain text message again for compatibility reasons, then
//   display the HTML message.
$message .="

<html>
<head>
  <title>Book Display Widget Request</title>
</head>
<body>
<h2 style='margin-top:0'>Book Display Widget Request</h2>
<table>
    <tr><td colspan='2'><h3>Patron Information</h3></td></tr>
    <tr><td><b>Name:</b></td><td>". $first_name ." ". $last_name ."</td></tr>
    <tr><td><b>Email:</b></td><td>". $email ."</td></tr>
    <tr><td><b>Department:</b></td><td>". $department ."</td></tr>
    <tr><td><b>Purpose:</b></td><td>". $Purpose ."</td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
    <tr><td><b>Date Needed:</b></td><td>". $date_needed ."</td></tr>
	<tr><td><b>URL:</b></td><td><a href='".$URL."'>".$URL."</a></td></tr>
	 <tr><td><b>ISBN:</b></td><td>". $ISBN ."</td></tr>
    <tr><td><b>Comments:</b></td><td>". $comments ."</td></tr>
</table>
</body>
</html>
";


$message2 .="

<html>
<head>
  <title>BDW Request</title>
</head>
<body>
Library Department=Informatics<br>
Priority=Medium<br>
Status=OPEN<br>
Assignees=ajohnsto<br>

		<h3>Patron Information</h3><br>
		<b>Name:</b>". $first_name ." ". $last_name ."<br>
		<b>Email:</b>". $email ."<br>
		<b>Purpose:</b>". $Purpose ."<br>
		<b>Date Needed:</b>". $date_needed ."<br>
		<b>URL:</b><a href='".$URL."'>".$URL."</a><br>
		<b>ISBN:</b>". $ISBN ."<br>
		<b>Comments:</b>". $comments. "
</body>
</html>
";



//For Sendmail
$to_email=$SENDTO_ADDRESS;
$to_name=$SENDTO_NAME;
$from_name="Benner Library";
$from_email=$email;
$newLine="\r\n";
$header = "MIME-Version: 1.0".$newLine;
$header .= "Content-type: text/html; charset=iso-8859-1".$newLine;
/*$header .= "To: ".$to_name." <".$to_email."> ".$newLine;*/
/*$header .= "From: ".$first_name . ' ' . $last_name." <".$email.">".$newLine;*/

/*Sendmail($to_name,$to_email,$from_email,$from_name,$subject,$message,$header);
Sendmail2($to_name, $from_email,$SENDTO_ADDRESS2,$from_name,$subject,$message2,$header); */

/*mail($to_email, $subject, $message);*/

if (Sendmail($to_name,$to_email,$from_name,$from_email,$subject,$message,$header) && (Sendmail($to_name, $SENDTO_ADDRESS2,$from_name,$from_email,$subject,$message2,$header)))
{

    $page_title = "Book Display Widget Success! - Benner Library";
    $body_class = "";
    $body_id = "";
    $css = "";
    $js = "";

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/scripts/top.php";
    include_once($path);

///////////////////////////////////////////////////////////////////////////////////////////////////

    echo "<h1>Request sent.</h1>";
    echo "<br /><br /><p>Your request is being processed. You will be notified with any updates as soon as possible. <br />";
    echo "<a href='http://library.olivet.edu'>Benner Library Online</a></p>";

///////////////////////////////////////////////////////////////////////////////////////////////////

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/scripts/bottom.php";
    include_once($path);
} else {

    $page_title = "Book Display Widget Error! - Benner Library";
    $body_class = "";
    $body_id = "";
    $css = "";
    $js = "";

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/scripts/top.php";
    include_once($path);

///////////////////////////////////////////////////////////////////////////////////////////////////

    echo "<h1>An error occured while processing your request</h1>";
    echo "<br /><br /><p>Please try your request again later. If the problem persists ";
    echo "please contact <a href='http://library.olivet.edu/forms/email/index.php?id=021'>informatics@olivet.edu</a>.";
    echo "<a href='http://library.olivet.edu'>Benner Library Online</a></p>";

///////////////////////////////////////////////////////////////////////////////////////////////////

    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/scripts/bottom.php";
    include_once($path);
}


/*
if ($status == true) {
} else {
    echo "<h1>An error occured while processing your request</h1>";
    echo "Please try your request again later. If the problem persists ";
    echo "please contact <a href='http://library.olivet.edu/forms/email/index.php?id=021'>informatics@olivet.edu</a>. <br/><br/>";
    echo "<a href='http://library.olivet.edu'>Benner Library Online</a>";
*/

?>
