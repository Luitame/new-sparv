<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VisorPontuacaoApiTest extends TestCase
{
    use MakeVisorPontuacaoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateVisorPontuacao()
    {
        $visorPontuacao = $this->fakeVisorPontuacaoData();
        $this->json('POST', '/api/v1/visorPontuacaos', $visorPontuacao);

        $this->assertApiResponse($visorPontuacao);
    }

    /**
     * @test
     */
    public function testReadVisorPontuacao()
    {
        $visorPontuacao = $this->makeVisorPontuacao();
        $this->json('GET', '/api/v1/visorPontuacaos/'.$visorPontuacao->id);

        $this->assertApiResponse($visorPontuacao->toArray());
    }

    /**
     * @test
     */
    public function testUpdateVisorPontuacao()
    {
        $visorPontuacao = $this->makeVisorPontuacao();
        $editedVisorPontuacao = $this->fakeVisorPontuacaoData();

        $this->json('PUT', '/api/v1/visorPontuacaos/'.$visorPontuacao->id, $editedVisorPontuacao);

        $this->assertApiResponse($editedVisorPontuacao);
    }

    /**
     * @test
     */
    public function testDeleteVisorPontuacao()
    {
        $visorPontuacao = $this->makeVisorPontuacao();
        $this->json('DELETE', '/api/v1/visorPontuacaos/'.$visorPontuacao->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/visorPontuacaos/'.$visorPontuacao->id);

        $this->assertResponseStatus(404);
    }
}
