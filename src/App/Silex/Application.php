<?php

namespace App\Silex;

use Silex\Provider\DoctrineServiceProvider;

class Application extends \Silex\Application {

  public function __construct(array $values) {
    parent::__construct($values);

    $this->register(new DoctrineServiceProvider(), array(
      'db.options' => array(
        'driver' => 'pdo_sqlite',
        'path' => __DIR__.'/../../../storage/app.db',
      ),
    ));

    $this->register(new \Dflydev\Provider\DoctrineOrm\DoctrineOrmServiceProvider(), array(
      'orm.em.options' => array(
        'mappings' => array(
          array(
            'type' => 'annotation',
            'namespace' => 'App\Entity',
            'path' => __DIR__.'/../../../src/App/Entity',
          ),
        ),
      ),
    ));
  }
}