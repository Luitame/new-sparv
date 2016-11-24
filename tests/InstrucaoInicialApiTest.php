<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InstrucaoInicialApiTest extends TestCase
{
    use MakeInstrucaoInicialTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateInstrucaoInicial()
    {
        $instrucaoInicial = $this->fakeInstrucaoInicialData();
        $this->json('POST', '/api/v1/instrucaoInicials', $instrucaoInicial);

        $this->assertApiResponse($instrucaoInicial);
    }

    /**
     * @test
     */
    public function testReadInstrucaoInicial()
    {
        $instrucaoInicial = $this->makeInstrucaoInicial();
        $this->json('GET', '/api/v1/instrucaoInicials/'.$instrucaoInicial->id);

        $this->assertApiResponse($instrucaoInicial->toArray());
    }

    /**
     * @test
     */
    public function testUpdateInstrucaoInicial()
    {
        $instrucaoInicial = $this->makeInstrucaoInicial();
        $editedInstrucaoInicial = $this->fakeInstrucaoInicialData();

        $this->json('PUT', '/api/v1/instrucaoInicials/'.$instrucaoInicial->id, $editedInstrucaoInicial);

        $this->assertApiResponse($editedInstrucaoInicial);
    }

    /**
     * @test
     */
    public function testDeleteInstrucaoInicial()
    {
        $instrucaoInicial = $this->makeInstrucaoInicial();
        $this->json('DELETE', '/api/v1/instrucaoInicials/'.$instrucaoInicial->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/instrucaoInicials/'.$instrucaoInicial->id);

        $this->assertResponseStatus(404);
    }
}
