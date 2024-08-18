<?php
$token = CONSTANTS['TELEGRAM_TOKEN'];
$chatId = CONSTANTS['TELEGRAM_CHATID'];
$url = "https://api.telegram.org/bot$token/sendMessage?&chat_id=$chatId&text=Ну привет, Виталий";

header("Location:".$url);
