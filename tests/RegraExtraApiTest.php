<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegraExtraApiTest extends TestCase
{
    use MakeRegraExtraTrait, ApiTestTrait, WithoutMiddleware, DatabaseTransactions;

    /**
     * @test
     */
    public function testCreateRegraExtra()
    {
        $regraExtra = $this->fakeRegraExtraData();
        $this->json('POST', '/api/v1/regraExtras', $regraExtra);

        $this->assertApiResponse($regraExtra);
    }

    /**
     * @test
     */
    public function testReadRegraExtra()
    {
        $regraExtra = $this->makeRegraExtra();
        $this->json('GET', '/api/v1/regraExtras/'.$regraExtra->id);

        $this->assertApiResponse($regraExtra->toArray());
    }

    /**
     * @test
     */
    public function testUpdateRegraExtra()
    {
        $regraExtra = $this->makeRegraExtra();
        $editedRegraExtra = $this->fakeRegraExtraData();

        $this->json('PUT', '/api/v1/regraExtras/'.$regraExtra->id, $editedRegraExtra);

        $this->assertApiResponse($editedRegraExtra);
    }

    /**
     * @test
     */
    public function testDeleteRegraExtra()
    {
        $regraExtra = $this->makeRegraExtra();
        $this->json('DELETE', '/api/v1/regraExtras/'.$regraExtra->iidd);

        $this->assertApiSuccess();
        $this->json('GET', '/api/v1/regraExtras/'.$regraExtra->id);

        $this->assertResponseStatus(404);
    }
}
