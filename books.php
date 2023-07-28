<?php 

include_once("con_db.php");

  class Books extends ConnectionDB{
    private $conn;

    function __construct(){
      $this->conn = new ConnectionDB();
      $this->conn = $this->conn->getConnection();

    }

    public function getBooks(){
      $sql = "SELECT * FROM libros";
      $execute = $this->conn->query($sql);
      $request = $execute->fetchall(PDO::FETCH_ASSOC);
      $this->conn = null;
      return $request;
    }

  }

?>