<?php
 include_once "vendor/autoload.php";
 /*
  * Create the body of the message (a plain-text and an HTML version).
  * $text is your plain-text email
  * $html is your html version of the email
  * If the receiver is able to view html emails then only the html
  * email will be displayed
  */
 
 $text = "Hi!\nHow are you?\n";
 $html = "<html>
       <head></head>
       <body>
           <p>Hi!<br>
               How are you?<br>
           </p>
       </body>
       </html>";
 // This is your From email address
 $from = array('andresvm9@gmail.com' => 'Andres Vargas');
 // Email recipients
 $to = array(
       'andres_v_m@hotmail.com'=>'Andres2',
       'avargas@vorealis.com'=>'Andres Vorealis'
 );
 // Email subject
 $subject = 'Example PHP Email';

 // Login credentials
 $username = 'azure_bcf0125d65eb6f663a0cef9b05dddc76@azure.com';
 $password = 'VoreTask?29';

 // Setup Swift mailer parameters
 $transport = new Swift_SmtpTransport('smtp.sendgrid.net', 587);
 $transport->setUsername($username);
 $transport->setPassword($password);
 $swift = new Swift_Mailer($transport);

 // Create a message (subject)
 $message = new Swift_Message($subject);

 // attach the body of the email
 $message->setFrom($from);
 $message->setBody($html, 'text/html');
 $message->setTo($to);
 $message->addPart($text, 'text/plain');

 // send message
 if ($recipients = $swift->send($message, $failures))
 {
     // This will let us know how many users received this message
     echo 'Message sent out to '.$recipients.' users';
 }
 // something went wrong =(
 else
 {
     echo "Something went wrong - ";
     print_r($failures);
 }