<?php

namespace App\Service;

/**
 * Card Service definition independent from persistence framework.
 */
interface CardServiceInterface {

  /**
   * @return array
   */
  public function getAll();

}