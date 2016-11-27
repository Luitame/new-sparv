<?php

use App\Models\Fase;
use App\Repositories\FaseRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class FaseRepositoryTest extends TestCase
{
    use MakeFaseTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var FaseRepository
     */
    protected $faseRepo;

    public function setUp()
    {
        parent::setUp();
        $this->faseRepo = App::make(FaseRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateFase()
    {
        $fase = $this->fakeFaseData();
        $createdFase = $this->faseRepo->create($fase);
        $createdFase = $createdFase->toArray();
        $this->assertArrayHasKey('id', $createdFase);
        $this->assertNotNull($createdFase['id'], 'Created Fase must have id specified');
        $this->assertNotNull(Fase::find($createdFase['id']), 'Fase with given id must be in DB');
        $this->assertModelData($fase, $createdFase);
    }

    /**
     * @test read
     */
    public function testReadFase()
    {
        $fase = $this->makeFase();
        $dbFase = $this->faseRepo->find($fase->id);
        $dbFase = $dbFase->toArray();
        $this->assertModelData($fase->toArray(), $dbFase);
    }

    /**
     * @test update
     */
    public function testUpdateFase()
    {
        $fase = $this->makeFase();
        $fakeFase = $this->fakeFaseData();
        $updatedFase = $this->faseRepo->update($fakeFase, $fase->id);
        $this->assertModelData($fakeFase, $updatedFase->toArray());
        $dbFase = $this->faseRepo->find($fase->id);
        $this->assertModelData($fakeFase, $dbFase->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteFase()
    {
        $fase = $this->makeFase();
        $resp = $this->faseRepo->delete($fase->id);
        $this->assertTrue($resp);
        $this->assertNull(Fase::find($fase->id), 'Fase should not exist in DB');
    }
}
