
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

	$usersInfoJSON = file_get_contents('http://agilejoshfork.localhost.com/departments/reference/desk/user_info.json');
	$usersInfo = json_decode ($usersInfoJSON, true);

	//call data from get-by-location and assign it to variables


	if(isset($locationRefDesk['status'])) {
		//calls info from get-by-location
		$location = $locationRefDesk['status'][0]['location'];
	 	$department = $locationRefDesk['status'][0]['department'];
	 	$covering = $locationRefDesk['status'][0]['covering'];
	 	$userID = $locationRefDesk['status'][0]['userID'];
	} elseif (isset($coveringRefDesk)) {
		//calls info from get-by-covering
 		$location = $coveringRefDesk['status'][0]['location'];
 		$department = $coveringRefDesk['status'][0]['department'];
 		$covering = $coveringRefDesk['status'][0]['covering'];
 		$userID = $coveringRefDesk['status'][0]['userID'];
	} else {
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
		echo 'staffed';
	} elseif(!isset($covering) && $department == 'info') {
		$refDeskState = 'info_student';
		echo 'info_student';
		echo $username;
	} elseif(isset($covering) && $department == 'benlib') {
		$refDeskState = 'on_call';
		echo "on_call";
	} elseif (isset($covering) && $department == 'info') {
		$refDeskState = "info_on_call";
		echo 'info_on_call';
	} else {
		 echo "no_staff";
		 echo "<br>";
		 $refDeskState = "no_staff";
	}

?>
