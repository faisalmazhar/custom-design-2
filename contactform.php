<?php
// ini_set('display_errors', 1);

  if(isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $number = $_POST["number"];
    $subject = $_POST["subject"];
    $services = $_POST["services"];
    $message = $_POST["message"];


  $mailTo = "info@digitaltechsol.com";
  $header = "From: ".$email;
  $txt    = "You have recieve an e-mail from ".$name."<br><br>".$number. "<br><br>" .$services. "<br><br>" .$message.;

  mail($mailTo, $subject, $txt, $header);
  header("Location: thankyou.html");
  // exit();
  }

 ?>
