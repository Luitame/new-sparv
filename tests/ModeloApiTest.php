<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ModeloApiTest extends TestCase
{
    use MakeModeloTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateModelo()
    {
        $modelo = $this->fakeModeloData();
        $this->json('POST', '/api/v1/modelos', $modelo);

        $this->assertApiResponse($modelo);
    }

    /**
     * @test
     */
    public function testReadModelo()
    {
        $modelo = $this->makeModelo();
        $this->json('GET', '/api/v1/modelos/'.$modelo->id);

        $this->assertApiResponse($modelo->toArray());
    }

    /**
     * @test
     */
    public function testUpdateModelo()
    {
        $modelo = $this->makeModelo();
        $editedModelo = $this->fakeModeloData();

        $this->json('PUT', '/api/v1/modelos/'.$modelo->id, $editedModelo);

        $this->assertApiResponse($editedModelo);
    }

    /**
     * @test
     */
    public function testDeleteModelo()
    {
        $modelo = $this->makeModelo();
        $this->json('DELETE', '/api/v1/modelos/'.$modelo->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/modelos/'.$modelo->id);

        $this->assertResponseStatus(404);
    }
}
