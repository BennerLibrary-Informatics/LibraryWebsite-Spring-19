<!DOCTYPE html>
<html>
<body>
<?php

	//Call json file
	$host = 'https://agile.bennerlibrary.com';
	$locationQuery = '/api/sta/status/get-by-location.php?name=reference%20desk';
	$coveringQuery = '/api/sta/status/get-by-covering.php?name=reference%20desk';

	//decode json file into an associative array
	$Call_location = file_get_contents($host . $locationQuery); //get by location
	$status = json_decode($Call_location, true);

	$Call_covering = file_get_contents($host . $coveringQuery); //get by covering
	$status2 = json_decode($Call_covering, true);

	$loginQuery = file_get_contents('https://agile.bennerlibrary.com/departments/reference/desk/docs/user_info.json');
	$userInfo = json_decode ($loginQuery, true);

	//test access to json files by printing the entire array
	//echo '<pre>' . print_r($status, true) . '</pre>';
	//echo '<pre>' . print_r($status2, true) . '</pre>';
	//echo '<pre>' . print_r($userInfo, true) . '</pre>';

	//call data from get-by-location and assign it to variables
	
	/* //calls info from get-by-location
	$location = $status['status'][0]['location'];
	$Department = $status['status'][0]['department'];
	$covering = $status['status'][0]['covering'];
	$userID = $status['status'][0]['userID']; */

	 //calls info from get-by-covering
	$location = $status2['status'][0]['location'];
	$Department = $status2['status'][0]['department'];
	$covering = $status2['status'][0]['covering'];
	$userID = $status2['status'][0]['userID']; 
	$userID = $status2['status'][0]['userID'];
	
	$counter = 0;
	foreach($userInfo as $item){

		if($userID == hash("sha256", $item["username"])){ //compares api username with json file username
			//calls data from user_info json file and assign it to variables
			$FName = $item['First Name'];
			$LName = $item['Last Name'];
			$Staff_Email = $item['email ID'];
			$Staff_Phone_Number = $item['Phone #'];
			$Staff_Name = $FName . " " . $LName;
			$username = $item['username'];

			if ($location == 'Reference desk' && $Department == 'benlib') {
				$status = "staffed";
			}
			elseif ($location == 'Reference desk' && $Department == 'info') {
				foreach ($status as $key => $value) {
					if ($Department == 'benlib' && $covering == 'Reference desk') {
						 $status = "info_on_call";
					}
					else {
						  $status = "info_student";
					}
				}
			}
			elseif ($Department == 'benlib' &&  $covering == 'Reference desk'){
					if ($location == 'Reference desk' && $Department == 'info') {
						$status = "info_on_call";
					}
					else {
						$status = "on_call";
					}
			}
			else {
				 echo "no_staff";
				 echo "<br>";
				 $status = "no_staff";
			}
		}
		++$counter;
	}
		if ($status == "staffed"){
			//header needed
			echo "Reference Desk is currently staffed by";
			echo "<br>";
			echo $Staff_Name;
			echo "<br>";
			echo $Staff_Email . " | " . $Staff_Phone_Number; //change to reference desk phone and email
			echo "<br>";
			echo '<img src = "/departments/reference/desk/img/informatics_student_graphic.jpg" />'; //Change image
			//need to update image to show staff image
			echo "<br>";
			echo 'Our reference staff sit at the reference desk in order to assist with research 
			and library specific questions. Please "interrupt" us.';
		}
		elseif ($status == "info_on_call"){
			//header needed
			echo "Reference Desk is currently staffed by " + \n + "Informatics Student " + \n + "815-939-5355";
			echo "<br>";
			echo '<img src = "/departments/reference/desk/img/informatics_student_graphic.jpg" />';
			echo "<br>";
			echo "Informatic students can assist you with printing needs and minor technology needs. They can take a message.";
			
			echo "On Call";
			echo "<br>";
			echo "Reference Staff ";
			echo "<br>";
			echo $Staff_Name;
			echo "<br>";
			echo $Staff_Email . " | " . $Staff_Phone_Number;
			echo "<br>";
			echo '<img src = "/departments/reference/desk/img/oncall/" />'; //photo size 160 x 240 tbd jpg or png
			//other info found in /departments/refernce/desk/docs/user_info.xlsx
			//need to update image to show staff image
			echo "<br>";
			echo "Even though the reference staff member is not physically at the desk currently.
				 He or she is on call. This means that you can contact him/her by ONU email or phone.
				 He/she will also be happy to meet you at the reference desk, just ask a student at one of the service desks for help.";
		}
		elseif ($status == "info_student"){
			//header needed
			echo "Reference Desk is currently staffed by";
			echo "<br>";
			echo "Informatics Student";
			echo "<br>";
			echo "815-939-5355";
			echo "<br>";
			echo '<img src = "/departments/reference/desk/img/informatics_student_graphic.jpg" />';
			echo "<br>";
			echo "Informatic students can assist you with printing needs and minor technology needs. They can take a message.";
		}
		elseif ($status == "on_call"){
			//header needed
			echo "On Call";
			echo "<br>";
			echo "Reference Staff";
			echo "<br>";
			echo $Staff_Name;
			echo "<br>";
			echo $Staff_Email . " | " . $Staff_Phone_Number;
			echo "<br>";
			echo '<img src = "/departments/reference/desk/img/oncall/" />'; //photo size 160 x 240 tbd jpg or png
			//other info found in /departments/refernce/desk/docs/user_info.xlsx
			echo "<br>";
			echo "Even though the reference staff member is not physically at the desk currently.
				 He or she is on call. This means that you can contact him/her by ONU email or phone.
				 He/she will also be happy to meet you at the reference desk, just ask a student at one of the service desks for help.";
		}
		elseif ($status == "no_staff"){
			//header needed
			echo "Reference Desk is not currently staffed";
			echo "<br>";
			echo"Email a Library Staff member for assistance";
			echo "<br>";
			echo $Staff_Email . " | " . "8159395355";
			echo "<br>";
			echo '<img src = "/departments/reference/desk/img/email_librarian.png" />'; //need graphic image
			echo "<br>";
			echo "Even though there is no one currently staffing the reference desk, our website is open 24/7.";
			echo "<br>";
			echo "Go to the Help tab on the homepage for self-help links or use the email link above to";
			echo "<br>";
			echo "contact a staff member who will return your email within 48 hours.";
		}

?>
</body>
</html>