<?php

namespace service;

use Longman\TelegramBot\Request;

class Telegram
{
    private \Longman\TelegramBot\Telegram $service;
    public function __construct(array $post)
    {
        $bot = $this->service = new \Longman\TelegramBot\Telegram(CONSTANTS["TELEGRAM_TOKEN"]);

        Request::setCustomBotApiUri(
            $api_base_uri          = 'https://your-bot-api-server', // Default: https://api.telegram.org
            $api_base_download_uri = '/path/to/files/{API_KEY}'     // Default: /file/bot{API_KEY}
        );
        $name   = \core\Clean::str($post['name']);
        $phone  = \core\Clean::str($post['phone']);
        $square = \core\Clean::int($post['square']);
        $city   = \core\Clean::str($post['city']);
        $option = \core\Clean::str($post['option']);
    }
}
//https://api.telegram.org/bot6473176841:AAGnbVMnwVcQYzN7YpWdN4gEhKp4Q1LUfgM/setWebhook?url=https://navi.net.ru/form-handler
