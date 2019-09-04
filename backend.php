<?php

if (isset($_POST['message'])) {
  if (!empty($_POST['namestr']) || !empty($_POST['emailstr']) || !empty($_POST['pesan'])) {
    $namestr = $_POST['namestr'];
    $emailstr = $_POST['emailstr'];
    $messagestr = $_POST['pesan'];
    $to = "sofyanzuhad2@gmail.com";
    $subject = "Message From Stranger";
    $message = "Name : " . $namestr . "\n" . "SEND YOU A MESSAGE !" . "\n" . "Message :" . "\n" . $messagestr;
    $headers = "From: " . $emailstr . "\r\n";
    if (mail($to, $subject, $message)) {
      echo "" ?> <div class="alert alert-success fixed-top text-center" role="alert">EMAIL SENDED ! Thank You !</div> <?php
    } else {
      echo "" ?> <div class="alert alert-danger  text-center" role="alert">FAILED ! (correct your email !)</div> <?php
      }
  } else {
    echo "" ?> <div class="alert alert-danger  text-center" role="alert">FAILED ! (every element must be writed !)
</div> <?php
  }
}
?>