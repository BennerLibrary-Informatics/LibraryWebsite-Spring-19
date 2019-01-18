<?php
   $page_title = "Book Request - Benner Library";
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
  require_once($path);
?>
<!-- ===== content below here ========================================================== -->

<?php

extract($_REQUEST);

if(!isset($_REQUEST['g-recaptcha-response']) || $_REQUEST['g-recaptcha-response'] == "") {
	die ('The reCAPTCHA was not submitted correctly. Go back and try it again.');
}

$_REQUEST['rush_item'] = ($_REQUEST['rush_item'] == 0) ? 'No' : 'Yes';
$_REQUEST['reserve'] = ($_REQUEST['reserve'] == 0) ? 'No' : 'Yes';
$_REQUEST['contact'] = ($_REQUEST['contact'] == 0) ? 'No' : 'Yes';


$message = '<h3>A faculty member has requested materials for purchase by Benner Library:</h3>'."<br />";

$message .= '<u><strong>Faculty Information</strong></u>'."<br />";

if (isset($_REQUEST['prof'])) {
    $message .= '<strong>Professor\'s Name:</strong> '.$_REQUEST['prof'].''."<br/>";
}

if (isset($_REQUEST['dept'])) {
    $message .= '<strong>Department:</strong> '.$_REQUEST['dept'].''."<br/>";
}

if (isset($_REQUEST['phone'])) {
    $message .= '<strong>Phone:</strong> '.$_REQUEST['phone'].''."<br/>";
}

if (isset($_REQUEST['src'])) {
    $message .= '<strong>Source of Information:</strong> '.$_REQUEST['src'].''."<br/>";
}

if (isset($_REQUEST['text02'])) {
    $message .= '<strong>Comments:</strong> '.$_REQUEST['text02'].''."<br/>";
}

$message .= "<br />".'<u><strong>Item Information</strong></u>'."<br />";

if (isset($_REQUEST['title'])) {
    $message .= '<strong>Title:</strong> '.$_REQUEST['title'].''."<br/>";
}

if (isset($_REQUEST['author'])) {
    $message .= '<strong>Author/Editor/Composer/Performer:</strong> '.$_REQUEST['author'].''."<br/>";
}

if (isset($_REQUEST['pub'])) {
    $message .= '<strong>Publisher:</strong> '.$_REQUEST['pub'].''."<br/>";
}

if (isset($_REQUEST['year'])) {
    $message .= '<strong>Year:</strong> '.$_REQUEST['year'].''."<br/>";
}

if (isset($_REQUEST['isbn'])) {
    $message .= '<strong>isbn:</strong> '.$_REQUEST['isbn'].''."<br/>";
}

if (isset($_REQUEST['email'])) {
    $message .= '<strong>Email:</strong> '.$_REQUEST['email'].''."<br/>";
}

if (isset($_REQUEST['price'])) {
    $message .= '<strong>Price:</strong> '.$_REQUEST['price'].''."<br/>";
}

$message .= "<strong>".'Format:'."</strong>".' ';

if($_REQUEST['format_dropdown'] == 'Other')
    {
        $message .= $_REQUEST['other']."<br/><br/>";
    }
else
    {
        $message .= $_REQUEST['format_dropdown']."<br/>";
    }


if (isset($_REQUEST['rush'])) {
    $message .= '<strong>RUSH item:</strong> '.$_REQUEST['rush_item'].''."<br/>";
}

if (isset($_REQUEST['contact'])) {
    $message .= '<strong>Contact:</strong> '.$_REQUEST['contact'].''."<br/>";
}

if (isset($_REQUEST['reserve'])) {
    $message .= '<strong>Reserve Needed:</strong> '.$_REQUEST['reserve'].''."<br/>";

}



if (isset($_REQUEST['reserve'])) {

/*echo "<script type='text/javascript'>alert('"$_REQUEST['reserve']"');</script>";*/

    $message .= '<strong>Course title:</strong> '.$_REQUEST['course_title'].''."<br/>";
    $message .= '<strong>Course number:</strong> '.$_REQUEST['course_no'].''."<br/>";
    $message .= '<strong>Course term:</strong> '.$_REQUEST['course_term'].''."<br/>";


    $periodArray=array("2 Hour In Library","2 Hour Out Of Library","2 Days","7 Days");
    $check_period = '';
    if (isset($_REQUEST['checkout_period'])) {
        $check_period = $_REQUEST['checkout_period'];
        $message .= '<strong>Checkout period:</strong> '.$periodArray[$_REQUEST['checkout_period']].''."<br/>";
    }
    }



