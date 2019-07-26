<?php

 $url = 'https://api.sendgrid.com/';
 $user = 'azure_bcf0125d65eb6f663a0cef9b05dddc76@azure.com';
 $pass = 'VoreTask?29';

 $params = array(
      'api_user' => $user,
      'api_key' => $pass,
      'to' => 'andres_v_m@hotmail.com',
      'subject' => 'testing from curl',
      'html' => 'testing body',
      'text' => 'testing body',
      'from' => 'andresvm9@gmail.com',
   );

 $request = $url.'api/mail.send.json';

 // Generate curl request
 $session = curl_init($request);

 // Tell curl to use HTTP POST
 curl_setopt ($session, CURLOPT_POST, true);

 // Tell curl that this is the body of the POST
 curl_setopt ($session, CURLOPT_POSTFIELDS, $params);

 // Tell curl not to return headers, but do return the response
 curl_setopt($session, CURLOPT_HEADER, false);
 curl_setopt($session, CURLOPT_RETURNTRANSFER, true);

 // obtain response
 $response = curl_exec($session);
 curl_close($session);

 // print everything out
 print_r($response);