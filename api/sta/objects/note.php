<?php

class Note {
  private $conn;
  private $table_name = "sta_note";
  private $title;
  private $id;
  private $dept;
  private $description;
  private $active;

  // constructor with $db as database connection
  public function __construct($db){
      $this->conn = $db;
  }
  public function getNotes() {
    $sql = "SELECT noteAID, noteTitle, FK_deptID FROM sta_note";
    $query = $this->conn->query($sql);
    return $query;
  }

  public function getById($idQuery) {
    $sql = "SELECT noteAID, noteTitle, FK_deptID FROM sta_note WHERE noteAID=$idQuery";
    $query = $this->conn->query($sql);
    return $query;
  }

  public function getByName($nameQuery) {
    $sql = "SELECT noteAID, noteTitle, FK_deptID FROM sta_note WHERE noteTitle='$nameQuery'";
    $query = $this->conn->query($sql);
    return $query;
  }
}
 ?>
