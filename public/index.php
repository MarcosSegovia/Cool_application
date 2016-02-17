<?php

require_once __DIR__ . '/../vendor/autoload.php';

$app = new \Coolframework\Component\Bootstrap\Bootstrap();
$app->configRouting(__DIR__ . '/../app/routing/routing.yml');

$controller_index = str_replace("/", "", parse_url($_SERVER['REQUEST_URI'])['path']);
$app->execute($controller_index);