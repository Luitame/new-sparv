<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PerguntaApiTest extends TestCase
{
    use MakePerguntaTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreatePergunta()
    {
        $pergunta = $this->fakePerguntaData();
        $this->json('POST', '/api/v1/perguntas', $pergunta);

        $this->assertApiResponse($pergunta);
    }

    /**
     * @test
     */
    public function testReadPergunta()
    {
        $pergunta = $this->makePergunta();
        $this->json('GET', '/api/v1/perguntas/'.$pergunta->id);

        $this->assertApiResponse($pergunta->toArray());
    }

    /**
     * @test
     */
    public function testUpdatePergunta()
    {
        $pergunta = $this->makePergunta();
        $editedPergunta = $this->fakePerguntaData();

        $this->json('PUT', '/api/v1/perguntas/'.$pergunta->id, $editedPergunta);

        $this->assertApiResponse($editedPergunta);
    }

    /**
     * @test
     */
    public function testDeletePergunta()
    {
        $pergunta = $this->makePergunta();
        $this->json('DELETE', '/api/v1/perguntas/'.$pergunta->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/perguntas/'.$pergunta->id);

        $this->assertResponseStatus(404);
    }
}
