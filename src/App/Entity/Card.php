<?php

namespace App\Entity;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;

/**
 * @Entity()
 */
class Card {
  /**
   * @var int
   * @Id()
   * @Column(type="integer")
   * @GeneratedValue(strategy="AUTO")
   */
  protected $id;

  /**
   * @var string
   * @Column(type="text")
   */
  protected $front;

  /**
   * @var string
   * @Column(type="text")
   */
  protected $back;

  /**
   * @return string
   */
  public function getFront() {
    return $this->front;
  }

  /**
   * @param string $front
   */
  public function setFront($front) {
    $this->front = $front;
  }

  /**
   * @return string
   */
  public function getBack() {
    return $this->back;
  }

  /**
   * @param string $back
   */
  public function setBack($back) {
    $this->back = $back;
  }
}