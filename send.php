<?php
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['name1']))	
{
    $name1 = $_POST['name1'];
    if ($name1 == '')	
    {
        unset($name1);
    }
}
if (isset($_POST['email1']))		
{
    $email1 = $_POST['email1'];		
    if ($email1 == '')	
    {
        unset($email1);
    }
}

if (isset($_POST['sab']))			
{
    $sab = $_POST['sab'];		
    if ($sab == '')		
    {
        unset($sab);
    }
}
//стирание треугольных скобок из полей формы
if (isset($name1) ) {
$name1=stripslashes($name1);
$name1=htmlspecialchars($name1);
}
if (isset($email1) ) {
$email1=stripslashes($email1);
$email1=htmlspecialchars($email1);
}
if (isset($text) ) {
$text=stripslashes($text);
$text=htmlspecialchars($text);
}
// адрес почты куда придет письмо
$address="vilties@gmail.com";
// текст письма 
$note_text="Телефон : $name1 \r\n Email : $email1 \r\n";

if (isset($name1)  &&  isset ($sab) ) {
mail($address,$note_text,"Content-type:text/plain; windows-1251"); 
// сообщение после отправки формы
echo "<p style='color:#009900;'>Уважаемый(ая) <b>$name1</b> Ваше письмо отправленно успешно. <br> Спасибо. <br>Вам скоро ответят на почту <b> $email1</b>.</p>";
}
?>