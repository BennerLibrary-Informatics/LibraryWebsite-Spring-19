<?php

class Responsibility {
  private $conn;
  private $table_name = "sta_responsibility";
  public $id;
  public $title;
  public $dept;
  public $description;
  public $active;

  public function __construct($db){
      $this->conn = $db;
  }
  public function getRes() {
    $sql = "SELECT resAID, resTitle, FK_deptID FROM sta_responsibility";
    $query = $this->conn->query($sql);
    return $query;
  }

  public function getById($idQuery) {
    $sql = "SELECT resAID, resTitle, FK_deptID FROM sta_responsibility WHERE resAID=$idQuery";
    $query = $this->conn->query($sql);
    return $query;
  }

  public function getByName($nameQuery) {
    $sql = "SELECT resAID, resTitle, FK_deptID FROM sta_responsibility WHERE resTitle='$nameQuery'";
    $query = $this->conn->query($sql);
    return $query;
  }
}

 ?>
