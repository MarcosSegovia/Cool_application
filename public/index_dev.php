<?php

use Symfony\Component\Yaml\Parser;

require_once __DIR__ . '/../vendor/autoload.php';

define('ROOTPATH', realpath(__DIR__ . '/../'));

$parser         = new Parser();
$cool_container = new \Coolframework\Component\Injector\CoolContainer($parser, ROOTPATH . '/app/services', 'DEV');

$app = $cool_container->getService('bootstrap');
$app->setContainer($cool_container);

$request  = \Coolframework\Component\Request\Request::create();
$response = $app->execute($request);
$response->send();