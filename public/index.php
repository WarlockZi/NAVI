<?php

use core\Router;

session_start();

include dirname(__DIR__) . '/core/constants.php';
include __DIR__ . '/bootstrap.php';

$router = new Router();