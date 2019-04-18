<?php

class Status {
  private $conn;
  private $table_name = "sta_status";
  public $userId;
  public $dept;
  public $covering;
  public $location;
  public $note;
  public $responsibility;

  /**
  * constructor with $db as database connection
  **/
  public function __construct($db){
      $this->conn = $db;
  }

  public function getStatus() {
    $sql = "SELECT FK_locAIDPhysical, FK_resAID, FK_noteAID, FK_userID, FK_deptID, FK_locAIDCovering FROM $this->table_name";
    $query = $this->conn->query($sql);
    return $query;
  }

  public function getByCovering($nameQuery) {
    $location = new Location($this->conn);
    $values = array();
    $coveringID = $location->getByName($nameQuery);
    while ($row = $coveringID->fetch_assoc()) {
      array_push($values, $row["locAID"]);
    }

    $sql = "SELECT FK_locAIDPhysical, FK_resAID, FK_noteAID, FK_userID, FK_deptID, FK_locAIDCovering FROM $this->table_name WHERE FK_locAIDCovering=$values[0]";
    for($index = 1; $index<sizeof($values); $index++) {
      $sql .= " OR FK_locAIDCovering=$values[$index]";
    }
    $query = $this->conn->query($sql);
    return $query;
  }

  public function getByLocation($nameQuery) {
    $location = new Location($this->conn);
    $values = array();
    $coveringID = $location->getByName($nameQuery);
    while ($row = $coveringID->fetch_assoc()) {
      array_push($values, $row["locAID"]);
    }

    $sql = "SELECT FK_locAIDPhysical, FK_resAID, FK_noteAID, FK_userID, FK_deptID, FK_locAIDCovering FROM $this->table_name WHERE FK_locAIDPhysical=$values[0]";

    for($index = 1; $index<sizeof($values); $index++) {
      $sql .= " OR FK_locAIDPhysical=$values[$index]";
    }
    $query = $this->conn->query($sql);
    return $query;
  }

  public function getByDepartment($nameQuery) {
    $sql = "SELECT FK_locAIDPhysical, FK_resAID, FK_noteAID, FK_userID, FK_deptID, FK_locAIDCovering FROM $this->table_name WHERE FK_deptID='$nameQuery'";
    $query = $this->conn->query($sql);
    return $query;
  }

}

 ?>
