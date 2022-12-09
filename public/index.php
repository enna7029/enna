<?php

namespace Enna\Framework;
ini_set('display_errors', true);

require __DIR__ . '/../vendor/autoload.php';


$app = new App('E:\code\enna');
$http = $app->http;
$response = $http->run();
$response->send();
$http->end($response);

