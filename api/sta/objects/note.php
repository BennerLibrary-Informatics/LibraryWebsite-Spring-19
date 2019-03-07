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
}
 ?>
