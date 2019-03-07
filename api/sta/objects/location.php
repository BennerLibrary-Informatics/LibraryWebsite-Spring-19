<?php

class Location {
  private $conn;
  private $table_name = "sta_location";
  public $id;
  public $title;
  public $dept;
  public $description;
  public $active;

  public function getLocations() {
    $sql = "SELECT locAID, locTitle, FK_deptID, locActive FROM sta_location";
    $query = $this->conn->query($sql);
    return $query;
  }
  // constructor with $db as database connection
  public function __construct($db){
      $this->conn = $db;
  }

  public function getById($queryId){
    $sql = "SELECT locAID, locTitle, FK_deptID, locActive FROM sta_location WHERE locAID=$queryId";
    $query = $this->conn->query($sql);
    return $query;
  }

}



 ?>
