<?php

namespace App\Persistence\Doctrine\Repository;

use App\Persistence\Api\Repository\RepositoryInterface;
use Doctrine\ORM\EntityManagerInterface;

class Repository implements RepositoryInterface {

  /**
   * @var \Doctrine\ORM\EntityManagerInterface
   */
  private $doctrineRepo;

  public function __construct() {
  }

  /**
   * @inheritdoc
   */
  public function findById($id) {
    // TODO: Implement findById() method.
  }

  /**
   * @inheritdoc
   */
  public function delete($entity) {
    // TODO: Implement delete() method.
  }

  /**
   * @inheritdoc
   */
  public function add($entity) {
    // TODO: Implement add() method.
  }
}