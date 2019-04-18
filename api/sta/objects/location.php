<?php

class Location {
  private $conn;
  private $table_name = "sta_location";
  public $id;
  public $title;
  public $dept;
  public $description;
  public $active;

  /**
  * constructor with $db as database connection
  **/
  public function __construct($db){
      $this->conn = $db;
  }

  /**
  * Summary: returns sqli query containing all locations
  **/
  public function getLocations() {
    $sql = "SELECT locAID, locTitle, FK_deptID, locActive FROM $this->table_name";
    $query = $this->conn->query($sql);
    return $query;
  }

  /**
  * returns sqli query containing location by location ID
  **/
  public function getById($idQuery){
    $sql = "SELECT locAID, locTitle, FK_deptID, locActive FROM $this->table_name WHERE locAID=$idQuery";
    $query = $this->conn->query($sql);
    return $query;
  }

  /**
  * returns sqli query containing location by location title
  **/
  public function getByName($nameQuery) {
    $sql = "SELECT locAID, locTitle, FK_deptID, locActive FROM $this->table_name WHERE locTitle='$nameQuery'";
    $query = $this->conn->query($sql);
    return $query;
  }

}

 ?>
