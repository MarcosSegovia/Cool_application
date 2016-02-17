<?php

require_once __DIR__ . '/../vendor/autoload.php';


$app = new \Coolframework\Component\Bootstrap\Bootstrap();
$app->configRouting(__DIR__ . '/../app/routing/routing.yml');


$request = \Coolframework\Component\Request\Request::create();
$response = $app->execute($request);
$response->message();