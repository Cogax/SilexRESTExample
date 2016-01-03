<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new App\Silex\Application(array(
  'debug' => true,
));

$app['api.version'] = "v1";
$app['api.endpoint'] = "/api";
$app['api.path'] = $app["api.endpoint"].'/'.$app["api.version"];

include __DIR__.'/../app/middlewares.php';
include __DIR__.'/../app/services.php';
include __DIR__.'/../app/controllers.php';
include __DIR__.'/../app/routes.php';

return $app;