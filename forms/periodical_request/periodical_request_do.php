<?php
   $page_title = "Faculty Periodical Request - Benner Library";
	$body_class = "";
	$body_id = "";
	$css = "";
	$js = "";
?>

<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/databaseConnection.php";
   include_once($path);
?>
<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  $path .= "/class/sendmail.php";
  require_once($path);
?>
<!-- ===== content below here ========================================================== -->

<?php
include '../../bin/jobapp/scripts/recaptchalib.php';

extract($_REQUEST);

if(!isset($_REQUEST['g-recaptcha-response']) || $_REQUEST['g-recaptcha-response'] == "") {
	die ('The reCAPTCHA was not submitted correctly. Go back and try it again.');
}

/*function ifset($var) {
    if (isset($var)) {
        return $var;
    }
}*/

$message = 'A new faculty periodical request has been received'."<br/>";

if (isset($_REQUEST['periodical'])) {
    $message .= '<strong>Title:</strong> '.$_REQUEST['periodical'].''."<br/>";
}

if (isset($_REQUEST['format'])) {
    $message .= '<strong>Preferred Format:</strong> '.$_REQUEST['format'].''."<br/>";
}

if (isset($_REQUEST['cost'])) {
    $message .= '<strong>Cost: $</strong>'.$_REQUEST['cost'].''."<br/>";
}

if (isset($_REQUEST['issn'])) {
    $message .= '<strong>ISSN: </strong>'.$_REQUEST['issn'].''."<br/>";
}

if (isset($_REQUEST['publisher'])) {
    $message .= '<strong>Publisher: </strong>'.$_REQUEST['publisher'].''."<br/>";
}

$message .= '<strong>Course names and course numbers this title will support:</strong>'."<br/>";

if (isset($_REQUEST['course'])) {
    $message .= '<strong>Course: </strong>'.$_REQUEST['course'].''."<br/>";
}

if (isset($_REQUEST['newprograms'])) {
    $message .= '<strong>Are there new programs that might benefit from this title? </strong>'.$_REQUEST['newprograms']."<br/>";
}

if (isset($_REQUEST['programs'])) {
    $message .= '<strong>New programs explanation:</strong>'.$_REQUEST['programs'].''."<br/>";
}

$message .= '<strong>Unique features that could benefit the library:</strong>'."<br/>";

if (isset($_REQUEST['features'])) {
    $message .= ''.$_REQUEST['features'].''."<br/>";
}

if (isset($_REQUEST['cancel'])) {
    $message .= '<strong>Periodicals to consider canceling in case room is needed ?</strong>'.$_REQUEST['cancel'].''."<br/>";
}

if (isset($_REQUEST['reason'])) {
    $message .= '<strong>Titles of periodicals to consider canceling:</strong>'.$_REQUEST['reason'].''."<br/>";
}

$message .= '<strong>Other Considerations:</strong>'."<br/>";

if (isset($_REQUEST['other'])) {
    $message .= ''.$_REQUEST['other'].''."<br/>";
}

if (isset($_REQUEST['sample'])) {
    $message .= '<strong>Sample Copy? </strong>'.$_REQUEST['sample'].''."<br/>";
}

if (isset($_REQUEST['approved'])) {
    $message .= '<strong>Department Head is aware of request? </strong>'.$_REQUEST['approved'].''."<br/>";
}

if (isset($_REQUEST['facultyname'])) {
    $message .= '<strong>Faculty Name: </strong>'.$_REQUEST['facultyname'].''."<br/>";
}

if (isset($_REQUEST['email'])) {
    $message .= '<strong>Faculty Email: </strong>'.$_REQUEST['email'].''."<br/>";
}

if (isset($_REQUEST['phone'])) {
    $message .= '<strong>Faculty Phone Number: </strong>'.$_REQUEST['phone'].''."<br/>";
}

if (isset($_REQUEST['dept'])) {
    $message .= '<strong>Department: </strong>'.$_REQUEST['dept'].''."<br/>";
}

if (isset($_REQUEST['notify'])) {
    $message .= '<strong>Notify When Available: </strong>'.$_REQUEST['notify'].''."<br/>";
}

$newLine="\r\n";
$subject = "New Periodical Request Received";
$from_name=$_REQUEST['facultyname'];
$from_email='informatics@olivet.edu'; /*if Kathy replies will create a FP ticket*/
$to_name='Acquisitions';
$to_email='acquisitions@bennerlibrary.com';
$header = "MIME-Version: 1.0".$newLine;
$header .= "Content-type: text/html; charset=iso-8859-1".$newLine;
$header .= "To: Acquisitions <".$to_email."> ".$newLine;
$header .= "From: ".$from_name." <".$from_email.">".$newLine;
Sendmail($to_name,$to_email,$from_name,$from_email,$subject,$message,$header);
$sql=sprintf('INSERT INTO periodicals_request(title,format,
                                              issn,publisher,
                                              course_names,
                                              new_courses,
                                              features,cancellation,
                                              considerations,sample,
                                              approval,prof_name,
                                              prof_email,prof_phone,
                                              dept,contact,cost)
                                              VALUES("%s","%s",
                                                     "%s","%s",
                                                     "%s","%s",
                                                     "%s","%s",
                                                     "%s","%s",
                                                     "%s","%s",
                                                     "%s","%s",
                                                     "%s","%s",
                                                     "%s")',
		$db->real_escape_string($_REQUEST['periodical']),
		$db->real_escape_string($_REQUEST['format']),
		$db->real_escape_string($_REQUEST['issn']),
		$db->real_escape_string($_REQUEST['publisher']),
		$db->real_escape_string($_REQUEST['course']),
		$db->real_escape_string($_REQUEST['programs']),
		$db->real_escape_string($_REQUEST['features']),
		$db->real_escape_string($_REQUEST['reason']),
		$db->real_escape_string($_REQUEST['other']),
		$db->real_escape_string($_REQUEST['sample']),
		$db->real_escape_string($_REQUEST['approved']),
		$db->real_escape_string($_REQUEST['facultyname']),
		$db->real_escape_string($_REQUEST['email']),
		$db->real_escape_string($_REQUEST['phone']),
		$db->real_escape_string($_REQUEST['dept']),
		$db->real_escape_string($_REQUEST['notify']),
		$db->real_escape_string($_REQUEST['cost']));
$query=$db->query($sql)or die($db->error);
header("Location: /forms/periodical_request/index.php?done=true&title=".$_REQUEST['periodical']."");
?>
