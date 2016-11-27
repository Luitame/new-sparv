<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FaseApiTest extends TestCase
{
    use MakeFaseTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateFase()
    {
        $fase = $this->fakeFaseData();
        $this->json('POST', '/api/v1/fases', $fase);

        $this->assertApiResponse($fase);
    }

    /**
     * @test
     */
    public function testReadFase()
    {
        $fase = $this->makeFase();
        $this->json('GET', '/api/v1/fases/'.$fase->id);

        $this->assertApiResponse($fase->toArray());
    }

    /**
     * @test
     */
    public function testUpdateFase()
    {
        $fase = $this->makeFase();
        $editedFase = $this->fakeFaseData();

        $this->json('PUT', '/api/v1/fases/'.$fase->id, $editedFase);

        $this->assertApiResponse($editedFase);
    }

    /**
     * @test
     */
    public function testDeleteFase()
    {
        $fase = $this->makeFase();
        $this->json('DELETE', '/api/v1/fases/'.$fase->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/fases/'.$fase->id);

        $this->assertResponseStatus(404);
    }
}