//if other is not the option, we make the "specify other" field, an empty string.
if($_REQUEST['format_dropdown'] != 'Other'){
    $_REQUEST['other'] = '';
}

$reserve=false;
if($_REQUEST['reserve'] == 1){
    $reserve = true;
}

//No "yes" to reserve means no need to define what semester a material is reserved for.
if($_REQUEST['reserve'] == 0){
    $_REQUEST['semester'] = null;
}

$_REQUEST['rush_item'] = ($_REQUEST['rush_item'] == 'No') ? 0 : 1;
$_REQUEST['reserve'] = ($_REQUEST['reserve'] == 'No') ? 0 : 1;
$_REQUEST['contact'] = ($_REQUEST['contact'] == 'No') ? 0 : 1;


$date = date('Y-m-d');

$materials_string = sprintf('INSERT INTO materials_request(title,
                                                  author,
                                                  publisher,
                                                  year,
                                                  isbn,
                                                  email,
                                                  price,
                                                  format_type,
                                                  other_format,
                                                  prof_name,
                                                  department,
                                                  phone,
                                                  source,
                                                  date,
                                                  comments,
                                                  rush,
                                                  contact,
                                                  reserve,
                                                  course_title,
                                                  course_no,
                                                  course_term,
                                                  checkout_period)
                                                  VALUES("%s","%s",
                                                         "%s","%s",
                                                         "%s","%s",
                                                         "%s","%s",
                                                         "%s","%s",
                                                         "%s","%s",
                                                         "%s","%s",
                                                         "%s","%s",
                                                         "%s","%s",
                                                         "%s","%s",
                                                         "%s","%s")',
		$db->real_escape_string($_REQUEST['title']),
		$db->real_escape_string($_REQUEST['author']),
		$db->real_escape_string($_REQUEST['pub']),
		$db->real_escape_string($_REQUEST['year']),
		$db->real_escape_string($_REQUEST['isbn']),
		$db->real_escape_string($_REQUEST['email']),
		$db->real_escape_string($_REQUEST['price']),
		$db->real_escape_string($_REQUEST['format_dropdown']),
		$db->real_escape_string($_REQUEST['other']),
		$db->real_escape_string($_REQUEST['prof']),
		$db->real_escape_string($_REQUEST['dept']),
		$db->real_escape_string($_REQUEST['phone']),
		$db->real_escape_string($_REQUEST['src']),
		$db->real_escape_string($date),
		$db->real_escape_string($_REQUEST['text02']),
		$db->real_escape_string($_REQUEST['rush_item']),
		$db->real_escape_string($_REQUEST['contact']),
		$db->real_escape_string($_REQUEST['reserve']),
		$db->real_escape_string($_REQUEST['course_title']),
		$db->real_escape_string($_REQUEST['course_no']),
		$db->real_escape_string($_REQUEST['course_term']),
		$db->real_escape_string($check_period));
$materials_query=$db->query($materials_string) or die($db->error);

$_REQUEST['rush_item'] = ($_REQUEST['rush_item'] == 0) ? 'No' : 'Yes';
$_REQUEST['reserve'] = ($_REQUEST['reserve'] == 0) ? 'No' : 'Yes';
$_REQUEST['contact'] = ($_REQUEST['contact'] == 0) ? 'No' : 'Yes';


