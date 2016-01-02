<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new App\Silex\Application(array(
  'debug' => true,
));

return $app;