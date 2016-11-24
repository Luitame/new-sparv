<?php

use App\Models\InstrucaoInicial;
use App\Repositories\InstrucaoInicialRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class InstrucaoInicialRepositoryTest extends TestCase
{
    use MakeInstrucaoInicialTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var InstrucaoInicialRepository
     */
    protected $instrucaoInicialRepo;

    public function setUp()
    {
        parent::setUp();
        $this->instrucaoInicialRepo = App::make(InstrucaoInicialRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateInstrucaoInicial()
    {
        $instrucaoInicial = $this->fakeInstrucaoInicialData();
        $createdInstrucaoInicial = $this->instrucaoInicialRepo->create($instrucaoInicial);
        $createdInstrucaoInicial = $createdInstrucaoInicial->toArray();
        $this->assertArrayHasKey('id', $createdInstrucaoInicial);
        $this->assertNotNull($createdInstrucaoInicial['id'], 'Created InstrucaoInicial must have id specified');
        $this->assertNotNull(InstrucaoInicial::find($createdInstrucaoInicial['id']), 'InstrucaoInicial with given id must be in DB');
        $this->assertModelData($instrucaoInicial, $createdInstrucaoInicial);
    }

    /**
     * @test read
     */
    public function testReadInstrucaoInicial()
    {
        $instrucaoInicial = $this->makeInstrucaoInicial();
        $dbInstrucaoInicial = $this->instrucaoInicialRepo->find($instrucaoInicial->id);
        $dbInstrucaoInicial = $dbInstrucaoInicial->toArray();
        $this->assertModelData($instrucaoInicial->toArray(), $dbInstrucaoInicial);
    }

    /**
     * @test update
     */
    public function testUpdateInstrucaoInicial()
    {
        $instrucaoInicial = $this->makeInstrucaoInicial();
        $fakeInstrucaoInicial = $this->fakeInstrucaoInicialData();
        $updatedInstrucaoInicial = $this->instrucaoInicialRepo->update($fakeInstrucaoInicial, $instrucaoInicial->id);
        $this->assertModelData($fakeInstrucaoInicial, $updatedInstrucaoInicial->toArray());
        $dbInstrucaoInicial = $this->instrucaoInicialRepo->find($instrucaoInicial->id);
        $this->assertModelData($fakeInstrucaoInicial, $dbInstrucaoInicial->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteInstrucaoInicial()
    {
        $instrucaoInicial = $this->makeInstrucaoInicial();
        $resp = $this->instrucaoInicialRepo->delete($instrucaoInicial->id);
        $this->assertTrue($resp);
        $this->assertNull(InstrucaoInicial::find($instrucaoInicial->id), 'InstrucaoInicial should not exist in DB');
    }
}
