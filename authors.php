<?php

include_once("con_db.php");

class Authors extends ConnectionDB{
  private $conn;

  function __construct(){
    $this->conn = new ConnectionDB();
    $this->conn = $this->conn->getConnection();

  }

  public function getAuthors(){
    $sql = "SELECT * FROM autores";
    $execute = $this->conn->query($sql);
    $request = $execute->fetchall(PDO::FETCH_ASSOC);
    $this->conn = null;
    return $request;
  }

}



?>