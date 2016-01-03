<?php

namespace App\Tests\Controller;

use App\Tests\AppTestCase;

class CardControllerTest extends AppTestCase {

  public function testIndexAction() {
    $client = $this->createClient();
    $client->request('GET', '/cards');
    $response = $client->getResponse();

    $this->assertTrue($response->isOk());
    $this->assertEquals(json_encode('All cards'), $response->getContent());
  }

}