<?php

if($_POST) {
  $to = "kannasivamps@gmail.com"; // your mail here
  $name = filter_var($_POST["name"], FILTER_SANITIZE_STRING);
  $mobile = filter_var($_POST["mobile"], FILTER_SANITIZE_STRING);
  $mail = filter_var($_POST["mail"], FILTER_SANITIZE_STRING);
  $email = 'kannasivamps@gmail.com';
  $subject = 'ADHITHYA HOSTEL  ';
  $cc = 'kannasivamps@gmail.com';
  $bcc = 'kannasivamps@gmail.com';
  $body = "Name:$name\nMobile:$mobile\nMail:$mail";
  
  //mail headers are mandatory for sending email
  $headers = 'From: ' .$email . "\r\n". 
  $cc = 'Cc: ' .$cc . "\r\n". 
  $bcc = 'Bcc: ' .$bcc . "\r\n".
  'Reply-To: ' . $email. "\r\n" . 
  'X-Mailer: PHP/' . phpversion();

  if(@mail($to, $subject, $body)) {
    $output = json_encode(array('success' => true));
    echo "<script>window.location= 'thank-you.php'</script>";
  } else {
    $output = json_encode(array('success' => false));
    die($output);
  }
}