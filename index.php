<?php

require_once "autoloader.php";

use component\JsonDecoder\JsonDecoder;

header('Content-Type: application/vnd.api+json');
header('Cache-control: no-cache, no-store');
header("Cache-Control: max-age=0");

$input = file_get_contents('test.json');

$decoder = new JsonDecoder();

$result = $decoder->setJson($input)->decode();

print json_encode($result);

