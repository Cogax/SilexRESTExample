<?php

namespace App\Controller;

use App\Service\CardServiceInterface;
use Papper\Papper;
use Silex\Application;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Validator\Constraints\Valid;
use Symfony\Component\Validator\Validator\ValidatorInterface;


class CardController {

  /**
   * @var CardServiceInterface
   */
  private $cardService;

  public function __construct(CardServiceInterface $cardService) {
    $this->cardService = $cardService;
  }

  public function getAll() {
    $cards = $this->cardService->getAll();
    $cardDTOs = Papper::map($cards, 'App\Entity\Card')->toType('App\DTO\CardDTO');
    $response = new JsonResponse($cardDTOs);

    return $response;
  }

}