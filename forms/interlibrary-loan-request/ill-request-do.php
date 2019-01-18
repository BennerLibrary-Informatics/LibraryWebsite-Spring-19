<?php
	// Verify that an Olivet email was provided
	$email = (isset($_REQUEST['email'])) ? $_REQUEST['email'] : "";
	$emailSplit = explode("@",$email);
	if(count($emailSplit) != 2 || $emailSplit[1] != "olivet.edu")
	{
		header("index.php");
		exit;
	}
?>

<?php
   $page_title = "ILL Request Do - Benner Library";
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
   $path .= "/class/sendmail.php";
   include_once($path);
?>

<script>
function goBack2() {
    window.history.go(-2)
}
</script>

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
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
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
$SENDTO_ADDRESS = "ill@olivet.edu";

// Contact hyperlink to use on your confirmation page.
$EMAIL_LINK = "<a href='/forms/email/index.php?id=008'>Interlibrary Loan</a>";

// Phone number to contact your institution.
$CONTACT_PHONE = "815-928-5439";

// Support hyperlink to use on your error page.
$SUPPORT_LINK = "informatics@olivet.edu";

// Link to your institution's homepage
$HOMEPAGE_LINK = "<a href='http://library.olivet.edu'>Benner Library Online</a>";

// Name to use in the "to" part of the header.
$SENDTO_NAME = "InterLibrary Loan";

// Subject of the Email. This is the title of the email seen by your ILL dept.
$SET_SUBJECT = "ILL Request";

// If the variable exists, store it to be printed in the message. Else, store ""
$first_name = (isset($_REQUEST['first_name'])) ? $_REQUEST['first_name'] : "";
$last_name = (isset($_REQUEST['last_name'])) ? $_REQUEST['last_name'] : "";
$email = (isset($_REQUEST['email'])) ? $_REQUEST['email'] : "";
$student_id = (isset($_REQUEST['student_id'])) ? $_REQUEST['student_id'] : "";
$department = (isset($_REQUEST['department'])) ? $_REQUEST['department'] : "";
$status = (isset($_REQUEST['status'])) ? $_REQUEST['status'] : "";
$address = (isset($_REQUEST['address'])) ? str_replace("\n", "\n\t\t", $_REQUEST['address']) : "";
$phone = (isset($_REQUEST['phone'])) ? $_REQUEST['phone'] : "";
$date_needed = (isset($_REQUEST['date_needed'])) ? $_REQUEST['date_needed'] : "";
$comments = (isset($_REQUEST['comments'])) ? str_replace("\n", "\n\t\t", $_REQUEST['comments']) : "";
$database = (isset($_REQUEST['database'])) ? $_REQUEST['database'] : "";
$costopt = (isset($_REQUEST['costOpt'])) ? "Cost Required:\t".$_REQUEST['costOpt'] : "";
$costopth =  (isset($_REQUEST['costOpt'])) ? $_REQUEST['costOpt'] : "";
$title = (isset($_REQUEST['title'])) ? $_REQUEST['title'] : "";
$author = (isset($_REQUEST['author'])) ? $_REQUEST['author'] : "";
$source = (isset($_REQUEST['source'])) ? $_REQUEST['source'] : "";
$publisher = (isset($_REQUEST['pub'])) ? $_REQUEST['pub'] : "";
$place = (isset($_REQUEST['place'])) ? $_REQUEST['place'] : "";
$date = (isset($_REQUEST['date'])) ? $_REQUEST['date'] : "";
$issn = (isset($_REQUEST['issn'])) ? $_REQUEST['issn'] : "";
$isbn = (isset($_REQUEST['isbn'])) ? $_REQUEST['isbn'] : "";
$series = (isset($_REQUEST['series'])) ? $_REQUEST['series'] : "";
$volume = (isset($_REQUEST['volume'])) ? $_REQUEST['volume'] : "";
$issue = (isset($_REQUEST['issue'])) ? $_REQUEST['issue'] : "";
$start_page = (isset($_REQUEST['start_page'])) ? $_REQUEST['start_page'] : "";

// Used to generate the random multipart boundary code.
$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x";

// Email headers
$to         = $SENDTO_NAME . ' ' . '<' . $SENDTO_ADDRESS . '>';
$from       = $first_name . ' ' . $last_name . ' <' . $email . '>';
$subject    = $SET_SUBJECT;
$headers    = 'From:' . $from . "\r\n";
$headers   .= 'MIME-Version: 1.0' . "\r\n";


