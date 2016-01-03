<?php

namespace App\Tests\Controller;

use App\Tests\AppTestCase;

class DefaultTest extends AppTestCase {

  public function testHomePage() {
    $client = $this->createClient();
    $client->request('GET', '/');
    $response = $client->getResponse();

    $this->assertTrue($response->isOk());
    $this->assertEquals(json_encode('Vocab REST API Endpoint'), $response->getContent());
  }

}