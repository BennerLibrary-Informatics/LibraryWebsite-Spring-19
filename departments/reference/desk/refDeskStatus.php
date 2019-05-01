<script>
   $(document).ready(function() {
     setInterval(timestamp, 30000);
   });

   function timestamp() {
     $.ajax({
       url: 'refDeskStatus.php',
       success: function(data) {
       $('#refDesk').html(data);
       },
     });
   }
</script>
<div id="refDesk">
<h1>Reference Desk Status</h1>
<?php
  //Call json file
	$host = 'https://agile.bennerlibrary.com';
	$locationQuery = '/api/sta/status/get-by-location.php?name=reference%20desk';
	$coveringQuery = '/api/sta/status/get-by-covering.php?name=reference%20desk';

	$usersInfoJSON = file_get_contents($host . '/departments/reference/desk/docs/user_info.json');
	$usersInfo = json_decode ($usersInfoJSON, true);

  //decode json file into an associative array
	$locationJSON = file_get_contents($host . $locationQuery); //get by location
	$locationRefDesk = json_decode($locationJSON, true);

	$coveringJSON = file_get_contents($host . $coveringQuery); //get by covering
	$coveringRefDesk = json_decode($coveringJSON, true);

	//call data from get-by-location and assign it to variables

  $infoStudentPresent = false;

	if(isset($locationRefDesk['status'])) {
		//calls info from get-by-location
    foreach($locationRefDesk['status'] as $item) {
      if ($item['department'] == 'info') {
        $infoStudentPresent = true;
      } elseif ($item['department'] == 'benlib') {
        $location = $item['location'];
        $department = $item['department'];
        $covering = $item['covering'];
    	  $userID = $item['userID'];
      }
    }
	}
  if (isset($coveringRefDesk['status']) && !isset($department)) {
		//calls info from get-by-covering
 		$location = $coveringRefDesk['status'][0]['location'];
 		$department = $coveringRefDesk['status'][0]['department'];
 		$covering = $coveringRefDesk['status'][0]['covering'];
 		$userID = $coveringRefDesk['status'][0]['userID'];
	} elseif (!isset($department)) { //if department isn't set and defaults to null
		$location = null;
		$department = null;
		$covering = null;
		$userID = null;
	}

	//creates variable names
	$FName;
	$LName;
	$Staff_Email;
	$Staff_Phone_Number;
	$Staff_Name;
	$username;

	foreach($usersInfo as $item){

		if($userID == hash("sha256", $item["username"])){ //compares api username with json file username
			//calls data from user_info json file and assign it to variables
			$FName = $item['First Name'];
			$LName = $item['Last Name'];
			$Staff_Email = $item['email ID'];
			$Staff_Phone_Number = $item['Phone #'];
			$Staff_Name = $FName . " " . $LName;
			$username = $item['username'];
		}
	}

	$refDeskState; //checks who is logged in and set status
	if (!isset($covering) && $department == 'benlib') {
		$refDeskState = "staffed"; //sets status = staffed
	} elseif($department == 'benlib' && $infoStudentPresent && isset($covering)) {
    $refDeskState = 'info_on_call'; //sets status = info on call
  } elseif($infoStudentPresent) {
		$refDeskState = 'info_student'; //sets status = info student
	} elseif(isset($covering) && $department == 'benlib' && !$infoStudentPresent) {
		$refDeskState = 'on_call'; //sets status = on call
	} else {
		$refDeskState = "no_staff"; //sets status = no staff
	}

  switch ($refDeskState) { //checks for what the status is
    case 'staffed':
      include_once('./status/staffed.php'); //calls staff php if status = staff
      break;
    case 'info_on_call':
      include_once('./status/info_on_call.php'); //calls info on call php if status = info on call
      break;
    case 'info_student':
      include_once('./status/info_student.php'); //calls info student php if status = info student
      break;
    case 'on_call':
      include_once('./status/on_call.php'); //calls on call php if status = on call
      break;
    case 'no_staff':
      include_once('./status/no_staff.php'); //calls no staff php if status = no staff
      break;
    default:
      include_once('./status/no_staff.php'); //defaults to no staff php if status = null
      break;
  }

  ?>
   </div>
