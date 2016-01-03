<?php

$api = $app["controllers_factory"];
$api->get('/', function() {
  return 'Vocab REST API Endpoint';
});
$api->get('/cards', "card.controller:getAll");
$app->mount($app['api.path'], $api);


