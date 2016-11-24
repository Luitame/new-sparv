<?php

use App\Models\VisorPontuacao;
use App\Repositories\VisorPontuacaoRepository;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class VisorPontuacaoRepositoryTest extends TestCase
{
    use MakeVisorPontuacaoTrait, ApiTestTrait, DatabaseTransactions;

    /**
     * @var VisorPontuacaoRepository
     */
    protected $visorPontuacaoRepo;

    public function setUp()
    {
        parent::setUp();
        $this->visorPontuacaoRepo = App::make(VisorPontuacaoRepository::class);
    }

    /**
     * @test create
     */
    public function testCreateVisorPontuacao()
    {
        $visorPontuacao = $this->fakeVisorPontuacaoData();
        $createdVisorPontuacao = $this->visorPontuacaoRepo->create($visorPontuacao);
        $createdVisorPontuacao = $createdVisorPontuacao->toArray();
        $this->assertArrayHasKey('id', $createdVisorPontuacao);
        $this->assertNotNull($createdVisorPontuacao['id'], 'Created VisorPontuacao must have id specified');
        $this->assertNotNull(VisorPontuacao::find($createdVisorPontuacao['id']), 'VisorPontuacao with given id must be in DB');
        $this->assertModelData($visorPontuacao, $createdVisorPontuacao);
    }

    /**
     * @test read
     */
    public function testReadVisorPontuacao()
    {
        $visorPontuacao = $this->makeVisorPontuacao();
        $dbVisorPontuacao = $this->visorPontuacaoRepo->find($visorPontuacao->id);
        $dbVisorPontuacao = $dbVisorPontuacao->toArray();
        $this->assertModelData($visorPontuacao->toArray(), $dbVisorPontuacao);
    }

    /**
     * @test update
     */
    public function testUpdateVisorPontuacao()
    {
        $visorPontuacao = $this->makeVisorPontuacao();
        $fakeVisorPontuacao = $this->fakeVisorPontuacaoData();
        $updatedVisorPontuacao = $this->visorPontuacaoRepo->update($fakeVisorPontuacao, $visorPontuacao->id);
        $this->assertModelData($fakeVisorPontuacao, $updatedVisorPontuacao->toArray());
        $dbVisorPontuacao = $this->visorPontuacaoRepo->find($visorPontuacao->id);
        $this->assertModelData($fakeVisorPontuacao, $dbVisorPontuacao->toArray());
    }

    /**
     * @test delete
     */
    public function testDeleteVisorPontuacao()
    {
        $visorPontuacao = $this->makeVisorPontuacao();
        $resp = $this->visorPontuacaoRepo->delete($visorPontuacao->id);
        $this->assertTrue($resp);
        $this->assertNull(VisorPontuacao::find($visorPontuacao->id), 'VisorPontuacao should not exist in DB');
    }
}
