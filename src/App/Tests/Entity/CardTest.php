<?php

namespace App\Tests\Entity;

use App\Entity\Card;
use App\Tests\AppTestCase;
use Doctrine\ORM\UnitOfWork;

class CardTest extends AppTestCase {

  /**
   * @return Card
   */
  private function getCustomCard() {
    $card = new Card();
    $card->setFront('front');
    $card->setBack('back');

    return $card;
  }

  public function testInsertCard() {
    $cardRepository = $this->em->getRepository('App\Entity\Card');
    $cardCountBefore = count($cardRepository->findAll());

    $card = $this->getCustomCard();
    $this->em->persist($card);
    $this->em->flush();

    $cardCountAfter = count($cardRepository->findAll());

    $this->assertEquals(UnitOfWork::STATE_MANAGED, $this->em->getUnitOfWork()->getEntityState($card));
    $this->assertGreaterThan($cardCountBefore, $cardCountAfter);
  }

}