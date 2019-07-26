<?php 
require_once "vendor/autoload.php";

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.sendgrid.net', 587))
  ->setUsername('azure_bcf0125d65eb6f663a0cef9b05dddc76@azure.com')
  ->setPassword('VoreTask?29')
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Create a message
$message = (new Swift_Message('Wonderful Subject'))
  ->setFrom(['admin@taskblast.io' => 'Task Blast'])
  ->setTo(['andres_v_m@hotmail.com', 'other@domain.org' => 'Heisenberg'])
  ->setBody('This is just a test')
  ;

// Send the message
$result = $mailer->send($message);
 ?>