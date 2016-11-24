<?php

use App\Models\Tempo;
use App\Repositories\TempoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class TempoRepositoryTest extends TestCase
{
    use MakeTempoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var TempoRepository
     */
    protected $tempoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->tempoRepo = App::make(TempoRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateTempo()
    {
        $tempo = $this->fakeTempoData();
        $createdTempo = $this->tempoRepo->create($tempo);
        $createdTempo = $createdTempo->toArray();
        $this->assertArrayHasKey('id', $createdTempo);
        $this->assertNotNull($createdTempo['id'], 'Created Tempo must have id specified');
        $this->assertNotNull(Tempo::find($createdTempo['id']), 'Tempo with given id must be in DB');
        $this->assertModelData($tempo, $createdTempo);
    }

    /**
     * @test read
     */
    public function testReadTempo()
    {
        $tempo = $this->makeTempo();
        $dbTempo = $this->tempoRepo->find($tempo->id);
        $dbTempo = $dbTempo->toArray();
        $this->assertModelData($tempo->toArray(), $dbTempo);
    }

    /**
     * @test update
     */
    public function testUpdateTempo()
    {
        $tempo = $this->makeTempo();
        $fakeTempo = $this->fakeTempoData();
        $updatedTempo = $this->tempoRepo->update($fakeTempo, $tempo->id);
        $this->assertModelData($fakeTempo, $updatedTempo->toArray());
        $dbTempo = $this->tempoRepo->find($tempo->id);
        $this->assertModelData($fakeTempo, $dbTempo->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteTempo()
    {
        $tempo = $this->makeTempo();
        $resp = $this->tempoRepo->delete($tempo->id);
        $this->assertTrue($resp);
        $this->assertNull(Tempo::find($tempo->id), 'Tempo should not exist in DB');
    }
}
