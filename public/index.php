<?php

require_once __DIR__ . '/../vendor/autoload.php';


$app = new \Coolframework\Component\Bootstrap\Bootstrap();
$app->configRouting(__DIR__ . '/../app/routing/routing.yml');


$request = new \Coolframework\Component\Request\Request($_SERVER['REQUEST_URI']);
$response = $app->execute($request);
$response->message();