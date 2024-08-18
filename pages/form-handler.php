<?php
$token  = CONSTANTS['TELEGRAM_TOKEN'];
$chatId = CONSTANTS['TELEGRAM_CHATID'];


$name   = \core\Clean::str($_POST['name']);
$phone  = \core\Clean::str($_POST['phone']);
$square = \core\Clean::int($_POST['square']);
$city   = \core\Clean::str($_POST['city']);
$option = \core\Clean::str($_POST['option']);
$text   =
    "Наталиша, возьмешь еще заказ?".
    "Имя - $name" . PHP_EOL .
    "тел - $phone" . PHP_EOL .
    "площадь - $square" . PHP_EOL .
    "город - $city" . PHP_EOL .
    "тип - $option" . PHP_EOL;

$url = "https://api.telegram.org/bot$token/sendMessage?&chat_id=$chatId&text=$text";

header("Location:" . $url);
