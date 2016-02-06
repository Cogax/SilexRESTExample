<?php

namespace App\Persistence\Api\Repository;

interface RepositoryInterface {

  /**
   * Finds an entity by its id.
   *
   * @param int $id
   *   The id of the entity.
   */
  public function findById($id);

  /**
   * Deletes an entity.
   *
   * @param object $entity
   *   The entity object to delete.
   */
  public function delete($entity);

  /**
   * Adds an entity.
   *
   * @param object $entity
   *   The entity object to save.
   */
  public function add($entity);


}