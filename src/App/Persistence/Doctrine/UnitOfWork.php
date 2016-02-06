<?php

namespace App\Persistence\Doctrine;

use App\Persistence\Api\UnitOfWorkInterface;
use App\Persistence\Api\Repository\CardRepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;

class UnitOfWork implements UnitOfWorkInterface {

  /**
   * @var EntityManagerInterface
   */
  private $entityManager;

  /**
   * @var CardRepositoryInterface;
   */
  private $cardRepository;

  /**
   * UnitOfWork constructor.
   * @param \Doctrine\ORM\EntityManagerInterface $entityManager
   *   The injected Doctrine entity manager.
   */
  public function __construct(EntityManagerInterface $entityManager) {
    $this->entityManager = $entityManager;
  }

  /**
   * @inheritdoc
   */
  public function save() {
    $this->entityManager->flush();
  }

  /**
   * @inheritdoc
   */
  public function getCardRepository() {
    if(is_null($this->cardRepository)) {
    }
  }

}