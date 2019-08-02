<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['message'];
$email_from='shrinzaragabbar@gmail.com';
$email_subject='Bakery Enquiry';
$email_body="User Name= $name \n.".
             "User email= $email .\n".
             "User Message= $message \n.";
$to ="kartikeyamisra12@gmail.com"
$headers="From $email_from \r \n";
$headers="Reply to:$email \r \n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");
?>