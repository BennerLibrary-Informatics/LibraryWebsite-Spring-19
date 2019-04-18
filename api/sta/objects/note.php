<?php

class Note {
  private $conn;
  private $table_name = "sta_note";
  private $title;
  private $id;
  private $dept;
  private $description;
  private $active;

  /**
  * constructor with $db as database connection
  **/
  public function __construct($db){
      $this->conn = $db;
  }

  /**
  * returns sqli query contianing all notes
  **/
  public function getNotes() {
    $sql = "SELECT noteAID, noteTitle, FK_deptID FROM $this->table_name";
    $query = $this->conn->query($sql);
    return $query;
  }

  /**
  * returns sqli query containing note based on ID
  **/
  public function getById($idQuery) {
    $sql = "SELECT noteAID, noteTitle, FK_deptID FROM $this->table_name WHERE noteAID=$idQuery";
    $query = $this->conn->query($sql);
    return $query;
  }

  /**
  * returns sqli query containing note based on note title
  **/
  public function getByName($nameQuery) {
    $sql = "SELECT noteAID, noteTitle, FK_deptID FROM $this->table_name WHERE noteTitle='$nameQuery'";
    $query = $this->conn->query($sql);
    return $query;
  }

}
 ?>
