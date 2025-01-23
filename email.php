<?php
$to_email = "kobefajardo2002@gmail.com";
$subject = "Send Email via PHP";
$body = "Hi, this is a kobe fajado from Eli Coffee Developers.";
$headers = "From: kobefajardo0995@gmail.com";


if(mail($to_email, $subject, $body, $headers)){
    echo "Email successfully sent to" . $to_email . "...";
}
else{
    echo "Email sending failed";
}
?>