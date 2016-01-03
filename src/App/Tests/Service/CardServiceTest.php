<?php

namespace App\Tests\Service;

use App\Tests\AppTestCase;

class CardServiceTest extends AppTestCase {

  public function testInsertCard() {
    $cards = $this->app['card.service']->getAll();
    $this->assertInternalType('array', $cards);
  }

}