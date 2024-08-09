<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$contact = $_POST['contact'];
$message = $_POST['message'];

$email_from ='info@asthivarconstruction.in';
$email_subject ='New Form Submission';

$email_body = "User Name: $name.\n".
              "User Email: $visitor_email.\n".
              "Contact: $subject.\n".
              "User Message: $message.\n";

$to = 'praveenc.ug20.it@francisxavier.ac.in';

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";


mail($to,$email_subject,$email_body,$headers);

header("Location: dummy.html")

?>
