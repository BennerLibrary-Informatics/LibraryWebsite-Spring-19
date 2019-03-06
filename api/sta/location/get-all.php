<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../objects/location.php';

 $database = new Database();
 $db = $database->getConnection();

 $location = new Location($db);
 $result = $location->getLocations();

 $locations["locations"] = array();
 while ($row = $result->fetch_assoc()) {
   array_push($locations["locations"], $row);
 }
 
 http_response_code(200);
 echo json_encode($locations);

 ?>
