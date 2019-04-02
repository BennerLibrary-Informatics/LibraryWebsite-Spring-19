<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../config/database.php';
include_once '../objects/note.php';

 $database = new Database();
 $db = $database->getConnection();
 $note = new Note($db);
 $result = $note->getById($_GET["id"]);
 $row = $result->fetch_assoc();

 $num = $result->num_rows;
 if($num>0) {
  $payload = array (
    "id" => $row["noteAID"],
    "title" => $row["noteTitle"],
    "dept" => $row["FK_deptID"]
  );
  http_response_code(200);
  echo json_encode($payload);
} else {
  // set response code - 404 Not found
   http_response_code(404);

   // tell the user no products found
   echo json_encode(
       array("message" => "No notes found with this ID.")
   );
}
 ?>
