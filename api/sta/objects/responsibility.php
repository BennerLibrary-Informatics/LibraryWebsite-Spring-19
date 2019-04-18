<?php

class Responsibility {
  private $conn;
  private $table_name = "sta_responsibility";
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

  public function getRes() {
    $sql = "SELECT resAID, resTitle, FK_deptID FROM $this->table_name";
    $query = $this->conn->query($sql);
    return $query;
  }

  public function getById($idQuery) {
    $sql = "SELECT resAID, resTitle, FK_deptID FROM $this->table_name WHERE resAID=$idQuery";
    $query = $this->conn->query($sql);
    return $query;
  }

  public function getByName($nameQuery) {
    $sql = "SELECT resAID, resTitle, FK_deptID FROM $this->table_name WHERE resTitle='$nameQuery'";
    $query = $this->conn->query($sql);
    return $query;
  }

}

 ?>
