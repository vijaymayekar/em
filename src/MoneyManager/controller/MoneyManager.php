<?php

namespace MoneyManager\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MoneyManager {
  public function listAction(Request $request, $type) {
    $response = new Response('Nope, this is not a leap year.' . $type . rand());
    return $response;
  }
}