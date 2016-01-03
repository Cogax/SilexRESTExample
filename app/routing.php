<?php

$app->match('/cards', 'App\Controller\CardController::indexAction');

$app->get('/', function() {
  return 'Vocab REST API Endpoint';
});