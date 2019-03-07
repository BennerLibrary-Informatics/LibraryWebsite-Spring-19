<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../config/database.php';
include_once '../objects/location.php';

 $database = new Database();
 $db = $database->getConnection();
 $location = new Location($db);
 $result = $location->getById($_GET["id"]);
  $row = $result->fetch_assoc();

  $payload = array (
    "id" => $row["locAID"],
    "title" => $row["locTitle"],
    "dept" => $row["FK_deptID"]
  );
  echo json_encode($payload);
 ?>
