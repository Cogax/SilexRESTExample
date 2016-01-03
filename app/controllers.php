<?php

$app['card.controller'] = function() use ($app) {
  return new \App\Controller\CardController($app['card.service']);
};