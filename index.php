<?php

$name = $_POST['name1'];

$mail = $_POST['email1'];

$to = "vilties@gmail.com";

$subject = $name."\n" .$mail;
$header = @header("Content-Type: text/html; charset=utf8");

$send_mail = mail($to, $subject, $header);

if(isset ($_POST['submit']))
{
    if($send_mail)
    {
        echo "Your mail was sent";
    } else{
        echo "some Error";
    }
}
    
?>
    