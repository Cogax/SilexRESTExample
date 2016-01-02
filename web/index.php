<?php

$app = require_once __DIR__.'/../app/app.php';

$app->get('', function() use ($app) {
  return 'Hi!';
});

$app->run();