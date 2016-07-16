<?php
  $name = $_POST['name'];
  $email = $_POST['email'];
  $message = $_POST['message'];
 
  $to = "contact@preparingtofinishwell.org";
  $subject = "Preparing to Finish Well";
  $emailcontent = "From: $name \n\n $message";
  $mailheader = "From: $email";
 
  mail($to, $subject, $emailcontent, $mailheader) or header('Location: emailerror.html');
  header('Location: thank-you.html');
?>