<?php

namespace App\Middleware;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class JsonResponseMiddleware {

  private $app;

  public function __construct(Application $app) {
    $this->app = $app;
    $this->handle();
  }

  public function handle() {
    $this->app->after(function(Request $request, Response $response) {
      if($response->headers->get('Content-Type') === 'application/json') {
        return $response;
      }

      $response->setContent(json_encode($response->getContent()));
      $response->headers->set('Content-Type', 'application/json');

      return $response;
    });
  }

}