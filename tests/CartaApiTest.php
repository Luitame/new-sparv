<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CartaApiTest extends TestCase
{
    use MakeCartaTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateCarta()
    {
        $carta = $this->fakeCartaData();
        $this->json('POST', '/api/v1/cartas', $carta);

        $this->assertApiResponse($carta);
    }

    /**
     * @test
     */
    public function testReadCarta()
    {
        $carta = $this->makeCarta();
        $this->json('GET', '/api/v1/cartas/'.$carta->id);

        $this->assertApiResponse($carta->toArray());
    }

    /**
     * @test
     */
    public function testUpdateCarta()
    {
        $carta = $this->makeCarta();
        $editedCarta = $this->fakeCartaData();

        $this->json('PUT', '/api/v1/cartas/'.$carta->id, $editedCarta);

        $this->assertApiResponse($editedCarta);
    }

    /**
     * @test
     */
    public function testDeleteCarta()
    {
        $carta = $this->makeCarta();
        $this->json('DELETE', '/api/v1/cartas/'.$carta->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/cartas/'.$carta->id);

        $this->assertResponseStatus(404);
    }
}
