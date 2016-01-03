<?php

namespace App\Service;

use Doctrine\Common\Persistence\ObjectRepository;
use Doctrine\ORM\EntityManagerInterface;

class CardService implements CardServiceInterface{

  /**
   * @var EntityManagerInterface
   */
  private $em;

  /**
   * @var ObjectRepository
   */
  private $cardRepository;

  public function __construct(EntityManagerInterface $entityManager) {
    $this->em = $entityManager;
    $this->cardRepository = $this->em->getRepository('App\Entity\Card');
  }

  /**
   * @inheritdoc
   */
  function getAll() {
    $x = $this->cardRepository->findAll();
    return $this->cardRepository->findAll();
  }
}