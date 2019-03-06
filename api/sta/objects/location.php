<?php

class Location {
  private $conn;
  private $table_name = "sta_location";

  public function getLocations() {
    $sql = "SELECT locAID, locTitle, FK_deptID FROM sta_location";
    $query = $this->conn->query($sql);
    return $query;
  }
  // constructor with $db as database connection
  public function __construct($db){
      $this->conn = $db;
  }

}



 ?>
