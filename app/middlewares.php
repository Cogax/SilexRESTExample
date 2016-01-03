<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$app->after(function(Request $request, Response $response) {
  $response->setContent(json_encode($response->getContent()));
  return $response;
});