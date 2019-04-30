<script>
   $(document).ready(function() {
     setInterval(timestamp, 5000);
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
	} elseif (!isset($department)) {
		$location = null;
		$department = null;
		$covering = null;
		$userID = null;
	}

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

	$refDeskState;
	if (!isset($covering) && $department == 'benlib') {
		$refDeskState = "staffed";
	} elseif($department == 'benlib' && $infoStudentPresent && isset($covering)) {
    $refDeskState = 'info_on_call';
  } elseif($infoStudentPresent) {
		$refDeskState = 'info_student';
	} elseif(isset($covering) && $department == 'benlib' && !$infoStudentPresent) {
		$refDeskState = 'on_call';
	} else {
		$refDeskState = "no_staff";
	}

  switch ($refDeskState) {
    case 'staffed':
      include_once('./staffed.php');
      break;
    case 'info_on_call':
      include_once('./info_on_call.php');
      break;
    case 'info_student':
      include_once('./info_student.php');
      break;
    case 'on_call':
      include_once('./on_call.php');
      break;
    case 'no_staff':
      include_once('./no_staff.php');
      break;
    default:
      include_once('./no_staff.php');
      break;
  }

  ?>
   </div>
