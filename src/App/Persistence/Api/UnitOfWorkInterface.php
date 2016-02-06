<?php

namespace App\Persistence\Api;

use App\Persistence\Api\Repository\CardRepositoryInterface;

interface UnitOfWorkInterface {

  /**
   * Saves all changes.
   */
  public function save();

  /**
   * @return CardRepositoryInterface
   */
  public function getCardRepository();

}