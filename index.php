<?php

use Symfony\Component\HttpFoundation\Request;

use Symfony\Component\Debug\Debug;

$autoloader = require_once 'vendor/autoload.php';



$sc = include __DIR__ . '/src/container.php';

$request = Request::createFromGlobals();

$response = $sc->get('framework')->handle($request);
$response->send();