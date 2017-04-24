<?php

use Symfony\Component\Routing;

$routes = new Routing\RouteCollection();
$routes->add('frontpage', new Routing\Route('/', array(
  'type' => 'expense',
  '_controller' => 'MoneyManager\Controller\MoneyManager::listAction'
)));
$routes->add('moneylist', new Routing\Route('/list/{type}', array(
  'type' => 'income',
  '_controller' => 'MoneyManager\Controller\MoneyManager::listAction'
)));
return $routes;