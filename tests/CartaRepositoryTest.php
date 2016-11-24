<?php

use App\Models\Carta;
use App\Repositories\CartaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class CartaRepositoryTest extends TestCase
{
    use MakeCartaTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var CartaRepository
     */
    protected $cartaRepo;

    public function setUp()
    {
        parent::setUp();
        $this->cartaRepo = App::make(CartaRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateCarta()
    {
        $carta = $this->fakeCartaData();
        $createdCarta = $this->cartaRepo->create($carta);
        $createdCarta = $createdCarta->toArray();
        $this->assertArrayHasKey('id', $createdCarta);
        $this->assertNotNull($createdCarta['id'], 'Created Carta must have id specified');
        $this->assertNotNull(Carta::find($createdCarta['id']), 'Carta with given id must be in DB');
        $this->assertModelData($carta, $createdCarta);
    }

    /**
     * @test read
     */
    public function testReadCarta()
    {
        $carta = $this->makeCarta();
        $dbCarta = $this->cartaRepo->find($carta->id);
        $dbCarta = $dbCarta->toArray();
        $this->assertModelData($carta->toArray(), $dbCarta);
    }

    /**
     * @test update
     */
    public function testUpdateCarta()
    {
        $carta = $this->makeCarta();
        $fakeCarta = $this->fakeCartaData();
        $updatedCarta = $this->cartaRepo->update($fakeCarta, $carta->id);
        $this->assertModelData($fakeCarta, $updatedCarta->toArray());
        $dbCarta = $this->cartaRepo->find($carta->id);
        $this->assertModelData($fakeCarta, $dbCarta->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteCarta()
    {
        $carta = $this->makeCarta();
        $resp = $this->cartaRepo->delete($carta->id);
        $this->assertTrue($resp);
        $this->assertNull(Carta::find($carta->id), 'Carta should not exist in DB');
    }
}
