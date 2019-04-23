<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../config/database.php';
include_once '../objects/responsibility.php';

$database = new Database();
$db = $database->getConnection();
$responsibility = new Responsibility($db);

$result = $responsibility->getByName($_GET["name"]);

 $responsibilities["responsibilities"] = array();
 $num = $result->num_rows;
 if($num>0) {
   while ($row = $result->fetch_assoc()) {

     $newRow = array(
       "id" => $row["resAID"],
       "title" => $row["resTitle"],
       "dept" => $row["FK_deptID"]
     );
     array_push($responsibilities["responsibilities"], $newRow);
   }

   http_response_code(200);
   echo json_encode($responsibilities);
 }
 else {
   // set response code - 404 Not found
    http_response_code(204);

    // tell the user no products found
    echo json_encode(
        array("message" => "No responsibilites found with the the name $_GET[name].")
    );
 }
 ?>
