<?php
// ini_set('display_errors', 1);

  if(isset($_POST["submit"])) {
    $email = $_POST["email"];


  $mailTo = "info@digitaltechsol.com";
  $header = "From: ".$email;
  $txt    = "Someone has subscribe your newsletter";

  mail($mailTo, $txt, $header);
  header("Location: thankyou.html");
  // exit();
  }

 ?>
