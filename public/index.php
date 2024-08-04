<?php

use core\Router;

session_start();

include dirname(__DIR__) . '/core/constants.php';
include __DIR__ . '/bootstrap.php';
var_dump(CONSTANTS);

$router = new Router();