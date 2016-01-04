<?php

namespace App\Tests\DTO;

use App\DTO\CardDTO;
use App\Entity\Card;
use Papper\Papper;


class CardDTOMappingTest extends \PHPUnit_Framework_TestCase {

  public function testMapCardIntoCardDTO() {
    $card = new Card();
    $card->setFront('front');
    $card->setBack('back');

    $cardDTO = Papper::map($card)->toType('App\DTO\CardDTO');

    $this->assertInstanceOf('App\DTO\CardDTO', $cardDTO);
    $this->assertEquals('front', $cardDTO->front);
    $this->assertEquals('back', $cardDTO->back);
  }

  public function testMapCardDTOIntoCard() {
    $cardDto = new CardDTO();
    $cardDto->front = 'front';
    $cardDto->back = 'back';

    $card = Papper::map($cardDto)->toType('App\Entity\Card');

    $this->assertInstanceOf('App\Entity\Card', $card);
    $this->assertEquals('front', $card->getFront());
    $this->assertEquals('back', $card->getBack());
  }

  public function testMapMultipleCardsIntoCardDTOs() {
    $card1 = new Card();
    $card1->setFront('front1');
    $card1->setBack('back1');
    $card2 = new Card();
    $card2->setFront('front2');
    $card2->setBack('back2');

    $cards = [$card1, $card2];
    $cardDTOs = Papper::map($cards, 'App\Entity\Card')->toType('App\DTO\CardDTO');

    $this->assertInternalType('array', $cardDTOs);
    $this->assertCount(2, $cardDTOs);
    $this->assertInstanceOf('App\DTO\CardDTO', $cardDTOs[0]);
    $this->assertInstanceOf('App\DTO\CardDTO', $cardDTOs[1]);
    $this->assertEquals('front1', $cardDTOs[0]->front);
    $this->assertEquals('back2', $cardDTOs[1]->back);
  }

}