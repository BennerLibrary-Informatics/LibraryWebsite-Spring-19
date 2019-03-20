<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../config/database.php';
include_once '../objects/location.php';

$database = new Database();
$db = $database->getConnection();
$location = new Location($db);

$result = $location->getByName($_GET["name"]);

 $locations["locations"] = array();
 $num = $result->num_rows;
 if($num>0) {
   while ($row = $result->fetch_assoc()) {

     $newRow = array(
       "id" => $row["locAID"],
       "title" => $row["locTitle"],
       "dept" => $row["FK_deptID"]
     );
     array_push($locations["locations"], $newRow);
   }

   http_response_code(200);
   echo json_encode($locations);
 }
 else {
   // set response code - 404 Not found
    http_response_code(404);

    // tell the user no products found
    echo json_encode(
        array("message" => "No locations found with the the name $_GET[name].")
    );
 }
 ?>
