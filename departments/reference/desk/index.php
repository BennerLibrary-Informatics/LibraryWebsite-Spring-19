<?php
   $page_title = "Reference Desk - Benner Library";
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
<!-- ===== content below here ========================================================== -->
<h1>Currently at Reference Desk</h1>

<?php
  //Call json file
	$host = 'https://agile.bennerlibrary.com';
	$locationQuery = '/api/sta/status/get-by-location.php?name=reference%20desk';
	$coveringQuery = '/api/sta/status/get-by-covering.php?name=reference%20desk';

	//decode json file into an associative array
	$locationJSON = file_get_contents($host . $locationQuery); //get by location
	$locationRefDesk = json_decode($locationJSON, true);

	$coveringJSON = file_get_contents($host . $coveringQuery); //get by covering
	$coveringRefDesk = json_decode($coveringJSON, true);

	$usersInfoJSON = file_get_contents($host . '/departments/reference/desk/docs/user_info.json');
	$usersInfo = json_decode ($usersInfoJSON, true);

  $infoStudentPresent = false;

	//call data from get-by-location and assign it to variables

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
	if (!isset($covering) && $department == 'benlib' && !$infoStudentPresent) {
		$refDeskState = "staffed";
	} elseif($department == 'benlib' && $infoStudentPresent) {
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
      include_once('./1staffed.php');
      break;
    case 'info_on_call':
      include_once('./2info_on_call.php');
      break;
    case 'info_student':
      include_once('./3info_student.php');
      break;
  }

  ?>

  <hr />
  <h5>NOTES for Developers:</h5>
  <ul>
    <li>There is a order to follow when looking at the status:
      <ol>
        <li>the Department is benlib and Location is Reference desk stop processing go to option 1 below</li>
        <li>the Department is info and Location is Reference desk could be option 2 or 3 below depanding on next item</li>
        <li>the Department is benlib and Covering is Reference desk could be option 2 or 4 depending on previous item</li>
        <li>if none of the above go to option 5 below</li>
      </ol>
  </ul>

<hr />
        <h4 class="no-margin-bottom">Other Reference Links:</h4>
        <ul class="padding10">
        <li><a href="/departments/reference/index.php">Reference Desk Schedule</a></li>
        </ul>

        <ol>
          <li><a href="/departments/reference/desk/1staffed.php" target="_blank">Staffed</a></li>
          <li><a href="/departments/reference/desk/2info_on_call.php" target="_blank">Informatics Student and On Call Staff</a></li>
          <li><a href="/departments/reference/desk/3info_student.php" target="_blank">Informatics Student</a></li>
          <li><a href="/departments/reference/desk/4on_call.php" target="_blank">On Call Staff</a></li>
          <li><a href="/departments/reference/desk/5no_staff.php" target="_blank">No Staff</a></li>
        </ol>

<!-- ===== content above here ========================================================== -->
<?php
   $path = $_SERVER['DOCUMENT_ROOT'];
   $path .= "/scripts/bottom.php";
   include_once($path);
?>
