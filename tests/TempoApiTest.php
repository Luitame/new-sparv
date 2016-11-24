<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TempoApiTest extends TestCase
{
    use MakeTempoTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateTempo()
    {
        $tempo = $this->fakeTempoData();
        $this->json('POST', '/api/v1/tempos', $tempo);

        $this->assertApiResponse($tempo);
    }

    /**
     * @test
     */
    public function testReadTempo()
    {
        $tempo = $this->makeTempo();
        $this->json('GET', '/api/v1/tempos/'.$tempo->id);

        $this->assertApiResponse($tempo->toArray());
    }

    /**
     * @test
     */
    public function testUpdateTempo()
    {
        $tempo = $this->makeTempo();
        $editedTempo = $this->fakeTempoData();

        $this->json('PUT', '/api/v1/tempos/'.$tempo->id, $editedTempo);

        $this->assertApiResponse($editedTempo);
    }

    /**
     * @test
     */
    public function testDeleteTempo()
    {
        $tempo = $this->makeTempo();
        $this->json('DELETE', '/api/v1/tempos/'.$tempo->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/tempos/'.$tempo->id);

        $this->assertResponseStatus(404);
    }
}
