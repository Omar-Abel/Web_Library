<?php 
  include("contacs.php");

  if($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $contact = new Contact();
    $contact->sendMessage($email, $name, $subject, $message);
  }



?>