<?php 

include_once("con_db.php");

  class Contact extends ConnectionDB{
    private $conn;
    private $date;
    private $email;
    private $name;
    private $subject;
    private $mesagge;
    
    function __construct(){
      $this->conn = new ConnectionDB();
      $this->conn = $this->conn->getConnection();

    }

    public function sendMessage(string $email, string $name, string $subject, string $mesagge){
      $this->date = date("Y-m-d");
      $this->email = $email;
      $this->name = $name;
      $this->subject = $subject;
      $this->mesagge = $mesagge;

      $sql = "INSERT INTO contactos (fecha, correo, nombre, asunto, comentario) VALUES (?, ?, ?, ?, ?)";
      $result = $this->conn->prepare($sql);
      $result->execute([$this->date, $this->email, $this->name, $this->subject, $this->mesagge]);
      echo '<h5 style="color: #00805d!important;">El mensaje se ha enviado!</h5>';
    }

    }

  
?>