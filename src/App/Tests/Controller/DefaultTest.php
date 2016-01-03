<?php

namespace App\Tests\Controller;

use App\Tests\AppTestCase;

class DefaultTest extends AppTestCase {

  public function testHomePage() {
    $client = $this->createClient();
    $client->request('GET', $this->app['api.path'].'/');
    $response = $client->getResponse();

    $this->assertTrue($response->isOk());
    $this->assertEquals(json_encode('Vocab REST API Endpoint'), $response->getContent());
    $this->assertEquals('application/json', $response->headers->get('Content-Type'));
  }

}