<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new App\Silex\Application(array(
  'debug' => true,
));

include __DIR__.'/../app/routes.php';

return $app;