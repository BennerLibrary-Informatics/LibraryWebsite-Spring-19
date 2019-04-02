<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../config/database.php';
include_once '../objects/responsibility.php';

 $database = new Database();
 $db = $database->getConnection();
 $responsibility = new Responsibility($db);
 $result = $responsibility->getById($_GET["id"]);
 $row = $result->fetch_assoc();

 $num = $result->num_rows;
 if($num>0) {
  $payload = array (
    "id" => $row["resAID"],
    "title" => $row["resTitle"],
    "dept" => $row["FK_deptID"]
  );
  http_response_code(200);
  echo json_encode($payload);
} else {
  // set response code - 404 Not found
   http_response_code(404);

   // tell the user no products found
   echo json_encode(
       array("message" => "No responsibilites found with this ID.")
   );
}
 ?>
