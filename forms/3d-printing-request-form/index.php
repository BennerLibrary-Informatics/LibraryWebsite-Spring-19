<?php
    $page_title = "3D Printing Request Form Email - Benner Library";
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

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>