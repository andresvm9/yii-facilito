<?php 

$From = "sender@test.com";
$To = "andresvm9@gmail.com";
$SMTPServer = "smtp.sendgrid.net";
$SMTPPort = "587";
$Username = "azure_bcf0125d65eb6f663a0cef9b05dddc76@azure.com";
$Password = "VoreTask?29";
$subject = "Test5";
$body = "Esta es solo una prueba";
$smtp = New-Object System.Net.Mail.SmtpClient($SMTPServer, $SMTPPort);
$smtp.EnableSSL = $true;
$smtp.Credentials = New-Object System.Net.NetworkCredential($Username, $Password);
$smtp.Send($From, $To, $subject, $body);
?>