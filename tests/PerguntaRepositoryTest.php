<?php

use App\Models\Pergunta;
use App\Repositories\PerguntaRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PerguntaRepositoryTest extends TestCase
{
    use MakePerguntaTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var PerguntaRepository
     */
    protected $perguntaRepo;

    public function setUp()
    {
        parent::setUp();
        $this->perguntaRepo = App::make(PerguntaRepository::class);
    }

    /**
     * @test create
     */
    public function testCreatePergunta()
    {
        $pergunta = $this->fakePerguntaData();
        $createdPergunta = $this->perguntaRepo->create($pergunta);
        $createdPergunta = $createdPergunta->toArray();
        $this->assertArrayHasKey('id', $createdPergunta);
        $this->assertNotNull($createdPergunta['id'], 'Created Pergunta must have id specified');
        $this->assertNotNull(Pergunta::find($createdPergunta['id']), 'Pergunta with given id must be in DB');
        $this->assertModelData($pergunta, $createdPergunta);
    }

    /**
     * @test read
     */
    public function testReadPergunta()
    {
        $pergunta = $this->makePergunta();
        $dbPergunta = $this->perguntaRepo->find($pergunta->id);
        $dbPergunta = $dbPergunta->toArray();
        $this->assertModelData($pergunta->toArray(), $dbPergunta);
    }

    /**
     * @test update
     */
    public function testUpdatePergunta()
    {
        $pergunta = $this->makePergunta();
        $fakePergunta = $this->fakePerguntaData();
        $updatedPergunta = $this->perguntaRepo->update($fakePergunta, $pergunta->id);
        $this->assertModelData($fakePergunta, $updatedPergunta->toArray());
        $dbPergunta = $this->perguntaRepo->find($pergunta->id);
        $this->assertModelData($fakePergunta, $dbPergunta->toArray());
    }

    /**
     * @test delete
     */
    public function testDeletePergunta()
    {
        $pergunta = $this->makePergunta();
        $resp = $this->perguntaRepo->delete($pergunta->id);
        $this->assertTrue($resp);
        $this->assertNull(Pergunta::find($pergunta->id), 'Pergunta should not exist in DB');
    }
}
