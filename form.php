<?php

header('Access-Control-Allow-Origin: *');

$EmailTo = "pavelhol@yandex.ru";
$EmailFrom = 'mailfrom@mail.com';
$Subject = "Заполнили форму на сайте";

$message = print_r($_POST,true);

$success = mail($EmailTo, $Subject, $message, "From: <$EmailFrom>");
if($success) { echo "Успешно отправлено"; }
else{  echo "Ошибка!"; }

?>