/*
    * Old Way - Keeping just in case

$message= "<h3>".'A faculty member has requested materials for purchase by Benner Library:'."</h3>"
."<br/><b style='text-decoration:underline;'>".'Faculty Information:'."</strong><br/>".'
'."<strong>".'Professor\'s Name: '."</strong>".' '.$_REQUEST['prof'].''."<br/>".'
'."<strong>".'Department: '."</strong>".' '.$_REQUEST['dept'].''."<br/>".'
'."<strong>".'Phone: '."</strong>".' '.$_REQUEST['phone'].''."<br/>".'
'."<strong>".'Source of Information: '."</strong>".' '.$_REQUEST['src'].''."<br/>".'
'."<strong>".'Additional Information or Comments: '."</strong>".' '.$_REQUEST['text02'].''."<br/><br/><b style='text-decoration:underline;'>".'

Item Information:'."</strong><br/>".'
'."<strong>".'Title:'."</strong>".' '.$_REQUEST['title'].''."<br/>".'
'."<strong>".'Author/Editor/Composer/Performer:'."</strong>".' '.$_REQUEST['author'].''."<br/>".'
'."<strong>".'Publisher:'."</strong>".' '.$_REQUEST['pub'].''."<br/>".'
'."<strong>".'Year:'."</strong>".' '.$_REQUEST['year'].''."<br/>".'
'."<strong>".'ISBN:'."</strong>".' '.$_REQUEST['isbn'].''."<br/>".'
'."<strong>".'Price:'."</strong>".' '.$_REQUEST['price'].''."<br/>".'
'."<strong>".'Format:'."</strong>".' ';
if($_REQUEST['format_dropdown'] == 'Other')
    $message .= $_REQUEST['other']."<br/><br/>";
else
    $message .= $_REQUEST['format_dropdown']."<br/>";
$message.=""."<strong>".'RUSH item:'."</strong>".' '.$_REQUEST['rush_item'].''."<br/>".'
'."<strong>".'Reserve:'."</strong>".' '.$_REQUEST['reserve'].'';
$periodArray=array("2 Hour In Library","2 Hour Out Of Library","2 Days","7 Days");
if($_REQUEST['reserve']){
$message .= "</br><strong>".'Checkout period:'."</strong>".' '.$periodArray[$_REQUEST['checkout_period']].''."<br/>".'
'."<strong>".'Contact:'."</strong>".' '.$_REQUEST['contact'].''."<br/>".'';
$message.="<br/><strong>".'Course Title:'."</strong>".' '.$_REQUEST['course_title'].''."<br/>".'';
$message.="<br/><strong>".'Course No:'."</strong>".' '.$_REQUEST['course_no'].''."<br/>".'';
}*/

    $newLine="\r\n";
    $subject = $_REQUEST['subject'];
    $from_name=$_REQUEST['prof'];
    $from_email=$_REQUEST['email'];
    $to_name='Acuisitions';
    $to_email=$_REQUEST['recipient'];
    $header = "MIME-Version: 1.0".$newLine;
    $header .= "Content-type: text/html; charset=iso-8859-1".$newLine;
    $header .= "To: Acquisitions <".$to_email."> ".$newLine;
    $header .= "From: ".$from_name." <".$from_email.">".$newLine;
    Sendmail($to_name,$to_email,$from_name,$from_email,$subject,$message,$header);
?>                                 
<h4><strong>The following information was sent to the Library Director:</strong></h4>

<strong style='text-decoration:underline;'>Faculty Information:</strong>
<p>
    <strong>Professor's Name:</strong> <?php echo $_REQUEST['prof'];?><br/>
    <strong>Department:</strong> <?php echo $_REQUEST['dept'];?><br/>
    <strong>Phone: </strong><?php echo $_REQUEST['phone'];?><br/>
    <strong>Source of Information:</strong> <?php echo $_REQUEST['src'];?><br/>
    <strong>Additional Information or Comments: </strong><?php echo $_REQUEST['text02'];?><br/>
</p>
<strong style='text-decoration:underline;'>Item Information:</strong>
<p>
    <strong>Title: </strong><?php echo $_REQUEST['title'];?><br/>
    <strong>Author/Editor: </strong><?php echo $_REQUEST['author'];?><br/>
    <strong>Publisher:</strong> <?php echo $_REQUEST['pub'];?><br/>
    <strong>Year:</strong> <?php echo $_REQUEST['year'];?><br/>
    <strong>ISBN: </strong><?php echo $_REQUEST['isbn'];?><br/>
    <strong>Price: </strong><?php echo $_REQUEST['price'];?><br/>
    <strong>Format: </strong><?php if($_REQUEST['format_dropdown'] == 'Other'){
                            echo $_REQUEST['other'];
                         } else {
                             echo $_REQUEST['format_dropdown'];
                         } ?><br/>
    <strong>Contact you: </strong><?php echo $_REQUEST['contact']; ?><br/>
    <strong>Reserve needed:</strong><?php echo $_REQUEST['reserve'];?><br/>
    <?php if($_REQUEST['reserve']){?>
    <strong>Course Title:</strong><?php echo $_REQUEST['course_title']?><br/>
    <strong>Course No:</strong><?php echo $_REQUEST['course_no']?><br/>
    <strong>Course Term:</strong><?php echo $_REQUEST['course_term']?><br/>
    <strong>Checkout Period:</strong><?php if (isset($_REQUEST['checkout_period'])) { echo $periodArray[$_REQUEST['checkout_period']];}?><br/>
    <?php }?>
</p>


<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
