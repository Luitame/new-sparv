<?php

use App\Models\RegraExtra;
use App\Repositories\RegraExtraRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RegraExtraRepositoryTest extends TestCase
{
    use MakeRegraExtraTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var RegraExtraRepository
     */
    protected $regraExtraRepo;

    public function setUp()
    {
        parent::setUp();
        $this->regraExtraRepo = App::make(RegraExtraRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateRegraExtra()
    {
        $regraExtra = $this->fakeRegraExtraData();
        $createdRegraExtra = $this->regraExtraRepo->create($regraExtra);
        $createdRegraExtra = $createdRegraExtra->toArray();
        $this->assertArrayHasKey('id', $createdRegraExtra);
        $this->assertNotNull($createdRegraExtra['id'], 'Created RegraExtra must have id specified');
        $this->assertNotNull(RegraExtra::find($createdRegraExtra['id']), 'RegraExtra with given id must be in DB');
        $this->assertModelData($regraExtra, $createdRegraExtra);
    }

    /**
     * @test read
     */
    public function testReadRegraExtra()
    {
        $regraExtra = $this->makeRegraExtra();
        $dbRegraExtra = $this->regraExtraRepo->find($regraExtra->id);
        $dbRegraExtra = $dbRegraExtra->toArray();
        $this->assertModelData($regraExtra->toArray(), $dbRegraExtra);
    }

    /**
     * @test update
     */
    public function testUpdateRegraExtra()
    {
        $regraExtra = $this->makeRegraExtra();
        $fakeRegraExtra = $this->fakeRegraExtraData();
        $updatedRegraExtra = $this->regraExtraRepo->update($fakeRegraExtra, $regraExtra->id);
        $this->assertModelData($fakeRegraExtra, $updatedRegraExtra->toArray());
        $dbRegraExtra = $this->regraExtraRepo->find($regraExtra->id);
        $this->assertModelData($fakeRegraExtra, $dbRegraExtra->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteRegraExtra()
    {
        $regraExtra = $this->makeRegraExtra();
        $resp = $this->regraExtraRepo->delete($regraExtra->id);
        $this->assertTrue($resp);
        $this->assertNull(RegraExtra::find($regraExtra->id), 'RegraExtra should not exist in DB');
    }
}
