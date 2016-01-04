<?php

namespace App\Tests\Entity;

use App\Entity\Card;
use App\Tests\AppTestCase;

class CardValidationTest extends AppTestCase {

  public function testValidateCardDTO() {
    $card = new Card();
    $card->setFront('front');
    $card->setBack('');

    $this->assertCount(1, $this->app['validator']->validate($card));
  }

}