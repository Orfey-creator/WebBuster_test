<?php

// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

// Переменные, которые отправляет пользователь
$to = 'romanbez96@gmail.com';
$from = 'mail@digwel.ru';

$name = $_POST['name'];
$phone = $_POST['phone'];
$mail = $_POST['mail'];
$goods = $_POST['goods'];

// Формирование самого письма
    $title = "Заявка с сайта WebBuster";
    $body = "
    <h2>Новая заявка</h2>
    <b>Имя: </b>$name<br>
    <b>Телефон:</b> $phone<br><br>
    <b>Почта:</b> $mail<br><br>
    <b>Товар</b> $goods<br><br>
    ";
    
    // Настройки PHPMailer
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    try {
        $mail->addAddress($to);  // Адрес получателя
        $mail->setFrom($from, 'digwel.ru'); // Адрес и имя отправителя
    
    // Отправка сообщения
        $mail->isHTML(true);
        $mail->Subject = $title;
        $mail->Body = $body;    
    
    // Проверяем отравленность сообщения
        if ($mail->send()) {$result = "success";} 
        else {$result = "error";}
    
    } catch (Exception $e) {
        $result = "error";
        $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
    }
