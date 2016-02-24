<?php

use Symfony\Component\Yaml\Parser;

require_once __DIR__ . '/../vendor/autoload.php';

define('ROOTPATH', realpath(__DIR__ . '/../'));

$parser         = new Parser();
$cool_container = new \Coolframework\Component\Injector\CoolContainer($parser, ROOTPATH . '/app/services/services.yml');

$app = $cool_container->getService('bootstrap');
$app->configRouting($parser, __DIR__ . '/../app/routing/routing.yml');

$request  = \Coolframework\Component\Request\Request::create();
$response = $app->execute($cool_container, $request);
$response->message();