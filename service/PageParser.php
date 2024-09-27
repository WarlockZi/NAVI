<?php

namespace services;

class PageParser
{
    public function __construct()
    {
        $file = ROOT.'/pages/portfolio.php';
        $content = file_get_contents($file);
        $regex = '<span>(?P<cat>.+)<\/span>\s+<span>(?P<area>[0-9]+).+\s+.+\s+<h5>(?P<title>[a-яА-Я\s]+)';
        $regexService = new \services\Regex($content,$regex);
    }

}

//public
//Ресурс https://navi.net.ru/ зарегистрирован.
//Используйте этот ключ в HTML-коде, который ваш сайт передает на устройства пользователей.
//6Lc0jCkqAAAAAPeB7xVa5joY0x1vlWqoj8I3AQ-4

//secret
//Используйте этот секретный ключ для обмена данными между сайтом и сервисом reCAPTCHA.
//6Lc0jCkqAAAAAAkF51wmJzIbQjjKB4D2_OvZ6m0x