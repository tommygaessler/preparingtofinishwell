<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];

  $to = "preparingtofinishwell@gmail.com";
  $subject = "Preparing to Finish Well";
  $emailcontent = "From: $name \n\n $message";
  $mailheader = "From: $email";

  mail($to, $subject, $emailcontent, $mailheader) or header('Location: emailerror.php');
  header('Location: thank-you.php');
?>
