<?php
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте

print_r ($_POST);

function strip ($text)
{
    return htmlspecialchars(stripslashes($text));
}

// создание переменных из полей формы		
if (isset($_POST['phone']))	
    $phone = strip ($_POST['phone']);

if (isset($_POST['email']))     
    $email = strip ($_POST['email']);

if (isset($_POST['month']))     
    $month = strip ($_POST['month']);

if (isset($_POST['day']))     
    $day = strip ($_POST['day']);

// адрес почты куда придет письмо
$address = "vilties@gmail.com"; 
// текст письма 
$note_text = "Телефон : $phone\r\nE-mail : $email\r\n Date: " .$month .$day;
$message = $note_text;

mail($address, $note_text, $message, "Content-type:text/plain; charset=utf8"); 
// сообщение после отправки формы
echo "<p style='color:#009900;'>Уважаемый клиент!<br/>
Ваше письмо отправленно успешно. <br>
Спасибо. <br>
Вам скоро ответят на почту <b>$email</b>.</p>";


echo $note_text;

?>