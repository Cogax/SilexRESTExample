<?php

$app['card.service'] = function() use ($app) {
  return new \App\Service\CardService($app['orm.em']);
};

