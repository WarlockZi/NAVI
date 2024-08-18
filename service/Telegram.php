<?php

namespace service;

use Longman\TelegramBot\Request;

class Telegram
{
    public function __construct(array $post)
    {

        $name   = \core\Clean::str($post['name']);
        $phone  = \core\Clean::str($post['phone']);
        $square = \core\Clean::int($post['square']);
        $city   = \core\Clean::str($post['city']);
        $option = \core\Clean::str($post['option']);
    }
}
//https://api.telegram.org/bot6473176841:AAGnbVMnwVcQYzN7YpWdN4gEhKp4Q1LUfgM/setWebhook?url=https://navi.net.ru/form-handler
