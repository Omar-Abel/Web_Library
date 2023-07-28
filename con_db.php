<?php

include_once 'config/config.php';

class ConnectionDB
{
  private $host;
  private $user;
  private $pass;
  private $database;
  private $con;

  public function __construct()
  {
    $this->host = HOST;
    $this->user = USER;
    $this->pass = PASS;
    $this->database = DB;
  }

  public function getConnection()
  {
    try{
    $conStrg = "mysql:host=$this->host;dbname=$this->database;charset=utf8";
    $atributes = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    $this->con = new PDO($conStrg, $this->user, $this->pass, $atributes);
    return $this->con;
    } catch(PDOException $e){
      echo "Error: " . $e->getMessage();
    }
  }

}