// Mime message (same as the plain text message)
$plaintextmessage = "Benner - InterLibrary Loan Request" . "\n\n" .
    "PATRON INFORMATION" . "\n" .
    "Name:\t\t" . $first_name . " " .
                  $last_name . "\n" .
    "E-mail:\t\t" . $email . "\n" .
    "Student ID:\t" . $student_id . "\n" .
    "Department:\t" . $department . "\n" .
    "Status:\t\t" . $status . "\n" .
    "Phone:\t\t" . $phone . "\n" .
    "Address:\t\t" . $address . "\n\n" .
    "ITEM DETAILS" . "\n" .
    "Title:\t\t" . $title . "\n" .
    "Author:\t\t" . $author . "\n" .
    "Source:\t\t" . $source . "\n" .
    "Publisher:\t\t" . $publisher . "\n" .
    "Place Published:\t" . $place . "\n" .
    "ISSN:\t\t" . $issn . "\n" .
    "ISBN:\t\t" . $isbn . "\n" .
    "Series Title:\t" . $series . "\n" .
    "Volume:\t\t" . $volume . "\n" .
    "Issue:\t\t" . $issue . "\n" .
    "Date:\t\t" . $date . "\n" .
    "Page Numbers:\t" . $start_page . "\n\n" .
    "Date Needed:\t" . $date_needed . "\n" .
    "Database Used:\t" . $database . "\t(as entered by patron)\n" .
    "Comments:\t" . $comments . "\r\n".
	$costopt . "/r/n".


// Set the message variable (which is passed to the mail function)
//   to initially equal only the plain text message.
$message = '';

// Display the plain text message again for compatibility reasons, then
//   display the HTML message.
$message .="
<h2 style='margin-top:0'>Benner - InterLibrary Loan Request</h2>
<table>
    <tr><td colspan='2'><h3>Patron Information</h3></td></tr>
    <tr><td><b>Name:</b></td><td>". $first_name ." ". $last_name ."</td></tr>
    <tr><td><b>Email:</b></td><td>". $email ."</td></tr>
    <tr><td><b>Student ID:</b></td><td>". $student_id ."</td></tr>
    <tr><td><b>Department:</b></td><td>". $department ."</td></tr>
    <tr><td><b>Status:</b></td><td>". $status ."</td></tr>
    <tr><td><b>Phone:</b></td><td>". $phone ."</td></tr>
    <tr><td><b>Address:</b></td><td>". $address ."</td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
    <tr><td colspan='2'><h3>Item Details<h3></td></tr>
    <tr><td><b>Title:</b></td><td>". $title ."</td></tr>
    <tr><td><b>Author:</b></td><td>". $author ."</td></tr>
    <tr><td><b>Source:</b></td><td>". $source ."</td></tr>
    <tr><td><b>Publisher:</b></td><td>". $publisher ."</td></tr>
    <tr><td><b>Place Published:</b></td><td>". $place ."</td></tr>
    <tr><td><b>ISSN:</b></td><td>". $issn ."</td></tr>
    <tr><td><b>ISBN:</b></td><td>". $isbn ."</td></tr>
    <tr><td><b>Series Title:</b></td><td>". $series ."</td></tr>
    <tr><td><b>Volume:</b></td><td>". $volume ."</td></tr>
    <tr><td><b>Issue:</b></td><td>". $issue ."</td></tr>
    <tr><td><b>Date:</b></td><td>". $date ."</td></tr>
    <tr><td><b>Page Numbers:</b></td><td>". $start_page ."</td></tr>
    <tr><td colspan='2'>&nbsp;</td></tr>
    <tr><td><b>Date Needed:</b></td><td>". $date_needed ."</td></tr>
    <tr><td><b>Database Used:</b></td><td>". $database ."</td><td>(as entered by patron)</td></tr>
    <tr><td><b>Comments:</b></td><td>". $comments ."</td></tr>
	<tr><td><b>Cost incurred:</b></td><td>". $costopth ."</td></tr>
</table>
</body>";
$to_email=$SENDTO_ADDRESS;
$to_name=$SENDTO_NAME;
$from_name=$first_name . ' ' . $last_name;
$from_email=$email;
$newLine="\r\n";
$header = "MIME-Version: 1.0".$newLine;
$header .= "Content-type: text/html; charset=iso-8859-1".$newLine;
$header .= "To: ".$to_name." <".$to_email."> ".$newLine;
$header .= "From: ".$first_name . ' ' . $last_name." <".$email.">".$newLine;

if (Sendmail($to_name,$to_email,$from_name,$from_email,$subject,$message,$header)) {
    echo "<h1>Request sent</h1>";
    echo "<p>Your request is being processed. You will be notified when your ";
    echo "materials arrive. If you have any questions, please contact ";
    echo $EMAIL_LINK . " or " . $CONTACT_PHONE . ".</p>";
} else {
    echo "<h1>An error occured while processing your request</h1>";
    echo "<p>Please try your request again later. If the problem persists ";
    echo "please contact " . $SUPPORT_LINK . "</p>";
}

?>

<p><a href="javascript:goBack2()">Click here</a> to return to what you were previously doing.</p>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
