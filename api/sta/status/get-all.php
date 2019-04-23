<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../config/database.php';
include_once '../objects/status.php';
include_once '../objects/note.php';
include_once '../objects/location.php';
include_once '../objects/responsibility.php';

 $database = new Database();
 $db = $database->getConnection();

 $statusObj = new Status($db);
 $note = new Note($db);
 $location = new Location($db);
 $responsibility = new Responsibility($db);

 $locationTitle;
 $coveringTitle;
 $resTitle;
 $noteTitle;

 $result = $statusObj->getStatus();

 $statuses["status"] = array();
 $num = $result->num_rows;
 if($num>0) {
   while ($row = $result->fetch_assoc()) {
     if ($row["FK_locAIDPhysical"]) {
       $locationTitle = $location->getById($row["FK_locAIDPhysical"])->fetch_assoc()["locTitle"];
     }
     if ($row["FK_locAIDCovering"]) {
       $coveringTitle = $location->getById($row["FK_locAIDCovering"])->fetch_assoc()["locTitle"];
     }
     if ($row["FK_resAID"]) {
       $resTitle = $responsibility->getById($row["FK_resAID"])->fetch_assoc()["resTitle"];
     }
     if ($row["FK_noteAID"]) {
       $noteTitle = $note->getById($row["FK_noteAID"])->fetch_assoc()["noteTitle"];
     }

     $newRow = array(
       "userID" => hash("sha256", $row["FK_userID"]),
       "location" => $locationTitle,
       "covering" => $coveringTitle,
       "responsibility" => $resTitle,
       "note" => $noteTitle,
       "department" => $row["FK_deptID"]
     );
     array_push($statuses["status"], $newRow);
   }

   http_response_code(200);
   echo json_encode($statuses);
 }
 else {
   // set response code - 404 Not found
    http_response_code(204);

    // tell the user no products found
    echo json_encode(
        array("message" => "No statuses found or no one clocked in.")
    );
 }

 ?>
