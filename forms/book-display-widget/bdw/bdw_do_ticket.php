<?php include 'bdw_ticketno.php' ?>
<!-- echo "<script>alert('You must enter both values.')</script>"; -->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
   "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html><!-- InstanceBegin template="/Templates/bl_help.dwt" codeOutsideHTMLIsLocked="false" -->
<body>   
	        <?php include 'sendmail.php';?>
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
$SENDTO_ADDRESS2 = "informatics@olivet.edu";

// Contact hyperlink to use on your confirmation page.
//$EMAIL_LINK = "<a href='http://cybrarianprof.org/email/send_email.cfm?id=8'>ill@olivet.edu</a>";

// Link to your institution's homepage
//$HOMEPAGE_LINK = "<a href='http://library.olivet.edu'>Benner Library Online</a>";

// Name to use in the "to" part of the header.
$SENDTO_NAME = "BDW Request";

$ticket_no = if_get('ticket_no');
$subject = "Book Display Widget Request ISSUE=" .$ticket_no;

$id = $_REQUEST['ticket_no'];
echo $ticket_no;

function if_get($name,$string) {
      $value = isset($_REQUEST[$name]) ? $_REQUEST[$name] : "";
    return $value;
}
// If the variable exists, store it to be printed in the message. Else, store ""

$type = if_get('x');

if($type == "dynamic_grid"){
    $display_sorting = if_get('display_sorting_dg');
    $cover_size = if_get('cover_size_dg');
    $row_cover = if_get('row_cover_dg');
    $height_width = if_get('height_width_dg');
    $show_item = if_get('show_item_dg');
    $link_cover = if_get('link_cover_dg');
    $author_display = if_get('author_display_dg');
    $fade = if_get('fade_dg');
    $fade_from = if_get('fade_from_dg');
    $roll_over = if_get('roll_over_dg');
    $scroll_auto =  "";
    $auto_scroll =  "";
    $maximum = "";
    
} 
if($type == "Carousel"){
   $display_sorting = if_get('display_sorting_c');
    $cover_size = if_get('cover_size_c');
    $row_cover = if_get('row_cover_c');
    $height_width = if_get('height_width_c');
    $show_item = if_get('show_item_c');
    $link_cover = if_get('link_cover_c');
    $author_display = if_get('author_display_c');
    $roll_over = if_get('roll_over_c');
    $scroll_auto =  if_get('scroll_auto_c');
    $auto_scroll =  if_get('auto_scroll_c');
    $maximum = "";
    $fade = "";
    $fade_from = "";
}
if ($type == "d_Carousel"){
    $display_sorting = if_get('display_sorting_d');
    $cover_size = if_get('cover_size_d');
    $show_item = if_get('show_item_d');
    $link_cover = if_get('link_cover_d');
    $author_display = if_get('author_display_d');
    $scroll_auto =  if_get('scroll_auto_d');
    $auto_scroll =  if_get('auto_scroll_d');
    $maximum = if_get('maximum_d');
    $row_cover = "";
    $height_width = "";
    $fade = "";
    $fade_from = "";
    $roll_over = "";
    
}
if($type == "Scrolling"){
$display_sorting = if_get('display_sorting_s');
    $cover_size = if_get('cover_size_s');
    $show_item = if_get('show_item_s');
    $link_cover = if_get('link_cover_s');
    $author_display = if_get('author_display_s');
    $height_width = if_get('height_width_s');
    $scroll_auto =  if_get('scroll_speed_s');
    $auto_scroll =  if_get('scroll_type_s');
    $maximum = if_get('maximum_s');
    $row_cover = "";
    $fade = "";
    $fade_from = "";
    $roll_over = "";
}

// Used to generate the random multipart boundary code.
$semi_rand = md5(time());
$mime_boundary = "==Multipart_Boundary_x{$semi_rand}x"; 

// Mime message (same as the plain text message)
$plaintextmessage = "Book Display Widget Request" . "\n\n" .
    "Ticket Number:\t\t" . $ticket_no . "\n" .
    "Name:\t\t" . $dynamic_grid . " " .
                   $Carousel . "\n" .
                   $d_Carousel . "\n" .
                   $Scrolling . "\n" . 

// Set the message variable (which is passed to the mail function)
//   to initially equal only the plain text message.
$message2 = '';

// Display the plain text message again for compatibility reasons, then
//   display the HTML message.
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
        <br>";


        if($ticket_no){
              $message2.="<b>Ticket Number:</b>".$ticket_no."<br>";
        }
		if($type){
              $message2.="<b>Name:</b>". $type."<br>"; 
        }
       if($display_sorting){
              $message2.="<b>Display Sorting:</b> ".$display_sorting."<br>";
        }
        if($height_width){
              $message2.= "<b>Cover Height and Width:</b> ".$height_width."<br>";
        }
        if($row_cover){
              $message2.= "<b>Cover per row or cover:</b> ".$row_cover."<br>";
        }
        if($cover_size){
              $message2.= "<b>Cover size:</b> ".$cover_size."<br>";
        }
        if($fade){
              $message2.= "<b>Fade:</b> ".$fade."<br>";
        }
        if($fade_from){
              $message2.= "<b>Fade From:</b> ".$fade_from."<br>";
        }
        if($show_item){
              $message2.= "<b>Show Item:</b> ".$show_item."<br>";
        }
        if($link_cover){
              $message2.="<b>Link Cover:</b> ".$link_cover."<br>";
        }
        if($author_display){
              $message2.= "<b>Author Display:</b> ".$author_display."<br>";
        }
        if($scroll_auto){
              $message2.= "<b>scroll Auto:</b> ".$scroll_auto."<br>";
        }
        if($auto_scroll){
              $message2.= "<b>Auto Scroll:</b> ".$auto_scroll."<br>";
        }
        if($maximum){
              $message2.= "<b>Maximun:</b> ".$maximum."<br>";
        }
         if($scroll_speed){
              $message2.= "<b>Scroll Speed:</b> ".$scroll_speed."<br>";
        }
         if($scroll_type){
              $message2.= "<b>Scroll Type:</b> ".$scroll_type."<br>";
        }


$message2 .="
</body>
</html>";


//For Sendmail
$to_email=$SENDTO_ADDRESS;
$to_name=$SENDTO_NAME;
$from_email=$email;
$newLine="\r\n";
$header = "MIME-Version: 1.0".$newLine;
$header .= "Content-type: text/html; charset=iso-8859-1".$newLine;
/*$header .= "To: ".$to_name." <".$to_email."> ".$newLine;*/
/*$header .= "From: ".$dynamic_grid . ' ' . $Carousel." <".$email.">".$newLine;*/


Sendmail2($to_name, $from_email,$SENDTO_ADDRESS2,$from_name,$subject,$message2,$header); 

if ($status == true) {
    echo "<h1>Request sent.</h1>";
    echo "Your request is being processed. You will be notified when your ";
    echo "materials arrive. If you have any questions, please contact ";
    echo $EMAIL_LINK . " or " . $CONTACT_PHONE . ".<br/><br/>";
    echo $HOMEPAGE_LINK;
} else {
    echo "<h1>An error occured while processing your request</h1>";
    echo "Please try your request again later. If the problem persists ";
    echo "please contact " . $SUPPORT_LINK . "<br/><br/>";
    echo $HOMEPAGE_LINK;
}

echo "<br/><br/>";

?>
