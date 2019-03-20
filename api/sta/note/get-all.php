<?php
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

include_once '../../config/database.php';
include_once '../objects/note.php';

 $database = new Database();
 $db = $database->getConnection();

 $note = new Note($db);

 $result = $note->getNotes();

 $notes["notes"] = array();
 $num = $result->num_rows;
 if($num>0) {
   while ($row = $result->fetch_assoc()) {

     $newRow = array(
       "id" => $row["noteAID"],
       "title" => $row["noteTitle"],
       "dept" => $row["FK_deptID"]
     );
     array_push($notes["notes"], $newRow);
   }

   http_response_code(200);
   echo json_encode($notes);
 }
 else {
   // set response code - 404 Not found
    http_response_code(404);

    // tell the user no products found
    echo json_encode(
        array("message" => "No notes found.")
    );
 }

 ?>
