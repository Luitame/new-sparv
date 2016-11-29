<?php

use App\Models\Modelo;
use App\Repositories\ModeloRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ModeloRepositoryTest extends TestCase
{
    use MakeModeloTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var ModeloRepository
     */
    protected $modeloRepo;

    public function setUp()
    {
        parent::setUp();
        $this->modeloRepo = App::make(ModeloRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateModelo()
    {
        $modelo = $this->fakeModeloData();
        $createdModelo = $this->modeloRepo->create($modelo);
        $createdModelo = $createdModelo->toArray();
        $this->assertArrayHasKey('id', $createdModelo);
        $this->assertNotNull($createdModelo['id'], 'Created Modelo must have id specified');
        $this->assertNotNull(Modelo::find($createdModelo['id']), 'Modelo with given id must be in DB');
        $this->assertModelData($modelo, $createdModelo);
    }

    /**
     * @test read
     */
    public function testReadModelo()
    {
        $modelo = $this->makeModelo();
        $dbModelo = $this->modeloRepo->find($modelo->id);
        $dbModelo = $dbModelo->toArray();
        $this->assertModelData($modelo->toArray(), $dbModelo);
    }

    /**
     * @test update
     */
    public function testUpdateModelo()
    {
        $modelo = $this->makeModelo();
        $fakeModelo = $this->fakeModeloData();
        $updatedModelo = $this->modeloRepo->update($fakeModelo, $modelo->id);
        $this->assertModelData($fakeModelo, $updatedModelo->toArray());
        $dbModelo = $this->modeloRepo->find($modelo->id);
        $this->assertModelData($fakeModelo, $dbModelo->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteModelo()
    {
        $modelo = $this->makeModelo();
        $resp = $this->modeloRepo->delete($modelo->id);
        $this->assertTrue($resp);
        $this->assertNull(Modelo::find($modelo->id), 'Modelo should not exist in DB');
    }
}
