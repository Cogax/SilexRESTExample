<?php

namespace App\Tests;

use Doctrine\ORM\EntityManager;
use Silex\Application;

abstract class AppTestCase extends \Silex\WebTestCase {

  /**
   * Override just for type type hinting.
   * @var Application
   */
  protected $app;

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