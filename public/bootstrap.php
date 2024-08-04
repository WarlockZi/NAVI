<?php
spl_autoload_register(function ($class) {
    $file = ROOT.str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    include $file;
});
