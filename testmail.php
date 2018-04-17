<?php

$to = "fformula@gmail.com";
$subject = "Demo mail";
$message = "This is
only test
mail message

-------------
Best regards :)";
$header = @header("From: apache@m4.vpm.lt\nContent-Type: text/html; charset=utf8");

$send_mail = mail($to, $subject, $message, $header);

if($send_mail)
{
    echo "Your mail was sent";
} else{
    echo "some Error";
}
    
?>
    