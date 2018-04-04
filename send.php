<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$email = $_POST['email'];
$message = $_POST['message'];
$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$email = htmlspecialchars($email);
$message = htmlspecialchars($message);
$name = urldecode($name);
$phone = urldecode($phone);
$email = urldecode($email);
$message = urldecode($message);
$name = trim($name);
$phone = trim($phone);
$email = trim($email);
$message = trim($message);
//echo $fio;
//echo "<br>";
//echo $email;
if (mail("yuriy.kislenko00@gmail.com", "Заявка с сайта", "Имя: ".$name. ", Телефон: ".$phone. ", E-mail: ".$email. ", Сообщение: ".$message , "From: yriy.kislenko00@gmail.com \r\n"))
 {     header('Location: ./index.html'); 
} else { 
    echo "при отправке сообщения возникли ошибки";
}?>
