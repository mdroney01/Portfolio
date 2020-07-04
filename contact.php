<?php

//variable setting

$name = $_REQUEST['Name'];
$email = $_REQUEST['Email'];
$message = $_REQUEST['Message'];

//check fields


if (empty($name) || empty($email) || empty($message))
{
  echo "Please fill all the fields";
}
else
{
  mail("roneymd1@gmail.com", "Roney's web message", $message , "From: $name <$email>");
  echo "<script type='text/javascript'>alert('your message sent successfully! ');
    window.history.log(-1);
  </script>";
  
}

?>
