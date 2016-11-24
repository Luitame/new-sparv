<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class MensagemApiTest extends TestCase
{
    use MakeMensagemTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateMensagem()
    {
        $mensagem = $this->fakeMensagemData();
        $this->json('POST', '/api/v1/mensagems', $mensagem);

        $this->assertApiResponse($mensagem);
    }

    /**
     * @test
     */
    public function testReadMensagem()
    {
        $mensagem = $this->makeMensagem();
        $this->json('GET', '/api/v1/mensagems/'.$mensagem->id);

        $this->assertApiResponse($mensagem->toArray());
    }

    /**
     * @test
     */
    public function testUpdateMensagem()
    {
        $mensagem = $this->makeMensagem();
        $editedMensagem = $this->fakeMensagemData();

        $this->json('PUT', '/api/v1/mensagems/'.$mensagem->id, $editedMensagem);

        $this->assertApiResponse($editedMensagem);
    }

    /**
     * @test
     */
    public function testDeleteMensagem()
    {
        $mensagem = $this->makeMensagem();
        $this->json('DELETE', '/api/v1/mensagems/'.$mensagem->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/mensagems/'.$mensagem->id);

        $this->assertResponseStatus(404);
    }
}
