<?php

namespace App\Tests;

abstract class AppTestCase extends \Silex\WebTestCase {

  /**
   * @inheritdoc
   */
  public function createApplication() {
    $app = require __DIR__.'/../../../app/app.php';
    return $app;
  }
}