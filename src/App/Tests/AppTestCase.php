<?php

namespace App\Tests;

use Doctrine\ORM\EntityManager;

abstract class AppTestCase extends \Silex\WebTestCase {
  /**
   * @var EntityManager
   */
  protected $em;

  /**
   * @inheritdoc
   */
  public function createApplication() {
    $app = require __DIR__.'/../../../app/app.php';

    $this->em = $app['orm.em'];
    return $app;
  }
}