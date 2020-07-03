<?php


if (isset($_POST['submit'])) {
  
  $name = $_POST['name'];
  $subject = $_POST['subject'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];
  
  
  $mailTo = "roneymd1@gmail.com";
  $headers = "From: ".$mailFrom;
  $text = "you have received an e-mail from " .$name.".\n\n".$message;
  
  mail($mailTo, $subject, $text, $headers);
  header("Location: index.html");
  
  
  
}
