<?php 

// using SendGrid's PHP Library
// https://github.com/sendgrid/sendgrid-php
require 'vendor/autoload.php';
$sendgrid = new SendGrid("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");
$email    = new SendGrid\Email();


$email->addTo("andres_v_m@hotmail.com")
      ->setFrom("avargas@vorealis.com")
      ->setSubject("Sending with SendGrid is Fun")
      ->setHtml("and easy to do anywhere, even with PHP");

$sendgrid->send($email);

 ?>
