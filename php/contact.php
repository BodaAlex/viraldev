<?php

if (isset($_POST['submit']) {
  $lastname = $_POST['lastname'];
  $firstname = $_POST['firstname'];
  $mailFrom = $_POST['mail'];
  $message = $_POST['message'];

  $mailTo = "";//sa ti faci email de ala
  $headers = "From: ". $mailFrom;
  $txt = "You have received and email from ". $lastname ." ". $firstname.".\n\n". $message;

  mail($mailTo, $txt, $headers);
  // header("Location: index.php?mailsend");
}


 ?>
