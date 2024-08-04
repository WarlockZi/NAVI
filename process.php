<?php

$file = ROOT.'/pages/portfolio.php';
$content = file_get_contents($file);
$regex = '<span>(?P<cat>.+)<\/span>\s+<span>(?P<area>[0-9]+).+\s+.+\s+<h5>(?P<title>[a-яА-Я\s]+)';
$regexService = new \services\Regex($content,$regex);
