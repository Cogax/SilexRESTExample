<?php

namespace App\Controller;

use App\Service\CardServiceInterface;
use Silex\Application;
use Symfony\Component\HttpFoundation\JsonResponse;


class CardController {

  /**
   * @var CardServiceInterface
   */
  private $cardService;

  public function __construct(CardServiceInterface $cardService) {
    $this->cardService = $cardService;
  }

  public function getAll() {
    return new JsonResponse($this->cardService->getAll());
  }

}