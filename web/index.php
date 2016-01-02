<?php

$app = require_once __DIR__.'/../app/app.php';

$app->get('', function() {
  return 'Vocab REST API Endpoint';
});

include_once __DIR__.'/../app/routing.php';

$app->run();